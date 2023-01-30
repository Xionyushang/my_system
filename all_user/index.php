<?php
include('../all_user/db/all_user.php');
include('./include/config.php');
$all_uesr = new all_user($mysql);
$html->head_top();
$html->load_js('include/all_user.js');
$html ->title($title_array[$op]);
$html->head_food();
$js->close_form_update();
switch ($op) {
    case "index":
    default:
        $datas = array();
        $db = $all_uesr->read($_GET);
        while ($row = mysqli_fetch_assoc($db)) {
            $datas[] = $row;
        }
        include('./view/search.php');
        include('./view/list.php');
        break;

    case "edit":
        $js->close_form_update();
        echo "<button onclick='go_delete({$_GET['id']})' >刪除</button>";
        $db = $all_uesr->read($_GET);
        include('./view/edit.php');
        break;

    case "edit_save":
        $db = $all_uesr->update($_POST);
        $js->Reload_father();
        $js->close_window();
        break;

    case "delete":
        $db = $all_uesr->delete($_GET['id']);
        $js->Reload_father();
        $js->close_window();
        break;
}
$html->food();
