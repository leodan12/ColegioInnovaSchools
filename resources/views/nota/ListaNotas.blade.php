@extends('layouts.plantillaProfesor2')

@section('cabecera')
<style>
    .azul{
        color:blue;
    }
    .rojo{
        color:red;
    }
    .negro{
        color:black;
    }

   
</style>
@endsection
@section('contenido')

<div class="container-fluid">
 
    

    <div class="container-fluid" style="background-image: url('img/logoInnova.png); background-size: contain;background-repeat: no-repeat; opacity:0.4;background-position: 50% 15%">
         
       <div class="row">
           <div class="col-12" style="text-align:center"> <h1 >REGISTROS  DE NOTAS</h1></div>
    </div>

    <div class="d-none d-md-block col-12" style="position: relative;right: 40%">
        <button class=" btn btn-success" style="border-radius: 40px;"   type="menu"><a class="text-white" href="{{route('AlumnosCurso',$idcurso)}}" ><i class="fas fa-arrow-left"> </i> Regresar</a> </button>
      </div>
      
     <br><br>
       
        
    </div>
     <div class="row" >
        <div class="col col-4"></div>
         <div class="col col-8" style="text-align: center" style="align-items: center" >
    <table style="align-content: center" border="0.1px" style="border-color: black">
        <thead style="text-align: center;"   >
            <tr style="background-color: cornflowerblue">
                <td style="text-align: center"><b>LISTA DE ALUMNOS: </b></td>
                <td colspan="4" style="text-align: center"><b>C1</b> </td>
                <td colspan="4" style="text-align: center"><b>C2</b></td>  
                <td colspan="4" style="text-align: center"><b>C3</b></td>
                <td ><b>PC</b></td>
            </tr>
        <tr style="background-color: deepskyblue">
            <td style="text-align: center"><b>APELLIDOS Y NOMBRES:</b></td>
            <td>T1</td>
            <td>T2</td>
            <td>T3</td>
            <td><b>P1</b> </td>
            <td>T1</td>
            <td>T2</td>
            <td>T3</td>
            <td><b>P2</b></td>
            <td>T1</td>
            <td>T2</td>
            <td>T3</td>
            <td><b>P3</b></td>
            <td><b>PF</b></td>

        </tr>
    </thead>
    <tbody  style="text-align: center">
        @if($alumno ->count())  
         @foreach($alumno as $itemalumno)
        @php
            $prom=0;
        @endphp
        <tr style="background-color: rgb(225, 228, 235)"> 
        <td class="negro" style="text-align: left"> {{$itemalumno->apellidos}},{{$itemalumno->nombres}} </td>
        @if($notas ->count())     
        @foreach($notas as $itemnota)
            @if($itemalumno->idmatricula==$itemnota->idmatricula)
           @if($itemnota->nota1>=11) <td class="azul" style="border-color: black">{{$itemnota->nota1}} </td> @else  <td class="rojo" style="border-color: black"> {{$itemnota->nota1}} </td>     @endif
           @if($itemnota->nota2>=11) <td class="azul" style="border-color: black">{{$itemnota->nota2}} </td> @else  <td class="rojo" style="border-color: black"> {{$itemnota->nota2}} </td>     @endif
           @if($itemnota->nota3>=11) <td class="azul" style="border-color: black">{{$itemnota->nota3}} </td> @else  <td class="rojo" style="border-color: black"> {{$itemnota->nota3}} </td>     @endif
           @if($itemnota->promedio>=11) <td class="azul" style="border-color: black"><b> {{$itemnota->promedio}}</b> </td> @else  <td class="rojo" style="border-color: black"><b> {{$itemnota->promedio}} </b></td>     @endif

           
            @php
                $prom=$prom+ $itemnota->promedio ;
            @endphp
            @endif
            
            @endforeach
            @endif
            @if($prom>=11) <td class="azul" style="border-color: black"> <b> {{round($prom/3) }} </b> </td>
            @else  <td class="rojo" style="border-color: black"> <b> {{round($prom/3) }} </b> </td>
            @endif
           
          
        </tr>
        @endforeach
        @else
        <tr>
          <td colspan="14">No hay registros !!</td>
        </tr>
      @endif
    </tbody>
    </table>
</div></div>  
 
</div>
@endsection
 

