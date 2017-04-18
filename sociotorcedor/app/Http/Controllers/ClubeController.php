<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CadastroClubeRequest;
use App\Clube;

class ClubeController extends Controller
{
    public function index()
    {
        $clubes = Clube::orderBy('nome', 'ASC')->get();

        return view('clubes')->with('clubes', $clubes);
    }

    public function visualizarClube(Request $request)
    {
        $clubeId = $request->id;

        $dadosDoClube = Clube::with('socios')->where('id', $clubeId)->get();

        return view('visualizarClube')->with('dadosDoClube', $dadosDoClube);
    }

    public function store(CadastroClubeRequest $request)
    {
        $clubeSendoCadastrado = new Clube;

        $clubeSendoCadastrado->nome = $request->nome;
        $clubeSendoCadastrado->save();

        return redirect('clubes')->with('clubeCadastrado', $clubeSendoCadastrado->nome);
    }

    public function create()
    {
        return view('cadastrarClube');
    }

    public function destroy(Request $request)
    {
        $clubeId = $request->id;

        $clubeDeletado = Clube::find($clubeId)->delete();

        return redirect('clubes')->with('clubeDeletado', $clubeDeletado->nome);
    }
}
