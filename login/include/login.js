function go_craet(){
    window.open(location.pathname + "?op=creat", "_blank", "");
}

function chick_login(){
    const nameElement_login_user_id = document.getElementById('login_user_id');
	const login_user_id = nameElement_login_user_id.value;
    const nameElement_login_password = document.getElementById('login_password');
	const login_password = nameElement_login_password.value;

    if(login_user_id!=""){
        if(login_password!=""){
            return true;
        }else{
            alert("請輸入密碼");
            return false;
        }
    }else{
        alert("請輸入帳號");
        return false;
    }
}

function email_chick(){

    const nameElement_email = document.getElementById('email');
	const email = nameElement_email.value;
    const reg=/^[-A-Za-z0-9_]+[-A-Za-z0-9_.]*[@]{1}[-A-Za-z0-9_]+[-A-Za-z0-9_.]*[.]{1}[A-Za-z]{2,5}$/;
    if(reg.test(email)){
        return (true);
    }
}

function chick_password(){

    const nameElement_user_password = document.getElementById('user_password');
	const user_password = nameElement_user_password.value;
    const nameElement_chack_password = document.getElementById('chack_password');
	const chack_password = nameElement_chack_password.value;

    if(user_password==chack_password){
        return (true);
    }
}

function chick(){
    if(email_chick()==true){
        if(chick_password()==true){
            alert("註冊成功");
            return (true);
        }else{
            alert('密碼錯誤');
            return (false);
        }
    }else{
        alert('信箱錯誤');
        return(false)
    }
}