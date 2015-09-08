<?php
header("content-type:text/html;charset=UTF-8");
require('inc/conn.php');

$title = $_POST['title'];
$name = $_POST['name'];
$content = $_POST['content'];
$id = $_POST['id'] + 0;

$sql = "update msg set title = '$title', name = '$name', content = '$content' where id = '$id'";
$rs = mysql_query($sql, $conn);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>修改留言</title>
</head>
<body>
	<?php if ($rs) { ?>
	<h1>修改成功</h1>
	<?php }else{ ?>
	<h1>修改失败，错误原因：<?php echo mysql_error(); ?></h1>
	<?php } ?>
	<br/>
	<a href='list.php'>返回留言列表</a>
</body>
</html>