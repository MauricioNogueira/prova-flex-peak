@extends('template.principal')

@section('conteudo')
<h2 align="center">Detalhes</h2>
<section class="container">
  <table class="table table-striped">
      <tr>
        <th>Nome</th>
        <td>{{ $professor->nome }}</td>
      </tr>
      <tr>
        <th>Data de nascimento</th>
        <td>{{ $professor->data_nascimento }}</td>
      </tr>

      <tr>
        <th>Data de criação</th>
        <td>{{ $professor->created_at }}</td>
      </tr>
      <tr>
        <th>Data de atualização</th>
        <td>{{ $professor->updated_at }}</td>
      </tr>
  </table>
  <h2>Cursos</h2>

  <table class="table table-striped">
    <tbody>
      @forelse ($professor->cursos as $curso)
        <tr>
          <td>{{ $curso->nome }}</td>
        </tr>
      @empty
          <p>Nenhum um curso</p>
      @endforelse
    </tbody>
  </table>
    <div>
      @if(session('associado') == 1)
        <div class="alert alert-success">
          Associado com sucesso.
        </div>
      @endif
      <form action="{{  route('professor.associar', ['id' => $professor->id])  }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label>Curso</label>
          <select class="form-control" name="curso_id">
            <option disabled selected>Escolha</option>
            @foreach ($cursos as $curso)
              <option value="{{ $curso->id }}">{{ $curso->nome }}</option>
            @endforeach
          </select>
        </div>
        <button type="submit" class="btn btn-success">Associar disciplina</button>
      </form>
    </div>
</section>
@endsection
