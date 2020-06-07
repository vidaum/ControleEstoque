@extends('layout.principal')
@section('conteudo')

<form class="form-horizontal" method="post" action="/CadastrarTipo/edita/{{ $t->id_tipo }}">
      <fieldset>

      <!-- Form Name -->
      <legend>Cadastro de Tipo</legend>

      <!-- Text input-->
        <div class="form-group">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <label class="col-md-4 control-label" for="textinput">Nome</label>  
            <div class="col-md-4">
                <input id="textinput" name="nome" value="{{ $t->nome }}" type="text" placeholder="Insira nome do tipo" class="form-control input-md" required>  
            </div>
            <input type="hidden" name="id_tipo" value="{{ $t->id_tipo }}">
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