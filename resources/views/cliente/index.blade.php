@extends("templates.main")

@section("title", "Clientes")

@section("formulario")
	<h1>Cadastro de Clientes</h1>
	<form action="/cliente" method="POST" class="row">
		<div class="form-group col-5">
			<label for="nome">Nome:</label>
			<input type="text" name="nome" class=
			"form-control" value="{{ $cliente->nome }}" />
		
		</div>
		<div class="form-group col-5">
			<label for="cpf">CPF:</label>
			<input type="text" id="cpf" class=
			"form-control" value="{{ $cliente->cpf }}" />
		
		</div>
		<div class="form-group col-2">
		@csrf
		<input type="hidden" name="id" value="{{
			$cliente->id
		}}"/>
		
		<a href="/cliente" class="btn btn-primary" style="margin-top: 23px;">
			<i class="bi bi-plus-square"></i>
			Novo
			</a>
		<button type="submit" class="btn btn-success" style="margin-top: 23px;">
			<i class="bi bi-plus-save"></i>
		Salvar
		</button>
		</div>
	</form>
@endsection

@section("tabela")
	<table class="table table-striped" style="margin-top: 50px;">
		<colgroup>
			<col width="200">
			<col width="200">
			<col width="100">
			<col width="100">
		</colgroup>
		<thead>
			<tr>
				<th>Nome</th>
				<th>CPF</th>
				<th>Edit</th>
				<th>Del</th>
			</tr>
		</thead>
	
	<tbody>
		@foreach ($clientes as $cliente)
		<tr>
			<td>{{$cliente->nome}}</td>
			<td>{{$cliente->cpf}}</td>
			<td>
				<a href="/cliente/{{$cliente->id }}/edit"
				class="btn btn-warning">
					<i class="bi bi-pencil-square"></i>
					Edit
				</a>
			</td>
			<td>
				<form action="/cliente/{{$cliente->id}}"
				method="POST">
					@csrf
					<input type="hidden" name="_method" value=
					"DELETE" />
					
					<button type="submit" class="btn 
					btn-danger" 
					onclick="return confirm('Tem certeza?');">
					<i class="bi bi-trash"></i>
					Del
				</form>
			
			</td>
		</tr>
		
		@endforeach
	</tbody>
	
	</table>

@endsection

<script>
	document.addEventListener("DOMContentLoaded",function(){
		$("#cpf").mask("000.000.000-00",{"placeholder":
		"___.___.___-__"});
	});
	
</script>