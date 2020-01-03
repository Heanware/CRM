<?php 
class Model{
	function getAllPosts($connection){
		$allPosts = mysqli_query($connection, "SELECT * FROM `posts`");
		return $allPosts;
	}
	function getSinglePost($connection, $postId){
		$currentPost = mysqli_query($connection, "SELECT * FROM `posts` WHERE 'id' = '$postId'");
	}
	
	function addPost($connection){
		$postTitle = $_POST['title'];
		$postDescription = $_POST['description'];
		$postText = $_POST['text'];
		$postImage = $_POST['image'];
		$addPost = mysqli_query($connection, "INSERT INTO `posts` (`title`, `description`, `text`, `image`) VALUES ($postTitle, $postDescriptionm, $postText, $postImage)");
	}

}