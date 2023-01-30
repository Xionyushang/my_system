<?php
class js {

    function Write($msg) {
        echo "<script type=\"text/javascript\">\n";
        echo $msg;
        echo "</script>";
    }


    function Reload_father() {
        $msg = "self.opener.location.reload();";
        return $this->Write($msg);
    }

    //關閉當前視窗
    function close_window() {
        $msg = "window.close();";
        return $this->Write($msg);
    }

    //關閉表單自動檢查
    function close_form_update() {
        $msg = "window.history.replaceState(null, null,window.location.href);";
        return $this->Write($msg);
    }

    //alert_massage
    function show($string) {
        $msg = "alert(\"$string\")";
        return $this->Write($msg);
    }

    function input_size_25px($id){
        $msg="
        var $id = document.getElementById(\"$id\");
        $id.style.fontSize=\"25px\";
        ";
        return $this->Write($msg);
    }
}
$js = new js();
