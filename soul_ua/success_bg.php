<?php
// the message
$msg = "Success, registration successfull";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("avinash.haina@gmail.com","IAMAI",$msg, 'From: <avinashwarnwal.com>');
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
                    <a class="navbar-brand" href="index_bg.php">নিজেকে নিবন্ধন করুন!</a>
                </div>
            </div>
        </div>
        <!--Header end-->
        <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h3 align="center">সাফল্য ....! নিবন্ধন করার জন্য আপনাকে ধন্যবাদ.</h3><hr>
                    <p align="center">ক্লিক<a href="index_bg.php">এখানে</a>নতুন নিবন্ধনের জন্য .</p>
                </div>
            </div>
        </div>
    </body>
</html>