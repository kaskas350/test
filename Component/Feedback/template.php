<?php
require_once($_SERVER['DOCUMENT_ROOT']."test/header.php");
?>
<div class="detail_page">
    <h1 class="detail_title">Форма обратной связи</h1>
    <form method="POST" id="proverka" action="Component.php">
    <table  class="center_object">
        <tr>
            <td>Ваше имя:</td>
           <td><input type="text" name="name" class="required" title="Введите имя" value="sergey"></td>
        </tr>
        <tr>
            <td>Ваша фамилия:</td>
            <td> <input type="text" name="lastname" class="required"  title="Ведите фамилию" value="kopytov"></td>
        </tr>
        <tr>
            <td>Ваш email: </td>
        <td><input type="email" name="email" class="required email" title="Ведите email" value="serge-kopytov@yandex.ru"></td>
        </tr>
        <td>Тема письма: </td>
        <td><input type="text" name="subject" class="required" title="Введите тему письма" value="tema"></td>
        </tr>
<tr><td  colspan="2">Добавить текст</td></tr>
<tr><td colspan="2"><textarea name="text" class="required" title="Введите текст письма">text</textarea></td></tr>
        <tr><td colspan="2"><input type="button" value="Отправить"></td></tr>
        <tr><td colspan="2" class="uspeh"></td></tr>
    </table>
    </form>

</div>






<?php require_once($_SERVER['DOCUMENT_ROOT']."test/footer.php");?>
