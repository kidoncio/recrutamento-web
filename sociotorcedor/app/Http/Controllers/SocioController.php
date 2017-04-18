<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CadastroSocioRequest;
use App\Socio;
use App\Clube;

class SocioController extends Controller
{
    public function index()
    {
        $socios = Socio::with('clube')->get();

        return view('socios')->with('socios', $socios);
    }

    public function visualizarSocio(Request $request)
    {
        $socioId = $request->id;

        $dadosDoSocio = Socio::with('clube')->where('id', $socioId)->get();

        return view('visualizarSocio')->with('dadosDoSocio', $dadosDoSocio);
    }

    public function create()
    {
        $clubes = Clube::orderBy('nome', 'ASC')->get();

        return view('cadastrarSocio')->with('clubes', $clubes);
    }

    public function store(CadastroSocioRequest $request)
    {
        $socioSendoCadastrado = new Socio;

        $socioSendoCadastrado->nome = $request->nome;
        $socioSendoCadastrado->clube()->associate($request->clube);
        $socioSendoCadastrado->save();

        return redirect('socios')->with('socioCadastrado', $socioSendoCadastrado->nome);
    }

    public function destroy(Request $request)
    {
        $socioId = $request->id;

        $socioDeletado = Socio::find($socioId)->delete();

        return redirect('socios')->with('socioDeletado', $socioDeletado->nome);
    }
}
