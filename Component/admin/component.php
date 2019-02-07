<?php
$db= new PDO('mysql:host=localhost;dbname=test',"root","");

$i=0;
$q1=$db->query("SELECT `login`,`name`,`lastname`,`Title`,`date`,`posts`.`id_posts` from `data_users`,`posts`,`posts_user`,`users` where `users`.`id_users`=`posts_user`.`id_users` and `data_users`.`id_users`=`users`.`id_users` and `posts`.`id_posts`=`posts_user`.`id_posts`;");
while ($post[$i]=$q1->fetch(PDO::FETCH_ASSOC))
{
$i++;
}
unset($post[$i]);
