<?php
require_once($_SERVER['DOCUMENT_ROOT']."/test/db_connect.php");
$db= new connect();
$db->request("update `posts` set `Title`='{$_POST["title_post"]}',`preview`='{$_POST["preview_post"]}',`Text`='{$_POST['text_post']}' where `id_posts`='{$_POST['id_post']}';");
header("Location: ../../index.php");