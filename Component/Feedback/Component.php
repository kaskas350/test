<?php

require_once($_SERVER['DOCUMENT_ROOT']."/test/db_connect.php");
$db=new connect();
$db->request("insert into `feedback` values ('{$_GET['name']}','{$_GET['lastname']}','{$_GET['email']}','{$_GET['text']}',0);");
$mail="Вам пришло письмо от посетителя вашего сайта ".$_GET["name"]." ".$_GET["lastname"]." с текстом: \r\n".$_GET["text"];

mail("sergey_kopytov08@mail.ru",$_GET["subject"],$mail);

