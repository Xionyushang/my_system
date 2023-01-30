<div class="fancy-border container"></div>
<form action="" method="post" id="form1" onsubmit=" return chick_login();">
    <table class="container">
        <tr>
            <td>
                <input type="text" placeholder="帳號" name="login_user_id" id="login_user_id" value="<?php $login_user_id; ?>">
            </td>
        </tr>
        <tr>
            <td>
                <input type="password" placeholder="密碼" name="login_password" id="login_password" value="<?php $login_password; ?>" minlength="8" maxlength="8">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" id="login" value="登入">
                <input type="button" id="creat_user" onclick="go_craet()" value="註冊">
            </td>
        </tr>
    </table>
</form>