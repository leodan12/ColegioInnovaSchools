@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
  <div class="d-none d-md-block col-12" style="position: relative;right: 40%">
    <button class=" btn btn-success" style="border-radius: 40px;"   type="menu"><a class="text-white" href="../inicio" ><i class="fas fa-arrow-left"> </i> Regresar</a> </button>
  </div></div>

  <div class="row">
    <div class="col">
      @if(session('datos'))  <!--Buscar una alerta en el caso q nuestro registro ha sido guardado o hemos cancelado-->
                <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
                  {{ session('datos')   }}
                    <button type="button" class="close"  data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
    </div></div>
    <div class="row justify-content-center">
        <div class="col-md-8">
     
                <div class="card-header">{{ __('REGISTRAR') }}</div>

                 

                <div class="card-body">
                    <form method="GET" action="{{ route('GuardarUser') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row">
                          <div class="col-4 text-right"><label for="">ROL USUARIO</label></div>
                          <div class="col-5 col-sm-6 text-left">
                            
                                <select class="form-control   " name="role_id" id="role_id" style="border-radius: 40px;" required >
                                    <option value="" disabled selected>Seleccione un Rol</option> 
                                    <option value="1"    >Administrador</option>
                                    <option value="2"    >Profesor</option>
                                    <option value="3"    >Alumno</option> 
                                </select>
                          </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('REGISTAR') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
          
        </div>
    </div>
</div>
@endsection
