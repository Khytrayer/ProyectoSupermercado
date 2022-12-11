<div>
<nav class="navbar navbar-light bg-light">
<form method="GET" action="{{ route('productos.index')}}" class="form-inline">
	
	<input type="search" name="searchName" value="{{ $filters['searchName'] }}" placeholder="Buscar producto" class="form-control mr-sm-2">

	<input type="submit" value="Cercar" class="btn btn-outline-success my-2 my-sm-0">
</form>
</nav>
</div>