<?php
$dbcon = mysqli_connect("localhost","xbase_leet","xbase_leet","xbase_leet") or die('enable connection'); 
	
$results = $conn->query("SELECT * FROM users");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
        <title>Fetch Data From MySQL Database using AJAX in PHP</title>
    <head>
    <body>
        <div class="container">
            <h4>User data</h4>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Created at</th>
                </tr>
                <tbody id="data">

                </tbody>
            </table>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	    <script>
$(document).ready(function () {
    $.ajax({
        type: "GET",
        url: "data.php",
        dataType: "html",
        success: function (data) {
            $("#data").html(data);

        }
    });
});
 </script>


</html>
