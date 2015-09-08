<?php
header("content-type:text/html;charset=UTF-8");
require('inc/conn.php');
require('inc/lib.php');

$id = $_GET['id'] + 0;
if (!$id) {
	echo '非法参数';
}

$sql = "delete from msg where id = $id";
$rs = mysql_query($sql, $conn);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>删除留言</title>
</head>
<body>
	<?php if ($rs) { ?>
	<h1>删除成功</h1>
	<?php }else{ ?>
	<h1>删除失败，错误原因：<?php echo mysql_error(); ?></h1>
	<?php } ?>
	<br/>
	<a href='list.php'>返回留言列表</a>
</body>
</html>