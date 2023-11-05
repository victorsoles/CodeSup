<?php

namespace App\Http\Controllers;

use App\Models\Anotacao;
use App\Http\Requests\StoreUpdateAnotacaoRequest;

class AnotacoesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anotacoes = Anotacao::all();

        return inertia('Anotacoes/Index', ['anotacoes' => $anotacoes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Anotacoes/Create', []);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateAnotacaoRequest $request)
    {
        $anotacao = new Anotacao([
            'titulo' => $request->titulo,
            'descricao' => $request->descricao
        ]);

        $anotacao->save();

        return redirect()->route('anotacoes.show', $anotacao->id)->with(['mensagem' => ['success', 'Anotação salva com sucesso!']]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Anotacao $anotacao)
    {
        return inertia('Anotacoes/Show', ['anotacao' => $anotacao]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Anotacao $anotacao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateAnotacaoRequest $request, Anotacao $anotacao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anotacao $anotacao)
    {
        $anotacao->delete();

        return redirect()->route('anotacoes.index')->with(['mensagem' => ['success', 'Anotação excluída com sucesso!']]);
    }
}
