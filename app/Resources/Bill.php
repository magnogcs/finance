<?php

namespace Bdgt\Resources;

use Bdgt\Resources\Model;
use DateInterval;
use DateTime;

class Bill extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'bills';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'label',
        'start_date',
        'frequency',
        'amount',
        'user_id'
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function getTotalAttribute()
    {
        $total = 0;
        foreach ($this->transactions as $transaction) {
            if ($transaction->date > $this->lastDue && $transaction->date < $this->nextDue) {
                if (!$transaction->inflow) {
                    $total += $transaction->amount;
                }
            }
        }
        return $total;
    }

    public function getPaidAttribute()
    {
        if ($this->total >= $this->amount) {
            return true;
        }
        return false;
    }

    public function getDueDatesForInterval($intervalStart, $intervalEnd, $frequency, $initialStart)
    {
        $intervalStart = new DateTime(date('Y-m-d', strtotime($intervalStart)));
        $intervalEnd   = new DateTime(date('Y-m-d', strtotime($intervalEnd)));
        $initialStart  = new DateTime(date('Y-m-d', strtotime($initialStart)));
        $frequency     = new DateInterval('P' . $frequency . 'D');

        $dates = [];
        $date  = $initialStart;

        while ($date < $intervalStart) {
            $date->add($frequency);
        }

        while ($date <= $intervalEnd) {
            $dates[] = $date->format('Y-m-d');
            $date->add($frequency);
        }

        return $dates;
    }

    public function getNextDueAttribute()
    {
        if (!$this->cachedNextDue) {
            $startDate = new DateTime(date('Y-m-d 23:59:59', strtotime($this->start_date)));
            $currentDate = new DateTime(date('Y-m-d'));
            $frequency = new DateInterval('P' . $this->frequency . 'D');

            $date = $startDate;

            while ($date <= $currentDate) {
                $date->add($frequency);
            }

            $this->cachedNextDue = $date->format('Y-m-d');
        }

        return $this->cachedNextDue;
    }

    public function getLastDueAttribute()
    {
        if (!$this->cachedLastDue) {
            $startDate = new DateTime(date('Y-m-d', strtotime($this->start_date)));
            $currentDate = new DateTime(date('Y-m-d'));
            $frequency = new DateInterval('P' . $this->frequency . 'D');

            $date = $startDate;

            while ($date <= $currentDate) {
                $date->add($frequency);
            }

            $this->cachedLastDue = $date->sub($frequency)->format('Y-m-d');
        }

        return $this->cachedLastDue;
    }
}
