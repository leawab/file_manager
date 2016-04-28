<?php
require_once "inc/config.php";

$pictures = glob('img/*');
debug ($pictures);
// debug($list_img);
//$picture_key = array_rand($list_img);

foreach($pictures as $picture_path) {

	$picture_filename = basename($picture_path);

	$query = $db->prepare('SELECT name, picture FROM products WHERE picture = :picture ');
	$query->bindValue(':picture',$picture_filename , PDO::PARAM_STR);

	$query->execute();
	$product = $query->fetch();
	debug($product);


}

