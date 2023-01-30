<?php
session_start();
include('libry/int.php');
?>
<ul>
    <li><a href="./main_right.php" target="main_right">首頁</a></li>
    <li><a href="./login/index.php?op=edit" target="_bank">修改個人資料</a></li>
    <?php if($_SESSION['user_name']=='root'){$html->li("./all_user/index.php","管理使用者");} ?>
    <li><a href="logout.php" target="_parent">登出</a></li>
</ul>