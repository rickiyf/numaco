<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use App\logos;
use Illuminate\Http\Request;

class LogosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datoslogos = logos::all();
        return view('adm.logosme.index',compact('datoslogos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $logos = logos::all();
         //dd:($logos);
        return view ('adm.Logosme.create', compact('logos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datoslogos = request()->all();
      //  dd( $request->all()); 
        $datoslogos=request()->except('_token');

        if($request->hasfile('imagen'))
    
        {
            $datoslogos['imagen']=$request->file('imagen')->store('public');
        }
        $logos = new logos();
        $logos->texto = $request->texto;
        $logos->imagen =  $datoslogos['imagen'];
        

        $logos->save();

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
        logos::destroy($id);
        
        return redirect('adm/logosindex'); 
    }
}
