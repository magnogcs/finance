@extends('app')

@section('breadcrumbs.items')
	<li class="active">{{ trans('labels.categories.plural') }}</li>
@endsection

@section('breadcrumbs.actions')
	<a href="#addCategoryModal" data-toggle="modal" class="{{ config('layout.create_button_class') }}"><i class="fa fa-plus"></i> {{ trans('labels.categories.add_button') }}</a>
@endsection

@section('content')
	<div class="list-group">
		@foreach ($categories as $category)
			<a href="/categories/{{ $category->id }}" class="list-group-item">
				<h4 class="list-group-item-heading">{{ $category->label }}</h4>
				<div class="list-group-item-text">
					<div class="progress">
						<div class="progress-bar
						@if ($category->spent < $category->budgeted)
							progress-bar-success
						@elseif ($category->spent == $category->budgeted)
							progress-bar-warning
						@else
							progress-bar-danger
						@endif
						progress-bar-striped" role="progressbar" aria-valuenow="{{ $category->progress }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $category->progress }}%; min-width: 1%;">
							{{ $category->progress }}%
							<span class="sr-only">{{ $category->progress }}%</span>
						</div>
					</div>
				</div>
				<p class="list-group-item-text pull-right">@money($category->budgeted)</p>
				<p class="list-group-item-text">@money($category->spent) spent / @money($category->budgeted - $category->spent) remaining</p>
			</a>
		@endforeach
	</div>

	@include('category.modals.create')
@endsection