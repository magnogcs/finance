<thead>
	<tr>
		<th></th>
		<th>Data</th>
		<th>Conta</th>
		<th>Categoria</th>
		<th>beneficiado	</th>
		<th>Entradas</th>
		<th>Saídas</th>
		<th>Pagas</th>
		@if (isset($actionable))
		<th>Ações</th>
		@endif
	</tr>
</thead>
<tbody>
@if (! $transactions->isEmpty())
@foreach ($transactions as $transaction)
	<tr data-id="{{ $transaction->id }}">
		<td>
			<i class="fa fa-flag-o" style="color: {{ $transaction->flair }}"></i>
		</td>
		<td>
			<span data-name="date">{{ date('Y-m-d', strtotime($transaction->date)) }}</span>
		</td>
		<td>
			<span data-name="account_name">
				{{ $transaction->account->name }}
			</span>
		</td>
		<td>
			<span data-name="category_label">
				@if ($transaction->category)
					{{ $transaction->category->label }}
				@endif
			</span>
		</td>
		<td>
			<span data-name="payee">{{ $transaction->payee }}</span>
		</td>
		<td>
			@if ($transaction->inflow)
				<span class="hide">{{ $transaction->amount }}</span><span data-name="amount" class="money">@money($transaction->amount)</span>
			@endif
		</td>
		<td>
			@if (!$transaction->inflow)
				<span class="hide">{{ $transaction->amount }}</span><span data-name="amount" class="money">@money($transaction->amount)</span>
			@endif
		</td>
		<td>
			@if ($transaction->cleared)
				<i class="fa fa-check"></i>
			@else
				<i class="fa fa-check icon-unchecked"></i>
			@endif
		</td>
		@if (isset($actionable))
		<td>
			<button class="btn btn-warning btn-xs edit-transaction">
				<i class="fa fa-pencil"></i>
			</button>

			<button class="btn btn-danger btn-xs delete-transaction">
				<i class="fa fa-remove"></i>
			</button>
		</td>
		@endif
	</tr>
@endforeach
@endif
</tbody>

@section('scripts')
@if (isset($actionable))
<script>
	$('table').DataTable({
		stateSave: true,
		language: {
			info: 'Page _PAGE_ of _PAGES_',
		},
		order: [[1, 'desc']],
		columnDefs: [
			{ "width": "3%", "targets": 0 },
			{ "width": "8%", "targets": 5 },
			{ "width": "8%", "targets": 6 },
			{ "width": "3%", "targets": 7 },
			{ "width": "5%", "targets": 8 }
		],
		pageLength: 25,
		lengthMenu: [ 10, 25, 50 ],
		dom: "<'row'<'col-sm-6'i><'col-sm-6'f>>" +
"<'row'<'col-sm-12'tr>>" +
"<'row'<'col-sm-5'l><'col-sm-7'p>>",
	});

	$('body').on('click', '.edit-transaction', function(e) {
		var transactionId = $(this).closest('tr').data('id');

		$.getJSON('/transactions/' + transactionId, function(transaction) {
			$('#editTransactionModal input[type="text"], select').each(function() {
				$(this).val(transaction[$(this).attr('name')]);
			});
            $('#editTransactionModal input[type="number"]').each(function() {
                $(this).val(transaction[$(this).attr('name')].toFixed(2));
            });
			$('#editTransactionModal input[type="radio"]').each(function() {
				$(this).val([transaction[$(this).attr('name')]]);
			});
			$('#editTransactionModal input:checkbox').each(function() {
				if (transaction[$(this).attr('name')] === 1) {
					$(this).attr('checked', true);
				}
			});
			$('#editTransactionModal .datepicker').each(function() {
				$(this).datepicker('update', moment(transaction[$(this).attr('name')]).format('YYYY-MM-DD'));
			});

			$('#editTransactionModal').find('form').attr('action', '/transactions/' + transactionId);
			$('#editTransactionModal').modal('toggle');
		});
	});

	$('body').on('click', '.delete-transaction', function(e) {
		var transactionId = $(this).closest('tr').data('id');

		$('#deleteTransactionModal').find('form').attr('action', '/transactions/' + transactionId);
		$('#deleteTransactionModal').modal('toggle');
	});
</script>
@endif
@endsection