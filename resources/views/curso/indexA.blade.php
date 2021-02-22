@extends('layouts.plantillaAlumno')
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
<div class="container-fluid ">
  <div class="form-group">
    
    <div class="container">
      <h3 class="text-center">LISTADO DE CURSOS ACTIVOS</h3>
      <div class="row">
      
      <div class="col-4  " >
        <button class=" btn btn-success" style="border-radius: 40px;"   type="menu"><a class="text-white" href="../inicioAlumnos" ><i class="fas fa-arrow-left"> </i> Regresar</a> </button>
      </div>
      <div class="col-4 col-sm-4" style="padding-right: 0px;padding-left: 0px;">
          
        <a  href="{{route('MisNotas',$cursos[0]->idmatricula)}}" class="btn btn-success" style="border-radius: 40px;"><i class="fa fa-book mr-2"></i>Ver Lista de Notas</a>
       
      </div>
      <div class="col-4 col-sm-4" style="padding-right: 0px;padding-left: 0px;">
        
        <a  href="{{route('nota.libretaNotas',$cursos[0]->idmatricula)}}" class="btn btn-success" style="border-radius: 40px;"><i class="fa fa-book mr-2"></i>Generar Libreta de Notas</a>
       
      </div></div>
    @if(session('datos'))
      <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
        {{session('datos')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif

    

      <br>
      <div class="table-responsive"  style="border-radius: 12px;">
        <table class="table" style="border-radius: 12px;">
        <thead class="thead-dark">
          <tr>
            <th scope="col"style="text-align: center">ID CURSO</th>
            <th scope="col" style="text-align: center">CURSO</th>
            <th scope="col" style="text-align: center">PROFESOR</th>
            <th scope="col" style="text-align: center">GRADO </th>
            <th scope="col" style="text-align: center;">VER MIS NOTAS</th>
           
          </tr>
        </thead>
        <tbody>
            @foreach($cursos as $k)
                <tr>
                    <td style="text-align: center">{{$k->idcurso}}</td>
                    <td style="text-align: center">{{$k->curso}}</td>
                    <td style="text-align: center">{{$k->profesor}}</td>
                    <td style="text-align: center">{{$k->grado}}</td>
                    <td class="menu" data-animation="to-left">  
                      <a href="{{route('NotasCursoAlumno',$k->idcurso)}}"> 
                        <span><b>VER NOTAS</b></span>
                        <span>
                          <i class="fas fa-edit" aria-hidden="true"></i>
                        </span>
                      </a> 
                    </td>
                    <td>
                     
                    </td>
                </tr>   
            @endforeach
        </tbody>
    </table>  
    <a href="/inicioProfesores" style="margin-left: 95%" class="btn btn-info btn-sm">
      <i class="fas fa-backward"></i> Volver</a>
      <div class="align-center" style="margin-left: 45%"><h5></h5></div>
</div>

@endsection