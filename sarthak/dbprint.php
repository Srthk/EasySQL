<?php
include('conn.php');
$con=mysql_connect($host,$user,$pass);
$z=$_GET['q'];
if($z == 1)
{
$dblist=mysql_query("show databases");
				$i = 0;
				echo "<div class='dtbase'>";
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
								echo "<td><input type='checkbox' name='SELDB[]' value='$dbase[$i]'>";
								echo $dbase[$i]."</td>";
								//echo "<td><input type='radio' name='sel' value='".$dbase[$i]."'>";
								$i++;
								
							}
							
							echo "</tr>";
						}
			echo "</table></div></br>";
	}
if($z==2)
{ echo "";
}