<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Scripts -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>EDITAR</title>
</head>
<body>	
<h1>Editar Fornecedor </h1>
<form action="{{ route('fornecedor.update', $cadastro->id)}}" method="POST">
@csrf @method("PUT")
	<div class="form-group">
		<label>NOME:</label>
		<input type="text" name="name" class="form-control" value="{{$cadastro->name}}"  >
	</div>	
	<div class="form-group">
		<label>CPF OU CNPJ:</label>
		<input type="text" name="cpf_ou_cnpj" class="form-control"value="{{$cadastro->cpf_ou_cnpj}}" >
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
</body>
</html>