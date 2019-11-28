<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use App\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datosempresa = Empresa::all();
        //dd($empresa);
        return view ('adm.empresame.index', compact('datosempresa'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empresa = Empresa::all();
        return view ('adm.empresame.create', compact('empresa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //dd($request->all());
        $datosEmpresa = request()->all();

        $datosEmpresa=request()->except('_token');

        if($request->hasfile('imagen'))
        
        {
            $datosEmpresa['imagen']=$request->file('imagen')->storage('public');
        }
    
        
            
        //dd($datosEmpresa['image']);
        $empresa = new Empresa();
        $empresa->titulo = $request->title;
        $empresa->texto = $request->text;
        $empresa->imagen = $datosEmpresa['imagen'];
        $empresa->linea = $request->linea;

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
        $empresa=Empresa::findOrfail($id);

        return view ('adm.empresame.edit', compact('empresa'));
    }

   
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
        Empresa::destroy($id);
       
        return redirect('adm/empresaindex') ;
    }
}
