@extends('template.principal')

@section('conteudo')
<h2 align="center">Detalhes</h2>
<section class="container">
  <table class="table table-striped">
      <tr>
        <th>Nome</th>
        <td>{{ $aluno->nome }}</td>
      </tr>
      <tr>
        <th>Data de nascimento</th>
        <td>{{ $aluno->data_nascimento }}</td>
      </tr>

      <tr>
        <th>Data de criação</th>
        <td>{{ $aluno->created_at }}</td>
      </tr>
      <tr>
        <th>Data de atualização</th>
        <td>{{ $aluno->updated_at }}</td>
      </tr>
  </table>

  <h2 align="center">Cursos</h2>
<table class="table table-striped">
  <tbody>
    @forelse ($aluno->cursos as $curso)
      <tr>
        <td>{{ $curso->professor_curso->curso->nome }} - {{ $curso->professor_curso->professor->nome }}</td>
      </tr>
    @empty
      <p class="alert alert-warning">Nenhuma curso associado.</p>
    @endforelse
  </tbody>
</table>



  <div>
    @if(session('associado') == 1)
      <div class="alert alert-success">
        Curso associado com sucesso.
      </div>
    @endif
    <form action="{{ route('aluno.associar', ['id' => $aluno->id]) }}" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <label>Curso</label>
        <select class="form-control" name="professores_cursos_id">
          <option disabled selected>Escolha</option>
          @foreach ($cursos as $curso)
            <option value="{{ $curso->id }}">{{ $curso->curso->nome }} - {{ $curso->professor->nome }}</option>
          @endforeach
        </select>
      </div>
      <button type="submit" class="btn btn-success">Associar</button>
    </form>
  </div>
</section>
@endsection
