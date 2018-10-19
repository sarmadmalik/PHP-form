<?php
if(isset($_POST['submit']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "gsarmadmalik@gmail.com";
$headers = "From: $name<$email>";
$message = "Name: $name \n\nEmail: $email \n\nMessage: $message";

if(mail($to, $name, $message, $headers))
{echo "Email sent";}
else
{
echo "error please try again";
}

}
?>

<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>patient care</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="css/font-awesome.min.css">
 <!--   <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrapValidator.css">
-->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
<!--    <link rel="stylesheet" href="css/main.css">-->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body data-spy="scroll" data-target=".navbar ">
    <header>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle Navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                </div>
                <!--navbar-header-->
                <div class="navbar-collapse collapse">
                    <ul class="nav nav-justified">
                        <li><a data-scroll href="#slider">Home</a></li>
                        <li><a data-scroll href="#about">About</a></li>
                        <li><a data-scroll href="#categories">Categories</a></li>
                        <li><a data-scroll href="#seephotos">Photos</a></li>
                        <li><a data-scroll href="#Opientment">Get Appointment</a></li>
                        <li><a data-scroll href="#support">Support</a></li>
                    </ul>
                </div>
                <!--navbar-collapse-->
            </div>
            <!--container-->
        </nav>
    </header>


<form class="form" action="" method="post">
  <h2>CONTACT US</h2>
  <p type="Name:"><input placeholder="Write your name here.." name="name"></p>
  <p type="Email:"><input placeholder="Let us know how to contact you back.." name="email"></p>
  <p type="Message:"><input placeholder="What would you like to tell us.." name="message"></p>
    <p><input type="submit" name="submit" value="Send"></p>

</form>


    <!--footer-->
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/smooth-scroll.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/bootstrapValidator.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
