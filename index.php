<?php

	require_once('public/sql.php');	
	$sql="select * from message";
	$res=$mysqli->query($sql);
	$rows=array();
	while($row=$res->fetch_assoc())
	{
		$rows[]=$row;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>留言板</title>
	<link rel="stylesheet" href="bs/css/bootstrap.min.css">
	<script src="bs/js/jquery.min.js"></script>
	<script src="bs/js/bootstrap.min.js"></script>
	<script src="bs/js/holder.min.js"></script>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-inverse" >
		  <div class="navbar-header">
		    <a class="navbar-brand"  href="index.php">留言板</a>
		  </div>
		 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		    <ul class="nav navbar-nav">
		      <li><a href="message.php">发布留言</a></li>
		    </ul>
		  </div><!-- /.navbar-collapse -->
		</nav>
		<div class="row">
		  <div class="col-md-3">
		  	<div class="panel panel-primary">
				<div class="panel-heading">
					最新
				</div>
				<div class="panel-body">
				  	<ul>
				  		<li>内容</li>
				  	</ul>
				</div>
			</div>
		  </div>
		  <div class="col-md-9">
		<?php foreach($rows as $v){ ?>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<span class="glyphicon glyphicon-star"></span><?php echo $v['title']; ?>
				</div>
				<div class="panel-body" style="height:120px;">
				  	<?php echo $v['content']; ?>
				</div>
				<div class="panel-footer">
					<?php echo $v['time']; ?>
				</div>
			</div>
		<?php }; ?>
			<ul class="pager">
			  <li class="previous"><a href="#">&larr; 首页</a></li>
			  <li><a href="#">上一页</a></li>
			  <li><a href="#">下一页</a></li>
			  <li class="next"><a href="#">末页 &rarr;</a></li>
			</ul>
				

				
			</div>
		</div>
	</div>
</body>
</html>
