<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\Equipo;
use App\Mantenimiento;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipos = Equipo::all();
        return view('Equipo.CrearEquipo',compact('equipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      $equi = Equipo::create([
          'nombre'=>$request->input('nombre'),
          'marca'=>$request->input('marca'),
          'descripcion'=>$request->input('descripcion')]);

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
      $equipo = Equipo::where('id',$request->input('equi'))->first();
      return view('Equipo.editEquipo',compact('equipo'));
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
      $equip = Equipo::where('id',$id)->update([
          'nombre'=>$request->input('nombre'),
          'marca'=>$request->input('marca'),
          'descripcion'=>$request->input('descripcion')]);

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
      //$asignacion2 = Asignacion::where('equipos_id',$id)->delete();
      $equipo = Equipo::where('id',$id)->delete();
      return redirect('/');
    }
}
