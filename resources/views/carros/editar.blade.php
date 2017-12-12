@extends('template')
@section('conteudo')

<form method="POST" action="/alterar-carro/{{ $carro->id }}">
    {!! csrf_field() !!}
    {!! method_field('PUT') !!}

    <div class="form-group">
      <label>N° Serial do Carro </label>
      <input value="{{ $carro->numbcarro }}" type="text" class="form-control" name="numbcarro" placeholder="Somente Numeros" maxlength="4" required autofocus>
    </div>

    <div class="form-group">
      <label>Nome Fabricante</label>
      <input value="{{ $carro->marca }}" type="text" class="form-control" name="marca" placeholder="Ex.: Ford, Fiat, Chrevolet" required>
    </div>

    <div class="form-group">
      <label>Nome Carro</label>
      <input value="{{ $carro->nomecarro }}" type="text" class="form-control" name="nomecarro" placeholder="Ex.: Pálio Fire, Fiest Hart" required>
    </div>

    <div class="form-group">
      <label>Nome proprietário</label>
      <input value="{{ $carro->proprietario }}" type="text" class="form-control" name="proprietario" placeholder="Ex.: Renan Costa, Leandro Lima, Rodrigo Ramos" required>
    </div>

    <div class="form-group">
      <label>Nº Placa</label>
      <input value="{{ $carro->nplaca }}" type="text" class="form-control" name="nplaca" placeholder="Ex.: ABC-1234" maxlength="8" required>
    </div>

    <div class="form-group">
      <label>Cor do carro</label>
      <input value="{{ $carro->cor }}" type="text" class="form-control" name="cor" placeholder="Ex.: Vinho, Prata, Preto">
    </div>


    <div class="form-group">
      <label>Ano de fabricação</label>
      <input value="{{ $carro->fabricacao }}" type="number" class="form-control" name="fabricacao" placeholder="Somente Ano Ex.: 2016, 2017, 2018" max="2018">
    </div>

    <button type="submit" class="btn btn-primary">ALTERAR ESTE CARRO <i class="fa fa-car" aria-hidden="true"></i> </button>
  </form>
@endsection
