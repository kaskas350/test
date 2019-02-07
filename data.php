<?php
$db = new PDO('mysql:host=localhost;dbname=test',"kaskas","2456");
$query=$db->query("select * from `posts`;");
$i=0;
while ($result["post"][$i]=$query->fetch(PDO::FETCH_ASSOC))
{
    $pictur=$db->query("select `link_pictures` from `pictures` where `pictures`.`id_picture`='{$result["post"][$i]['pictures_id']}';");
$result["post"][$i]["pict"]=$pictur->fetch(PDO::FETCH_ASSOC);

$i++;
}
unset($result["post"][$i]);