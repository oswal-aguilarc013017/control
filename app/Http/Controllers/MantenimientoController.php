<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\Equipo;
use App\Mantenimiento;

class MantenimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
       $this->middleware('auth');
    }
    public function index()
    {
      $empresas = Empresa::all();
      $equipo = Equipo::all();
      return view('Mantenimiento.CrearMantenimiento',compact('empresas','equipo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      if($request->input('emp')){
          $mantenimientos = $request->input('emp');
          foreach ($mantenimientos as $mant => $value) {
              $mantenimiento = Mantenimiento::create([
                  'fecha' => $request->input('fecha'),
                  'empresa_id' => $value,
                  'equipo_id' => $request->input('equipo')
                  ]);
          }
          return redirect('/');
      }
      else
      {
          return redirect('/home');
      }
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
    public function edit($id)
    {
      $equipo = Equipo::where('id',$id)->first();
      $empresas = Empresa::all();
      $mantenimiento = Mantenimiento::where('equipo_id',$id)->first();
      if(isset($mantenimiento))
          return view('Mantenimiento.editmant',compact('equipo','empresas','mantenimiento'));
      else
          return redirect('/');
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
      if($request->input('emp')){
          $mantenimientos = $request->input('emp');
          $mantenimiento2 = Mantenimiento::where('equipos_id',$id)->get();
          $quipo = Equipo::where('id',$id)->first();
          $mantenimiento2 = Mantenimiento::where('equipos_id',$id)->delete();

          foreach ($mantenimientos as $mant => $value) {
              $mantenimiento = Mantenimiento::create([
                  'fecha' => $request->input('fecha'),
                  'empresa_id' => $value,
                  'equipos_id' => $equipo->id
                  ]);
          }
      }
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
      $mantenimiento2 = Mantenimiento::where('equipo_id',$id)->delete();
      $equipo = Equipo::where('id',$id)->delete();
      return redirect('/');
    }
}
