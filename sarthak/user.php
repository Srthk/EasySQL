<?php
include('conn.php');
$con=mysql_connect($host,$user,$pass);
if(!$con) echo "<script>alert('Login Error: Wrong host, username or password');parent.location.href='login.php'</script>"
?>
<html>
<head>

  <meta charset="UTF-8">

  <title>Add User</title>
  <link href="bootstrap.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="MyFontsWebfontsKit.css">
<link rel="stylesheet" type="text/css" href="museofont.css">
<link rel="stylesheet" type="text/css" href="style.css">
<style>
#op{
text-align: center;
}
body{
padding-top: 120px;
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
	padding: 10px;

}
.subheader{
	position: relative;
	/*top: calc(50% - 35px);
	left: calc(50% - 255px);*/
	top: 0px;
	left: 0px;
	z-index: 2;
	font-family: Museo-500;
	font-size: 32px;
	text-align: center;
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
.subheader img{
height: 80px;
width: 80px;
border: 0px solid black;
border-radius: 40px;
padding: 10px;
background-color: white;
}
.login{
	position: relative;
	top: 0px;
	left: 0px;
	background: transparent;
	font-family: museo-300;
	font-size: 16px;
	font-weight: 400;
	padding: 0px;
	z-index: 2;
	text-align: center;
	display: inline-block;
}
.dtbase{
	position: relative;
	top: 0px;;
	left: 0px;
	font-family: museo-500;
	font-size: 16px;
	font-weight: 400;
	z-index: 2;
	text-align: center;
	padding: 10px;	
}

.login input[type=text]{
	width: 250px;
	height: 30px;
	background-color: #fff;
	border: 1px solid black;
	border-radius: 5px;
	color: black;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}
.login input[type=submit]{
	width: 200px;
	height: 35px;
	background-color: #333;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 12px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid black;
	border-radius: 5px;
	color: black;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
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
	border: 3px solid black;
}
.login input[type=password]:focus{
	outline: none;
	border: 3px solid black;
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
	
	td, th { 
		padding: 6px; 
		vertical-align:text-top;
		border: 1px solid #ccc; 
		text-align: left; 
	}
	th { 
		background: #333; 
		color: white; 
		font-weight: bold; 
		text-align: center;
	}
</style>
<script>
function myFunction() {
    var x = document.getElementById("sel").checked;
	var y=document.getElementById("alldb").checked;

	if(x==true)
	{   document.getElementById("privilegepane").style.display='inline';
		if(y==true)
		{	document.getElementById("privilegepane2").style.display='inline';
		}
		if(y==false)
		document.getElementById("privilegepane2").style.display='none';
	}
	else if(x==false)
	{
	document.getElementById("privilegepane").style.display='none';
	document.getElementById("privilegepane2").style.display='none';
	}
	}
function dblist() {
    var x = document.getElementById("seldb").checked;
	var y=document.getElementById("alldb").checked;
	myFunction();
	if(x==true)
	{   document.getElementById("dbaccesspane").style.display='inline';
			}
	else if(x==false)
	{
	document.getElementById("dbaccesspane").style.display='none';
		}
	}
/*function dbprint(obj,val)
{
myFunction();
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
    document.getElementById("dbaccesspane").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","dbprint.php?q="+val,true);
xmlhttp.send();
}*/
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
</div>
<body>

<script>
function usermgmt(str)
{
if(str=="add")
	{	document.getElementById("op1").style.display='inline';
		document.getElementById("op2").style.display='none';
		document.getElementById("op4").style.display='none';
		document.getElementById("op3").style.display='none';
	}
if(str=="list")
	{ document.getElementById("op1").style.display='none';	
	  document.getElementById("op3").style.display='none';	
	  document.getElementById("op4").style.display='none';	
	  document.getElementById("op2").style.display='inline';
	}
	if(str=="del")
	{ document.getElementById("op1").style.display='none';	
	  document.getElementById("op2").style.display='none';
	  document.getElementById("op4").style.display='none';
	  document.getElementById("op3").style.display='inline';
	}
	if(str=="pass")
	{ document.getElementById("op1").style.display='none';	
	  document.getElementById("op2").style.display='none';
	  document.getElementById("op3").style.display='none';
	  document.getElementById("op4").style.display='inline';
	}
}
</script>
<div id="container3">
<div class="container">
</br>
<div class="header">
<a href="user.php"><img src="users.png" height="30" width="30"></a>&nbsp;User Management</div></br>
<div id="container2">
 </br><div></br><a href="#op2"><img src="listusers.png" width="125"></a></div>
    <div></br><a href="#op1"><img src="adduser.png" width="125"></a></div>	
	<div></br><a href="#op3"><img src="deluser.png" width="125"></a></div>
	<div></br><a href="#op4"><img src="userpass.png" width="125"></a></div>
</div>
<div id="container2">
 <p><b></br>> List Users</b></br>To list all the existing MySQL user accounts with their brief details.</br></br><a href="#op2" id="list" onclick="usermgmt('list')">&nbsp;&nbsp;Go&nbsp;&nbsp;</a></br></p>
 <p><b></br>> Add New User</b></a></br>It uses CREATE USER statement to create new MySQL accounts.</br></br><a href="#op1" id="add" onclick="usermgmt('add')">&nbsp;&nbsp;Go&nbsp;&nbsp;</a></br></p>
 <p><b></br>> Drop User</b></a></br>It uses DROP USER statement to remove a MySQL account.</br></br><a href="#op3" id="del" onclick="usermgmt('del')">&nbsp;&nbsp;Go&nbsp;&nbsp;</a></br></p>
 <p><b>> Change Password</b></br>It uses SET PASSWORD statement to assign a password to a MySQL user.</br></br><a href="#op4" id="pass" onclick="usermgmt('pass')">&nbsp;&nbsp;Go&nbsp;&nbsp;</a></br></p>
</div>
</div>
</div>
<div id="op2" style="display: inline;">

<div class="container">

<div class="header">
<a href="user.php"><img src="users.png" height="30" width="30"></a>&nbsp;Users List</div></br>
<?php
				$dblist=mysql_query("select user,host,password,grant_priv from mysql.user");
				if(!$dblist) { 
					echo "Error: You do not have enough permissions."; exit(); 
						}
				$i = 0;
				echo "<div class='dtbase'>";
				echo "<table border='2' align='center'><tr>";
				echo "<tr><th colspan='4'>Existing Users</th></tr>";
				while ($i < mysql_num_fields($dblist)) 
				{
					$meta1 = mysql_fetch_field($dblist, $i);
					if (!$meta1) 
					{
						echo "No information available<br />\n";
					}
					$field[$i]=$meta1->name;
					echo "<th>$field[$i]</th>";
					$i++;
				}
					echo "</tr>";
					while($dbase=mysql_fetch_row($dblist))
						{	echo "<tr>";
							$i=0;
								while ($i < mysql_num_fields($dblist)) 
							{	
								if(($user==$dbase[$i] and $host==$dbase[$i + 1]))
								echo "<td bgcolor='#f0bf00'>";
								else
								echo "<td>";
								if($i==0)
								echo "<img src='user.png' width=10' height='10'>&nbsp;";
								if($i!=2)
								echo $dbase[$i]."</a></td>";
								else {if($dbase[$i]=="") echo "No";
										else echo "Yes"; }
								//echo "<td><input type='radio' name='sel' value='".$dbase[$i]."'>";
								$i++;
								
							}
							
							echo "</tr>";
						}
			echo "</table></br>";
			?>
			</br>*The current user is highlighted.
</div>
</div>
</div>
<div class="container">
<div id="op1" style="display: inline;">
<div class="subheader">
<div class="header"><a href="user.php"><img src="adduser.png" height="30" width="30"></a>&nbsp;Add New User</br></div>

<div class="login">
<table border="1" style="width:100%" align="center">
<tr><th colspan="8">ADD A NEW USER</th></tr>
<form id="NEWUSERFORM" method="POST" action="">
		<tr><td style="width:40%">Host: </td><td style="width:50%"><input type="text" class="text" name="NEWHOST" value="localhost" required></td></tr></br>
		<tr><td>Username:</td><td><input type="text" class="text" name="NEWNAME" required></td></tr>
		<tr><td>Password: </td><td><input type="password" class="text" name="NEWPASS"></td></tr>
		<tr><td>Allow access to:</td>
			<td><label><input type="radio" name="ACCESSLEVEL" VALUE="all" checked="checked" onchange="dblist()" id="alldb">&nbsp;All databases</label><br>
			<label><input type="radio" name="ACCESSLEVEL" value="LIMITED" onchange="dblist()" id="seldb">&nbsp;Selected databases</label>
			</br>
			<div id="dbaccesspane" style="display: none;">
			<?php
				$dblist=mysql_query("show databases");
				$i = 0;
				//echo "<div class='dtbase'>";
				echo "<table border='0' align='left'><tr>";
				while ($i < mysql_num_fields($dblist)) 
				{
					$meta1 = mysql_fetch_field($dblist, $i);
					if (!$meta1) 
					{
						echo "No information available<br />\n";
					}
					$field[$i]=$meta1->name;
					echo "<th>Available Databases</th>";
					$i++;
				}
					echo "</tr>";
				 	
					while($dbase=mysql_fetch_row($dblist))
						{	echo "<tr>";
							$i=0;
							while ($i < mysql_num_fields($dblist)) 
							{	
								echo "<td><input type='checkbox' name='SELDB[]' value='$dbase[$i]'>&nbsp;";
								echo $dbase[$i]."</td>";
								//echo "<td><input type='radio' name='sel' value='".$dbase[$i]."'>";
								$i++;
								
							}
							
							echo "</tr>";
						}
			echo "</table></br>";
			?>
			</div>
			</td></tr>
		<tr><td>Give user: </td>
			<td><label><input type="radio" name="NEWCHOICE" value="ALL" checked="checked" onchange="myFunction()">&nbsp;All privileges</label><br>
			<label><input type="radio" name="NEWCHOICE" value="SELECTED" id="sel" onchange="myFunction()">&nbsp;Selected privileges</label>
			</br>
			<div id="privilegepane" style="display: none;">
			<?php echo "<div class='paneheader'> </br>User privileges </div> <table cellpadding='0' id='userprivs'> <tbody><tr> <td> <label><input type='checkbox' name='NEWPRIVILEGES[]' value='SELECT_priv'>Select</label> </td> <td> <label><input type='checkbox' name='NEWPRIVILEGES[]' value='INSERT_priv'>Insert</label> </td> </tr> <tr> <td> <label><input type='checkbox' name='NEWPRIVILEGES[]' value='UPDATE_priv'>Update</label> </td> <td> <label><input type='checkbox' name='NEWPRIVILEGES[]' value='DELETE_priv'>Delete</label> </td> </tr> <tr> <td> <label><input type='checkbox' name='NEWPRIVILEGES[]' value='INDEX_priv'>Index</label> </td> <td> <label><input type='checkbox' name='NEWPRIVILEGES[]' value='ALTER_priv'>Alter</label> </td> </tr> <tr> <td> <label><input type='checkbox' name='NEWPRIVILEGES[]' value='CREATE_priv'>Create</label> </td> <td> <label><input type='checkbox' name='NEWPRIVILEGES[]' value='DROP_priv'>Drop</label> </td> </tr></tdbody></table>";
			?>
			</div>
			<div id="privilegepane2" style="display: none;">
			<?php
			echo "<div></br> Administrator privileges </div> <table> <tbody><tr> <td> <label><input type='checkbox' name='NEWPRIVILEGES[]' value='FILE_priv'>File</label> </td> <td> <label><input type='checkbox' name='NEWPRIVILEGES[]' value='PROCESS_priv'>Process</label> </td> </tr> <tr> <td> <label><input type='checkbox' name='NEWPRIVILEGES[]' value='RELOAD_priv'>Reload</label> </td> <td> <label><input type='checkbox' name='NEWPRIVILEGES[]' value='SHUTDOWN_priv'>Shutdown</label> </td> </tr> <tr> <td> <label><input type='checkbox' name='NEWPRIVILEGES[]' value='SUPER_priv'>Super</label> </td> <td> </td> </tr> </tbody></table> </div>";
			?>
			</div>
			</td></tr>
			<tr><td>Options: </td>
			<td><label><input type="checkbox" name="GRANTOPTION" value="true">&nbsp;Grant option</label>
			</td></tr>
			<tr><td colspan="4" style="text-align: center"><input type="submit" name="s" value="Submit"></td></tr>
			</form></table>
<?php
if(isset($_POST['s']))
{
$NEWHOST=$_POST['NEWHOST'];
$NEWNAME=$_POST['NEWNAME'];
$NEWPASS=$_POST['NEWPASS'];
$ACCESSLEVEL=$_POST['ACCESSLEVEL'];
$NEWCHOICE=$_POST['NEWCHOICE'];
if(isset($_POST['NEWPRIVILEGES']))
{
	$NEWPRIVILEGES=$_POST['NEWPRIVILEGES'];
	$c=count($NEWPRIVILEGES);
	$priv=implode(" , ",$NEWPRIVILEGES);
}	
if(isset($_POST['GRANTOPTION']))
$GRANTOPTION=$_POST['GRANTOPTION'];
else $GRANTOPTION=false;
if(isset($_POST['SELDB']))
$SELDB=$_POST['SELDB'];
mysql_select_db("mysql");
if($NEWCHOICE=="SELECTED")
{ 	for($j=0;$j<$c;$j++)
	{	$yes[$j]="'Y'";
	}
	$y=implode(" , ",$yes);
	if($ACCESSLEVEL=="all")
	{	if($GRANTOPTION=="true")
		$qry="INSERT INTO user (host, user, password, Grant_priv, $priv) VALUES ('$NEWHOST', '$NEWNAME', PASSWORD('$NEWPASS'), 'Y', $y)";
		else $qry="INSERT INTO user (host, user, password, $priv) VALUES ('$NEWHOST', '$NEWNAME', PASSWORD('$NEWPASS'), $y)";
		$exe=mysql_query($qry);
		if(!$exe2) 
				{	echo "<script>alert('Error while creating user.');</script>";
					exit();
				} 
		else $exe2=mysql_query("FLUSH PRIVILEGES");
	}
	else if($ACCESSLEVEL=="LIMITED")
		{	$newpriv=explode("_priv , ", $priv);
			$n=count($newpriv);
			$newpriv[$n-1]=rtrim($newpriv[$n-1],"_priv");
			$priv=implode(" , ",$newpriv);
			$qry1="CREATE USER '$NEWNAME'@'$NEWHOST' IDENTIFIED BY '$NEWPASS';";
			$exe=mysql_query($qry1);
			if(!$exe) 
				{	echo "<script>alert('User with same name already exists.');</script>";
					exit();
				}
			//if($GRANTOPTION=="true")
			$xexe=mysql_query("FLUSH PRIVILEGES;");
			foreach($SELDB as $db)
			{	if($GRANTOPTION=="true")
				$qry2="GRANT $priv ON $db.* TO '$NEWNAME'@'$NEWHOST' WITH GRANT OPTION;";
				else $qry2="GRANT $priv ON $db.* TO '$NEWNAME'@'$NEWHOST';";
				$exe2=mysql_query($qry2);
				if(!$exe2) 
				{	echo "<script>alert('Access denied for user '$user'@'$host' to database '$db'');</script>";
					exit();
				} 
			}
		}
}
else if($NEWCHOICE=="ALL")
	{ if($ACCESSLEVEL=="all")
	  { $xexe=mysql_query("CREATE USER '$NEWNAME'@'$NEWHOST' IDENTIFIED BY '$NEWPASS';");
		if(!$xexe) 
				{	echo "<script>alert('User with same name already exists.');</script>";
					exit();
				}
	  if($GRANTOPTION=="true")
	  $qry="GRANT ALL PRIVILEGES ON *.* TO '$NEWNAME'@'$NEWHOST' WITH GRANT OPTION;";
	  else $qry="GRANT ALL PRIVILEGES ON *.* TO '$NEWNAME'@'$NEWHOST';";
	  $exe=mysql_query($qry);
	  if(!$exe) 
				{	echo "<script>alert('Error while creating user.');</script>";
					exit();
				} 
		}
	 else if($ACCESSLEVEL=="LIMITED")
		{	$qry1="CREATE USER '$NEWNAME'@'$NEWHOST' IDENTIFIED BY '$NEWPASS';";
			$exe=mysql_query($qry1);
			if(!$exe) 
				{	echo "<script>alert('User with same name already exists.');</script>";
					exit();
				}
			foreach($SELDB as $db)
			{	if($GRANTOPTION=="true")
				$qry2="GRANT ALL PRIVILEGES ON $db.* TO '$NEWNAME'@'$NEWHOST' WITH GRANT OPTION;";
				else $qry2="GRANT ALL PRIVILEGES ON $db.* TO '$NEWNAME'@'$NEWHOST';";
				$exe2=mysql_query($qry2);
				if(!$exe2) 
				{	echo "<script>alert('Access denied for user '$user'@'$host' to database '$db'');</script>";
					exit();
				}
			}
		}
	}
	echo "<script>alert('User created.');</script>";
}
echo "</br>Please refresh page after submit and go to 'List Users' to check if the user has been created or not.";

?>
</div>
</div>
</div>
</div>
<div class="container">
<div id="op3" style="display: inline;">
<div class="subheader">
<div class="header"><a href="user.php"><img src="adduser.png" height="30" width="30"></a>&nbsp;Drop User</br></div>
<div class="login">
<table border="1" style="width:100%" align="center">
<tr><th colspan="8">ENTER DETAILS OF USER TO BE DROPPED</th></tr>
<form id="delform" method="POST" action="">
		<tr><td>Username:</td><td><input type="text" class="text" name="DELNAME" required></td></tr>
		<tr><td style="width:40%">Host: </td><td style="width:50%"><input type="text" class="text" name="DELHOST" value="localhost" required></td></tr></br>
		<tr><td colspan="4" style="text-align: center"><input type="submit" name="DELS" value="Submit"></td></tr>
			</form></table>
<?php
if(isset($_POST['DELS']))
{	$DELHOST=$_POST['DELHOST'];
	$DELNAME=$_POST['DELNAME'];
	$DELEXE=mysql_query("DROP USER '$DELNAME'@'$DELHOST'");
	if(!$DELEXE) echo "<script>alert('User '$DELNAME'@'$DELHOST' not found'.);</script>";
	else  echo "<script>alert('User '$DELNAME'@'$DELHOST' dropped.');</script>";
}
?>
</div>
</div>
</div>
</div>
<div class="container">
<div id="op4" style="display: inline;">
<div class="subheader">
<div class="header"><a href="user.php"><img src="userpass.png" height="30" width="30"></a>&nbsp;Change Password</br></div>
<div class="login">
<table border="1" style="width:100%" align="center">
<tr><th colspan="8">ENTER DETAILS OF USER TO CHANGE PASSWORD FOR.</th></tr>
<form id="delform" method="POST" action="">
		<tr><td>Username:</td><td><input type="text" class="text" name="Passname" required></td></tr>
		<tr><td style="width:40%">Host: </td><td style="width:50%"><input type="text" class="text" name="Passhost" value="localhost" required></td></tr></br>
		<tr><td>*New Password:</td><td><input type="password" class="text" name="chpass"></td></tr>
		<tr><td colspan="4" style="text-align: center"><input type="submit" name="passch" value="Submit"></td></tr>
			</form></table>
			</br>*Please note: You can only change password of a user if you have appropriate privileges.
<?php
if(isset($_POST['passch']))
{	$pHOST=$_POST['Passhost'];
	$pNAME=$_POST['Passname'];
	$nPassword=$_POST['chpass'];
	$EXE=mysql_query("SET PASSWORD FOR '$pNAME'@'$pHOST' = PASSWORD('$nPassword');");
	if(!$EXE) echo "<script>alert('User '$pNAME'@'$$pHOST' not found'.);</script>";
	else echo "<script>alert('Password changed.');</script>";
}
?>
</div>
</div>
</div>
</div>