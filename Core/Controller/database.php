<?php 
$config = array(

	'db' => array(
		'server' => 'localhost',
		'username' => 'root',
		'password' => '',
		'name' => 'CRM',

	),
);
$connection = mysqli_connect(
	$config['db']['server'],
	$config['db']['username'],
	$config['db']['password'],
	$config['db']['name']
);

if($connection == false){
	echo 'didnd get it';
}else{
	echo 'got it';
}
