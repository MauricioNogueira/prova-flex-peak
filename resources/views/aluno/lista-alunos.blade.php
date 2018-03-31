@extends('template.principal')

@section('conteudo')
<h2 align="center">Lista de Alunos</h2>
<section class="container">
@if(session('excluido') == 1)
<div class="alert alert-danger">
	Aluno excluído com sucesso.
</div>
@endif
@if(session('alterado') == 1)
<div class="alert alert-success">
	Aluno Alterado com sucesso.
</div>
@endif
@if(count($alunos) > 0)
<table class="table table-striped">
	<thead>
		<tr>
			<th>Nome</th>
			<th>Data de nascimento</th>
			<th>Ações</th>
		</tr>
	</thead>
	<tbody>
		@foreach($alunos as $aluno)
		<tr>
			<td>{{ $aluno->nome }}</td>
			<td>{{ $aluno->data_nascimento }}</td>
			<td>
				<a href="{{ route('tela-alterar-aluno', ['id' => $aluno->id_aluno]) }}" class="btn btn-warning">Alterar</a>
				<a href="{{ route('excluir-aluno', ['id' => $aluno->id_aluno]) }}" class="btn btn-danger">Excluir</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
<a href="{{ route('pdf-aluno') }}" target="_blank" class="btn btn-success"><span class="glyphicon glyphicon-open-file" aria-hidden="true"></span> Gerar PDF</a>
@else
<div class="alert alert-danger">
	Não possui nenhum aluno cadastrado!
</div>
@endif
</section>
@endsection