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
				<form method="post" action="{{ route('aluno.destroy', ['id' => $aluno->id_aluno]) }}">
					{{ csrf_field() }}
					<a class="btn btn-info" href="{{ route('aluno.show', ['id' => $aluno->id]) }}">Detalhes</a>
					<input type="hidden" name="_method" value="delete">
					<a href="{{ route('aluno.edit', ['id' => $aluno->id_aluno]) }}" class="btn btn-warning">Alterar</a>
					<button class="btn btn-danger">Excluir</button>
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
<a href="{{ route('aluno.pdf') }}" target="_blank" class="btn btn-success"><span class="glyphicon glyphicon-open-file" aria-hidden="true"></span> Gerar PDF</a>
@else
<div class="alert alert-danger">
	Não possui nenhum aluno cadastrado!
</div>
@endif
</section>
@endsection
