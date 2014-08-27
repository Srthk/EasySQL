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
	top: 10px;
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
			<a href="new.php"><img src="tables.png" width="50"></a>&nbsp;Table Editor</div>
<?php

$dblist=mysql_query("show databases");
				$i = 0;
				echo "<div class='dtbase'>";
				echo "<table border='5' align='left'><tr>";
				echo "<th>Available Databases <br>(Click to select)</th>";
					echo "</tr>";
				 	
					while($dbase=mysql_fetch_row($dblist))
						{	echo "<tr>";
							$i=0;
							while ($i < mysql_num_fields($dblist)) 
							{	
								if($z==$dbase[$i])
								echo "<td bgcolor='#ff803f'>";
								else
								echo "<td>";
								?>
								<a href="new.php?dbid=<?php echo $dbase[$i] ?>">
								<?php
								echo "<img src='table.svg' width=10' height='10'>&nbsp;".$dbase[$i]."</a></td>";
								//echo "<td><input type='radio' name='sel' value='".$dbase[$i]."'>";
								$i++;
								
							}
							
							echo "</tr>";
						}
			echo "</table></div>";
			$exe2=mysql_query("Show tables");
			echo "<div class='login'>";
			echo "<b>CURRENT DATABASE: $z</b>";
			echo "<hr style='border-top: dotted 3px 0973B9; height:3px' /><b>Drop a Table:</b>";
			echo "<form action='' method='POST'>";
				echo "<select name='tbsel'><optgroup label='Tables_in_$z'>";	 	
					while($res=mysql_fetch_row($exe2))
						{	$i=0;
							while ($i < mysql_num_fields($exe2)) 
							{	echo "<option value='$res[$i]'>".$res[$i]."</option>";
								$i++;
								}
						}
				echo "</optgroup></select>";
?>
&nbsp;<input type="submit" name="s" value="Drop">
<?php
if(isset($_POST['s']))
{	$seltb=$_POST['tbsel'];
	echo "<input type='hidden' value='$seltb' name='del'>";
		echo "</br></br>Are you sure you want to drop the table '$seltb'?</br></br><input type='submit' value='Yes' name='yes'>&nbsp;<input type='submit' value='No' name='no'>";
	}
if(isset($_POST['yes']))
		{	$tbsel=$_POST['del'];
			$qry="drop table $tbsel";
			$exe=mysql_query($qry);
			if(!$exe)
			{ echo "</br>ERROR IN QUERY: ".mysql_error();
			  exit;
			}
			else echo "<script>alert('Table with name $tbsel dropped.');parent.location.href='../sarthak/new.php?dbid=$z'</script>";
		}
else if(isset($_POST['no']))
			{	
				echo "<script>parent.location.href='../sarthak/new.php?dbid=$z'</script>";
			}

?>
<hr style="border-top: dotted 3px 0973B9; height:3px" />
<b>Describe a Table:</b></br>
<?php
echo "<select name='tbsel2'><optgroup label='Tables_in_$z'>";	
					$exe2=mysql_query("Show tables");
					while($res=mysql_fetch_row($exe2))
						{	$i=0;
							while ($i < mysql_num_fields($exe2)) 
							{	echo "<option value='$res[$i]'>".$res[$i]."</option>";
								$i++;
								}
						}
echo "</optgroup></select>";
?>
&nbsp;<input type="submit" name="s2" value="Describe">
<?php
if(isset($_POST['s2']))
{	$tbsel=$_POST['tbsel2'];
	$query="describe $tbsel";
	$exe=mysql_query($query);
	echo "<table border='2' align='center' rowspan='2' colspan='2'><tr><th>Column Name</th><th>Data Type</th><th>Null</th><th>Key</th><th>Default</th><th>Extra</th></tr>"; 
					while($row = mysql_fetch_array($exe))
						{ 
  							echo "<tr><td>" . $row['Field'] . "</td><td>" . $row['Type'] . "</td><td>". $row['Null'] . "</td><td>". $row['Key'] . "</td><td>". $row['Default'] . "</td><td>". $row['Extra'] . "</td><tr>"; 
						} 

					echo "</table>";  
}
?>
<hr style="border-top: dotted 3px 0973B9; height:3px" />
<b>Rename a Table:</b></br>
<?php
echo "<select name='tbsel0'><optgroup label='Tables_in_$z'>";	
					$exe2=mysql_query("Show tables");
					while($res=mysql_fetch_row($exe2))
						{	$i=0;
							while ($i < mysql_num_fields($exe2)) 
							{	echo "<option value='$res[$i]'>".$res[$i]."</option>";
								$i++;
								}
						}
echo "</optgroup></select>";
echo "&nbsp;<input type='text' name='newname' placeholder='Enter new name'>";
?>
&nbsp;<input type="submit" name="rename" value="Rename">
<?php
if(isset($_POST['rename']))
{	$tbsel=$_POST['tbsel0'];
	$newtb=$_POST['newname'];
	$query="rename table $tbsel to $newtb";
	$exe=mysql_query($query);
	if($exe) echo "Table renamed.";
	else echo $x=mysql_error();
}
?>
<hr style="border-top: dotted 3px 0973B9; height:3px" />

<b>Show/Edit/Delete Table Data:</b></br>
<?php
echo "<select name='tbsel3'><optgroup label='Tables_in_$z'>";	
					$exe2=mysql_query("Show tables");
					while($res=mysql_fetch_row($exe2))
						{	$i=0;
							while ($i < mysql_num_fields($exe2)) 
							{	echo "<option value='$res[$i]'>".$res[$i]."</option>";
								$i++;
								}
						}
echo "</optgroup></select>";
?>
&nbsp;<input type="submit" name="s3" value="Select">
<?php
if(isset($_POST['s3']))
{	$tbsel=$_POST['tbsel3'];
	$query="select * from $tbsel";
	$exe2=mysql_query($query);
	$xnum=mysql_num_fields($exe2);
	$cspan=$xnum+1;
				$i = 0;
				echo "</br></br>Please note delete works only for tables with Primary Key defined.<br><table border='2'><tr><th colspan='$cspan'>Table Name: $tbsel</th></tr><tr>";
				while ($i < $xnum) 
				{	echo "<input type='hidden' value='$xnum' name='num'>";
					$meta = mysql_fetch_field($exe2, $i);
					if (!$meta) 
					{
						echo "No information available<br />\n";
					}
					$fields[$i]=$meta->name;
					echo "<th>"."<input type='text' value='$fields[$i]' name='fields[]' id='jander'>"."</th>";
					echo "<input type='hidden' value='$fields[$i]' name='oldfields[]'>";
					$i++;
				}
					echo "<th>Delete</th></tr>";
					echo "<input type='hidden' value='$tbsel' name='tbsel'>";
					$j=0;
					while($res=mysql_fetch_row($exe2))
						{	echo "<tr>";
							$i=0;
							
							while ($i < mysql_num_fields($exe2)) 
							{			
								echo "<td>"."<input type='text' value='$res[$i]' name='rowdata[]'>"."</td>";
								echo "<input type='hidden' value='$res[$i]' name='oldrowdata[]'>"."</td>";
								$i++;
							}
							echo "<td><input type='checkbox' name='check[]' value='$j'></td>";
							echo "</tr>";
							$j++;
						}
					echo "</table>";
					echo "</br><input type='submit' name='s4' value='Update'>";
}
if (isset($_POST['s4']))
{	$fields=$_POST['fields'];
	$tbname=$_POST['tbsel'];
	$oldfields=$_POST['oldfields'];
	$qry=NULL;
	$query="ALTER TABLE $tbname ";
	$xqry="describe $tbname";
	$xexe=mysql_query($xqry);
	$i=0;
				while($row = mysql_fetch_array($xexe))
						{ 
  							$type[$i]=$row['Type'];
							$i++;
						} 
	for ($i=0;$i<sizeof($fields);$i++)
		{	if($i!=sizeof($fields)-1)
			$qry=$qry."CHANGE $oldfields[$i] $fields[$i] $type[$i], ";
			else
			$qry=$qry."CHANGE $oldfields[$i] $fields[$i] $type[$i]";
		}
	$query=$query.$qry;
	$exe=mysql_query($query);
	if($exe)
	NULL;//echo "Table fields edited.";
	else
	echo $error=mysql_error();
	$newdata=$_POST['rowdata'];
	$olddata=$_POST['oldrowdata'];
	$num=$_POST['num'];
	$exe2=mysql_query("select * from $tbname");
	$numrows=mysql_num_rows($exe2);
	$xnum=$num*$numrows;
	//while($res=mysql_fetch_row($exe2))
		for($j=0;$j<$xnum;$j+=$num)
		{
			for ($i=0;$i<$num;$i++)
			{	$v=$i+$j;
				$qry="UPDATE $tbname SET $fields[$i]='$newdata[$v]' where $fields[$i]='$olddata[$v]'";
				$exe3=mysql_query($qry);
			}
		}
	if(isset($_POST['check']))
	{
	$checked=$_POST['check'];
	$xquery="SELECT `COLUMN_NAME` FROM `information_schema`.`COLUMNS`
				WHERE (`TABLE_SCHEMA` = '$z')
				AND (`TABLE_NAME` = '$tbname')
				AND (`COLUMN_KEY` = 'PRI');";
	$xexe=mysql_query($xquery);
	$val=mysql_fetch_row($xexe); //to fetch primary key column
	$val[0];
	$query="select * from $tbname";
	$exe2=mysql_query($query);
	$xnum=mysql_num_fields($exe2);
	$ynum=0;
				$i = 0;
				while ($i < $xnum) 
				{	
					$meta = mysql_fetch_field($exe2, $i);
					if (!$meta) 
					{
						echo "No information available<br />\n";
					}
					$fields[$i]=$meta->name;
					if($fields[$i]==$val[0])
						{ $ynum=$i;
						}
					$i++;
				}
				$j=0;
					while($res=mysql_fetch_row($exe2))
						{	
							$i=0;
							
							foreach($checked as $cdel)
							{ 
								if($j==$cdel)
									{
									$delquery="DELETE FROM $tbname where $val[0]='$res[$ynum]'";
									$delx=mysql_query($delquery);
									$i++;
									}
								
							}
							$j++;
						}
			}
					echo "Table data updated/deleted.";
}
?>
<hr style="border-top: dotted 3px 0973B9; height:3px" />
<b>Insert into Table:</b></br>
<?php
$tables=mysql_query("show tables");
echo "<select name='tbinsert'><optgroup label='Tables_in_$z'>";	 	
					while($res=mysql_fetch_row($tables))
						{	$i=0;
							while ($i < mysql_num_fields($tables)) 
							{	echo "<option value='$res[$i]'>".$res[$i]."</option>";
								$i++;
								}
						}
				echo "</optgroup></select>";
?>
&nbsp;<input type="submit" value="Insert" name="ins">
<?php
if(isset($_POST['ins']))
	{	$tbsel=$_POST['tbinsert'];
		$query="select * from $tbsel";
		$exe2=mysql_query($query);
		$xnum=mysql_num_fields($exe2);
				$i = 0;
				echo "</br><table border='2' align='center'><tr><th colspan='$xnum'>Table: $tbsel</th></tr><tr>";
				while ($i < $xnum) 
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
				echo "<tr>";
				$i=0;
							while ($i < mysql_num_fields($exe2)) 
							{			
								echo "<td>"."<input type='text' name='insdata[]'>"."</td>";
								$i++;
							}
							
							echo "</tr>";
							echo "</table>";
							$f=implode(", ",$fields);
							echo "<input type='hidden' name='fields' value='$f'>";
							echo "<input type='hidden' name='fnum' value='$xnum'>";
							echo "<input type='hidden' name='tbsel' value='$tbsel'>";
							echo "<input type='submit' name='insert' value='Insert Data'>";
		}
		if(isset($_POST['insert']))
		{	$insdata=$_POST['insdata'];
			$fields=$_POST['fields'];
			$tbname=$_POST['tbsel'];
			$xnum=$_POST['fnum'];
			$qry="INSERT INTO $tbname";
			for($i=0;$i<$xnum;$i++)
				{	$insdata[$i]="'".$insdata[$i]."'";
				}
			$v=implode(", ",$insdata);
			$qry=$qry." (".$fields.") VALUES (".$v.")";
			$exe=mysql_query($qry);
			if(!$exe)
			echo $err=mysql_error();
			else echo "Data Inserted";
		}
		
		
?>
</div>
</div>
