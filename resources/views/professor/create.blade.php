@extends('template.principal')

@section('conteudo')
<h2 align="center">Cadastrar Professor</h2>
<section class="container">
	@if(session('salvo') == 1)
	<div class="alert alert-success">
		Professor cadastrado com sucesso.
	</div>
	@endif
	<form method="post" action="{{ route('professor.store') }}">
		{{ csrf_field() }}
		<div class="row">
			<div class="form-group col-md-8">
				<label>Nome do professor</label>
				<input type="text" name="nome" class="form-control" value="{{ old('nome') }}">
				@if($errors->first('nome') != null)
				<span class="help-block">
					{{ $errors->first('nome') }}
				</span>
				@endif
			</div>
			<div class="form-group col-md-4">
				<label>Data de nascimento</label>
				<input type="date" name="data_nascimento" class="form-control" value="{{ old('data_nascimento') }}">
				@if($errors->first('data_nascimento') != null)
				<span class="help-block">
					{{ $errors->first('data_nascimento') }}
				</span>
				@endif
			</div>
		</div>
		<button style="margin-top: 10px;" class="btn btn-success">Cadastrar</button>
	</form>
</section>
@endsection
