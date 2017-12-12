@extends('template')
@section('conteudo')

  <form id="cadastro" method="POST" action="/cadastrar-carro">
    {!! csrf_field() !!}
    <div class="form-group">
      <label>N° Serial do Carro </label>
      <input type="text" class="form-control" name="numbcarro" placeholder="Somente Numeros" maxlength="4" required autofocus>
    </div>

    <div class="form-group">
      <label>Nome Fabricante</label>
      <input type="text" class="form-control" name="marca" placeholder="Ex.: Ford, Fiat, Chrevolet" required>
    </div>

    <div class="form-group">
      <label>Nome Carro</label>
      <input type="text" class="form-control" name="nomecarro" placeholder="Ex.: Pálio Fire, Fiest Hart" required>
    </div>

    <div class="form-group">
      <label>Nome proprietário</label>
      <input type="text" class="form-control" name="proprietario" placeholder="Ex.: Renan Costa, Leandro Lima, Rodrigo Ramos" required>
    </div>

    <div class="form-group">
      <label>Nº Placa</label>
      <input type="text" class="form-control" name="nplaca" placeholder="Ex.: ABC-1234" maxlength="8" required>
    </div>

    <div class="form-group">
      <label>Cor do carro</label>
      <input type="text" class="form-control" name="cor" placeholder="Ex.: Vinho, Prata, Preto">
    </div>


    <div class="form-group">
      <label>Ano de fabricação</label>
      <input type="number" class="form-control" name="fabricacao" placeholder="Somente Ano Ex.: 2016, 2017, 2018" max="2018">
    </div>

    <button type="submit" class="btn btn-outline-success col-md">
      <i class="fa fa-check-circle"></i>
      Salvar Novo Carro
      <i class="fa fa-car" aria-hidden="true"></i>
    </button>
    <a class="btn btn-secondary" href="/listar-carros">
      <i class="fa fa-arrow-left"></i> Voltar
    </a>

  </form>
@stop
