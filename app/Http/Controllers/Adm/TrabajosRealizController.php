<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use App\trabajosrealiz;
use Illuminate\Http\Request;

class TrabajosRealizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datosTrabajosRealiz=trabajosrealiz::all();
        //dd($empresa);
        return view ('adm.trabajosRealizme.index', compact('datosTrabajosRealiz'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $TrabajosRealiz=trabajosrealiz::all();
        //dd($empresa);
        return view ('adm.trabajosRealizme.create', compact('TrabajosRealiz'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd( $request->all());
        $datosTra = request()->all();

        $datosTra=request()->except('_token');

        if($request->hasfile('imagen'))
    
        {
            $datosTra['imagen']=$request->file('imagen')->store('uploads');
        }
        $trarealiz = new trabajosrealiz();
        $trarealiz->titulo = $request->titule;
        $trarealiz->imagen = $datosTra['imagen'];
        $trarealiz->orden = $request->orden;
        $trarealiz->texto = $request->texto;
        

        $trarealiz->save();

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
        $trabajosRealiz=trabajosrealiz::findOrfail($id);

        return view ('adm.trabajosRealizme.edit', compact('trabajosRealiz'));
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
        trabajosrealiz::destroy($id);
       
        return redirect('trabajosrealizindex') ;
    }
}
