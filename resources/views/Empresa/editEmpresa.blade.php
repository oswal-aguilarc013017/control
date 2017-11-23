@extends('layouts.app')

@section('content')
	<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Modificar Empresa</div>

								<div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                {!!Form::model([],['action'=>['EmpresaController@update',$empresa->id],'method'=>'PUT'])!!}
                    {{csrf_field()}}
                    <div class="contact-info">
                    <div class="row">
                     <div class="col-md-5 col-sm-5 ">
                        <div class="form-group">
                            <input type="text" name="nombre" class="form-control br-radius-zero"  placeholder="Nombre" value="{{$empresa->nombre}}" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="direccion" class="form-control br-radius-zero"  placeholder="Dirección" value="{{$empresa->direccion}}"/>
                        </div>
												<div class="form-group">
														<input type="text" name="correo" class="form-control br-radius-zero"  placeholder="Correo" value="{{$empresa->correo}}"/>
												</div>
                        <div class="form-group">
                            <input type="text" name="telefono" class="form-control br-radius-zero"  placeholder="telefono" value="{{$empresa->telefono}}"/>
                        </div>
                      </div>
                      </div>
                      </div>
                    <div class="row">
                      <div class="col-md-5 col-sm-5 ">
                          <div class="form-action">
                                  <button type="submit" class="btn btn-form">Modificar</button>
                                  {!! link_to_action('EmpresaController@destroy', $title = 'Eliminar', $parameters = $empresa->id, $attributes = ['class'=>'btn btn-danger'])!!}
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
