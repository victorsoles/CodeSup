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
        //
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
        dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Anotacao $anotacao)
    {
        //
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
        //
    }
}
