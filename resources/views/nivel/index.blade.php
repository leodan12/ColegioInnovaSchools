@extends('layouts.plantilla')
@section('contenido')
<style>
    table tbody {
    background-color: #8ce1fd; 
  }
  table tr:hover {
    background-color: #E3E4E5;
  }
  </style>
<div class="container-fluid ">
  <div class="form-group">
    <h1>LISTADO DE NIVELES</h1>
    
    <form class="form-inline my-2 my-lg-0 float-right">
      <input name="buscarpor" class="form-control mr-sm-2" style="border-radius: 40px;" type="search" placeholder="Buscar por Nivel" aria-label="Search" value="{{$buscarpor}}">
      <button class="btn btn-success my-2 my-sm-0" style="border-radius: 40px;" type="submit">Search</button>
    </form>
  </div> <br>
    @if(session('datos'))
      <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
        {{session('datos')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif


    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Id Nivel</th>
            <th scope="col">Nivel</th>
          </tr>
        </thead>
        <tbody>
            @foreach($nivel as $k)
                <tr>
                    <td>{{$k->idnivel}}</td>
                    <td>{{$k->nivel}}</td>
                </tr>   
            @endforeach
        </tbody>
    </table>  
      {{$nivel->links()}}    
</div>

@endsection