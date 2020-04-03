@extends('layout.app')

@section('body')
  <div class="jumbotron bg-light border border-secondary">
    <div class="row">
      <div class="card-deck">
        <div class="card border border-primary">
          <div class="card-body">
            <h5 class="card-title">Cadastro do produtos</h5>
            <p class="card-text">
              Aqui cadastra os seus produtos
            </p>
            <a href="/produtos" class="btn btn-primary">Cadastre</a>
          </div>
        </div>
        <div class="card border border-primary">
          <div class="card-body">
            <h5 class="card-title">Cadastro do departamentos</h5>
            <p class="card-text">
              Aqui cadastra os departamentos
            </p>
            <a href="/produtos" class="btn btn-primary">Cadastre</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
