<?php



require __DIR__ . "/database.php";
require __DIR__ . "/../Model/model.php";
$Model = new Model;
$allPosts = $Model -> getAllPosts($connection);
if (isset($addpost)) {
	echo "string";
	$addPost = $Model -> addPost($connection);
}
require "../../Core/View/board.php";