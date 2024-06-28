<?php
$db_host="localhost";
$db_username="root";
$db_password="";
//建立資料庫連接
$db_link=new mysqli($db_host, $db_username, $db_password);

//檢查是否連接成功
if ($db_link->connect_error) {
    die("連接失敗: " . $db_link->connect_error);
}
?>