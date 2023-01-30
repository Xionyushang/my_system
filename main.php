<?php
session_start();
!isset($_SESSION['id']) ? header('location:login/index.php') : '';
echo "歡迎------" . $_SESSION['user_name'];
include('libry/int.php');
$html->head_top();
$html->title('主畫面');
$html->head_food();
include('index.php');
$html->food();
