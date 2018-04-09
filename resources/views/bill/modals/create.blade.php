@component('partials.modals.form', [
	'id' => 'addBillModal',
	'formAction' => '/bills',
	'title' => trans('labels.bills.modals.create.title'),
	'dismissLabel' => trans('labels.bills.modals.create.close_button'),
	'submitLabel' => trans('labels.bills.modals.create.save_button')
])
	<div class="form-group">
		<label class="col-sm-3 control-label">Titulo</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" name="label" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Valor</label>
		<div class="col-sm-8">
			<input type="number" class="form-control" name="amount" step="0.01" min="0" max="10000">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Data</label>
		<div class="col-sm-8">
			<div class="input-group">
				<input type="text" class="form-control datepicker" name="start_date" required>
				<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
			</div>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Intervalo de dias</label>
		<div class="col-sm-8">
			<input type="number" class="form-control" name="frequency" min="7" max="365" required>
		</div>
	</div>
@endcomponent