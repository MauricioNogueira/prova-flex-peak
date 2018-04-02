@extends('template.principal')

@section('conteudo')
<h2 align="center">Alterar Aluno</h2>

<section class="container">
	<form method="post" action="{{ route('aluno.update', ['id' => $aluno->id]) }}">
		<input type="hidden" name="_method" value="PUT">
		{{ csrf_field() }}
			<div class="row">
				<fieldset>
					<legend>Dados pessoais</legend>
					<div class="form-group col-md-8">
						<label for="nome">Nome Completo <span style="color: red;">*</span></label>
						<input id="nome" class="form-control" type="text" name="nome" value="{{ $aluno->nome }}">
						<span class="help-block">
							@if($errors->first('nome') != null)
							{{$errors->first('nome')}}
							@endif
						</span>
					</div>
					<div class="form-group col-md-4">
						<label for="data">Data de nascimento <span style="color: red;">*</span></label>
						<input id="data" class="form-control" type="date" name="data_nascimento" value="{{ $aluno->data_nascimento }}">
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
						<input id="cep" class="form-control" type="text" name="cep" maxlength="8" onkeyup="verificaCep()" value="{{ $aluno->cep }}">
						<span class="help-block">
							@if($errors->first('cep') != null)
							{{$errors->first('cep')}}
							@endif
						</span>
					</div>
					<div class="form-group col-md-6">
						<label for="logradouro">Logradouro <span style="color: red;">*</span></label>
						<input id="logradouro" class="form-control" type="text" name="logradouro" value="{{ $aluno->logradouro }}">
						<span class="help-block">
							@if($errors->first('logradouro') != null)
							{{$errors->first('logradouro')}}
							@endif
						</span>
					</div>
					<div class="form-group col-md-3">
						<label for="numero">Nº da residência <span style="color: red;">*</span></label>
						<input id="numero" class="form-control" type="text" name="numero" maxlength="4" value="{{ $aluno->numero }}">
						<span class="help-block">
							@if($errors->first('numero') != null)
							{{$errors->first('numero')}}
							@endif
						</span>
					</div>
					<div class="form-group col-md-4">
						<label for="bairro">Bairro <span style="color: red;">*</span></label>
						<input id="bairro" class="form-control" type="text" name="bairro" value="{{ $aluno->bairro }}">
						<span class="help-block">
							@if($errors->first('bairro') != null)
							{{$errors->first('bairro')}}
							@endif
						</span>
					</div>
					<div class="form-group col-md-4">
						<label for="estado">Estado <span style="color: red;">*</span></label>
						<input id="estado" class="form-control" type="text" name="estado" value="{{ $aluno->estado }}">
						<span class="help-block">
							@if($errors->first('estado') != null)
							{{$errors->first('estado')}}
							@endif
						</span>
					</div>
					<div class="form-group col-md-4">
						<label for="cidade">Cidade <span style="color: red;">*</span></label>
						<input id="cidade" class="form-control" type="text" name="cidade" value="{{ $aluno->cidade }}">
						<span class="help-block">
							@if($errors->first('cidade') != null)
							{{$errors->first('cidade')}}
							@endif
						</span>
					</div>
				</fieldset>
			</div>
			<button class="btn btn-success">Alterar</button>
		</form>
</section>
@endsection
