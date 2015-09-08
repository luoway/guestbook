<?php
header("content-type:text/html;charset=UTF-8");
//函数封装
function selAll($sql, $conn){
	$rs = mysql_query($sql, $conn);
	if (!$rs) {
		echo mysql_error();
		return false;
	}

	$list = array();
	while ($row = mysql_fetch_assoc($rs)) {
		$list[] = $row;
	}

	return $list;
}


function selRow($sql, $conn){
	$rs = mysql_query($sql, $conn);
	if (!$rs) {
		echo mysql_error();
		return false;
	}

	return mysql_fetch_assoc($rs);
}
?>