@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ingresar Equipo</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                <form action="equipoCrear" method="POST">
                    {{csrf_field()}}
                    <div class="contact-info">
                    <div class="row">
                     <div class="col-md-5 col-sm-5 ">
                        <div class="form-group">
                            <input type="text" name="nombre" class="form-control br-radius-zero"  placeholder="Nombre"/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="marca" class="form-control br-radius-zero"  placeholder="Marca"/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="descripcion" class="form-control br-radius-zero"  placeholder="Descripciòn"/>
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
</div>
</div>
</div>
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
  <div class="panel-heading">Modificar o eliminar Equipo</div>

  <div class="panel-body">
      @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
      @endif
  <form action="equipomodifi" method="POST">
      {{csrf_field()}}
      <div class="contact-info">
      <div class="row">
       <div class="col-md-5 col-sm-5 ">
          <div class="form-group">
          <label for="sel1">Seleccione Equipo:</label>
              <select class="form-control" id="equi" name="equi">
              @foreach ($equipos as $equi)
                    <option value="{{$equi->id}}">{{$equi->nombre.' - '.$equi->marca}}</option>
              @endforeach
              </select>
          </div>

        </div>
        </div>
        </div>
      <div class="row">
        <div class="col-md-5 col-sm-5 ">
            <div class="form-action">
                    <button type="submit" class="btn btn-form">Ver</button>
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
