<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Fornecedor::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return Fornecedor::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Fornecedor::with('produtos')->findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fornecedor = Fornecedor::findOrFail($id);
        $fornecedor->update($request->all());
        return $fornecedor;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fornecedor = Fornecedor::findOrFail($id);
        $fornecedor->delete();
        return $fornecedor;
    }
}
