<?php
  session_start(); 
?>
<!DOCTYPE html>
<html>
<head>

  <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Awesome Flat Login Form" />
  <meta name="keywords" content="Login, Flat, HTML5, CSS3" />
  <meta name="author" content="Wahid Anggara - LunarPixel" />
  <title>Login Form</title>

  <link href="css/login_style.css" rel="stylesheet" type="text/css">
  <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="css/font-awesome.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="MyFontsWebfontsKit.css">



  <link rel="shortcut icon" href="img/favicon.ico"/>
  <link rel="apple-touch-icon" href="img/favicon.png"/>

<style>
/*
 *
 * Awesome Flat Login Form
 * http://lunarpixel.deviantart.com/
 * Copyright 2014, LunarPixel
 *
 */

@import "http://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css";
@import url(http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,300,400,700);

@import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

body {
  font: 13px/20px "Open Sans", Tahoma, Verdana, sans-serif;
  color: #a7a599;
  background: #0973B9;
}

/* === Form === */
.form {
    width: 100%;
}

.form .field {
    position: relative;
    margin: 0 50px;
}

.form .field i {
    font-size: 14px;
    left: 0px;
    top: 0px;
    position: absolute;
    height: 44px;
    width: 44px;
    color: #f7f3eb;
    background: #676056;
    text-align: center;
    line-height: 44px;
    transition: all 0.3s ease-out;
    pointer-events: none;
}

/* === Logo === */
.logo {
  text-align: center;
  	font-family: 'Exo', sans-serif;
	font-size: 50px;
	text-shadow: 2px 2px black;
	margin: 100px auto 30px auto;
	color: #fff;
	
}
.logo img{
  vertical-align:middle;
}

/* === Login === */
.login {
  position: relative;
  margin: 0 auto;
  width: 370px;
  height: 415px;
  background: white;
  border-radius: 3px;
}

.login:before {
  content: '';
  position: absolute;
  top: -8px;
  right: -8px;
  bottom: -8px;
  left: -8px;
  z-index: -1;
  background: rgba(255, 255, 255, 0.1);
  border-radius: 4px;
}

.login h1 {
  line-height: 55px;
  font-size: 15px;
  font-weight: bold;
  font-family: 'Open Sans', sans-serif;
  text-transform: uppercase;
  color: #fff;
  text-align: center;
  background: #f2672e;

  -webkit-border-top-left-radius: 3px;
  -webkit-border-top-right-radius: 3px;
  -moz-border-radius-topleft: 3px;
  -moz-border-radius-topright: 3px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}

.login p:first-child {
  margin-top: 30px;
}

.login p.remember {
  float: left;
}

.login p.remember label {
  color: #a7a599;
  font-size: 12px;
  cursor: pointer;
}

.login p.submit {
  text-align: center;
}

.login p.forgot {
  float: right;
  margin-right: 50px;
}

.login p.forgot a {
  color: #a7a599;
  font-size: 12px;
  text-decoration: none;
  font-style: italic;
  transition: all 0.3s ease-out;
}

.login p.forgot a:hover {
  color: #f2672e;
}

/* === Input Form === */
::-webkit-input-placeholder {
  color: #ded9cf;
  font-family:'Open Sans';
}

:-moz-placeholder {
  color: #ded9cf !important;
  font-family:'Open Sans';
}

.form input[type=text],
.form input[type=password] {
    font-family: 'Open Sans', Calibri, Arial, sans-serif;
    font-size: 12px;
    font-weight: 400;
    padding: 10px 15px 10px 55px;
    position: relative;
    width: 200px;
    height: 24px;
    color: #676056;
    border: none;
    background: #f7f3eb;
    color: #777;
    transition: color 0.3s ease-out;
}

.form input[type=text] {
    margin-bottom: 15px;
}

.form input[type=text]:hover ~ i,
.form input[type=password]:hover ~ i {
    color: #ded9cf;
}

.form input[type=text]:focus ~ i,
.form input[type=password]:focus ~ i {
    color: #f2672e;
}

.form input[type=text]:focus,
.form input[type=password]:focus,
.form button[type=submit]:focus {
    outline: none;
}

.form input[type=submit] {
  margin-top: 15px;
  width: 270px;
  text-align: center;
  font-size: 14px;
  font-family: 'Open Sans',sans-serif;
  font-weight: bold;
  padding: 12px 0;
  letter-spacing: 0;

  -webkit-box-shadow: inset 0px 0px 0px 0px rgba(204,86,15,1);
  -moz-box-shadow:    inset 0px 0px 0px 0px rgba(204,86,15,1);
  box-shadow:         inset 0px 0px 0px 0px rgba(204,86,15,1);

  color: #fff;
  background-color: #f2672e;
  text-shadow: none;
  text-transform: uppercase;
  border: none;
  cursor: pointer;
  position: relative;
  margin-bottom: 20px;
  -webkit-animation: shadowFadeOut 0.4s;
  -moz-animation: shadowFadeOut 0.4s;
}

.form input[type=submit]:hover,input[type=submit]:focus{
  color: #fff;
  -webkit-box-shadow: inset 0px 46px 0px 0px rgba(204,86,15,1);
  -moz-box-shadow:    inset 0px 46px 0px 0px rgba(204,86,15,1);
  box-shadow:         inset 0px 46px 0px 0px rgba(204,86,15,1);
  -webkit-animation: shadowFade 0.4s;
  -moz-animation: shadowFade 0.4s;
}

@keyframes shadowFade {
    0% {
      -webkit-box-shadow: inset 0px 0px 0px 0px rgba(204,86,15,1);
      -moz-box-shadow:    inset 0px 0px 0px 0px rgba(204,86,15,1);
      box-shadow:         inset 0px 0px 0px 0px rgba(204,86,15,1);
      color: #fff;
    }
    100% {
      -webkit-box-shadow: inset 0px 46px 0px 0px rgba(204,86,15,1);
      -moz-box-shadow:    inset 0px 46px 0px 0px rgba(204,86,15,1);
      box-shadow:         inset 0px 46px 0px 0px rgba(204,86,15,1);
      color: #fff;
    }
}

@keyframes shadowFadeOut {
    0% {
      -webkit-box-shadow: inset 0px 46px 0px 0px rgba(204,86,15,1);
      -moz-box-shadow:    inset 0px 46px 0px 0px rgba(204,86,15,1);
      box-shadow:         inset 0px 46px 0px 0px rgba(204,86,15,1);
      color: #fff;
    }
    100% {
      -webkit-box-shadow: inset 0px 0px 0px 0px rgba(204,86,15,1);
      -moz-box-shadow:    inset 0px 0px 0px 0px rgba(204,86,15,1);
      box-shadow:         inset 0px 0px 0px 0px rgba(204,86,15,1);
      color: #fff;
    }
}

@-webkit-keyframes shadowFade {
    0% {
      -webkit-box-shadow: inset 0px 0px 0px 0px rgba(204,86,15,1);
      -moz-box-shadow:    inset 0px 0px 0px 0px rgba(204,86,15,1);
      box-shadow:         inset 0px 0px 0px 0px rgba(204,86,15,1);
      color: #fff;
    }
    100% {
      -webkit-box-shadow: inset 0px 46px 0px 0px rgba(204,86,15,1);
      -moz-box-shadow:    inset 0px 46px 0px 0px rgba(204,86,15,1);
      box-shadow:         inset 0px 46px 0px 0px rgba(204,86,15,1);
      color: #fff;
    }
}

@-webkit-keyframes shadowFadeOut {
    0% {
      -webkit-box-shadow: inset 0px 46px 0px 0px rgba(204,86,15,1);
      -moz-box-shadow:    inset 0px 46px 0px 0px rgba(204,86,15,1);
      box-shadow:         inset 0px 46px 0px 0px rgba(204,86,15,1);
      color: #fff;
    }
    100% {
      -webkit-box-shadow: inset 0px 0px 0px 0px rgba(204,86,15,1);
      -moz-box-shadow:    inset 0px 0px 0px 0px rgba(204,86,15,1);
      box-shadow:         inset 0px 0px 0px 0px rgba(204,86,15,1);
      color: #fff;
    }
}

@-moz-keyframes shadowFade {
    0% {
      -webkit-box-shadow: inset 0px 0px 0px 0px rgba(204,86,15,1);
      -moz-box-shadow:    inset 0px 0px 0px 0px rgba(204,86,15,1);
      box-shadow:         inset 0px 0px 0px 0px rgba(204,86,15,1);
      color: #fff;
    }
    100% {
      -webkit-box-shadow: inset 0px 46px 0px 0px rgba(204,86,15,1);
      -moz-box-shadow:    inset 0px 46px 0px 0px rgba(204,86,15,1);
      box-shadow:         inset 0px 46px 0px 0px rgba(204,86,15,1);
      color: #fff;
    }
}

@-moz-keyframes shadowFadeOut {
    0% {
      -webkit-box-shadow: inset 0px 44px 0px 0px rgba(204,86,15,1);
      -moz-box-shadow:    inset 0px 44px 0px 0px rgba(204,86,15,1);
      box-shadow:         inset 0px 44px 0px 0px rgba(204,86,15,1);
      color: #fff;
    }
    100% {
      -webkit-box-shadow: inset 0px 0px 0px 0px rgba(204,86,15,1);
      -moz-box-shadow:    inset 0px 0px 0px 0px rgba(204,86,15,1);
      box-shadow:         inset 0px 0px 0px 0px rgba(204,86,15,1);
      color: #fff;
    }
}

.form input[type="checkbox"] {
    display:none;
}

.form input[type="checkbox"] + label span {
    display:inline-block;
    width:16px;
    height:16px;
    margin: -2px 4px 0 50px;
    vertical-align:middle;
    background:url("https://www.dropbox.com/sh/3kmitwavpcm721g/rDv1UvRmhG/checkbox.png?dl=1") left top no-repeat;
    cursor:pointer;
}
.form input[type="checkbox"]:checked + label span {
    background:url("https://www.dropbox.com/sh/3kmitwavpcm721g/rDv1UvRmhG/checkbox.png?dl=1") -16px top no-repeat;
}

/* === Copyright === */
.copyright {
  margin-top: 30px;
  text-align: center;
}

.copyright p, a {
  color: #828078;
  font-size: 12px;
  text-decoration: none;
  transition: color 0.3s ease-out;
}

.copyright a:hover {
  color: #f2672e;
}
.header{
	position: relative;
	/*top: calc(50% - 35px);
	left: calc(50% - 255px);*/
	top: -0px;;
	left: 0px;
	z-index: 2;
	font-family: Museo-500;
	font-size: 32px;
	text-align: left;
	border-bottom: 3px dotted black;
	border-radius: 0px;
	padding: 10px;

}
.header img{
height: 80px;
width: 80px;
border: 0px solid black;
border-radius: 40px;
padding: 10px;
background-color: white;
}
</style>
<script>
function myfunction() {
	alert("All login are directly handled by MySQL server. By default super-user login details for MySQL are - 'localhost', 'root' (with no password). Yes, the password field is empty. For more info visit: http://dev.mysql.com/");
	}
</script>
	</head>


<body>
<div class="logo"><img src="images/flatlogo.png" width="300" height="150"></div>
  <div class="login"> <!-- Login -->
    <h1>Login - MySQL</h1>

    <form class="form" method="post" action="">
	 <p class="field">
        <input type="text" name="host" placeholder="Host"/>
        <i class="fa fa-desktop"></i>
      </p>
      <p class="field">
        <input type="text" name="user" placeholder="Username"/>
        <i class="fa fa-user"></i>
      </p>

      <p class="field">
        <input type="password" name="password" placeholder="Password"/>
        <i class="fa fa-lock"></i>
      </p>
	 

      <p class="submit"><input type="submit" name="s" value="Login"></p>


      <p class="forgot">
        <a href="#" onclick="myfunction()">Help!</a>
      </p>

    </form>
<!--/ Login-->
<?php
if(isset($_POST['s']))
{
$username=$_POST['user'];
$_SESSION['user']=$username;
$pwd=$_POST['password'];
$_SESSION['password']=$pwd;
$host=$_POST['host'];
$_SESSION['host']=$host;
echo "<script>parent.location.href='index.php'</script>";
}
?>