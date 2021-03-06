
@extends('layouts.plantilla')
@section('contenido')
<style>
  :root {
    --body-bg-color: #1a1c1d;
    --hr-color: #26292a;
    --red: #e74c3c;
  }
  
  a {
    color: inherit;
    text-decoration: none;
  }
  
  .menu {
    display: flex;
    justify-content: center;
  }
  .alinealo{
    justify-content: center;
  }
  .menu a {
    position: relative;
    display: block;
    overflow: hidden;
  }
  
  .menu a span {
    transition: transform 0.2s ease-out;
  }
  
  .menu a span:first-child {
    display: inline-block;
    padding: 10px;
  }
  
  .menu a span:last-child {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    transform: translateY(-100%);
  }
  
  .menu a:hover span:first-child {
    transform: translateY(100%);
  }
  
  .menu a:hover span:last-child,
  .menu[data-animation] a:hover span:last-child {
    transform: none;
  }
  .menu[data-animation="to-top"] a span:last-child {
    transform: translateY(100%);
  }
  
  .menu[data-animation="to-top"] a:hover span:first-child {
    transform: translateY(-100%);
  }
  
  .menu[data-animation="to-right"] a span:last-child {
    transform: translateX(-100%);
  }
  
  .menu[data-animation="to-right"] a:hover span:first-child {
    transform: translateX(100%);
  }
  
  .menu[data-animation="to-left"] a span:last-child {
    transform: translateX(100%);
  }
  
  .menu[data-animation="to-left"] a:hover span:first-child {
    transform: translateX(-100%);
  }
  table tbody {
    background-color: #8ce1fd;
  }
  table tr:hover {
    background-color: #E3E4E5;
  }
  
  </style>



<!--  para la tabla donde se va mostrar los alumnos y las notas -->
<div class="container-fluid">
<div class="row">
    <div class="col-12">
      <div class="row">
        <div class="col-12"> <h3 class="text-center">LISTADO DE ALUMNOS DONDE PODEMOS VER SU LIBRETA DE NOTAS DE CADA UNO</h3></div>
     
      <div class="col-12"> &nbsp;</div></div>
     
      
<nav class="navbar navbar-light ">
  <button class=" btn btn-success" style="border-radius: 40px;"   type="menu"><a class="text-white" href="../nota" ><i class="fas fa-arrow-left"> </i> Regresar</a> </button>
  <form class="form-inline my-2 my-lg-0 float-right" method="GET">
    <input name="buscarpor" style="border-radius: 40px;"   class="form-control col-8 mr-2" type="search" placeholder="Buscar por Apellidos" aria-label="Search" value="{{$buscarpor}}">
      <button class="btn btn-success my-2 my-sm-0" style="border-radius: 20px;"  type="submit"><i class="fas fa-search"> </i>&nbsp;Buscar</button>
  </form>
</nav> 
         
   
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

      <div class="table-responsive " style="border-radius: 12px;" >
        <table class="table  table-bordred" name="tabla1" id="tabla1"  >
          <thead class="thead-dark text-center"  >
            <th scope="col">ID_ESTUDIANTE</th>
             <th scope="col">NOMBRES DE ESTUDIANTE</th>
            <th scope="col">MATRICULA</th>
            <th scope="col">FECHA MATRICULA</th>
            <th scope="col">PERIODO</th>
             
            <th scope="col">LIBRETA</th>
          </thead>
          <tbody style="text-align: center"> 
            @foreach($nota as $itemnota)  
            <tr>
              <td >{{$itemnota->idalumno}}</td>
              <td>{{$itemnota->nombres}},{{$itemnota->apellidos}}</td>
              <td>{{$itemnota->idmatricula}}</td>
              <td>{{$itemnota->fecha}}</td>
              <td>{{$itemnota->periodo}}</td>
              <td>
              
                <a class="btn btn-warning btn-md"  href="{{route('nota.libretaNotas',$itemnota->idmatricula)}}" style="border-radius: 40px;"  ><i class="fas fa-graduation-cap"></i>Ver Libreta  </a></td>
                 
            </tr>
            @endforeach 
         </tbody> 
       </table>
      </div>
    </div>
  </div>
    </div>
    </div>
  </div>
</div>
  <div class="row">
    
  </div>
  </div>

@stop