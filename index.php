


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vulnx  My Wallet </title>
    <meta http-equiv="refresh" content="720000000">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <link rel="stylesheet" href="js/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="js/plugins/toastr/toastr.min.css">
   <link rel="stylesheet" href="css/adminlte.min.css">
    <link rel="stylesheet" href="js/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <link href="https://anon-bit101.ai/assets/theme//css/theme.css" rel="stylesheet" type="text/css" media="all" />
 <head>
 <style>
        .authentication-bg {
            background-image: url(https://anon-bit101.ai/assets/img/b2c371f8d5404d947603b0043dbe700a.jpg);
            background-size: cover;
            background-position: center;
            background-color: rgb(52, 58, 64);
        }
 
 
        @-webkit-keyframes opacity {
            0% {
                opacity: 1;
            }
 
            100% {
                opacity: 0;
            }
        }
 
        @-moz-keyframes opacity {
            0% {
                opacity: 1;
            }
 
            100% {
                opacity: 0;
            }
        }
 
        #loading {
            text-align: center;
            margin: 100px 0 0 0;
        }
 
        #loading span {
            -webkit-animation-name: opacity;
            -webkit-animation-duration: 1s;
            -webkit-animation-iteration-count: infinite;
 
            -moz-animation-name: opacity;
            -moz-animation-duration: 1s;
            -moz-animation-iteration-count: infinite;
        }
 
        #loading span:nth-child(2) {
            -webkit-animation-delay: 100ms;
            -moz-animation-delay: 100ms;
        }
 
        #loading span:nth-child(3) {
            -webkit-animation-delay: 300ms;
            -moz-animation-delay: 300ms;
        }
 
        div.dataTables_wrapper div.dataTables_filter {
            width: 100%;
            float: none;
            text-align: left;
        }
 
        #products_filter {
            margin-bottom: 20px;
            border-bottom: 1px solid #000;
        }
 
 
 
        .paginate_button .current {
            color: #fff;
            background-color: #343a40;
            border-color: #343a40;
        }
 
        @media only screen and (max-width: 767px) {
            #slide-navbar-collapse {
                position: fixed;
                top: 0;
                left: 0px;
                z-index: 99;
                width: 200px;
                height: 100%;
                background-color: #6c757d;
                overflow: auto;
                padding-left: 5px;
                overflow-wrap: break-word;
                color: #fff;
            }
 
            .menu-overlay {
                display: none;
                background-color: #000;
                bottom: 0;
                left: 0;
                opacity: 0.5;
                filter: alpha(opacity=50);
                /* IE7 & 8 */
                position: fixed;
                right: 0;
                top: 0;
                z-index: 49;
 
            }
        }
 
        .colored-toast.swal2-icon-success {
            background-color: #a5dc86 !important;
            color: #fff;
        }
 
        .colored-toast.swal2-icon-error {
            background-color: #f27474 !important;
            color: #fff;
        }
 
        .colored-toast.swal2-icon-warning {
            background-color: #f8bb86 !important;
        }
 
        .colored-toast.swal2-icon-info {
            background-color: #3fc3ee !important;
        }
 
        .colored-toast.swal2-icon-question {
            background-color: #87adbd !important;
        }
 
        .colored-toast .swal2-title {
            color: white !important;
        }
 
        .colored-toast .swal2-close {
            color: white !important;
        }
 
        .colored-toast .swal2-html-container {
            color: white !important;
        }
 
        body {
            top: 0 !important;
        }
 
        .goog-te-gadget {
            padding: .5rem 1rem;
        }
 
        .goog-te-gadget-simple .goog-te-menu-value {
            color: #6c6b71;
            font-weight: 600;
        }
 
        .goog-te-banner-frame {
            margin-bottom: -40px !important;
            display: none !important;
        }
    </style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/6.0.0/bootbox.min.js" integrity="sha512-oVbWSv2O4y1UzvExJMHaHcaib4wsBMS5tEP3/YkMP6GmkwRJAa79Jwsv+Y/w7w2Vb/98/Xhvck10LyJweB8Jsw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   
 
     <script src="https://xbasetools.xyz/layout/js/clipboard.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
       <script src="https://xbasetools.xyz/layout/js/bootbox.min.js"></script>
     <link rel="stylesheet" type="text/css" href="layout/css/flags.css" />
    <link rel="stylesheet" href="js/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="js/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="js/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed dark-mode">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand  navbar-dark navbar-gray-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>











    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
 

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar elevation-4 sidebar-dark-danger">
    <!-- Brand Logo -->
    <a href="https://vulnx.biz/user" class="brand-link bg-danger">
      <img src="https://vulnx.biz/assets/images/logo-sm.png" alt="Vulnx" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Vulnx</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://vulnx.biz/assets/images/logo-sm.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
              ADMINISTRTOR
                                <span class="right badge badge-danger">Inactive<span>
                        </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="https://vulnx.biz/user" class="nav-link  active ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Home
                        </p>
                    </a>

                </li>
                    <li class="nav-item">
                        <a href="https://vulnx.biz/user/wallet" class="nav-link ">
                            <i class="nav-icon fas fa-dollar-sign"></i>
                            <p>
                                Balance
                                <span class="right badge badge-danger">$0</span>
                            </p>
                        </a>
                    
                </li>
                    <li class="nav-item">
                    <a href="https://vulnx.biz/user/logout" class="nav-link">
                        <i class="nav-icon fas fa-power-off text-danger"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>

                          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
<p> <small>USA BANKS</small> <i class="right fas fa-angle-left"></i><span class="right badge badge-danger">New</span>
              </p>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Simple Link 1   <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 2   <span class="badge badge-info right">6</span>       
 </p>
              
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 3   <span class="badge badge-info right">6</span>       
 </p>
              </p>
            </a>
          </li>           
          
              
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Simple Link 4   <span class="badge badge-info right">6</span>       
 </p>
              </p>
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 5   <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 6   <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
          
              
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Simple Link 7
            <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 8
             <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 9
            <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
     </ul>
     
                          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
<p> <small>EUROPEAN BANKS</small> <i class="right fas fa-angle-left"></i><span class="right badge badge-danger">New</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Simple Link 1   <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 2   <span class="badge badge-info right">6</span>       
 </p>
              
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 3   <span class="badge badge-info right">6</span>       
 </p>
              </p>
            </a>
          </li>           
          
              
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Simple Link 4   <span class="badge badge-info right">6</span>       
 </p>
             
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 5   <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 6   <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
          
              
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Simple Link 7
            <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 8
             <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 9
            <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
     </ul>     
               <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
<p> <small>USA BANKS(AN/RN)</small> <i class="right fas fa-angle-left"></i><span class="right badge badge-danger">New</span>
              </p>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Simple Link 1   <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 2   <span class="badge badge-info right">6</span>       
 </p>
              
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 3   <span class="badge badge-info right">6</span>       
 </p>
              </p>
            </a>
          </li>           
          
              
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Simple Link 4   <span class="badge badge-info right">6</span>       
 </p>
              </p>
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 5   <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 6   <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
          
              
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Simple Link 7
            <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 8
             <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 9
            <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
     </ul>
         <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
<p> <small>SHOPWITHSCRIP</small> <i class="right fas fa-angle-left"></i><span class="right badge badge-danger">New</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Simple Link 1   <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 2   <span class="badge badge-info right">6</span>       
 </p>
              
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 3   <span class="badge badge-info right">6</span>       
 </p>
              </p>
            </a>
          </li>           
          
              
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Simple Link 4   <span class="badge badge-info right">6</span>       
 </p>
             
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 5   <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 6   <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
          
              
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Simple Link 7
            <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 8
             <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 9
            <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
     </ul>
            <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
<p> <small>USA SELF(Created Accounts)</small> <i class="right fas fa-angle-left"></i><span class="right badge badge-danger">New</span>
              </p>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Simple Link 1   <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 2   <span class="badge badge-info right">6</span>       
 </p>
              
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 3   <span class="badge badge-info right">6</span>       
 </p>
              </p>
            </a>
          </li>           
          
              
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Simple Link 4   <span class="badge badge-info right">6</span>       
 </p>
              </p>
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 5   <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 6   <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
          
              
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Simple Link 7
            <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 8
             <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 9
            <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
     </ul>
           
        <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
<p> <small>CANADA BANKs </small> <i class="right fas fa-angle-left"></i><span class="right badge badge-danger">New</span>
              </p>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Simple Link 1   <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 2   <span class="badge badge-info right">6</span>       
 </p>
              
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 3   <span class="badge badge-info right">6</span>       
 </p>
              </p>
            </a>
          </li>           
          
              
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Simple Link 4   <span class="badge badge-info right">6</span>       
 </p>
              </p>
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 5   <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 6   <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
          
              
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Simple Link 7
            <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 8
             <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 9
            <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
     </ul>
               
           
            <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
<p> <small> PROS SSN Fullz</small><i class="right fas fa-angle-left"></i><span class="right badge badge-danger">New</span>
              </p>
             
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Simple Link 1   <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 2   <span class="badge badge-info right">6</span>       
 </p>
              
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 3   <span class="badge badge-info right">6</span>       
 </p>
              </p>
            </a>
          </li>           
          
              
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Simple Link 4   <span class="badge badge-info right">6</span>       
 </p>
              </p>
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 5   <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 6   <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
          
              
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Simple Link 7
            <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 8
             <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 9
            <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
     </ul>
                     
            <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
<p> <small>METHODS/TUTORIALS</small><i class="right fas fa-angle-left"></i><span class="right badge badge-danger">New</span>
              </p>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Simple Link 1   <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 2   <span class="badge badge-info right">6</span>       
 </p>
              
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 3   <span class="badge badge-info right">6</span>       
 </p>
              </p>
            </a>
          </li>           
          
              
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Simple Link 4   <span class="badge badge-info right">6</span>       
 </p>
              </p>
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 5   <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 6   <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
          
              
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Simple Link 7
            <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 8
             <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
             
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 9
            <span class="badge badge-info right">6</span>       
 </p>
            </a>
          </li>           
        </ul>
      </nav> 
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>