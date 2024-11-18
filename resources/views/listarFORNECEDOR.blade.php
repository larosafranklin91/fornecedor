<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Scripts -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>LISTAR</title>
</head>
<body>
<h1>LISTAR FORNECEDORES</h1>

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
		<td><form action="{{ route('fornecedor.eliminar', $c->id)}}" method="POST">
             @csrf
			 @method('delete')
			 <input type="submit" value="DEL" class="btn btn-dark">
		</form></td>	
		
		
		
	</tr>
@endforeach
</table>
<a class="btn btn-dark btn-info" href="{{route('fornecedor.cadastro')}}">INICIO</a>

</body>
</html>