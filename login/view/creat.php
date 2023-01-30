<?php
extract($read);
$chack_password=empty($id)?'':$user_password;
?>
<form action="./index.php" method="post" onsubmit="return chick();">
    <input type="hidden" id="id" name="id" value="<?php echo $id ?>" maxlength="10" required>
    <input name="op" type="hidden" id="op" value="<?php echo $op?>" />
    <table class="container">
        <tr>
            <td>
                名稱<input type="text" id="user_name" name="user_name" value="<?php echo $user_name ?>" maxlength="10" required>
            </td>
        </tr>
        <tr>
            <td>
                帳號<input type="text" id="user_id" name="user_id" value="<?php echo $user_id ?>" required>
            </td>
        </tr>
        <tr>
            <td>
                密碼<input type="password" id="user_password" name="user_password" value="<?php echo $user_password ?>" minlength="8" maxlength="8" required>
            </td>
        </tr>
        <tr>
            <td>
                確認密碼<input type="password" name="chack_password" id="chack_password" value="<?php echo $chack_password ?>" minlength="8" maxlength="8" required>
            </td>
        </tr>
        <tr>
            <td>
                信箱<input type="email" id="email" name="email" value="<?php echo $email ?>" required>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="login" value="註冊">
                <input type="button" name="close" value="關閉" onclick="window.close();">
            </td>
        </tr>
    </table>
</form>