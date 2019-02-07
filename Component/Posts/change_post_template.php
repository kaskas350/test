<?php require_once($_SERVER['DOCUMENT_ROOT']."/test/header.php");
require_once("change_post.php");
  ?>

    <div class="detail_page">
        <h1 class="detail_title">Изменить пост</h1>
        <table class="center_object">
            <form method="POST" action="create_post.php" enctype="multipart/form-data">
                <tr>
                    <td>
                        Заголовок:
                    </td>
                    <td>
                        <input type="text" name="title_post" value="<?=$post["Title"]?>">
                    </td>
                </tr>

                <tr >
                    <td colspan="2">
                        Краткое описание:
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <textarea name="preview_post"> <?=$post["preview"]?></textarea>
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
                        <textarea name="text_post"> <?=$post["Text"]?> </textarea>
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
                        <input type="submit" value="Изменить пост">
                        <input type="hidden" name="id_post" value="<?=$id_post?>">
                    </td>
                </tr>
            </form>

        </table>


    </div>

<?php require_once($_SERVER['DOCUMENT_ROOT']."/test/footer.php");?>