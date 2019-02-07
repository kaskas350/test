<?php require_once($_SERVER['DOCUMENT_ROOT']."test/header.php");?>

<div class="detail_page">
    <h1 class="detail_title">Регистрация</h1>

    <form class="detail_text" method="POST" action="registration.php">
        <table>

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
                <div class="pole">
                    <td>  Повторите пароль:</td>
                    <td><input type="password" name="check_password"></td>
                </div>
            </tr>

            <tr>
                <td colspan="2" class="center">
                    <input type="submit" value="Зарегистрироваться"
                </td>
            </tr>
        </table>
    </form>


</div>


<?php require_once($_SERVER['DOCUMENT_ROOT']."test/footer.php");?>
