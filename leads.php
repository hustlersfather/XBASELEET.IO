
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



<?php include('../authentication/auth-controller.php'); ?>
<?php include('../authentication/security.php'); ?>
<?php include('includes/header.php'); ?>


        <!--Sidebar-->
        <div class="col-lg-10">
            <div class="container-fluid">
                <!--Breadcrumbs-->
                <nav aria-label="breadcrumb border-bg">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                        <a href="#" class="text-white">Home</a>
                        </li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Post</li>
                    </ol>
                </nav>
                <!--Breadcrumbs ends-->

                <!--Sb heading-->
                <div class="border-bg pb-2">
                    <div class="d-flex justify-content-between align-items-center mx-3">
                        <h5 class="h5 text-white">Chase Page</h5>
                        <div class="d-flex align-items-end">

                            <!-- Bank log post -->
                            <div>
                                <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#exampleModal">
                                    Add Post
                                </button>
                                
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-danger py-3 text-white">
                                                <h5 class="modal-title" id="exampleModalLabel">Add a Post</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="post.php" method="post" class="px-3 py-1">

                                                    <div class="form-group mt-2">
                                                        <label for="email" class="text-uppercase mb-2">Balance</label>
                                                        <input name="balance" type="int" id="email" class="form-control">
                                                    </div>

                                                    <div class="form-group mt-2">
                                                        <label for="title" class="text-uppercase mb-2">Title</label>
                                                        <input name="title" type="text" id="title" class="form-control">
                                                    </div>

                                                    <div class="form-group mt-2">
                                                        <label for="info" class="text-uppercase mb-2">Info</label>
                                                        <input name="info" type="text" id="info" class="form-control">
                                                    </div>
                                                    <div class="form-group mt-2">
                                                        <label for="info" class="text-uppercase mb-2">Details</label>
                                                        <input name="detail" type="text" id="info" class="form-control">
                                                    </div>

                                                    <div class="form-group mt-2">
                                                        <label for="price" class="text-uppercase mb-2">Price</label>
                                                        <input name="price" type="int" id="price" class="form-control">
                                                    </div>

                                                    <div class="form-group mt-2">
                                                        <input name="table_name" type="hidden" id="price" value="chase_usa_fullz" class="form-control">
                                                    </div>

                                                    <div class="form-group mt-2">
                                                        <label for="price" class="text-uppercase mb-2">Category</label>
                                                        <select name="category" type="text" class="form-control">
                                                            <option value="visa_card">Visa card</option>
                                                            <option value="mastercard">mastercard</option>
                                                            <option value="amex_card">Amex card</option>
                                                            <option value="bank_ssn_dob_fullz">Bank ssn Dob Fullz</option>
                                                            <option value="bank_checks">Bank Checks</option>
                                                            <option value="Huntington Log(Full info)">Huntington Log(Full info)</option>
                                                            <option value="Chase Log(Full info)">Chase Log(Full info)</option>
                                                            <option value="Citi Log(Full info)">Citi Log(Full info)</option>
                                                            <option value="PNC Log(Full info)">PNC Log(Full info)</option>
                                                            <option value="Woodforest Log(Full info)">Woodforest Log(Full info)</option>
                                                            <option value="Chime Log(Full info)">Chime Log(Full info)</option>
                                                            <option value="NFCU Log(Full info)">NFCU Log(Full info)</option>
                                                            <option value="BBVA Log(Full info)">BBVA Log(Full info)</option>
                                                            <option value="BB&T Log(Full info)">BB&T Log(Full info)</option>
                                                            <option value="BOA Log(Full info)">BOA Log(Full info)</option>
                                                            <option value="Suntrust Log(Full info)">Suntrust Log(Full info)</option>
                                                            <option value="Scotia Bank log(Full Info)">Scotia Bank log(Full Info)</option>
                                                            <option value="RBC Log(Full info)">RBC Log(Full info)</option>
                                                            <option value="TD Banks Canada(Full info)">TD Banks Canada(Full info)</option>
                                                            <option value="Llyod Bank Log(Full info)">Llyod Bank Log(Full info)</option>
                                                            <option value="Barclays Bank Log(Full info)">Barclays Bank Log(Full info)</option>
                                                            <option value="HSBC Bank Log(Full info)">HSBC Bank Log(Full info)</option>
                                                            <option value="Shopwithscript log(usa)">Shopwithscript log(usa)</option>
                                                            <option value="fundscript_script">otherAccount</option>
                                                            <option value="Southwest log">Southwest log</option>
                                                            <option value="spamming_tools">spamming_tools</option>
                                                            <option value="hosting_tools">hosting_tools</option>
                                                            <option value="cracking_tools">cracking_tools</option>
                                                            <option value="hacking_tools">hacking_tools</option>
                                                            <option value="snipping_tools">snipping_tools</option>

                                                        </select>   
                                                    </div>

                                                    <div class="form-group my-3">
                                                        <button type="submit" name="add_post" class="btn-danger btn-lg sign_in text-white">Add post</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Bank log post ends -->
                        </div>
                    </div>
                </div>
                <!--Sb heading ends-->

                <!--search form-->
                <div class="float-right mt-2">
                    <form action="">
                        <label for="search" class="text-white h6">Search:</label>
                        <input type="text" class="py-1 rounded">
                    </form>
                </div>
                <!--search form ends-->

                <!--Post Table-->
                <div class="table-card rounded">
                    <div class="card-head rounded d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="h5">Chase Post</h5>
                        </div>

                        <div class="navbar mr-5">
                            <div class="nav-item dropdown">
                                <div class="nav-link dropdown-toggle bg-white p-2 rounded lead text-uppercase" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Select Your Post
                                </div>
                                <div class="dropdown-menu mx-5" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="post.php">Visa_card</a>
                                    <a class="dropdown-item" href="mastercard.php">Mastercard</a>
                                    <a class="dropdown-item" href="amex.php">Amex Card</a>
                                    <a class="dropdown-item" href="bank_ssn.php">bank_ssn_dob_fullz</a>
                                    <a class="dropdown-item" href="bank_checks.php">Bank Checks</a>
                                    <a class="dropdown-item" href="huntington.php">Huntington Log(Full info)</a>
                                    <a class="dropdown-item" href="chase.php">Chase Log(Full info)</a>
                                    <a class="dropdown-item" href="citi.php">Citi Log(Full info)</a>
                                    <a class="dropdown-item" href="pnc.php">PNC Log(Full info)</a>
                                    <a class="dropdown-item" href="woodforest.php">Woodforest Log(Full info)</a>
                                    <a class="dropdown-item" href="chime.php">Chime Log(Full info)</a>
                                    <a class="dropdown-item" href="nfcu.php">NFCU Log(Full info)</a>
                                    <a class="dropdown-item" href="bbva.php">BBVA Log(Full info)</a>
                                    <a class="dropdown-item" href="bb&t.php">BB&T Log(Full info)</a>
                                    <a class="dropdown-item" href="boa.php">BOA Log(Full info)</a>
                                    <a class="dropdown-item" href="suntrust.php">Suntrust Log(Full info)</a>
                                    <a class="dropdown-item" href="scotia.php">Scotia Bank log(Full Info)</a>
                                    <a class="dropdown-item" href="rbc.php">RBC Log(Full info)</a>
                                    <a class="dropdown-item" href="td.php">TD Banks Canada(Full info)</a>
                                    <a class="dropdown-item" href="llyod.php">Llyod Bank Log(Full info)</a>
                                    <a class="dropdown-item" href="barclays.php">Barclays Bank Log(Full info)</a>
                                    <a class="dropdown-item" href="hsbc.php">HSBC Bank Log(Full info)</a>
                                    <a class="dropdown-item" href="shopwithscript.php">Shopwithscript log(usa)</a>
                                    <a class="dropdown-item" href="otherAccount.php">Other Account</a>
                                    <a class="dropdown-item" href="southwest.php">Southwest log</a>
                                    <a class="dropdown-item" href="spamming.php">spamming_tools</a>
                                    <a class="dropdown-item" href="hosting.php">hosting_tools</a>
                                    <a class="dropdown-item" href="cracking.php">cracking_tools</a>
                                    <a class="dropdown-item" href="hacking.php">hacking_tools</a>
                                    <a class="dropdown-item" href="snipping_tools.php">snipping_tools</a>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div>
                    <form action="chase.php" method="post" class="mx-4 pb-2 table-responsive">
                      <?php
                        include('../authentication/dbconfig.php'); 

                        $query = "SELECT * FROM chase_usa_fullz";
                        $results = mysqli_query($db, $query);
                      ?>
                        <table class="table table-striped mt-4 ">
                            <thead>
                              <tr>
                                  <th>id</th>
                                  <th>Balance</th>
                                  <th>Title</th>
                                  <th>Info</th>
                                  <th>Details</th>
                                  <th>Price</th>
                                  <th>Edit</th>
                                  <th>Delete</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php
                              if(mysqli_num_rows($results) > 0)
                              {
                                while($row = mysqli_fetch_assoc($results))
                                {
                                  ?>
                                  <tr>
                                    <td>
                                      <?php echo $row['id']; ?>
                                    </td>
                                    <td> 
                                      <?php echo $row['balance']; ?> 
                                    </td>
                                    <td>
                                      <?php echo $row['title']; ?> 
                                    </td>
                                    <td>
                                      <?php echo $row['info']; ?> 
                                    </td>
                                    <td>
                                      <?php echo $row['detail']; ?> 
                                    </td>
                                    <td>
                                      <?php echo $row['price']; ?> 
                                    </td>
                                    <td>
                                        <form action="edit_post.php" method="post">
                                            <input type="hidden" name="edit_post_id" value="<?php echo $row['id']; ?>">
                                            <input type="hidden" name="post_table" value="chase_usa_fullz">
                                            <button class="btn btn-success" type="submit" name="edit_post_btn">
                                            Edit
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="../authentication/auth-controller.php" method="post">
                                            <input type="hidden" name="delete_post_id" value="<?php echo $row['id']; ?>">
                                            <input type="hidden" name="table" value="chase_usa_fullz">
                                            <button class="btn btn-danger" name="delete_post_btn">
                                                    Delete
                                            </button>
                                        </form>
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
                    </form>
                        <!--Pagination-->
                        <div class="d-flex justify-content-between px-4 pb-4">
                            <p>Showing 0 to 0 of 0 entries</p>
                            <div>
                                <a href="#" class="btn">Previous</a>
                                <a href="#" class="btn">Next</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--post Table ends-->

                
                
            </div>
        </div>
        <!--Main Body ends-->
        <?php include('includes/footer.php'); ?>


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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"  />
	<link rel="stylesheet" href="layout/css/main.css" />
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
<a class="navbar-brand" href="main" style="color: var(--font-color);"><img width="40px" src="layout/images/logo.png"> XBASELEET</a>
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
<a class="dropdown-item" href="rdp" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-desktop fa-fw"></i> RDPs <span class="badge badge-primary"><span id="rdp"></span></span></a>
<a class="dropdown-item" href="cPanel" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-tools fa-fw"></i> cPanels <span class="badge badge-primary"><span id="cpanel"></span></span></a>
<a class="dropdown-item" href="shell" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-file-code fa-fw"></i> Shells <span class="badge badge-primary"><span id="shell"></span></span></a>
<!---	
<a class="dropdown-item" href="ssh" style="color: var(--font-color);"><span class="px-2"><i class="fab fa-linux"></i> SSH/WHM <span class="badge badge-primary">span id=""></span></span></a>
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
<a class="dropdown-item" href="mailer" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> Mailers <span class="badge badge-primary"><span id="span id="mailers"></span></span></a>
<a class="dropdown-item" href="smtp" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-envelope fa-fw"></i> SMTPs <span class="badge badge-primary"><span id="smtps"></span></span></a>
--->
</div>
</li>

<li class="nav-item dropdown mr-auto">
<a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-mail-bulk fa-sm pink-color"></i> Leads
</a>
<div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="leads" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-award"></i> 100% Validated Leads <span class="badge badge-primary"><span id="leads"></span></span></a>
<!---
<a class="dropdown-item" href="leads-1" style="color: var(--font-color);"><span class="px-2"><i class="fa fa-fire orange-color"></i> Email Only <span class="badge badge-primary">140</span></span></a>
<a class="dropdown-item" href="leads-2" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-passport"></i> Combo Email:Password <span class="badge badge-primary">0</span></span></a>
<a class="dropdown-item" href="leads-3" style="color: var(--font-color);"><span class="px-2"><i class="fab fa-battle-net"></i> Combo Username:Password <span class="badge badge-primary">0</span></span></a>
<a class="dropdown-item" href="leads-4" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-at"></i> Email Access <span class="badge badge-primary">2</span></span></a>
<a class="dropdown-item" href="leads-6" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-mobile-alt"></i> Phone Number Only <span class="badge badge-primary">20</span></span></a>
<a class="dropdown-item" href="leads-7" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-phone-square"></i> Combo Phone:Password <span class="badge badge-primary">3</span></span></a>
<a class="dropdown-item" href="leads-8" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-inbox"></i> Full Data <span class="badge badge-primary">0</span></span></a>
<a class="dropdown-item" href="leads-9" style="color: var(--font-color);"><span class="px-2"><i class="fab fa-facebook"></i> Social Media Data <span class="badge badge-primary">0</span></span></a>
---->

	 </div>
</li>


<li class="nav-item dropdown mr-auto">
<a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-friends fa-sm"></i> Accounts
</a>
<div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="accounts" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-comments-dollar"></i> premium/dating/shop<span class="badge badge-primary"><span id="accounts"></span></span></a>
<!---
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
--->
</div>
</li>


 <li class="nav-item dropdown mr-auto">
<a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-tie fa-sm"></i>USA Bank(Fullz Info)
</a>
<div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="banks" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-business-time"></i> Bank(Log Info)+Email Access<span class="badge badge-primary"><span id="banks"></span></span></a>
<!---
<a class="dropdown-item" href="business-2" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-mail-bulk"></i> Godaddy Webmail <span class="badge badge-primary">275</span></span></a>
<a class="dropdown-item" href="business-3" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-globe"></i> Office365 Webmail <span class="badge badge-primary">10362</span></span></a>
<a class="dropdown-item" href="business-4" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-envelope-open-text"></i> Rackspace Webmail <span class="badge badge-primary">1809</span></span></a>
---->
</div>
</li>


 <li class="nav-item dropdown mr-auto">
<a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-tie fa-sm"></i> Others
</a>
<div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="scampages" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-scams-time"></i> Scampages<span class="badge badge-primary"><span id="scampages"></span></span></a>
<a class="dropdown-item" href="tutorials" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-mail-bulk"></i> Tutorials <span class="badge badge-primary"><span id="tutorials"></span></span></a>

	<!---
<a class="dropdown-item" href="business-3" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-globe"></i> Office365 Webmail <span class="badge badge-primary">10362</span></span></a>
<a class="dropdown-item" href="business-4" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-envelope-open-text"></i> Rackspace Webmail <span class="badge badge-primary">1809</span></span></a>
    --->
<!---</div>
</li>

<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" role="button" style="color: var(--font-color);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fab fa-drupal text-primary fa-sm"></i> Requests
</a>
<div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="requests" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-user-plus"></i>
</span><span class="badge badge-primary"> 72</span></span></a>
  
</div>
</li> --->


<a class="nav-link" href="../seller/index.html" style="color: var(--font-color);">
<i class="cfas fa-user-secret text-primary fa-sm">
</i> 

</a>
</li>
</ul>

<ul class="navbar-nav profile">

<?php
$uid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
$q = mysqli_query($dbcon, "SELECT resseller FROM users WHERE username='$uid'") or die(mysqli_error());
$r         = mysqli_fetch_assoc($q);
$reselerif = $r['resseller'];
if ($reselerif == "1") {
    $uid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
    $q = mysqli_query($dbcon, "SELECT soldb FROM resseller WHERE username='$uid'") or die(mysqli_error());
    $r = mysqli_fetch_assoc($q);

    echo '<a class=“waves-effect waves-light” href=“../seller/index.html” style=“color: var(- -font-color); “> <span title=“Seller Panel”><span class =“px-2”><li class="fa fa-user-secret-circle"><span id="seller"></span></span></a></li>';
} else {
} ?>



<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell text-danger"></i> <span class="badge badge-success">0</span></a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: var(--font-color); background-color: var(--color-nav);">
<a class="dropdown-item" href="#" style="color: var(--font-color);">There is no new notifications</a> </div>
</li>

<li class="nav-item">
<a class="nav-link" href="addBalance" style="color: var(--font-color);" role="button" aria-haspopup="true" aria-expanded="false"><span class="badge badge-danger">
<span id="balance">
<span class="px-2"><i class="fa fa-plus"></i></span></span>
</a>
</li>

<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Ticket <span class="badge badge-success">0</span></a>
</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: var(--font-color); background-color: var(--color-nav);">

<a class="dropdown-item" href="tickets" style="color: var(--font-color);"><span class="px-2">My Tickets <span class="badge badge-success"><span id="tickets"></span></span></a>
<a class="dropdown-item" href="reports" style="color: var(--font-color);"><span class="px-2">My Reports <span class="badge badge-success"><span id="reports"></span></span></a>
<!---
<a class="dropdown-item" href="orders" style="color: var(--font-color);"><span class="px-2">Report Items</span></a>

<a class="dropdown-item" href="OpenTicket" style="color: var(--font-color);"><span class="px-2">New Ticket</span></a>
---->
</div>
</li>
<?php echo'
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$usrid.'
</a>';?>
<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: var(--font-color); background-color: var(--color-nav);">
<a class="dropdown-item" href="setting" style="color: var(--font-color);"><span class="px-2">Setting <i class="fa fa-cog"></i></span></a>

<a class="dropdown-item" href="orders" style="color: var(--font-color);"><span class="px-2">My Orders <i class="fa fa-shopping-cart"></i></span></a>
<a class="dropdown-item" href="addBalance" style="color: var(--font-color);"><span class="px-2">Add Balance <i class="fa fa-money-bill-alt"></i></span></a>
<a class="dropdown-item" href="logout" style="color: var(--font-color);"><span class="px-2">Logout <i class="fa fa-door-open"></i></span></a>
<!---
<a class="dropdown-item" href="seller-profile" style="color: var(--font-color);"><span class="px-2">Profile <i class="fa fa-user"></i></span></a>
---->
</div>
</li>

</ul>

</div>
</nav>
<style>
<Div id="mainDiv>
                      
                        <table class="table table-striped mt-4 ">
                            <thead>
                              <tr>
                                  <th>id</th>
                                  <th>Balance</th>
                                  <th>Title</th>
                                  <th>Info</th>
                                  <th>Details</th>
                                  <th>Price</th>
                                  <th>Edit</th>
                                  <th>Delete</th>
                              </tr>
                            </thead>
                            <tbody>
                            
                            
                            
                            
                            
                            
                            
                            
<script type="text/javascript">
$('#filterbutton').click(function () {$("#table tbody tr").each(function() {var ck1 = $.trim( $(this).find("#leads_country").text().toLowerCase() );var ck2 = $.trim( $(this).find("#leads_about").text().toLowerCase() );var ck3 = $.trim( $(this).find("#leads_seller").text().toLowerCase() ); var val1 = $.trim( $('select[name="leads_country"]').val().toLowerCase() );var val2 = $.trim( $('input[name="leads_about"]').val().toLowerCase() );var val3 = $.trim( $('select[name="leads_seller"]').val().toLowerCase() ); if((ck1 != val1 && val1 != '' ) || ck2.indexOf(val2)==-1 || (ck3 != val3 && val3 != '' )){ $(this).hide();  }else{ $(this).show(); } });$('#filterbutton').prop('disabled', true);});$('.filterselect').change(function () {$('#filterbutton').prop('disabled', false);});$('.filterinput').keyup(function () {$('#filterbutton').prop('disabled', false);});
function buythistool(id){
  bootbox.confirm("Are you sure?", function(result) {
        if(result ==true){
      $.ajax({
     method:"GET",
     url:"buytool.php?id="+id+"&t=leads",
     dataType:"text",
     success:function(data){
         if(data.match(/<button/)){
		 $("#leads"+id).html(data).show();
         }else{
            bootbox.alert('<center><img src="files/img/balance.png"><h2><b>No enough balance !</b></h2><h4>Please refill your balance <a class="btn btn-primary btn-xs"  href="addBalance.html" onclick="window.open(this.href);return false;" >Add Balance <span class="glyphicon glyphicon-plus"></span></a></h4></center>')
         }
     },
   });
       ;}
  });
}
function openitem(order){
  $("#myModalLabel").text('Order #'+order);
  $('#myModal').modal('show');
  $.ajax({
    type:       'GET',
    url:        'showOrder'+order+'.html',
    success:    function(data)
    {
        $("#modelbody").html(data).show();
    }});

}

</script>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body" id="modelbody">


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
Give feedback
