// var usernameIsEmail = false; //验证用户注册是否为邮箱
// var emailIsOk =false; //验证邮箱是否符合规则
// var passIsOk = false;  
// var repassIsOk =false;
// var mobileIsOk = false;//验证手机是否符合规则
// var code = false; //验证码是否正确


//定义四个接受函数返回值的参数
var lock1 = lock2 =lock3 = lock4 =null;
// 验证邮箱的

var emailReg=/^[a-z0-9]+([._\\-]*[a-z0-9])*@([a-z0-9]+[-a-z0-9]*[a-z0-9]+.){1,63}[a-z0-9]+$/;
//验证手机号的
var mobileReg= /^1[3,4,5,7,8][0-9]{9}$/;
// alert(emailReg.test('1319933170@qq.com'));
function checkUser(pattern1,pattern2,obj)
{

    if(!pattern1.test(obj.val()) && !pattern2.test(obj.val())){
        // alert(obj.val());
        msg = "手机格式不正确，请重新输入";
        check(obj,msg,false);
        lock1= false;
        return;
    }else{
        $.ajax({
            type:'post',
            url:'http://localhost/hongxinqun/home/regverifyUser',
            async:false,
            dataType:'json',
            data:{username:obj.val()},
            success:function(data){
                if(data.code){
                    check(obj,data.msg,true);
                    lock1 = true;
                    return;
                }else{
                    check(obj,data.msg,false);
                    lock1 = false;
                    return;
                }
            }
        })
        
    }
}
/*
*   checkpass
*   @param1  对象
*   @param2~param4  为验证单一数字，字符，特殊符号的正则
*    param5~param7  验证包含两种的正则
*    param7 验证包好三种的正则
*    @return Boolean
*/
function checkPass(obj)
{
var pattern1 = /^[a-z]{6,20}$/ig;
var pattern2= /^[0-9]{6,20}$/g;
var pattern3 = /^[^0-9a-zA-Z]{6,20}$/g;
var pattern7 = /^(?![a-zA-Z0-9]+$)(?![^a-zA-Z/D]+$)(?![^0-9/D]+$).{6,20}$/;

    if (obj.val().length<6 || obj.val().length>20) {
        msg = '密码长度6-20个字符，请重新输入';
        check(obj,msg,false);
        lock2 =false;
        return;
    }else{

    if(pattern1.test(obj.val()) || pattern2.test(obj.val()) || pattern3.test(obj.val())){
        obj.next('span').removeClass('icon_yes icon_wrong').addClass('icon_yes').css('display','inline-block').next('span').css('display','none');
        $('#spnPwdStrong2').css('display','none');
        $('#spnPwdStrong3').css('display','none');
        $('#spnPwdStrong1').css('display','inline-block');
        lock2=true;
       return;
    }else if(pattern7.test(obj.val())){
        obj.next('span').removeClass('icon_yes icon_wrong').addClass('icon_yes').css('display','inline-block').next('span').css('display','none');
         $('#spnPwdStrong1').css('display','none');
        $('#spnPwdStrong2').css('display','none');
        $('#spnPwdStrong3').css('display','inline-block');
        lock2=true;        
        return;
    }else{
         obj.next('span').removeClass('icon_yes icon_wrong').addClass('icon_yes').css('display','inline-block').next('span').css('display','none');
         $('#spnPwdStrong1').css('display','none');
        $('#spnPwdStrong3').css('display','none');
        $('#spnPwdStrong2').css('display','inline-block');
        lock2 = true;
        return;
    }
    
    
  }
}

function checkRepass(){
    if($('#txt_password').val() != $('#txt_repassword').val() || $('#txt_repassword').val().length<6){
        msg = '两次输入的密码不一致，请重新输入';
        check($('#txt_repassword'),msg,false);
        lock3 = false;
        return;
    }else{
        msg = '';
        check($('#txt_repassword'),msg,true);
        lock3 =true;
        return; 
    }
}

function checkCode(obj){
    $.ajax({
        type:'post',
        dataType:'json',
        async:false,
        url:'http://localhost/hongxinqun/home/verifyCode',
        data:{code:obj.val()},
        success:function(data){
            if(data.code){
                checkTwo(obj,data.msg,true);
                $('#txt_vcode').attr('disabled',true);
                lock4 = true;                
                return;
            }else{
                checkTwo(obj,data.msg,false);
                lock4 =false;
                return;
            }
        }
    })
}
function check(obj,msg,status)
{
    if(!status){
        obj.addClass('wrong').next('span').removeClass('icon_yes icon_wrong').addClass('icon_wrong').css('display','inline-block').next('span').html(msg).removeClass('warn');
    }else{
        obj.removeClass('wrong').next('span').removeClass('icon_wrong icon_yes').addClass('icon_yes').css('display','inline-block').next('span').html(msg).addClass('warn');
    }
}
//为验证码单独设置的状态显示函数
// function checkTwo(obj,msg,status)
// {
//     if(!status){
//         obj.addClass('wrong');
//         $('#spn_vcode_ok').removeClass('icon_yes icon_wrong').addClass('icon_wrong').css('display','inline-block').next('span').html(msg).removeClass('warn');
//     }else{
//         obj.removeClass('wrong');
//         $('#spn_vcode_ok').removeClass('icon_wrong icon_yes').addClass('icon_yes').css('display','inline-block').next('span').html(msg).addClass('warn');
//     }
// }
//定义手机获取验证码部分
var time=3;
var timer=null;
var mess =null;
var savemess=null;
function run(){
    // console.log(1);
     mess = time+'s后可重新发送验证码';
     time--;

    if(time<0){
        mess='';
        clearInterval(timer);
        $('#getmess').css('display','inline-block');
        $('#showmess').css('display','none');
        time=3;
    }
    $('#showmess').html(mess);

}
// 验证手机验证码
$('#getmess').click(function(){
    // console.log($('.phone_code').val());
    $(this).css('display','none');
    $('#showmess').css('display','inline-block'); 
    timer = setInterval(run,1000);
    $.ajax({
        type:'post',
        dataType:'json',
        url:'http://localhost/hongxinqun/index.php/home/reg/mess',
        data:{'code':1},
        success:function(data){
            console.log(data.code);
            savemess=data.code;
        }
    })
})
function checkMess(obj){
    // alert(savemess);
    if(obj.val()!=savemess){
        obj.addClass('wrong');
        $('#spn_vmess_ok').removeClass('icon_yes icon_wrong').addClass('icon_wrong').css('display','inline-block').next('span').html('手机验证码错误').removeClass('warn');
        lock5=false;
        return;
    }else{
        obj.removeClass('wrong');
        $('#spn_vmess_ok').removeClass('icon_wrong icon_yes').addClass('icon_yes').css('display','inline-block').next('span').html('').addClass('warn');
        lock5=true;
        return;
    }
}

//获取焦点事件
$('#register_form').focusin(function(ev){
    var ev =ev || event;
    if(ev.target.name == 'phone'){
        $(ev.target).removeClass('wrong').next('span').css('display','none').next('span').removeClass('cue warn').addClass('cue warn').html('手机号必须11位数字');
    }
    if(ev.target.name == 'pass'){
        $('#spnPwdStrong1').css('display','none');
        $('#spnPwdStrong3').css('display','none');
        $('#spnPwdStrong2').css('display','none');
        $(ev.target).removeClass('wrong').next('span').css('display','none').next('span').removeClass('cue warn').addClass('cue warn').css('display','inline-block').html('密码为6-20个字符,可有英文,数字及符号组成');
    }
    if(ev.target.name == 'repass'){
        $(ev.target).removeClass('wrong').next('span').css('display','none').next('span').removeClass('cue warn').addClass('cue warn').html('请再次输入密码');
    }
    if(ev.target.name == 'txt_vcode'){
        $(ev.target).removeClass('wrong');
        $('#spn_vcode_ok').css('display','none').next('span').removeClass('cue warn').addClass('cue warn').html('请填写图片中的字符,不区分大小写');
    }
    if(ev.target.name == 'txt_vmess'){
        $(ev.target).removeClass('wrong');
        $('#spn_vmess_ok').css('display','none').next('span').removeClass('cue warn').addClass('cue warn').html('请填写手机验证码');
    }

})

$('#register_form').focusout(function(ev){
    var ev =ev || event;
    if(ev.target.name == 'phone'){
        if(ev.target.value !=''){
        checkUser(emailReg,mobileReg,$(ev.target));
        }else{
            $(ev.target).removeClass('wrong').next('span').css('display','none').next('span').removeClass('cue warn').addClass('cue warn').html('');
        }
    }
    if(ev.target.name == 'pass'){
        if(ev.target.value!=''){
        checkPass($(ev.target));
        }else{
            $('#spnPwdStrong1').css('display','none');
            $('#spnPwdStrong3').css('display','none');
            $('#spnPwdStrong2').css('display','none');
            $(ev.target).removeClass('wrong').next('span').css('display','none').next('span').removeClass('cue warn').addClass('cue warn').html('');
        }
    }
    if(ev.target.name == 'repass'){
        if(ev.target.value!=''){
        checkRepass();
        }else{
            $(ev.target).removeClass('wrong').next('span').css('display','none').next('span').removeClass('cue warn').addClass('cue warn').html('');
        }
    }
    //  if(ev.target.name == 'txt_vcode'){
    //     if(ev.target.value!=''){
    //     checkCode($(ev.target));
    //     }else{
    //         $(ev.target).removeClass('wrong');
    //         $('#spn_vcode_ok').css('display','none').next('span').removeClass('cue warn').addClass('cue warn').html('');
    //     }
    // }
    if(ev.target.name == 'txt_vmess'){
        if(ev.target.value!=''){
            checkMess($(ev.target));
        }else{
            $(ev.target).removeClass('wrong');
            $('#spn_vmess_ok').css('display','none').next('span').removeClass('cue warn').addClass('cue warn').html('');
        }
    }
})

function checkRepassTwo(){
    if($('#txt_password').val() != $('#txt_repassword').val() || $('#txt_repassword').val()==''){
        msg = '密码错误,请重新输入';
        check($('#txt_repassword'),msg,false);
        lock3 = false;
        return;
    }
}

$('#J_submitRegister').click(function(){
    var num1 = checkUser(emailReg,mobileReg,$('#txt_username'));
    var num2 = checkPass($('#txt_password'));
    var num3 = checkRepassTwo() ;
    var num4 = ($('#txt_vcode').attr('disabled')=='disabled')?'disabled':checkCode($('#txt_vcode'));
    if(lock1==true && lock2==true && lock3 == true && lock4 ==true){
        $('#register_form').submit();
    }
    
})