@extends('layouts.plantillaProfesor2')
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
      <h3 class="text-center">LISTADO DE ALUMNOS EN EL CURSO</h3>
      <div class="row" >
       
        <div class="d-none d-sm-block col-12" style="position: relative;right: 7%;padding-right: 0px;padding-left: 0px;">
          <button class=" btn btn-success mr-0" style="border-radius: 40px;"   type="menu"><a class="text-white" href="../cursosProfesor" ><i class="fas fa-arrow-left"> </i> Regresar</a> </button>
        </div>

        <div class="col-12 col-sm-3" style="padding-right: 0px;padding-left: 0px;">
          <a type="button"href="{{route('NotaAlumnos',$id)}}" class="btn btn-success" style="border-radius: 40px;text-align: left"   ><i class="fas fa-plus"></i>&nbsp;Registrar Notas</a><br>
      
        </div>
        <div class="col-12 col-sm-3" style="padding-right: 0px;padding-left: 0px;">
          <a type="button"href="{{route('NotaAlumnos2',$id)}}" class="btn btn-success" style="border-radius: 40px;text-align: left"   ><i class="fas fa-edit"></i>&nbsp;Editar Notas</a><br>
      
        </div>
        <div class="col-12 col-sm-3" style="padding-right: 0px;padding-left: 0px;">
          
          <a  href="{{route('ListaNotas',$id)}}" class="btn btn-success" style="border-radius: 40px;"><i class="fa fa-book mr-2"></i>Ver Lista de Notas</a>
         
        </div>
        <div class="col-12 col-sm-3" style="padding-right: 0px;padding-left: 0px;">
          
          <a  href="{{route('nota.registroNotas',$id)}}" class="btn btn-success" style="border-radius: 40px;"><i class="fa fa-book mr-2"></i>Generar Reporte de Notas</a>
         
        </div>


       
         
        
      </div>
      <br><br>
     

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
            <th scope="col"style="text-align: center">ID ALUMNO</th>
            <th scope="col" style="text-align: center">ID MATRICULA </th>
            <th scope="col" style="text-align: center">NOMBRES</th>
            <th scope="col" style="text-align: center">APELLIDOS</th>
            
           
           
          </tr>
        </thead>
        <tbody>
            @foreach($alumnos as $k)
                <tr>
                    <td style="text-align: center">{{$k->idalumno}}</td>
                    <td style="text-align: center">{{$k->idmatricula}}</td>
                    <td style="text-align: center">{{$k->nombres}}</td>
                    <td style="text-align: center">{{$k->apellidos}}</td>
                             
                     
                </tr>   
            @endforeach
        </tbody>
    </table>  
    <a href="/inicio" style="margin-left: 95%" class="btn btn-info btn-sm">
      <i class="fas fa-backward"></i> Volver</a>
      <div class="align-center" style="margin-left: 45%"><h5></h5></div>
</div>

@endsection