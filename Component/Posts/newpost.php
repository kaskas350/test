<?php
require_once($_SERVER['DOCUMENT_ROOT']."/test/db_connect.php");

$title_post=addslashes($_POST['title_post']);
$text_post=addslashes($_POST['text_post']);
$text_preview=addslashes($_POST['preview_post']);
$db=new connect();
if (($text_preview=="")||($text_post==""))
{

} else {
$d=date("20y-m-d G:i");
    copy($_FILES["pict"]["tmp_name"],$_SERVER['DOCUMENT_ROOT']."/test/image/".$_FILES["pict"]["name"]);
    $db->request("insert into `pictures` value ('image/{$_FILES['pict']['name']}',0)");

    $s="image/{$_FILES['pict']['name']}";
    $n=$db->request("select `id_picture` from `pictures` where `pictures`.`link_pictures`='$s';");
    $n=$n["id_picture"];
    $db->request("insert into `posts` value ('{$title_post}','{$text_preview}','{$text_post}',$n,'$d',0);");
    $id_post=($db->request("select `id_posts` from `posts` where `posts`.`Title`='{$title_post}'"))["id_posts"];
   session_start();

  $db->request("insert into `posts_user` values ('{$id_post}','{$_SESSION["id_user"]}');");
    header("Location: /Test/index.php");

}