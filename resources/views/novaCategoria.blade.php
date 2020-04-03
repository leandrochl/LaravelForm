@extends('layout.app', ["current" => "categorias"])

@section('body')

  <h4>Cadastrar categoria</h4>

  <div class="card border">
    <div class="card-body">
      <form action="/categorias" method="post">
        @csrf
        <div class="form-group">
          <label for="nomeCategoria">Nome da categoria<label>
          <input  type="text"
                  class="form-control"
                  name="nomeCategoria"
                  id="nomeCategoria"
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
