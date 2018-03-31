@extends('template.principal')

@section('conteudo')
<h2 align="center">Cadastrar Curso</h2>
<section class="container">
	@if(session('salvo') == 1)
	<div class="alert alert-success">
		Curso cadastrado com sucesso.
	</div>
	@endif
	<form method="post" action="{{ route('cadastrar-curso') }}">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="nome_curso">Nome</label>
			<input id="nome_curso" class="form-control" type="text" name="nome_curso">
			@if($errors->first('nome_curso') != null)
			<span class="help-block">
				{{ $errors->first('nome_curso') }}
			</span>
			@endif
		</div>
		<button style="margin-top: 10px;" class="btn btn-success">Cadastrar</button>
	</form>
</section>
@endsection