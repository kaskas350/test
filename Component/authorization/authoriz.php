<?php
require_once($_SERVER['DOCUMENT_ROOT']."/test/db_connect.php");
$login=$_POST["login"];
$password=md5($_POST["password"]);
{
$db=new connect();
    $m=$db->request("select * from `users` where `login`='$login';");

if ($m["login"] == $login) {
    if (  $password == $m["password"])
    {
     $user=$db->request("select * from `data_users`,`users` where `data_users`.`id_users`=`users`.`id_users` and `users`.`login`='$login';");
     $id_user=$db->request("select `id_users` from `users` where `login`='{$login}'");
         $city=$db->request("SELECT `city_name` FROM `city`,`data_users`,`users` WHERE `users`.`login`='{$_POST['login']}' and `users`.`id_users`=`data_users`.`id_users`
and `data_users`.`id_city`=`city`.`id_city`;");
        session_start();
        $_SESSION["login"]=$login;
        $_SESSION["name"]=$user["name"];
        $_SESSION["lastname"]=$user["lastname"];
        $_SESSION["email"]=$user["email"];
        $_SESSION["age"]=$user["age"];
        $_SESSION["city"]=$city["city_name"];
        $_SESSION["id_user"]=$id_user["id_users"];
        header("Location: /Test/index.php");
    } else {
        echo "Вы вели неправильно пароль";
    }

} else {
    echo "Пользователя с таким логином не существует";
}


}
