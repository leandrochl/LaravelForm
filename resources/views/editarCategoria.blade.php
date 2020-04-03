@extends('layout.app', ["current" => "categorias"])

@section('body')

  <h4>Editar categoria</h4>

  <div class="card border">
    <div class="card-body">
      <form action="/categorias/{{$cat->id}}" method="post">
        @csrf
        <div class="form-group">
          <label for="nomeCategoria">Nome da categoria<label>
          <input  type="text"
                  class="form-control"
                  name="nomeCategoria"
                  id="nomeCategoria"
                  value="{{$cat->nome}}"
                  placeholder="Categoria">
        </div>
        <button type="submit"
                class="btn btn-primary"
                name="button">Salvar</button>
        <button type="cancel"
                class="btn btn-danger"
                name="button">Cancelar</button>
      </form>
    </div>
  </div>

@endsection
