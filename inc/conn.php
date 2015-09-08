<?php
header("content-type:text/html;charset=UTF-8");
//连接数据库
	$conn = mysql_connect('localhost','root','');
	if (!$conn) {
		echo "连接数据库失败";
		exit;
	}

	$sql = 'use php';
	mysql_query($sql, $conn);
?>