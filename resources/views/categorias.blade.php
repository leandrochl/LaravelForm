@extends('layout.app', ["current" => "categorias"])

@section('body')

  <div class="card border">
    <div class="card-body">
      <h5 class="card-title">Cadastro de categorias</h5>

      @if(count($cats) > 0)
      <table class="table table-ordered table-hover">
        <thead>
          <tr>
            <th>Código</th>
            <th>Categoria</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          @foreach($cats as $c)

          <tr>
            <td>{{$c->id}}</td>
            <td>{{$c->nome}}</td>
            <td>
              <a class="btn btn-primary" href="/categorias/editar/{{$c->id}}">Editar</a>
              <a class="btn btn-danger"href="/categorias/apagar/{{$c->id}}">Excluir</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      @endif
    </div>
    <div class="card-footer">
      <a class="btn btn-success" href="/categorias/novo" role="button">Nova categoria</a>
    </div>
  </div>

@endsection
