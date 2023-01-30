//修改
function go_edit(id1){
    window.open(location.pathname + "?op=edit&id=" + id1, "_blank", "");
}

//刪除
function go_delete(id1) {
	if (confirm('確定刪除嗎？')) window.open(location.pathname + "?op=delete&id=" + id1, "_self", "");
}