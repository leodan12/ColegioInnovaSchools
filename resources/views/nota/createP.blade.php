@extends('layouts.plantillaProfesor2')

@section('contenido')

<div class="container">
<h2 style="text-align: center"> AGREGAR UNA NOTA A UN ALUMNO </h2> 
    
@if(session('datos'))  <!--Buscar una alerta en el caso q nuestro registro ha sido guardado o hemos cancelado-->
<div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
  {{ session('datos')   }}
    <button type="button" class="close"  data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif 

<form method="GET"  action="{{route('AgregarNota',$id)}}">
     
        @csrf
        <div class="form-row">
            
        <div class="col-12 col-sm-6 text-center">
            <label for="">ALUMNO</label>
                <select class="form-control   " name="idmatricula" id="idmatricula" style="border-radius: 40px;" required>
                    <option value="" disabled selected>Seleccione un Alumno</option> 
                    @foreach($alumnos as $itemalumno)
                    <option value="{{$itemalumno->idmatricula}}">{{$itemalumno->nombres}}, {{$itemalumno->apellidos}}</option >
                    @endforeach
                </select>
          </div>
          
          <div class="col-12 col-sm-6 text-center"  >
            <label for="">CAPACIDADES</label>
                <select class="form-control   " name="idcapacidad" id="idcapacidad" style="border-radius: 40px;" required>
                  <option value="" disabled selected>Seleccione una Capacidad</option> 
              
                </select>
          </div>
          
        
        </div> 
        
          <div class="row" style="text-align: center">
            <div class="col col-sm-1"></div>
            <div class="form-group col-sm-3 text-center ">
                <label for="id">NOTA - 1</label>
                <input type="number" min="0" max="20" step="0.1" style="border-radius: 40px;" class="form-control     @error('nota1') is-invalid @enderror"  placeholder="0" id="nota1" name="nota1" value="" required>
                @error('nota1')
                <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
                </span>
            @enderror
            </div>
            <div class="form-group col-sm-3 text-center">
                <label for="id">NOTA - 2</label>
                <input type="number" min="0" max="20" step="0.1" style="border-radius: 40px;" class="form-control     @error('nota2') is-invalid @enderror"  placeholder="0" id="nota2" name="nota2" value="" required>
                @error('nota2')
                <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
                </span>
            @enderror
            </div>
            <div class="form-group col-sm-3 text-center">
                <label for="id" >NOTA - 3</label>
                <input type="number" min="0" max="20" step="0.1"  style="border-radius: 40px;" class="form-control     @error('nota3') is-invalid @enderror"  placeholder="0" id="nota3" name="nota3" value="" required>
                @error('nota3')
                <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
                </span>
            @enderror
            </div>

            <div class="col col-sm-1"> 
              <label for="id" >ID CURSO</label>
              <input   style="border-radius: 40px;" class="form-control " placeholder='{{$id}}'id="idcurso" name="idcurso" value="{{$id}}" readonly>
               </div>
        </div>
        <div class="row"> 
            <div class="col" style="text-align: right"> <button type="submit" class="btn btn-primary" id="botonguardar" style="border-radius: 40px;" ><i class="fas fa-save"></i>&nbsp;GRABAR</button></div>
            <div class="col" style="text-align: left" > <a href="{{route('AlumnosCurso',$id)}}" class="btn btn-danger" style="border-radius: 40px;"><i class="fas fa-window-close"></i>&nbsp;CANCELAR</a></div>
        </div>
        </div>
    
       
       
    </form>
</div>
@endsection
 

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script >
  //para el combobox matricula
  $(document).ready(function(){
  
       $("#idmatricula").change(function(){
      var matr = $(this).val();
      cur=document.getElementById('idcurso').value;
     $("#idcapacidad").removeAttr('disabled');
    // $("#idprofesor").removeAttr('disabled');
    $.get('../capacidadbycursos3/'+cur, function(data3){
       console.log(data3);
     $.get('../capacidadbycursos2/'+cur, function(data1){
       console.log(data1);
         var producto_select = '<option value="" disabled selected>Seleccione una Capacidad</option>';
         //matricula=document.getElementById('idmatricula').value;
         if(data3.length>=1){
          idmatricula=document.getElementById('idmatricula').value;
           for (var i=0; i<data3.length;i++){
             var cont=0;
             if(data1.length>=1){
               for(var x=0;x<data1.length;x++){
                 if(data1[x].idmatricula==idmatricula){
                 if(data3[i].idcapacidad==data1[x].idcapacidad){cont=cont+1;}
               }}}
             if(cont==0){
             producto_select+='<option value="'+data3[i].idcapacidad+'">'+data3[i].capacidad+'</option>';
           
           }
           c=0;  
               }
         }else
             producto_select+='<option value="" disabled selected>Ninguna Capacidad Encontrada</option>';
         $("#idcapacidad").html(producto_select);
     });
   });

    });
    
    
  
     });
          </script>
