<?php
ob_start();
session_start();
date_default_timezone_set('UTC');

include "includes/config.php";

if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
    header("location: ../");
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
    <link rel="stylesheet" href="layout/css/bootstrap.min.css">
    <script src="layout/js/jquery-3.4.1.min.js"></script>
    <script src="layout/js/clipboard.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="layout/js/bootstrap.min.js"></script>
    <script src="layout/js/bootbox.min.js"></script>
    <link rel="stylesheet" type="text/css" href="layout/css/flags.css"  

    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.colVis.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>

    <link rel="stylesheet" href="layout/css/all.min.css" />
    <link rel="stylesheet" href="layout/css/main.css?v=12.9" />
    <link rel="stylesheet" href="layout/css/util.css" /> 
    <!-- Theme style -->
    <link rel="stylesheet" href="https://vulnx.biz/css/adminlte.min.css">
    <link rel="stylesheet" href="https://vulnx.biz/js/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <style>
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
</head>


<ul class="navbar-nav">
    <li class="nav-item">

    </li>
    <li class="nav-item d-none d-sm-inline-block">

    </li>



    <body class="hold-transition navbar-mini layout-boxed dark-mode">


        <!-- Left navbar links -->

        <nav id="navbar_id" class="navbar navbar-expand-lg navbar-dark bg-dark-mode fixed-top">
            <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2 home_nav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="main_site_name nav-item nav-link active" href="https://vulnxtools.xyz/homepage">
                            <i class="middle fab fa-2x fa-redhat pink-color"></i>
                            <span class="middle site_name_span">VulNxTools</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownHosts" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-server orangeu-color"></i> USA BANK (full info)
                        </a>
                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="
                            <a class="dropdown-item" data-title=" Principal - Banks " href="https://vulnxtools.xyz/1">
                       Principal Bank
                            <span class="badge badge-info d-blue-background">
                                12
                            </span>
                        </a>

                            <a class="dropdown-item" data-title=" Huntington - Banks " href="https://vulnxtools.xyz/2">
                       Huntington Bank
                            <span class="badge badge-info d-blue-background">
                                12
                            </span>
                        </a>
         

                            <a class="dropdown-item" data-title=" Woodforest - Banks" href="https://vulnxtools.xyz/3">
                      Woodforest Bank
                            <span class="badge badge-info d-blue-background">
                                675
                            </span>
                        </a>
                            <a class="dropdown-item" data-title=" citi - Bank" href="https://vulnxtools.xyz/4">
                            Citi Bank
                            <span class="badge badge-info d-blue-background">
                                112
                            </span>
                        </a>
                            <a class="dropdown-item" data-title=" Suntrust - Bank" href="https://vulnxtools.xyz/5">
                      Suntrust Bank
                            <span class="badge badge-info d-blue-background">
                                129
                            </span>
                        </a>
                            <a class="dropdown-item" data-title=" Hills -Bank" href="https://vulnxtools.xyz/6">
                            Hills Bank
                            <span class="badge badge-info d-blue-background">
                                159
                            </span>
                        </a>
                            <a class="dropdown-item" data-title=" Mtt Bank" href="https://vulnxtools.xyz/7">
                        WellsFargo Bank
                            <span class="badge badge-info d-blue-background">
                                2255
                            </span>
                        </a>
                            <a class="dropdown-item" data-title=" WellsFargo - Bank" href="https://vulnxtools.xyz/8">
                            WellsFargo Bank
                            <span class="badge badge-info d-blue-background">
                                1141
                            </span>
                        </a>
                            <a class="dropdown-item" data-title=" Accounts - Learning { udemy, lynda, .... etc. }" href="https://vulnxtools.xyz//10">
                            Learning { udemy, lynda, .... etc. }
                            <span class="badge badge-info d-blue-background">
                                855
                            </span>
                        </a>
                            <a class="dropdown-item" data-title=" Accounts - Torrent / File Host" href="https://vulnxtools.xyz//11">
                            Torrent / File Host
                            <span class="badge badge-info d-blue-background">
                                1
                            </span>
                        </a>
                            <a class="dropdown-item" data-title=" Accounts - Voip / Sip" href="https://vulnxtools.xyz/#">
                            Voip / Sip
                            <span class="badge badge-info d-blue-background">
                                10
                            </span>
                        </a>
                            <a class="dropdown-item" data-title=" Accounts - Social Media" href="https://vulnxtools.xyz//">
                            Social Media
                            <span class="badge badge-info d-blue-background">
                                105
                            </span>
                        </a>
                            <a class="dropdown-item" data-title=" Accounts - Other" href="https://vulnxtools.xyz/">
                            Other
                            <span class="badge badge-info d-blue-background">
                                129
                            </span>
                        </a>


                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownSend" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-paper-plane text-primary"></i> UK BANK (full info)
                        </a>
                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownSend">
                            <a class="dropdown-item " data-title="SMTP" href="https://vulnxtools.xyz/smtp">
                            SMTP <span class="badge badge-info d-blue-background">6068</span>
                        </a>
                            <a class="dropdown-item" data-title="Mailers" href="https://vulnxtools.xyz/mailers">
                            Mailers <span class="badge badge-info d-blue-background">70</span>
                        </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownLeads" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-address-book pink-color"></i> CANADA BANK  (full info)
                        </a>
                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownLeads">
                            <a class="dropdown-item" data-title="Leads 100% Checked Email list" href="https://vulnxtools.xyz/leads?type=100%25%20Checked%20Email%20list">
                                <span class="fa fa-fire orange-color"></span> 100% Checked Email list <span class="badge badge-info d-blue-background">51</span>
                            </a>
                            <a class="dropdown-item" data-title="Leads Email Only" href="https://vulnxtools.xyz/leads?type=Email%20Only">
                            Email Only <span class="badge badge-info d-blue-background">3361</span>
                        </a>
                            <a class="dropdown-item" data-title="Leads Combo Email:Password" href="https://vulnxtools.xyz/leads?type=Combo%20Email%3APassword">
                            Combo Email:Password <span class="badge badge-info d-blue-background">327</span>
                        </a>
                            <a class="dropdown-item" data-title="Leads Combo Username:Password" href="https://vulnxtools.xyz/leads?type=Combo%20Username%3APassword">
                            Combo Username:Password <span class="badge badge-info d-blue-background">25</span>
                        </a>
                            <a class="dropdown-item" data-title="Leads Email Access" href="https://vulnxtools.xyz/leads?type=Email%20Access">
                            Email Access <span class="badge badge-info d-blue-background">126</span>
                        </a>
                            <a class="dropdown-item" data-title="Leads Combo Email:Hash" href="https://vulnxtools.xyz/leads?type=Combo%20Email%3AHash">
                            Combo Email:Hash <span class="badge badge-info d-blue-background">80</span>
                        </a>
                            <a class="dropdown-item" data-title="Leads Phone Number Only" href="https://vulnxtools.xyz/leads?type=Phone%20Number%20Only">
                            Phone Number Only <span class="badge badge-info d-blue-background">387</span>
                        </a>
                            <a class="dropdown-item" data-title="Leads Combo Phone:Password" href="https://vulnxtools.xyz/leads?type=Combo%20Phone%3APassword">
                            Combo Phone:Password <span class="badge badge-info d-blue-background">28</span>
                        </a>
                            <a class="dropdown-item" data-title="Leads Full Data" href="https://vulnxtools.xyz/leads?type=Full%20Data">
                            Full Data <span class="badge badge-info d-blue-background">45</span>
                        </a>
                            <a class="dropdown-item" data-title="Leads Social Media Data" href="https://vulnxtools.xyz/leads?type=Social%20Media%20Data">
                            Social Media Data <span class="badge badge-info d-blue-background">1</span>
                        </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBusiness" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-briefcase green-color"></i> OTHER ACCOUNTS
                        </a>
                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownBusiness">
                            <a class="dropdown-item" data-title="Cpanel Webmail " href="https://vulnxtools.xyz/webmail?type=Cpanel%20Webmail">
                            Cpanel Webmail <span class="badge badge-info d-blue-background">29439</span>
                        </a>
                            <a class="dropdown-item" data-title="Godaddy Webmail " href="https://vulnxtools.xyz/webmail?type=Godaddy%20Webmail">
                            Godaddy Webmail <span class="badge badge-info d-blue-background">3669</span>
                        </a>
                            <a class="dropdown-item" data-title="Office Godaddy Webmail " href="https://vulnxtools.xyz/webmail?type=Office%20Godaddy%20Webmail">
                            Office Godaddy Webmail <span class="badge badge-info d-blue-background">3108</span>
                        </a>
                            <a class="dropdown-item" data-title="Office365 Webmail " href="https://vulnxtools.xyz/webmail?type=Office365%20Webmail">
                            Office365 Webmail <span class="badge badge-info d-blue-background">29751</span>
                        </a>
                            <a class="dropdown-item" data-title="Ionos Webmail " href="https://vulnxtools.xyz/webmail?type=Ionos%20Webmail">
                            Ionos Webmail <span class="badge badge-info d-blue-background">1080</span>
                        </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAccounts" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-users salmon-color"></i>SHOPWITHSCRIP
                        </a>
                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownAccounts">
                          <a class="dropdown-item " data-title="Cpanels" href="https://vulnxtools.xyz/cpanels">
                            Cpanels <span class="badge badge-info d-blue-background">28038</span>
                        </a>
                            <a class="dropdown-item " data-title="Shells" href="https://vulnxtools.xyz/shells">
                            Shells <span class="badge badge-info d-blue-background">4991</span>
                        </a>
                            <a class="dropdown-item " data-title="SSH\WHM" href="https://vulnxtools.xyz/ssh">
                            SSH\WHM <span class="badge badge-info d-blue-background">1635</span>
                        </a>
                            <a class="dropdown-item " data-title="RDP" href="https://vulnxtools.xyz/rdp">
                            RDP <span class="badge badge-info d-blue-background">2135</span>
                        </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="mx-auto order-0">
                <a class="navbar-brand mx-auto" href="#"> </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                    <span class="fa fa-bars"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse w-100 order-3 dual-collapse2 user_nav">
                <ul class="navbar-nav ml-auto">
                    <div id="notifications_container" data-href="https://vulnxtools.xyz/#notifications/get">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownNotifications" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell red-color"></i>
                                <div class="badge badge-danger notification_count">
                                    1
                                </div>
                            </a>
                            <div class="dropdown-menu dropdownt-menu-right" aria-labelledby="navbarDropdownNotifications">
                                <a class="dropdown-item text-center noAjax" id="notifications_mark_read" href="https://vulnxtools.xyz/#notifications/markread">
                                Mark All Read
                            </a>
                                <div class="notification_parent" data-id="005a9103-8d81-44ab-984d-52dc2f48f7c5">
                                    <a class="dropdown-item noAjax" href="https://vulnxtools.xyz/reports/">
                                    You've New reply on Report #479892
                                </a>
                                    <span class="notification_close" data-id="005a9103-8d81-44ab-984d-52dc2f48f7c5">
                                    x
                                </span>
                                </div>
                            </div>
                        </li>
                    </div>
                    <li class="nav-item">
                        <a class="nav-item nav-link " data-title="Add Balance" href="https://vulnxtools.xyz/balance">
                            <div class="badge badge-danger"><span id="buyer_balance">0.07</span> <i class="fa fa-plus"></i> </div>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tickets
                        <span class="badge badge-success">0</span>
                    </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                            <a class="dropdown-item" data-title="My Tickets " href="https://vulnxtools.xyz/tickets">My Tickets
                            <a class="dropdown-item" data-title="My Reports" href="https://vulnxtools.xyz/reports">My Reports
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio
" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Account <i class="fa fa-user-secret"></i>
                    </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                            <a class="dropdown-item" data-title="Settings" href="https://vulnxtools.xyz/settings">Settings <i class="fa fa-cog"></i></a>
                            <a class="dropdown-item" data-title="Orders" href="https://vulnxtools.xyz/purchased">Orders
                            <span class="badge badge-success">
                                27
                            </span>
                            <i class="fa fa-shopping-cart"></i></a>
                            <a class="dropdown-item" data-title="Add Balance" href="https://vulnxtools.xyz/addBalance">Add Balance
                            <i class="fa fa-money-bill-alt"></i></a>
                            <a class="dropdown-item noAjax" href="https://vulnxtools.xyz/logout">Logout <i class="fa fa-door-open"></i></a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
           <!-- /.sidebar-menu -->

            < class="content">
            </div>
            <!-- /.sidebar -->
        </br>
 

                 <div class="container-fluid">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="#" class="btn btn-danger btn-lg"><strong><i class="fa fa-wallet"> </i> My Balance: </strong> $0.00</a>
                            <a href="#" data-target="#TopUpModal" data-toggle="modal" class="btn btn-danger btn-lg float-right"><strong><i class="fa fa-upload"> </i> Top Up</strong></a>
                        </div>
                    </div>

        </br>

                <div class="container-fluid">