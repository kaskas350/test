<?php require_once($_SERVER['DOCUMENT_ROOT']."/test/header.php");
require_once($_SERVER['DOCUMENT_ROOT']."/test/Component/authorization/select.php"); ?>
<div class="detail_page">

    <h1 class="detail_title">Личные данные</h1>
    <table class="center_object">
        <tr>
            <td> Логин:</td>
            <td> <?=$_SESSION["login"]?> </td>
        </tr>

        <tr>
            <td> Имя:</td>
            <td> <?=$_SESSION["name"]?></td>
        </tr>
        <tr>
            <td>Фамилия:</td>
            <td><?=$_SESSION["lastname"]?></td>
        </tr>
        <tr>
            <td>Возраст:</td>
            <td><?=$_SESSION["age"]?></td>
        </tr>
        <tr>
            <td>Город:</td>
            <td>
                <?=$_SESSION["city"]?>
            </td>
        </tr>
        <tr>
            <td>
                email:
            </td>
            <td>
                <?=$_SESSION["email"]?>
            </td>
        </tr>
    </table>

    <h1 class="detail_title">Мои посты</h1>
<table class="center_object">

    <? if (count($post)):?>

    <tr>
        <td>Статья</td>
        <td>Краткое описание</td>
        <td>Изменить статью</td>
        <td>Удалить статью</td>
    </tr>
 <?foreach ($post as $k=>$m) :?>
    <tr>

        <td> <?=$m["Title"]?></td>
        <td><?=$m["preview"]?></td>

            <td>
                <form action="../Posts/change_post_template.php" method="POST">
                    <input type="hidden" name="posts" value="<?=$m["id_posts"]?>">
                    <input type="submit" value="Изменить статью">
                </form>
            </td>
            <td>
                <form action="../Posts/delete_post.php" method="POST">
                <input type="hidden" name="posts" value="<?=$m["id_posts"]?>">
                <input type="submit" value="Удалить">
        </form>
            </td>

    </tr>


<?endforeach?>
<?  else : ?>
<tr>

    <td >У вас нет статей</td>
</tr>


<?endif;?>

</table>

    <h1 class="detail_title">Добавить пост</h1>
<table class="center_object">
    <form method="POST" action="/test/component/Posts/newpost.php" enctype="multipart/form-data">
    <tr>
        <td>
            Заголовок:
        </td>
        <td>
<input type="text" name="title_post">
        </td>
    </tr>

        <tr >
            <td colspan="2">
                Краткое описание:
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <textarea name="preview_post"></textarea>
            </td>
        </tr>
        <tr>

        <tr >
            <td colspan="2">
                Текст поста:
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <textarea name="text_post"></textarea>
            </td>
        </tr>
        <tr>
            <td >
               Выберете фото:
            </td>
            <td>
                <input type="file" name="pict">
            </td>
        </tr>


        <tr>
            <td colspan="2">
                <input type="submit">
            </td>
        </tr>
    </form>

</table>


</div>

<?php require_once($_SERVER['DOCUMENT_ROOT']."/test/footer.php");?>
