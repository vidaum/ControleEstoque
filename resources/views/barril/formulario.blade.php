@extends('layout.principal')
@section('conteudo')

<form class="form-horizontal" method="post" action="/CadastrarBarril/adiciona">
      <fieldset>

      <!-- Form Name -->
      <legend>Cadastro de Barril</legend>

      <!-- Text input-->
        <div class="form-group">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <label class="col-md-4 control-label" for="textinput">Barril</label>  
            <div class="col-md-4">
                <input id="textinput" name="barril_tipo" value="{{ old('barril_tipo') }}" type="text" placeholder="Insira tipo de barril" class="form-control input-md" required>  
            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="salvar"></label>
            <div class="col-md-4">
              <button class="btn btn-success">SALVAR</button>
            </div>
        </div>    

      </fieldset>
</form>



@stop