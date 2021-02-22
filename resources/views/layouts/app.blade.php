<!DOCTYPE html>
<html >

<head>
  <meta charset="utf-8" />
 <link rel="apple-touch-icon" sizes="76x76"  href="/img/apple-icon.png">
 <link rel="icon" type="image/png" href="/img/centrotpf.png">  <!--logo arriba--> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    THE ONE
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--    FUENTESITAS E ICONOS     -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200"  />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS  -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/now-ui-kit.css?v=1.3.0">
  <link rel="stylesheet" href="css/demo.css">

  <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="css/style.css">

</head>

<body class="login-page sidebar-collapse">
  <!-- NAV BARRA -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">

    

 
      <div class="dropdown button-dropdown">
       
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-header">GRUPO N°01</a>
          <a class="dropdown-item" href="#">⭐ ATAUCURI YNFANTE, ISAAC DANIEL </a>
          <a class="dropdown-item" href="#">⭐ BRAÚL PORRAS, RICHARD ROBERT </a>
          <a class="dropdown-item" href="#">⭐ MACHUCA IPARRAGUIRRE, LEODAN </a>
          <a class="dropdown-item" href="#">⭐ VALDIVIA RAMOS, ROBERTO JOSE </a>
          <a class="dropdown-item" href="#">⭐ VILLARROEL RODRIGUEZ, LEANDRO </a>
        </div>
      </div>

      <div class="navbar-translate">
      <a class="navbar-brand" href="/integrantes" rel="tooltip" title="Hemos trabajado mucho en este proyecto" data-placement="bottom" >
          INTEGRANTES Y GRANDES AMIGOS
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
    
      <div class="collapse navbar-collapse justify-content-end" filter-color="#8ce1fd" id="navigation"   >
        
        <ul class="navbar-nav">
        
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="No te pierdas este sensual Twitter" data-placement="bottom" href="https://twitter.com/InnovaSchoolsPE" target="_blank">
              <i class="fab fa-twitter"></i>
              <p class="d-lg-none d-xl-none">Twitter</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Mira este latigable Facebook" data-placement="bottom" href="https://web.facebook.com/innovaschools/?_rdc=1&_rdr" target="_blank">
              <i class="fab fa-facebook-square"></i>
              <p class="d-lg-none d-xl-none">Facebook</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Un exquisito Instagram" data-placement="bottom" href="https://www.https://www.instagram.com/innovaschoolsperu/" target="_blank">
              <i class="fab fa-instagram"></i>
              <p class="d-lg-none d-xl-none">Instagram</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <br>
    <br>
  </nav>
  
  <!-- FIN  NAVBARRA -->
  <div class="page-header clear-filter" filter-color="black">
    
    <div class="page-header-image" data-video-mobile="no" data-width="1280" data-height="720"
     data-fallback="https://www.innovaschools.edu.pe/wp-content/uploads/2017/03/Mobile-Home.jpg" 
     data-mp4="https://www.innovaschools.edu.pe/wp-content/uploads/2018/09/video_home_innova.mp4"
      data-mp4-type="video/mp4" data-webm-type="video/webm"><video autoplay="" loop="" muted="" 
      playsinline="" poster="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
      style="background: url(&quot;https://www.innovaschools.edu.pe/wp-content/uploads/2017/03/Mobile-Home.jpg&quot;) 
      center center / cover no-repeat transparent; height: 772px; left: -245px; top: 0px; width: 1372px;">
      <source src="https://www.innovaschools.edu.pe/wp-content/uploads/2018/09/video_home_innova.mp4"
       type="video/mp4"></video></div>

       <footer class="footer">
        <div class=" container ">
          
          <div class="copyright" id="copyright">
            &copy;
            <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Diseñado por el Grupo N°01
            
          </div>
        </div>
      </footer>
      
      <div class="container">


         <main class="py-4">
            @yield('content')
        </main>
        </div>
        
      </div>
      
    
  </div>
  <!--   Core JS ARCCHIVOS   -->

  <script src="/adminlte/dist/js/core/jquery.min.js"></script>        
  <script src="/adminlte/dist/js/core/popper.min.js"></script>        
  <script src="/adminlte/dist/js/core/bootstrap.min.js"></script>        

  <!-- DE AQUÍ SAQUÉ ALGUNOS PLUGINS: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="/adminlte/plugins/gg/js/plugins/bootstrap-switch.js"></script>

  <!--  DE AQUÍ SAQUÉ ALGUNOS PLUGINS: http://refreshless.com/nouislider/ -->
  <script src="/adminlte/plugins/gg/js/plugins/nouislider.min.js"></script>

  <!--  DE AQUÍ SAQUÉ ALGUNOS PLUGINS: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="/adminlte/plugins/gg/js/plugins/bootstrap-datepicker.js"></script>

  <!--  Google Maps ESTE SCRIPT SOLO LO PEGUÉ xdddd    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- CENTRO DE EFECTOS Y SCRIPTS-->
  <script src="/adminlte/dist/js/now-ui-kit.js?v=1.3.0"></script>        

       <script src="/adminlte/plugins/jquery/jquery.min.js"></script>
        <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/adminlte/dist/js/adminlte.min.js"></script>  
</body>

</html>