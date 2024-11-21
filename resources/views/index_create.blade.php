@extends ('fornecedorPrincipal')
@section ('content')
    <h1>CADASTRO</h1>
	@if(old('insert'))
<div class="alert alert-success">
	<strong>ESTE FORNECEDOR JÁ ESTÁ CADASTRADO NESTE CPF OU CNPJ</strong>
</div>
@endif
<form action="fornecedor/listar" method="POST">	
    @csrf
    <input type="hidden" name="insert" value="insert">
	<div class="form-group">
		<label>NOME / NOME DA EMPRESA:</label>
		<input type="text" name="name" class="form-control" />
        @error ('name')
        <span class="text-danger small">{{$message}}</span>
        @enderror
	</div>
	<div class="form-group">
		<label>CPF OU CNPJ:</label>
		<input type="text" name="cpf_ou_cnpj" class="form-control">
        @error ('cpf_ou_cnpj')
        <span class="text-danger small">{{$message}}</span>
        @enderror
	</div>
	<div class="form-group">
		<label>TELEFONE: ('EX : 0000-0000')</label>
		<input type="text" name="telefone" class="form-control">
        @error ('telefone')
        <span class="text-danger small">{{$message}}</span>
        @enderror
	</div>
	<div class="form-group">
		<label>ENDERECO:</label>
		<input type="text" name="endereco" class="form-control">
        @error ('endereco')
        <span class="text-danger small">{{$message}}</span>
        @enderror
	</div>	
	<button type="submit" class="btn btn-success">ACEPTAR</button>
	<a class="btn btn-dark btn-info" href="{{route('fornecedor.listar')}}">LISTADO</a>
</form>
@endsection