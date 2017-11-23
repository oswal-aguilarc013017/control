<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\Equipo;
use App\Mantenimiento;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $empresas = Empresa::all();
      return view('Empresa.CrearEmpresa',compact('empresas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      $em = Empresa::create([
          'nombre'=>$request->input('nombre'),
          'direccion'=>$request->input('direccion'),
          'correo'=>$request->input('correo'),
          'telefono'=>$request->input('telefono')]);

      return redirect('/');
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
    public function edit(Request $request)
    {
        $empresa = Empresa::where('id',$request->input('empr'))->first();  
        return view('Empresa.editEmpresa',compact('empresa'));
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
        $emp = Empresa::where('id',$id)->update([
          'nombre'=>$request->input('nombre'),
          'direccion'=>$request->input('direccion'),
          'correo'=>$request->input('correo'),
          'telefono'=>$request->input('telefono')]);

          return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empresa = Empresa::where('id',$id)->delete();
        return redirect('/');
    }
}
