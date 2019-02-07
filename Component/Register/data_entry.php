<?php
require_once($_SERVER['DOCUMENT_ROOT']."test/header.php");

?>

<div class="detail_page">
    <h1 class="detail_title">Регистрация</h1>
    <form class="detail_text" method="POST" action="registration_handler.php">
        <table>
            <tr>
                <div class="pole">
                    <td>Ваше имя:</td>
                    <td><input type="text" name="name"></td>
                </div>
            </tr>


            <tr>
                <div class="pole">
                    <td>Ваша фамилия:</td>
                    <td><input type="text" name="lastname"></td>
                </div>
            </tr>

            <tr>
                <div class="pole">
                    <td>Ваш Город:</td>
                    <td><input type="text" name="city"></td>
                </div>
            </tr>

            <tr>
                <div class="pole">
                    <td>Ваш email:</td>
                    <td><input type="text" name="email"></td>
                </div>
            </tr>

            <tr>
                <div class="pole">
                    <td>Ваш возраст:</td>
                    <td>
                        <select name="age" >
                        <?for ($i=18;$i<=60;$i++) :?>
                        <option><?=$i;?></option>
                        <?endfor;?>
                        </select>
                    </td>
                </div>
            </tr>






            <tr>
                <td colspan="2" class="center">
                    <input type="submit" value="Зарегистрироваться">
                </td>
            </tr>
        </table>
    </form>

</div>


<? require_once($_SERVER['DOCUMENT_ROOT']."test/footer.php");?>
