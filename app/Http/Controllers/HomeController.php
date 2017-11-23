<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\Equipo;
use App\Mantenimiento;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $empresas = Empresa::all();
      $equipo = Equipo::all();
        return view('home',compact('empresas','equipo'));
    }

    public function datos()
    {
      $mantenimiento = Mantenimiento::join('empresas','empresas.id','=','mantenimientos.empresa_id')->join('equipos','equipos.id','=','mantenimientos.equipo_id')->get();
      $equipo = Equipo::all();
      return view('welcome',compact('mantenimiento','equipo'));
    }
}
