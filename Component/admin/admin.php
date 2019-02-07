<?php require_once($_SERVER['DOCUMENT_ROOT']."test/header.php");
require_once($_SERVER['DOCUMENT_ROOT']."/test/Component/admin/component.php"); ?>
<div class="detail_page">
    <h1 class="detail_title">Администрирование</h1>

    <h1 class="detail_title">Посты</h1>
    <table class="center_object">

        <? if (count($post)):?>

            <tr>
                <td>Статья</td>
                <td>Дата</td>
                <td>Логин пользователя</td>
                <td>Имя пользователя</td>
                <td>Фамилия пользователя</td>
                <td>Изменить статью</td>
                <td>Удалить статью</td>
            </tr>
            <?foreach ($post as $k=>$m) :?>
                <tr>

                    <td> <?=$m["Title"]?></td>
                    <td><?=$m["date"]?></td>
                    <td><?=$m["login"]?></td>
                    <td><?=$m["name"]?></td>
                    <td><?=$m["lastname"]?></td>
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

                <td >Список постов пуст</td>
            </tr>


        <?endif;?>

    </table>

</div>



<?php require_once($_SERVER['DOCUMENT_ROOT']."test/footer.php");?>
