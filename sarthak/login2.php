<?php
  session_start(); 
?>
<!DOCTYPE html>
<html>
<head>

<link href="bootstrap.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="MyFontsWebfontsKit.css">
<link rel="stylesheet" type="text/css" href="museofont.css">


<style>
@import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);
@import url(http://fonts.googleapis.com/css?family=Nova+Flat);
@import url(http://fonts.googleapis.com/css?family=Cinzel);
body { padding-top: 150px; 
	   background-color: #e8f0f5;
	   font-size: 18px;
	   font-family: serif;
	}
.navbar-brand {
	margin-left: -0px;
	padding: 0;

}
.navbar-brand a {
	padding: 0;
	color: #fff;
	font-size: 100%;
	margin-left: -0px;
	font-weight: normal;
	/*font-family: HelveticaLTStdLight,Arial,Helvetica,sans-serif;*/
	font-family: 'Exo', sans-serif;
	font-size: 50px;
	text-shadow: 2px 2px black;

}
.navbar-brand a:hover {
	text-decoration: none;
	color:#f0bf00;
 transition: color .15s linear;
 -webkit-transition: color .15s linear;
 -moz-transition: color .15s linear;
}
.navbar-brand a:focus {
	outline: none;
}
.navbar-inverse{
	background-repeat: repeat;
	background-color: #0973B9;
}
#menu-main {
	margin-top: 1.125em;
}
ul#menu-main > li > a {
	font-family: sans-serif;
	font-weight: normal;
	font-size: 100%;
	color: #fff;
}
ul#menu-main > li > a:hover {
	background: #f0bf00;
	padding: 9px 15px;
}
.navbar-inverse .brand, .navbar-inverse .nav > li > a {
	text-shadow: none;
}

/*.body{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: 0px;
	width: auto;
	height: auto;
	/*background-image: url(http://ginva.com/wp-content/uploads/2012/07/city-skyline-wallpapers-008.jpg);*/
	/*background-image: url(http://cdn.twitrcovers.com/wp-content/uploads/2013/02/Programming-Code-l.jpg);*/
	background-color: #1dd496;
	-webkit-filter: blur(5px);
	z-index: -1;
}*/

.header{
	position: absolute;
	/*top: calc(50% - 35px);
	left: calc(50% - 255px);*/
	top: 10px;
	left: 10px;
	z-index: 2;
}

.bar{
	position: absolute;
	/*top: calc(50% - 35px);
	left: calc(50% - 255px);*/
	top: 50px;
	left: 10px;
	z-index: 2;
}

.help{
	position: absolute;
	/*top: calc(50% - 35px);
	left: calc(50% - 255px);*/
	top: 140px;
	left: 10px;
	z-index: 2;
}

.header div{
	float: left;
	color: #fff;
	font-family: sans-serif;
	font-size: 35px;
	font-weight: 200;
}

.header div span{
	color: #5379fa !important;
}



.dtbase{
	position: absolute;
	top: 300px;
	left: 10px;
	z-index: 2;
	padding: 10px;
	
}

.output2{
	position: absolute;
	top: 600px;
	left: 300px;
	z-index: 2;
	padding: 10px;
	width: auto;
	height: auto;
}

.output1{
	position: absolute;
	top: 295px;
	left: 575px;
	z-index: 2;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 17px;
	width: auto;
	height: auto;
}
.menu{
	position: absolute;
	top: 70px;
	left: 10px;
	z-index: 2;
	color: #ffffff;
	}
/*.button {
border-top: 1px solid #258ace;
background: #258ace;
background: -webkit-gradient(linear, left top, left bottom, from(#258ace), to(#258ace));
background: -webkit-linear-gradient(top, #258ace, #258ace);
background: -moz-linear-gradient(top, #258ace, #258ace);
background: -ms-linear-gradient(top, #258ace, #258ace);
background: -o-linear-gradient(top, #258ace, #258ace);
padding: 11px 22px;
-webkit-border-radius: 0px;
-moz-border-radius: 0px;
border-radius: 0px;
color: #ffffff;
font-size: 12px;
text-decoration: none;
vertical-align: middle;
text-transform:uppercase;
}
.button:hover {
border-top-color: #5dade2;
background: #5dade2;
color: #ffffff;
text-decoration:none;
}
button:active {
border-top-color: #5dade2;
background: #5dade2;
}*/	
.login{
	position: relative;
	top: 0px;
	left: 300px;
	
	padding: 10px;
	z-index: 2;
}

.login input[type=text]{
	width: 250px;
	height: 30px;
	background-color: white;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #0973B9;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 10px;
}


.login input[type=password]{
	width: 250px;
	height: 30px;
	background-color: white;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 10px;
	margin-top: 10px;
}


.login input[type=submit]{
	width: 260px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 10px;
	margin-top: 10px;
}


.login input[type=submit]:hover{
	opacity: 0.8;
}

.login input[type=submit]:active{
	opacity: 0.6;
}

.login input[type=reset]{
	width: 260px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=reset]:hover{
	opacity: 0.8;
}

.login input[type=reset]:active{
	opacity: 0.6;
}
.login input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=button]:focus{
	outline: none;
}

::-webkit-input-placeholder{
   color: #0973B9;
   opacity:0.2;
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
#log{
width: 500px;
height: 400px;
text-align: center;
border: 0px solid black;
border-radius: 20px;
background-color: #F87431;
padding: 0px;
}
#logx p{
width: 500px;
text-align: center;
border: 0px solid black;
border-radius: 0px;
background-color: #f0bf00;
padding: 0px;
}
</style>

    <script src="js/prefixfree.min.js"></script>

</head>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
 <div class="container">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <h1 class="navbar-brand"><a href="#top"><img src="logo_mysql.png" width="100" height="100">&nbsp;EasySQL</a></h1>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right" id="menu-main">
      <li><a title="Adote" href="head.html"><b>Home</b></a></li>
      <li><a title="Pets" href="#container3"><b>Tools</b></a></li>
      <li><a title="Instituicoes" href="#instituicoes"><b>Help</b></a></li>
      <li><a title="Contato" href="#contato"><b>About</b></a></li>
      <li><a title="Contato" href="logout.php"><b>Logout</b></a></li>
    </ul>
  </div>
  
  <!-- /.navbar-collapse -->
</nav>
<body>
<div class="container">
			<div id="logx">
				<p><img src="lock26.png" width="20">&nbsp;LOGIN</p></div>
				<div class="login" id="log">
				<form action="" method="POST">
				Host:<input type="text" placeholder="Host" name="host">

				</br>Username<input type="text" placeholder="Username" name="user"><br>
				
				Password<input type="password" placeholder="Password" name="password"><br>
				<input type="submit" value="Login" name="s">
		</div>

  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
  <div class="output2">
<?php
if(isset($_POST['s']))
{
$username=$_POST['user'];
$_SESSION['user']=$username;
$pwd=$_POST['password'];
$_SESSION['password']=$pwd;
$host=$_POST['host'];
$_SESSION['host']=$host;
echo "<script>parent.location.href='head.php'</script>";

/*$con=mysql_connect($host,$username,$pwd);
if(!$con) echo"not connected";
else {
$table="login";
if(mysql_num_rows(mysql_query("SHOW TABLES LIKE '".$table."'"))==1) 
    echo "Table exists";
else {
		$exe=mysql_query("create table login(Host char(60), User char(16), Password char(41))");
		$exe2=mysql_query("insert into login(Host, User, Password) values ($host,'$username','$pwd')");
		}
echo "<script>document.getElementById('log').innerHTML='Connection Successful';</script>";

}*/
}
?>

</div>
</div>
</body>
</html>
