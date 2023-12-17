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
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="files/bootstrap/3/css/bootstrap.css?1" />
 <link rel="stylesheet" type="text/css" https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
 <link rel="stylesheet" type="text/css" https://cdn.datatables.net/responsive/2.4.0/css/responsive.dataTables.min.css">

<link rel="stylesheet" type="text/css" href="files/css/flags.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
<script type="text/javascript" src="files/bootstrap/3/js/bootstrap.js?1"></script>
<script type="text/javascript" src="files/js/bootbox.min.js"></script>
<script type="text/javascript" src="files/js/clipboard.min.js"></script>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>






<link rel="shortcut icon" href="files/img/favicon.ico" />
<meta http-equiv="X-UA-Compatible" content="IE=10; IE=9; IE=8; IE=7; IE=EDGE" /> 
 <meta name="referrer" content="no-referrer" />

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<title>JeruxShop</title>
</head>
<style>
#
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
div.container { 
    max-width: 1200px 
}
   
    

</style>
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable( {
        responsive: true,
        columnDefs: [
            { responsivePriority: 1, targets: 0 },
            { responsivePriority: 10001, targets: 4 },
            { responsivePriority: 2, targets: -2 }
        ]
    } );
} );
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
    $("#example").html('<div id="mydiv"><img src="files/img/load2.gif" class="ajax-loader"></div>').show();
    $.ajax({
    type:       'GET',
    url:        'divPage'+n+'.html',
    success:    function(data)
    {
        $("#example").html(data).show();
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
   pageDiv(8,'Banks - JeruxShop','banks.html',1);
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
            .navbar {
                background-color: #001f3f;
            }
        </style>
<body style="padding-top: 70px; padding-bottom: 70px;">

 
<body>
    <nav id="navbar_id" class="navbar navbar-expand-lg navbar-dark bg-white fixed-top">
        <div class="navbar-collapse collapse w-100 up order-1 order-md-0 dual-collapse2 home_nav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="main_site_name nav-item nav-link active" href="https://xleet.pw/homepage">
                        <i class="middle fab fa-2x fa-redhat pink-color"></i>
                        <span class="middle site_name_span">xLeet</span>
                    </a>
                </li>
 
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownHosts" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-server orange-color">
                        </i>
                        Hosts
                    </a>
                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownBank">
                        <a class="dropdown-item " data-title="Cpanels" href="cpanels"> Cpanels <span class="badge badge-info d-blue-background">29926</span></a>
                        <a class="dropdown-item " data-title="Shells" href="shells">Shells <span class="badge badge-info d-blue-background">11764</span></a>
                        <a class="dropdown-item " data-title="SSH\WHM" href="ssh"> SSH\WHM <span class="badge badge-info d-blue-background">1685</span></a>
                        <a class="dropdown-item " data-title="RDP" href="rdp">RDP <span class="badge badge-info d-blue-background">1733</span>
                        </a>
                    </div>
                </div>
                <div class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdownSend" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-paper-plane text-primary"></i> Send
                    </a>
                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownSend">
                        <a class="dropdown-item " data-title="SMTP" href="https://xleet.pw/smtp"> SMTP <span class="badge badge-info d-blue-background">5929</span></a>
                        <a class="dropdown-item" data-title="Mailers" href="https://xleet.pw/mailers">Mailers <span class="badge badge-info d-blue-background">243</span></a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownLeads" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-address-book pink-color">
 
                        </i>
                        Leads
                    </a>
                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownLeads">
 
                    </div>
                </div>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBusiness" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-briefcase green-color"></i> Business
                    </a>
                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownBusiness">
                        <a class="dropdown-item" data-title="Cpanel Webmail " href="https://xleet.pw/webmail?type=Cpanel%20Webmail">
                            Cpanel Webmail <span class="badge badge-info d-blue-background">31074</span>
                        </a>
                        <a class="dropdown-item" data-title="Godaddy Webmail " href="https://xleet.pw/webmail?type=Godaddy%20Webmail">
                            Godaddy Webmail <span class="badge badge-info d-blue-background">3529</span>
                        </a>
                        <a class="dropdown-item" data-title="Office Godaddy Webmail " href="https://xleet.pw/webmail?type=Office%20Godaddy%20Webmail">
                            Office Godaddy Webmail <span class="badge badge-info d-blue-background">3251</span>
                        </a>
                        <a class="dropdown-item" data-title="Office365 Webmail " href="https://xleet.pw/webmail?type=Office365%20Webmail">
                            Office365 Webmail <span class="badge badge-info d-blue-background">33806</span>
                        </a>
                        <a class="dropdown-item" data-title="Rackspace Webmail " href="https://xleet.pw/webmail?type=Rackspace%20Webmail">
                            Rackspace Webmail <span class="badge badge-info d-blue-background">4</span>
                        </a>
                        <a class="dropdown-item" data-title="Ionos Webmail " href="https://xleet.pw/webmail?type=Ionos%20Webmail">
                            Ionos Webmail <span class="badge badge-info d-blue-background">1043</span>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAccounts" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-users salmon-color"></i> Accounts
                    </a>
                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownAccounts">
                        <a class="dropdown-item" data-title=" Accounts - Email Marketing  {SendGrid, Amazon Aws.... etc }" href="https://xleet.pw/accounts/1">
                            Email Marketing {SendGrid, Amazon Aws.... etc }
                            <span class="badge badge-info d-blue-background">
                                4191
                            </span>
                        </a>
                        <a class="dropdown-item" data-title=" Accounts - Webmail Business" href="https://xleet.pw/accounts/18">
                            Webmail Business
                            <span class="badge badge-info d-blue-background">
                                43224
                            </span>
                        </a>
                        <a class="dropdown-item" data-title=" Accounts - Marketing Tools" href="https://xleet.pw/accounts/16">
                            Marketing Tools
                            <span class="badge badge-info d-blue-background">
                                12
                            </span>
                        </a>
                        <a class="dropdown-item" data-title=" Accounts - Hosting/Domain" href="https://xleet.pw/accounts/14">
                            Hosting/Domain
                            <span class="badge badge-info d-blue-background">
                                828
                            </span>
                        </a>
                        <a class="dropdown-item" data-title=" Accounts - Games" href="https://xleet.pw/accounts/2">
                            Games
                            <span class="badge badge-info d-blue-background">
                                252
                            </span>
                        </a>
                        <a class="dropdown-item" data-title=" Accounts - Graphic / Developer" href="https://xleet.pw/accounts/17">
                            Graphic / Developer
                            <span class="badge badge-info d-blue-background">
                                111
                            </span>
                        </a>
                        <a class="dropdown-item" data-title=" Accounts - VPN/Socks Proxy" href="https://xleet.pw/accounts/3">
                            VPN/Socks Proxy
                            <span class="badge badge-info d-blue-background">
                                2632
                            </span>
                        </a>
                        <a class="dropdown-item" data-title=" Accounts - Shopping {Amazon, eBay .... etc }" href="https://xleet.pw/accounts/4">
                            Shopping {Amazon, eBay .... etc }
                            <span class="badge badge-info d-blue-background">
                                127
                            </span>
                        </a>
                        <a class="dropdown-item" data-title=" Accounts - Program { antivirus, Adobe .... etc }" href="https://xleet.pw/accounts/7">
                            Program { antivirus, Adobe .... etc }
                            <span class="badge badge-info d-blue-background">
                                157
                            </span>
                        </a>
                        <a class="dropdown-item" data-title=" Accounts - Stream { Music, Netflix, iptv, HBO, bein sport, WWE ...etc }" href="https://xleet.pw/accounts/8">
                            Stream { Music, Netflix, iptv, HBO, bein sport, WWE ...etc }
                            <span class="badge badge-info d-blue-background">
                                2165
                            </span>
                        </a>
                        <a class="dropdown-item" data-title=" Accounts - Dating" href="https://xleet.pw/accounts/9">
                            Dating
                            <span class="badge badge-info d-blue-background">
                                1128
                            </span>
                        </a>
                        <a class="dropdown-item" data-title=" Accounts - Learning { udemy, lynda, .... etc. }" href="https://xleet.pw/accounts/10">
                            Learning { udemy, lynda, .... etc. }
                            <span class="badge badge-info d-blue-background">
                                855
                            </span>
                        </a>
                        <a class="dropdown-item" data-title=" Accounts - Torrent / File Host" href="https://xleet.pw/accounts/11">
                            Torrent / File Host
                            <span class="badge badge-info d-blue-background">
                                1
                            </span>
                        </a>
                        <a class="dropdown-item" data-title=" Accounts - Voip / Sip" href="https://xleet.pw/accounts/12">
                            Voip / Sip
                            <span class="badge badge-info d-blue-background">
                                9
                            </span>
                        </a>
                        <a class="dropdown-item" data-title=" Accounts - Social Media" href="https://xleet.pw/accounts/15">
                            Social Media
                            <span class="badge badge-info d-blue-background">
                                97
                            </span>
                        </a>
                        <a class="dropdown-item" data-title=" Accounts - Other" href="https://xleet.pw/accounts/13">
                            Other
                            <span class="badge badge-info d-blue-background">
                                132
                            </span>
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
                <div id="notifications_container" data-href="https://xleet.pw/notifications/get">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownNotifications" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell red-color"></i>
                            <div class="badge badge-info d-blue-background">
                                0
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownNotifications">
                            <a class="dropdown-item" href="javascript:;">
                                No Notifications
                            </a>
                        </div>
                    </li>
                </div>
                <li class="nav-item">
                    <a class="nav-item nav-link " data-title="Add Balance" href="https://xleet.pw/add-balance">
                        <div class="badge badge-danger"><span id="buyer_balance">0.00</span> <i class="fa fa-plus"></i> </div>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tickets
                        <span class="badge badge-success">0</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                        <a class="dropdown-item" data-title="My Tickets " href="https://xleet.pw/tickets">My Tickets
                            <a class="dropdown-item" data-title="My Reports" href="https://xleet.pw/reports">My Reports
                            </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Account <i class="fa fa-user-secret"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                        <a class="dropdown-item" data-title="Settings" href="https://xleet.pw/user/settings">Settings <i class="fa fa-cog"></i></a>
                        <a class="dropdown-item" data-title="Orders" href="https://xleet.pw/orders">Orders
                            <span class="badge badge-success">
                                0
                            </span>
                            <i class="fa fa-shopping-cart"></i></a>
                        <a class="dropdown-item" data-title="Add Balance" href="https://xleet.pw/add-balance">Add Balance
                            <i class="fa fa-money-bill-alt"></i></a>
                        <a class="dropdown-item noAjax" href="https://xleet.pw/logout">Logout <i class="fa fa-door-open"></i></a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
<div id="container-fluid">
    <div class="mainDiv">
<table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
               <th data-priority="1">Country</th>
               <th data-priority="1">Bank Name</th>
               <th data-priority="1">Bank Info</th>
               <th data-priority="1">Seller Name</th>
                <th data-priority="1">Price</th>
              <th data-priority="1">created date</th>
                <th data-priority="1">Buy</th>
            </tr>
        </thead>
        <tbody>
            </tr>
        </tbody>
    </table>
</div>
</body>
</html>

