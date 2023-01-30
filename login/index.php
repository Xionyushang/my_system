<?php
session_start();
include("./include/config.php");
include('../login/db/login.php');
$login = new login($mysql);
$html->head_top();
$html->title($title_array[$op]);

switch ($op) {
    case "index":
    default:
        $html->load_css('./include/login.css');
        $html->load_js('./include/login.js');
        $html->head_food();
        $js->close_form_update();
        include('./view/view.php');
        $js->input_size_25px('login_user_id');
        $js->input_size_25px('login_password');
        $login_user_id = $_POST['login_user_id'];
        $login_password = $_POST['login_password'];
        $row = $login->read($login_user_id, $login_password);
        $_SESSION=$row;
        $db = isset($_SESSION['id']) ? header('location:../main.php') : 'error_login';
        if ($db == 'error_login' && isset($login_user_id)) {
            $js->show("帳號或密碼錯誤");
        }
        break;

    case "creat":
        $html->load_js('./include/login.js');
        $html->load_css('./include/login.css');
        $html->head_food();
        $op="creat_save";
        include('./view/creat.php');
        break;

    case "creat_save":
        $db = empty($_POST) ? "" : $login->create($_POST);
        $js->close_window();
        break;

    case "edit":
        $html->load_js('./include/login.js');
        $html->load_css('./include/login.css');
        $read = $login->read_one($_SESSION['id']);
        $op="edit_save";
        include('./view/creat.php');
        break;

    case "edit_save":
        $db = empty($_POST) ? "" : $login->update($_POST);
        $js->Reload_father();
        $js->close_window();
        break;

}
$html->food();
