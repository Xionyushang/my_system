<?php
foreach ($datas as $row) {

    $DblClick = "onDblClick=\"go_edit('{$row['id']}');\";";

    $content .= "<tr {$DblClick} >
        <td>{$row['id']}</td>
        <td>{$row['user_name']}</td>
        </tr>";
}
?>
<table width="100%" border="1" cellpadding="1" cellspacing="2">
    <thead>
        <tr>
            <td>我的商品</td>
            <td>上架日期</td>
        </tr>
    </thead>
    <tbody>
        <?php echo $content ?>
    </tbody>
    <tfoot>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </tfoot>
</table>