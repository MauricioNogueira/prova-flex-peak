@extends('template.principal')

@section('conteudo')
<h2 align="center">Alterar professor</h2>
<section class="container">
	<form method="post" action="{{ route('professor.update', ['id' => $professor->id]) }}">
		<input name="_method" type="hidden" value="PUT">
		{{ csrf_field() }}
		<div class="row">
			<div class="form-group col-md-8">
				<label>Nome do professor</label>
				<input type="text" name="nome" class="form-control" value="{{ $professor->nome }}">
				@if($errors->first('nome') != null)
				<span class="help-block">
					{{ $errors->first('nome') }}
				</span>
				@endif
			</div>
			<div class="form-group col-md-4">
				<label>Data de nascimento</label>
				<input type="date" name="data_nascimento" class="form-control" value="{{ $professor->data_nascimento }}">
				@if($errors->first('data_nascimento') != null)
				<span class="help-block">
					{{ $errors->first('data_nascimento') }}
				</span>
				@endif
			</div>
		</div>
		<button type="submit" style="margin-top: 10px;" class="btn btn-warning">Alterar</button>
	</form>
</section>
@endsection
