<?php
include('conn.php');
if(isset($_SESSION['host']))
{
$con=mysql_connect($host,$user,$pass);
$z=NULL;
if(isset($_GET['dbid']))
$z=$_GET['dbid'];
else $z="test";
mysql_select_db($z);
if(!$con) echo "<script>alert('Login Error: Wrong host, username or password');parent.location.href='login.php'</script>";
}
else echo "<script>alert('Access Denied');parent.location.href='login.php'</script>" 
?>

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
	   background-color: #FF910D;
	   font-size: 18px;
	   font-family: serif;
	}
.navbar-brand {
	margin-left: -0px;
	padding: 0;
	color: #fff;


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
	background-color: black;
}
#menu-main {
	margin-top: 1.125em;
	color: #fff;
	font-family: sans-serif;
	font-weight: normal;
	font-size: 100%;
	text-align: right;
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
.container3{
background-repeat: repeat;
background-color: #e8f0f5;
width: 100%;
}
#container2 {
  text-align: justify;
  border: 0px solid black;
  font-size: 30px; /* IE 9/10 don't like font-size: 0; */
  min-width: 600px;
  /*font-family: 'Cinzel', serif;*/
  	font-family: Museo-500;

}
#container2 div {
  width: 230px;
  height: 230px;
  text-align: center;
  display: inline-block;
  border: 0px solid black;
  border-radius: 115px;
  padding: 5px;
  background-color: white;
}
#container2 #txt {
  width: auto;
  height: auto;
  text-align: justify;
  display: inline-block;
  border: 0px solid black;
  border-radius: 0px;
  background-color: transparent;
  padding-top: 25px;
  font-size: 21px;
  line-height: 10%;

}
#container2 #txt2 {
  width: auto;
  height: auto;
  text-align: justify;
  display: inline-block;
  border: 0px solid black;
  border-radius: 0px;
  background-color: transparent;
  font-size: 21px;
}

#container2 div a:link {
  color: #0973B9;
  text-decoration: none;
}
#container2 div a:visited {
  color: #0973B9;
  text-decoration: none;
}
#container2 div a:hover {
  color: #f0bf00;
  text-decoration: none;
}


#container2 p {
  width: 230px;
 padding-bottom: 50px;
  text-align: center;
  display: inline-block;
  font-size: 18px;
  	font-family: Museo-300;
    text-align: center-left;
}
#container2 p a:link{
  color: #fff;
  width: 20px;
  text-decoration: none;
  border: 1px solid black;
  border-radius: 15px;
  background-color: #0973B9;
    padding: 5px 30px;
}
#container2 p a:visited{
  color: #fff;
  text-decoration: none;
  border: 1px solid black;
  border-radius: 15px;
  background-color: #0973B9;
}
#container2 p a:hover{
  color: #fff;
  text-decoration: none;
  border: 1px solid black;
  border-radius: 15px;
  background-color: #f0bf00;

}
#container2:after {
  content: '';
  width: 100%; /* Ensures there are at least 2 lines of text, so justification works */
  display: inline-block;
}
.header{
	position: relative;
	/*top: calc(50% - 35px);
	left: calc(50% - 255px);*/
	top: 0px;;
	left: 0px;
	z-index: 2;
	font-family: Museo-500;
	font-size: 32px;
	text-align: left;
	border-bottom: 3px dotted black;
	border-radius: 0px;
	padding-bottom: 10px;

}
.header img{
height: 80px;
width: 80px;
border: 0px solid black;
border-radius: 40px;
padding: 10px;
background-color: white;
}
input[type=submit]{
	width: 360px;
	height: 50px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 10px;
	color: black;
	font-family: 'Exo', sans-serif;
	font-size: 25px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
	
}


input[type=submit]:hover{
	opacity: 0.8;
}

input[type=submit]:active{
	opacity: 0.6;
}
.clip-circle{
 background:url("sarthak.jpg") no-repeat;
  height:480px;
  width:480px;
  border-radius:50%;
  overflow:hidden;
  margin:auto;
}

</style>
</head>
<!--******************* Navbar *******************-->

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
      <li><a title="about" href="#about"><b>About</b></a></li>
      <li><a title="Contato" href="logout.php"><b>Logout</b></a></br></li>
		</br><b>User: <?php echo $user."@".$host; ?></b>
	</ul>
  </div>
  
  <!-- /.navbar-collapse -->
</nav>
</div>

<div class="container">
</br>
<div class="header">
<a href="head.php"><img src="arm1.png" height="30" width="30"></a>&nbsp;Welcome To EasySQL!</div>
<?php
//echo "You are connected to MySQL ".mysql_get_server_info()." with the user $user@$host.";
?>
<div id="container2">
 </br><div></br><a href="#gstarted"><img src="start.png" width="125"></a></div>
	<div></br><a href="#tools"><img src="tools.png" width="125"></a></div>
	<div></br><a href="user.php"><img src="users.png" width="150"></a></div>
	<div></br><a href="new.php"><img src="help1.png" width="125"></a></div>
</div>
<div id="container2">
 <p><b></br>Getting Started</b></a></br>Confused where to start? Few of our guidelines will help you around EasySQL and its tools.</br></br><a href="#gstarted">&nbsp;&nbsp;Enter&nbsp;&nbsp;</a></p>
 <p><b></br>Tools</b></a></br>It contains utilities for MySQL administration incl. SQL Parser, Database & Table editor etc.<br></br><a href="#container3">&nbsp;&nbsp;Enter&nbsp;&nbsp;</a></p>
 <p><b></br>User Management</b></br>You require appropriate privileges to Add, Delete and manipulate MySQL users. </br></br><a href="user.php">&nbsp;&nbsp;Enter&nbsp;&nbsp;</a></p>
  <p><b>Help</b></br>Click this to help you with a few basic SQL command syntax and to know more about EasySQL.<br></br><a href="tables2.php">&nbsp;&nbsp;Enter&nbsp;&nbsp;</a></p>
</div>
</div>
<div class="container3"  id="gstarted">
<hr style="height:2em; border-top: 10px solid black; top: -10px;"/>
<div class="container">
<div class="header">
			<a href="head.php"><img src="start.png" width="50"></a>&nbsp;EasySQL Features</div>
<div id="container2">
 </br><div></br><img src="mysql-logo.png" width="125"></a></div>
	<div></br><img src="ui.png" width="125"></a></div>
	<div></br><img src="complex.png" width="125"></a></div>
</div>
<div id="container2">
<b><i>
<p style="font-size:25px;">MYSQL SUPPORT</p>
<p style="font-size:25px;"></br>ATTRACTIVE GUI</p>
<p style="font-size:25px;">LESS COMPLEXITY</p>
</i></b>
</div>

</div>
<hr style="height:2em; border-bottom: 10px solid black; top: 0px;"/>

</div>
</br>
<div id="tools">
<div class="container">
<div class="header">
			<a href="head.php"><img src="tools.png" width="50"></a>&nbsp;Tools</div>
<div id="container2">
 </br><div></br><a href="project2.php"><img src="code4.png" width="125"></a></div>
	<div></br><a href="db.php"><img src="data3.png" width="125"></a></div>
	<div></br><a href="new.php"><img src="tables.png" width="125"></a></div>
		<div></br><a href="tables2.php"><img src="addtable.png" width="125"></a></div>
</div>
<div id="container2">
 <p><b></br>SQL Parser</b></a></br>For executing commands and queries in MySQL & displaying the respective output or error.</br></br><a href="project2.php">&nbsp;&nbsp;Enter&nbsp;&nbsp;</a></p>
 <p><b></br>Database Editor</b></a></br>It contains operations related to databases - create, drop and show tables.</br></br><a href="db.php">&nbsp;&nbsp;Enter&nbsp;&nbsp;</a></p>
 <p><b></br>Table Editor</b></br>It contains all table editing functions - drop, describe, rename, show/edit/delete and insert.</br></br><a href="new.php">&nbsp;&nbsp;Enter&nbsp;&nbsp;</a></p>
  <p><b>Create Table</b></br>To create a new table in the selected database with adding values in table columns.</br></br><a href="tables2.php">&nbsp;&nbsp;Enter&nbsp;&nbsp;</a></p>
  </div>
</div>
</div>
<div class="container3" id="about">
<hr style="height:2em; border-top: 10px solid black; top: -10px;"/>
<div class="container">
<div class="header">
			<a href="head.php"><img src="start.png" width="50"></a>&nbsp;About</div>
<div id="container2">
<i>
<div id="txt"></br></br></br>EasySQL  is a web-based database management tool written in PHP (Hypertext Preprocessor). It is basically intended to handle the administration of <img src="mysql.png" width="80"> database management system.</div>
<div id="txt2">It can perform various tasks such as -<ul> <li>Creating, modifying or deleting databases, tables, fields or rows (Database and Table Editor)</li><li>Executing SQL statements (SQL Parser)</li><li>Managing users and permissions (User Management)</li></ul></br>Advantage of EasySQL is that it gives an alternative from the tiring MySQL command line and it also allows users to administrate database without having prior knowledge of Structured Query Language. What separates it from other database management tools is its flat and simple graphical user interface, basic functionality which a beginner can easily use and it directly communicates with MySQL to handle database operations.</br></br> To know more about MySQL, <a href="http://www.mysql.com/" target="_blank">Visit here</a>.</div>
</i>
</br></br><div class="clip-circle"></div></br><p style="text-align='center';">> EasySQL is developed by: Sarthak</p>

</div>
</div>
</div>