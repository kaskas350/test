<?php
require_once($_SERVER['DOCUMENT_ROOT']."/test/db_connect.php");
$db= new connect();
$id_post=$_POST["posts"];
$post=$db->request("select * from `posts` where `posts`.`id_posts`='{$id_post}'; ");
