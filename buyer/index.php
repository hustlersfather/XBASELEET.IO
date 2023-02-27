
<?php
ob_start();
session_start();
date_default_timezone_set(‘UTC’);
include “../includes/config.php”;
if (!isset($_SESSION[‘sname’]) and !isset($_SESSION[‘spass’])) {
    header(“location: ../“); exit();}
$usrid = mysqli_real_escape_string($dbcon, $_SESSION[‘sname’]);
?>
<!doctype html>
<html>
<head> 
<meta charset=“utf-8”> 
<meta name=“referrer” content=“no-referrer” /> 
<meta http-equiv=“X-UA-Compatible” content=“IE=10; IE=9; IE=8; IE=7; IE=EDGE” /> 
<meta name=“viewport” content=“width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no”>
<link rel=“shortcut icon” href=“../layout/img/favicon.ico” />
<link rel=“stylesheet” type=“text/css” href=“layout/css/flags.css” />
<link rel=“stylesheet” href=“../layout/css/bootstrap.min.css”>
<link rel=“stylesheet” href=“../layout/css/util.css”>
<link rel=“stylesheet” href=“../layout/css/flexslider5.css”>
<link rel=“stylesheet” href=“https://cdn.datatables.net/responsive/2.4.0/css/responsive.dataTables.min.css”>
<link rel=“stylesheet” href=“https://cdn.datatables.net/buttons/2.3.4/css/buttons.dataTables.min.css”>
<link rel=“stylesheet” href=“https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css”>
<title>XBASELEET</title>
<script src=“../layout/js/bootstrap.min.js”></script>
<script src=“../layout/js/jquery.flexslider.js”></script>
<script src=“../layout/js/jquery.dataTables.min.js”></script>
<script src=“../layout/js/clipboard.min.js”></script>
<script src=“../layout/js/jquery.flexslider-min.js”></script>
<script src=“../layout/js/main.js”></script>







</head>
<<style>.display  td {
    background: var(—color-card);
      color: var(—font-color);

}
.dataTables_wrapper .dataTables_paginate .paginate_button {

    color: var(—font-color);

}

.label-as-badge {
    border-radius: 0.5em;
}

body {
    padding-top:50px;
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
  margin: auto; /* presto! */

}

   
    

</style>

<style>
    .navbar-nav .dropdown-menu
    {
      margin:0 !important
    }
    .theme-light {
  —color-primary: #0060df;
  —color-secondary: #ffffff;
   —color-secondary2: #ecf0f1;
  —color-accent: #fd6f53;
  —font-color: #000000;
  —color-nav: #ffffff;
  —color-dropdown: #ffffff;
  —color-card: #ffffff;
   —color-card2: #d1ecf1;
  —color-info: #0c5460;
  —color-backinfo: #d1ecf1;
  —color-borderinfo: #bee5eb;

}
.theme-dark {
  —color-primary: #17ed90;
  —color-secondary: #353B50;
  —color-secondary2: #353B50;
  —color-accent: #12cdea;
  —font-color: #ffffff;
  —color-nav: #363947;
  —color-dropdown: rgba(171, 205, 239, 0.3);
  —color-card: #262A37;
   —color-card2: #262A37;
   —color-info: #4DD0E1;
  —color-backinfo: #262A37;
  —color-borderinfo: #262A37;
}
.them {

  background: var(—color-secondary);
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.them h1 {
  color: var(—font-color);
  font-family: sans-serif;
}
.card-body {
     color: var(—font-color);
    }
.them button {
  color: var(—font-color);
  background-color: #ffffff;
  padding: 10px 20px;
  border: 0;
  border-radius: 5px;
}
.navbar.navbar-light .navbar-toggler {
    color: var(—font-color);
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
  content: “”;
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
  background: white url(‘https://i.ibb.co/FxzBYR9/night.png’);
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
  background: white url(‘https://i.ibb.co/7JfqXxB/sunny.png’);
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


<nav class=“navbar navbar-expand-xl navbar  navbar-light “ style=“
                                                          position:fixed;
                                                          background-color: var(—color-nav);
                                                          z-index:1;
                                                          top:0;
                                                          left:0;
                                                          right:0;
                                                          line-height: 1.5;
                                                          font-family: ‘Lato’, sans-serif;
                                                          font-size: 15px;
                                                          padding-top: 0.5rem;
                                                          padding-right: 1rem;
                                                          padding-bottom: 0.5rem;
                                                          padding-left: 1rem;
                                                        “>
<a class=“navbar-brand” href=“main” style=“color: var(—font-color);”><img width=“40px” src=“layout/images/logo.png”> XBASELEET</a>
<button class=“navbar-toggler” type=“button” data-toggle=“collapse” data-target=“#navbarSupportedContent” aria-controls=“navbarSupportedContent” aria-expanded=“false” aria-label=“Toggle navigation”>
<i class=“navbar-toggler-icon”></i>
</button>
<div class=“collapse navbar-collapse order-1” id=“navbarSupportedContent”>
<ul class=“navbar-nav mr-auto”>

<li class=“nav-item dropdown mr-auto”>
<a class=“nav-link dropdown-toggle waves-effect waves-light” style=“color: var(—font-color);” role=“button” data-toggle=“dropdown” aria-haspopup=“true” aria-expanded=“false”><i class=“fa fa-warehouse fa-sm orange-text”></i>
Hosts
</a>
<div class=“dropdown-menu dropdown-menu-left” style=“color: var(—font-color); background-color: var(—color-nav);” aria-labelledby=“navbarDropdown”>
<a class=“dropdown-item waves-effect waves-light” href=“rdp” style=“color: var(—font-color);”><span class=“px-2”><i class=“fas fa-desktop fa-fw”></i> RDPs <span class=“badge badge-primary”> </span></span></a>
<a class=“dropdown-item waves-effect waves-light” href=“cPanel” style=“color: var(—font-color);”><span class=“px-2”><i class=“fas fa-tools fa-fw”></i> cPanels <span class=“badge badge-primary”> </span></span></a>
<a class=“dropdown-item waves-effect waves-light” href=“shell” style=“color: var(—font-color);”><span class=“px-2”><i class=“fas fa-file-code fa-fw”></i> Shells <span class=“badge badge-primary”> </span></span></a>
 </div>
     </li>
     
     

<li class=“nav-item dropdown mr-auto”>
<a class=“nav-link dropdown-toggle waves-effect waves-light” style=“color: var(—font-color);” role=“button” data-toggle=“dropdown” aria-haspopup=“true” aria-expanded=“false”><i class=“fab fa-google-play fa-sm text-success”></i>
Send
</a>
<div class=“dropdown-menu dropdown-menu-left” style=“color: var(—font-color); background-color: var(—color-nav);” aria-labelledby=“navbarDropdown”>
<a class=“dropdown-item waves-effect waves-light” href=“mailer” style=“color: var(—font-color);”><span class=“px-2”><i class=“fas fa-leaf fa-fw”></i> Mailers <span class=“badge badge-primary”>. </span></span></a>
<a class=“dropdown-item waves-effect waves-light” href=“smtp” style=“color: var(—font-color);”><span class=“px-2”><i class=“fas fa-envelope fa-fw”></i> SMTPs <span class=“badge badge-primary”> </span></span></a>
</div>
</li>


<li class=“nav-item dropdown mr-auto”>
<a class=“nav-link dropdown-toggle waves-effect waves-light” style=“color: var(—font-color);” role=“button” data-toggle=“dropdown” aria-haspopup=“true” aria-expanded=“false”><i class=“fas fa-mail-bulk fa-sm pink-color”></i> Leads
</a>
<div class=“dropdown-menu dropdown-menu-left” style=“color: var(—font-color); background-color: var(—color-nav);” aria-labelledby=“navbarDropdown”>
<a class=“dropdown-item waves-effect waves-light” href=“leads-1” style=“color: var(—font-color);”><span class=“px-2”><i class=“fas fa-award”></i> 100% Validated Leads <span class=“badge badge-primary”> </span></span></a>
   </div>
</li>






<li class=“nav-item dropdown mr-auto”>
<a class=“nav-link dropdown-toggle waves-effect waves-light” style=“color: var(—font-color);” role=“button” data-toggle=“dropdown” aria-haspopup=“true” aria-expanded=“false”><i class=“fab fa-google-play fa-sm text-success”></i>
Accounts
</a>
<div class=“dropdown-menu dropdown-menu-left” style=“color: var(—font-color); background-color: var(—color-nav);” aria-labelledby=“navbarDropdown”>
<a class=“dropdown-item waves-effect waves-light” href=“account-1” style=“color: var(—font-color);”><span class=“px-2”><i class=“fas fa-business-time”></i>premiums/shop/datings<span class=“badge badge-primary”></span></span></a>
<a class=“dropdown-item waves-effect waves-light” href=“banks-1” style=“color: var(—font-color);”><span class=“px-2”><i class=“fas fa-mail-bulk”></i>USA Bank(Full info(<span class=“badge badge-primary”></span></span></a>
</div>
</li>



<li class=“nav-item dropdown mr-auto”>
<a class=“nav-link dropdown-toggle” style=“color: var(—font-color);” role=“button” data-toggle=“dropdown” aria-haspopup=“true” aria-expanded=“false”>
<i class=“fas fa-user-friends fa-sm”>
</i> 
Other
</a>


<a class=“nav-item waves-effect waves-light” href=“scampage” style=“color: var(—font-color);”><span class=“px-2”><i class=“fas fa-network-wired”></i> Scampage <span class=“badge badge-primary”> </span></span></a>
<a class=“dropdown-item waves-effect waves-light” href=“tutorials” style=“color: var(—font-color);”><span class=“px-2”><i class=“fas fa-passport”></i> Tutorials/Methods/ <span class=“badge badge-primary”> </span></span></a>
</div>
</li>
 

<ul class=“navbar-nav profile”>
                        <?php
$uid = mysqli_real_escape_string($dbcon, $_SESSION[‘sname’]);
$q = mysqli_query($dbcon, “SELECT resseller FROM users WHERE username=‘$uid’”) or die(mysqli_error());
$r = mysqli_fetch_assoc($q);
$reselerif = $r[‘resseller’];
if ($reselerif == “1”) { $uid = mysqli_real_escape_string($dbcon, $_SESSION[‘sname’]);
    $q = mysqli_query($dbcon, “SELECT soldb FROM resseller WHERE username=‘$uid’”) or die(mysqli_error());
    $r = mysqli_fetch_assoc($q);

    echo ‘<li><a href=“./employee/index.html”><span class=“badge” title=“employee Panel”><span class=“glyphicon glyphicon-cloud”></span><span id=“employee”></span></span></a></li>’;
} else {
} ?> 


     
<div class=“dropdown-menu” aria-labelledby=“navbarDropdown” style=“color: var(—font-color); background-color: var(—color-nav);”> 
<li class=“nav-item”>
<a class=“nav-link waves-effect waves-light” href=“tickets” style=“color: var(—font-color);” role=“button” aria-haspopup=“true” aria-expanded=“false”> Tickets <span class=“badge badge-info”>
 <span id=“alltickets”></span></span> Tickets <span>
$sze112  = mysqli_query($dbcon, “SELECT * FROM ticket WHERE uid=‘$uid’ and seen=‘1’”);
$r844941 = mysqli_num_rows($sze112);
if ($r844941 == “1”) {
    echo ‘<span class=“badge badge-danger”>1</span>’;
}
?>
</span></a>
<div class=“dropdown-menu” aria-labelledby=“navbarDropdown” style=“color: var(—font-color); background-color: var(—color-nav);”> <li class=“nav-item”><a class=“nav-link waves-effect waves-light” href=“tickets” style=“color: var(—font-color);” role=“button” aria-haspopup=“true” aria-expanded=“false”> Tickets <span class=“badge badge-info”> <span id=“tickets”></span></span>
	<?php
$s1 = mysqli_query($dbcon, “SELECT * FROM ticket WHERE uid=‘$uid’ and seen=‘1’”);
$r1 = mysqli_num_rows($s1);
if ($r1 == “1”) {
    echo ‘<span class=“badge bagde-success”> 1 New</span>’;
}
?></span></a></li>
    
        
<li class=“nav-item”><a class=“nav-link waves-effect waves-light” href=“reports” style=“color: var(—font-color);” role=“button” aria-haspopup=“true” aria-expanded=“false”>Reports <span class=“badge badge-info”> <span id=“reports”></span></span> <?php
$s1 = mysqli_query($dbcon, “SELECT * FROM reports WHERE uid=‘$uid’ and seen=‘1’”);
$r1 = mysqli_num_rows($s1);
if ($r1 == “1”) {
    echo ‘<span class=“badge badge-success”> 1 New</span>’;
}
?></span> </a></li>

           </ul>
        </li> 

        
<li class=“nav-item”><a class=“nav-link waves-effect waves-light” href=“addBalance” style=“color: var(—font-color);” role=“button” aria-haspopup=“true” aria-expanded=“false”><span class=“badge badge-danger”><span id=“balance”><span class=“px-2”><i class=“fa fa-plus”></i></span></span>
<li class=“nav-item dropdown”><a class=“nav-link dropdown-toggle waves-effect waves-light” style=“color: var(—font-color);” role=“button” data-toggle=“dropdown” aria-haspopup=“true” aria-expanded=“false”>$usrid <i class=“fa fa-user-secret” style=“color: var(—font-color);”></i></a>

<div class=“dropdown-menu” aria-labelledby=“navbarDropdown” style=“color: var(—font-color); background-color: var(—color-nav);”>
<a class=“dropdown-item waves-effect waves-light” href=“setting” style=“color: var(—font-color);”><span class=“px-2”>Setting <i class=“fa fa-cog”></i></span></a>
<a class=“dropdown-item waves-effect waves-light” href=“orders” style=“color: var(—font-color);”><span class=“px-2”>My Orders <i class=“fa fa-shopping-cart”></i></span></a>
<a class=“dropdown-item waves-effect waves-light” href=“addBalance” style=“color: var(—font-color);”><span class=“px-2”>Add Balance <i class=“fa fa-money-bill-alt”></i></span></a>
            <li class=“divider”></li>
<a class=“dropdown-item waves-effect waves-light” href=“logout” style=“color: var(—font-color);”><span class=“px-2”>Logout <i class=“fa fa-door-open”></i></span></a>
          </ul>
        </li>
      </ul>
    </div>
    <!— /.navbar-collapse —>
  </div>
  <!— /.container-fluid —>
</nav>
<body style=“padding-top: 70px; padding-bottom: 70px;”>
 <body class=“dt-example”>
	<div class=“container”>
		  <section>
			    <h1>DataTables example <span>Examples index</span></h1>
		   	<div class=“info”>
			   	<p>welcome .</p>
			</div>
		</section>
	</div>
	<section>
<div id=“mainDiv”>


</div>

<script type=“text/javascript”>
             function ajaxinfo() {
                $.ajax({
                    type: ‘GET’,
                    url: ‘ajaxinfo.html’,
                    timeout: 10000,

                    success: function(data) {
                        if (data != ‘01’) {
                            var data = JSON.parse(data);
                            for (var prop in data) {
                                $(“#” + prop).html(data[prop]).show();
                            }
                        } else {
                            window.location = “logout.html”;
                        }
                    }
                });

            }
            setInterval(function() {
                ajaxinfo()
            }, 3000);

            ajaxinfo();

$(document).keydown(function(event){
    if(event.which==“17”)
        cntrlIsPressed = true;
});

$(document).keyup(function(){
    cntrlIsPressed = false;
});

var cntrlIsPressed = false;


function pageDiv(n,t,u,x){
  if(cntrlIsPressed){
    window.open(u, ‘_blank’);
    return false;
  }
        var obj = { Title: t, Url: u };
        if ( (“/“+obj.Url) != location.pathname) {
        	if (x != 1) {history.pushState(obj, obj.Title, obj.Url);}
        	else{history.replaceState(obj, obj.Title, obj.Url);}

    	}
      document.title = obj.Title;
    $(“#mainDiv”).html(‘<div id=“mydiv”><img src=“files/img/load2.gif” class=“ajax-loader”></div>’).show();
    $.ajax({
    type:       ‘GET’,
      url:        ‘divPage’+n+’.html’,
       success:    function(data)
       {
        $(“#mainDiv”).html(data).show();
        newTableObject = document.getElementById(‘table’);
        sorttable.makeSortable(newTableObject);
        $(“.sticky-header”).floatThead({top:60});
        if(x==0){ajaxinfo();}
         }});
         if (typeof stopCheckBTC === ‘function’) { 
          var a = stopCheckBTC();
     }

}

$(window).on(“popstate”, function(e) {
        location.replace(document.location);

});


function setTooltip(btn, message) {
  console.log(“hide-1”);
  $(btn).tooltip(‘hide’)
    .attr(‘data-original-title’, message)
    .tooltip(‘show’);
     console.log(“show”);
}

function hideTooltip(btn) {
  setTimeout(function() {$(btn).tooltip(‘hide’); console.log(“hide-2”);}, 1000);
}
</script>


<?php include “../includes/footer.php";?>