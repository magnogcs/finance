<ul class="sidebar-nav">
	@section('sidebar-nav')
	<!--
	<li class="sidebar-icon"><a href="/"><i class="fa fa-home fa-2x"></i></a></li>
	<li class="sidebar-divider"></li>
	-->
	<li class="sidebar-icon hidden-xs"><a href="#addTransactionModal" data-toggle="modal"><button class="btn btn-success btn-md"><i class="fa fa-plus"></i> transação</button></a></li>
	<li class="sidebar-divider hidden-xs"></li>
	<li><a href="{{ route('dashboard') }}">Transações</a></li>
	<li><a href="{{ route('categories.index') }}">Categorias</a></li>
	<li><a href="{{ route('goals.index') }}">Metas</a></li>
	<li><a href="{{ route('accounts.index') }}">Contas</a></li>
	<li class="sidebar-divider hidden-xs"></li>
	@foreach ($accounts as $account)
		<li><a href="{{ route('accounts.show', $account->id) }}">{{ $account->name }}<span class="money nav-subtext">{{ $account->balance }}</span></a></li>
	@endforeach
	@show
</ul>
