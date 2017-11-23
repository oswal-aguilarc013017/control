@extends('layouts.app')

@section('content')
	<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Modificar Equipo</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                {!!Form::model([],['action'=>['EquipoController@update',$equipo->id],'method'=>'PUT'])!!}
                    {{csrf_field()}}
                    <div class="contact-info">
                    <div class="row">
                     <div class="col-md-5 col-sm-5 ">
                        <div class="form-group">
                            <input type="text" name="nombre" class="form-control br-radius-zero"  placeholder="Nombre" value="{{$equipo->nombre}}" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="marca" class="form-control br-radius-zero"  placeholder="Marca" value="{{$equipo->marca}}"/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="descripcion" class="form-control br-radius-zero"  placeholder="Descripciòn" value="{{$equipo->descripcion}}"/>
                        </div>
                      </div>
                      </div>
                      </div>
                    <div class="row">
                      <div class="col-md-5 col-sm-5 ">
                          <div class="form-action">
                                  <button type="submit" class="btn btn-form">Modificar</button>
                                  {!! link_to_action('EquipoController@destroy', $title = 'Eliminar', $parameters = $equipo->id, $attributes = ['class'=>'btn btn-danger'])!!}
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
