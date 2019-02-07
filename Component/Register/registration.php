<?php
require_once($_SERVER['DOCUMENT_ROOT']."/test/db_connect.php");
$db=new connect();
$login=$_POST['login'];
$password=$_POST['password'];
$check_password=$_POST['check_password'];

if ($login == "admin") {
    echo "Вы не можете зарегистрироваться под этим логином";
} else {



if ($password == $check_password)
{
$log=$db->request("select `login` from `users`");
if ($log["login"] == $login)
{
    echo "Пользователь с таким логином уже существует";
} else {
session_start();
$_SESSION["login"]=$login;
$_SESSION["password"]=$password;
header("Location: data_entry.php");
}
} else {
    echo "Пароли не совпадают";
}
}