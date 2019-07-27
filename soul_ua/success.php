<?php
// the message
$msg = "Success, registration successfull";

// send email
mail("intern3tgovernance@gmail.com","IAMAI",$msg);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <title>Success |</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <!-- Header -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Register yourself!</a>
                </div>
            </div>
        </div>
        <!--Header end-->
        <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h3 align="center">Success....! Thank you for Registering.</h3><hr>
                    <p align="center">Click <a href="index.php">here</a> for new registration..</p>
                </div>
            </div>
        </div>
    </body>
</html>