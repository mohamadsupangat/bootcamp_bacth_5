<!DOCTYPE html>
<html>
<head>
	<title>Jawaban  No.7</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<div class="container mt-2">
	<?php
	$db=mysqli_connect("localhost","root","pangat","jawaban");
	$query1=mysqli_query($db,"SELECT *, posts.id AS pid FROM posts JOIN users ON posts.createdBy = users.id ORDER BY posts.id DESC");
	while ($post=mysqli_fetch_object($query1)) {
	?>
	<div class="row">
		<div class="col-md-8">
			<div class="card">
				<div class="card-body">
					<h3>posts.title: <?= $post->title; ?></h3>
					<small >posts.users.username: dibuat oleh <?= $post->username; ?></small>
					<hr>
					<?= $post->content; ?>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<div class="card-body">
					<h5>Comments on <?= $post->title ;?> :</h5>
					<hr>
					<?php
						$query2=mysqli_query($db,"SELECT * FROM comments WHERE postId = ".$post->pid."  ORDER BY id DESC");
						while ($c=mysqli_fetch_object($query2)) {
							echo "<div class='card'> <div class='card-body'>".$c->comment."</div></div>";
						}
					?>
				</div>
			</div>			
		</div>
	</div>
	<?php
	}
	?>
</div>
</body>
</html>