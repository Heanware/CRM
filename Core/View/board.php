<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CRM</title>
	<link rel="stylesheet" href="../../Templates/css/style.css">
</head>
<body>

	<div class="post-body">
		<a href="Core/View/post-adding.php">Добавить пост</a>
		<div class="board-info post-info">
			<div class="board-title board-post-title">
				<h1>TITLE</h1>
			</div>
			<div class="board-last">
				<div class="board-count">
					<h1>VIEWS</h1>
				</div>
			</div>
		</div>
		<?php while($posts = mysqli_fetch_assoc($allPosts)) { ?>
			<div class="board-post">
				<div class="board-post-info">
					<div class="board-post-title">
						<a href=""><h1><?php echo $posts['title'] ?></h1></a>
					</div>
					<div class="board-post-description">
						<?php echo $posts['description'] ?>
					</div>
				</div>
				<div class="board-post-count">
					<h2><?php echo $posts['views'] ?></h2>
				</div>	
				<div class="board-post-image">
					<img src="../../Templates/img/<?php echo $posts['image'] ?>" alt="">
				</div>
			</div>
			<?php
		} 
		?>
	</div>
</body>
</html>