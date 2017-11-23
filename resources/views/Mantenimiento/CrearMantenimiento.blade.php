@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Asignación de Equipo para Mantenimiento</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                <form action="mantenimiento" method="POST">
                    {{csrf_field()}}
                    <div class="contact-info">
                    <div class="row">
                     <div class="col-md-5 col-sm-5 ">
                             <div class="form-group">
                            <label for="sel1">Equipo:</label>
                                <select class="form-control" id="equi" name="equipo">
                                @foreach ($equipo as $equ)
                                      <option value="{{$equ->id}}">{{$equ->nombre.' - '.$equ->marca}}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="sel1">Empresa:</label>
                                <select class="form-control chosen" id="emp" name="emp[]" multiple>
                                @foreach ($empresas as $emp)
                                      <option value="{{$emp->id}}">{{$emp->nombre}}</option>
                                @endforeach
                                </select>
                          </div>
                          <div class="form-group">
                              <input type="date" name="fecha" class="form-control br-radius-zero"  placeholder="Fecha para Realizar Mantenimiento"/>
                          </div>
                      </div>
                      </div>
                      </div>
                    <div class="row">
                      <div class="col-md-5 col-sm-5 ">
                          <div class="form-action">
                                  <button type="submit" class="btn btn-form">Crear</button>
                          </div>
                      </div>
                    </div>
                  </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
