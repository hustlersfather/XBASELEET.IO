<?php
ob_start();
session_start();
date_default_timezone_set('UTC');
include "includes/config.php";

if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
    header("location: login");
    exit();
}
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
?>





<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="alfacoins-site-verification" content="">
<meta name="revisit-after" content="3 days">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<script src="/cdn-cgi/apps/head/5OOZijtrf_Bpx-OYIJIWKuxGuQM.js">
</script><link rel="shortcut icon" href="../../favicon.ico" />
<title>XBASELEET</title>
<link rel="stylesheet" href="layout/css/bootstrap.min.css">
<script src="layout/js/jquery-3.4.1.min.js"></script>
<script src="layout/js/clipboard.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="layout/js/bootstrap.min.js"></script>
<script src="layout/js/bootbox.min.js"></script>
<link rel="stylesheet" type="text/css" href="layout/css/flags.css" />

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.colVis.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<link href="//cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

<script async src="//www.googletagmanager.com/gtag/js?id=UA-177092549-1"></script>
<script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('set', {'$usrid': 'USER_ID'}); // Set the user ID using signed-in user_id.
        gtag('config', 'UA-177092549-1');
        </script>
<link rel="stylesheet" href="layout/css/all.min.css" />
<link rel="stylesheet" href="layout/css/main.css?v=12.9" />
<link rel="stylesheet" href="layout/css/util.css" />
<style>body{padding-top:80px}</style>
<link rel="stylesheet" href="layout/fonts/iconic/css/material-design-iconic-font.min.css">
<script src="layout/js/main.js"></script>
<script type="text/javascript">
            // Notice how this gets configured before we load Font Awesome
            window.FontAwesomeConfig = { autoReplaceSvg: false }
        </script>
<style>
            @import url(//fonts.googleapis.com/css?family=Roboto:400);
            .navbar-nav .dropdown-menu
            {
            margin:0 !important
            }
        </style>
</head>
<style>
    .navbar-nav .dropdown-menu
    {
      margin:0 !important
    }
    .theme-light {
  --color-primary: #0060df;
  --color-secondary: #ffffff;
   --color-secondary2: #ecf0f1;
  --color-accent: #fd6f53;
  --font-color: #000000;
  --color-nav: #ffffff;
  --color-dropdown: #ffffff;
  --color-card: #ffffff;
   --color-card2: #d1ecf1;
  --color-info: #0c5460;
  --color-backinfo: #d1ecf1;
  --color-borderinfo: #bee5eb;

}
.theme-dark {
  --color-primary: #17ed90;
  --color-secondary: #353B50;
  --color-secondary2: #353B50;
  --color-accent: #12cdea;
  --font-color: #ffffff;
  --color-nav: #363947;
  --color-dropdown: rgba(171, 205, 239, 0.3);
  --color-card: #262A37;
   --color-card2: #262A37;
   --color-info: #4DD0E1;
  --color-backinfo: #262A37;
  --color-borderinfo: #262A37;
}
.them {

  background: var(--color-secondary);
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.them h1 {
  color: var(--font-color);
  font-family: sans-serif;
}
.card-body {
     color: var(--font-color);
    }
.them button {
  color: var(--font-color);
  background-color: #ffffff;
  padding: 10px 20px;
  border: 0;
  border-radius: 5px;
}
.navbar.navbar-light .navbar-toggler {
    color: var(--font-color);
}

/* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: 0.4s;
  transition: 0.4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 40px;
  width: 40px;
  left: 0px;
  bottom: 4px;
  top: 0;
  bottom: 0;
  margin: auto 0;
  -webkit-transition: 0.4s;
  transition: 0.4s;
  box-shadow: 0 0px 15px #2020203d;
  background: white url('https://i.ibb.co/FxzBYR9/night.png');
  background-repeat: no-repeat;
  background-position: center;
}

input:checked + .slider {
  background-color: #2196f3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196f3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(24px);
  -ms-transform: translateX(24px);
  transform: translateX(24px);
  background: white url('https://i.ibb.co/7JfqXxB/sunny.png');
  background-repeat: no-repeat;
  background-position: center;
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

  </style>
<script>

        function setTheme(themeName) {
            localStorage.setItem('theme', themeName);
            document.documentElement.className = themeName;
        }

        // function to toggle between light and dark theme
        function toggleTheme() {
            if (localStorage.getItem('theme') === 'theme-dark') {
                setTheme('theme-light');
            } else {
                setTheme('theme-dark');
            }
        }

        // Immediately invoked function to set the theme on initial load
        (function () {
            if (localStorage.getItem('theme') === 'theme-dark') {
                setTheme('theme-dark');
                document.getElementById('slider').checked = false;
            } else {
                setTheme('theme-light');
              document.getElementById('slider').checked = true;
            }
        })();

  </script>
<nav class="navbar navbar-expand-xl navbar  navbar-light " style="
                                                          position:fixed;
                                                          background-color: var(--color-nav);
                                                          z-index:1;
                                                          top:0;
                                                          left:0;
                                                          right:0;
                                                          line-height: 1.5;
                                                          font-family: 'Lato', sans-serif;
                                                          font-size: 15px;
                                                          padding-top: 0.5rem;
                                                          padding-right: 1rem;
                                                          padding-bottom: 0.5rem;
                                                          padding-left: 1rem;
                                                        ">
<a class="navbar-brand" href="main" style="color: var(--font-color);"><img width="40px" src="layout/images/logo.png"> Odin</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<i class="navbar-toggler-icon"></i>
</button>
<div class="collapse navbar-collapse order-1" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">

<li class="nav-item dropdown mr-auto">
<a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-warehouse fa-sm orange-text"></i>
Hosts
</a>
<div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="rdp" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-desktop fa-fw"></i> RDPs <span class="badge badge-primary">147</span></span></a>
<a class="dropdown-item" href="cPanel" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-tools fa-fw"></i> cPanels <span class="badge badge-primary">10757</span></span></a>
<a class="dropdown-item" href="shell" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-file-code fa-fw"></i> Shells <span class="badge badge-primary">990</span></span></a>
<a class="dropdown-item" href="ssh" style="color: var(--font-color);"><span class="px-2"><i class="fab fa-linux"></i> SSH/WHM <span class="badge badge-primary">149</span></span></a>
</div>
</li>

<li class="nav-item dropdown mr-auto">
<a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-leaf fa-fw fa-sm text-success" style="margin-right: 4px;"></i>Premium</a>
<div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="premium_shell" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> Premium Shells <span class="badge badge-primary">104</span></span></a>
<a class="dropdown-item" href="premium_cPanel" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> Premium cPanels <span class="badge badge-primary">572</span></span></a>
</div>
</li>

<li class="nav-item dropdown mr-auto">
<a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fab fa-google-play fa-sm text-success"></i>
Send
</a>
<div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="mailer" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> Mailers <span class="badge badge-primary">575</span></span></a>
<a class="dropdown-item" href="smtp" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-envelope fa-fw"></i> SMTPs <span class="badge badge-primary">1766</span></span></a>
</div>
</li>


<li class="nav-item dropdown mr-auto">
<a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-mail-bulk fa-sm pink-color"></i> Leads
</a>
<div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="leads-5" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-award"></i> 100% Validated Leads <span class="badge badge-primary">0</span></span></a>
<a class="dropdown-item" href="leads-1" style="color: var(--font-color);"><span class="px-2"><i class="fa fa-fire orange-color"></i> Email Only <span class="badge badge-primary">140</span></span></a>
<a class="dropdown-item" href="leads-2" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-passport"></i> Combo Email:Password <span class="badge badge-primary">0</span></span></a>
<a class="dropdown-item" href="leads-3" style="color: var(--font-color);"><span class="px-2"><i class="fab fa-battle-net"></i> Combo Username:Password <span class="badge badge-primary">0</span></span></a>
<a class="dropdown-item" href="leads-4" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-at"></i> Email Access <span class="badge badge-primary">2</span></span></a>
<a class="dropdown-item" href="leads-6" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-mobile-alt"></i> Phone Number Only <span class="badge badge-primary">20</span></span></a>
<a class="dropdown-item" href="leads-7" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-phone-square"></i> Combo Phone:Password <span class="badge badge-primary">3</span></span></a>
<a class="dropdown-item" href="leads-8" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-inbox"></i> Full Data <span class="badge badge-primary">0</span></span></a>
<a class="dropdown-item" href="leads-9" style="color: var(--font-color);"><span class="px-2"><i class="fab fa-facebook"></i> Social Media Data <span class="badge badge-primary">0</span></span></a>
</div>
</li>


 <li class="nav-item dropdown mr-auto">
<a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-tie fa-sm"></i> Business
</a>
<div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="business-1" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-business-time"></i> cPanel Webmail <span class="badge badge-primary">2283</span></span></a>
<a class="dropdown-item" href="business-2" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-mail-bulk"></i> Godaddy Webmail <span class="badge badge-primary">275</span></span></a>
<a class="dropdown-item" href="business-3" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-globe"></i> Office365 Webmail <span class="badge badge-primary">10362</span></span></a>
<a class="dropdown-item" href="business-4" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-envelope-open-text"></i> Rackspace Webmail <span class="badge badge-primary">1809</span></span></a>
</div>
</li>


<li class="nav-item dropdown mr-auto">
<a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-friends fa-sm"></i> Accounts
</a>
<div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="accounts-1" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-comments-dollar"></i> Marketing <span class="badge badge-primary">108</span></span></a>
<a class="dropdown-item" href="accounts-2" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-server"></i> Hosting / Domain <span class="badge badge-primary">15</span></span></a>
<a class="dropdown-item" href="accounts-3" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-gamepad"></i> Games <span class="badge badge-primary">18</span></span></a>
<a class="dropdown-item" href="accounts-4" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-cubes"></i> VPN/Socks Proxy>Email Access <span class="badge badge-primary">1171</span></span></a>
<a class="dropdown-item" href="accounts-5" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-shopping-cart"></i> Shopping{Amazon, Ebay, ...} <span class="badge badge-primary">97</span></span></a>
<a class="dropdown-item" href="accounts-6" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-ethernet"></i> Programs {Antivirus, Adobe, ...} <span class="badge badge-primary">0</span></span></a>
<a class="dropdown-item" href="accounts-7" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-stream"></i> Stream {Netflix,HBO, ... } <span class="badge badge-primary">138</span></span></a>
<a class="dropdown-item" href="accounts-8" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-user-plus"></i> Dating <span class="badge badge-primary">57</span></span></a>
<a class="dropdown-item" href="accounts-9" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-graduation-cap"></i> Learning{ Udacity, Udemy, Lynda, ... } <span class="badge badge-primary">14</span></span></a>
<a class="dropdown-item" href="accounts-10" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-window-restore"></i> Torrent / File Host <span class="badge badge-primary">3</span></span></a>
<a class="dropdown-item" href="accounts-11" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-phone-volume"></i> Voip / Sip <span class="badge badge-primary">1</span></span></a>
<a class="dropdown-item" href="accounts-12" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-network-wired"></i> Other <span class="badge badge-primary">3</span></span></a>
</div>
</li>


<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" role="button" style="color: var(--font-color);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fab fa-drupal text-primary fa-sm"></i> Requests
</a>
<div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="requests" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-user-plus"></i> Buyers Requests <span class="badge badge-primary"> 72</span></span></a>
</div>
</li>

<li class="nav-item dropdown">
<a class="nav-link" href="offers" style="color: var(--font-color);"><i class="fas fa-user-secret text-primary fa-sm"></i> Bulk Offers</a>
</li>
</ul>

<ul class="navbar-nav profile">

<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell text-danger"></i> <span class="badge badge-success">0</span></a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: var(--font-color); background-color: var(--color-nav);">
<a class="dropdown-item" href="#" style="color: var(--font-color);">There is no new notifications</a> </div>
</li>

<li class="nav-item">
<a class="nav-link" href="addBalance" style="color: var(--font-color);" role="button" aria-haspopup="true" aria-expanded="false"><span class="badge badge-danger">
0
<span class="px-2"><i class="fa fa-plus"></i></span></span>
</a>
</li>

<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Ticket <span class="badge badge-success">0</span></a>
</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: var(--font-color); background-color: var(--color-nav);">
<a class="dropdown-item" href="orders" style="color: var(--font-color);"><span class="px-2">Report Items</span></a>
<a class="dropdown-item" href="tickets" style="color: var(--font-color);"><span class="px-2">My Tickets <span class="badge badge-success">0</span></span></a>
<a class="dropdown-item" href="reports" style="color: var(--font-color);"><span class="px-2">My Reports <span class="badge badge-success">0</span></span></a>
<a class="dropdown-item" href="OpenTicket" style="color: var(--font-color);"><span class="px-2">New Ticket</span></a>
</div>
</li>


<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> hustlersfather <i class="fa fa-user-secret" style="color: var(--font-color);"></i></a>
</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: var(--font-color); background-color: var(--color-nav);">
<a class="dropdown-item" href="setting" style="color: var(--font-color);"><span class="px-2">Setting <i class="fa fa-cog"></i></span></a>
<a class="dropdown-item" href="seller-profile" style="color: var(--font-color);"><span class="px-2">Profile <i class="fa fa-user"></i></span></a>
<a class="dropdown-item" href="orders" style="color: var(--font-color);"><span class="px-2">My Orders <i class="fa fa-shopping-cart"></i></span></a>
<a class="dropdown-item" href="addBalance" style="color: var(--font-color);"><span class="px-2">Add Balance <i class="fa fa-money-bill-alt"></i></span></a>
<a class="dropdown-item" href="logout" style="color: var(--font-color);"><span class="px-2">Logout <i class="fa fa-door-open"></i></span></a>
</div>
</li>

</ul>

</div>
</nav>
<style>
.modal-dialog.modal-frame.modal-top.modal-notify.modal-danger .modal-body,.modal-dialog.modal-frame.modal-top.modal-offernov.modal-danger .modal-body{
	    padding-top: 35px;
}
.modal-dialog.modal-frame.modal-top.modal-notify.modal-danger,.modal-dialog.modal-frame.modal-top.modal-offernov.modal-danger {
    max-width: 500px !important;
    margin: 1.75rem auto !important;
    position: relative;
    width: auto !important;
    pointer-events: none;
}
a.closearb {
    position: absolute;
    top: 2.5px;
    right: 2.5px;
    display: block;
    width: 30px;
    height: 30px;
    text-indent: -9999px;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center center;
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAAAAXNSR0IArs4c6QAAA3hJREFUaAXlm8+K00Acx7MiCIJH/yw+gA9g25O49SL4AO3Bp1jw5NvktC+wF88qevK4BU97EmzxUBCEolK/n5gp3W6TTJPfpNPNF37MNsl85/vN/DaTmU6PknC4K+pniqeKJ3k8UnkvDxXJzzy+q/yaxxeVHxW/FNHjgRSeKt4rFoplzaAuHHDBGR2eS9G54reirsmienDCTRt7xwsp+KAoEmt9nLaGitZxrBbPFNaGfPloGw2t4JVamSt8xYW6Dg1oCYo3Yv+rCGViV160oMkcd8SYKnYV1Nb1aEOjCe6L5ZOiLfF120EjWhuBu3YIZt1NQmujnk5F4MgOpURzLfAwOBSTmzp3fpDxuI/pabxpqOoz2r2HLAb0GMbZKlNV5/Hg9XJypguryA7lPF5KMdTZQzHjqxNPhWhzIuAruOl1eNqKEx1tSh5rfbxdw7mOxCq4qS68ZTjKS1YVvilu559vWvFHhh4rZrdyZ69Vmpgdj8fJbDZLJpNJ0uv1cnr/gjrUhQMuI+ANjyuwftQ0bbL6Erp0mM/ny8Fg4M3LtdRxgMtKl3jwmIHVxYXChFy94/Rmpa/pTbNUhstKV+4Rr8lLQ9KlUvJKLyG8yvQ2s9SBy1Jb7jV5a0yapfF6apaZLjLLcWtd4sNrmJUMHyM+1xibTjH82Zh01TNlhsrOhdKTe00uAzZQmN6+KW+sDa/JD2PSVQ873m29yf+1Q9VDzfEYlHi1G5LKBBWZbtEsHbFwb1oYDwr1ZiF/2bnCSg1OBE/pfr9/bWx26UxJL3ONPISOLKUvQza0LZUxSKyjpdTGa/vDEr25rddbMM0Q3O6Lx3rqFvU+x6UrRKQY7tyrZecmD9FODy8uLizTmilwNj0kraNcAJhOp5aGVwsAGD5VmJBrWWbJSgWT9zrzWepQF47RaGSiKfeGx6Szi3gzmX/HHbihwBser4B9UJYpFBNX4R6vTn3VQnez0SymnrHQMsRYGTr1dSk34ljRqS/EMd2pLQ8YBp3a1PLfcqCpo8gtHkZFHKkTX6fs3MY0blKnth66rKCnU0VRGu37ONrQaA4eZDFtWAu2fXj9zjFkxTBOo8F7t926gTp/83Kyzzcy2kZD6xiqxTYnHLRFm3vHiRSwNSjkz3hoIzo8lCKWUlg/YtGs7tObunDAZfpDLbfEI15zsEIY3U/x/gHHc/G1zltnAgAAAABJRU5ErkJggg==);
}
</style><style>

.scroll-area-lg {
    height: 400px;
    overflow-x: hidden;
}
.scrollbar-sidebar, .scrollbar-container {
    position: relative;
    height: 100%;
}
.ps {
    overflow: hidden !important;
    overflow-anchor: none;
    touch-action: auto;
}
.heading{
     font-size: 16px;
     font-weight: bold;
    }
 .fa-plus-circle {
      color: green;
    }
#tour {
    font-family: 'Raleway', sans-serif;
}

</style>
<body class="them loading">
<link rel="stylesheet" href="/layout/css/flexslider5.css" type="text/css">
<script src="/layout/js/jquery.flexslider-min.js"></script>
<style>
#tour {
    font-family: 'Raleway', sans-serif;
}

#tour .flexslider {
    margin: 0 0 60px;
    background: #fff;
    border: 0px solid #fff;
    position: relative;
    zoom: 0;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    border-radius: 0px;
    -webkit-box-shadow: '' 0 0px 0px rgba(0, 0, 0, 0.2);
    -moz-box-shadow: '' 0 0px 0px rgba(0, 0, 0, 0.2);
    -o-box-shadow: '' 0 0px 0px rgba(0, 0, 0, 0.2);
    box-shadow: '' 0 0px 0px rgba(0, 0, 0, 0.2);
}



#tour .flex-control-paging li a {
    width: 11px;
    height: 11px;
    display: block;
    background: #fff!important;
    border: 1px solid #3c8dbc;
    background: rgba(0, 0, 0, 0.5);
    cursor: pointer;
    text-indent: -9999px;
    -webkit-box-shadow: inset 0 0 0px rgba(0, 0, 0, 0);
    -moz-box-shadow: inset 0 0 0px rgba(0, 0, 0, 0);
    -o-box-shadow: inset 0 0 0px rgba(0, 0, 0, 0);
    box-shadow: inset 0 0 0px rgba(0, 0, 0, 0);
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    border-radius: 20px;
}

#tour .flex-control-paging li a.flex-active {
    background: #3c8dbc!important;
}

#tour .modal-body {
    padding: 0px;
}

#tour .modal-footer {
    background: #fafafa;
    border:0px;
}

#tour .flex-caption {
    padding: 20px 100px 20px 100px;
    text-align: center;
}

#tour .flex-caption .heading{
    font-weight: 600;
    font-size: 20px;
    color: #505050;
    padding-bottom: 15px;
}

#tour .flex-caption .caption-content{
    font-size: 15px;
    color: #505050;
}

</style>

<div class="modal fade top" id="mod" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
<div class="modal-dialog modal-frame modal-top modal-notify modal-danger" role="document">

<div class="modal-content">

<div class="modal-body">
<div id="bodyTicket" class="row d-flex justify-content-center align-items-center">
<span class="pt-3 mx-4" style="font-size: 14 px"><b>You have new replay ticket</span>
<a type="button" href="tickets" class="btn btn-success">Show tickets
</a>
</div>
</div>
</div>

</div>
</div>


<div class="modal fade top" id="modalrep" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
<div class="modal-dialog modal-frame modal-top modal-notify modal-danger" role="document">

<div class="modal-content">

<div class="modal-body">
<div id="bodyreport" class="row d-flex justify-content-center align-items-center">
<span class="pt-3 mx-4" style="font-size: 14 px"><b>You have new replay report</span>
<a type="button" href="reports" class="btn btn-danger">Show reports
</a>
</div>
</div>
</div>

</div>
</div>


<div class="modal fade top" id="modalreps" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
<div class="modal-dialog modal-frame modal-top modal-notify modal-danger" role="document">

<div class="modal-content">

<div class="modal-body">
<div id="bodyreport" class="row d-flex justify-content-center align-items-center">
<span class="pt-3 mx-4" style="font-size: 14 px"><b>You have new report</span>
<a type="button" href="./seller/reports" class="btn btn-danger">Show reports
</a>
</div>
</div>
</div>

</div>
</div>



<div class="modal fade top" id="modalrepss" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
<div class="modal-dialog modal-frame modal-top modal-notify modal-danger" role="document">

<div class="modal-content">

<div class="modal-body">
<div id="bodyreport" class="row d-flex justify-content-center align-items-center">
<span class="pt-3 mx-4" style="font-size: 14 px"><b>You have new replay report</span>
<a type="button" href="./seller/reports" class="btn btn-danger">Show reports
</a>
</div>
</div>
</div>

</div>
</div>

<div class="d-flex flex-row-reverse mt-0" style="z-index: 999999;position: absolute; right: 0; ">
<div class="p-2"><label id="switch" class="switch">
<input type="checkbox" onchange="toggleTheme()" id="slider">
<span class="slider round"></span>
</label></div>
</div>
<script defer src="/layout/js/jquery.flexslider.js"></script>
<div class="header">
<div class="container-fluid">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-12" style="text-align:center;"><a href="shell"><img style="border: 3px solid;" src="layout/images/shells.gif"></a></div>
<div class="col-lg-3 col-md-6 col-sm-12" style="text-align:center;"><a href="smtp"><img style="border: 3px solid;" src="layout/images/smtps.gif"></a></div>
<div class="col-lg-3 col-md-6 col-sm-12" style="text-align:center;"><a href="accounts-7"><img style="border: 3px solid;" src="layout/images/accs.gif"></a></div>
</div><br>
<div class="header-body">

<div class="row">
<div class="col-md-3 col-sm-6">
<div class="card card-stats">
<div class="card-body">
<div class="row">
<div class="col-md-10">
<h5 class="card-title text-uppercase text-muted mb-0">Balance</h5>
<span class="h2 font-weight-bold mb-0">
0 </span>
</div>
<div class="col-md-2">
<div class="icon icon-shape bg-danger text-white rounded-circle shadow">
<i class="fa fa-money-bill-alt "></i>
</div>
</div>
</div>
<p class="mt-3 mb-0 text-muted text-sm">
<span class="text-nowrap"><a href="addBalance"> [Add Funds] </a></span>
</p>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="card card-stats">
<div class="card-body">
<div class="row">
<div class="col-md-10">
<h5 class="card-title text-uppercase text-muted mb-0">Orders</h5>
<span class="h2 font-weight-bold mb-0">0 </div>
<div class="col-md-2">
<div class="icon icon-shape bg-info text-white rounded-circle shadow">
<i class="fa fa-shopping-cart"></i>
</div>
</div>
</div>
<p class="mt-3 mb-0 text-muted text-sm">
<span class="text-nowrap"><a href="orders"> [ Show ] </a></span>
</p>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="card card-stats">
<div class="card-body">
<div class="row">
<div class="col-md-10">
<h5 class="card-title text-uppercase text-muted mb-0">Tickets</h5>
<span class="h2 font-weight-bold mb-0">0 </div>
<div class="col-md-2">
<div class="icon icon-shape bg-warning text-white rounded-circle shadow">
<i class="fa fa-cog"></i>
</div>
</div>
</div>
<p class="mt-3 mb-0 text-muted text-sm">
<span class="text-nowrap"><a href="tickets"> [ Show ]</a></span>
</p>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="card card-stats" style="background-color: #fb3!important;">
<div class="card-body">
<div class="row">
<div class="col-md-10">
<h5 class="card-title text-uppercase text-muted mb-0">Reports</h5>
<span class="h2 font-weight-bold mb-0">
0 <span>
</div>
<div class="col-md-2">
<div class="icon icon-shape bg-danger text-white rounded-circle shadow">
<i class="fas fa-receipt"></i>
</div>
</div>
</div>
<p class="mt-3 mb-0 text-muted text-sm">
<span class="text-nowrap"><a href="reports"> [ Show ]</a></span>
</p>
</div>
</div>
</div>
</div>
</div>


<div class="main-home mt-5 mb-5">
<div class="row">
<div class="col-md-8">
<div class="card mb-3" style="color: var(--font-color); background-color: var(--color-card);">
<div class="card-header">
<i class="fas fa-user-shield"></i>
Welcome <a class="badge badge-pill badge-success">hustlersfather</a><br>
</div>
<div class="card-body" style="color: var(--font-color); background-color: var(--color-card);">
<br>
If you have any Question ,Problem, Suggestion or Request Please feel free to Open a
<a href="tickets" class="btn btn-success btn-sm"> New Ticket <i class="fa fa-paper-plane"></i></a>
<br>
if you want to report an order , just go to <a class="btn btn-success btn-sm" data-title="My Orders" href="orders"> My Orders <i class="fa fa-shopping-cart"></i></a> then click on Report #[Order Id] button.
<br>
Our Domains are <p><span style="color: #ff0000;"><strong>odinshop.io</strong> || <strong>odin.pw</strong> || <strong>odinshop.se</strong> || <strong>odin.pm</strong> ||</span><strong><span style="color: #ff0000;">Tor Mirror odinshoyi3y5clejn3klyggxrmq5sy5efdiremz353z6ucdujgdiccad.onion ||</span> </strong></p> - Please Save them!
<br>
<a href="https://odinshop.se/Tos.php" data-title="Terms Of Service " class="btn btn-primary btn-sm"> Terms Of Service <i class="fa fa-newspaper-o"></i></a>
<br>
</div>
</div>
<div class="card mb-3" style="color: var(--font-color); background-color: var(--color-card);">
<div class="card-header">
<i class="fas fa-users"></i>
Invite Users<br>
</div>
<div class="card-body" style="color: var(--font-color); background-color: var(--color-card);">
<div class="row">
<div class="col-lg-5 col-md-6 col-sm-12">
<div class="input-group mb-3" style="align-items: center;">
<input type="text" class="form-control form-control-lg" id="code_user" value="https://odinshop.io/?referral=18229" disabled>
<div class="input-group-append">
<button class="btn btn-outline-secondary copydiv" data-clipboard-text="https://odinshop.io/?referral=18229" type="button">COPY</button>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 mb-3" style=" align-items: center; display: flex; ">
<p style=" color: #000; font-size: 18px; font-weight: bold; ">Total Bonus :- </p>
</div>
<div class="col-lg-3 col-md-6 col-sm-12 mb-3" style=" align-items: center; display: flex; ">
<p style=" color: #000; font-size: 18px; font-weight: bold; ">Total Referrals :- 0</p>
</div>
</div>
</div>
</div>
<div class="card mb-3" style="color: var(--font-color); background-color: var(--color-card);">
<div class="card-header">
<i class="fas fa-newspaper"></i>
Our News
</div>
<div class="card-body " style="color: var(--font-color); background-color: var(--color-card);">
<ul>
<li class='mb-2'><span class='btn btn-info btn-sm mr-2 mt-1 mb-1'><b>News buyer</b></span><span><small><b>2022/08/24 06:56:08</small></span></b>
<br>We are currently working to improve the checkers in all sections ,, stay tuned good things are coming.
<br>
</li>
<li class='mb-2'><span class='btn btn-info btn-sm mr-2 mt-1 mb-1'><b>New section</b></span><span><small><b>2022/08/02 09:30:54</small></span></b>
<br>Bulk Offers Section has been activated ,, you can buy bulk tools with cheap prices 50% Off, Visit our new section and enjoy the sellers offers.
https://odinshop.io/offers
<br>
</li>
<li class='mb-2'><span class='btn btn-info btn-sm mr-2 mt-1 mb-1'><b>Report time</b></span><span><small><b>2022/07/29 01:18:06</small></span></b>
<br>Dear Buyers
report/refund time increased to 12hours to give our buyers time to report their bad items, also please rate your purchases to help other buyers and help us to flag the bad sellers and remove them from our platform
we are here to serve you ,If you have any questions , please don't hesitate to contact us if you have any problem with one of our sellers message us.
<br>
</li>
<li class='mb-2'><span class='btn btn-info btn-sm mr-2 mt-1 mb-1'><b>Seller apply</b></span><span><small><b>2022/02/03 07:07:04</small></span></b>
<br>now you can upgrade your account to seller status and start selling with us instantly without support tickets,,for more information visit https://odinshop.io/become-seller
<br>
</li>
<li class='mb-2'><span class='btn btn-info btn-sm mr-2 mt-1 mb-1'><b>Requests</b></span><span><small><b>2021/11/20 08:39:24</small></span></b>
<br>Odin's offers you the peace of mind you need to make any purchase. We’ll not release the funds to the Seller until you have received the item and are satisfied with the transaction. We also make sure the Seller provides the required information for the transaction.
<br>
</li>
<li class='mb-2'><span class='btn btn-info btn-sm mr-2 mt-1 mb-1'><b>Update</b></span><span><small><b>2021/11/06 08:43:23</small></span></b>
<br>Now you can rate \ review \ comment about the item you've purchased go to MyOrders or Report Items and choose Rate Seller and submit your comment / rate ,, rating will help other clients to easily find the good sellers you can also check the seller's profile by clicking on seller's number button in blue color inside of sections
<br>
</li>
<li class='mb-2'><span class='btn btn-info btn-sm mr-2 mt-1 mb-1'><b>Update</b></span><span><small><b>2021/08/03 07:52:03</small></span></b>
<br>CMS / Technology detectors installed in cPanel & Shell sections to extract the platform [ Wordpress - Joomla - Drupal - WooCommerce - etc.. ] and extract back side technologies such as [ Laravel - Codeigniter - Yii - Zend - Vue JS - React Js - etc.. ] plus extract Server Technologies such as [ Apache - Nginx - MySQL - Tomcat - etc..] and more updates coming soon.
<br>
</li>
<li class='mb-2'><span class='btn btn-info btn-sm mr-2 mt-1 mb-1'><b>Email</b></span><span><small><b>2020/10/14 04:57:06</small></span></b>
<br>Dear users please use a VALID email in your profile incase you lost your password so you can recover it.
<br>
</li>
<li class='mb-2'><span class='btn btn-info btn-sm mr-2 mt-1 mb-1'><b>Warning</b></span><span><small><b>2020/04/06 06:18:01</small></span></b>
<br>Orders will be automatically refunded after 6hours of the report time if the seller didnt replay.
<br>
</li>
<li class='mb-2'><span class='btn btn-info btn-sm mr-2 mt-1 mb-1'><b>Free bonus $</b></span><span><small><b>2020/03/17 06:14:10</small></span></b>
<br>every time your deposit starts from $50 you will receive a 5% bonus.
<br>
</li> </ul>
</div>
</div>
</div>
<div class="col-md-4">
<div class="mb-3 pb-1">
<ul class="nav nav-tabs" id="myTab" role="tablist">
<li class="nav-item" role="presentation">
<button class="nav-link active" id="added-tab" data-toggle="tab" data-target="#added" type="button" role="tab" aria-controls="added" aria-selected="true">Latest Added Tools</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="sold-tab" data-toggle="tab" data-target="#sold" type="button" role="tab" aria-controls="sold" aria-selected="false">Latest Sold Tools</button>
</li>
</ul>
<div class="tab-content" id="myTabContent">
<div class="tab-pane fade  show active" id="added" role="tabpanel" aria-labelledby="added-tab">
<div class="card mb-3" style="color: var(--font-color); background-color: var(--color-card);">
<div class="card-header">
<i class="fas fa-table"></i>
Latest 10 Added Tools
</div>
<div class="card-body " style="color: var(--font-color); background-color: var(--color-card);">
<div id="roncaa" style="color: var(--font-color); background-color: var(--color-card);">
<div class="scroll-area-lg" style="color: var(--font-color); background-color: var(--color-card);">
<div class="scrollbar-container ps--active-y" style="color: var(--font-color); background-color: var(--color-card);">
<ul class="list-group list-group-flush" style="color: var(--font-color); background-color: var(--color-card);">
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>13</b></font> items in The <font color="green"><b>
<a class="text-success" href="business-1">
Cpanel Webmail </a></b></font> section.
By <b>Seller463</b>, 2023-02-22 </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>23</b></font> items in The <font color="green"><b>
<a class="text-success" href="cPanel">
cpanel </a></b></font> section.
By <b>Seller393</b>, 2023-02-22 </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>30</b></font> items in The <font color="green"><b>
<a class="text-success" href="business-2">
Godaddy Webmail </a></b></font> section.
By <b>Seller467</b>, 2023-02-22 </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>40</b></font> items in The <font color="green"><b>
<a class="text-success" href="smtp">
smtp </a></b></font> section.
By <b>Seller463</b>, 2023-02-22 </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>136</b></font> items in The <font color="green"><b>
<a class="text-success" href="cPanel">
cpanel </a></b></font> section.
By <b>Seller477</b>, 2023-02-22 </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>57</b></font> items in The <font color="green"><b>
<a class="text-success" href="mailer">
mailer </a></b></font> section.
By <b>Seller471</b>, 2023-02-21 </li>
 <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>28</b></font> items in The <font color="green"><b>
<a class="text-success" href="business-2">
Godaddy Webmail </a></b></font> section.
By <b>Seller471</b>, 2023-02-21 </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>38</b></font> items in The <font color="green"><b>
<a class="text-success" href="business-2">
Godaddy Webmail </a></b></font> section.
By <b>Seller467</b>, 2023-02-21 </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>20</b></font> items in The <font color="green"><b>
<a class="text-success" href="cPanel">
cpanel </a></b></font> section.
By <b>Seller254</b>, 2023-02-21 </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>4</b></font> items in The <font color="green"><b>
<a class="text-success" href="rdp">
rdp </a></b></font> section.
By <b>Seller306</b>, 2023-02-21 </li>
</ul>
</div> </div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="sold" role="tabpanel" aria-labelledby="sold-tab">
<div class="card mb-3" style="color: var(--font-color); background-color: var(--color-card);">
<div class="card-header">
<i class="fas fa-table"></i>
Latest 10 Sold Tools
</div>
<div class="card-body " style="color: var(--font-color); background-color: var(--color-card);">
<div id="roncaa" style="color: var(--font-color); background-color: var(--color-card);">
<div class="scroll-area-lg" style="color: var(--font-color); background-color: var(--color-card);">
<div class="scrollbar-container ps--active-y" style="color: var(--font-color); background-color: var(--color-card);">
<ul class="list-group list-group-flush" style="color: var(--font-color); background-color: var(--color-card);">
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
<b>Seller341</b> Sold <font color="green"><b>
<a class="text-success" href="cPanel">cpanel</a></b></font> To <b>Buyer16293</b>, 2023-02-22 14:47:28 </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
<b>Seller376</b> Sold <font color="green"><b>
<a class="text-success" href="cPanel">cpanel</a></b></font> To <b>Buyer16293</b>, 2023-02-22 14:43:20 </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
<b>Seller460</b> Sold <font color="green"><b>
<a class="text-success" href="cPanel">cpanel</a></b></font> To <b>Buyer16293</b>, 2023-02-22 14:42:27 </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
<b>Seller254</b> Sold <font color="green"><b>
<a class="text-success" href="cPanel">cpanel</a></b></font> To <b>Buyer16293</b>, 2023-02-22 14:36:58 </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
<b>Seller376</b> Sold <font color="green"><b>
<a class="text-success" href="cPanel">cpanel</a></b></font> To <b>Buyer16293</b>, 2023-02-22 14:36:14 </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
<b>Seller341</b> Sold <font color="green"><b>
<a class="text-success" href="cPanel">cpanel</a></b></font> To <b>Buyer17647</b>, 2023-02-22 14:24:57 </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
<b>Seller376</b> Sold <font color="green"><b>
<a class="text-success" href="cPanel">cpanel</a></b></font> To <b>Buyer16293</b>, 2023-02-22 14:24:22 </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
<b>Seller474</b> Sold <font color="green"><b>
<a class="text-success" href="cPanel">cpanel</a></b></font> To <b>Buyer18061</b>, 2023-02-22 14:16:13 </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
<b>Seller353</b> Sold <font color="green"><b>
<a class="text-success" href="cPanel">cpanel</a></b></font> To <b>Buyer17647</b>, 2023-02-22 14:15:46 </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
<b>Seller477</b> Sold <font color="green"><b>
<a class="text-success" href="cPanel">cpanel</a></b></font> To <b>Buyer18101</b>, 2023-02-22 14:10:51 </li>
</ul>
</div> </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="mb-3 pb-1">
<ul class="nav nav-tabs" id="myTab" role="tablist">
<li class="nav-item" role="presentation">
<button class="nav-link active" id="offer-tab" data-toggle="tab" data-target="#offer" type="button" role="tab" aria-controls="offer" aria-selected="true">Latest Sellers Offers</button>
</li>
<li class="nav-item" role="presentation">
<button class="nav-link" id="request-tab" data-toggle="tab" data-target="#request" type="button" role="tab" aria-controls="request" aria-selected="false">Latest Buyers Requests</button>
</li>
</ul>
<div class="tab-content" id="myTabContent">
<div class="tab-pane fade  show active" id="offer" role="tabpanel" aria-labelledby="offer-tab">
<div class="card mb-3" style="color: var(--font-color); background-color: var(--color-card);">
<div class="card-header">
<i class="fas fa-table"></i>
Latest 10 Added Sellers Offers
</div>
<div class="card-body " style="color: var(--font-color); background-color: var(--color-card);">
<div id="roncaa" style="color: var(--font-color); background-color: var(--color-card);">
<div class="scroll-area-lg" style="color: var(--font-color); background-color: var(--color-card);">
<div class="scrollbar-container ps--active-y" style="color: var(--font-color); background-color: var(--color-card);">
<ul class="list-group list-group-flush" style="color: var(--font-color); background-color: var(--color-card);">
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>100 mixed shells</b></font> items in The <font color="green"><b>
<a class="text-success" href="offers">Offers</a></b></font> section.
By <b>Seller447</b>, 19/01/2023 05:15:10 pm </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>Fully Verified CashApp Account BTC Enable</b></font> items in The <font color="green"><b>
<a class="text-success" href="offers">Offers</a></b></font> section.
By <b>Seller466</b>, 02/01/2023 12:56:28 am </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>Fully Verified Wise Account [Business] [id+pass+email+documents]</b></font> items in The <font color="green"><b>
<a class="text-success" href="offers">Offers</a></b></font> section.
By <b>Seller466</b>, 02/01/2023 12:51:15 am </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>ETH, BSC, MATIC Drainer</b></font> items in The <font color="green"><b>
<a class="text-success" href="offers">Offers</a></b></font> section.
By <b>Seller455</b>, 03/11/2022 06:41:27 pm </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>Creation of PMTA and SMTP for turnkey distribution</b></font> items in The <font color="green"><b>
<a class="text-success" href="offers">Offers</a></b></font> section.
By <b>Seller455</b>, 03/11/2022 06:37:35 pm </li>
 <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>ETH Drainer</b></font> items in The <font color="green"><b>
<a class="text-success" href="offers">Offers</a></b></font> section.
By <b>Seller447</b>, 04/10/2022 08:05:59 pm </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>20 cpanels mixed country</b></font> items in The <font color="green"><b>
<a class="text-success" href="offers">Offers</a></b></font> section.
By <b>Seller447</b>, 26/09/2022 03:10:22 pm </li>
</ul>
</div> </div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="request" role="tabpanel" aria-labelledby="request-tab">
<div class="card mb-3" style="color: var(--font-color); background-color: var(--color-card);">
<div class="card-header">
<i class="fas fa-table"></i>
Latest 10 Added Buyers Requests
</div>
<div class="card-body " style="color: var(--font-color); background-color: var(--color-card);">
<div id="roncaa" style="color: var(--font-color); background-color: var(--color-card);">
<div class="scroll-area-lg" style="color: var(--font-color); background-color: var(--color-card);">
<div class="scrollbar-container ps--active-y" style="color: var(--font-color); background-color: var(--color-card);">
<ul class="list-group list-group-flush" style="color: var(--font-color); background-color: var(--color-card);">
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>FreeBSD servers wanted</b></font> items in The <font color="green"><b>
<a class="text-success" href="requests">Requests</a></b></font> section.
By <b>Buyer9660</b>, 2023/02/20 02:53:20 am </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>MEDIA TEMPLE SHELLS</b></font> items in The <font color="green"><b>
<a class="text-success" href="requests">Requests</a></b></font> section.
By <b>Buyer9874</b>, 2023/02/01 11:28:22 am </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>domain smtp</b></font> items in The <font color="green"><b>
<a class="text-success" href="requests">Requests</a></b></font> section.
By <b>Buyer18151</b>, 2023/01/27 16:32:48 pm </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>Looking for medium.com hacked account</b></font> items in The <font color="green"><b>
<a class="text-success" href="requests">Requests</a></b></font> section.
By <b>Buyer17148</b>, 2023/01/07 16:32:18 pm </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>shell/cpanel - DA/PA 40+</b></font> items in The <font color="green"><b>
<a class="text-success" href="requests">Requests</a></b></font> section.
By <b>Buyer18140</b>, 2022/12/20 17:59:38 pm </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>Hostgator Cpanel </b></font> items in The <font color="green"><b>
<a class="text-success" href="requests">Requests</a></b></font> section.
By <b>Buyer9660</b>, 2022/12/15 00:06:40 am </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>bulk login/pass usa nelikvid</b></font> items in The <font color="green"><b>
<a class="text-success" href="requests">Requests</a></b></font> section.
By <b>Buyer18110</b>, 2022/12/14 15:11:47 pm </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>Bulk japan shells</b></font> items in The <font color="green"><b>
<a class="text-success" href="requests">Requests</a></b></font> section.
By <b>Buyer17300</b>, 2022/12/13 20:55:39 pm </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>Cpanel</b></font> items in The <font color="green"><b>
<a class="text-success" href="requests">Requests</a></b></font> section.
By <b>Buyer9660</b>, 2022/12/08 19:39:15 pm </li>
<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
Added <font color="red"><b>GODADDY</b></font> items in The <font color="green"><b>
<a class="text-success" href="requests">Requests</a></b></font> section.
By <b>Buyer15241</b>, 2022/12/08 11:25:45 am </li>
</ul>
</div> </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="card mb-3 pb-1" style="color: var(--font-color); background-color: var(--color-card);">
<div class="card-header">
<i class="fab fa-btc"></i>
Become Seller
</div>
<div class="card-body payment_methods" style="color: var(--font-color); background-color: var(--color-card);">
Interested in becoming a <b>Seller <i class="fab fa-btc">
</i></b> at OdinShop ?
<a href="become-seller" class="btn btn-primary">
Become a Seller & Seller Rules<i class="fab fa-btc"></i>
</a>
<br><br>
Available Payment Methods
<br>
<a href="addBalance"><img src="layout/images/pmlogo2.png" height="48" width="49" title="PerfectMoney" /></a>
<a href="addBalance"><img src="layout/images/btclogo.png" height="48" width="49" title="Bitcoin" /></a>
<a href="addBalance"><img src="layout/images/ltclogo.png" height="48" width="49" title="Litecoin" /></a>
<a href="addBalance"><img src="layout/images/bnb.png" height="48" width="49" title="Binance Token" /></a>
<a href="addBalance"><img src="layout/images/ethereum.png" height="48" width="49" title="Etherum" /></a>
<a href="addBalance"><img src="layout/images/trc.png" height="48" width="49" title="Tether [USDT/TRC20]" /></a>
<a href="addBalance"><img src="layout/images/bch.png" height="48" width="49" title="Bitcoin Cash" /></a>
<a href="addBalance"><img src="layout/images/dgc.jpg" height="48" width="49" title="Dogecoin" /></a>
</div>
</div>
<div class="card mb-3" style="color: var(--font-color); background-color: var(--color-card);">
<div class="card-header">
<i class="fas fa-chart-pie"></i>
Our Stuff
</div>
<div class="card-body" style="color: var(--font-color); background-color: var(--color-card);">
<div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
<div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
<div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
</div>
</div>
<div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
<div style="position:absolute;width:200%;height:200%;left:0; top:0">
</div>
</div>
</div>
<canvas id="myPieChart" width="278" height="278" style="display: block; width: 278px; height: 278px;" class="chartjs-render-monitor"></canvas>
</div>
<div class="card-footer small text-primary" style="color: var(--font-color); background-color: var(--color-card);">Page Loaded in 1.3091 Seconds</div>
</div>
</div>
</div>
</div>

<script type="text/javascript">

</div>
</div>

</html>

	});	
	jQuery('#toggle_column').multipleSelect("setSelects", show_index);
	
});
</script>
<table id="my_table" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%" style="width: 100%;"> <thead> <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 8px;">#</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Country (or dependency): activate to sort column ascending" style="width: 87px;">Country (or dependency)</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Population (2019): activate to sort column ascending" style="width: 73px;">Population<br> (2019)</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Yearly Change: activate to sort column ascending" style="width: 52px;">Yearly<br> Change</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Net Change: activate to sort column ascending" style="width: 52px;">Net<br> Change</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Density (P/Km²): activate to sort column ascending" style="width: 51px;">Density<br> (P/Km²)</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Land Area (Km²): activate to sort column ascending" style="width: 49px;">Land Area<br> (Km²)</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Migrants (net): activate to sort column ascending" style="width: 59px;">Migrants<br> (net)</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Fert. Rate: activate to sort column ascending" style="width: 31px;">Fert.<br> Rate</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Med. Age: activate to sort column ascending" style="width: 32px;">Med.<br> Age</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Urban Pop %: activate to sort column ascending" style="width: 41px;">Urban<br> Pop %</th><th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="World Share: activate to sort column ascending" style="width: 40px;">World<br> Share</th></tr> </thead> <tbody>                                                                                                                                                                                                                                          <tr role="row" class="odd"> <td class="sorting_1">1</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/china-population/">China</a></td> <td style="font-weight: bold;">1,433,783,686</td> <td>0.43 %</td> <td>6,135,900</td> <td>153</td> <td>9,388,211</td> <td>-348,399</td> <td>1.7</td> <td>38</td> <td>60 %</td> <td>18.59 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">2</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/india-population/">India</a></td> <td style="font-weight: bold;">1,366,417,754</td> <td>1.02 %</td> <td>13,775,474</td> <td>460</td> <td>2,973,190</td> <td>-532,687</td> <td>2.2</td> <td>28</td> <td>35 %</td> <td>17.71 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">3</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/us-population/">United States</a></td> <td style="font-weight: bold;">329,064,917</td> <td>0.60 %</td> <td>1,968,652</td> <td>36</td> <td>9,147,420</td> <td>954,806</td> <td>1.8</td> <td>38</td> <td>82 %</td> <td>4.27 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">4</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/indonesia-population/">Indonesia</a></td> <td style="font-weight: bold;">270,625,568</td> <td>1.10 %</td> <td>2,955,025</td> <td>149</td> <td>1,811,570</td> <td>-98,955</td> <td>2.3</td> <td>30</td> <td>56 %</td> <td>3.51 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">5</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/pakistan-population/">Pakistan</a></td> <td style="font-weight: bold;">216,565,318</td> <td>2.04 %</td> <td>4,337,032</td> <td>281</td> <td>770,880</td> <td>-233,379</td> <td>3.6</td> <td>23</td> <td>35 %</td> <td>2.81 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">6</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/brazil-population/">Brazil</a></td> <td style="font-weight: bold;">211,049,527</td> <td>0.75 %</td> <td>1,580,204</td> <td>25</td> <td>8,358,140</td> <td>21,200</td> <td>1.7</td> <td>33</td> <td>87 %</td> <td>2.74 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">7</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/nigeria-population/">Nigeria</a></td> <td style="font-weight: bold;">200,963,599</td> <td>2.60 %</td> <td>5,088,916</td> <td>221</td> <td>910,770</td> <td>-60,000</td> <td>5.4</td> <td>18</td> <td>51 %</td> <td>2.61 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">8</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/bangladesh-population/">Bangladesh</a></td> <td style="font-weight: bold;">163,046,161</td> <td>1.03 %</td> <td>1,669,453</td> <td>1,253</td> <td>130,170</td> <td>-369,501</td> <td>2.1</td> <td>28</td> <td>39 %</td> <td>2.11 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">9</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/russia-population/">Russia</a></td> <td style="font-weight: bold;">145,872,256</td> <td>0.09 %</td> <td>138,218</td> <td>9</td> <td>16,376,870</td> <td>182,456</td> <td>1.8</td> <td>40</td> <td>74 %</td> <td>1.89 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">10</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/mexico-population/">Mexico</a></td> <td style="font-weight: bold;">127,575,529</td> <td>1.10 %</td> <td>1,384,741</td> <td>66</td> <td>1,943,950</td> <td>-60,000</td> <td>2.1</td> <td>29</td> <td>83 %</td> <td>1.65 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">11</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/japan-population/">Japan</a></td> <td style="font-weight: bold;">126,860,301</td> <td>-0.27 %</td> <td>-341,891</td> <td>348</td> <td>364,555</td> <td>71,560</td> <td>1.4</td> <td>48</td> <td>92 %</td> <td>1.64 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">12</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/ethiopia-population/">Ethiopia</a></td> <td style="font-weight: bold;">112,078,730</td> <td>2.61 %</td> <td>2,854,316</td> <td>112</td> <td>1,000,000</td> <td>30,000</td> <td>4.3</td> <td>19</td> <td>21 %</td> <td>1.45 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">13</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/philippines-population/">Philippines</a></td> <td style="font-weight: bold;">108,116,615</td> <td>1.37 %</td> <td>1,465,221</td> <td>363</td> <td>298,170</td> <td>-67,152</td> <td>2.6</td> <td>26</td> <td>47 %</td> <td>1.40 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">14</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/egypt-population/">Egypt</a></td> <td style="font-weight: bold;">100,388,073</td> <td>2.00 %</td> <td>1,964,475</td> <td>101</td> <td>995,450</td> <td>-38,033</td> <td>3.3</td> <td>25</td> <td>43 %</td> <td>1.30 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">15</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/vietnam-population/">Vietnam</a></td> <td style="font-weight: bold;">96,462,106</td> <td>0.96 %</td> <td>916,144</td> <td>311</td> <td>310,070</td> <td>-80,000</td> <td>2.1</td> <td>32</td> <td>37 %</td> <td>1.25 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">16</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/democratic-republic-of-the-congo-population/">DR Congo</a></td> <td style="font-weight: bold;">86,790,567</td> <td>3.24 %</td> <td>2,722,476</td> <td>38</td> <td>2,267,050</td> <td>23,861</td> <td>6.0</td> <td>17</td> <td>45 %</td> <td>1.13 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">17</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/germany-population/">Germany</a></td> <td style="font-weight: bold;">83,517,045</td> <td>0.47 %</td> <td>392,627</td> <td>240</td> <td>348,560</td> <td>543,822</td> <td>1.6</td> <td>46</td> <td>76 %</td> <td>1.08 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">18</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/turkey-population/">Turkey</a></td> <td style="font-weight: bold;">83,429,615</td> <td>1.32 %</td> <td>1,089,527</td> <td>108</td> <td>769,630</td> <td>283,922</td> <td>2.1</td> <td>32</td> <td>75 %</td> <td>1.08 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">19</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/iran-population/">Iran</a></td> <td style="font-weight: bold;">82,913,906</td> <td>1.36 %</td> <td>1,113,718</td> <td>51</td> <td>1,628,550</td> <td>-55,000</td> <td>2.2</td> <td>32</td> <td>75 %</td> <td>1.07 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">20</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/thailand-population/">Thailand</a></td> <td style="font-weight: bold;">69,625,582</td> <td>0.28 %</td> <td>197,129</td> <td>136</td> <td>510,890</td> <td>19,444</td> <td>1.5</td> <td>40</td> <td>50 %</td> <td>0.90 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">21</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/uk-population/">United Kingdom</a></td> <td style="font-weight: bold;">67,530,172</td> <td>0.58 %</td> <td>388,488</td> <td>279</td> <td>241,930</td> <td>260,650</td> <td>1.8</td> <td>40</td> <td>83 %</td> <td>0.88 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">22</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/france-population/">France</a></td> <td style="font-weight: bold;">65,129,728</td> <td>0.21 %</td> <td>139,217</td> <td>119</td> <td>547,557</td> <td>36,527</td> <td>1.9</td> <td>42</td> <td>81 %</td> <td>0.84 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">23</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/italy-population/">Italy</a></td> <td style="font-weight: bold;">60,550,075</td> <td>-0.13 %</td> <td>-77,216</td> <td>206</td> <td>294,140</td> <td>148,943</td> <td>1.3</td> <td>47</td> <td>69 %</td> <td>0.78 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">24</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/south-africa-population/">South Africa</a></td> <td style="font-weight: bold;">58,558,270</td> <td>1.33 %</td> <td>765,752</td> <td>48</td> <td>1,213,090</td> <td>145,405</td> <td>2.4</td> <td>28</td> <td>66 %</td> <td>0.76 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">25</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/tanzania-population/">Tanzania</a></td> <td style="font-weight: bold;">58,005,463</td> <td>3.00 %</td> <td>1,692,025</td> <td>65</td> <td>885,800</td> <td>-40,076</td> <td>4.9</td> <td>18</td> <td>36 %</td> <td>0.75 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">26</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/myanmar-population/">Myanmar</a></td> <td style="font-weight: bold;">54,045,420</td> <td>0.63 %</td> <td>337,100</td> <td>83</td> <td>653,290</td> <td>-163,313</td> <td>2.2</td> <td>29</td> <td>31 %</td> <td>0.70 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">27</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/kenya-population/">Kenya</a></td> <td style="font-weight: bold;">52,573,973</td> <td>2.30 %</td> <td>1,181,408</td> <td>92</td> <td>569,140</td> <td>-10,000</td> <td>3.5</td> <td>20</td> <td>27 %</td> <td>0.68 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">28</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/south-korea-population/">South Korea</a></td> <td style="font-weight: bold;">51,225,308</td> <td>0.10 %</td> <td>53,602</td> <td>527</td> <td>97,230</td> <td>11,731</td> <td>1.1</td> <td>44</td> <td>82 %</td> <td>0.66 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">29</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/colombia-population/">Colombia</a></td> <td style="font-weight: bold;">50,339,443</td> <td>1.37 %</td> <td>678,395</td> <td>45</td> <td>1,109,500</td> <td>204,796</td> <td>1.8</td> <td>31</td> <td>80 %</td> <td>0.65 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">30</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/spain-population/">Spain</a></td> <td style="font-weight: bold;">46,736,776</td> <td>0.09 %</td> <td>43,918</td> <td>94</td> <td>498,800</td> <td>40,000</td> <td>1.3</td> <td>45</td> <td>80 %</td> <td>0.61 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">31</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/argentina-population/">Argentina</a></td> <td style="font-weight: bold;">44,780,677</td> <td>0.95 %</td> <td>419,527</td> <td>16</td> <td>2,736,690</td> <td>4,800</td> <td>2.3</td> <td>32</td> <td>93 %</td> <td>0.58 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">32</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/uganda-population/">Uganda</a></td> <td style="font-weight: bold;">44,269,594</td> <td>3.61 %</td> <td>1,540,558</td> <td>222</td> <td>199,810</td> <td>168,694</td> <td>5.0</td> <td>17</td> <td>25 %</td> <td>0.57 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">33</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/ukraine-population/">Ukraine</a></td> <td style="font-weight: bold;">43,993,638</td> <td>-0.57 %</td> <td>-252,518</td> <td>76</td> <td>579,320</td> <td>10,000</td> <td>1.4</td> <td>41</td> <td>69 %</td> <td>0.57 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">34</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/algeria-population/">Algeria</a></td> <td style="font-weight: bold;">43,053,054</td> <td>1.95 %</td> <td>824,646</td> <td>18</td> <td>2,381,740</td> <td>-10,000</td> <td>3.1</td> <td>29</td> <td>73 %</td> <td>0.56 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">35</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/sudan-population/">Sudan</a></td> <td style="font-weight: bold;">42,813,238</td> <td>2.42 %</td> <td>1,011,705</td> <td>24</td> <td>1,765,048</td> <td>-50,000</td> <td>4.4</td> <td>20</td> <td>35 %</td> <td>0.56 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">36</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/iraq-population/">Iraq</a></td> <td style="font-weight: bold;">39,309,783</td> <td>2.28 %</td> <td>876,183</td> <td>91</td> <td>434,320</td> <td>7,834</td> <td>3.7</td> <td>21</td> <td>73 %</td> <td>0.51 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">37</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/afghanistan-population/">Afghanistan</a></td> <td style="font-weight: bold;">38,041,754</td> <td>2.34 %</td> <td>869,833</td> <td>58</td> <td>652,860</td> <td>-62,920</td> <td>4.6</td> <td>18</td> <td>25 %</td> <td>0.49 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">38</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/poland-population/">Poland</a></td> <td style="font-weight: bold;">37,887,768</td> <td>-0.09 %</td> <td>-33,824</td> <td>124</td> <td>306,230</td> <td>-29,395</td> <td>1.4</td> <td>42</td> <td>60 %</td> <td>0.49 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">39</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/canada-population/">Canada</a></td> <td style="font-weight: bold;">37,411,047</td> <td>0.91 %</td> <td>336,485</td> <td>4</td> <td>9,093,510</td> <td>242,032</td> <td>1.5</td> <td>41</td> <td>81 %</td> <td>0.49 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">40</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/morocco-population/">Morocco</a></td> <td style="font-weight: bold;">36,471,769</td> <td>1.23 %</td> <td>442,676</td> <td>82</td> <td>446,300</td> <td>-51,419</td> <td>2.4</td> <td>30</td> <td>63 %</td> <td>0.47 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">41</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/saudi-arabia-population/">Saudi Arabia</a></td> <td style="font-weight: bold;">34,268,528</td> <td>1.68 %</td> <td>565,772</td> <td>16</td> <td>2,149,690</td> <td>134,979</td> <td>2.3</td> <td>32</td> <td>84 %</td> <td>0.44 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">42</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/uzbekistan-population/">Uzbekistan</a></td> <td style="font-weight: bold;">32,981,716</td> <td>1.56 %</td> <td>505,472</td> <td>78</td> <td>425,400</td> <td>-8,863</td> <td>2.4</td> <td>28</td> <td>50 %</td> <td>0.43 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">43</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/peru-population/">Peru</a></td> <td style="font-weight: bold;">32,510,453</td> <td>1.63 %</td> <td>521,193</td> <td>25</td> <td>1,280,000</td> <td>99,069</td> <td>2.3</td> <td>31</td> <td>79 %</td> <td>0.42 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">44</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/malaysia-population/">Malaysia</a></td> <td style="font-weight: bold;">31,949,777</td> <td>1.34 %</td> <td>421,744</td> <td>97</td> <td>328,550</td> <td>50,000</td> <td>2.0</td> <td>30</td> <td>78 %</td> <td>0.41 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">45</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/angola-population/">Angola</a></td> <td style="font-weight: bold;">31,825,295</td> <td>3.30 %</td> <td>1,015,508</td> <td>26</td> <td>1,246,700</td> <td>6,413</td> <td>5.6</td> <td>17</td> <td>66 %</td> <td>0.41 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">46</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/ghana-population/">Ghana</a></td> <td style="font-weight: bold;">30,417,856</td> <td>2.19 %</td> <td>650,754</td> <td>134</td> <td>227,540</td> <td>-10,000</td> <td>3.9</td> <td>22</td> <td>56 %</td> <td>0.39 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">47</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/mozambique-population/">Mozambique</a></td> <td style="font-weight: bold;">30,366,036</td> <td>2.95 %</td> <td>870,032</td> <td>39</td> <td>786,380</td> <td>-5,000</td> <td>4.9</td> <td>18</td> <td>38 %</td> <td>0.39 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">48</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/yemen-population/">Yemen</a></td> <td style="font-weight: bold;">29,161,922</td> <td>2.33 %</td> <td>663,239</td> <td>55</td> <td>527,970</td> <td>-30,000</td> <td>3.8</td> <td>20</td> <td>38 %</td> <td>0.38 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">49</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/nepal-population/">Nepal</a></td> <td style="font-weight: bold;">28,608,710</td> <td>1.83 %</td> <td>512,996</td> <td>200</td> <td>143,350</td> <td>41,710</td> <td>1.9</td> <td>25</td> <td>21 %</td> <td>0.37 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">50</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/venezuela-population/">Venezuela</a></td> <td style="font-weight: bold;">28,515,829</td> <td>-1.29 %</td> <td>-371,289</td> <td>32</td> <td>882,050</td> <td>-653,249</td> <td>2.3</td> <td>30</td> <td>N.A.</td> <td>0.37 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">51</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/madagascar-population/">Madagascar</a></td> <td style="font-weight: bold;">26,969,307</td> <td>2.69 %</td> <td>706,994</td> <td>46</td> <td>581,795</td> <td>-1,500</td> <td>4.1</td> <td>20</td> <td>38 %</td> <td>0.35 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">52</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/cameroon-population/">Cameroon</a></td> <td style="font-weight: bold;">25,876,380</td> <td>2.62 %</td> <td>660,113</td> <td>55</td> <td>472,710</td> <td>-4,800</td> <td>4.6</td> <td>19</td> <td>56 %</td> <td>0.34 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">53</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/cote-d-ivoire-population/">Côte d'Ivoire</a></td> <td style="font-weight: bold;">25,716,544</td> <td>2.58 %</td> <td>647,314</td> <td>81</td> <td>318,000</td> <td>-8,000</td> <td>4.7</td> <td>19</td> <td>51 %</td> <td>0.33 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">54</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/north-korea-population/">North Korea</a></td> <td style="font-weight: bold;">25,666,161</td> <td>0.46 %</td> <td>116,557</td> <td>213</td> <td>120,410</td> <td>-5,403</td> <td>1.9</td> <td>35</td> <td>62 %</td> <td>0.33 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">55</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/australia-population/">Australia</a></td> <td style="font-weight: bold;">25,203,198</td> <td>1.23 %</td> <td>305,046</td> <td>3</td> <td>7,682,300</td> <td>158,246</td> <td>1.8</td> <td>38</td> <td>86 %</td> <td>0.33 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">56</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/taiwan-population/">Taiwan</a></td> <td style="font-weight: bold;">23,773,876</td> <td>0.20 %</td> <td>47,416</td> <td>671</td> <td>35,410</td> <td>30,001</td> <td>1.2</td> <td>42</td> <td>79 %</td> <td>0.31 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">57</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/niger-population/">Niger</a></td> <td style="font-weight: bold;">23,310,715</td> <td>3.87 %</td> <td>867,893</td> <td>18</td> <td>1,266,700</td> <td>4,000</td> <td>7.0</td> <td>15</td> <td>16 %</td> <td>0.30 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">58</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/sri-lanka-population/">Sri Lanka</a></td> <td style="font-weight: bold;">21,323,733</td> <td>0.45 %</td> <td>94,970</td> <td>340</td> <td>62,710</td> <td>-97,986</td> <td>2.2</td> <td>34</td> <td>18 %</td> <td>0.28 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">59</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/burkina-faso-population/">Burkina Faso</a></td> <td style="font-weight: bold;">20,321,378</td> <td>2.89 %</td> <td>569,912</td> <td>74</td> <td>273,600</td> <td>-25,000</td> <td>5.2</td> <td>18</td> <td>30 %</td> <td>0.26 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">60</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/mali-population/">Mali</a></td> <td style="font-weight: bold;">19,658,031</td> <td>3.04 %</td> <td>580,282</td> <td>16</td> <td>1,220,190</td> <td>-40,000</td> <td>5.9</td> <td>16</td> <td>43 %</td> <td>0.25 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">61</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/romania-population/">Romania</a></td> <td style="font-weight: bold;">19,364,557</td> <td>-0.73 %</td> <td>-141,557</td> <td>84</td> <td>230,170</td> <td>-73,999</td> <td>1.6</td> <td>43</td> <td>54 %</td> <td>0.25 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">62</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/chile-population/">Chile</a></td> <td style="font-weight: bold;">18,952,038</td> <td>1.19 %</td> <td>222,878</td> <td>25</td> <td>743,532</td> <td>111,708</td> <td>1.7</td> <td>35</td> <td>85 %</td> <td>0.25 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">63</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/malawi-population/">Malawi</a></td> <td style="font-weight: bold;">18,628,747</td> <td>2.68 %</td> <td>485,530</td> <td>198</td> <td>94,280</td> <td>-16,053</td> <td>4.3</td> <td>18</td> <td>18 %</td> <td>0.24 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">64</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/kazakhstan-population/">Kazakhstan</a></td> <td style="font-weight: bold;">18,551,427</td> <td>1.27 %</td> <td>231,809</td> <td>7</td> <td>2,699,700</td> <td>-18,000</td> <td>2.8</td> <td>31</td> <td>58 %</td> <td>0.24 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">65</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/zambia-population/">Zambia</a></td> <td style="font-weight: bold;">17,861,030</td> <td>2.94 %</td> <td>509,322</td> <td>24</td> <td>743,390</td> <td>-8,000</td> <td>4.7</td> <td>18</td> <td>45 %</td> <td>0.23 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">66</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/guatemala-population/">Guatemala</a></td> <td style="font-weight: bold;">17,581,472</td> <td>1.93 %</td> <td>333,623</td> <td>164</td> <td>107,160</td> <td>-9,215</td> <td>2.9</td> <td>23</td> <td>51 %</td> <td>0.23 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">67</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/ecuador-population/">Ecuador</a></td> <td style="font-weight: bold;">17,373,662</td> <td>1.69 %</td> <td>289,304</td> <td>70</td> <td>248,360</td> <td>36,400</td> <td>2.4</td> <td>28</td> <td>63 %</td> <td>0.23 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">68</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/netherlands-population/">Netherlands</a></td> <td style="font-weight: bold;">17,097,130</td> <td>0.22 %</td> <td>37,570</td> <td>507</td> <td>33,720</td> <td>16,000</td> <td>1.7</td> <td>43</td> <td>92 %</td> <td>0.22 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">69</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/syria-population/">Syria</a></td> <td style="font-weight: bold;">17,070,135</td> <td>0.74 %</td> <td>125,078</td> <td>93</td> <td>183,630</td> <td>-427,391</td> <td>2.8</td> <td>26</td> <td>59 %</td> <td>0.22 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">70</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/cambodia-population/">Cambodia</a></td> <td style="font-weight: bold;">16,486,542</td> <td>1.46 %</td> <td>236,750</td> <td>93</td> <td>176,520</td> <td>-30,000</td> <td>2.5</td> <td>26</td> <td>24 %</td> <td>0.21 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">71</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/senegal-population/">Senegal</a></td> <td style="font-weight: bold;">16,296,364</td> <td>2.79 %</td> <td>442,041</td> <td>85</td> <td>192,530</td> <td>-20,000</td> <td>4.7</td> <td>19</td> <td>49 %</td> <td>0.21 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">72</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/chad-population/">Chad</a></td> <td style="font-weight: bold;">15,946,876</td> <td>3.03 %</td> <td>469,147</td> <td>13</td> <td>1,259,200</td> <td>2,000</td> <td>5.8</td> <td>17</td> <td>23 %</td> <td>0.21 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">73</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/somalia-population/">Somalia</a></td> <td style="font-weight: bold;">15,442,905</td> <td>2.90 %</td> <td>434,679</td> <td>25</td> <td>627,340</td> <td>-40,000</td> <td>6.1</td> <td>17</td> <td>46 %</td> <td>0.20 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">74</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/zimbabwe-population/">Zimbabwe</a></td> <td style="font-weight: bold;">14,645,468</td> <td>1.43 %</td> <td>206,666</td> <td>38</td> <td>386,850</td> <td>-116,858</td> <td>3.6</td> <td>19</td> <td>38 %</td> <td>0.19 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">75</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/guinea-population/">Guinea</a></td> <td style="font-weight: bold;">12,771,246</td> <td>2.88 %</td> <td>356,953</td> <td>52</td> <td>245,720</td> <td>-4,000</td> <td>4.7</td> <td>18</td> <td>38 %</td> <td>0.17 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">76</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/rwanda-population/">Rwanda</a></td> <td style="font-weight: bold;">12,626,950</td> <td>2.64 %</td> <td>324,980</td> <td>512</td> <td>24,670</td> <td>-9,000</td> <td>4.1</td> <td>20</td> <td>18 %</td> <td>0.16 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">77</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/benin-population/">Benin</a></td> <td style="font-weight: bold;">11,801,151</td> <td>2.75 %</td> <td>316,107</td> <td>105</td> <td>112,760</td> <td>-2,000</td> <td>4.9</td> <td>19</td> <td>48 %</td> <td>0.15 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">78</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/tunisia-population/">Tunisia</a></td> <td style="font-weight: bold;">11,694,719</td> <td>1.12 %</td> <td>129,518</td> <td>75</td> <td>155,360</td> <td>-4,000</td> <td>2.2</td> <td>33</td> <td>70 %</td> <td>0.15 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">79</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/belgium-population/">Belgium</a></td> <td style="font-weight: bold;">11,539,328</td> <td>0.50 %</td> <td>57,150</td> <td>381</td> <td>30,280</td> <td>48,000</td> <td>1.7</td> <td>42</td> <td>98 %</td> <td>0.15 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">80</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/burundi-population/">Burundi</a></td> <td style="font-weight: bold;">11,530,580</td> <td>3.18 %</td> <td>355,206</td> <td>449</td> <td>25,680</td> <td>2,001</td> <td>5.5</td> <td>17</td> <td>13 %</td> <td>0.15 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">81</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/bolivia-population/">Bolivia</a></td> <td style="font-weight: bold;">11,513,100</td> <td>1.41 %</td> <td>159,958</td> <td>11</td> <td>1,083,300</td> <td>-9,504</td> <td>2.8</td> <td>26</td> <td>69 %</td> <td>0.15 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">82</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/cuba-population/">Cuba</a></td> <td style="font-weight: bold;">11,333,483</td> <td>-0.04 %</td> <td>-4,651</td> <td>106</td> <td>106,440</td> <td>-14,400</td> <td>1.6</td> <td>42</td> <td>78 %</td> <td>0.15 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">83</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/haiti-population/">Haiti</a></td> <td style="font-weight: bold;">11,263,077</td> <td>1.26 %</td> <td>139,899</td> <td>409</td> <td>27,560</td> <td>-35,000</td> <td>3.0</td> <td>24</td> <td>56 %</td> <td>0.15 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">84</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/south-sudan-population/">South Sudan</a></td> <td style="font-weight: bold;">11,062,113</td> <td>0.79 %</td> <td>86,186</td> <td>18</td> <td>610,952</td> <td>-174,200</td> <td>4.7</td> <td>19</td> <td>24 %</td> <td>0.14 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">85</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/dominican-republic-population/">Dominican Republic</a></td> <td style="font-weight: bold;">10,738,958</td> <td>1.05 %</td> <td>111,817</td> <td>222</td> <td>48,320</td> <td>-30,000</td> <td>2.4</td> <td>28</td> <td>84 %</td> <td>0.14 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">86</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/czech-republic-population/">Czech Republic (Czechia)</a></td> <td style="font-weight: bold;">10,689,209</td> <td>0.22 %</td> <td>23,532</td> <td>138</td> <td>77,240</td> <td>22,011</td> <td>1.6</td> <td>43</td> <td>74 %</td> <td>0.14 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">87</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/greece-population/">Greece</a></td> <td style="font-weight: bold;">10,473,455</td> <td>-0.46 %</td> <td>-48,791</td> <td>81</td> <td>128,900</td> <td>-16,000</td> <td>1.3</td> <td>46</td> <td>84 %</td> <td>0.14 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">88</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/portugal-population/">Portugal</a></td> <td style="font-weight: bold;">10,226,187</td> <td>-0.29 %</td> <td>-30,006</td> <td>112</td> <td>91,590</td> <td>-6,000</td> <td>1.3</td> <td>46</td> <td>66 %</td> <td>0.13 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">89</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/jordan-population/">Jordan</a></td> <td style="font-weight: bold;">10,101,694</td> <td>1.37 %</td> <td>136,376</td> <td>114</td> <td>88,780</td> <td>10,220</td> <td>2.8</td> <td>24</td> <td>91 %</td> <td>0.13 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">90</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/azerbaijan-population/">Azerbaijan</a></td> <td style="font-weight: bold;">10,047,718</td> <td>0.99 %</td> <td>98,181</td> <td>122</td> <td>82,658</td> <td>1,200</td> <td>2.1</td> <td>32</td> <td>56 %</td> <td>0.13 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">91</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/sweden-population/">Sweden</a></td> <td style="font-weight: bold;">10,036,379</td> <td>0.65 %</td> <td>64,741</td> <td>24</td> <td>410,340</td> <td>40,000</td> <td>1.9</td> <td>41</td> <td>88 %</td> <td>0.13 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">92</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/united-arab-emirates-population/">United Arab Emirates</a></td> <td style="font-weight: bold;">9,770,529</td> <td>1.45 %</td> <td>139,570</td> <td>117</td> <td>83,600</td> <td>40,000</td> <td>1.4</td> <td>33</td> <td>86 %</td> <td>0.13 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">93</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/honduras-population/">Honduras</a></td> <td style="font-weight: bold;">9,746,117</td> <td>1.65 %</td> <td>158,595</td> <td>87</td> <td>111,890</td> <td>-6,800</td> <td>2.5</td> <td>24</td> <td>57 %</td> <td>0.13 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">94</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/hungary-population/">Hungary</a></td> <td style="font-weight: bold;">9,684,679</td> <td>-0.24 %</td> <td>-22,820</td> <td>107</td> <td>90,530</td> <td>6,000</td> <td>1.5</td> <td>43</td> <td>71 %</td> <td>0.13 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">95</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/belarus-population/">Belarus</a></td> <td style="font-weight: bold;">9,452,411</td> <td>-0.00 %</td> <td>-206</td> <td>47</td> <td>202,910</td> <td>8,730</td> <td>1.7</td> <td>40</td> <td>79 %</td> <td>0.12 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">96</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/tajikistan-population/">Tajikistan</a></td> <td style="font-weight: bold;">9,321,018</td> <td>2.42 %</td> <td>220,183</td> <td>67</td> <td>139,960</td> <td>-20,000</td> <td>3.6</td> <td>22</td> <td>27 %</td> <td>0.12 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">97</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/austria-population/">Austria</a></td> <td style="font-weight: bold;">8,955,102</td> <td>0.72 %</td> <td>63,714</td> <td>109</td> <td>82,409</td> <td>65,000</td> <td>1.5</td> <td>43</td> <td>57 %</td> <td>0.12 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">98</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/papua-new-guinea-population/">Papua New Guinea</a></td> <td style="font-weight: bold;">8,776,109</td> <td>1.97 %</td> <td>169,786</td> <td>19</td> <td>452,860</td> <td>-800</td> <td>3.6</td> <td>22</td> <td>13 %</td> <td>0.11 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">99</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/serbia-population/">Serbia</a></td> <td style="font-weight: bold;">8,772,235</td> <td>-0.35 %</td> <td>-30,519</td> <td>100</td> <td>87,460</td> <td>4,000</td> <td>1.5</td> <td>42</td> <td>56 %</td> <td>0.11 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">100</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/switzerland-population/">Switzerland</a></td> <td style="font-weight: bold;">8,591,365</td> <td>0.77 %</td> <td>65,754</td> <td>217</td> <td>39,516</td> <td>52,000</td> <td>1.5</td> <td>43</td> <td>74 %</td> <td>0.11 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">101</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/israel-population/">Israel</a></td> <td style="font-weight: bold;">8,519,377</td> <td>1.64 %</td> <td>137,861</td> <td>394</td> <td>21,640</td> <td>10,000</td> <td>3.0</td> <td>30</td> <td>93 %</td> <td>0.11 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">102</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/togo-population/">Togo</a></td> <td style="font-weight: bold;">8,082,366</td> <td>2.45 %</td> <td>193,273</td> <td>149</td> <td>54,390</td> <td>-2,000</td> <td>4.4</td> <td>19</td> <td>43 %</td> <td>0.10 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">103</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/sierra-leone-population/">Sierra Leone</a></td> <td style="font-weight: bold;">7,813,215</td> <td>2.13 %</td> <td>163,065</td> <td>108</td> <td>72,180</td> <td>-4,200</td> <td>4.3</td> <td>19</td> <td>43 %</td> <td>0.10 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">104</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/china-hong-kong-sar-population/">Hong Kong</a></td> <td style="font-weight: bold;">7,436,154</td> <td>0.87 %</td> <td>64,424</td> <td>7,082</td> <td>1,050</td> <td>29,308</td> <td>1.3</td> <td>45</td> <td>N.A.</td> <td>0.10 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">105</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/laos-population/">Laos</a></td> <td style="font-weight: bold;">7,169,455</td> <td>1.53 %</td> <td>107,948</td> <td>31</td> <td>230,800</td> <td>-14,704</td> <td>2.7</td> <td>24</td> <td>35 %</td> <td>0.09 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">106</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/paraguay-population/">Paraguay</a></td> <td style="font-weight: bold;">7,044,636</td> <td>1.27 %</td> <td>88,570</td> <td>18</td> <td>397,300</td> <td>-16,556</td> <td>2.4</td> <td>26</td> <td>61 %</td> <td>0.09 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">107</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/bulgaria-population/">Bulgaria</a></td> <td style="font-weight: bold;">7,000,119</td> <td>-0.73 %</td> <td>-51,489</td> <td>64</td> <td>108,560</td> <td>-4,800</td> <td>1.6</td> <td>45</td> <td>75 %</td> <td>0.09 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">108</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/lebanon-population/">Lebanon</a></td> <td style="font-weight: bold;">6,855,713</td> <td>-0.05 %</td> <td>-3,695</td> <td>670</td> <td>10,230</td> <td>-30,012</td> <td>2.1</td> <td>30</td> <td>79 %</td> <td>0.09 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">109</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/libya-population/">Libya</a></td> <td style="font-weight: bold;">6,777,452</td> <td>1.48 %</td> <td>98,893</td> <td>4</td> <td>1,759,540</td> <td>-1,999</td> <td>2.3</td> <td>29</td> <td>78 %</td> <td>0.09 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">110</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/nicaragua-population/">Nicaragua</a></td> <td style="font-weight: bold;">6,545,502</td> <td>1.24 %</td> <td>80,001</td> <td>54</td> <td>120,340</td> <td>-21,272</td> <td>2.4</td> <td>26</td> <td>57 %</td> <td>0.08 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">111</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/el-salvador-population/">El Salvador</a></td> <td style="font-weight: bold;">6,453,553</td> <td>0.51 %</td> <td>32,807</td> <td>311</td> <td>20,720</td> <td>-40,539</td> <td>2.1</td> <td>28</td> <td>73 %</td> <td>0.08 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">112</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/kyrgyzstan-population/">Kyrgyzstan</a></td> <td style="font-weight: bold;">6,415,850</td> <td>1.77 %</td> <td>111,820</td> <td>33</td> <td>191,800</td> <td>-4,000</td> <td>3.0</td> <td>26</td> <td>35 %</td> <td>0.08 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">113</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/turkmenistan-population/">Turkmenistan</a></td> <td style="font-weight: bold;">5,942,089</td> <td>1.56 %</td> <td>91,188</td> <td>13</td> <td>469,930</td> <td>-5,000</td> <td>2.8</td> <td>27</td> <td>52 %</td> <td>0.08 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">114</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/singapore-population/">Singapore</a></td> <td style="font-weight: bold;">5,804,337</td> <td>0.81 %</td> <td>46,838</td> <td>8,292</td> <td>700</td> <td>27,028</td> <td>1.2</td> <td>42</td> <td>N.A.</td> <td>0.08 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">115</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/denmark-population/">Denmark</a></td> <td style="font-weight: bold;">5,771,876</td> <td>0.34 %</td> <td>19,750</td> <td>136</td> <td>42,430</td> <td>15,200</td> <td>1.8</td> <td>42</td> <td>88 %</td> <td>0.07 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">116</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/finland-population/">Finland</a></td> <td style="font-weight: bold;">5,532,156</td> <td>0.17 %</td> <td>9,580</td> <td>18</td> <td>303,890</td> <td>14,000</td> <td>1.5</td> <td>43</td> <td>86 %</td> <td>0.07 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">117</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/slovakia-population/">Slovakia</a></td> <td style="font-weight: bold;">5,457,013</td> <td>0.07 %</td> <td>3,999</td> <td>113</td> <td>48,088</td> <td>1,485</td> <td>1.5</td> <td>41</td> <td>54 %</td> <td>0.07 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">118</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/congo-population/">Congo</a></td> <td style="font-weight: bold;">5,380,508</td> <td>2.60 %</td> <td>136,149</td> <td>16</td> <td>341,500</td> <td>-4,000</td> <td>4.5</td> <td>19</td> <td>69 %</td> <td>0.07 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">119</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/norway-population/">Norway</a></td> <td style="font-weight: bold;">5,378,857</td> <td>0.77 %</td> <td>40,895</td> <td>15</td> <td>365,268</td> <td>28,000</td> <td>1.7</td> <td>40</td> <td>83 %</td> <td>0.07 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">120</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/costa-rica-population/">Costa Rica</a></td> <td style="font-weight: bold;">5,047,561</td> <td>0.96 %</td> <td>48,120</td> <td>99</td> <td>51,060</td> <td>4,200</td> <td>1.8</td> <td>33</td> <td>79 %</td> <td>0.07 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">121</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/state-of-palestine-population/">State of Palestine</a></td> <td style="font-weight: bold;">4,981,420</td> <td>2.44 %</td> <td>118,441</td> <td>827</td> <td>6,020</td> <td>-10,563</td> <td>3.7</td> <td>21</td> <td>80 %</td> <td>0.06 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">122</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/oman-population/">Oman</a></td> <td style="font-weight: bold;">4,974,986</td> <td>3.01 %</td> <td>145,513</td> <td>16</td> <td>309,500</td> <td>87,400</td> <td>2.9</td> <td>31</td> <td>86 %</td> <td>0.06 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">123</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/liberia-population/">Liberia</a></td> <td style="font-weight: bold;">4,937,374</td> <td>2.46 %</td> <td>118,401</td> <td>51</td> <td>96,320</td> <td>-5,000</td> <td>4.4</td> <td>19</td> <td>52 %</td> <td>0.06 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">124</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/ireland-population/">Ireland</a></td> <td style="font-weight: bold;">4,882,495</td> <td>1.32 %</td> <td>63,805</td> <td>71</td> <td>68,890</td> <td>23,604</td> <td>1.8</td> <td>38</td> <td>63 %</td> <td>0.06 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">125</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/new-zealand-population/">New Zealand</a></td> <td style="font-weight: bold;">4,783,063</td> <td>0.84 %</td> <td>39,932</td> <td>18</td> <td>263,310</td> <td>14,881</td> <td>1.9</td> <td>38</td> <td>87 %</td> <td>0.06 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">126</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/central-african-republic-population/">Central African Republic</a></td> <td style="font-weight: bold;">4,745,185</td> <td>1.69 %</td> <td>78,817</td> <td>8</td> <td>622,980</td> <td>-40,000</td> <td>4.8</td> <td>18</td> <td>42 %</td> <td>0.06 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">127</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/mauritania-population/">Mauritania</a></td> <td style="font-weight: bold;">4,525,696</td> <td>2.78 %</td> <td>122,383</td> <td>4</td> <td>1,030,700</td> <td>5,000</td> <td>4.6</td> <td>20</td> <td>56 %</td> <td>0.06 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">128</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/panama-population/">Panama</a></td> <td style="font-weight: bold;">4,246,439</td> <td>1.67 %</td> <td>69,570</td> <td>57</td> <td>74,340</td> <td>11,200</td> <td>2.5</td> <td>30</td> <td>68 %</td> <td>0.06 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">129</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/kuwait-population/">Kuwait</a></td> <td style="font-weight: bold;">4,207,083</td> <td>1.69 %</td> <td>69,771</td> <td>236</td> <td>17,820</td> <td>39,520</td> <td>2.1</td> <td>37</td> <td>N.A.</td> <td>0.05 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">130</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/croatia-population/">Croatia</a></td> <td style="font-weight: bold;">4,130,304</td> <td>-0.63 %</td> <td>-26,101</td> <td>74</td> <td>55,960</td> <td>-8,001</td> <td>1.4</td> <td>44</td> <td>57 %</td> <td>0.05 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">131</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/moldova-population/">Moldova</a></td> <td style="font-weight: bold;">4,043,263</td> <td>-0.21 %</td> <td>-8,681</td> <td>123</td> <td>32,850</td> <td>-1,387</td> <td>1.3</td> <td>38</td> <td>43 %</td> <td>0.05 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">132</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/georgia-population/">Georgia</a></td> <td style="font-weight: bold;">3,996,765</td> <td>-0.15 %</td> <td>-6,177</td> <td>58</td> <td>69,490</td> <td>-10,000</td> <td>2.1</td> <td>38</td> <td>58 %</td> <td>0.05 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">133</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/eritrea-population/">Eritrea</a></td> <td style="font-weight: bold;">3,497,117</td> <td>1.28 %</td> <td>44,331</td> <td>35</td> <td>101,000</td> <td>-39,858</td> <td>4.1</td> <td>19</td> <td>62 %</td> <td>0.05 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">134</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/uruguay-population/">Uruguay</a></td> <td style="font-weight: bold;">3,461,734</td> <td>0.36 %</td> <td>12,449</td> <td>20</td> <td>175,020</td> <td>-3,000</td> <td>2.0</td> <td>36</td> <td>96 %</td> <td>0.04 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">135</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/bosnia-and-herzegovina-population/">Bosnia and Herzegovina</a></td> <td style="font-weight: bold;">3,301,000</td> <td>-0.69 %</td> <td>-22,925</td> <td>65</td> <td>51,000</td> <td>-21,585</td> <td>1.3</td> <td>43</td> <td>52 %</td> <td>0.04 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">136</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/mongolia-population/">Mongolia</a></td> <td style="font-weight: bold;">3,225,167</td> <td>1.73 %</td> <td>54,951</td> <td>2</td> <td>1,553,560</td> <td>-852</td> <td>2.9</td> <td>28</td> <td>67 %</td> <td>0.04 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">137</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/armenia-population/">Armenia</a></td> <td style="font-weight: bold;">2,957,731</td> <td>0.20 %</td> <td>5,986</td> <td>104</td> <td>28,470</td> <td>-4,998</td> <td>1.8</td> <td>35</td> <td>63 %</td> <td>0.04 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">138</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/jamaica-population/">Jamaica</a></td> <td style="font-weight: bold;">2,948,279</td> <td>0.46 %</td> <td>13,432</td> <td>272</td> <td>10,830</td> <td>-11,332</td> <td>2.0</td> <td>31</td> <td>55 %</td> <td>0.04 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">139</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/puerto-rico-population/">Puerto Rico</a></td> <td style="font-weight: bold;">2,933,408</td> <td>-3.49 %</td> <td>-106,188</td> <td>331</td> <td>8,870</td> <td>-97,986</td> <td>1.2</td> <td>44</td> <td>N.A.</td> <td>0.04 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">140</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/albania-population/">Albania</a></td> <td style="font-weight: bold;">2,880,917</td> <td>-0.06 %</td> <td>-1,823</td> <td>105</td> <td>27,400</td> <td>-14,000</td> <td>1.6</td> <td>36</td> <td>62 %</td> <td>0.04 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">141</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/qatar-population/">Qatar</a></td> <td style="font-weight: bold;">2,832,067</td> <td>1.81 %</td> <td>50,385</td> <td>244</td> <td>11,610</td> <td>40,000</td> <td>1.9</td> <td>32</td> <td>96 %</td> <td>0.04 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">142</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/lithuania-population/">Lithuania</a></td> <td style="font-weight: bold;">2,759,627</td> <td>-1.49 %</td> <td>-41,637</td> <td>44</td> <td>62,674</td> <td>-32,780</td> <td>1.7</td> <td>45</td> <td>70 %</td> <td>0.04 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">143</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/namibia-population/">Namibia</a></td> <td style="font-weight: bold;">2,494,530</td> <td>1.89 %</td> <td>46,229</td> <td>3</td> <td>823,290</td> <td>-4,806</td> <td>3.4</td> <td>22</td> <td>54 %</td> <td>0.03 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">144</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/gambia-population/">Gambia</a></td> <td style="font-weight: bold;">2,347,706</td> <td>2.97 %</td> <td>67,612</td> <td>232</td> <td>10,120</td> <td>-3,087</td> <td>5.3</td> <td>18</td> <td>59 %</td> <td>0.03 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">145</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/botswana-population/">Botswana</a></td> <td style="font-weight: bold;">2,303,697</td> <td>2.20 %</td> <td>49,629</td> <td>4</td> <td>566,730</td> <td>3,000</td> <td>2.9</td> <td>24</td> <td>72 %</td> <td>0.03 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">146</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/gabon-population/">Gabon</a></td> <td style="font-weight: bold;">2,172,579</td> <td>2.52 %</td> <td>53,304</td> <td>8</td> <td>257,670</td> <td>3,260</td> <td>4.0</td> <td>23</td> <td>87 %</td> <td>0.03 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">147</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/lesotho-population/">Lesotho</a></td> <td style="font-weight: bold;">2,125,268</td> <td>0.80 %</td> <td>16,940</td> <td>70</td> <td>30,360</td> <td>-10,047</td> <td>3.2</td> <td>24</td> <td>31 %</td> <td>0.03 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">148</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/macedonia-population/">North Macedonia</a></td> <td style="font-weight: bold;">2,083,459</td> <td>0.02 %</td> <td>502</td> <td>83</td> <td>25,220</td> <td>-1,000</td> <td>1.5</td> <td>39</td> <td>58 %</td> <td>0.03 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">149</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/slovenia-population/">Slovenia</a></td> <td style="font-weight: bold;">2,078,654</td> <td>0.04 %</td> <td>817</td> <td>103</td> <td>20,140</td> <td>2,000</td> <td>1.6</td> <td>45</td> <td>55 %</td> <td>0.03 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">150</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/guinea-bissau-population/">Guinea-Bissau</a></td> <td style="font-weight: bold;">1,920,922</td> <td>2.49 %</td> <td>46,619</td> <td>68</td> <td>28,120</td> <td>-1,399</td> <td>4.5</td> <td>19</td> <td>45 %</td> <td>0.02 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">151</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/latvia-population/">Latvia</a></td> <td style="font-weight: bold;">1,906,743</td> <td>-1.13 %</td> <td>-21,716</td> <td>31</td> <td>62,200</td> <td>-14,837</td> <td>1.7</td> <td>44</td> <td>68 %</td> <td>0.02 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">152</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/bahrain-population/">Bahrain</a></td> <td style="font-weight: bold;">1,641,172</td> <td>4.57 %</td> <td>71,726</td> <td>2,159</td> <td>760</td> <td>47,800</td> <td>2.0</td> <td>32</td> <td>89 %</td> <td>0.02 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">153</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/trinidad-and-tobago-population/">Trinidad and Tobago</a></td> <td style="font-weight: bold;">1,394,973</td> <td>0.37 %</td> <td>5,130</td> <td>272</td> <td>5,130</td> <td>-800</td> <td>1.7</td> <td>36</td> <td>52 %</td> <td>0.02 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">154</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/equatorial-guinea-population/">Equatorial Guinea</a></td> <td style="font-weight: bold;">1,355,986</td> <td>3.59 %</td> <td>47,011</td> <td>48</td> <td>28,050</td> <td>16,000</td> <td>4.6</td> <td>22</td> <td>73 %</td> <td>0.02 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">155</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/estonia-population/">Estonia</a></td> <td style="font-weight: bold;">1,325,648</td> <td>0.21 %</td> <td>2,728</td> <td>31</td> <td>42,390</td> <td>3,911</td> <td>1.6</td> <td>42</td> <td>68 %</td> <td>0.02 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">156</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/timor-leste-population/">Timor-Leste</a></td> <td style="font-weight: bold;">1,293,119</td> <td>1.98 %</td> <td>25,145</td> <td>87</td> <td>14,870</td> <td>-5,385</td> <td>4.1</td> <td>21</td> <td>32 %</td> <td>0.02 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">157</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/mauritius-population/">Mauritius</a></td> <td style="font-weight: bold;">1,269,668</td> <td>0.20 %</td> <td>2,483</td> <td>625</td> <td>2,030</td> <td>0</td> <td>1.4</td> <td>37</td> <td>41 %</td> <td>0.02 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">158</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/cyprus-population/">Cyprus</a></td> <td style="font-weight: bold;">1,198,575</td> <td>0.78 %</td> <td>9,310</td> <td>130</td> <td>9,240</td> <td>5,000</td> <td>1.3</td> <td>37</td> <td>67 %</td> <td>0.02 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">159</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/swaziland-population/">Eswatini</a></td> <td style="font-weight: bold;">1,148,130</td> <td>1.04 %</td> <td>11,849</td> <td>67</td> <td>17,200</td> <td>-8,353</td> <td>3.0</td> <td>21</td> <td>30 %</td> <td>0.01 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">160</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/djibouti-population/">Djibouti</a></td> <td style="font-weight: bold;">973,560</td> <td>1.53 %</td> <td>14,637</td> <td>42</td> <td>23,180</td> <td>900</td> <td>2.8</td> <td>27</td> <td>79 %</td> <td>0.01 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">161</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/fiji-population/">Fiji</a></td> <td style="font-weight: bold;">889,953</td> <td>0.73 %</td> <td>6,470</td> <td>49</td> <td>18,270</td> <td>-6,202</td> <td>2.8</td> <td>28</td> <td>59 %</td> <td>0.01 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">162</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/reunion-population/">Réunion</a></td> <td style="font-weight: bold;">888,927</td> <td>0.73 %</td> <td>6,401</td> <td>356</td> <td>2,500</td> <td>-1,256</td> <td>2.3</td> <td>36</td> <td>100 %</td> <td>0.01 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">163</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/comoros-population/">Comoros</a></td> <td style="font-weight: bold;">850,886</td> <td>2.23 %</td> <td>18,564</td> <td>457</td> <td>1,861</td> <td>-2,000</td> <td>4.2</td> <td>20</td> <td>29 %</td> <td>0.01 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">164</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/guyana-population/">Guyana</a></td> <td style="font-weight: bold;">782,766</td> <td>0.48 %</td> <td>3,760</td> <td>4</td> <td>196,850</td> <td>-6,000</td> <td>2.5</td> <td>27</td> <td>27 %</td> <td>0.01 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">165</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/bhutan-population/">Bhutan</a></td> <td style="font-weight: bold;">763,092</td> <td>1.15 %</td> <td>8,704</td> <td>20</td> <td>38,117</td> <td>320</td> <td>2.0</td> <td>28</td> <td>45 %</td> <td>0.01 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">166</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/solomon-islands-population/">Solomon Islands</a></td> <td style="font-weight: bold;">669,823</td> <td>2.60 %</td> <td>16,966</td> <td>24</td> <td>27,990</td> <td>-1,600</td> <td>4.4</td> <td>20</td> <td>23 %</td> <td>0.01 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">167</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/china-macao-sar-population/">Macao</a></td> <td style="font-weight: bold;">640,445</td> <td>1.39 %</td> <td>8,809</td> <td>21,348</td> <td>30</td> <td>5,000</td> <td>1.2</td> <td>39</td> <td>N.A.</td> <td>0.01 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">168</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/montenegro-population/">Montenegro</a></td> <td style="font-weight: bold;">627,987</td> <td>0.03 %</td> <td>178</td> <td>47</td> <td>13,450</td> <td>-480</td> <td>1.8</td> <td>39</td> <td>67 %</td> <td>0.01 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">169</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/luxembourg-population/">Luxembourg</a></td> <td style="font-weight: bold;">615,729</td> <td>1.90 %</td> <td>11,484</td> <td>238</td> <td>2,590</td> <td>9,741</td> <td>1.5</td> <td>40</td> <td>88 %</td> <td>0.01 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">170</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/western-sahara-population/">Western Sahara</a></td> <td style="font-weight: bold;">582,463</td> <td>2.65 %</td> <td>15,061</td> <td>2</td> <td>266,000</td> <td>5,582</td> <td>2.4</td> <td>28</td> <td>87 %</td> <td>0.01 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">171</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/suriname-population/">Suriname</a></td> <td style="font-weight: bold;">581,372</td> <td>0.93 %</td> <td>5,382</td> <td>4</td> <td>156,000</td> <td>-1,000</td> <td>2.4</td> <td>29</td> <td>65 %</td> <td>0.01 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">172</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/cabo-verde-population/">Cabo Verde</a></td> <td style="font-weight: bold;">549,935</td> <td>1.13 %</td> <td>6,168</td> <td>136</td> <td>4,030</td> <td>-1,342</td> <td>2.3</td> <td>28</td> <td>67 %</td> <td>0.01 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">173</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/maldives-population/">Maldives</a></td> <td style="font-weight: bold;">530,953</td> <td>2.96 %</td> <td>15,257</td> <td>1,770</td> <td>300</td> <td>11,370</td> <td>1.9</td> <td>30</td> <td>34 %</td> <td>0.01 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">174</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/malta-population/">Malta</a></td> <td style="font-weight: bold;">440,372</td> <td>0.26 %</td> <td>1,124</td> <td>1,376</td> <td>320</td> <td>900</td> <td>1.5</td> <td>43</td> <td>93 %</td> <td>0.01 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">175</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/brunei-darussalam-population/">Brunei </a></td> <td style="font-weight: bold;">433,285</td> <td>1.01 %</td> <td>4,322</td> <td>82</td> <td>5,270</td> <td>0</td> <td>1.8</td> <td>32</td> <td>79 %</td> <td>0.01 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">176</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/guadeloupe-population/">Guadeloupe</a></td> <td style="font-weight: bold;">400,056</td> <td>0.05 %</td> <td>208</td> <td>237</td> <td>1,690</td> <td>-1,440</td> <td>2.2</td> <td>44</td> <td>N.A.</td> <td>0.01 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">177</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/belize-population/">Belize</a></td> <td style="font-weight: bold;">390,353</td> <td>1.90 %</td> <td>7,282</td> <td>17</td> <td>22,810</td> <td>1,200</td> <td>2.3</td> <td>25</td> <td>46 %</td> <td>0.01 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">178</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/bahamas-population/">Bahamas</a></td> <td style="font-weight: bold;">389,482</td> <td>1.00 %</td> <td>3,845</td> <td>39</td> <td>10,010</td> <td>1,000</td> <td>1.8</td> <td>32</td> <td>86 %</td> <td>0.01 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">179</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/martinique-population/">Martinique</a></td> <td style="font-weight: bold;">375,554</td> <td>-0.03 %</td> <td>-119</td> <td>354</td> <td>1,060</td> <td>-960</td> <td>1.9</td> <td>47</td> <td>91 %</td> <td>0.00 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">180</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/iceland-population/">Iceland</a></td> <td style="font-weight: bold;">339,031</td> <td>0.69 %</td> <td>2,318</td> <td>3</td> <td>100,250</td> <td>380</td> <td>1.8</td> <td>37</td> <td>94 %</td> <td>0.00 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">181</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/vanuatu-population/">Vanuatu</a></td> <td style="font-weight: bold;">299,882</td> <td>2.46 %</td> <td>7,202</td> <td>25</td> <td>12,190</td> <td>120</td> <td>3.8</td> <td>21</td> <td>24 %</td> <td>0.00 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">182</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/french-guiana-population/">French Guiana</a></td> <td style="font-weight: bold;">290,832</td> <td>2.79 %</td> <td>7,894</td> <td>4</td> <td>82,200</td> <td>1,200</td> <td>3.4</td> <td>25</td> <td>87 %</td> <td>0.00 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">183</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/barbados-population/">Barbados</a></td> <td style="font-weight: bold;">287,025</td> <td>0.13 %</td> <td>384</td> <td>668</td> <td>430</td> <td>-79</td> <td>1.6</td> <td>40</td> <td>31 %</td> <td>0.00 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">184</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/new-caledonia-population/">New Caledonia</a></td> <td style="font-weight: bold;">282,750</td> <td>0.98 %</td> <td>2,757</td> <td>15</td> <td>18,280</td> <td>502</td> <td>2.0</td> <td>34</td> <td>71 %</td> <td>0.00 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">185</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/french-polynesia-population/">French Polynesia</a></td> <td style="font-weight: bold;">279,287</td> <td>0.58 %</td> <td>1,608</td> <td>76</td> <td>3,660</td> <td>-1,000</td> <td>2.0</td> <td>34</td> <td>64 %</td> <td>0.00 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">186</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/mayotte-population/">Mayotte</a></td> <td style="font-weight: bold;">266,150</td> <td>2.55 %</td> <td>6,619</td> <td>710</td> <td>375</td> <td>0</td> <td>3.7</td> <td>20</td> <td>46 %</td> <td>0.00 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">187</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/sao-tome-and-principe-population/">Sao Tome &amp; Principe</a></td> <td style="font-weight: bold;">215,056</td> <td>1.91 %</td> <td>4,028</td> <td>224</td> <td>960</td> <td>-1,680</td> <td>4.4</td> <td>19</td> <td>73 %</td> <td>0.00 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">188</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/samoa-population/">Samoa</a></td> <td style="font-weight: bold;">197,097</td> <td>0.49 %</td> <td>968</td> <td>70</td> <td>2,830</td> <td>-2,803</td> <td>3.9</td> <td>22</td> <td>18 %</td> <td>0.00 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">189</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/saint-lucia-population/">Saint Lucia</a></td> <td style="font-weight: bold;">182,790</td> <td>0.50 %</td> <td>901</td> <td>300</td> <td>610</td> <td>0</td> <td>1.4</td> <td>34</td> <td>19 %</td> <td>0.00 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">190</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/channel-islands-population/">Channel Islands</a></td> <td style="font-weight: bold;">172,259</td> <td>1.03 %</td> <td>1,760</td> <td>907</td> <td>190</td> <td>1,351</td> <td>1.5</td> <td>43</td> <td>30 %</td> <td>0.00 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">191</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/guam-population/">Guam</a></td> <td style="font-weight: bold;">167,294</td> <td>0.92 %</td> <td>1,526</td> <td>310</td> <td>540</td> <td>-506</td> <td>2.3</td> <td>31</td> <td>95 %</td> <td>0.00 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">192</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/curacao-population/">Curaçao</a></td> <td style="font-weight: bold;">163,424</td> <td>0.41 %</td> <td>672</td> <td>368</td> <td>444</td> <td>515</td> <td>1.8</td> <td>42</td> <td>89 %</td> <td>0.00 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">193</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/kiribati-population/">Kiribati</a></td> <td style="font-weight: bold;">117,606</td> <td>1.52 %</td> <td>1,759</td> <td>145</td> <td>810</td> <td>-800</td> <td>3.6</td> <td>23</td> <td>56 %</td> <td>0.00 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">194</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/micronesia-country-population/">Micronesia</a></td> <td style="font-weight: bold;">113,815</td> <td>1.04 %</td> <td>1,175</td> <td>163</td> <td>700</td> <td>-600</td> <td>3.1</td> <td>24</td> <td>21 %</td> <td>0.00 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">195</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/grenada-population/">Grenada</a></td> <td style="font-weight: bold;">112,003</td> <td>0.49 %</td> <td>549</td> <td>329</td> <td>340</td> <td>-200</td> <td>2.1</td> <td>32</td> <td>35 %</td> <td>0.00 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">196</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/saint-vincent-and-the-grenadines-population/">St. Vincent &amp; Grenadines</a></td> <td style="font-weight: bold;">110,589</td> <td>0.34 %</td> <td>378</td> <td>284</td> <td>390</td> <td>-200</td> <td>1.9</td> <td>33</td> <td>53 %</td> <td>0.00 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">197</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/aruba-population/">Aruba</a></td> <td style="font-weight: bold;">106,314</td> <td>0.44 %</td> <td>469</td> <td>591</td> <td>180</td> <td>201</td> <td>1.9</td> <td>41</td> <td>43 %</td> <td>0.00 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">198</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/united-states-virgin-islands-population/">U.S. Virgin Islands</a></td> <td style="font-weight: bold;">104,578</td> <td>-0.10 %</td> <td>-102</td> <td>299</td> <td>350</td> <td>-451</td> <td>2.0</td> <td>43</td> <td>96 %</td> <td>0.00 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">199</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/tonga-population/">Tonga</a></td> <td style="font-weight: bold;">104,494</td> <td>1.26 %</td> <td>1,297</td> <td>145</td> <td>720</td> <td>-800</td> <td>3.6</td> <td>22</td> <td>24 %</td> <td>0.00 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">200</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/seychelles-population/">Seychelles</a></td> <td style="font-weight: bold;">97,739</td> <td>0.66 %</td> <td>643</td> <td>212</td> <td>460</td> <td>-200</td> <td>2.5</td> <td>34</td> <td>56 %</td> <td>0.00 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">201</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/antigua-and-barbuda-population/">Antigua and Barbuda</a></td> <td style="font-weight: bold;">97,118</td> <td>0.86 %</td> <td>832</td> <td>221</td> <td>440</td> <td>0</td> <td>2.0</td> <td>34</td> <td>26 %</td> <td>0.00 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">202</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/isle-of-man-population/">Isle of Man</a></td> <td style="font-weight: bold;">84,584</td> <td>0.60 %</td> <td>507</td> <td>148</td> <td>570</td> <td> </td> <td>N.A.</td> <td>N.A.</td> <td>53 %</td> <td>0.00 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">203</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/andorra-population/">Andorra</a></td> <td style="font-weight: bold;">77,142</td> <td>0.18 %</td> <td>136</td> <td>164</td> <td>470</td> <td> </td> <td>N.A.</td> <td>N.A.</td> <td>88 %</td> <td>0.00 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">204</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/dominica-population/">Dominica</a></td> <td style="font-weight: bold;">71,808</td> <td>0.26 %</td> <td>183</td> <td>96</td> <td>750</td> <td> </td> <td>N.A.</td> <td>N.A.</td> <td>74 %</td> <td>0.00 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">205</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/cayman-islands-population/">Cayman Islands</a></td> <td style="font-weight: bold;">64,948</td> <td>1.21 %</td> <td>774</td> <td>271</td> <td>240</td> <td> </td> <td>N.A.</td> <td>N.A.</td> <td>97 %</td> <td>0.00 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">206</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/bermuda-population/">Bermuda</a></td> <td style="font-weight: bold;">62,506</td> <td>-0.40 %</td> <td>-250</td> <td>1,250</td> <td>50</td> <td> </td> <td>N.A.</td> <td>N.A.</td> <td>97 %</td> <td>0.00 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">207</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/marshall-islands-population/">Marshall Islands</a></td> <td style="font-weight: bold;">58,791</td> <td>0.65 %</td> <td>378</td> <td>327</td> <td>180</td> <td> </td> <td>N.A.</td> <td>N.A.</td> <td>70 %</td> <td>0.00 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">208</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/northern-mariana-islands-population/">Northern Mariana Islands</a></td> <td style="font-weight: bold;">57,216</td> <td>0.59 %</td> <td>334</td> <td>124</td> <td>460</td> <td> </td> <td>N.A.</td> <td>N.A.</td> <td>89 %</td> <td>0.00 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">209</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/greenland-population/">Greenland</a></td> <td style="font-weight: bold;">56,672</td> <td>0.19 %</td> <td>108</td> <td>0</td> <td>410,450</td> <td> </td> <td>N.A.</td> <td>N.A.</td> <td>87 %</td> <td>0.00 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">210</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/american-samoa-population/">American Samoa</a></td> <td style="font-weight: bold;">55,312</td> <td>-0.28 %</td> <td>-153</td> <td>277</td> <td>200</td> <td> </td> <td>N.A.</td> <td>N.A.</td> <td>88 %</td> <td>0.00 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">211</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/saint-kitts-and-nevis-population/">Saint Kitts &amp; Nevis</a></td> <td style="font-weight: bold;">52,823</td> <td>0.73 %</td> <td>382</td> <td>203</td> <td>260</td> <td> </td> <td>N.A.</td> <td>N.A.</td> <td>33 %</td> <td>0.00 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">212</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/faeroe-islands-population/">Faeroe Islands</a></td> <td style="font-weight: bold;">48,678</td> <td>0.37 %</td> <td>181</td> <td>35</td> <td>1,396</td> <td> </td> <td>N.A.</td> <td>N.A.</td> <td>43 %</td> <td>0.00 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">213</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/sint-maarten-population/">Sint Maarten</a></td> <td style="font-weight: bold;">42,388</td> <td>1.07 %</td> <td>448</td> <td>1,247</td> <td>34</td> <td> </td> <td>N.A.</td> <td>N.A.</td> <td>97 %</td> <td>0.00 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">214</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/monaco-population/">Monaco</a></td> <td style="font-weight: bold;">38,964</td> <td>0.73 %</td> <td>282</td> <td>26,150</td> <td>1</td> <td> </td> <td>N.A.</td> <td>N.A.</td> <td>N.A.</td> <td>0.00 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">215</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/turks-and-caicos-islands-population/">Turks and Caicos</a></td> <td style="font-weight: bold;">38,191</td> <td>1.40 %</td> <td>526</td> <td>40</td> <td>950</td> <td> </td> <td>N.A.</td> <td>N.A.</td> <td>89 %</td> <td>0.00 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">216</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/liechtenstein-population/">Liechtenstein</a></td> <td style="font-weight: bold;">38,019</td> <td>0.29 %</td> <td>109</td> <td>238</td> <td>160</td> <td> </td> <td>N.A.</td> <td>N.A.</td> <td>15 %</td> <td>0.00 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">217</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/san-marino-population/">San Marino</a></td> <td style="font-weight: bold;">33,860</td> <td>0.22 %</td> <td>75</td> <td>564</td> <td>60</td> <td> </td> <td>N.A.</td> <td>N.A.</td> <td>97 %</td> <td>0.00 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">218</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/gibraltar-population/">Gibraltar</a></td> <td style="font-weight: bold;">33,701</td> <td>-0.05 %</td> <td>-17</td> <td>3,370</td> <td>10</td> <td> </td> <td>N.A.</td> <td>N.A.</td> <td>N.A.</td> <td>0.00 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">219</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/british-virgin-islands-population/">British Virgin Islands</a></td> <td style="font-weight: bold;">30,030</td> <td>0.77 %</td> <td>228</td> <td>200</td> <td>150</td> <td> </td> <td>N.A.</td> <td>N.A.</td> <td>52 %</td> <td>0.00 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">220</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/caribbean-netherlands-population/">Caribbean Netherlands</a></td> <td style="font-weight: bold;">25,979</td> <td>1.04 %</td> <td>268</td> <td>79</td> <td>328</td> <td> </td> <td>N.A.</td> <td>N.A.</td> <td>75 %</td> <td>0.00 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">221</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/palau-population/">Palau</a></td> <td style="font-weight: bold;">18,008</td> <td>0.56 %</td> <td>101</td> <td>39</td> <td>460</td> <td> </td> <td>N.A.</td> <td>N.A.</td> <td>99 %</td> <td>0.00 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">222</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/cook-islands-population/">Cook Islands</a></td> <td style="font-weight: bold;">17,548</td> <td>0.17 %</td> <td>30</td> <td>73</td> <td>240</td> <td> </td> <td>N.A.</td> <td>N.A.</td> <td>75 %</td> <td>0.00 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">223</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/anguilla-population/">Anguilla</a></td> <td style="font-weight: bold;">14,869</td> <td>0.94 %</td> <td>138</td> <td>165</td> <td>90</td> <td> </td> <td>N.A.</td> <td>N.A.</td> <td>N.A.</td> <td>0.00 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">224</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/tuvalu-population/">Tuvalu</a></td> <td style="font-weight: bold;">11,646</td> <td>1.20 %</td> <td>138</td> <td>388</td> <td>30</td> <td> </td> <td>N.A.</td> <td>N.A.</td> <td>62 %</td> <td>0.00 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">225</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/wallis-and-futuna-islands-population/">Wallis &amp; Futuna</a></td> <td style="font-weight: bold;">11,432</td> <td>-1.96 %</td> <td>-229</td> <td>82</td> <td>140</td> <td> </td> <td>N.A.</td> <td>N.A.</td> <td>0 %</td> <td>0.00 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">226</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/nauru-population/">Nauru</a></td> <td style="font-weight: bold;">10,756</td> <td>0.81 %</td> <td>86</td> <td>538</td> <td>20</td> <td> </td> <td>N.A.</td> <td>N.A.</td> <td>N.A.</td> <td>0.00 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">227</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/saint-helena-population/">Saint Helena</a></td> <td style="font-weight: bold;">6,059</td> <td>0.40 %</td> <td>24</td> <td>16</td> <td>390</td> <td> </td> <td>N.A.</td> <td>N.A.</td> <td>27 %</td> <td>0.00 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">228</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/saint-pierre-and-miquelon-population/">Saint Pierre &amp; Miquelon</a></td> <td style="font-weight: bold;">5,822</td> <td>-0.46 %</td> <td>-27</td> <td>25</td> <td>230</td> <td> </td> <td>N.A.</td> <td>N.A.</td> <td>99 %</td> <td>0.00 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">229</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/montserrat-population/">Montserrat</a></td> <td style="font-weight: bold;">4,989</td> <td>-0.08 %</td> <td>-4</td> <td>50</td> <td>100</td> <td> </td> <td>N.A.</td> <td>N.A.</td> <td>10 %</td> <td>0.00 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">230</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/falkland-islands-malvinas-population/">Falkland Islands</a></td> <td style="font-weight: bold;">3,377</td> <td>4.42 %</td> <td>143</td> <td>0</td> <td>12,170</td> <td> </td> <td>N.A.</td> <td>N.A.</td> <td>68 %</td> <td>0.00 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">231</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/niue-population/">Niue</a></td> <td style="font-weight: bold;">1,615</td> <td>-0.31 %</td> <td>-5</td> <td>6</td> <td>260</td> <td> </td> <td>N.A.</td> <td>N.A.</td> <td>46 %</td> <td>0.00 %</td> </tr><tr role="row" class="even"> <td class="sorting_1">232</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/tokelau-population/">Tokelau</a></td> <td style="font-weight: bold;">1,340</td> <td>1.59 %</td> <td>21</td> <td>134</td> <td>10</td> <td> </td> <td>N.A.</td> <td>N.A.</td> <td>0 %</td> <td>0.00 %</td> </tr><tr role="row" class="odd"> <td class="sorting_1">233</td> <td style="font-weight: bold; font-size:15px; text-align:left"><a href="/world-population/holy-see-population/">Holy See</a></td> <td style="font-weight: bold;">799</td> <td>-0.25 %</td> <td>-2</td> <td>1,998</td> <td>0</td> <td> </td> <td>N.A.</td> <td>N.A.</td> <td>N.A.</td> <td>0.00 %</td> </tr></tbody></table>



<script src="assets/js/jquery-1.11.2.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/datatables/jquery.dataTables.js"></script>
<script src="assets/datatables/dataTables.bootstrap.js"></script>
<script src="assets/js/multiple-select.js"></script>
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/datatables/dataTables.bootstrap.css" />