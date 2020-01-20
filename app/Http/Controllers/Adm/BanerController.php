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
        $datosBaner = baner::all();
        return view('adm.banerme.index',compact('datosBaner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $baner = baner::all();
       // dd($datosbaner);
        return view ('adm.banerme.create', compact('baner'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosBaner=request()->all();

        $datosBaner=request()->except('_token');

        if($request->hasfile('imagen'))
    
       {
            $datosBan['imagen']=$request->file('imagen')->store('public/slider');
       }
        $Baner = new baner();
        
        // dd($datosBaner);
        $Baner->texto1 = $request->texto1;
        $Baner->texto2 = $request->texto2;
        $Baner->imagen = $datosBan['imagen'];
        $Baner->seccion = $request->seccion;
        $Baner->orden = $request->orden;

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
        $baner=baner::findOrfail($id);

        return view ('adm.banerme.edit', compact('baner'));
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
        baner::destroy($id);
        
        return redirect('adm/banerindex');
    }
}
