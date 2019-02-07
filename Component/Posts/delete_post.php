<?php
require_once($_SERVER['DOCUMENT_ROOT']."/test/db_connect.php");
$db= new connect();
$db->request("DELETE FROM `test`.`posts` WHERE `posts`.`id_posts` = '{$_POST['posts']}';");
$db->request("DELETE FROM `test`.`posts_user` WHERE `posts_user`.`id_posts` = '{$_POST['posts']}';");
header("Location:".$_SERVER["HTTP_REFERER"]);