@extends('layout.principal')
@section('conteudo')
<div class="container">
  <h2>Barris</h2>     
  <ul>
      <li><a href="{{action('BarrilController@novo')}}">Cadastrar Barris</a></li>
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
        <th>Tipo de Barril</th>
        <th>Editar Barril</th>
        <th>Remover Barril</th>
      </tr>
    </thead>
    <tbody>
      @foreach($barris as $b)
      
        <tr>
          <td>{{ $b->id_barril }}</td>
          <td>{{ $b->barril_tipo }}</td>
          <td><a href="/ListarCategoria/mostrar/{{ $b->id_barril }}"><span class="glyphicon glyphicon-pencil"></span></a></td>
          <td><a href="/ListarCategoria/remove/{{ $b->id_barril }}"><span class="glyphicon glyphicon-trash"></span></a></td>
        </tr>     

      @endforeach
    </tbody>
  </table>
</div>
@stop