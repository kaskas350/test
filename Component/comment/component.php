<?php
require_once($_SERVER['DOCUMENT_ROOT']."/test/db_connect.php");
session_start();
$date=date("20y-m-d G:i");
$db=new connect();
print_r($_POST);
echo "<br>";
print_r($_SESSION);
$db->request("insert into `comments` values(0,'{$_SESSION["id_user"]}','{$_POST["id"]}','{$date}','{$_POST["text"]}');");
header("Location: {$_SERVER['HTTP_REFERER']}");