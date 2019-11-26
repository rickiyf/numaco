<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use App\aplicaciones;
use Illuminate\Http\Request;

class AplicacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datosaplicaciones = aplicaciones::all();
        return view('adm.aplicacionesme.index',compact('datosaplicaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aplicacion = aplicaciones::all();
        //dd($);
        return view ('adm.aplicacionesme.create', compact('aplicacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->all());


        $datosAplicaciones = request()->all();

        $datosAplicaciones=request()->except('_token');

        if($request->hasfile('imagen'))
    
        {
            $datosAplicaciones['imagen']=$request->file('imagen')->store('uploads');
        }
        $empresa = new aplicaciones();
        $empresa->titulos = $request->titule;
        $empresa->imagenes =  $datosAplicaciones['imagen'];
        $empresa->texto = $request->texto;
        $empresa->descripcion = $request->descripcion;
        $empresa->pdf = $request->orden;

        $empresa->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aplicaciones=aplicaciones::findOrfail($id);

        return view ('adm.aplicacionesme.edit', compact('aplicaciones'));


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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       aplicaciones::destroy($id);
        
        return redirect('apliindex');
    }
}
