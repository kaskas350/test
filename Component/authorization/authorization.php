<?php require_once($_SERVER['DOCUMENT_ROOT']."test/header.php");?>


<div class="detail_page">
    <h1 class="detail_title">Авторизация</h1>

    <form class="detail_text" method="POST" action="authoriz.php">
        <table class="center_object">

            <tr>
                <div class="pole">
                    <td>Ваш Логин:</td>
                    <td><input type="text" name="login"></td>
                </div>
            </tr>
            <tr>
                <div class="pole">
                    <td> Ваш пароль:</td>
                    <td><input type="password" name="password"></td>
                </div>
            </tr>


            <tr>
                <td class="center" colspan="2">
                    <input type="submit" value="Войти">
                </td>
            </tr>
            <tr>

                <td colspan="2" class="center"><a href="../Register/register.php">Регистрация</a></td>
            </tr>
        </table>
    </form>


</div>


<?php require_once($_SERVER['DOCUMENT_ROOT']."test/footer.php");?>
