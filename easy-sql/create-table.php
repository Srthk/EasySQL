<?php
include('conn.php');
$con=mysql_connect($host,$user,$pass);
$z=NULL;
if(isset($_GET['dbid']))
{ $_SESSION['db']=$_GET['dbid'];
$z=$_SESSION['db'];
}
else if(isset($_SESSION['db']))
		$z=$_SESSION['db'];
		else $z="test";
mysql_select_db($z);
if(!$con) die("not connected");
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
.header{
	position: relative;
	/*top: calc(50% - 35px);
	left: calc(50% - 255px);*/
	top:10px;
	left: 0px;
	color: black;
	z-index: 2;
	font-family: Museo-300;
	font-size: 30px;
	text-align: center;
	border: 3px solid black;
	border-radius: 0px;
	background-color: white;
	padding: 10px;
	}
.header img{
height: 50;
width: 50;
border: 0px solid black;
border-radius: 0px;
padding: 0px;
background-color: white;
}
.login{
	position: relative;
	top: 0px;
	left: 50px;
	font-family: museo-300;
	font-size: 16px;
	font-weight: 400;
	padding: 10px;
	z-index: 2;
	text-align: left;
	display: inline-block;
}
.dtbase{
	position: relative;
	top: 20px;
	left: 0px;
	font-family: museo-500;
	font-size: 16px;
	font-weight: 400;
	z-index: 2;
	padding: 10px;	
}

.login div {
  width: 118px;
  height: 118px;
  text-align: center;

  border: 3px solid black;
  border-radius: 59px;
  padding: 5px;
  background-color: white;
}
.login input[type=text]{
	width: 250px;
	height: 30px;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #0973B9;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}
.login input[type=number]{
	width: 250px;
	height: 30px;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #0973B9;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}
.login select{
	width: 250px;
	height: 30px;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #0973B9;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}
.login input[type=submit]{
	width: 200px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 12px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}


.login input[type=submit]:hover{
	opacity: 0.8;
	color: #F87431;
}

.login input[type=submit]:active{
	opacity: 0.6;
}

.login input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}
::-webkit-input-placeholder{
   color: #0973B9;
   opacity:0.2;
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
table { 
		
		border-collapse: collapse; 
	}
	/* Zebra striping */
	tr:nth-of-type(odd) { 
		background: #eee; 
	}tr:nth-of-type(even) { 
		background: #fff; 
	}
	th { 
		background: #333; 
		color: white; 
		font-weight: bold; 
	}
	td, th { 
		padding: 6px; 
		border: 1px solid #ccc; 
		text-align: left; 
	}
#jander{
     font-weight: bold;
	 color: black;
   }
.output{
	position: relative;
	top: 0px;
	left: 50px;
	z-index: 2;
	padding: 10px;
	width: auto;
	height: auto;
	color: #fff;
	font-family: museo-300;
	font-size: 16px;
	text-align: left;
	display: inline-block;
}
.output input[type=submit]{
	width: 200px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 12px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}


.output input[type=submit]:hover{
	opacity: 0.8;
	color: #F87431;
}

.output input[type=submit]:active{
	opacity: 0.6;
}
</style>
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
  </div>
  <!-- /.navbar-collapse -->
</nav>
<body> </br>

 <div class="container">
	<div class="header">
			<a href="create-table.php"><img src="images/addtable.png" width="50"></a>&nbsp;Create Table</div>
<?php

$dblist=mysql_query("show databases");
				$i = 0;
				echo "<div class='dtbase'>";
				echo "<table border='5' align='left'><tr>";
				echo "<th>Available Databases</th>";
					echo "</tr>";
				 	
					while($dbase=mysql_fetch_row($dblist))
						{	echo "<tr>";
							$i=0;
								while ($i < mysql_num_fields($dblist)) 
							{	
								if($z==$dbase[$i])
								echo "<td bgcolor='#f0bf00'>";
								else
								echo "<td>";
								?>
								<a href="create-table.php?dbid=<?php echo $dbase[$i] ?>">
								<?php
								echo "<img src='images/table.svg' width=10' height='10'>&nbsp;".$dbase[$i]."</a></td>";
								//echo "<td><input type='radio' name='sel' value='".$dbase[$i]."'>";
								$i++;
								
							}
							
							echo "</tr>";
						}
			echo "</table>";
			echo "<br></div>";
			/*$exe2=mysql_query("Show tables");
			echo "<div class='sidebar2'><table border='5' align='left'><tr>";
				echo "<th>Tables_in_$z</th>";
					echo "</tr>";
				 	
					while($res=mysql_fetch_row($exe2))
						{	echo "<tr>";
							$i=0;
							while ($i < mysql_num_fields($exe2)) 
							{	echo "<td>".$res[$i]."</td>";
								$i++;
								}
							
							echo "</tr>";
						}
						echo "</table></div>";*/
						echo "<div class='login'>";
			print("CURRENT DATABASE: ".$z);
?>
<form action="" method="POST">
<h3>Create Table: </h3>
Name of the Table: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="t1" placeholder="Enter Name"> &nbsp;  
</br></br>Number of Columns: &nbsp;<input type="number" name="t3" placeholder="Enter Number"> 
</br></br><input type="submit" value="Submit" name="go">
</div>
<?php
if(isset($_POST['go']))
{ $name=$_POST['t1'];
  $num=$_POST['t3'];
  echo "<div class='output'></br>[Creating table $name]";
  echo "</br><table border='2' align='left'>";
  echo "<tr><th>Column Name</th><th>Type</th><th>Length</th><th>Key</th><th>Not Null</th><th>Default</th></tr>";
  for($i=0;$i<$num;$i++)
	{	echo "<tr><td><input type='text' name='fieldname[]'></td>";
		echo "<td><select name='fieldtype[]'><option value='int'>int</option><option value='varchar'>varchar</option></td>";
		echo "<td><input type='number' name='length[]'></td>";
		echo "<td><select name='key[]'><option value='NULL'>No Key</option><option value='PRIMARY KEY'>Primary Key</option><option value='UNIQUE'>Unique</option></td>";
		echo "<td><input type='checkbox' name='notnull[]' ></td>";
		echo "<td><input type='text' name='default[]'></td>";
		echo "</br></tr>";
		}
		echo "</table>";
		echo "<input type='hidden' name='name' value='$name'>";
		echo "<input type='hidden' name='num' value='$num'>";
		echo "</br></br><input type='submit' name='s' value='Create'>";
}
if(isset($_POST['s']))
{	$num2=$_POST['num'];
	$name2=$_POST['name'];
	$fieldname=$_POST['fieldname'];
	$fieldtype=$_POST['fieldtype'];
	$length=$_POST['length'];
	if(isset($null[$i]))
	{
		$null=$_POST['notnull'];
	}
	$key=$_POST['key'];
	
	$default=$_POST['default'];
	for($i=0;$i<$num2;$i++)	
	{ 
		if(isset($null[$i]) && $null[$i]="true")
		{
			if($key[$i]!="NULL")
			$str1[$i]=$fieldname[$i]." ".$fieldtype[$i]."(".$length[$i].")"." NOT NULL ".$key[$i];
			else
			$str1[$i]=$fieldname[$i]." ".$fieldtype[$i]."(".$length[$i].")"." NOT NULL DEFAULT '$default[$i]'";

		}
		else
		{
			if($key[$i]!="NULL")
			$str1[$i]=$fieldname[$i]." ".$fieldtype[$i]."(".$length[$i].") ".$key[$i];
			else
			$str1[$i]=$fieldname[$i]." ".$fieldtype[$i]."(".$length[$i].")"." DEFAULT '$default[$i]'";
		}
	}
	$str2=implode(", ",$str1);
	$query="CREATE TABLE $name2 ($str2)";
	$exe3=mysql_query($query);
	if($exe3)
	{
		echo "Table Created.</div>";
		//header("Location: create-table.php?dbid=$z");
		}
	else echo $x=mysql_error();
}

?>
</div>