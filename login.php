<?php
  ob_start();
  session_start();
  include "includes/config.php";
  date_default_timezone_set('UTC');


  if(isset($_SESSION['sname']) and isset($_SESSION['spass'])){
   header("location: main");
   exit();
}
?>
  <!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="alfacoins-site-verification" content="5ef8c2279aa605ef8c2279aa965ef8c2279aacb_ALFAcoins">
<meta name="revisit-after" content="2 days">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<script src="/cdn-cgi/apps/head/5OOZijtrf_Bpx-OYIJIWKuxGuQM.js"></script><link rel="shortcut icon" href="../../favicon.ico" />
<title>Login , Odin.to </title>
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
  
<h4> <b><span class='glyphicon glyphicon-fire'></span> Xbaseleet Shop - Login</b> </h4>
<div id='errorbox'>

</div>

<form method='post' action='loginController.php' class='ajax'>

    <input type='text' id='user' name='user' class='form-control input-sm chat-input' placeholder='Username' required/>
    <br>
    
    <input type='password' id='pass' name='pass' class='form-control input-sm chat-input' placeholder='Password' required/>
    <h6><a onclick="logindiv(3,'Forget - Jerux SHOP','forget.html',0);"  onMouseOver="this.style.cursor='pointer'">[Forgot your password ?]</a></h6>

    <br>
   <div class="form-group2">
<button type="submit" id="divButton" name="login" class="btn btn-primary btn-lg waves-effect waves-light">Login</button>
    </div>
</form>
<br>
<br>
<div class='wrapper'>
    <button type='button' class='btn btn-default btn-xs' onclick="logindiv(2,'Signup - Jerux SHOP','signup',0);">Don`t have an account? Sign Up</button>
</div>

    
<script type="text/javascript">
          $('form.ajax').on('submit' , function() {
              $("#divButton").prop('disabled', true);
                var that = $(this),
                    url = that.attr('action');
                    type = that.attr('method');
                    data = {};
                that.find('[name]').each(function(main , value) {
                    var that = $(this),
                        name = that.attr('name'),
                        value = that.val();

                    data[name] = value;

                })
                $.ajax({
                    url: url,
                    type: type,
                    data: data,
                    success: function(response){
                        var response = JSON.parse(response);
                         $("#errorbox").html(response['errorbox'] ).show();

                    if(response['state'] == 0) {             $("#divButton").prop('disabled', false);}
                    if (response['url'] != 0){
                        if (response['url'] == 3){setTimeout(function(){ logindiv(4,'Verification - Jerux SHOP','login',0); }, 1500);}
                        else if (response['url'] == 1){setTimeout(function(){ logindiv(1,'Login - Jerux SHOP','verification.html',0); }, 1500);}
                        else {setTimeout(function(){ window.location = response['url']; }, 3000);}
                     }

                    }
                });

                return false;

            });
            </script>
