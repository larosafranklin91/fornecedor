@extends ('fornecedorPrincipal')
@section ('content')

<h1>LISTADO</h1>
@if(old('insert'))
<div class="alert alert-success">
	<strong>FORNECEDOR CADASTRADO COM SUCESSO</strong>
</div>
@endif
@if(old('update'))
<div class="alert alert-success">
	<strong>FORNECEDOR ATUALIZADO COM SUCESSO</strong>
</div>
@endif
@if(old('eliminar'))
<div class="alert alert-success">
	<strong>FORNECEDOR ELIMINADO COM SUCESSO</strong>
</div>
@endif
<table width="60%" class="table table-striped table-bordered table-hover">
	<tr>		
		<td>NOME</td>
		<td>CPF OU CNPJ</td>
		<td>TELEFONE</td>
		<td>ENDERECO</td>
		<td>EDITAR</td>
		<td>ELIMINAR</td>
	</tr>
@foreach ($fornecedors as $c)
	<tr>		
		<td>{{ $c->name}}</td>
		<td>{{ $c->cpf_ou_cnpj}}</td>
		<td>{{ $c->telefone}}</td>
		<td>{{ $c->endereco}}</td>		
		<td><a class="btn btn-dark btn-info" href="{{route('fornecedor.edit', $c->id)}}">EDITAR</a></td>	
		<td><form action="{{ route('fornecedor.eliminar', $c->id)}}"  method="POST">
             @csrf
			 @method('delete')
			 <input type="submit" value="DEL" class="btn btn-dark">
			 <input type="hidden" name="eliminar" value="eliminar">
		</form></td>	
		
		
	</tr>
@endforeach
</table>
<a class="btn btn-dark btn-info" href="{{route('fornecedor.create')}}">INICIO</a>
@endsection


