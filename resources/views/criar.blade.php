@extends('template')

@section('conteudo')

  <form method="POST" action="/recupera-dados">
    {!! csrf_field() !!}
    <div class="form-group">
      <label>Nome Carro</label>
      <input type="text" class="form-control" name="nome-carro">
    </div>

    <div class="form-group">
      <label>Nome proprietário</label>
      <input type="text" class="form-control" name="proprietario">
    </div>
        
    <div class="form-group">
      <label>Nº Placa</label>
      <input type="number" class="form-control" name="n-placa">
    </div>

    <div class="form-group">
      <label>Marca</label>
      <input type="text" class="form-control" name="marca">
    </div>

    <div class="form-group">
      <label>Cor do carro</label>
      <input type="text" class="form-control" name="cor">
    </div>


    <div class="form-group">
      <label>Ano de fabricação</label>
      <input type="number" class="form-control" name="fabricacao">
    </div>
    
    <button type="submit" class="btn btn-success">
      <i class="fa fa-check-circle"></i>
      Salvar
    </button>

  </form>
@stop