<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CadastroSocioRequest;
use App\Socios;
use App\Clubes;

class SocioController extends Controller
{
    public function index()
    {
        $socios = Socios::all();

        return view('socios')->with('socios', $socios);
    }

    public function create()
    {
        $clubes = Clubes::orderBy('nome', 'ASC')->get();

        return view('cadastrarSocio')->with('clubes', $clubes);
    }

    public function store(CadastroSocioRequest $request)
    {
        $socioSendoCadastrado = new Socios;

        $socioSendoCadastrado->nome = $request->nome;
        $socioSendoCadastrado->clube()->associate($request->clube);

        $socioSendoCadastrado->save();

        $socios = Socios::all();

        return view('/socios')->with('socios', $socios)->with('socioCadastrado', $socioSendoCadastrado);
    }

    public function destroy(Request $request)
    {
        $socioId = $request->id;

        $socioDeletado = Socios::find($socioId)->delete();

        $socios = Socios::all();

        return view('socios')->with('socioDeletado', $socioDeletado)->with('socios', $socios);
    }
}
