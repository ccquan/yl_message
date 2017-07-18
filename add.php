<?php 

	//引入数据库
	require_once('public/sql.php');	
	//接受数据
	$title=htmlspecialchars($_POST['title']);
	$title=$mysqli->escape_string($title);
	$content=htmlspecialchars($_POST['content']);
	$content=$mysqli->escape_string($content);
	$time=date('Y-m-d H:i:s');
	
	//编写sql语句
	$sql="insert into message values(default,'$title','$content','$time')";
	$res=$mysqli->query($sql);
	if(!$res)
	{
		echo "<script>alert('添加失败');window.location.href='message.php'</script>";
	}else
	{
		echo "<script>alert('添加成功');window.location.href='message.php'</script>";
	}

?>
