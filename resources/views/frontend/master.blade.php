<!DOCTYPE html>
<html>
    <head>
        <title>
            BICYCLE
        </title>
        <meta charset="utf-8">
        <!--CSS-->
        <link rel="icon" href="img/fav.ico" type="image/x-icon" />

        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
       <!--  <link rel="stylesheet" type="text/css" href="css/style.css">-->
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/sb-admin-2.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="css/fonts.css" />
        <link rel="stylesheet" href="css/style1.css" />
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
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,500,600,700,800,900,900i%7CRoboto:400" />
    </head>
    <body>
    <base href="/">
       <header id="HOME">

       <!-- Navigation -->
       <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap" style="height: 0px;"> 
          <nav class="rd-navbar rd-navbar-aside rd-navbar-original rd-navbar-fixed" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                      <!-- Nav Item - User Information -->
                      

                  <!-- RD Navbar Brand-->
                  <div class="">
                    <a href="index.html"><img class="brand-logo-light" src="images/logo.png" alt="" width="50" height="50"></a>
                </div>
                  <div class="block-right">
                    <ul class="list-inline nav-list">
                      <li class="list-inline-item active"><a class="link-menu-item " href="/home">Home</a></li>
                      <li class="list-inline-item"><a class="link-menu-item " href="/user-association">Association</a></li>
                      <li class="list-inline-item "><a class="link-menu-item " href="/user-ride">Rides</a></li>
                      <li class="list-inline-item"><a class="link-menu-item " href="/user-event">Events</a></li>
                      <li class="list-inline-item"><a class="link-menu-item " href="/user-bike">Bikes</a></li>
                      <li class="list-inline-item"><a class="link-menu-item " href="/user-rent">Rent Bike</a></li>
                      <li class="list-inline-item"><a class="link-menu-item " href="/user-claim">Claims</a></li>
                      <li class="list-inline-item"><a class="link-menu-item " href="/user-blog">Blogs</a></li>

                      <li class="nav-item dropdown no-arrow ">
                        <a class="nav-link dropdown-toggle " href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                            <img class="img-profile rounded-circle" width="50" src="{{ Auth::user()->profile_photo_url }}" > 
                        </a>
                       <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right"
                            aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="{{ route('profile.show') }}">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                <span style="font-weight: 20px; color:blue;">Profile</span>
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                <span style="font-weight: 20px; color:blue;">Settings</span>
                            </a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                <span style="font-weight: 20px; color:blue;">Logout</span>
                            </a>
                        </div>
                        </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>



        <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <a class="btn btn-primary" href="{{ route('logout') }}" @click.prevent="$root.submit();">Logout</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

       <!-- End Navigation -->
    
                 <!-- Begin Page Content -->
                 @yield('front_content')
                        <!-- End of Page Content -->

       <!-- FOOTER -->      
        <section class="loading-overlay">
       <div class="sk-cube-grid">
        <div class="sk-cube sk-cube1"></div>
        <div class="sk-cube sk-cube2"></div>
        <div class="sk-cube sk-cube3"></div>
        <div class="sk-cube sk-cube4"></div>
        <div class="sk-cube sk-cube5"></div>
        <div class="sk-cube sk-cube6"></div>
        <div class="sk-cube sk-cube7"></div>
        <div class="sk-cube sk-cube8"></div>
        <div class="sk-cube sk-cube9"></div>
       </div>
       </section>
       
       
       <footer class="section footer-minimal context-dark">
        <div class="container wow-outer">
          <div
            class="wow fadeIn"
            style="visibility: hidden; animation-name: none"
          >
            <div class="row row-30 row-xl-60">
              <div class="col-12">
                <a href="index.html"
                  ><img
                    src="images/logo.png"
                    alt=""
                    width="100"
                    height="100"
                /></a>
              </div>
              <div class="col-12">
                <ul class="social-list">
                  <li>
                    <a
                      class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-facebook"
                      href="#"
                    ></a>
                  </li>
                  <li>
                    <a
                      class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-instagram"
                      href="#"
                    ></a>
                  </li>
                  <li>
                    <a
                      class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-twitter"
                      href="#"
                    ></a>
                  </li>
                  <li>
                    <a
                      class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-youtube-play"
                      href="#"
                    ></a>
                  </li>
                  <li>
                    <a
                      class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-pinterest-p"
                      href="#"
                    ></a>
                  </li>
                </ul>
              </div>
            </div>
            <p class="rights">
              <span>©&nbsp; </span><span class="copyright-year">2022</span
              ><span>&nbsp;</span><span>Club Area</span><span>.&nbsp;</span
              ><span>All Rights Reserved</span><span>.&nbsp;</span
              ><a href="privacy-policy.html">Privacy Policy</a>
            </p>
          </div>
        </div>
      </footer>
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
