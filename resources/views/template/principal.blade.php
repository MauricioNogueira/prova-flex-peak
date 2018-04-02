<!DOCTYPE html>
	<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Titulo da página</title>
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/css/principal.css">
		<meta charset="utf-8">
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{{ route('index') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a>
				</div>
				<div class="collapse navbar-collapse" id="menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Aluno <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="{{ route('aluno.create') }}">Cadastrar</a></li>
								<li><a href="{{ route('aluno.index') }}">Listar</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Curso <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="{{ route('curso.create') }}">Cadastrar</a></li>
								<li><a href="{{ route('curso.index') }}">Listar</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Professor <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="{{ route('professor.create') }}">Cadastrar</a></li>
								<li><a href="{{ route('professor.index') }}">Listar</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<main>
			@yield('conteudo')
		</main>
		<script type="text/javascript" src="/js/jquery.min.js"></script>
		<script type="text/javascript" src="/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="/js/verifica-cep.js"></script>
	</body>
</html>
