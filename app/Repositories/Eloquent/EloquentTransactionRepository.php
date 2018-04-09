<?php

namespace Bdgt\Repositories\Eloquent;

use Bdgt\Repositories\Contracts\TransactionRepositoryInterface;
use Bdgt\Resources\Transaction;

class EloquentTransactionRepository extends EloquentRepository implements TransactionRepositoryInterface
{
    public function __construct(Transaction $transaction)
    {
        parent::__construct($transaction);
    }
}
