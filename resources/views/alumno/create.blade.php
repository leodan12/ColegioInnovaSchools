@extends('layouts.plantilla')

@section('contenido') 
<div class="container-fluid"> 
     <h1 style="text-align: center;">Registrar Alumno</h1>  
    <div class="alert hidden" role="alert"></div> 
    <form method="POST" action="{{ route('alumno.store')}}"> 
    @csrf 
    <div class="row">
        <div class="col-sm-2 col-md-1 pl-4" > 
            <label for="" class="pt-1">Codigo</label>  
        </div>  
        <div class="col-sm-3 col-md-2" > 
            <input type="number" min="0" max="999999999" class="form-control" name="codigoalumno" id="codigoalumno" style="border-radius: 40px;" required>  
        </div>
        <div class="col-sm-2 col-md-1" > 
            <label for="" class="pt-1">DNI</label>  
        </div>  
        <div class="col-sm-4 col-md-2" > 
            <input type="number" class="form-control" name="dni" id="dni" style="border-radius: 40px;" required>  
        </div>
        <div class="col-sm-1 d-md-none"></div>
        <div class="d-none d-sm-block col-12 d-md-none"><br></div>
        
        <div class="col-sm-2 col-md-1" > 
            <label for="" class="pt-1">Sexo</label>  
        </div>  
        <div class="col-sm-3 col-md-2"> 
            <input type="text" class="form-control" name="sexo" id="sexo" style="border-radius: 40px;">  
        </div>
        <div class="col-sm-2 col-md-1 pr-1">  
            <label for="">Fecha de Nacimiento</label> 
        </div> 
        <div class="col-sm-4 col-md-2">  
            <div class="form-group">  
                <div class="input-group "> 
                    <input type="date" class="form-control" name="fechanacimiento" id="fechanacimiento"  style="text align:center;border-radius: 40px;" > 
                </div> 
            </div> 
        </div>
        <div class="d-none d-md-block col-12"><br></div>
    </div> 
    <div class="row">
        <div class="col-sm-2 col-md-1 pl-4"> 
            <label for="" class="pt-1">Apellidos</label>  
        </div>  
        <div class="col-sm-8 col-md-3"> 
            <input type="text" class="form-control" name="apellidos" id="apellidos" style="border-radius: 40px;" required disabled >  
        </div>
        <div class="col-sm-2 d-md-none" ></div>
        <div class="d-none d-sm-block col-12 d-md-none"><br></div>

        <div class="col-sm-2 col-md-1"> 
            <label for="" class="pl-2 pt-1">Nombres</label>  
        </div>  
        <div class="col-sm-8 col-md-3"> 
            <input type="text" class="form-control" name="nombres" id="nombres" style="border-radius: 40px;" required disabled>  
        </div>

        <div class="col-sm-2 d-md-none"></div>
        <div class="d-none d-sm-block col-12 d-md-none"><br></div>

        <div class="col-sm-2 col-md-2"> 
            <label for="" class="pt-1">Lengua Materna</label>  
        </div>  
        <div class="col-sm-3 col-md-2 "> 
            <input type="text" class="form-control" name="lenguamaterna" id="lenguamaterna" style="border-radius: 40px;">  
        </div>

        <div class="d-none d-md-block col-12"><br></div>
        
        <div class="d-none d-sm-block col-sm-2 d-md-none"> 
            <label for="">Religion</label>  
        </div>  
        <div class="d-none d-sm-block col-sm-4 d-md-none"> 
            <input type="text" class="form-control" name="religion" id="religion" style="border-radius: 40px;">  
        </div>
        <div class="d-none d-md-block col-12"><br></div>
    </div>
    <div class="row ">
        <div class="d-sm-none d-md-block col-md-1"> 
            <label for="" class="pt-1">Religion</label>  
        </div>  
        <div class="d-sm-none d-md-block col-md-2"> 
            <input type="text" class="form-control" name="religion" id="religion" style="border-radius: 40px;">  
        </div>
        <div class="col-sm-2 col-md-2" > 
            <label for="" class="pt-1">Estado Civil</label>  
        </div>  
        <div class="col-sm-3 col-md-2" > 
            <input type="text" class="form-control" name="estadocivil" id="estadocivil" style="border-radius: 40px;">  
        </div>
        <div class="col-sm-2 col-md-2" > 
            <label for="">Colegio de Procedencia</label>  
        </div>  
        <div class="col-sm-5 col-md-3"> 
            <input type="text" class="form-control" name="colegioprocedencia" id="colegioprocedencia" style="border-radius: 40px;">  
        </div>
        <div class="d-none d-md-block col-12"><br></div>
    </div>
    <div class="row">
        <div class="col-sm-2 col-md-1"> 
            <label for="" class="pt-1">Direccion</label>  
        </div>  
        <div class="col-sm-8 col-md-4"> 
            <input type="text" class="form-control" name="direccion" id="direccion" style="border-radius: 40px;">  
        </div>
        <div class="d-none d-sm-block col-12 d-md-none"><br></div>        
        <div class="col-sm-2 col-md-1" > 
            <label for="" class="pt-1">Telefono</label>  
        </div>  
        <div class="col-sm-3 col-md-2"> 
            <input type="number" class="form-control" name="telefono" id="telefono" style="border-radius: 40px;">  
        </div>
        <div class="col-sm-1 col-md-1" > 
            <label for="" class="pt-1" >Pais </label>  
        </div>  
        <div class="col-sm-4 col-md-3"> 
            <select class="form-control " style="width: 100%;border-radius: 40px;" id="idpais" name="idpais" >  
                <option value="" disabled selected>- Seleccione Pais -</option>   
                @foreach($pais as $itempais) 
                    <option value="{{ $itempais['idpais']}}">{{ $itempais['pais']}}</option>  
                @endforeach  
            </select>  
        </div> 
        <div class="d-none d-md-block col-12"><br></div>
        <div class="d-none d-sm-block col-12 d-md-none"><br></div>
    </div>
    <div class="row">
        <div class="col-sm-2 col-md-1" > 
            <label for="" class="pt-1">Departamento </label>  
        </div>  
        <div class="col-sm-4 col-md-3"> 
            <select class="form-control  " style="width: 100%;border-radius: 40px;" id="iddepartamento" name="iddepartamento"  disabled>  
                <option value="" selected>-Departamento-</option>
            </select>  
        </div>
        <div class="col-sm-2 col-md-1" > 
            <label for="" class="pt-1">Provincia </label>  
        </div>  
        <div class="col-sm-4 col-md-3" > 
            <select class="form-control " style="width: 100%;border-radius: 40px;" id="idprovincia" name="idprovincia"  disabled>  
                <option value="" selected>-Provincia-</option>  
            </select>  
        </div>
        <div class="d-none d-sm-block col-12 d-md-none"><br></div>
        <div class="col-2 d-md-none"></div>
        <div class="col-sm-2 col-md-1" > 
            <label for="" class="pt-1">Distritos </label>  
        </div>  
        <div class="col-sm-4 col-md-3"> 
            <select class="form-control " style="width: 100%;border-radius: 40px;" id="iddistrito" name="iddistrito"  disabled>  
                < <option value="" selected>-Distrito-</option> 
            </select>  
        </div>
        <div class="d-none d-md-block col-12"><br></div>
        <div class="d-none d-sm-block col-12 d-md-none"><br></div>
    </div>
    <div class="row">
        <div class="col-sm-2 col-md-2" > 
            <label for="">Medio de Transporte</label>  
        </div>  
        <div class="col-sm-3 col-md-2 pr-1"> 
            <select class="form-control  " style="width: 100%;border-radius: 40px;" id="mediotransporte" name="mediotransporte"  >  
                <option value="A pie">A pie</option>
                <option value="MicroBus">MicroBus</option>
                <option value="Taxi">Taxi</option>
                <option value="Moto Lineal">Moto Lineal</option>
                <option value="MotoTaxi">MotoTaxi</option>
                <option value="Combi">Combi</option>
                <option value="Colectivo">Colectivo</option>
                <option value="VehiculoPropio">Vehículo Propio</option>
                <option value="Otros">Otros</option>
            </select>    
        </div>
        <div class="col-sm-3 col-md-2 pl-1"  > 
            <label for="" >Tiempo de Demora</label>  
        </div>  
        <div class="col-sm-3 col-md-1 pl-0"> 
            <input type="number" class="form-control" min="1" name="tiempodemora" id="tiempodemora" style="border-radius: 40px;">  
        </div>
        <div class="col-sm-2 col-md-2 pl-0 pr-1 " > 
            <label for="">Material de Domicilio</label>  
        </div>  
        <div class="col-sm-4 col-md-3 pl-0"> 
            <select class="form-control" style="width: 100%;border-radius: 40px;" id="materialdomicilio" name="materialdomicilio" >  
                <option value="LADRILLO">LADRILLO</option>
                <option value="LADRILLO Y/O CEMENTO">LADRILLO Y/O CEMENTO</option>
                <option value="CEMENTO">CEMENTO</option>
                <option value="Otros">Otros</option>
            </select> 
        </div>
        <div class="d-none d-md-block col-12"><br></div>
        <div class="col-sm-2 col-md-1 pl-1"> 
            <label for="">Energia Electrica</label>
        </div>   
        <div class="col-sm-4 col-md-3 pl-0" > 
            <select class="form-control" id="energiaelectrica" name="energiaelectrica" style="border-radius: 40px;" >  
                <option value="INSTALACION DOMICILIARIA">INSTALACION DOMICILIARIA</option>
                <option value="INSTALACION PUBLICA">INSTALACION PUBLICA</option>
                <option value="Otros">Otros</option>
            </select>  
        </div>
        <div class="col-sm-1 col-md-1 pl-2 pr-2"> 
            <label for="">Agua Potable</label>  
        </div>  
        <div class="col-sm-4 col-md-3 pl-3 ">   
            <select class="form-control" id="aguapotable" name="aguapotable" style="border-radius: 40px;" >  
                <option value="INSTALACION PROPIA">INSTALACION PROPIA</option>
                <option value="INSTALACION COMPARTIDA">INSTALACION COMPARTIDA</option>
                <option value="Otros">Otros</option>
            </select> 
        </div>
        <div class="col-sm-2 col-md-1" > 
            <label for="" class="pt-1">Desague</label>  
        </div>  
        <div class="col-sm-5 col-md-3 pl-0"> 
            <select class="form-control" id="desague" name="desague" style="border-radius: 40px;">  
                <option value="INSTALACION DOMICILIARIA">INSTALACION DOMICILIARIA</option>
                <option value="INSTALACION PUBLICA">INSTALACION PUBLICA</option>
                <option value="Otros">Otros</option>
            </select>  
        </div>
        <div class="d-none d-md-block col-12"><br></div>
    </div>
    <div class="row">
        <div class="col-sm-2 col-md-1 pl-0"> 
            <label for="" class="pt-1" >SS:HH</label>  
        </div>  
        <div class="col-sm-6 col-md-3">   
            <select class="form-control" style="width: 100%;border-radius: 40px;" id="sshh" name="sshh" >  
                <option value="INODORO SIN AGUA CORRIENTE">INODORO SIN AGUA CORRIENTE</option>
                <option value="INODORO CON AGUA CORRIENTE">INODORO CON AGUA CORRIENTE</option>
                <option value="Otros">Otros</option>
            </select>
        </div>
        <div class="col-sm-2 col-md-1" > 
            <label for="" >Nro de Habitaciones</label>  
        </div>  
        <div class="col-sm-2 col-md-1"> 
            <input type="number" class="form-control" min="1" name="numerohabitaciones" id="numerohabitaciones" style="border-radius: 40px;">  
        </div>
        <div class="col-sm-3 col-md-2 pl-0"> 
            <label for="" style="color: black">Nro de Habitantes</label>  
        </div>  
        <div class="col-sm-2 col-md-1"> 
            <input type="number" class="form-control" min="1" name="numerohabitantes" id="numerohabitantes" style="border-radius: 40px;">  
        </div>
        <div class="col-sm-2 col-md-1"> 
            <label for="" style="color: black" class="pt-1">Situación</label>  
        </div>  
        <div class="col-sm-4 col-md-2"> 
            <select class="form-control" style="width: 100%;border-radius: 40px;" id="situacion" name="situacion"  >  
                <option value="PROMOVIDO">PROMOVIDO</option>
                <option value="ACEPTADO">ACEPTADO</option>
                <option value="RECHAZADO">RECHAZADO</option>
                <option value="OBSERVADO">OBSERVADO</option>
                <option value="Otros">Otros</option>
            </select> 
        </div>
        <div class="d-none d-md-block col-12"><br></div>
    </div>
    <div class="col-md-12 text-center">  
            <div class="form-group"> 
                <button class="btn btn-primary mr-4" id="btnRegistrar" data-loading text="<i class='fa a-spinner fa-spin'></i> Registrando"> 
                <i class='fas fa-save'></i> Registrar</button>    
                <a href="{{URL::to('alumno')}}" class='btn btn-danger'><i class='fas fa-ban'></i> Cancelar</a>  
            </div>  
    </div> 

@endsection    

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){

        $("#idpais").change(function(){
        var pais = $(this).val();
            $('#iddepartamento').removeAttr('disabled');
        $.get('/paisdepartamento/'+pais, function(data){
          console.log(data);
            var departamento_select = '<option value="" disabled selected>-Seleccione un Departamento-</option>'
              for (var i=0; i<data.length;i++)
                departamento_select+='<option value="'+data[i].iddepartamento+'">'+data[i].departamento+'</option>';
              $("#iddepartamento").html(departamento_select);

            });
   
        });

        $("#iddepartamento").change(function(){
        var departamento = $(this).val();
            $('#idprovincia').removeAttr('disabled');
        $.get('/departamentoprovincia/'+departamento, function(data){
          console.log(data);
            var provincia_select = '<option value="" disabled selected>-Seleccione una Provincia-</option>'
              for (var i=0; i<data.length;i++)
                provincia_select+='<option value="'+data[i].idprovincia+'">'+data[i].provincia+'</option>';
              $("#idprovincia").html(provincia_select);

            });
        });

        $("#idprovincia").change(function(){
        var provincia = $(this).val();
            $('#iddistrito').removeAttr('disabled');
        $.get('/provinciadistrito/'+provincia, function(data){
          console.log(data);
            var distrito_select = '<option value="" disabled selected>-Seleccione un Distrito-</option>'
              for (var i=0; i<data.length;i++)
                distrito_select+='<option value="'+data[i].iddistrito+'">'+data[i].distrito+'</option>';
              $("#iddistrito").html(distrito_select);

            });
        });
        
        $("#fechanacimiento").change(function (){
            
            //var x=new Date();
            var fecha = document.getElementById('fechanacimiento').value.split('-');
            //x.setFullYear(fecha[0],fecha[1]-1,fecha[2]);
            //x.setFullYear(fecha[0]);
            console.log(fecha[0]);
            //var mesescogido = fecha[1]-1;

            var today = new Date();
            var y = today.getFullYear();
            //var m = today.getMonth();
            //console.log(y-3)
            //console.log(today);
            var anioescolar= y-2 ;  
            var aniopermitido=y-18;
            //var mesescolar= m + 1;
            console.log(anioescolar);  
            //console.log(mesescolar); 
            //&& mesescogido === mesescolar (por si se desee con los meses)
                   if ( fecha[0] >= aniopermitido && fecha[0]<=anioescolar){
                            alert("La fecha introducida es correcta.");
                            $('#apellidos').removeAttr('disabled');
                            $('#nombres').removeAttr('disabled');
                        }
                    else{
                        alert("La fecha introducida No es correcta.");
                        document.getElementById('apellidos').disabled = true; 
                        document.getElementById('nombres').disabled = true;
                    }
                        
        });
    });
</script>
