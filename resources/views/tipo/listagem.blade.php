@extends('layout.principal')
@section('conteudo')
<div class="container">
  <h2>Tipos</h2>     
  <ul>
      <li><a href="{{action('TipoController@novo')}}">Cadastrar Tipo</a></li>
  </ul>  
  @if(session()->has('message.level'))
    <div class="alert alert-{{ session('message.level') }}"> 
      {!! session('message.content') !!}
    </div>
  @endif

  <table id="listagem" class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Nome Tipo</th>
        <th>Editar Tipo</th>
        <th>Remover Tipo</th>
      </tr>
    </thead>
    <tbody>
      @foreach($tipos as $t)
        <tr>
          <td>{{ $t->id_tipo }}</td>
          <td>{{ $t->nome }}</td>
          <td><a href="/ListarTipo/mostrar/{{ $t->id_tipo }}"><span class="glyphicon glyphicon-pencil"></span></a></td>
          <td><a href="/ListarTipo/remove/{{ $t->id_tipo }}"><span class="glyphicon glyphicon-trash"></span></a></td>
        </tr>     

      @endforeach
    </tbody>
  </table>
</div>
@stop