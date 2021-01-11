<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Tableau de bord</title>

  <!-- GOOGLE FONTS -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
  <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="{{asset('css/sleek.css')}}" />
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"> 
  

  <!-- FAVICON -->
  <link href="assets/img/favicon.png" rel="shortcut icon" />

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="assets/plugins/nprogress/nprogress.js"></script>
</head>


  <body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    <div class="mobile-sticky-body-overlay"></div>

    <div class="wrapper">
      
              <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
        <aside class="left-sidebar bg-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="" class="scrollto"><img src="{{asset('assets/img/logo.JPG')}}" alt="" class="img-fluid" style="height=25px; width = 25px;"></a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-scrollbar">

              <!-- sidebar menu -->
        
                <ul class="nav sidebar-inner mt-1" id="sidebar-menu">
                    
                    <li>
                        <a href="/">
                            <i class="fas fa-home"></i>
                            <span class="nav-text">Go to site</span> <b class=""></b>
                        </a>
                    </li>
                    
                    <li class="has-sub" >
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements"
                            aria-expanded="false" aria-controls="ui-elements">
                            <i class="mdi mdi-email"></i>
                            <span class="nav-text">Message</span> <b class="caret"></b>
                        </a>
                        <ul  class="collapse"  id="ui-elements"
                            data-parent="#sidebar-menu">
                            <div class="sub-menu">
                                <li  class="has-sub" >
                                    <a class="sidenav-item-link nav-text"  href="/dashbord" data-target="#components"
                                        aria-expanded="false" aria-controls="components">
                                        <i class="fas fa-mail-bulk mr-2"></i>All message
                                    </a>
                                    
                                </li>
                            
                                <li  class="has-sub" >
                                    <a class="sidenav-item-link nav-text" href="/new_message"  data-target="#icons"
                                        aria-expanded="false" aria-controls="icons">
                                        <i class="fas fa-envelope-square mr-2"></i>New message
                                       
                                    </a> 
                                </li>
                            </div>
                        </ul>
                    </li>
                </ul>
            </div>

            <hr class="separator" />
          </div>
        </aside>
      <div class="page-wrapper">
                  <!-- Header -->
          <header class="main-header " id="header">
            <nav class="navbar navbar-static-top navbar-expand-lg">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <!-- search form -->
              <div class="search-form d-none d-lg-inline-block">
                <div class="input-group">
                  <button type="button" name="search" id="search-btn" class="btn btn-flat">
                    <i class="mdi mdi-magnify"></i>
                  </button>
                  <input type="text" name="query" id="search-input" class="form-control" placeholder="" autofocus autocomplete="off" />
                </div>
                <div id="search-results-container">
                  <ul id="search-results"></ul>
                </div>
              </div>

              <div class="navbar-right ">
                <ul class="nav navbar-nav">
                  <!-- Github Link Button -->
                  
                  <li class="dropdown notifications-menu">
                    <button class="dropdown-toggle" data-toggle="dropdown">
                      <i class="mdi mdi-bell-outline"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li class="dropdown-header">You have 5 notifications</li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-plus"></i> New user registered
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- User Account -->
                  <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <img src="assets/img/user/user.png" class="user-image" alt="User Image" />
                      <span class="d-none d-lg-inline-block">Abdus Salam</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <!-- User image -->
                      <li class="dropdown-header">
                        <img src="assets/img/user/user.png" class="img-circle" alt="User Image" />
                        <div class="d-inline-block">
                          Abdus Salam <small class="pt-1">abdus@gmail.com</small>
                        </div>
                      </li>

                      <li>
                        <a href="#"> <i class="mdi mdi-settings"></i> Account Setting </a>
                      </li>

                      <li class="dropdown-footer">
                        <a href="signin.html"> <i class="mdi mdi-logout"></i> Log Out </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>


          </header>
          <div class="container content-wrapper" style="padding-top:50px;min-height:80vh;">
            @yield('content')
          </div>
                  <footer class="footer mb-0">
                    <div class="copyright bg-white d-flex justify-content-around">
                      <p>
                        &copy; Copyright <strong><label for="" style="color: darkred; font-weight: bolder;">S</label><label for="" style="color: black;font-weight: bolder;">ci</label><label for="" style="color: darkred;font-weight: bolder;">P</label><label for="" style="color: black;font-weight: bolder;">ub</label> 2010-2020</strong>.
                        All Rights Reserved
                      </p>
                      <p>   
                        Designed by <a href="https://bootstrapmade.com/ "><label for="" style="color: darkred; font-weight: bolder;">S</label><label for="" style="color: black;font-weight: bolder;">ci</label><label for="" style="color: darkred;font-weight: bolder;">P</label><label for="" style="color: black;font-weight: bolder;">ub</label></a>
                      </p>
                    </div>
                    <script>
                        var d = new Date();
                        var year = d.getFullYear();
                        document.getElementById("copy-year").innerHTML = year;
                    </script>
                </footer>

          </div>
        </div>

        

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('plugins/toaster/toastr.min.js')}}"></script>
<script src="{{asset('plugins/slimscrollbar/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('plugins/charts/Chart.min.js')}}"></script>
<script src="{{asset('plugins/ladda/spin.min.js')}}"></script>
<script src="{{asset('plugins/ladda/ladda.min.js')}}"></script>
<script src="{{asset('plugins/jquery-mask-input/jquery.mask.min.js')}}"></script>
<script src="{{asset('plugins/select2/js/select2.min.js')}}"></script>
<script src="{{asset('plugins/jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
<script src="{{asset('plugins/jvectormap/jquery-jvectormap-world-mill.js')}}"></script>
<script src="{{asset('plugins/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('plugins/jekyll-search.min.js')}}"></script>
<script src="{{asset('js-dash/sleek.js')}}"></script>
<script src="{{asset('js-dash/chart.js')}}"></script>
<script src="{{asset('js-dash/date-range.js')}}"></script>
<script src="{{asset('js-dash/map.js')}}"></script>
<script src="{{asset('js-dash/custom.js')}}"></script>
<script src="{{asset('js-dash/popper.min.js')}}"></script>

<script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script>
       $(document).ready( function () {
          $('#dataTable').DataTable();
      });
        jQuery(document).ready(function($) {
                $(".clickable-row").click(function() {
                    window.location = $(this).data("href");
                });
           
        } );
    </script>

  </body>
</html>