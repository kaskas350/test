<?php
//echo "Location: {$_SERVER['DOCUMENT_ROOT']}"."test/index.php";
//header( "Location: {$_SERVER['DOCUMENT_ROOT']}test/Component/authorization/authorization.php");
foreach ($_SERVER as $k=>$m)
{
    echo "[$k]=$m<br>";

}