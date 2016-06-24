<?php
$host= "localhost";
$user= "root";
$pass= "";
$dbname= "liva";
mysql_connect($host,$user,$pass);
mysql_select_db($dbname)
or die ( "Connect Failed!!!:" .mysql_error());
?>