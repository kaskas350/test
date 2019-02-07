<?php
require_once($_SERVER['DOCUMENT_ROOT']."/test/db_connect.php");
$db= new PDO('mysql:host=localhost;dbname=test',"root","");
$i=0;
$m=$db->query("select * from `posts_user`,`posts` where `posts`.`id_posts`=`posts_user`.`id_posts` 
and `posts_user`.`id_users`='{$_SESSION['id_user']}';");
while ($post[$i]=$m->fetch(PDO::FETCH_ASSOC))
{
   $i++;
}
unset($post[$i]);



