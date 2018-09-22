<?php
$db=mysqli_connect("localhost","root","pangat","jawaban");
$query1=mysqli_query($db,"SELECT *, posts.id AS pid FROM posts JOIN users ON posts.createdBy = users.id ORDER BY posts.id DESC");
while ($post=mysqli_fetch_object($query1)) {
	echo "<ul>";
	echo "<li>posts.title: ".$post->title."</li>";
	echo "<li>posts.users.username: dibuat oleh ".$post->username."</li>";
	echo "<li> Comments: <ul> ";
		$query2=mysqli_query($db,"SELECT * FROM comments WHERE postId = ".$post->pid."  ORDER BY id DESC");
		while ($c=mysqli_fetch_object($query2)) {
			echo "<li>".$c->comment."</li>";
		}
		echo "</ul></li></ul>";
}
?>