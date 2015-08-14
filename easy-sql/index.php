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
else echo "<script>parent.location.href='login.php'</script>";
if(!isset($_SESSION['theme']))
$_SESSION['theme']="default";
?>

<html>
<head>

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/MyFontsWebfontsKit.css">
<link rel="stylesheet" type="text/css" href="css/museofont.css">
<link rel="stylesheet" type="text/css" media="all" href="css/<?php echo $_SESSION['theme'];?>.css" id="theme_css" />

<style>


</style>
<title>EasySQL</title>
<script>
function changetheme()
{	if(document.getElementById('theme').value=='default')
     document.getElementById('theme_css').href = 'css/default.css';
	 else if(document.getElementById('theme').value=='light')
     document.getElementById('theme_css').href = 'css/light.css';
	 else if(document.getElementById('theme').value=='dark')
     document.getElementById('theme_css').href = 'css/dark.css';
}
</script>
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
    <h1 class="navbar-brand"><a href="index.php"><img src="images/es-logo-r.png" width="120" height="120">&nbsp;EasySQL</a></h1>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right" id="menu-main">
      <li><a title="home" href="index.php"><b>Home</b></a></li>
      <li><a title="tools" href="#tools"><b>Tools</b></a></li>
      <li><a title="help" href="http://www.easy-sql.cu.cc" target="_blank"><b>Help</b></a></li>
      <li><a title="about" href="#about"><b>About</b></a></li>
      <li><a title="logout" href="logout.php"><b>Logout</b></a></br></li>
		</br><b>User: <?php echo $user."@".$host; ?></b>
	</ul>
  </div>
  
  <!-- /.navbar-collapse -->
  
</nav>

</div>

<div class="container">
</br>
</br>
<div class="header">
<a href="index.php"><img src="images/arm1.png" height="30" width="30"></a>&nbsp;Welcome To EasySQL!</div>
<?php
//echo "You are connected to MySQL ".mysql_get_server_info()." with the user $user@$host.";
?>
<div id="container2">
 </br><div></br><a href="#gstarted"><img src="images/start.png" width="125"></a></div>
	<div></br><a href="#tools"><img src="images/tools.png" width="125"></a></div>
	<div></br><a href="user.php"><img src="images/users.png" width="150"></a></div>
	<div></br><a href="#about"><img src="images/help1.png" width="125"></a></div>
</div>
<div id="container2">
 <p><b></br>Getting Started</b></a></br>Learn more about EasySQL and its features. Also, hit enter if you want to change the theme.</br></br><a href="#gstarted">&nbsp;&nbsp;Enter&nbsp;&nbsp;</a></p>
 <p><b></br>Tools</b></a></br>It contains utilities for MySQL administration incl. SQL Parser, Database & Table editor etc.<br></br><a href="#tools">&nbsp;&nbsp;Enter&nbsp;&nbsp;</a></p>
 <p><b></br>User Management</b></br>You require appropriate privileges to Add, Delete and manipulate MySQL users. </br></br><a href="user.php">&nbsp;&nbsp;Enter&nbsp;&nbsp;</a></p>
  <p><b>About</b></br>Click this for queries and help. Also to find out more about EasySQL and its developer.<br></br><a href="#about">&nbsp;&nbsp;Enter&nbsp;&nbsp;</a></p>
</div>
</div>
<div class="container3">
<hr style="height:0em; border-top: 10px solid black; top: 0px;"/>
<span class="anchor" id="gstarted"></span>
<div class="container">
<div class="header">
			<a href="index.php"><img src="images/star.png" width="30"></a>&nbsp;EasySQL Features</div>
<div id="container2">
 </br><div></br><img src="images/mysql-logo.png" width="125"></a></div>
	<div></br><img src="images/ui.png" width="125"></a></div>
	<div></br><img src="images/complex.png" width="125"></a></div>
</div>
<div id="container2">
<b><i>
<p style="font-size:25px;">MYSQL SUPPORT</p>
<p style="font-size:25px;"></br>ATTRACTIVE GUI</p>
<p style="font-size:25px;">LESS COMPLEXITY</p>
</i></b>
</div>
<div class="login">
<form action="" method="POST">
Change Theme: <select id="theme" name="theme" onchange="changetheme()"><option value="default">Default</option><option value="light">Light</option><option value="dark">Dark</option></select>
<input type="submit" value="Change" name="th">
<?php
if(isset($_POST['th']))
	{	$_SESSION["theme"]=$_POST['theme'];
		echo "<script>parent.location.href='index.php'</script>";
		}
?>
</form>
</div>
</div>
<hr style="height:0em; border-bottom: 10px solid black; border-top: 0px; top: 0px;"/>
</div>

<span class="anchor" id="tools"></span>
<div class="container">
<div class="header">
			<a href="index.php"><img src="images/tools.png" width="50"></a>&nbsp;Tools</div>
<div id="container2">
 </br><div></br><a href="parser.php"><img src="images/code4.png" width="125"></a></div>
	<div></br><a href="db.php"><img src="images/data3.png" width="125"></a></div>
	<div></br><a href="table-editor.php"><img src="images/tables.png" width="125"></a></div>
		<div></br><a href="create-table.php"><img src="images/addtable.png" width="125"></a></div>
</div>
<div id="container2">
 <p><b></br>SQL Parser</b></a></br>For executing commands and queries in MySQL & displaying the respective output or error.</br></br><a href="parser.php">&nbsp;&nbsp;Enter&nbsp;&nbsp;</a></p>
 <p><b></br>Database Editor</b></a></br>It contains operations related to databases - create, drop and show tables.</br></br><a href="db.php">&nbsp;&nbsp;Enter&nbsp;&nbsp;</a></p>
 <p><b></br>Table Editor</b></br>It contains all table editing functions - drop, describe, rename, show/edit/delete and insert.</br></br><a href="table-editor.php">&nbsp;&nbsp;Enter&nbsp;&nbsp;</a></p>
  <p><b>Create Table</b></br>To create a new table in the selected database with adding values in table columns.</br></br><a href="create-table.php">&nbsp;&nbsp;Enter&nbsp;&nbsp;</a></p>
  </div>
</div>
<div class="container3">
<hr style="height:0em; border-top: 10px solid black; top: 0px;"/>
<span class="anchor" id="about"></span>
<div class="container">
<div class="header">
			<a href="index.php"><img src="images/start.png" width="50"></a>&nbsp;About</div>
<div id="container2">
<i>
<div id="txt"></br></br></br>EasySQL  is a web-based database management tool written in PHP (Hypertext Preprocessor). It is basically intended to handle the administration of <img src="images/mysql.png" width="80"> database management system.</div>
<div id="txt2">It can perform various tasks such as -<ul> <li>Creating, modifying or deleting databases, tables, fields or rows (Database and Table Editor)</li><li>Executing SQL statements (SQL Parser)</li><li>Managing users and permissions (User Management)</li></ul></br>Advantage of EasySQL is that it gives an alternative from the tiring MySQL command line and it also allows users to administrate database without having prior knowledge of Structured Query Language. What separates it from other database management tools is its flat and simple graphical user interface, basic functionality which a beginner can easily use and it directly communicates with MySQL to handle database operations.</br></br> To know more about EasySQL, <a href="http://www.easy-sql.cu.cc" target="_blank">visit here</a> or email: <a href="mailto:info@easy-sql.cu.cc">info@easy-sql.cu.cc</a></div>
</i>
</br></br><div class="clip-circle"></div></br><p style="text-align='center';">> EasySQL is developed by: Sarthak Singhal</p>
<div id="txt2"><img src="http://mundobotellas.com/irudiak/twitter.png" width="20" height="20">&nbsp;Follow me on twitter: <a href="twitter.com/sarthak003">@sarthak003</a></div>
</div>
</div>
</div>