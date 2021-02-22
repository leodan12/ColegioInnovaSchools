@extends('layouts.plantillaAlumno')

@section('contenido')
<div class="container">
    <div class="content-section-heading text-center">
      <h3 class="text-secondary mb-0"> ✔ Elige Una De Las Opciones Para Los Alumnos✔</h3>
      <br>
    </div>
    <div class="row no-gutters">

      <div class="col-4 ">

      </div>

      <div class="col-12 col-sm-6 col-md-4">
        <a class="portfolio-item" href="/cursosAlumno">
          <div class="caption">
            <div class="caption-content">
              <div class="h2">MIS CURSOS</div>
              <p class="mb-0">Cursos del estudiante</p>
            </div>
          </div>
          <img class="img-fluid" src="/img/colegiofondo01.jpg" alt="">
        </a>
      </div>           
     
    
      <div class="col-3 d-md-none">

      </div>
     
    </div>
  <!--</div>-->

<div class="row no-gutters">
  
   
  <!-- 
  <div class="col-lg-4">
    <a class="portfolio-item" href="/periodo">
      <div class="caption">
        <div class="caption-content">
          <div class="h2">PERIODOS</div>
          <p class="mb-0">Registra aquí Un Nuevo Periodo</p>
        </div>
      </div>
      <img class="img-fluid" src="/img/colegiofondo01.jpg" alt="">
    </a>
  </div>-->
</div>
</div>
@endsection
