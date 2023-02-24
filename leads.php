<?php
ob_start();
session_start();
date_default_timezone_set('UTC');
include "includes/config.php";

if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
    header("location: /..");
    exit();
}
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="alfacoins-site-verification" content="5ef8c2279aa605ef8c2279aa965ef8c2279aacb_ALFAcoins">
<meta name="revisit-after" content="2 days">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<script src="cdn-cgi/apps/head/5OOZijtrf_Bpx-OYIJIWKuxGuQM.js"></script><link rel="shortcut icon" href="favicon.ico.png" />
<title>Ticket</title>
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
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-177092549-1"></script>
<script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('set', {'$usrid': 'USER_ID'}); // Set the user ID using signed-in user_id.
        gtag('config', 'UA-177092549-1');
        </script>
<link rel="stylesheet" href="layout/css/all.min.css" />
<link rel="stylesheet" href="layout/css/main%EF%B9%96v=12.9.css" />
<link rel="stylesheet" href="layout/css/util.css" />
<style>body{padding-top:80px}</style>
<link rel="stylesheet" href="layout/fonts/iconic/css/material-design-iconic-font.min.css">
<script src="layout/js/main.js"></script>
<script type="text/javascript">
            // Notice how this gets configured before we load Font Awesome
            window.FontAwesomeConfig = { autoReplaceSvg: false }
        </script>
<style>@import url(https://fonts.googleapis.com/css?family=Roboto:400);
            .navbar-nav .dropdown-menu
            {
            margin:0 !important
            }
        </style>
</head>
<style>.display  td {
    background: var(--color-card);
      color: var(--font-color);

}
.dataTables_wrapper .dataTables_paginate .paginate_button {

    color: var(--font-color);

}
#lead_data_paginate .paginate_button {
color: var(--font-color);

}

.alert-info {
    color: var(--color-info);
    background-color: var(--color-backinfo);
    border-color: var(--color-borderinfo);

}

#lead_data_filter{
  color: var(--font-color);
}
#lead_data_length{
  color: var(--font-color);
}
#lead_data_paginate{
  color: var(--font-color);
}
#lead_data_info{
  color: var(--font-color);
}
</style>
<body class="them">
<style>.navbar-nav .dropdown-menu
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
<a class="navbar-brand" href="main.html" style="color: var(--font-color);"><img width="40px" src="layout/images/logo.png"> Odin</a>
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
<a class="dropdown-item" href="rdp.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-desktop fa-fw"></i> RDPs <span class="badge badge-primary">77</span></span></a>
<a class="dropdown-item" href="cPanel.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-tools fa-fw"></i> cPanels <span class="badge badge-primary">8874</span></span></a>
<a class="dropdown-item" href="shell.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-file-code fa-fw"></i> Shells <span class="badge badge-primary">1500</span></span></a>
<a class="dropdown-item" href="ssh.html" style="color: var(--font-color);"><span class="px-2"><i class="fab fa-linux"></i> SSH/WHM <span class="badge badge-primary">153</span></span></a>
</div>
</li>

<li class="nav-item dropdown mr-auto">
<a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-leaf fa-fw fa-sm text-success" style="margin-right: 4px;"></i>Premium</a>
<div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="premium_shell.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> Premium Shells <span class="badge badge-primary">7</span></span></a>
</div>
</li>

<li class="nav-item dropdown mr-auto">
<a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fab fa-google-play fa-sm text-success"></i>
Send
</a>
<div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="mailer.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> Mailers <span class="badge badge-primary">388</span></span></a>
<a class="dropdown-item" href="smtp.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-envelope fa-fw"></i> SMTPs <span class="badge badge-primary">1794</span></span></a>
</div>
</li>


<li class="nav-item dropdown mr-auto">
<a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-mail-bulk fa-sm pink-color"></i> Leads
</a>
<div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="leads-5.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-award"></i> 100% Validated Leads <span class="badge badge-primary">0</span></span></a>
<a class="dropdown-item" href="leads-1.html" style="color: var(--font-color);"><span class="px-2"><i class="fa fa-fire orange-color"></i> Email Only <span class="badge badge-primary">111</span></span></a>
<a class="dropdown-item" href="leads-2.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-passport"></i> Combo Email:Password <span class="badge badge-primary">0</span></span></a>
<a class="dropdown-item" href="leads-3.html" style="color: var(--font-color);"><span class="px-2"><i class="fab fa-battle-net"></i> Combo Username:Password <span class="badge badge-primary">0</span></span></a>
<a class="dropdown-item" href="leads-4.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-at"></i> Email Access <span class="badge badge-primary">0</span></span></a>
<a class="dropdown-item" href="leads-6.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-mobile-alt"></i> Phone Number Only <span class="badge badge-primary">20</span></span></a>
<a class="dropdown-item" href="leads-7.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-phone-square"></i> Combo Phone:Password <span class="badge badge-primary">0</span></span></a>
<a class="dropdown-item" href="leads-8.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-inbox"></i> Full Data <span class="badge badge-primary">0</span></span></a>
<a class="dropdown-item" href="leads-9.html" style="color: var(--font-color);"><span class="px-2"><i class="fab fa-facebook"></i> Social Media Data <span class="badge badge-primary">0</span></span></a>
</div>
</li>


<li class="nav-item dropdown mr-auto">
<a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-tie fa-sm"></i> Business
</a>
<div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="business-1.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-business-time"></i> cPanel Webmail <span class="badge badge-primary">2336</span></span></a>
<a class="dropdown-item" href="business-2.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-mail-bulk"></i> Godaddy Webmail <span class="badge badge-primary">83</span></span></a>
<a class="dropdown-item" href="business-3.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-globe"></i> Office365 Webmail <span class="badge badge-primary">8337</span></span></a>
<a class="dropdown-item" href="business-4.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-envelope-open-text"></i> Rackspace Webmail <span class="badge badge-primary">1784</span></span></a>
</div>
</li>


<li class="nav-item dropdown mr-auto">
<a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-friends fa-sm"></i> Accounts
</a>
<div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="accounts-1.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-comments-dollar"></i> Marketing <span class="badge badge-primary">104</span></span></a>
<a class="dropdown-item" href="accounts-2.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-server"></i> Hosting / Domain <span class="badge badge-primary">15</span></span></a>
<a class="dropdown-item" href="accounts-3.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-gamepad"></i> Games <span class="badge badge-primary">18</span></span></a>
<a class="dropdown-item" href="accounts-4.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-cubes"></i> VPN/Socks Proxy>Email Access <span class="badge badge-primary">1120</span></span></a>
<a class="dropdown-item" href="accounts-5.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-shopping-cart"></i> Shopping{Amazon, Ebay, ...} <span class="badge badge-primary">97</span></span></a>
<a class="dropdown-item" href="accounts-6.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-ethernet"></i> Programs {Antivirus, Adobe, ...} <span class="badge badge-primary">0</span></span></a>
<a class="dropdown-item" href="accounts-7.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-stream"></i> Stream {Netflix,HBO, ... } <span class="badge badge-primary">133</span></span></a>
<a class="dropdown-item" href="accounts-8.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-user-plus"></i> Dating <span class="badge badge-primary">40</span></span></a>
<a class="dropdown-item" href="accounts-9.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-graduation-cap"></i> Learning{ Udacity, Udemy, Lynda, ... } <span class="badge badge-primary">14</span></span></a>
<a class="dropdown-item" href="accounts-10.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-window-restore"></i> Torrent / File Host <span class="badge badge-primary">3</span></span></a>
<a class="dropdown-item" href="accounts-11.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-phone-volume"></i> Voip / Sip <span class="badge badge-primary">1</span></span></a>
<a class="dropdown-item" href="accounts-12.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-network-wired"></i> Other <span class="badge badge-primary">3</span></span></a>
</div>
</li>


<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" role="button" style="color: var(--font-color);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fab fa-drupal text-primary fa-sm"></i> Requests
</a>
<div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="requests.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-user-plus"></i> Buyers Requests <span class="badge badge-primary"> 71</span></span></a>
</div>
</li>

<li class="nav-item dropdown">
<a class="nav-link" href="offers.html" style="color: var(--font-color);"><i class="fas fa-user-secret text-primary fa-sm"></i> Bulk Offers</a>
</li>
</ul>

<ul class="navbar-nav profile">

<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell text-danger"></i> <span class="badge badge-success">0</span></a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: var(--font-color); background-color: var(--color-nav);">
<a class="dropdown-item" href="#" style="color: var(--font-color);">There is no new notifications</a> </div>
</li>

<li class="nav-item">
<a class="nav-link" href="addBalance.html" style="color: var(--font-color);" role="button" aria-haspopup="true" aria-expanded="false"><span class="badge badge-danger">
0
<span class="px-2"><i class="fa fa-plus"></i></span></span>
</a>
</li>

<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Ticket <span class="badge badge-success">0</span></a>
</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: var(--font-color); background-color: var(--color-nav);">
<a class="dropdown-item" href="orders.html" style="color: var(--font-color);"><span class="px-2">Report Items</span></a>
<a class="dropdown-item" href="tickets.html" style="color: var(--font-color);"><span class="px-2">My Tickets <span class="badge badge-success">0</span></span></a>
<a class="dropdown-item" href="reports.html" style="color: var(--font-color);"><span class="px-2">My Reports <span class="badge badge-success">0</span></span></a>
<a class="dropdown-item" href="OpenTicket.html" style="color: var(--font-color);"><span class="px-2">New Ticket</span></a>
</div>
</li>


<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> hustlersfather <i class="fa fa-user-secret" style="color: var(--font-color);"></i></a>
</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: var(--font-color); background-color: var(--color-nav);">
<a class="dropdown-item" href="setting.html" style="color: var(--font-color);"><span class="px-2">Setting <i class="fa fa-cog"></i></span></a>
<a class="dropdown-item" href="seller-profile.html" style="color: var(--font-color);"><span class="px-2">Profile <i class="fa fa-user"></i></span></a>
<a class="dropdown-item" href="orders.html" style="color: var(--font-color);"><span class="px-2">My Orders <i class="fa fa-shopping-cart"></i></span></a>
<a class="dropdown-item" href="addBalance.html" style="color: var(--font-color);"><span class="px-2">Add Balance <i class="fa fa-money-bill-alt"></i></span></a>
<a class="dropdown-item" href="login.html" style="color: var(--font-color);"><span class="px-2">Logout <i class="fa fa-door-open"></i></span></a>
</div>
</li>

</ul>

</div>
</nav>

<?php
ob_start();
session_start();
date_default_timezone_set(‘UTC’);
include “../includes/config.php”;

if (!isset($_SESSION[‘sname’]) and !isset($_SESSION[‘spass’])) {
    header(“location: ../“);
    exit();
}
$usrid = mysqli_real_escape_string($dbcon, $_SESSION[‘sname’]);
?>

<ul class=“nav nav-tabs”>
  <li class=“active”><a href=“#filter” data-toggle=“tab”>Filter</a></li>
</ul>
<div id=“myTabContent” class=“tab-content” >
  <div class=“tab-pane active in” id=“filter”><table class=“table”><thead><tr><th>Country</th>
<th>Description</th>
<th>Seller</th>
<th></th></tr></thead><tbody><tr><td><select class=‘filterselect form-control input-sm’ name=“leads_country”><option value=“”>ALL</option>
<?php
$query = mysqli_query($dbcon, “SELECT DISTINCT(`country`) FROM `leads` WHERE `sold` = ‘0’ ORDER BY country ASC”);
	while($row = mysqli_fetch_assoc($query)){
	echo ‘<option value=“’.$row[‘country’].’”>’.$row[‘country’].’</option>’;
	}
?>
</select></td><td><input class=‘filterinput form-control input-sm’ name=“leads_about” size=‘3’></td><td><select class=‘filterselect form-control input-sm’ name=“leads_seller”><option value=“”>ALL</option>
<?php
$query = mysqli_query($dbcon, “SELECT DISTINCT(`resseller`) FROM `leads` WHERE `sold` = ‘0’ ORDER BY resseller ASC”);
	while($row = mysqli_fetch_assoc($query)){
		 $qer = mysqli_query($dbcon, “SELECT DISTINCT(`id`) FROM resseller WHERE username=‘”.$row[‘resseller’].”’ ORDER BY id ASC”)or die(mysql_error());
		   while($rpw = mysqli_fetch_assoc($qer))
			 $SellerNick = “seller”.$rpw[“id”].””;
	echo ‘<option value=“’.$SellerNick.’”>’.$SellerNick.’</option>’;
	}
?>










</select></td><td><button id=‘filterbutton’class=“btn btn-primary btn-sm” disabled>Filter <span class=“glyphicon glyphicon-filter”></span></button></td></tr></tbody></table></div>
</div>


<table width=“100%”  class=“table table-striped table-bordered table-condensed sticky-header” id=“table”>
<thead>
    <tr>
      <th scope=“col” >Country</th>
      <th scope=“col”>Description</th>
      <th scope=“col”>Email N</th>

      <th scope=“col”>Seller</th>
      <th scope=“col”>Price</th>
      <th scope=“col”>Added on </th>

      <th scope=“col”>Buy</th>
    </tr>
</thead>
  <tbody>

 <?php
include(“cr.php”);
$q = mysqli_query($dbcon, “SELECT * FROM leads WHERE sold=‘0’ ORDER BY RAND()”)or die(mysqli_error());
 while($row = mysqli_fetch_assoc($q)){
	 
	 	 $countryfullname = $row[‘country’];
	  $code = array_search(“$countryfullname”, $countrycodes);
	 $countrycode = strtolower($code);
	    $qer = mysqli_query($dbcon, “SELECT * FROM resseller WHERE username=‘”.$row[‘resseller’].”’”)or die(mysql_error());
		   while($rpw = mysqli_fetch_assoc($qer))
			 $SellerNick = “seller”.$rpw[“id”].””;
     echo “
 <tr>     
    <td id=‘leads_country’><i class=‘flag-icon flag-icon-$countrycode’></i>&nbsp;”.htmlspecialchars($row[‘country’]).” </td>
    <td id=‘leads_about’> “.htmlspecialchars($row[‘infos’]).” </td> 
	<td> “.htmlspecialchars($row[‘number’]).” </td>
    <td id=‘leads_seller’> “.htmlspecialchars($SellerNick).”</td>
    <td> “.htmlspecialchars($row[‘price’]).”</td>
	    <td> “.$row[‘date’].”</td>”;
    echo ‘
    <td>
	<span id=“leads’.$row[‘id’].’” title=“buy” type=“leads”><a onclick=“javascript:buythistool(‘.$row[‘id’].’)” class=“btn btn-primary btn-xs”><font color=white>Buy</font></a></span><center>
    </td>
         
 



                                  </tr>
                                  <?php

                                  }
                                }
                                else{
                                  echo "NO RECORD FOUND";
                                }
                              ?>
                            </tbody>
                          </table>
<div class=“modal fade” id=“myModal” tabindex=“-1” role=“dialog” aria-labelledby=“myModalLabel”>
  <div class=“modal-dialog” role=“document”>
    <div class=“modal-content”>
      <div class=“modal-header”>
        <button type=“button” class=“close” data-dismiss=“modal” aria-label=“Close”><span aria-hidden=“true”>&times;</span></button>
        <h4 class=“modal-title” id=“myModalLabel”></h4>
      </div>
      <div class=“modal-body” id=“modelbody”>


      </div>
      <div class=“modal-footer”>
        <button type=“button” class=“btn btn-primary” data-dismiss=“modal”>Close</button>
      </div>
    </div>
  </div>
</div>


=
function openitem(order){
  $(“#myModalLabel”).text(‘Order #’+order);
  $(‘#myModal’).modal(‘show’);
  $.ajax({
    type:       ‘GET’,
    url:        ‘showOrder’+order+’.html’,
    success:    function(data)
    {
        $(“#modelbody”).html(data).show();
    }});

}

</body>
</html>
