<?php
	ob_start();
	session_start();
	date_default_timezone_set('UTC');
	include "includes/config.php";
	
	if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
	    header("location: /login.php");
	    exit();
	}
	$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
	?>
<!DOCTYPE html>
<html lang="ru-ru">

<head>
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
        <script src="//code.tidio.co/ymh99ispooeubsiz9akeioosa4vlpg4b.js" async></script>
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
        <style>
                body{padding-top:80px}
        </style>
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
        <link rel="shortcut icon" href="files/img/favicon.ico" />
        <meta http-equiv="X-UA-Compatible" content="IE=10; IE=9; IE=8; IE=7; IE=EDGE" />
        <meta name="referrer" content="no-referrer" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>xBaseTools</title>
        <!-- jQuery -->
        <script src="https://vulnx.biz/js/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="https://vulnx.biz/js/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="https://vulnx.biz/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="https://vulnx.biz/js/demo.js"></script>
        <script src="https://vulnx.biz/js/plugins/sweetalert2/sweetalert2.all.min.js"></script>
        <script src="https://vulnx.biz/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="https://vulnx.biz/js/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://vulnx.biz/js/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="https://vulnx.biz/js/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script>
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    customClass: {
                        popup: 'colored-toast'
                    },
                    showConfirmButton: true,
                    timer: 5000,
                    timerProgressBar: true
                })
        </script>
        <script>
                Toast.fire({
                    icon: 'error',
                    title: "Your account is Not active. Please make a deposit of at least $100 to activate your account!"
                })
        </script>
        <div style="display:none !important"></div>
        <script>
                $('table').dataTable();
                var url = "https://vulnx.biz/change-language";
                
                $(".changeLang").change(function() {
                    window.location.href = url + "?lang=" + $(this).val();
                });
        </script>
        <script src="https://vulnx.biz/js/plugins/sweetalert2/sweetalert2.all.min.js"></script>
        <script src="https://vulnx.biz/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script>
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    customClass: {
                        popup: 'colored-toast'
                    },
                    showConfirmButton: true,
                    timer: 5000,
                    timerProgressBar: true
                })
        </script>
        <script>
                $('table').dataTable();
                var url = "https://vulnxtools.xyz/change-language";
                
                $(".changeLang").change(function() {
                    window.location.href = url + "?lang=" + $(this).val();
                });
        </script>
</head>
<style>
        #table {
        .sortable
        }
        table th:not(.sorttable_sorted):not(.sorttable_sorted_reverse):not(.sorttable_nosort):after {
        content: " \25BE"
        }
        .label-as-badge {
        border-radius: 0.5em;
        }
        body {
        padding-top: 50px;
        }
        table.floatThead-table {
        border-top: none;
        border-bottom: none;
        background-color: #fff;
        }
        @media (min-width: 768px) {
        .dropdown:hover .dropdown-menu {
        display: block;
        }
        }
        #mydiv {
        height: 400px;
        position: relative;
        }
        .ajax-loader {
        position: absolute;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        /* presto! */
        }
</style>
<style>
        .panel-default {
        border-color: #ecf0f1;
        }
        .panel {
        background-color: var(--color-card);
        border: 1px solid transparent;
        border-radius: 4px;
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
        }
        .card {
        background-color: var(--color-card);
        border: 1px solid transparent;
        border-radius: 4px;
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
        border-color: var(--color-card);
        }
        .panel-body {
        padding: 15px;
        }
        .panel-footer {
        padding: 10px 15px;
        background-color: var(--color-secondary2);
        border-top: 1px solid var(--color-secondary2);
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px;
        }
        .panel-footer .label-info {
        background-color: #3498db;
        }
        .panel-footer .label-warning {
        background-color: #e74c3c;
        }
        .panel-footer .label-warning {
        background-color: #FFA726;
        }
        .panel-footer .label {
        display: inline;
        padding: .2em .6em .3em;
        font-size: 100%;
        font-weight: bold;
        line-height: 1;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: .25em;
        }
        .display td {
        background: var(--color-card);
        color: var(--font-color);
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button {
        color: var(--font-color);
        }
        #table_paginate .paginate_button {
        color: var(--font-color);
        }
        .alert-info {
        color: var(--color-info);
        background-color: var(--color-backinfo);
        border-color: var(--color-borderinfo);
        }
        #table_filter {
        color: var(--font-color);
        }
        #table_length {
        color: var(--font-color);
        }
        #table_paginate {
        color: var(--font-color);
        }
        #table_info {
        color: var(--font-color);
        }
</style>

<body class="them">
        <style>
                .navbar-nav .dropdown-menu {
                margin: 0 !important
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
                input:checked+.slider {
                background-color: #2196f3;
                }
                input:focus+.slider {
                box-shadow: 0 0 1px #2196f3;
                }
                input:checked+.slider:before {
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
                (function() {
                    if (localStorage.getItem('theme') === 'theme-dark') {
                        setTheme('theme-dark');
                        document.getElementById('slider').checked = false;
                    } else {
                        setTheme('theme-light');
                        document.getElementById('slider').checked = true;
                    }
                })();
        </script>
        <script>
                $(document).ready(function() {
                  $('#table').DataTable({
                    "aaSorting": [
                      [0, "asc"]
                    ],
                
                    "pageLength": 1222250,
                    "bLengthChange": false,
                
                    "language": {
                      "search": "GLOBAL FILTER: ",
                      "searchPlaceholder": "Bin,balace,bank ETC"
                
                    }
                
                
                
                  });
                
                  $('#table').removeClass('no e').addClass('table table-responsive table-hover');
                
                });
        </script>
        <script type="text/javascript">
                function ajaxinfo() {
                   $.ajax({
                       type: 'GET',
                       url: 'ajaxinfo.html',
                       timeout: 10000,
                
                       success: function(data) {
                           if (data != '01') {
                               var data = JSON.parse(data);
                               for (var prop in data) {
                                   $("#" + prop).html(data[prop]).show();
                               }
                           } else {
                               window.location = "logout.html";
                           }
                       }
                   });
                
                }
                setInterval(function() {
                   ajaxinfo()
                }, 3000);
                
                ajaxinfo();
                
                $(document).keydown(function(event){
                if(event.which=="17")
                cntrlIsPressed = true;
                });
                
                $(document).keyup(function(){
                cntrlIsPressed = false;
                });
                
                var cntrlIsPressed = false;
                
                
                function pageDiv(n,t,u,x){
                if(cntrlIsPressed){
                window.open(u, '_blank');
                return false;
                }
                var obj = { Title: t, Url: u };
                if ( ("/"+obj.Url) != location.pathname) {
                if (x != 1) {history.pushState(obj, obj.Title, obj.Url);}
                else{history.replaceState(obj, obj.Title, obj.Url);}
                
                }
                document.title = obj.Title;
                $("#mainDiv").html('<div id="mydiv"><img src="files/img/load2.gif" class="ajax-loader"></div>').show();
                $.ajax({
                type:       'GET',
                url:        'divPage'+n+'.html',
                success:    function(data)
                {
                $("#mainDiv").html(data).show();
                newTableObject = document.getElementById('table');
                sorttable.makeSortable(newTableObject);
                $(".sticky-header").floatThead({top:60});
                if(x==0){ajaxinfo();}
                }});
                if (typeof stopCheckBTC === 'function') { 
                var a = stopCheckBTC();
                }
                
                }
                
                $(window).on("popstate", function(e) {
                location.replace(document.location);
                
                });
                
                
                $(window).on('load', function() {
                $('.dropdown').hover(function(){ $('.dropdown-toggle', this).trigger('click'); });
                
                var clipboard = new Clipboard('.copyit');
                clipboard.on('success', function(e) {
                setTooltip(e.trigger, 'Copied!');
                hideTooltip(e.trigger);
                e.clearSelection();
                });
                
                });
                
                
                function setTooltip(btn, message) {
                console.log("hide-1");
                $(btn).tooltip('hide')
                .attr('data-original-title', message)
                .tooltip('show');
                console.log("show");
                }
                
                function hideTooltip(btn) {
                setTimeout(function() {$(btn).tooltip('hide'); console.log("hide-2");}, 1000);
                }
        </script>
        <style>
                .dropdown-menu {
                margin: 5px, 5px;
                padding: 5px;
                background-color: ;
                width: 500px;
                height: 1500px;
                overflow-x: hidden;
                overflow-y: auto;
                text-align: justify;
                }
        </style>
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
			padding-left: 1rem;">
                <a class="navbar-brand" href="index.php" style="color: var(--font-color);"><img width="40px" src="layout/images/logo.png"> XbaseTools </a><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="navbar-toggler-icon"></i></button>
                <div class="collapse navbar-collapse order-1" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                                <!-- /.navbar-collapse -->
                                <!--li class="nav-item dropdown mr-auto">
						<!-- /.navbar-collapse -->
                                <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-warehouse fa-sm orange-text"></i>
                                        USA BANK+INFOS
                                </a>
                                <div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
                                        <a class=“link_menu” href="53bank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-desktop fa-fw"></i> 53 Bank(Full+infos)<span class="badge badge-warning">+<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM 53bank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                        </a>
                                        <a class=“link_menu” href="huntingtonbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-desktop fa-fw"></i> Huntington bank(Fullz+infos)<span class="badge badge-warning">+<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM huntingtonbanks WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                        </a>
                                        <a class="link__menu" href="aacreditunionbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-tools fa-fw"></i> aacreditunion bank(Fullz+infos)<span class="badge badge-warning">+<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM aacreditunionbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                        </a>
                                        <a class=“link_menu” href="sofibank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-desktop fa-fw"></i> Sofi bank(Fullz+infos)<span class="badge badge-warning">+<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM sofibank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                        </a>
                                        <a class="link__menu" href="advantiscubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-file-code fa-fw"></i> advantiscu bank(fullz+Infos)<span class="badge badge-warning">
                                                                +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM advantiscubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                        </a>
                                        <a class=“link_menu” href="afcubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> afcu bank(Full+infos)<span class="badge badge-warning">
                                                                +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM afcubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                        </a>
                                        <a class=“link_menu” href="alaskausabank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-envelope fa-fw"></i>alaskausa bank(Full+infos)<span class="badge badge-warning">
                                                                +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM alaskausabank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                        </a>
                                        <a class=“link_menu” href="alliantbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-award"></i> alliant bank(Full+infos)<span class="badge badge-warning">
                                                                +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM alliantbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                        </a>
                                        <a class=“link_menu” href="allybank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i>ally bank(Full+infos)<span class="badge badge-warning">
                                                                +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM allybank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                        </a>
                                        <a class=“link_menu” href="americanheritagecubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i>americanheritagecu bank(Full+infos)<span class="badge badge-warning">
                                                                +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM americanheritagecubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                        </a>
                                        <a class=“link_menu” href="amexbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fab fa-linux"></i> amex bank(Full+infos)<span class="badge badge-warning">
                                                                +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM amexbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                        </a>
                                        <!----------New Page Tab Section------------->
                                        <a class=“link_menu” href="andigobank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-desktop fa-fw"></i> andigo bank(fullz+Infos)<span class="badge badge-warning">
                                                                +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM andigobank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                        </a>
                                        <a class=“link_menu” href="andrewsfcubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-tools fa-fw"></i> andrewsfcu bank(fullz+Infos)<span class="badge badge-warning">
                                                                +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM andrewsfcubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                        </a>
                                        <a class=“link_menu” href="aplusfcubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-file-code fa-fw"></i>aplusfcu bank(fullz+Infos)<span class="badge badge-warning">
                                                                +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM aplusfcubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                        </a>
                                        <a class=“link_menu” href="applebank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> apple bank(Full+infos)<span class="badge badge-warning">
                                                                +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM applebank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                        </a>
                                        <a class=“link_menu” href="applefcubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-envelope fa-fw"></i>applefcu bank(Full+infos)<span class="badge badge-warning">
                                                                +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM applefcubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                        </a>
                                        <a class=“link_menu” href="bankatfirst.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-award"></i> bankatfirst <span class="badge badge-warning">
                                                                +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM bankatfirst WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                        </a>
                                        <a class=“link_menu” href="bankMobile.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i>bankMobile<span class="badge badge-warning">
                                                                +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM bankMobile WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                        </a>
                                        <a class=“link_menu” href="bankofhope.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i>bankofhope <span class="badge badge-warning">
                                                                +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM bankofhope WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                        </a>
                                        <a class=“link_menu” href="barclaysusbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fab fa-linux"></i> barclaysus bank(Full+infos)<span class="badge badge-warning">
                                                                +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM barclaysusbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                        </a>
                                        <a class=“link_menu” href="baxterbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-desktop fa-fw"></i> baxter bank(fullz+Infos)<span class="badge badge-warning">
                                                                +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM baxterbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                        </a>
                                        <a class=“link_menu” href="bbt&tbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-tools fa-fw"></i>bbt&t bank(fullz+Infos)<span class="badge badge-warning">
                                                                +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM bbttbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                        </a>
                                        <a class=“link_menu” href="bbvabanks.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-file-code fa-fw"></i> bbvabanks<span class="badge badge-warning">
                                                                +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM bbvabanks WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                        </a>
                                        <a class=“link_menu” href="bell.bankbethpagefcu.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> bell.bankbethpagefcu <span class="badge badge-warning">
                                                                +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM bellbankbethpagefcu WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </la>
                                                <a class=“link_menu” href="bmobank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-envelope fa-fw"></i>bmo bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM bmobank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="boabanks.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-award"></i> boa bank(Fullz+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM boabanks WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="caltechefcubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i>caltechefcu bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM caltechefcubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="campuscubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i>campuscu bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM campuscubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="campusfederalbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fab fa-linux"></i> campusfederal bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM campusfederalbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="cbnabank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-desktop fa-fw"></i> cbna bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM cbnabank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="centrisfcubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-tools fa-fw"></i> centrisfcu bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM centrisfcubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="cfcubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-file-code fa-fw"></i> cfcu bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM cfcubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="chartwaybank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> chartway bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM chartwaybank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="chasebanks.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-envelope fa-fw"></i>chase bank(Fullz+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM chasebanks WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="chimebank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-award"></i> chime bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM chimebank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="citadelbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i>citadel bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM citadelbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="citibanks.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i>citi bank(Fullz+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM citibanks WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="citizensbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fab fa-linux"></i> citizens bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM citizensbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="coastal24bank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-desktop fa-fw"></i> coastal24 bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM coastal24bank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="columbiabank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-tools fa-fw"></i> columbia bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM columbiabank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="comericabank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-file-code fa-fw"></i> comerica bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM comericabank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="corningcubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> corningcu bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM corningcubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="credithumanbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-envelope fa-fw"></i>credithuman bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM credithumanbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="cutxbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-award"></i> cutx bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM cutxbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="discoverbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i>discover bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM discoverbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="edwardjonesbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i>edwardjones bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM edwardjonesbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="efirstbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fab fa-linux"></i> efirst bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM efirstbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="etradebank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-desktop fa-fw"></i> etrade bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM etradebank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="fargobank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-tools fa-fw"></i> fargo bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM fargobank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="fcbankingbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-file-code fa-fw"></i> fcbanking bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM fcbankingbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="ffcubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> ffcu bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM ffcubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="firstcitizensbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-envelope fa-fw"></i>firstcitizens bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM firstcitizensbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="firstcommercecubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-award"></i> firstcommercecu bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM firstcommercecubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="firsthorizonbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i>firsthorizon bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM firsthorizonbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="firstmarkcubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i>firstmarkcu bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM firstmarkcubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="firstrepublicbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fab fa-linux"></i> firstrepublic bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM firstrepublicbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="floridacentralcubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-desktop fa-fw"></i> floridacentralcu bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM floridacentralcubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="fnbbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-tools fa-fw"></i> fnb bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM fnbbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="fnbobank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-file-code fa-fw"></i> fnbo bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM fnbobank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="gatecitybank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> gatecity bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM gatecitybank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="gcefcubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-envelope fa-fw"></i>gcefcu bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM gcefcubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="gesabank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-award"></i> gesa bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM gesabank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="glcubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i>glcu bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM glcubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="golden1bank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i>golden1 bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM golden1bank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="greatwesternbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fab fa-linux"></i> greatwestern bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM greatwesternbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="greenstatebank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-desktop fa-fw"></i> greenstate bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM greenstatebank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="gtefinancialbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-tools fa-fw"></i> gtefinancial bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM gtefinancialbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="gulfbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-file-code fa-fw"></i> gulf bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM gulfbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="hpcubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> hpcu bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM hpcubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="huntingtonbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-envelope fa-fw"></i>huntington bank(Fullz+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM huntingtonbanks WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="iafinancialbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-award"></i> iafinancial bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM iafinancialbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="iangleyfcubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i>iangleyfcu bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM iangleyfcubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="ibcbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i>ibc bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM ibcbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="iberiabank.php" style="color: var(--font-color);"><span class="px-2"><i class="fab fa-linux"></i> iberiabank <span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM iberiabank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="iccubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-desktop fa-fw"></i> iccu bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM iccubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="imcubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-tools fa-fw"></i> imcu bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM imcubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="ithinkfibank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-file-code fa-fw"></i> ithinkfi bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM ithinkfibank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="jhfcubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> jhfcu bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM jhfcubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="key(bussines)bank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-envelope fa-fw"></i>key(bussines) bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM keybussinesbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="kpcubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-award"></i> kpcu bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM kpcubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="macubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i>macu bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM macubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="mapscubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i>mapscu bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM mapscubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="members1stbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fab fa-linux"></i> members1st bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM members1stbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="merrickbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-desktop fa-fw"></i> merrick bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM merrickbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="missionfedbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-tools fa-fw"></i> missionfed bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM missionfedbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="msufcubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-file-code fa-fw"></i> msufcu bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM msufcubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="mygenfcubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> mygenfcu bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM mygenfcubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="mynycbbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-envelope fa-fw"></i>mynycb bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM mynycbbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="myoccubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-award"></i> myoccu bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM myoccubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="mysummitbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i>mysummit bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM mysummitbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="ncsecubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i>ncsecu bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM ncsecubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="nfcubanks.php" style="color: var(--font-color);"><span class="px-2"><i class="fab fa-linux"></i> nfcu bank(Fullz+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM nfcubanks WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="northropfcubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-desktop fa-fw"></i> northropfcu bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM northropfcubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="nymcubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-tools fa-fw"></i> nymcu bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM nymcubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="onenevadabank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-file-code fa-fw"></i> onenevada bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM onenevadabank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="onpointbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> onpoint bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM onpointbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="optumbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-envelope fa-fw"></i>optum bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM optumbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="ozkbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-award"></i> ozk bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM ozkbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="penfedbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i>penfed bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM penfedbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="peoplesbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i>peoples bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM peoplesbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="pncbanks.php" style="color: var(--font-color);"><span class="px-2"><i class="fab fa-linux"></i> pnc bank(Fullz+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM pncbanks WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="progressivebank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-desktop fa-fw"></i> progressive bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM progressivebank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="prosperitybankusa.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-tools fa-fw"></i> prosperitybankusa<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM prosperitybankusa WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="raymondjamesbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-file-code fa-fw"></i> raymondjames bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM raymondjamesbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="regionbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> region bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM regionbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="riverbankandtrust.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-envelope fa-fw"></i>riverbankandtrust <span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM riverbankandtrust WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="riverviewbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-award"></i> riverview bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM riverviewbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="robinsfcubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i>robinsfcu bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM robinsfcubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="rocklandtrustbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i>rocklandtrust bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM rocklandtrustbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="salliemaebank.php" style="color: var(--font-color);"><span class="px-2"><i class="fab fa-linux"></i> salliemae bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM salliemaebank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="santaderbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-desktop fa-fw"></i> santader bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM santaderbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="sccubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-tools fa-fw"></i> sccu bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM sccubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="schoolsfirstfcubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-file-code fa-fw"></i> schoolsfirstfcu bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM schoolsfirstfcubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="sdccubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> sdccu bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM sdccubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="selliemaebank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-envelope fa-fw"></i>selliemae bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM selliemaebank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="simplebank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-award"></i> simple bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM simplebank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="snbbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i>snb bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM snbbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="southsidebank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i>southside bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM southsidebank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="ssfcubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fab fa-linux"></i> ssfcu bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM ssfcubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="statefarmbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-desktop fa-fw"></i> statefarm bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM statefarmbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="suffolkfcubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-tools fa-fw"></i> suffolkfcu bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM suffolkfcubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="suncoastcubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-file-code fa-fw"></i> suncoastcu bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM suncoastcubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="suntrustbanks.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> SunTrust <span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM suntrustbanks WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="swacubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-envelope fa-fw"></i>swacu bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM swacubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="tcfbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-award"></i> tcf bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM tcfbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="tcunetbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i>tcunet bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM tcunetbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="teachersththirdfederalonlinebank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i>teachersththirdfederalonline bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM teachersththirdfederalonlinebank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="truistbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fab fa-linux"></i> truist bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM truistbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="trustmarkbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-desktop fa-fw"></i> trustmark bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM trustmarkbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="tvacubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-tools fa-fw"></i> tvacu bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM tvacubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="tyndallbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-file-code fa-fw"></i> tyndall bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM tyndallbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="ucbibank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> ucbi bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM ucbibank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="uhcubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-envelope fa-fw"></i>uhcu bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM uhcubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="umbbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-award"></i> umb bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM umbbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="umpquabank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i>umpqua bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM umpquabank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="unifyfcubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i>unifyfcu bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM unifyfcubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="unionbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fab fa-linux"></i> union bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM unionbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="unitedfcubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-desktop fa-fw"></i> unitedfcu bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM unitedfcubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="usaabank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-tools fa-fw"></i> usaa bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM usaabank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="usbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-file-code fa-fw"></i> us bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM usbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="uvacbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> uvac bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM uvacbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="uwcubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-envelope fa-fw"></i>uwcu bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM uwcubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="valleybank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-award"></i> valley bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM valleybank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="vanguardbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i>vanguard bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM vanguardbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="veridiancubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i>veridiancu bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM veridiancubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="veritexbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fab fa-linux"></i> veritex bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM veritexbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="vibeaccountbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-desktop fa-fw"></i> vibeaccount bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM vibeaccountbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="vystarcubank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-tools fa-fw"></i> vystarcu bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM vystarcubank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="wellsfargobank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-file-code fa-fw"></i> wellsfargo bank(fullz+Infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM wellsfargobank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="westbank.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> west bank(Full+infos)<span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM amexbank WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                                <a class=“link_menu” href="woodforest.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-envelope fa-fw"></i>Woodforest <span class="badge badge-warning">
                                                                        +<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM woodforestbanks WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                                </a>
                                </div>
                                </li-->
                                <!--li class="nav-item dropdown mr-auto">
						<a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-leaf fa-fw fa-sm text-success" style="margin-right: 4px;"></i>
						Canada Bank+Infos
						</a>
						 <div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
						  <a class=“link_menu” href="rbc.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-award"></i> Rbc banks(fullz info)  <span class="badge badge-warning">+<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM rbcbanks WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
						   
						    </a>
						  <a class=“link_menu” href="td.php" style="color: var(--font-color);"><span class="px-2"><i class="fa fa-fire orange-color"></i> Td banks(fullz info) <span class="badge badge-warning">+<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM tdbanks WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
						   
						    </a>
						  <a class=“link_menu” href="scotia.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-passport"></i> Scotia banks(fullz info)<span class="badge badge-warning">+<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM scotiabanks   WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
						   
						    </a>
						     </div>
						 </li-->
                                <!--li class="nav-item dropdown mr-auto">
						<a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-mail-bulk fa-sm pink-color"></i> 
						Uk bank+infos
						</a>
						<div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
						<a class=“link_menu” href="barclay.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> Barclays banks(fullz info)<span class="badge badge-warning">+<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM barclaybanks WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
						
						 </a>
						 <a class=“link_menu” href="hsbc.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i>Hsbc banks(fullz info)<span class="badge badge-warning">+<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM hsbcbanks WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
						
						 </a>
						
						<a class=“link_menu” href="llyod.php" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> Llyod banks(fullz info)<span class="badge badge-warning">+<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM llyodbanks WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
						
						 </a>
						    </div>
						</li-->
                                <i class="fas fa-leaf fa-sm orange-text"></i>
                                <small>
                                        USA BANK+AN:RN+(Login:Pass)
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
                                                <!-- Banks A to Z -->
                                                <?php
								$banks = [ ];
								
								foreach ($banks as $bank) {
								    $bankCount = mysqli_query($dbcon, "SELECT * FROM {$bank} WHERE sold='0'");
								    $bankCount = mysqli_num_rows($bankCount);
								    $bankTitle = ucwords(str_replace(['.php', 'bank'], ['', ' bank'], $bank));
								    echo "
								   <a class='link_menu' href='{$bank}.php?=an&rn' style='color: var(--font-color);'>
								        <span class='px-2'><i class='fas fa-tools fa-fw'></i> {$bankTitle}+an:rn+(login:pass)
								            <span class='badge badge-warning'>{$bankCount}</span>
								        </span>
								    </a>";
								}
								
								?>
                                </small>
                </div>
                </li>
                <!-- ... CANADA  BANK+(Fullz Infos) ... -->
                <li class="nav-item dropdown mr-auto">
                        <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-leaf fa-fw fa-sm text-success" style="margin-right: 4px;"></i>
                                <small>
                                        CANADA BANK+(Fullz Infos)
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
                                <!-- Banks A to Z -->
                                <?php $banks = 
							[
							     "tdbanks", 
							     "scotiabanks",
							     "rbcbanks"
							
							 ];
							
							 foreach ($banks as $bank) {
							     $bankCount = mysqli_query($dbcon, "SELECT * FROM {$bank} WHERE sold='0'");
							     $bankCount = mysqli_num_rows($bankCount);
							     $bankTitle = ucwords(str_replace(['.php', 'bank'], ['', ' bank'], $bank));
							     echo "<a class='link_menu' href='{$bank}.php' style='color: var(--font-color);'>
							         <span class='px-2'><i class='fas fa-tools fa-fw'></i> {$bankTitle}+AN:RN+(fullz infos)
							             <span class='badge badge-warning'>{$bankCount}</span>
							         </span>
							     </a>";
							 }
							?>
                                </small>
                        </div>
                </li>
                <!-- ... USA BANK+(Fullz Infos) ... -->
                <li class="nav-item dropdown mr-auto">
                        <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-warehouse fa-sm orange-text"></i>
                                <small>
                                        USA BANK+(Fullz Infos)
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
                                <!-- Banks A to Z -->
                                <?php
							$banks = [  "53bank", "huntingtonbanks", "aacreditunionbank", "sofibank", "advantiscubank", "afcubank", "alaskausabank", "alliantbank", "allybank", "americanheritagecubank", "amexbank", 
							
							/* Add more banks in alphabetical order */
							"andigobank", "andrewsfcubank", "aplusfcubank", "applebank", "applefcubank", 
							"bankatfirst", "bankMobile", "bankofhope", "barclaysusbank", "baxterbank", "bbt&tbank", "bbvabanks", "bell.bankbethpagefcu", "bmobank", "boabanks", 
							"caltechefcubank", "campuscubank", "campusfederalbank", "cbnabank", "centrisfcubank", "cfcubank", "chartwaybank", "chasebanks", "chimebank", "citadelbank", "citibanks", "citizensbank", "coastal24bank", "columbiabank", "comericabank", "corningcubank", "credithumanbank", "cutxbank", 
							"discoverbank", 
							"edwardjonesbank", "efirstbank", "etradebank",
							"fargobank", "fcbankingbank", 
							"gatecitybank", "gcefcbank", "gesabank", "glcubank", "golden1bank", "greatwesternbank", "greenstatebank", "gtefinancialbank", "gulfbank",
							"hpcubank”, “huntingtonbank", 
							"iafinancialbank", "iangleyfcubank", "ibcbank", "iberiabankbank", "iccubank", "imcubank", "ithinkfibank",
							"jhfcubank",
							"key(bussines)bank", "kpcubank",
							"macubank", "mapscubank", "members1stbank", "merrickbank", "missionfedbank", "msufcubank", "mygenfcubank", "mynycbbank", "myoccubank", "mysummitbank",
							"ncsecubank", "nfcubank", "northropfcubank", "nymcubank",
							"onenevadabank", "onpointbank", "optumbank", "ozkbank",
							"penfedbank", "peoplesbank", "pncbank", "progressivebank", "prosperitybankusabank",
							"raymondjamesbank", "regionbank", "riverbankandtrustbank", "riverviewbank", "robinsfcubank", "rocklandtrustbank",
							"salliemaebank", "santaderbank", "sccubank", "schoolsfirstfcubank", "sdccubank", "selliemaebank", "simplebank", "snbbank", "Sofibank", "southsidebank", "ssfcubank", "statefarmbank", "suffolkfcubank", "suncoastcubank", "SunTrustbank", "swacubank",
							"tcfbank", "tcunetbank", "teachersththirdfederalonlinebank", "truistbank", "trustmarkbank", "tvacubank", "tyndallbank",
							"ucbibank", "uhcubank", "umbbank", "umpquabank", "unifyfcubank", "unionbank", "unitedfcubank", "usbank", "usaabank", "uvacubank", "uwcubank",
							"valleybank", "vanguardbank", "veridiancubank", "veritexbank", "vibeaccountbank", "vystarcubank",
							"wellsfargobank", "westbank", "woodforestbank"
							
							
							
							
							
							/* Add more banks in alphabetical order */
							];
							
							foreach ($banks as $bank) {
							    $bankCount = mysqli_query($dbcon, "SELECT * FROM {$bank} WHERE sold='0'");
							    $bankCount = mysqli_num_rows($bankCount);
							    $bankTitle = ucwords(str_replace(['.php', 'bank'], ['', ' bank'], $bank));
							    echo "<a class='link_menu' href='{$bank}.php' style='color: var(--font-color);'>
							        <span class='px-2'><i class='fas fa-tools fa-fw'></i> {$bankTitle}+AN:RN+(fullz infos)
							            <span class='badge badge-warning'>{$bankCount}</span>
							        </span>
							    </a>";
							}
							
							?>
                                </small>
                        </div>
                </li>
                <!-- ... UK BANK+(Fullz Infos) ... -->
                <li class="nav-item dropdown mr-auto">
                        <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-mail-bulk fa-sm pink-color"></i>
                                <small>
                                        UK BANK+(Fullz Infos)
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
                                <!-- Banks A to Z -->
                                <?php $banks = 
							[
							  "barclaybanks", 
							  "hsbcbanks",
							  "llyodbanks"
							
							 ];
							
							   foreach ($banks as $bank) {
							       $bankCount = mysqli_query($dbcon, "SELECT * FROM {$bank} WHERE sold='0'");
							       $bankCount = mysqli_num_rows($bankCount);
							       $bankTitle = ucwords(str_replace(['.php', 'bank'], ['', ' bank'], $bank));
							       echo "<a class='link_menu' href='{$bank}.php' style='color: var(--font-color);'>
							           <span class='px-2'><i class='fas fa-tools fa-fw'></i> {$bankTitle}+AN:RN+(fullz infos)
							               <span class='badge badge-warning'>{$bankCount}</span>
							           </span>
							       </a>";
							   }
							               ?>
                                </small>
                        </div>
                </li>
                <li class="nav-item dropdown mr-auto">
                        <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-at fa-sm text-success"></i>
                                <small>
                                        USA SELF REGISTERED (verified accounts)
                        </a>
                        <div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
                                <a class=“link_menu” href="cashapp" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-inbox"></i> Cashapp vrfd accs+(Infos)<span class="badge badge-warning">+<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM cashappbanks WHERE sold='0'");
							$bank1=mysqli_num_rows($banks1); 
							
							   echo $bank1;?></span></span>
                                </a>
                                </small>
                        </div>
                </li>
                <li class="nav-item dropdown mr-auto">
                        <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-at fa-sm text-success"></i>
                                <small>
                                        OTHER ACCOUNT+(logins:Pass)
                        </a>
                        <div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
                                <a class=“link_menu” href="chime" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-inbox"></i> Chime Logs(Full info)<span class="badge badge-warning">+<?php $banks1 = mysqli_query($dbcon, "SELECT * FROM hsbcbanks WHERE sold='0'"); $bank1=mysqli_num_rows($banks1);  echo $bank1;?></span></span> </a></small>
                                </small>
                        </div>
                </li>
                </ul>
                <ul class="navbar-nav profile">
                        <?php $uid = mysqli_real_escape_string($dbcon, $_SESSION['sname']); $q = mysqli_query($dbcon, "SELECT resseller FROM users WHERE username='$uid'") or die(mysqli_error()); $r         = mysqli_fetch_assoc($q); $reselerif = $r['resseller']; if ($reselerif == "1") {    $uid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);    $q = mysqli_query($dbcon, "SELECT soldb FROM resseller WHERE username='$uid'") or die(mysqli_error());    $r = mysqli_fetch_assoc($q);    echo '<li><a href="admin/deposit.php" style="color: var(--font-color); background-color: var(--color-nav);"><span class="badge" title="Seller Panel"><span class="fas fa-cloud" style="color: var(--font-color); background-color: var(--color-nav);"></span><span id="seller"></span></span></a></li>'; } else { } ?>
                        <li class="nav-item dropdown">
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: var(--font-color); background-color: var(--color-nav);">
                                </div>
                        </li>
                        <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tickets <span id="alltickets"><?php $sze112  = mysqli_query($dbcon, "SELECT * FROM ticket WHERE uid='$uid' and seen='1'"); $r844941 = mysqli_num_rows($sze112); if ($r844941 == "1") {    echo '<span class="label label-warning">1</span>'; } ?></span></a>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: var(--font-color); background-color: var(--color-nav);">
                                        <a class=“link_menu” href="tickets.php" style="color: var(--font-color);"><span class="px-2"> Tickets <span class="badge badge-success"><span id="tickets"></span></span> <?php $banks1 = mysqli_query($dbcon, "SELECT * FROM ticket WHERE uid='$uid' and seen='1'"); $r1 = mysqli_num_rows($banks1); if ($r1 == "1") {    echo '<span class="label label-success"> 1 New</span>';}?></span></a>
                                        <a class=“link_menu” href="reports.php" style="color: var(--font-color);"><span class="px-2">Reports <span class="badge badge-success"><span id="reports"></span></span> <?php $banks1 = mysqli_query($dbcon, "SELECT * FROM reports WHERE uid='$uid' and seen='1'"); $r1 = mysqli_num_rows($banks1); if ($r1 == "1") {     echo '<span class="label label-success"> 1 New</span>'; } ?></span> </a>
                                </div>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="addBalance.php" style="color: var(--font-color);" role="button" aria-haspopup="true" aria-expanded="false"><span class="badge badge-warning" id="balance"></span><span class="px-2"><i class="fa fa-plus"></i></span></span>
                                </a>
                        </li>
                        <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?php echo''.$usrid.''; ?> <i class="fa fa-user-secret" style="color: var(--font-color);"></i></a>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: var(--font-color); background-color: var(--color-nav);">
                                        <br> <a class=“nav-item” href="settings.php" style="color: var(--font-color);"><span class="px-2">Setting <i class="fa fa-cog"></i></span></a>
                                        <a class=“nav-item” href="orders.php" style="color: var(--font-color);"><span class="px-2">My Orders <i class="fa fa-shopping-cart"></i></span></a>
                                        <br> <a class=“nav-item” href="addBalance.php" style="color: var(--font-color);"><span class="px-2">Add Balance <i class="fa fa-money-bill-alt"></i></span></a>
                                        <a class=“nav-item” href="logout.php" style="color: var(--font-color);"><span class="px-2">Logout <i class="fa fa-door-open"></i></span></a>
                                </div>
                        </li>
                </ul>
                </div>
                <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
        </nav>
        <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains content of the page -->
        <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                        <div class="container-fluid">
                                <div class="row mb-2">
                                        <div class="col-sm-6">
                                                <h1></h1>
                                        </div>
                                </div>
                        </div>
                        <!-- /.container-fluid -->
                </section>
                <!-- Main content -->
                <section class="content">
                        <div class="container-fluid">
                                <!--div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h5><i class="icon fas fa-ban"></i> Error!</h5>
			Your account is Not active. Please make a deposit of at least $50 to activate your account!
			</div-->
                                <style>
                                        .modal-dialog.modal-frame.modal-top.modal-notify.modal-warning .modal-body,
                                        .modal-dialog.modal-frame.modal-top.modal-offernov.modal-warning .modal-body {
                                        padding-top: 35px;
                                        }
                                        .modal-dialog.modal-frame.modal-top.modal-notify.modal-warning,
                                        .modal-dialog.modal-frame.modal-top.modal-offernov.modal-warning {
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
                                        background-size: contain background-repeat: no-repeat;
                                        background-position: center center;
                                        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAAAAXNSR0IArs4c6QAAA3hJREFUaAXlm8+K00Acx7MiCIJH/yw+gA9g25O49SL4AO3Bp1jw5NvktC+wF88qevK4BU97EmzxUBCEolK/n5gp3W6TTJPfpNPNF37MNsl85/vN/DaTmU6PknC4K+pniqeKJ3k8UnkvDxXJzzy+q/yaxxeVHxW/FNHjgRSeKt4rFoplzaAuHHDBGR2eS9G54reirsmienDCTRt7xwsp+KAoEmt9nLaGitZxrBbPFNaGfPloGw2t4JVamSt8xYW6Dg1oCYo3Yv+rCGViV160oMkcd8SYKnYV1Nb1aEOjCe6L5ZOiLfF120EjWhuBu3YIZt1NQmujnk5F4MgOpURzLfAwOBSTmzp3fpDxuI/pabxpqOoz2r2HLAb0GMbZKlNV5/Hg9XJypguryA7lPF5KMdTZQzHjqxNPhWhzIuAruOl1eNqKEx1tSh5rfbxdw7mOxCq4qS68ZTjKbanks1YVvilu559vWvFHhh4rZrdyZ69Vmpgdj8fJbDZLJpNJ0uv1cnr/gjrUhQMuI+ANjyuwftQ0bbL6Erp0mM/ny8Fg4M3LtdRxgMtKl3jwmIHVxYXChFy94/Rmpa/pTbNUhstKV+4Rr8lLQ9KlUvJKLyG8yvQ2s9SBy1Jb7jV5a0yapfF6apaZLjLLcWtd4sNrmJUMHyM+1xibTjH82Zh01TNlhsrOhdKTe00uAzZQmN6+KW+sDa/JD2PSVQ873m29yf+1Q9VDzfEYlHi1G5LKBBWZbtEsHbFwb1oYDwr1ZiF/2bnCSg1OBE/pfr9/bWx26UxJL3ONPISOLKUvQza0LZUxSKyjpdTGa/vDEr25rddbMM0Q3O6Lx3rqFvU+x6UrRKQY7tyrZecmD9FODy8uLizTmilwNj0kraNcAJhOp5aGVwsAGD5VmJBrWWbJSgWT9zrzWepQF47RaGSiKfeGx6Szi3gzmX/HHbihwBser4B9UJYpFBNX4R6vTn3VQnez0SymnrHQMsRYGTr1dSk34ljRqS/EMd2pLQ8YBp3a1PLfcqCpo8gtHkZFHKkTX6fs3MY0blKnth66rKCnU0VRGu37ONrQaA4eZDFtWAu2fXj9zjFkxTBOo8F7t926gTp/83Kyzzcy2kZD6xiqxTYnHLRFm3vHiRSwNSjkz3hoIzo8lCKWUlg/YtGs7tObunDAZfpDLbfEI15zsEIY3U/x/gHHc/G1zltnAgAAAABJRU5ErkJggg==);
                                        }
                                </style>
                                <div class="d-flex flex-row-reverse mt-0">
                                        <div class="p-2">
                                                <label id="switch" class="switch">
                                                        <input type="checkbox" onchange="toggleTheme()" id="slide">
                                                        <span class="slide rectangle"></span></label>
                                        </div>
                                </div>
                                <div id="mainDiv">
                                </div>