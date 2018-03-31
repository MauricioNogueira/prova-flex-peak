@extends('template.principal')

@section('conteudo')
<h2 align="center">Lista de professores</h2>
<section class="container">
@if(session('alterado') == 1)
<div class="alert alert-success">
	Professor alterado com sucesso.
</div>
@endif
@if(session('excluido') == 1)
<div class="alert alert-danger">
	Professor excluído com sucesso.
</div>
@endif
@if(count($professores) > 0)
<table class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>Data de nascimento</th>
			<th>Ações</th>
		</tr>
	</thead>
	<tbody>
		@foreach($professores as $professor)
		<tr>
			<td>{{ $professor->id_professor }}</td>
			<td>{{ $professor->nome_professor }}</td>
			<td>{{ $professor->data_nascimento_professor }}</td>
			<td>
				
				<form method="post" action="{{ route('excluir-professor', ['id' => $professor->id_professor]) }}">
					<input type="hidden" name="_method" value="delete">
					<a href="{{ route('tela-alterar-professor', ['id' => $professor->id_professor]) }}" class="btn btn-warning">Alterar</a>
					<button type="submit" class="btn btn-danger">Excluir</button>
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
<a href="{{ route('pdf-professor') }}" target="_blank" class="btn btn-success"><span class="glyphicon glyphicon-open-file" aria-hidden="true"></span> Gerar PDF</a>
@else
<div class="alert alert-danger">
	Não possui professor cadastrado.
</div>
@endif
</section>
@endsection