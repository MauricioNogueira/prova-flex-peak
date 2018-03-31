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
				<td>{{ $curso->nome_curso }}</td>
				<td>
					<a href="{{ route('tela-alterar-curso', ['id' => $curso->id_curso]) }}" class="btn btn-warning">Alterar</a>
					<a href="{{ route('excluir-curso', ['id' => $curso->id_curso]) }}" class="btn btn-danger">Excluir</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<a href="{{ route('pdf-curso') }}" target="_blank" class="btn btn-success"><span class="glyphicon glyphicon-open-file" aria-hidden="true"></span> Gerar PDF</a>
	@else
	<div class="alert alert-danger">
		Sem registro de cursos. 
	</div>
	@endif
</section>
@endsection