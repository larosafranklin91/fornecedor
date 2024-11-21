@extends ('fornecedorPrincipal')
@section ('content')

<h1>EDITAR - CPF OU CNPJ: {{$cadastro->cpf_ou_cnpj}}</h1>

<form action="{{ route('fornecedor.update', $cadastro->id)}}" method="POST">
@csrf @method("PUT")
<input type="hidden" name="update" value="update">
	<div class="form-group">
		<label>NOME:</label>
		<input type="text" name="name" class="form-control" value="{{$cadastro->name}}"  >
	</div>		
	<div class="form-group">
		<label>TELEFONE:</label>
		<input type="text" name="telefone" class="form-control"value="{{$cadastro->telefone}}">
	</div>
	<div class="form-group">
		<label>ENDERECO:</label>
		<input type="text" name="endereco" class="form-control"value="{{$cadastro->endereco}}">
	</div>	
	<button type="submit" class="btn btn-success">Editar</button>
</form>

@endsection
