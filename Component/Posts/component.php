<?php
$db = new PDO('mysql:host=localhost;dbname=test',"root","");
$n=$db->query("SELECT COUNT(1) FROM `posts`;")->fetch(PDO::FETCH_ASSOC);
$n=$n["COUNT(1)"];
if (empty($_GET["page"]))
{
    $page=0;
} else {
    $page=3*$_GET["page"];
}
?>
<script>
   var pages=<?=$page?>;
    var n=<?=$n?>;
</script>
<?
$query=$db->query("select * from `posts` LIMIT {$page}, 3;");
$i=0;
while ($result["post"][$i]=$query->fetch(PDO::FETCH_ASSOC))
{
    $pictur=$db->query("select `link_pictures` from `pictures` where `pictures`.`id_picture`='{$result["post"][$i]['pictures_id']}';");
    $result["post"][$i]["pict"]=$pictur->fetch(PDO::FETCH_ASSOC);
    $i++;
}
unset($result["post"][$i]);
?>
