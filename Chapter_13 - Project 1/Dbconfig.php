<?php
$connect=mysql_connect("localhost","root","");
if(!$connect)
{
echo "No Connection";
}
mysql_select_db("dbname");
?>

