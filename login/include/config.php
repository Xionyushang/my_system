<?php
include('../libry/int.php');

$op = 'index';
if (isset($_GET["op"])) {
    $op = $_GET["op"];
} elseif (isset($_POST["op"])) {
    $op = $_POST["op"];
}

$title_array = array("index" => "登入", "creat" => "註冊","creat_save"=>"修改個人資料","edit"=>"修改個人資料","edit_save"=>"修改儲存");
?>