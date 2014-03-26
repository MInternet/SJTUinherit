<?php
function read_selcet_info()
{
	global $sql_domain,$sql_usr_name,$sql_pwd;
	$con=mysql_connect($sql_domain,$sql_usr_name,$sql_pwd);
	if (!$con) {mysql_error();}
	mysql_select_db("avatar");
	$sql="SELECT * FROM select_info";
	mysql_query("SET NAMES UTF8");
	$result=mysql_query($sql);
	$row_num=mysql_num_rows($result);
	for($i=0;$i<=$row_num-1;$i++)
	{
		$a[$i]=mysql_fetch_assoc($result);
		
	}
	return $a;
}



?>