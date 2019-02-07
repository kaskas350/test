<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/test/css/styles.css" type="text/css">
    <title>Тестовое задание</title>
</head>
<body>
<header>

    <div class="logo">
        <a href="/test/index.php"><img src="/test/image/logo.png" alt="Логотип" height="70"></a>
    </div>

    <section class="head">
        <ul>
            <a href="/test/static/about.php"><li>О нас</li></a>
            <a href="/test/"><li>Статьи</li></a>
            <a href="/test/component/feedback/template.php"><li>Обратная связь</li></a>
            <a href="/test/static/creator.php"><li>О создателе</li></a>
            <? session_start();
            if (@$_SESSION["login"] == "admin") :?>
                <a href="/test/Component/admin/admin.php"><li id="admin">Администрирование</li></a>
            <?endif?>
        </ul>
    </section>
<?
if(!isset($_SESSION["name"])) :?>
    <a class="link_register" href="/test/Component/authorization/authorization.php">Войти</a>
    <?else :?>

    <a class="link_register" href="/test/Component/authorization/profile.php"><?=$_SESSION["name"]?></a>
    <a  class="link_register logout" href="/test/Component/authorization/logout.php">Выйти</a>
    <?endif;?>

</header>
