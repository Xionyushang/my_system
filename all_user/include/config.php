<?php
include('../libry/int.php');
$op = 'index';
if (isset($_GET["op"])) {
    $op = $_GET["op"];
} elseif (isset($_POST["op"])) {
    $op = $_POST["op"];
}

$title_array = array("index" => "首頁", "edit" => "修改", "edit_save" => "修改儲存", "delete" => "刪除");
