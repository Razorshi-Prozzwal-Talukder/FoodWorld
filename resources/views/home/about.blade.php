<!DOCTYPE html>
<html lang="en">



<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>FooD WorlD</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('../../node_modules/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('../../node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('../../css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('../../images/favicon.html')}}" />
</head>

<body class="sidebar-dark">
  <!-- partial:../../partials/_settings-panel.html -->
  <div class="settings-panel">
    <ul class="nav nav-tabs" id="setting-panel" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="layouts-tab" data-toggle="tab" href="#layouts-section" role="tab" aria-controls="layouts-section" aria-expanded="true"><i class="mdi mdi-settings"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section"><i class="mdi mdi-account"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="close-button" href="#"><i class="mdi mdi-window-close"></i></a>
      </li>
    </ul>
    <div class="tab-content" id="setting-content">
      <div class="tab-pane fade show active" id="layouts-section" role="tabpanel" aria-labelledby="layouts-tab">
        <div class="color-tiles">
          <div class="tiles primary" id="primary-theme"></div>
          <div class="tiles success" id="success-theme"></div>
          <div class="tiles warning" id="warning-theme"></div>
          <div class="tiles danger" id="danger-theme"></div>
          <div class="tiles pink" id="pink-theme"></div>
          <div class="tiles info" id="info-theme"></div>
          <div class="tiles dark" id="dark-theme"></div>
          <div class="tiles light" id="light-theme"></div>
        </div>
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle btn-block mb-4" type="button" id="sidebar-color" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Sidebar Mode
          </button>
          <div class="dropdown-menu" aria-labelledby="sidebar-color">
            <a class="dropdown-item" href="#" id="side-theme-light">Light</a>
            <a class="dropdown-item" href="#" id="side-theme-dark">Dark</a>
          </div>
        </div>
        <div class="dropdown d-none d-md-block">
          <button class="btn btn-secondary dropdown-toggle btn-block" type="button" id="Layouts-type" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Layouts
          </button>
          <div class="dropdown-menu" aria-labelledby="Layouts-type">
            <a class="dropdown-item" href="#" id="boxed-layout-view">Boxed</a>
            <a class="dropdown-item" href="#" id="compact-layout-view">Compact menu</a>
            <a class="dropdown-item" href="#" id="icon-only-layout-view">Icon Menu</a>
            <a class="dropdown-item" href="#" id="rtl-layout-view">RTL</a>
            <a class="dropdown-item" href="#" id="hidden-menu-1-layout-view">Hidden Menu 1</a>
            <a class="dropdown-item" href="#" id="hidden-menu-2-layout-view">Hidden Menu 2</a>
          </div>
        </div>
      </div>
      <!-- layout section tabends -->
      <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-tab">
        
      </div>
      <!-- chat section tabends -->
    </div>
  </div>
  <!-- partial -->

  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar navbar-light col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="{{ URL::to('/') }}">{{-- <img src="images/salt_logo.svg" alt="Logo"> --}}<h1>HOME</h1></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>

       
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          
          <ul class="nav">
            <!--main pages start-->
            <li class="nav-item nav-category">
              <span class="nav-link">Main Menu</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ URL::to('/about') }}">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">About</span>
              </a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="{{ URL::to('/contact') }}">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">Contact</span>
              </a>
            </li>

           <li class="nav-item">
              <a class="nav-link" href="{{ URL::to('/suggestion') }}">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">Suggestion</span>
              </a>
          </li>

            <!--main pages end-->
            <!--sample pages start-->
            <li class="nav-item nav-category">
              <span class="nav-link">Login Section</span>
            </li>
            
            
           
           
            <!--sample pages end-->
            <!--ui features start-->
            
            <li class="nav-item">
              <a class="nav-link" href="{{ URL::to('/login') }}">
                <i class="mdi mdi-album menu-icon"></i>
                <span class="menu-title">Login</span>
              </a>
          </li>
            <!-- ui end -->
            <!-- data rep start-->
            
            
            <!--data rep end-->
            <!--forms start-->
            <li class="nav-item nav-category">
              <span class="nav-link">Restaurent Owner Section</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#formsSubmenu" aria-expanded="false" aria-controls="formsSubmenu">
                <i class="mdi mdi-clipboard-outline menu-icon"></i>
                <span class="menu-title">For Owner</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="formsSubmenu">
                <ul class="nav flex-column sub-menu">
                  
                  <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('/formfillup') }}">Form Fillup</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../forms/form-mask.html">Login</a>
                  </li>
                </ul>
              </div>
            </li>           
          </ul>
        </nav>
        <!-- partial -->
        <div class="content-wrapper">

            <h1>About Section</h1>

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="#">Razorshi Devoluper</a> &copy; 2018
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
















  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('../../node_modules/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('../../node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
  <script src="{{asset('../../node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('../../node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('../../js/off-canvas.js')}}"></script>
  <script src="{{asset('../../js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('../../js/misc.js')}}"></script>
  <script src="{{asset('../../js/settings.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.urbanui.com/salt/jquery/pages/samples/blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:33:56 GMT -->
</html>
