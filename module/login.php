<?php
$Email=$_POST['Email'];
$pwd=$_POST['password'];
include_once("../sql_constent.php");
$con=mysql_connect($sql_domain,$sql_usr_name,$sql_pwd);
if (!$con) {mysql_error();}
mysql_select_db("avatar");
mysql_query("SET NAMES UTF8");

$query = mysql_query("SELECT usr_name FROM usr_info " 
."where usr_email = '$Email' and usr_password = '$pwd'") 
or die("SQL语句执行失败"); 

if($row = mysql_fetch_array($query)) 
{ 
session_start(); //标志Session的开始 
//
$_SESSION['usr_name'] = $row['usr_name'];
}
else
{
	echo "信息不正确";
	echo "<a href='../index.php'>点此返回</a>";
} 
header ("Location:../index.php");
?>
