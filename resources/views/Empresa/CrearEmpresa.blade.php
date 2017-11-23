@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ingresar Empresa</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                <form action="empresaCrear" method="POST">
                    {{csrf_field()}}
                    <div class="contact-info">
                    <div class="row">
                     <div class="col-md-5 col-sm-5 ">
                        <div class="form-group">
                            <input type="text" name="nombre" class="form-control br-radius-zero"  placeholder="Nombre"/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="direccion" class="form-control br-radius-zero"  placeholder="Direcciòn"/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="correo" class="form-control br-radius-zero"  placeholder="Correo: example@example.com"/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="telefono" class="form-control br-radius-zero"  placeholder="Telèfono"/>
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
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
              <div class="panel-heading">Modificar o Eliminar Empresa</div>

              <div class="panel-body">
                  @if (session('status'))
                      <div class="alert alert-success">
                          {{ session('status') }}
                      </div>
                  @endif
              <form action="empresamodifi" method="POST">
                  {{csrf_field()}}
                  <div class="contact-info">
                  <div class="row">
                   <div class="col-md-5 col-sm-5 ">
                      <div class="form-group">
                      <label for="sel1">Seleccione Empresa:</label>
                          <select class="form-control" id="emp" name="empr">
                          @foreach ($empresas as $emp)
                                <option value="{{$emp->id}}">{{$emp->nombre.' - '.$emp->direccion}}</option>
                          @endforeach
                          </select>
                      </div>

                    </div>
                    </div>
                    </div>
                  <div class="row">
                    <div class="col-md-5 col-sm-5 ">
                        <div class="form-action">
                                <button type="submit" class="btn btn-form">Detalle</button>
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
