<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use App\contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datoscontacto = contacto::all();
        //dd($empresa);
        return view ('adm.contactome.index', compact('datoscontacto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contacto = contacto::all();
        //dd($empresa);
        return view ('adm.contactome.create', compact('contacto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosCont=request()->all();

        $datosCont=request()->except('_token');

        if($request->hasfile('imagen'))
    
        {
            $datosCont['imagen']=$request->file('imagen')->store('uploads');
        }
        $contacto = new contacto();
        $contacto->mapa = $request->mapa;
        $contacto->direccion = $request->direcciones;
        $contacto->telefono1 = $request->telefono1;
        $contacto->telefono2 = $request->telefono2;
        $contacto->correo = $request->correo;
        $contacto->texto = $request->texto;

        $contacto->save();

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
        $contacto=contacto::findOrfail($id);

        return view ('adm.contactome.edit', compact('contacto'));
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
        contacto::destroy($id);
       
        return redirect('adm/contactoindex') ;
    }
}
