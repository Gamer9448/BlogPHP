<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
include ('./code/connection.php');

$id = (int) $_GET['id'];
$select = mysqli_query($connection,"SELECT * FROM posts WHERE id = '$id'"); 
$post = mysqli_fetch_assoc($select);


?>
<title><?php echo $post['title']; ?></title>
</head>
<body>

<div class="container">
<div class="post">
<h3><?php echo $post['title']; ?></h3>
<p><?php echo $post['content']; ?></p>
<img scr=<?php echo $row['image'];?>>
</div>
</div> 
</body>
</html>