<?
if (empty($id))
{
$id=$_GET["id"];
}
 if(empty($db))
 {
$db= new PDO('mysql:host=localhost;dbname=test',"root","");
}
if (empty($query))
{
$query=$db->query("select * from `comments`,`data_users` where `comments`.`id_users`=`data_users`.`id_users` 
and `comments`.`id_posts`='{$id}';");
}
$i=0;
while ($post[$i]=$query->fetch(PDO::FETCH_ASSOC))
{
    $i++;
}
unset($post[$i]);
?>



<?foreach( $post as $k=>$m) :?>
<div class="comments">
    <div class="author"> Автор поста: <?=$m["name"]?> <?=$m["lastname"]?> <span>Дата поста: <?=$m["date"]?></span></div>
    <div class="comments_author"><?=$m["text_comment"]?></div>
        </div>
<?endforeach;?>

