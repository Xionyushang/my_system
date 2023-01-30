<?php
//將session清空
session_start();
session_destroy(); 
header('location:login/index.php');
