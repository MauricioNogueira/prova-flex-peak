@extends('template.principal')

@section('conteudo')
<h2 align="center">Lista de cursos</h2>
<section class="container">
	@if(session('alterado') == 1)
	<div class="alert alert-success">
		Curso alterado com sucesso.
	</div>
	@endif
	@if(session('excluir') == 1)
	<div class="alert alert-success">
		Curso excluído com sucesso.
	</div>
	@endif
	@if(count($cursos) > 0)
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Nome do curso</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			@foreach($cursos as $curso)
			<tr>
				<td>{{ $curso->nome }}</td>
				<td>
					<form method="post" action="{{ route('curso.destroy', ['id' => $curso->id]) }}">
						<input type="hidden" name="_method" value="delete">
						{{ csrf_field() }}
						<a class="btn btn-warning" href="{{ route('curso.edit', ['id' => $curso->id]) }}">Alterar</a>
						<button class="btn btn-danger">Excluir</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<a href="{{ route('curso.pdf') }}" target="_blank" class="btn btn-success"><span class="glyphicon glyphicon-open-file" aria-hidden="true"></span> Gerar PDF</a>
	@else
	<div class="alert alert-danger">
		Sem registro de cursos.
	</div>
	@endif
</section>
@endsection
