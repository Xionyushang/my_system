<?php
foreach ($db as $row) {
    extract($row);
}
?>
<form action="./index.php" method="post">
    <input name="id" type="hidden" id="id" value="<?php echo $id; ?>" />
    <input name="op" type="hidden" id="op" value="edit_save" />
    <table>
        <tr>
            <td width="15%" class="title_right">名稱</td>
            <td><input name="user_name" type="text" id="user_name" value="<?php echo $user_name; ?>" /></td>
        </tr>
        <tr>
            <td width="15%" class="title_right">帳號</td>
            <td><input name="user_id" type="text" id="user_id" value="<?php echo $user_id; ?>" /></td>
        </tr>
        <tr>
            <td width="15%" class="title_right">密碼</td>
            <td><input name="user_password" type="text" id="user_password" value="<?php echo $user_password; ?>" /></td>
        </tr>
        <tr>
            <td width="15%" class="title_right">信箱</td>
            <td><input name="email" type="text" id="email" value="<?php echo $email; ?>" /></td>
        </tr>
        <tr>
            <td><input type="submit" value="儲存" /></td>
        </tr>
    </table>
</form>