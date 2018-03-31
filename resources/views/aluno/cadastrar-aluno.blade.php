@extends('template.principal')

@section('conteudo')
	<h2 align="center">Cadastro de Aluno</h2>
	<div class="container">
		<div class="alert alert-warning">
			<strong style="color: red;">*</strong> Campo obrigatório.
		</div>
		@if(session('save') == 1)
		<div class="alert alert-success">
			Aluno Salvo com sucesso.
		</div>
		@endif
		@if(count($errors->all()) > 0)
		<div class="alert alert-danger">
			Verifique atentamente os campos.
		</div>
		@endif
		<form method="post" action="{{ route('cadastrar-aluno') }}">
			{{ csrf_field() }}
			<div class="row">
				<fieldset>
					<legend>Dados pessoais</legend>
					<div class="form-group col-md-8">
						<label for="nome">Nome Completo <span style="color: red;">*</span></label>
						<input id="nome" class="form-control" type="text" name="nome" value="{{ old('nome') }}">
						<span class="help-block">
							@if($errors->first('nome') != null)
							{{$errors->first('nome')}}
							@endif
						</span>
					</div>
					<div class="form-group col-md-4">
						<label for="data">Data de nascimento <span style="color: red;">*</span></label>
						<input id="data" class="form-control" type="date" name="data_nascimento" value="{{ old('data_nascimento') }}">
						<span class="help-block">
							@if($errors->first('data_nascimento') != null)
							{{$errors->first('data_nascimento')}}
							@endif
						</span>
					</div>
				</fieldset>
				<fieldset>
					<legend>Endereço</legend>
					<div class="form-group col-md-3">
						<label for="cep">CEP <span style="color: red;">*</span></label>
						<input id="cep" class="form-control" type="text" name="cep" maxlength="8" onkeyup="verificaCep()" value="{{ old('cep') }}">
						<span class="help-block">
							@if($errors->first('cep') != null)
							{{$errors->first('cep')}}
							@endif
						</span>
					</div>
					<div class="form-group col-md-6">
						<label for="logradouro">Logradouro <span style="color: red;">*</span></label>
						<input id="logradouro" class="form-control" type="text" name="logradouro" value="{{ old('logradouro') }}">
						<span class="help-block">
							@if($errors->first('logradouro') != null)
							{{$errors->first('logradouro')}}
							@endif
						</span>
					</div>
					<div class="form-group col-md-3">
						<label for="numero">Nº da residência <span style="color: red;">*</span></label>
						<input id="numero" class="form-control" type="text" name="numero" maxlength="4" value="{{ old('numero') }}">
						<span class="help-block">
							@if($errors->first('numero') != null)
							{{$errors->first('numero')}}
							@endif
						</span>
					</div>
					<div class="form-group col-md-4">
						<label for="bairro">Bairro <span style="color: red;">*</span></label>
						<input id="bairro" class="form-control" type="text" name="bairro" value="{{ old('bairro') }}">
						<span class="help-block">
							@if($errors->first('bairro') != null)
							{{$errors->first('bairro')}}
							@endif
						</span>
					</div>
					<div class="form-group col-md-4">
						<label for="estado">Estado <span style="color: red;">*</span></label>
						<input id="estado" class="form-control" type="text" name="estado" value="{{ old('estado') }}">
						<span class="help-block">
							@if($errors->first('estado') != null)
							{{$errors->first('estado')}}
							@endif
						</span>
					</div>
					<div class="form-group col-md-4">
						<label for="cidade">Cidade <span style="color: red;">*</span></label>
						<input id="cidade" class="form-control" type="text" name="cidade" value="{{ old('cidade') }}">
						<span class="help-block">
							@if($errors->first('cidade') != null)
							{{$errors->first('cidade')}}
							@endif
						</span>
					</div>
				</fieldset>
			</div>
			<button class="btn btn-success">Cadastrar</button>
		</form>
	</div>
@endsection