<x-app-layout>
<!DOCTYPE html>
<html>
    <head>
        <title>
            SPINUNITY
        </title>
        <meta charset="utf-8">
        <!--CSS-->
        <link rel="icon" href="images/logo.png"/>
       <!--  <link rel="stylesheet" type="text/css" href="css/style.css">-->
        <link rel="stylesheet" href="{{ asset('css/fonts.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/style1.css') }}" />
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
 <link rel="stylesheet" href="https://leaflet.github.io/Leaflet.draw/src/leaflet.draw.css"/>
  <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
  <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
  <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
  
  <link rel="stylesheet" href="https://leaflet.github.io/Leaflet.draw/src/leaflet.draw.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
  <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>

        <!--Google Fonts-->
        <link
      rel="stylesheet"
      type="text/css"
      href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,500,600,700,800,900,900i%7CRoboto:400"
    />

      <!-- font awesome style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<!-- bootstrap core css -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />

<!-- fonts style -->
<link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet" />
<!-- responsive style -->
<link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />
<base href="/">

    </head>
    <body>
       <header id="HOME">

       <!-- Navigation -->
       @include('frontend.shared.navigation')
       <!-- End Navigation -->
    
                 <!-- Begin Page Content -->
                 @yield('front_content')
                 <!-- End of Page Content -->

       <!-- Navigation -->
       @include('frontend.shared.footer')
       <!-- End Navigation -->
      
       
       
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.nicescroll.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/core.min.js"></script>
        <script src="js/script.js"></script>
        <script>new WOW().init();</script>
        
    </body>
    
</html>
</x-app-layout>