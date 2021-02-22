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
        <img src="img/centrotpf.png" alt="" width="10%" alt="" style="position:absolute;margin-left: 90%;">
        <div class="row">
            <div class="col-12" style="text-align:center"> <h1 >NOTAS DE MIS CURSOS</h1></div>
            <div class="d-none d-md-block col-12" style="position: relative;right: 40%">
                <button class=" btn btn-success" style="border-radius: 40px;"   type="menu"><a class="text-white" href="../cursosAlumno" ><i class="fas fa-arrow-left"> </i> Regresar</a> </button>
              </div>
     </div>
                   

    </div>
</div>
<!--  para las libretas  de los alumnos
    </table> -->
    <div style="page-break-after:always;"></div>
    <div class="row">
        <div class="col">
    <table style="width:100%" style="text-align: center" border="1px">
        <thead style="background-color: cornflowerblue">
            <tr >
           
            <th  width=310px>CURSO/CAPACIDADES</th>
            <th  width=30px style="text-align: center">N1</th>
            <th width=30px style="text-align: center">N2</th>
            <th width=30px style="text-align: center">N3</th>
            <th width=30px style="text-align: center">PC</th></tr>
        </thead>
    </table>
    <table style="width:100%" style="text-align: center" border="1px">
       
        @foreach($cursos as $cur)
        <tr  >
            <td colspan="5" class="negro" style="background-color: rgb(193, 208, 235)"><b>{{$cur->curso}}</b>  </td> 
         </tr>
         @php  $PF=0 @endphp
         
         @foreach($notitas as $not)
        @if(($cur->idcurso) == ($not->idcurso))
         <tr>
          
           <td class="negro" style="background-color: rgb(209, 214, 224)" width=310px >{{$not->capacidad}}</td>
           @if($not->nota1>=11)   <td class="azul" style="background-color: rgb(209, 214, 224)" border="1px" width=30px  style="border-color: black; text-align: center">{{$not->nota1}}</td> 
           @else  <td class="rojo" style="background-color: rgb(209, 214, 224)" border="1px" width=30px  style="border-color: black; text-align: center">{{$not->nota1}}</td>  @endif

           @if($not->nota2>=11)   <td class="azul" style="background-color: rgb(209, 214, 224)" border="1px" width=30px  style="border-color: black; text-align: center">{{$not->nota2}}</td> 
           @else  <td class="rojo" style="background-color: rgb(209, 214, 224)" border="1px" width=30px  style="border-color: black; text-align: center">{{$not->nota2}}</td>  @endif

           @if($not->nota3>=11)   <td class="azul"  style="background-color: rgb(209, 214, 224)" border="1px" width=30px  style="border-color: black; text-align: center">{{$not->nota3}}</td> 
           @else  <td class="rojo" style="background-color: rgb(209, 214, 224)" border="1px" width=30px  style="border-color: black; text-align: center">{{$not->nota3}}</td>  @endif

           @if($not->promedio>=11)   <td class="azul" style="background-color: rgb(209, 214, 224)" border="1px" width=30px  style="border-color: black; text-align: center"><b>{{$not->promedio}}</b> </td> 
           @else  <td class="rojo" style="background-color: rgb(209, 214, 224)" border="1px" width=30px  style="border-color: black; text-align: center"><b> {{$not->promedio}}</b></td>  @endif
          
          
           @php  $PF=$PF+($not->promedio)/3 @endphp
           
           </tr>  
        @endif
        @endforeach
           <tr><td colspan="4" class="negro" style="background-color: rgb(209, 214, 224)" style="text-align: right"> <b>Promedio Final :</b></td> 
            @if($PF>=11)<td class="azul" style="background-color: rgb(209, 214, 224)" width=30px style="border-color: black; text-align: center"><b> {{round($PF)}}</b></td> 
            @else <td class="rojo" style="background-color: rgb(209, 214, 224)" width=30px style="border-color: black; text-align: center"><b> {{round($PF)}}</b></td>   @endif
        </tr>
        @endforeach       
    </table>
</div>
</div>
    </div>



@endsection
 

