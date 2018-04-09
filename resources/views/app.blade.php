<!DOCTYPE html>
<html lang="en">
<head>
	@include('partials.head')
</head>
<body>
	@include('partials.nav')

	<div id="wrapper">

		@if (Auth::user())
		<!-- Sidebar -->
		<div id="sidebar-wrapper">
			@include('partials.sidebar')
		</div>
		@endif
		<!-- /#sidebar-wrapper -->

		<!-- Page Content -->
		<div id="page-content-wrapper">

			@section('alerts')
				@include('alerts')
			@show

			<a class="btn btn-lg btn-block btn-success visible-xs-block" href="#addTransactionModal" data-toggle="modal"><i class="fa fa-plus"></i> Add Transaction</a>

			<!-- Breadcrumbs -->
			@section('breadcrumbs')
			<div class="container-fluid">
				<div class="row">
					<div class="{{ config('layout.grid_class') }}">
						<ol class="breadcrumb">
							<li><a href="{{ route('index') }}">Home</a></li>
							@yield('breadcrumbs.items')
							<div class="pull-right">
								@yield('breadcrumbs.actions')
							</div>
						</ol>
					</div>
				</div>
			</div>
			@show
			<!-- /Breadcrumbs -->

			@yield('top-content')

			<div class="container-fluid">
				<div class="row">
					<div class="{{ config('layout.grid_class') }}">
						@yield('content')
					</div>
				</div>
			</div>

			@if (Auth::user())
				@include('transaction.modals.create')
			@endif
		</div>
	</div>
	<!-- /#page-content-wrapper -->

	
	@include('partials.footer')

	@include('partials.scripts')
</body>
</html>
