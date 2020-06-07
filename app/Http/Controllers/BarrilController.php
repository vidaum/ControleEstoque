<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Request;
use App\Barril;
use App\Http\Requests\BarrisRequest;

class BarrilController extends Controller

{
    public function listar(){
        $barris = Barril::all();

        return view('barril.listagem')->with(['barris' => $barris]);
    }

    public function novo(){

        return view('barril.formulario');
    }

    public function adiciona(BarrisRequest $request){

		Barril::create($request->all());
        Request::session()->flash('message.level', 'success');
        Request::session()->flash('message.content', 'Barril Adicionado com Sucesso!');
		
		return redirect()->action('BarrilController@listar')->withInput(Request::only('barril_tipo'));
	}

    public function remove($id_barril){

        $barril = Barril::find($id_barril);
        $barril->delete();

        Request::session()->flash('message.level', 'danger');
        Request::session()->flash('message.content', 'Barril Removido com Sucesso!');

        return redirect()
               ->action('BarrilController@listar');
    }

    public function mostra($id){

        $barril = Barril::find($id);

        if(empty($barril)) {
            return "Esse barril nÃ£o existe ou não está cadastrado!";
        }
        return view('barril.edita')->with('b', $barril);
    }

    public function edita($id_barril){
        
        $barril = Barril::find($id_barril);
        $params = Request::all();
        $barril->update($params);

        Request::session()->flash('message.level', 'success');
        Request::session()->flash('message.content', 'Barril Alterado com Sucesso!');

        return redirect()
               ->action('BarrilController@listar');
    }
}
