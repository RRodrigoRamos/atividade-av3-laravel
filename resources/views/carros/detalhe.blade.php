@extends('template')
@section('conteudo')
<article id="detalheCarro">
  <div id="link">
    <a href="/listar-carros">
      <i class="fa fa-arrow-left"></i> Voltar
    </a>
  </div>
  <hr />
<br/>
  <h1> Detalhe do Carro </h1>
<br/>
<hr />
<br/>
  <img src="../img/LogoSite.png" alt="Ilustação Automotiva"/>
<br/><br/>
<hr />
  <h3>  Ficha Cadastral do Carro : {{ $carros->nomecarro}} </h3>
  <table class="table">
    <thead>
      <tr>
        <th> Código Car. </th>
        <th> Nome Fabricante </th>
        <th> Nome Carro</th>
        <th> Nome Proprietário </th>
        <th> N° Placa </th>
        <th> Cor # </th>
        <th> Ano Fabricação </th>
      </tr>
    </thead>
    <tbody>
        <tr>
            <td> {{$carros->numbcarro}} </td>
            <td> {{$carros->marca}} </td>
            <td> {{$carros->nomecarro}} </td>
            <td> {{$carros->proprietario}} </td>
            <td> {{$carros->nplaca}} </td>
            <td> {{$carros->cor}} </td>
            <td> {{$carros->fabricacao}} </td>
        </tr>
      </tbody>
  </table>
  <div id="link">
    <a href="/listar-carros">
      <i class="fa fa-arrow-left"></i> Voltar
    </a>
  </div>
</article>
@endsection
