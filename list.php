<?php
header("content-type:text/html;charset=UTF-8");
require('inc/conn.php');
require('inc/lib.php');

$sql = 'select * from msg';

$list = selAll($sql, $conn);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>留言本</title>
</head>
<body>
	<table>
		<tr>
			<td>标题<td>留言者</td><td>内容</td><td>修改</td><td>删除</td>
		</tr>
		<?php for ($i=0, $len=count($list); $i < $len; $i++) {  ?>
		<?php echo "<tr><td>",$list[$i]['title'],"</td><td>",$list[$i]['name'],"</td> <td>",$list[$i]['content'],"</td><td><a href='up.php?id=",$list[$i]['id'],"'>修改</a></td><td><a href='del.php?id=",$list[$i]['id'],"'>删除</a></td></tr>"; ?>
		<?php } ?>
	</table>
</body>
</html>