<?php
include('sql_db_server.php');
$link = mysqli_connect(
    $sql_db['host'],
    $sql_db['dbuser'],
    $sql_db['dbpassword'],
    $sql_db['db_data_baes']
);
if ($link) {
    mysqli_query($link, 'SET NAMES uff8');
    //echo "正確連接資料庫";
} else {
    echo "不正確連接資料庫</br>" . mysqli_connect_error();
};
class mysql {
    public $mysql;
    function data_query($sql) {
        global $link;
        return mysqli_query($link, $sql);
    }

    //讀出一筆
    function data_read_one($sql) {
        $query = $this->data_query($sql);
        return  mysqli_fetch_array($query);
    }

    //直接給INST 然後QUERY
    function data_creat($sql) {
        return  $this->data_query($sql);
    }

    //直接給DELETE 然後QUERY
    function data_delete($sql) {
        return  $this->data_query($sql);
    }

    //直接給UPDATE 然後QUERY
    function data_update($sql) {
        return  $this->data_query($sql);
    }
}
$mysql = new mysql($mysql);
