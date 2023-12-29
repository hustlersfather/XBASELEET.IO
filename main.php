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
<html lang="ru">

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
    <title>xBaseTools</title> <!-- jQuery -->
    <script src="https://vulnx.biz/js/plugins/jquery/jquery.min.js"></script> <!-- Bootstrap 4 -->
    <script src="https://vulnx.biz/js/plugins/bootstrap/js/bootstrap.bundle.min.js"></script> <!-- AdminLTE App -->
    <script src="https://vulnx.biz/js/adminlte.min.js"></script> <!-- AdminLTE for demo purposes -->
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
    <nav class="navbar navbar-expand-xl navbar navbar-light" style="
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
    padding-left: 1rem;"> <a class="navbar-brand" href="index.php" style="color: var(--font-color);"><img width="25px" src="layout/images/logo.png"> <small><small>XbaseTools</small></small> </a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <i class="navbar-toggler-icon"></i> </button>
        <div class="collapse navbar-collapse order-1" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            
            
            
                <!-- ... Usa Bamk+(Full Infos) ... -->
 <li class="nav-item dropdown mr-auto"> 
                <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-warehouse fa-sm orange-text"></i> <small><small>USA Bank+AN:RN(login/addres)</a>
                    <div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown"> <?php $banks = 
                   [ 
                   "53bank", "huntingtonbank", "aacreditunionbank", "sofibank", "advantiscubank", "afcubank", "alaskausabank", "alliantbank", "allybank", "americanheritagecubank", "amexbank", 
                   /* Add more banks in alphabetical order */
                    "andigobank", "andrewsfcubank", "aplusfcubank", "applebank", "applefcubank", "bankatfirst", "bankMobile", "bankofhope", "barclaysusbank", "baxterbank", "bbt&tbank", "bbvabanks", "bell.bankbethpagefcu", "bmobank", "boabanks", "caltechefcubank", "campuscubank", "campusfederalbank", /* Add more banks in alphabetical order */
                   "cbnabank", "centrisfcubank", "cfcubank", "chartwaybank", "chasebanks", "chimebank", "citadelbank", "citibanks", "citizensbank", "coastal24bank", "columbiabank", "comericabank", "corningcubank", "credithumanbank", "cutxbank", "discoverbank", "edwardjonesbank", "efirstbank", "etradebank", "fargobank", "fcbankingbank" 
                   /* Add more banks in alphabetical order */   
                  ];          
                 foreach ($banks as $bank) { $bankCount = mysqli_query($dbcon, "SELECT * FROM {$bank} WHERE sold='0'"); $bankCount = mysqli_num_rows($bankCount);  $bankTitle = ucwords(str_replace(['.php', 'bank'], ['', ' bank'], $bank));  echo "<a class='link_menu' href='{$bank}.php' style='color: var(--font-color);'>            <span class='px-2'><i class='fas fa-tools fa-fw'></i> {$bankTitle}(Fullz+Infos)  <span class='badge badge-warning'>+{$bankCount}</span>   </small> </small> </a>";} ?>

                <!-- ... Canada Bamk+(Full Infos) ... -->
 <li class="nav-item dropdown mr-auto"> 
                <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-warehouse fa-sm orange-text"></i> <small><small>CANADA Bank+Q/N(Fullz Infos)</a>
                    <div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown"> 
<?php $banks = [ 
            "fcbankingbank" /* Add more banks in alphabetical order */   ];          
                 foreach ($banks as $bank) { $bankCount = mysqli_query($dbcon, "SELECT * FROM {$bank} WHERE sold='0'"); $bankCount = mysqli_num_rows($bankCount);  $bankTitle = ucwords(str_replace(['.php', 'bank'], ['', ' bank'], $bank));  echo "<a class='link_menu' href='{$bank}.php' style='color: var(--font-color);'>            <span class='px-2'><i class='fas fa-tools fa-fw'></i> {$bankTitle}(Fullz+Infos)  <span class='badge badge-warning'>+{$bankCount}</span>   </small> </small> </a>";} ?>
 
<!-- ... Uk Bamk+(Full Infos) ... -->
 <li class="nav-item dropdown mr-auto"> 
                <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-warehouse fa-sm orange-text"></i> <small><small>USA Bank+AN:RN(Fullz Infos)</a>
                    <div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown"> <?php $banks = 
                   [ 
                   "53bank", "huntingtonbank", "aacreditunionbank", "sofibank", "advantiscubank", "afcubank", "alaskausabank", "alliantbank", "allybank", "americanheritagecubank", "amexbank", 
                   /* Add more banks in alphabetical order */
                    "andigobank", "andrewsfcubank", "aplusfcubank", "applebank", "applefcubank", "bankatfirst", "bankMobile", "bankofhope", "barclaysusbank", "baxterbank", "bbt&tbank", "bbvabanks", "bell.bankbethpagefcu", "bmobank", "boabanks", "caltechefcubank", "campuscubank", "campusfederalbank", /* Add more banks in alphabetical order */
                   "cbnabank", "centrisfcubank", "cfcubank", "chartwaybank", "chasebanks", "chimebank", "citadelbank", "citibanks", "citizensbank", "coastal24bank", "columbiabank", "comericabank", "corningcubank", "credithumanbank", "cutxbank", "discoverbank", "edwardjonesbank", "efirstbank", "etradebank", "fargobank", "fcbankingbank" 
                   /* Add more banks in alphabetical order */   
                  ];          
                 foreach ($banks as $bank) { $bankCount = mysqli_query($dbcon, "SELECT * FROM {$bank} WHERE sold='0'"); $bankCount = mysqli_num_rows($bankCount);  $bankTitle = ucwords(str_replace(['.php', 'bank'], ['', ' bank'], $bank));  echo "<a class='link_menu' href='{$bank}.php' style='color: var(--font-color);'>            <span class='px-2'><i class='fas fa-tools fa-fw'></i> {$bankTitle}(Fullz+Infos)  <span class='badge badge-warning'>+{$bankCount}</span>   </small> </small> </a>";} ?>
 <!-- ... Uk Bank+(Full Infos) ... -->
 <li class="nav-item dropdown mr-auto"> 
                <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-warehouse fa-sm orange-text"></i> <small><small>UK Bank+Q/A(Fullz Infos)</a>
                    <div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown"> <?php $banks = 
                   [ 
                   "53bank",
                "fcbankingbank" 
                   /* Add more banks in alphabetical order */
         
                   /* Add more banks in alphabetical order */   
                  ];          
                 foreach ($banks as $bank) { $bankCount = mysqli_query($dbcon, "SELECT * FROM {$bank} WHERE sold='0'"); $bankCount = mysqli_num_rows($bankCount);  $bankTitle = ucwords(str_replace(['.php', 'bank'], ['', ' bank'], $bank));  echo "<a class='link_menu' href='{$bank}.php' style='color: var(--font-color);'>            <span class='px-2'><i class='fas fa-tools fa-fw'></i> {$bankTitle}(Fullz+Infos)  <span class='badge badge-warning'>+{$bankCount}</span>   </small> </small> </a>";} ?>                
          <!-- ...USA SELF REGISTERED  (verified accounts) ... -->
 <li class="nav-item dropdown mr-auto"> 
                <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-warehouse fa-sm orange-text"></i> <small><small>Usa Self(created accounts)</a>
                    <div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown"> <?php $banks = 
                   [ 
                   "53bank",
                "fcbankingbank" 
                   /* Add more banks in alphabetical order */
         
                   /* Add more banks in alphabetical order */   
                  ];          
                 foreach ($banks as $bank) { $bankCount = mysqli_query($dbcon, "SELECT * FROM {$bank} WHERE sold='0'"); $bankCount = mysqli_num_rows($bankCount);  $bankTitle = ucwords(str_replace(['.php', 'bank'], ['', ' bank'], $bank));  echo "<a class='link_menu' href='{$bank}.php' style='color: var(--font-color);'>   <span class='px-2'><i class='fas fa-tools fa-fw'></i> {$bankTitle}(Fullz+Infos)  <span class='badge badge-warning'>+{$bankCount}</span>   </small> </small> </a>";} ?>
<?php $banks = 
                   [ 
                   "53bank",
                "fcbankingbank" 
                   /* Add more banks in alphabetical order */
         
                   /* Add more banks in alphabetical order */   
                  ];          
                 foreach ($banks as $bank) { $bankCount = mysqli_query($dbcon, "SELECT * FROM {$bank} WHERE sold='0'"); $bankCount = mysqli_num_rows($bankCount);  $bankTitle = ucwords(str_replace(['.php', 'bank'], ['', ' bank'], $bank));  echo "<a class='link_menu' href='{$bank}.php' style='color: var(--font-color);'>   <span class='px-2'><i class='fas fa-tools fa-fw'></i> {$bankTitle}(Fullz+Infos)  <span class='badge badge-warning'>+{$bankCount}</span>   </small> </small> </a>";} ?>
    
   <!-- ...USA SELF REGISTERED  (verified accounts) ... -->
 <li class="nav-item dropdown mr-auto"> 
                <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-warehouse fa-sm orange-text"></i> <small><small>USA Pros(Fullz Infos)</a>
                    <div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown"> <?php $banks = 
                   [ 
                   "53bank",
                "fcbankingbank" 
                   /* Add more banks in alphabetical order */
         
                   /* Add more banks in alphabetical order */   
                  ];          
                 foreach ($banks as $bank) { $bankCount = mysqli_query($dbcon, "SELECT * FROM {$bank} WHERE sold='0'"); $bankCount = mysqli_num_rows($bankCount);  $bankTitle = ucwords(str_replace(['.php', 'bank'], ['', ' bank'], $bank));  echo "<a class='link_menu' href='{$bank}.php' style='color: var(--font-color);'>   <span class='px-2'><i class='fas fa-tools fa-fw'></i> {$bankTitle}(Fullz+Infos)  <span class='badge badge-warning'>+{$bankCount}</span>   </small> </small> </a>";} ?><?php $banks = 
                   [ 
                   "53bank",
                   "fcbankingbank" 
                   /* Add more banks in alphabetical order */
         
                   /* Add more banks in alphabetical order */   
                  ];          
                 foreach ($banks as $bank) { $bankCount = mysqli_query($dbcon, "SELECT * FROM {$bank} WHERE sold='0'"); $bankCount = mysqli_num_rows($bankCount);  $bankTitle = ucwords(str_replace(['.php', 'bank'], ['', ' bank'], $bank));  echo "<a class='link_menu' href='{$bank}.php' style='color: var(--font-color);'>   <span class='px-2'><i class='fas fa-tools fa-fw'></i> {$bankTitle}(Fullz+Infos)  <span class='badge badge-warning'>+{$bankCount}</span>   </small> </small> </a>";} ?>
   </div>
                
            </ul>
            
            
            
    </nav> <!-- /.sidebar-menu -->
    </div> <!-- /.sidebar -->
    </aside> <!-- Content Wrapper. Contains content of the page -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1></h1>
                    </div>
                </div>
            </div> <!-- /.container-fluid -->
        </section> <!-- Main content -->
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
                    <div class="p-2"> <label id="switch" class="switch"> <input type="checkbox" onchange="toggleTheme()" id="slide"> <span class="slide rectangle"></span></label> </div>
                    <div id="mainDiv"> </div>