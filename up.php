<?php
header("content-type:text/html;charset=UTF-8");
require('inc/conn.php');
require('inc/lib.php');

$id = $_GET['id'] + 0;
if (!$id) {
	echo '非法参数';
}

$sql = "select * from msg where id = $id";

$msg = selRow($sql, $conn);
if(!$msg){
	echo '参数有误';
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>发布留言</title>
</head>
<body>
	<form action="up_ok.php" method="POST">
		<p>标题：<input type="text" name="title" value="<?php echo $msg['title']; ?>"></p>
		<p>留言者：<input type="text" name="name" value="<?php echo $msg['name']; ?>"></p>
		<p>留言内容：<br/>
			<textarea name="content" cols="30" rows="10"><?php echo $msg['content']; ?></textarea>
		</p>
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<p><input type="submit" value="提交留言"></p>
	</form>
</body>
</html>