/**
 * Created by Hugo on 5/06/16.
 */

function pwdVerify(){
    var pwd = $('#password_re').val();
    var pwd_c = $('#password_re_check').val();
    if(pwd == pwd_c){
        return true;
    }else{
        return false;
    }
}

function submitRegisterForm(){
    if(pwdVerify()){
        $('#register_form').submit();
    }else{
        $('.password_re').text('password not match');
    }
}