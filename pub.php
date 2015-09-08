<?php
header("content-type:text/html;charset=UTF-8");
require('inc/conn.php');
require('inc/lib.php');

$title = $_POST['title'];
$name = $_POST['name'];
$content = $_POST['content'];

$sql = "insert into msg (title,name,content) values ('$title','$name','$content')";
$rs = mysql_query($sql, $conn);

?>
<!DOCTYPE html>
<html>
<head>
	<title>留言结果</title>
</head>
<body>
	<?php if ($rs) { ?>
		<h1>留言成功</h1>
	<?php }else{ ?>
		<h1>留言失败</h1>
		<h1>错误详情：<?php echo mysql_error(); ?></h1>
	<?php } ?>
	<br/>
	<a href='list.php'>返回留言列表</a>
</body>
</html>