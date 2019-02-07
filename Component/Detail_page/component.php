<?php
require_once($_SERVER['DOCUMENT_ROOT']."/test/db_connect.php");
$db= new PDO('mysql:host=localhost;dbname=test',"root","");
$id=$_GET["id"];
$result=$db->query("select * from `posts` where `posts`.`id_posts`='{$id}'; ")->fetch(PDO::FETCH_ASSOC);
$user=$db->query("select `name`,`lastname`,`email` from `data_users`,`posts_user` 
where `posts_user`.`id_posts`={$result["id_posts"]} and `posts_user`.`id_users`=`data_users`.`id_users`;")->fetch(PDO::FETCH_ASSOC);
$i=0;
foreach ($user as $k=>$m) {
    $result[$k]=$m;
}
if (!empty($post)) {
foreach ($post as $k=>$m) {
    $result["comment"][$k]=$m;
}}