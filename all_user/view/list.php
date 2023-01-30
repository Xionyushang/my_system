<?php
foreach ($datas as $row) {

    $DblClick = "onDblClick=\"go_edit('{$row['id']}');\";";

    $content .= "<tr {$DblClick} >
        <td>{$row['id']}</td>
        <td>{$row['user_name']}</td>
        <td>{$row['user_id']}</td>
        <td>{$row['user_password']}</td>
        <td>{$row['email']}</td>
        </tr>";
}
?>
<table width="100%" border="1" cellpadding="1" cellspacing="2">
    <thead>
        <tr>
            <td>id</td>
            <td>名稱</td>
            <td>帳號</td>
            <td>密碼</td>
            <td>信箱</td>
        </tr>
    </thead>
    <tbody>
        <?php echo $content ?>
    </tbody>
    <tfoot>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </tfoot>
</table>