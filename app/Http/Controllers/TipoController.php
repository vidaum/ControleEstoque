<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Request;
use App\Tipo;
use App\Http\Requests\TiposRequest;

class TipoController extends Controller
{
    public function listar(){
        $tipos = Tipo::all();

    	return view('tipo.listagem')->with(['tipos' => $tipos]);
    }

    public function novo(){
    	return view('tipo.formulario');
    }

    public function adiciona(TiposRequest $request){

		Tipo::create($request->all());
        Request::session()->flash('message.level', 'success');
        Request::session()->flash('message.content', 'Tipo Adicionado com Sucesso!');
		
		return redirect()->action('TipoController@listar')->withInput(Request::only('nome'));
	}

    public function remove($id_tipo){

        $tipo = Tipo::find($id_tipo);
        $tipo->delete();

        Request::session()->flash('message.level', 'danger');
        Request::session()->flash('message.content', 'Tipo Removido com Sucesso!');

        return redirect()
               ->action('TipoController@listar');
    }

    public function mostra($id){

        $tipo = Tipo::find($id);

        if(empty($tipo)) {
            return "Esse tipo não existe";
        }
        return view('tipo.edita')->with('t', $tipo);
    }

    public function edita($id_tipo){

        $tipo = Tipo::find($id_tipo);
        $params = Request::all();
        $tipo->update($params);

        Request::session()->flash('message.level', 'success');
        Request::session()->flash('message.content', 'Tipo Alterado com Sucesso!');

        return redirect()
               ->action('TipoController@listar');
    }
}
