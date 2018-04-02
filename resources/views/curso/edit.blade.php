@extends('template.principal')

@section('conteudo')
<h2 align="center">Alterar Curso</h2>
<section class="container">
	<form method="post" action="{{ route('curso.update', ['id' => $curso->id]) }}">
		<input type="hidden" name="_method" value="PUT">
		{{ csrf_field() }}
		<div class="form-group">
			<label>Nome do curso</label>
			<input type="text" name="nome" class="form-control" value="{{ $curso->nome}}">
			@if($errors->first('nome') != null)
			<span class="help-block">
				{{ $errors->first('nome') }}
			</span>
			@endif
		</div>
		<button style="margin-top: 10px;" class="btn btn-warning">Alterar</button>
	</form>
</section>
@endsection
