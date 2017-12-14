@extends('template')

@section('conteudo')

<h2>Lista de Carros Cadastrados ! <i class="fa fa-car" aria-hidden="true"></i> </h2>
<br />
 <div class="panel">
   <div class="panel-heading">
   </div>
   <div class="panel-body">
     <form id="pesquisa" class="form-inline col-12">
       <div class="form-group">
         <input type="text" class="form-control" name="pesquisa"/>
       </div>&nbsp;&nbsp;
       <button type="submit">Pesquisar por Carro / Placa <i class="fa fa-car" aria-hidden="true"></i> </button>
       <a href="/form-cadastro" class="btn btn-outline-success">
         <i class="fa fa-plus-circle"></i>
         NOVO CADASTRO
         <i class="fa fa-car" aria-hidden="true"></i>
       </a>
     </form>
     <br />

   </div>
 </div>
 <table class="table">
   <thead>
     <tr>
       <th>Código Car.</th>
       <th>Nome Proprietário </th>
       <th>Carro Cadastrado / Placa</th>
       <th>Ações</th>
     </tr>
   </thead>
   <tbody>
     @foreach($carros as $carro)
       <tr>
           <td> {{ $carro->numbcarro}} </td>
           <td> {{ $carro->proprietario }} </td>
           <td> {{ $carro->nomecarro }} / {{ $carro->nplaca }} </td>
           <td>
             <a class="btn btn-outline-primary" href="/detalhar-carro/{{ $carro->id }}">
               <i class="fa fa-search" aria-hidden="true"></i> Detalhe
             </a>
             <a class="btn btn-outline-secondary" href="/editar-carro/{{ $carro->id }}">
               <i class="fa fa-edit"></i> Editar
             </a>

             <form style="display: inline;" method="POST" action="excluir-carro/{{ $carro->id }}">
               {!! method_field('DELETE') !!}
               {!! csrf_field() !!}
             <button type="submit" class="btn btn-outline-danger" href="/alterar-carro/{{ $carro->id }}">
               <i class="fa fa-trash"></i> Deletar
             </button>
             </form>
           </td>
       </tr>
     @endforeach
   </tbody>
 </table>
@endsection
