<?php

$school_name=$_POST["school_name"];
$year_total=$_POST["year_total"];
$school_short_name=$_POST["school_short_name"];
include_once("../sql_constent.php");
$con=mysql_connect($sql_domain,$sql_usr_name,$sql_pwd);
if (!$con) {mysql_error();}
mysql_select_db("avatar");
$sql="INSERT INTO select_info (school_name,year_total,school_short_name)
VALUES
('$school_name',
'$year_total',
'$school_short_name'
)
";
mysql_query("SET NAMES UTF8");
$result=mysql_query($sql);

if ($result)
	echo "success";
else
{
	echo "fail";
	mysql_error();
}
for($i=1;$i<=$year_total;$i++)
	for($j=1;$j<=2;$j++)
	{
	$name_db='course_'.$school_short_name.'_'.$i.'_'.$j;
	$sql="CREATE TABLE ".$name_db." 
	(
	course_name varchar(50),
	course_description varchar(280),
	course_image_url varchar(70),
	course_id varchar(10),
	course_department varchar(30)
	)
	CHARACTER SET utf8 COLLATE utf8_unicode_ci";
	mysql_query($sql) or die("新建对应课程数据库出错");
	$sql = "ALTER TABLE `".$name_db."` ADD UNIQUE(`course_id`);";
	mysql_query($sql) or die("唯一值设置出错");
	}




echo "
<head>
    <meta charset='utf-8'>
</head>
<a href='../manage.php'>返回</a>
";
?>