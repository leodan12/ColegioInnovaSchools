@extends('layouts.app')

@section('content')

 <ul class="form-group row">
                            <!-- Authentication Links -->
                            
                            @guest
                               
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                        
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                        
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                       
                        </ul>
<div class="col-md-4 ml-auto mr-auto">
    <div class="card card-login card-plain">
<div class="card card-login card-plain">
<div class="card-header text-center">
    <div class="logo">
      <img src="{{asset('/img/www.png')}}" alt="">  <!-- logo central -->
    </div>
  </div>
  <br>
  <br>
                <div class="card-body-center">
                    <form method="POST" action="{{ route('user.login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Usuario</label>

                            <div class="col-md-6">
                                
                                <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                     
                        <div class="form-group row mb-2">
                            <div class="col offset">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                                        
                            </div>
                        
                            
                           
                        </div>  
                     

                      
                        </div>
                        
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
             
  

@endsection
