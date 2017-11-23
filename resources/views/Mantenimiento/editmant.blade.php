@extends('layouts.app')

@section('content')
	<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Modificar Control de Mantenimiento</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                {!!Form::model([],['action'=>['MantenimientoController@update',$equipo->id],'method'=>'PUT'])!!}
                    {{csrf_field()}}
                    <div class="contact-info">
                    <div class="row">
                     <div class="col-md-5 col-sm-5 ">
                         <label for="sel1">Equipo: {{$equipo->binbre.' - '.$equipo->marca}}</label>
                         <div class="form-group">
                                <label for="sel1">Empresas:</label>
                                <select class="form-control chosen" id="emp" name="emp[]" multiple>
                                @foreach ($empresas as $emp)
                                      <option value="{{$emp->id}}">{{$emp->nombre}}</option>
                                @endforeach
                                </select>
                          </div>
                          <div class="form-group">
                              <input type="date" name="fecha" class="form-control br-radius-zero"  placeholder="Fecha para Mantenimiento" value="{{$mantenimiento->fecha}}" />
                          </div>
                      </div>
                      </div>
                      </div>
                    <div class="row">
                      <div class="col-md-5 col-sm-5 ">
                          <div class="form-action">
                                  <button type="submit" class="btn btn-form">Modificar</button>
                                  {!! link_to_action('MantenimientoController@destroy', $title = 'Eliminar', $parameters = $equipo->id, $attributes = ['class'=>'btn btn-danger'])!!}
                          </div>
                      </div>
                    </div>
                  {!!Form::close()!!}

                </div>
            	</div>
        	</div>
    	</div>
	</div>
@endsection
