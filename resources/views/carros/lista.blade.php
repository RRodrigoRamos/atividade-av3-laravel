@extends('template')

@section('conteudo')
{{dd($$listaCarros)}}
<h2>Lista de Carros Cadastrados ! <i class="fa fa-car" aria-hidden="true"></i> </h2>

 <div class="panel">
   <div class="panel-heading">
   </div>
   <div class="panel-body">
     <form class="form-inline">
       <div class="form-group">
         <input type="text" class="form-control" name="pesquisa"/>
       </div>
       <button type="submit">Pesquisar por Carro <i class="fa fa-car" aria-hidden="true"></i> </button>
     </form>
     <br />

   </div>
 </div>
 <table class="table">
   <thead>
     <tr>
       <th>ID</th>
       <th>Nome Proprietário </th>
       <th>Carro Cadastrado</th>
       <th>Ações</th>
     </tr>
   </thead>
   <tbody>
     @foreach($carros as $carro)
       <tr>
           <td> {{ $carro->id }} </td>
           <td> {{ $carro->proprietario }} </td>
           <td> {{ $carro->nomecarro }} </td>
           <td>
             <a class="btn btn-secondary" href="/editar-usuario/{{ $carro->id }}">
               <i class="fa fa-edit"></i> Editar
             </a>

             <form style="display: inline;" method="POST" action="excluir-carro/{{ $carro->id }}">
               {!! method_field('DELETE') !!}
               {!! csrf_field() !!}
             <button type="submit" class="btn btn-danger" href="/alterar-carro/{{ $carro->id }}">
               <i class="fa fa-trash"></i> Deletar
             </button>
             </form>
           </td>
       </tr>
     @endforeach
   </tbody>
 </table>
 <a href="/cadastrar-carro" class="btn btn-success">
   <i class="fa fa-plus-circle"></i>
   NOVO CADASTRO <i class="fa fa-car" aria-hidden="true"></i>
 </a>
@endsection
