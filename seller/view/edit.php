<?php
foreach ($db as $row) {
    extract($row);
}
?>
<form action="./index.php" method="post" enctype="multipart/form-data">
    <input name="id" type="hidden" id="id" value="<?php echo $id; ?>" />
    <input name="op" type="hidden" id="op" value="edit_save" />
    <table border="1" cellpadding="1" cellspacing="2">
        <tr>
            <td width="15%" class="title_right">商品名稱</td>
            <td><input name="sell_name" type="text" id="sell_name" value="<?php echo $sell_name; ?>" /></td>
        </tr>
        <tr>
            <td width="15%" class="title_right">商品圖片</td>
            <td><input name="sell_picture[]" type="file" id="sell_picture" value="<?php echo $sell_picture; ?>" accept="image/*" multiple /></td>
        </tr>
        <tr>
            <td>圖片預覽</td>
            <td>
                <div id="open_picture" style="width:300%; height:200px;">
                    <p>目前沒有圖片</p>
                </div>
            </td>
        </tr>
        <tr>
            <td width="15%" class="title_right">商品介紹</td>
            <td><textarea style="width:100%; height:150px;" name="sell_memo" type="textarea" id="sell_memo" value="<?php echo $sell_memo; ?>"></textarea></td>
        </tr>
        <tr>
            <td><input type="submit" value="儲存" /></td>
        </tr>
    </table>
</form>
<script>
    $("#sell_picture").change(function() {
        $("#open_picture").html(""); // 清除預覽
        readURL(this);
    });

    function readURL(input) {
        if (input.files && input.files.length >= 0) {
            for (var i = 0; i < input.files.length; i++) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    var img = $("<img width='300' height='200'>").attr('src', e.target.result);
                    $("#open_picture").append(img);
                }
                reader.readAsDataURL(input.files[i]);
            }
        } else {
            var noPictures = $("<p>目前沒有圖片</p>");
            $("#open_picture").append(noPictures);
        }
    }
</script>