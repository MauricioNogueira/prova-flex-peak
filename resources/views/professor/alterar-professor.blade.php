@extends('template.principal')

@section('conteudo')
<h2 align="center">Alterar professor</h2>
<section class="container">
	<form method="get" action="{{ route('alterar-professor', ['id' => $professor->id_professor]) }}">
		<div class="row">
			<div class="form-group col-md-8">
				<label>Nome do professor</label>
				<input type="text" name="nome_professor" class="form-control" value="{{ $professor->nome_professor }}">
				@if($errors->first('nome_professor') != null)
				<span class="help-block">
					{{ $errors->first('nome_professor') }}
				</span>
				@endif
			</div>
			<div class="form-group col-md-4">
				<label>Data de nascimento</label>
				<input type="date" name="data_nascimento_professor" class="form-control" value="{{ $professor->data_nascimento_professor }}">
				@if($errors->first('data_nascimento_professor') != null)
				<span class="help-block">
					{{ $errors->first('data_nascimento_professor') }}
				</span>
				@endif
			</div>
		</div>
		<button style="margin-top: 10px;" class="btn btn-warning">Alterar</button>
	</form>
</section>
@endsection