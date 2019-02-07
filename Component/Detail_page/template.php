<?php require_once($_SERVER['DOCUMENT_ROOT']."test/header.php");
require_once ("component.php");
?>
<script>
var id=<?=$id?>;
</script>
<div class="detail_page">
<h1 class="detail_title"><?=$result["Title"]?></h1>
<div class="detail_text">
 <?=$result["Text"]?>
    <hr>
    <div class="user">
        Создатель поста: <?=$result["name"]?> <?=$result["lastname"]?>  <?=$result["email"]?>
    </div>
    <div class="date">
        Дата создания поста: <?=$result["date"];?></div>
</div>


    <? if (isset($_SESSION["name"])) : ?>
    <form id="comment" method="POST" action="/test/component/comment/component.php">
  <textarea class="area-center" name="text"></textarea>
    <input type="hidden" name="id" value="<?=$_GET["id"]?>">
<input type="submit" class="area-center" value="Добавить комментарий">
    </form>
<?endif;?>

    <div class="nofloat"></div>



</div>
<?php require_once($_SERVER['DOCUMENT_ROOT']."test/footer.php");?>
