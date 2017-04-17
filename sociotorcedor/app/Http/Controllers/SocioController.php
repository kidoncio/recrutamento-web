<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Socios;
use App\Clubes;
use Illuminate\Support\Facades\Input;

class SocioController extends Controller
{
    public function index()
    {

        $socios = Socios::all();

        $clubes = Clubes::all();


        return view('socios')->with('socios', $socios)->with('clubes', $clubes);
    }

    public function create()
    {

        $clubes = Clubes::orderBy('nome', 'ASC')->get();

        return view('cadastrarSocio')->with('clubes', $clubes);
    }

    public function store(Request $request)
    {

        $socioCadastrado = new Socios;

        $socioCadastrado->nome = $request->nome;
        $socioCadastrado->clube_id = $request->clube;

        $socioCadastrado->save();

        return redirect(action('SocioController@index'))->with('socioCadastrado', $socioCadastrado->nome);
    }

    public function destroy(Request $request)
    {

        $socioId = $request->id;

        $socioDeletado = Socios::find($socioId)->delete();

        $socios = Socios::all();

        $clubes = Clubes::all();

        return view('socios')->with('socioDeletado', $socioDeletado)->with('socios', $socios)->with('clubes', $clubes);
    }
}
