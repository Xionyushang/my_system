<form action="" method="get" name="form_search" target="_self" id="form_search" style='margin:0px;'>
  <table width="100%" border="0" cellpadding="5" cellspacing="0">
    <tr>
      <td width="10%" nowrap><input name="op" type="hidden" id="op" value="" />
        <input name="find_tag" type="hidden" id="find_tag" value="1" />
        名稱
        <input name="find_user_name" type="text" id="find_user_name" value="<?php echo $find_user_name; ?>" size="7" />
        帳號
        <input name="find_user_id" type="text" id="find_user_id" value="<?php echo $find_user_name ?>" size="7" />
        信箱
        <input name="find_email" type="text" id="find_email" value="<?php echo $find_email ?>" size="7" />
      </td>
      <td align="left" nowrap="nowrap">&nbsp;&nbsp;
        <input type="submit" value="搜尋" />
      </td>
    </tr>
  </table>
</form>