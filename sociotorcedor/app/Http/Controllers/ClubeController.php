<?php

namespace App\Http\Controllers;

use App\Http\Requests\CadastroSocioRequest;
use Illuminate\Http\Request;
use App\Http\Requests\CadastroClubeRequest;
use App\Clubes;

class ClubeController extends Controller
{
    public function index()
    {

        $clubes = Clubes::orderBy('nome', 'ASC')->get();

        return view('clubes')->with('clubes', $clubes);
    }

    public function store(CadastroClubeRequest $request)
    {

        $clubeSendoCadastrado = new Clubes;

        $clubeSendoCadastrado->nome = $request->nome;

        $clubeSendoCadastrado->save();

        return redirect('/clubes')->with('clubeCadastrado', $clubeSendoCadastrado->nome);
    }

    public function create()
    {

        return view('cadastrarClube');
    }

    public function destroy(Request $request)
    {

        $clubeId = $request->id;

        Clubes::find($clubeId)->delete();

        return redirect(action('ClubeController@index'));
    }
}
