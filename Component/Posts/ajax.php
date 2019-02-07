
<?
require_once ("component.php");?>
<? for ($i=0;$i<count($result["post"]);$i++):
    ?>
    <div class="blog">
        <div class="photo"><img src="<?=$result["post"][$i]["pict"]["link_pictures"]?>" height="150px"></div>
        <div class="title"><a href="<?="post/".$result["post"][$i]["id_posts"]?>"><?=$result["post"][$i]["Title"]?></a></div>
        <div class="text"><?=$result["post"][$i]["preview"]?></div>
    </div>
<?endfor;?>
