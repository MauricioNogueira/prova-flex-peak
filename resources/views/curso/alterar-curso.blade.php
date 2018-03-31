@extends('template.principal')

@section('conteudo')
<h2 align="center">Alterar Curso</h2>
<section class="container">
	<form method="get" action="{{ route('alterar-curso', ['id' => $curso->id_curso]) }}">
		<div class="form-group">
			<label>Nome do curso</label>
			<input type="text" name="nome_curso" class="form-control" value="{{ $curso->nome_curso }}">
			@if($errors->first('nome_curso') != null)
			<span class="help-block">
				{{ $errors->first('nome_curso') }}
			</span>
			@endif
		</div>
		<button style="margin-top: 10px;" class="btn btn-warning">Alterar</button>
	</form>
</section>
@endsection