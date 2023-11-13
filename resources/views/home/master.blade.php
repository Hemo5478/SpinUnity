<!DOCTYPE html>
<html>
    <head>
        <title>
            SPINUNITY
        </title>
        <meta charset="utf-8">
        
        <!--CSS-->


        <link rel="stylesheet" href="css/fonts.css" />
        <link rel="stylesheet" href="css/style1.css" />

  <!-- font awesome style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  
    </head>
    <body >
       <div class="hero_area">

       <!-- Navigation -->
       @include('home.Navigation')
       <!-- End Navigation -->
    
          
       <!--Section Header-->
       @include('home.Header')
       <!--end of Header-->


       <!--Section About-->
       @include('home.About')
       <!--end of About-->



       <!--Section Associations-->
       @include('home.Associations')
       <!--end of Associations-->
       
         <!--Section Timeline-->
         @include('home.Timeline')
        <!--end of Timeline-->
       <!--Performers Section-->
       @include('home.Performers')
       <!--End of Performers-->

       <!--Section Numbers-->
       @include('home.Numbers')
       <!--End of Numbers-->


        <!-- Contact Section -->
        @include('home.Contact')
        <!-- End Contact Section -->

        <!-- Shop Section -->
        @include('home.Shop')
        <!-- End Shop Section -->

        <!-- Footer Section -->
        @include('home.Footer')
        <!-- End Footer Section -->
</div>

       
       



        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script>
    $('.carousel').on('slid.bs.carousel', function () {
      $(".indicator-2 li").removeClass("active");
      indicators = $(".carousel-indicators li.active").data("slide-to");
      a = $(".indicator-2").find("[data-slide-to='" + indicators + "']").addClass("active");
      console.log(indicators);

    })
  </script>
    </body>
</html>