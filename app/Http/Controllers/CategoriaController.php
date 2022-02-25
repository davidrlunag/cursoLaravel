<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;


class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categorias = Categoria::all();
        return view('categorias.index',compact('categorias'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Categoria::create($request->all());

        return redirect()->route('categorias.index')
        ->with('success','categorias creado satisfactoriamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categoria  $Categoria
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Categoria = Categoria::find($id);
        return view('categorias.show',compact('Categoria'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categoria  $Categoria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Categoria = Categoria::find($id);
        \Session::put('success',""); 
        sleep(4);
        \Session::put('success',"Si cambia"); 
        
        return view('categorias.edit',compact('Categoria'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categoria  $Categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Categoria = Categoria::find($id);
        $Categoria->name = $request->name;
        $Categoria->description = $request->description;
        $Categoria->update();
        \Session::flash('success',"Categoria creado satisfactoriamente"); 
        sleep(4);
        return redirect()->route('categorias.index')
        ->with('success','categorias modificado satisfactoriamente');
        
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categoria  $Categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $Categoria = Categoria::find($id);
        $Categoria->delete(); 

        return redirect()->route('categorias.index')
        ->with('success','Categoria eliminado satisfactoriamente');
    }
}
