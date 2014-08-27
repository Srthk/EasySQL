<?php
$host="localhost";
$user="root";
$pass="";
$database="mysql";
$con= mysql_connect($host,$user,$pass);
mysql_select_db($database);
$z=$_GET['q'];
if($z == 1)
{
echo("<B><U>CREATE TABLE</U></B><BR><BR>Create Table Table_name(Column_1 (data type)(size),Column_2 (data type)(size),..Column_n (data type)(size))");
}
if($z==2)
{
echo("<B><U>INSERT INTO TABLE</U></B><BR>INSERT INTO Table_name VALUES(value1,value2,value3,...)");
}
if($z==3)
{
echo("<B><U>SELECT FROM TABLE</U></B><BR>SELECT column_name1 from Table_name WHERE column_name2=value<br>SELECT column_name1 from Table_name WHERE column_name2=value<br>SELECT * from Table_name WHERE column_name=value\n<br>SELECT * FROM Table_NAME");
}
if($z==4)
{
echo("<B> <U>DELETE FROM TABLE</U></B><BR>DELETE * from Table_name<br>DELETE from Table_name WHERE some_column=some_value");
}
if($z==5)
{
echo("<B><U>UPDATE TABLE</U></B><BR>UPDATE Table_name SET column1=value, column2=value2,...<BR>UPDATE Table_name SET column1=value, column2=value2,.. WHERE some_column=some_value");
}
if($z==6)
{
echo("<B> <U>ALTER TABLE</U></B><BR>ALTER Table Table_name ADD column_name data_type");
}
if($z==7)
{
echo("<B><U>CREATE PRIMARY KEY</U> </B><BR>CREATE Table Table_name(column_1 data_type,column_2 data_type,..column_n data_type,PRIMARY KEY(column_1))<BR>OR<BR> ALTER Table Table_name ADD PRIMARY KEY(column_name)");
}
if($z==8)
{
echo("<B><U>CREATE UNIQUE KEY</U> </B><BR>CREATE Table Table_name(column_1 data_type UNIQUE,column_2 data_type,..column_n data_type) <BR>OR <BR>  ALTER Table ab_student ADD UNIQUE(column_name)");
}
if($z==9)
{
echo("<B><U>CREATE FOREIGN KEY </U></B><BR>CREATE TABLE table_name1(column_1 data_type,column_2 data_type,..Column_n data_type,Column_1 data_type FOREIGN KEY REFERENCES table_name2(column_1))<BR>OR<BR>ALTER TABLE table_name2 ADD FOREIGN KEY(column_name) REFERENCES table_name1(column_name)");
}
if($z==10)
{
echo("<B><U>JOIN</U></B><br> SELECT column_name(s) FROM table_name1 INNER JOIN table_name2 ON table_name1.column_name=table_name2.column_name<BR>SELECT column_name(s) FROM table_name1 LEFT JOIN table_name2 ON table_name1.column_name=table_name2.column_name<BR>SELECT column_name(s) FROM table_name1 RIGHT JOIN table_name2 ON table_name1.column_name=table_name2.column_name<BR>SELECT column_name(s) FROM table_name1 FULL JOIN table_name2 ON table_name1.column_name=table_name2.column_name<BR>");
}
if($z==11)
{
echo("<B><U>AGGREGATE FUNCTIONS	:</U></B><br>1)	AVG    : SELECT AVG(column_name) FROM Table_name<BR>2)	MIN     : SELECT MIN(column_name) FROM Table_name<BR>3)	MAX     : SELECT MAX(column_name) FROM Table_name<BR>4)	COUNT   : SELECT COUNT(column_name) FROM Table_name<BR>5)	SUM     : SELECT SUM(column_name) FROM Table_name<BR>6)	ABS     : SELECT ABS(number) from DUAL<BR>7)	SQRT    : SELECT SQRT(n) from dual<BR>8)	POWER   : SELECT POWER(m,n) from dual <BR>9)	ROUND   : SELECT ROUND(column_name,decimals) FROM DUAL<BR>");
}
if($z==12)
{
echo("<B><U>STRING FUNCTIONS:</U></B><br>1)	LOWER   :SELECT LOWER('string') FROM DUAL<BR>2)	UPPER   :SELECT UPPER('string') FROM DUAL<BR>3)	SUBSTR  :SELECT SUBSTR('string',start_position,length) FROM DUAL<BR>4)	ASCII   :SELECT ASCII('character') FROM DUAL<BR>5)	LENGTH  :SELECT LENGTH('string') FROM DUAL<BR>6)	TRIM    :SELECT LTRIM('string1','trim string') FROM DUAL   <BR> OR<BR>SELECT RTRIM('string1','trim string') FROM DUAL");
}
if($z==13)
{
echo("<B><U>GROUP BY CLAUSE</U> </B>SELECT column1, column2, ... column_n, aggregate_function (expression)<BR>FROM tables<BR>GROUP BY column1, column2, ... column_n ");
}
if($z==14)
{
echo(" <B><U>HAVING CLAUSE</U> </B><br>SELECT column_name, aggregate_function(column_name)<BR>FROM Table_name<BR>GROUP BY column_name<BR>HAVING aggregate_function(column_name) operator value");
}
?>