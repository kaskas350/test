<?php
require_once($_SERVER['DOCUMENT_ROOT']."/test/db_connect.php");
$db = new connect();
session_start();
$city=$db->request("select * from `city`;");
if ($city["city_name"] == $_POST["city"]) {
    $n=$city["id_city"];
} else {
    $db->request("insert into `city` values(0,'{$_POST['city']}');");
    $n=$db->request("select `id_city` from `city` where `city_name`='{$_POST['city']}'; ");
    $n=$n["id_city"];
}
$password=md5($_SESSION['password']);
$db->request("insert into `users` values('{$_SESSION['login']}','{$password}',0);");
unset($_SESSION['password']);
$i=$db->request("select * from `users` where `users`.`login`='{$_SESSION['login']}';");
$i=$i["id_users"];
$db->request("insert into `data_users` values('{$_POST['name']}','{$_POST['lastname']}','$n','{$_POST['email']}','{$_POST['age']}',$i);");

header("Location: /Test/Component/authorization/authorization.php");
?>