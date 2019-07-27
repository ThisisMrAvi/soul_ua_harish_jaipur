<?php
require("includes/common.php");

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Signup</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <!-- Header -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">নিজেকে নিবন্ধন করুন!</a>
                </div>
            </div>
        </div>
        <!--Header end-->
        <div class="container-fluid decor_bg" id="content">
            <div class="row">
                <div class="container">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <form  action="signup_script.php" method="POST" accept-charset="UTF-8">
                            <div class="form-group">
                                <input class="form-control" placeholder="নাম" name="name" pattern="[A-Za-z-0-9]+\s[A-Za-z-'0-9]+" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="সঠিক ইমেইল এড্রেস প্রদান করুন"  name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                                <?php
                                if(isset($_GET["m1"])){
                                  echo $_GET['m1'];
                                }
                                ?>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="পাসওয়ার্ড (সর্বনিম্ন 6 অক্ষর)" pattern=".{6,}" name="password" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="বৈধ ফোন নম্বর প্রবেশ করান (উদা: 9955599555)" maxlength="10" size="10" name="contact" pattern="[7-9][0-9]{9}" required>
                                <?php
                                if(isset($_GET["m2"])){
                                  echo $_GET['m2'];
                                }
                                ?>
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="শহর" name="city" required>
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="ঠিকানা" name="address" required>
                            </div>
                            <div class="form-group">
                                <input  type="number" class="form-control"  placeholder="আধার নম্বর" name="aadhar" maxlength="12" size="12" required>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">জমা দিন</button>
                        </form>
                        <br>
                        <br>
                        <div id="revLang">
                            <ul>
                                <ul id="revSelect" style="display: block;">
                                    <li value="en"><a href="index.php">English</a></li>
                                    <li value="hi"><a href="index_hi.php">हिन्दी</a></li>
                                    <li value="mr"><a href="index_bg.php">বাংলা</a></li>
                                </ul>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

