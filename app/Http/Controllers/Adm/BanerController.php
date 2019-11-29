<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\baner;

class BanerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datosbaner = baner::all();
        return view('adm.aplicacionesme.index',compact('datosaplicaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $datosbaner = baner::all();
       // dd($datosbaner);
        return view ('adm.banerme.create', compact('datosbaner'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos=request()->all();

        $datosBan=request()->except('_token');

        if($request->hasfile('imagen'))
    
        {
            $datosBan['imagen']=$request->file('imagen')->store('uploads');
        }
        $Baner = new contacto();
        $Baner->mapa = $request->mapa;
        $Baner->direccion = $request->direcciones;
        $Baner->telefono1 = $request->telefono1;
        $Baner->telefono2 = $request->telefono2;
        $Baner->correo = $request->correo;
        $Baner->texto = $request->texto;

        $Baner->save();

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
        //
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
        //
    }
}
