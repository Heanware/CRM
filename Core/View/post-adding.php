<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CRM</title>
	<link rel="stylesheet" href="../../Templates/css/style.css">
</head>
<body>
	<form action="../Controller/controller.php" method="POST">
		<div class="post-adding">

			Название статьи<input type="text" name="title">
			Описание статьи<input type="text" name="description">
			Текст статьи<input type="text" name="text">
			Картинка статьи<input type="text" name="image">
			<input type="submit" value="ADD POST" name="addpost">

		</div>
	</form>

</body>
</html>