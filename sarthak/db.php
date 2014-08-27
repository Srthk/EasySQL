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
if(!$con) echo "<script>alert('Login Error: Wrong host, username or password');parent.location.href='login.php'</script>"
?>
<html>
<head>
<link href="bootstrap.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="MyFontsWebfontsKit.css">
<link rel="stylesheet" type="text/css" href="museofont.css">
<link rel="stylesheet" type="text/css" href="style.css">
<style>
.header{
	position: relative;
	/*top: calc(50% - 35px);
	left: calc(50% - 255px);*/
	top: 10px;
	left: 0px;
	z-index: 2;
	font-family: Museo-300;
	font-size: 30px;
	text-align: center;
	border: 3px solid black;
	border-radius: 0px;
	background-color: white;
	padding: 10px;
	}
.login{
	position: relative;
	top: -50px;
	margin-left: 50px;
	font-family: museo-300;
	font-size: 16px;
	font-weight: 400;
	padding: 10px;
	z-index: 2;
	text-align: center;
	display: inline-block;
}
.dtbase{
	position: relative;
	top: 0px;
	left: 0px;
	z-index: 2;
	padding-top: 50px;	
}

.login div {
  width: 118px;
  height: 118px;
  text-align: center;
  display: inline-block;
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
    <h1 class="navbar-brand"><a href="head.php"><img src="logo_mysql.png" width="100" height="100">&nbsp;EasySQL</a></h1>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right" id="menu-main">
      <li><a title="Adote" href="#adote"><b>Home</b></a></li>
      <li><a title="Pets" href="#pets"><b>Tools</b></a></li>
      <li><a title="Instituicoes" href="#instituicoes"><b>Help</b></a></li>
      <li><a title="Contato" href="#contato"><b>About</b></a></li>
    </ul>
  </div>
  </div>
  <!-- /.navbar-collapse -->
</nav>
<body>
 <div class="container">
	<div class="header">
			<a href="db.php"><img src="data3.png" width="50"></a>&nbsp;Database Editor</div>
<?php
$dblist=mysql_query("show databases");
				$i = 0;
				echo "<div class='dtbase'>";
				echo "<table border='5' align='left'>";
				echo "<th>Available Databases</th>";
					
				 	
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
								<a href="db.php?dbid=<?php echo $dbase[$i] ?>">
								<?php
								echo "<img src='data3.png' width=10' height='10'>&nbsp;".$dbase[$i]."</a></td>";
								//echo "<td><input type='radio' name='sel' value='".$dbase[$i]."'>";
								$i++;
								
							}
							echo "</tr>";
						}
			echo "</table></div>";
			echo "<br>";
			echo "<div class='login'>";
			print("Current Database: ".$z);
		
?>
<form action="" method="POST">
</br><div></br><img src="dbadd.png" height="60" width="60"></div>&nbsp;Create Database: <input type="text" name="dbname" placeholder="Database name">
<input type="submit" name="s" value="Create">&nbsp;<a href="http://dev.mysql.com/doc/refman/5.6/en/create-database.html" target="_blank"><img src="help.png" width="20" height="20" alt="help"></a>
</br></br>
<div></br><img src="dropdb.png" height="60" width="60"></div>&nbsp;Drop Database: &nbsp;&nbsp;<select name="dbsel">
<?php
	$dblist2=mysql_query("show databases");
	while($dbase2=mysql_fetch_row($dblist2))
						{	
							$i=0;
							while ($i < mysql_num_fields($dblist)) 
							{	echo "<option value='$dbase2[$i]'>".$dbase2[$i]."</option>";
								$i++;
								
							}
							
							
						}
echo "</select>";
echo "&nbsp;<input type='submit' name='s2' value='Drop'>";
?>
&nbsp;<a href="http://dev.mysql.com/doc/refman/5.0/en/drop-database.html" target="_blank"><img src="help.png" width="20" height="20" alt="help"></a>
<?php
if(isset($_POST['s']))
	{	$dbname=$_POST['dbname'];
		$query="create database $dbname";
		$exe=mysql_query($query);
		if(!$exe)
			{ echo "</br>ERROR IN QUERY: ".mysql_error();
			  exit;
			}
		else
echo "<script>alert('Database with name $dbname created.');parent.location.href='db.php'</script>";
	}
else if(isset($_POST['s2']))
	{	$dbdel=$_POST['dbsel'];
		echo "<input type='hidden' value='$dbdel' name='del'>";
		echo "</br></br>Are you sure you want to drop the database '$dbdel' including all its tables & data?</br></br><input type='submit' value='Yes' name='yes'>&nbsp;<input type='submit' value='No' name='no'>";
	}
if(isset($_POST['yes']))
		{	$deldb=$_POST['del'];
			$qry="drop database $deldb";
			$exe2=mysql_query($qry);
			if(!$exe2)
			{ echo "</br>ERROR IN QUERY: ".mysql_error();
			  exit;
			}
			else echo "<script>alert('Database with name $deldb dropped.');parent.location.href='db.php'</script>";
		}
else if(isset($_POST['no']))
			{ echo "<script>parent.location.href='db.php'</script>";
			}
	
?>
</br></br><div></br><img src="table.svg" height="60" width="60"></div>&nbsp;Show Tables: &nbsp;&nbsp;&nbsp;&nbsp;<select name="dbtable">
<?php
	$dbtb=mysql_query("show databases");
	echo "<optgroup label='select database'>";
	while($dbase3=mysql_fetch_row($dbtb))
						{	
							$i=0;
							while ($i < mysql_num_fields($dbtb)) 
							{	echo "<option value='$dbase3[$i]'>".$dbase3[$i]."</option>";
								$i++;
								
							}
							
						}
					
echo "</optgroup></select>";
echo "&nbsp;<input type='submit' name='s3' value='Show'>";
?>
&nbsp;<a href="http://dev.mysql.com/doc/refman/5.0/en/show-tables.html" target="_blank"><img src="help.png" width="20" height="20" alt="help"></a></div>
<?php
if(isset($_POST['s3']))
{		$currdb=$_POST['dbtable'];
		$exe5=mysql_query("show tables from $currdb");
					$i = 0;
				echo "</br><table border='2' align='center'><tr>";
				while ($i < mysql_num_fields($exe5)) 
				{
					$meta2 = mysql_fetch_field($exe5, $i);
					if (!$meta2) 
					{
						echo "No information available<br />\n";
					}
					$fields[$i]=$meta2->name;
					echo "<th>".$fields[$i]."</th>";
					$i++;
				}
					echo "</tr>";
				
					while($res=mysql_fetch_row($exe5))
						{	echo "<tr>";
							$i=0;
							while ($i < mysql_num_fields($exe5)) 
							{			
								echo "<td>".$res[$i]."</td>";
								$i++;
							}
							echo "</tr>";
						}
}
?>
</div>