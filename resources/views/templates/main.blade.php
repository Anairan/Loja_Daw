<!DOCTYPE html>
<html>
	<head> 
		<title>@yield("titulo")</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
		rel="stylesheet" integrity=
		"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="
		anonymous"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
		<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js" integrity="sha512-0XDfGxFliYJPFrideYOoxdgNIvrwGTLnmK20xZbCAvPfLGQMzHUsaqZK8ZoH+luXGRxTrS46+Aq400nCnAT0/w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	</head>
	
	<body>
		
		<div class="container">
		
			<nav class="navbar navbar-expand-lg" style=
			"background-color: #e3f2fd;">
				<div class="navbar-nav">
					<a class="nav-link" href="/produto">Produtos</a>
					<a class="nav-link" href="/cliente">Clientes</a>
					<a class="nav-link" href="/venda">Vendas</a>
					<a class="nav-link" href="/relatorio">Relatorios</a>
					
				</div>
			</nav>
			
			@if (Session::get("status")=="salvo")
				<div class="alert alert-success">
					Salvo com sucesso!
				</div>
			@endif
			
			@if (Session::get("status")=="excluido")
				<div class="alert alert-danger">
					Excluido com sucesso!
				</div>
			@endif
			
			@yield("formulario")
			@yield("tabela")
		</div>
	</body>
		
</html>