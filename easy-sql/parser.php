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
if(!$con) echo "<script>alert('Login Error: Wrong host, username or password');parent.location.href='login.php'</script>";
if(!isset($_SESSION['theme']))
$_SESSION['theme']="default";
?>
<html>
<head>

  <meta charset="UTF-8">

  <title>SQL Parser</title>
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

  
.dtbase{
	position: relative;
	top: -280px;
	left: 0px;
	z-index: 2;
	padding: 10px;
	
}
.dtbase a:link {
    color: #5379fa;
    text-decoration: none;
}

/* visited link */
.dtbase a:visited {
    color: #5379fa;
}

/* mouse over link */
.dtbase a:hover {
    color: #FF00FF;
}

/* selected link */
.dtbase a:active {
    color: #0000FF;
}
.output2{
	position: relative;
	top: -90px;
	left: 150px;
	z-index: 2;
	padding: 10px;
	width: auto;
	height: auto;
	color: black;
}

.output1{
	position: relative;
	top: -340px;
	left: 340px;
	z-index: 2;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 17px;
	width: auto;
	height: auto;
}
.menu{
	position: absolute;
	top: 370px;
	left: 10px;
	z-index: 2;
	color: #ffffff;
	}

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
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #0973B9;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}
.login textarea{
	width: 750px;
	height: 200px;
	background: transparent;
	border: 1px solid #fff;
	border-radius: 2px;
	color: black;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	background-color: white;
	font-weight: 400;
	padding: 4px;
}

.login input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}

.login input[type=button]{
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

.login input[type=button]:hover{
	opacity: 0.8;
}

.login input[type=button]:active{
	opacity: 0.6;
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
	padding: 6px;
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

<script language="javascript">
function help(obj,val)
{
//var od="1";
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("r").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","x.php?q="+val,true);
xmlhttp.send();
}
</script>
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
<div id="top"></div>
	
 <div class="container">
 </br> </br>
	<div class="header">

<a href="parser.php"><img src="images/code4.png" height="50"width="50"></a>&nbsp;SQL Parser</div></br>
		<div class="login">
<form action="" method="POST">
</br><textarea rows="20" cols="40" name="t1" placeholder="Enter Your Query"></textarea></br>
<input type="submit" name="s" value="Execute">
<input type="reset" name="r" value="Clear">
</div>
<?php
function exquery($query)
	{	$exe=mysql_query($query);
		echo "<h2>OUTPUT</h2>";
		echo "Entered Query: ".$query;
		if(!$exe)
			{ echo "</br>ERROR IN QUERY: ".mysql_error();
			  exit;
			}
		else
		echo "</br>Query OK. ".mysql_affected_rows()." row(s) affected</br>";
		
		return $exe;
	}
				$dblist=mysql_query("show databases");
				$i = 0;
				echo "<div class='dtbase'>";
				echo "<table border='2' align='left'><tr>";
				while ($i < mysql_num_fields($dblist)) 
				{
					$meta1 = mysql_fetch_field($dblist, $i);
					if (!$meta1) 
					{
						echo "No information available<br />\n";
					}
					$field[$i]=$meta1->name;
					echo "<th>Database <br>(Click to select)</th>";
					$i++;
				}
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
								<a href="parser.php?dbid=<?php echo $dbase[$i] ?>">
								<?php
								echo "<img src='images/data3.png' width=10' height='10'>&nbsp;".$dbase[$i]."</a></td>";
								//echo "<td><input type='radio' name='sel' value='".$dbase[$i]."'>";
								$i++;
								
							}
							
							echo "</tr>";
						}
			echo "</table></div>";
			echo "<br>";
			echo "<div class='output1'>";
			print("Current Database: ".$z);
			echo "</div>";
				/*if(isset($_POST['s2']))
						{	$seldb=$_POST['sel'];
							mysql_select_db($seldb);
							}*/
if(isset($_POST['s']))
	{	$qry=$_POST['t1'];	//input query
		$qtype=explode(" ",$qry); //to find the query type
		echo "<div class='output2'>";
		if($qtype[0]=="Create" || $qtype[0]=="create" || $qtype[0]=="CREATE")
			{	$sqry="create";
				$exe1=exquery($qry);
			}
		else if($qtype[0]=="Select" || $qtype[0]=="select" || $qtype[0]=="SELECT")
			{	$sqry="select";
				$exe2=exquery($qry);
				$i = 0;
				echo "<table border='2' align='center'><tr>";
				while ($i < mysql_num_fields($exe2)) 
				{
					$meta = mysql_fetch_field($exe2, $i);
					if (!$meta) 
					{
						echo "No information available<br />\n";
					}
					$fields[$i]=$meta->name;
					echo "<th>".$fields[$i]."</th>";
					$i++;
				}
					echo "</tr>";
				
					while($res=mysql_fetch_row($exe2))
						{	echo "<tr>";
							$i=0;
							while ($i < mysql_num_fields($exe2)) 
							{			
								echo "<td>".$res[$i]."</td>";
								$i++;
							}
							echo "</tr>";
						}
			}
		else if($qtype[0]=="Insert" || $qtype[0]=="insert" || $qtype[0]=="INSERT")
			{	$sqry="insert";
				$exe3=exquery($qry);
			}
		else if($qtype[0]=="Describe" || $qtype[0]=="describe" || $qtype[0]=="DESCRIBE" || $qtype[0]=="Explain" || $qtype[0]=="explain" || $qtype[0]=="EXPLAIN" )
				{	$sqry="describe";
					$exe4=exquery($qry);
					echo "<table border='2' align='center' rowspan='2' colspan='2'><tr><th>Column Name</th><th>Data Type</th><th>Null</th><th>Key</th><th>Default</th><th>Extra</th></tr>"; 
					while($row = mysql_fetch_array($exe4))
						{ 
  							echo "<tr><td>" . $row['Field'] . "</td><td>" . $row['Type'] . "</td><td>". $row['Null'] . "</td><td>". $row['Key'] . "</td><td>". $row['Default'] . "</td><td>". $row['Extra'] . "</td><tr>"; 
						} 

					echo "</table>";  

				}
		else if ($qtype[0]=="Show" || $qtype[0]=="show" || $qtype[0]=="SHOW")
				{	$sqry="show";
					$exe5=exquery($qry);
					$i = 0;
				echo "<table border='2' align='left'><tr>";
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
		else
			exquery($qry);
	}
?>
</div>
</div>
</div>
</body>