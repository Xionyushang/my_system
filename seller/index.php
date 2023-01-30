<?php
include('../seller/db/seller.php');
include('./include/config.php');
$seller = new seller($mysql);
$html->head_top();
$html->load_jQuery('3.6.3');
$html->load_js('include/seller.js');
$html->title($title_array[$op]);
$html->head_food();
$js->close_form_update();
switch ($op) {
    case "index":
    default:
        $datas = array();
        $db = $seller->read($_GET);
        while ($row = mysqli_fetch_assoc($db)) {
            $datas[] = $row;
        }
        include('./view/search.php');
        include('./view/list.php');
        break;

    case "edit":
        $js->close_form_update();
        echo "<button onclick='go_delete({$_GET['id']})' >刪除</button>";
        $db = $seller->read($_GET);
        include('./view/edit.php');
        break;

    case "edit_save":
        //extract($_FILES['sell_picture']);
        foreach ($_FILES as $row) {
            extract($row);
            $use_for = max(array_keys($error));
            for ($i = 0; $i <= $use_for; $i++) {
                if ($error[$i] > 0) {
                    echo "Error: " . $error[$i];
                } else {
                    //檔案名稱:$name
                    //檔案類型:$type
                    //檔案大小:($size / 1024)kb
                    //暫存路徑名稱:$tmp_name
                    if (file_exists("seller_picture/" . $name[$i])) {
                        echo "檔案已經存在，請勿重覆上傳相同檔案";
                    } else {
                        //在檔名不會有中文的情況下，可以直接 move_uploaded_file　　
                        //move_uploaded_file($sell_picture["tmp_name"],"seller_picture/".$sell_picture["name"]);
                        $target_path  = "seller_picture/";
                        $target_path .= $name[$i]; //上傳檔案名稱
                        if (move_uploaded_file($tmp_name[$i], iconv("UTF-8", "big5", $target_path))) {
                            echo "檔案：" . $name[$i] . " 上傳成功!";
                        } else {
                            echo "檔案上傳失敗，請再試一次!";
                        }
                    }
                }
            }
        };
        // $db = $seller->update($_POST);
        // $js->Reload_father();
        // $js->close_window();
        break;

        // case "delete":
        //     $db = $seller->delete($_GET['id']);
        //     $js->Reload_father();
        //     $js->close_window();
        //     break;
}
$html->food();
