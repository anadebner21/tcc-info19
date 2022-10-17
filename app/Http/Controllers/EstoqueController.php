<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estoque;


class EstoqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estoque = Estoque::all();
        return view ('estoque.pageEstoque')->with('estoque', $estoque);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estoque.criarEstoque');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Estoque::create($input);
        return redirect('estoques')->with('flash_message', 'Material adicionado');  
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estoques = Estoque::find($id);
        return view('estoque.verEstoque')->with('estoque', $estoques);
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estoques = Estoque::find($id);
        return view('estoque.editarEstoque')->with('estoque', $estoques);
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $estoques = Estoque::find($id);
        $input = $request->all();
        $estoques->update($input);
        return redirect('estoques')->with('flash_message', 'Material Adicionado');  
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Estoque::destroy($id);
        return redirect('estoques')->with('flash_message', 'Material deletado');  
    
    }
}
