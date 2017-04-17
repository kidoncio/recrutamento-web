<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clubes;

class ClubeController extends Controller
{
    public function index()
    {

        $clubes = Clubes::orderBy('nome', 'ASC')->get();

        return view('clubes')->with('clubes', $clubes);
    }

    public function store(Request $request)
    {

        $clubeCadastrado = new Clubes;

        $clubeCadastrado->nome = $request->nome;

        $clubeCadastrado->save();

        return redirect(action('ClubeController@index'))->with('clubeCadastrado', $clubeCadastrado->nome);
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
