function re()
{
    document.getElementById("more1").style.display="none";
    document.getElementById("more2").style.display="block";
    document.getElementById("btnlog").style.display="none";
    document.getElementById("div2").style.display="block";
    document.getElementById("div1").style.display="block";
}       
function lo()
{document.getElementById("more2").style.display="none";
 document.getElementById("more1").style.display="block";
 document.getElementById("btnlog").style.display="block";
 document.getElementById("div2").style.display="none";
    document.getElementById("div1").style.display="none";

}
var code;
function createCode() {
    code = "";
    var checkCode = document.getElementById("code");
    var random = new Array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R',
        'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
    for (var i = 0; i < 4; i++) {
        var index = Math.floor(Math.random() * 36);
        code += random[index];
    }
    checkCode.value = code;
}
function valicode() {
    var inputcode = document.getElementById("input").value.toUpperCase();
    var div = document.getElementById("div4");
    if (inputcode.length == 0) {
        div.innerHTML = " 请输入验证码！";
        return false;
    }
    else if (inputcode != code) {
        div.innerHTML = " 验证码错误！";
        return false;
    }
    else{
        div.innerHTML = "";
        return true;
    }
    
}
function checkPassword(){
    var password=document.getElementById("password").value;
    var c=/^[a-zA-Z]\w{5,17}$/;
    var div = document.getElementById("div2");  
       if(password.length==0){
        div.innerHTML = " 密码不能为空！";
        return false;
    }
     else if(!c.test(password)){
        div.innerHTML = " 密码格式非法！";
        return false;
    }
    else if(c.test(password)){
        div.innerHTML = "";
        return true;
    }

}
function checkrepassword(){
    var div = document.getElementById("div3");
    var password = document.getElementById("password").value;
   var repassword = document.getElementById("confirmpassword").value;;
   if(password != repassword){
       div.innerHTML = " 两次密码输入不一致！";
       return false;
   }
   
   div.innerHTML = "";
   return true;
}
function checkusername(){
    var username=document.getElementById("username").value;
    var div = document.getElementById("div1");
    var b=/^[a-zA-Z][a-zA-Z0-9_]{4,15}$/;
    if(username.length==0){
        div.innerHTML = " 用户名不能为空！";
        return false;
    }
    else if(!b.test(username)){
        div.innerHTML = " 用户名非法！";
        return false;
    }
    else if(b.test(username)){
        div.innerHTML = "";
        return true;
    }
}
function checkemail(){
    var email=document.getElementById("email").value;
    var div = document.getElementById("div5");
    var a=/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;  
    if(email.length==0){
        div.innerHTML = " 邮箱不能为空!";
        return false;
    }
    else if(!a.test(email)){
        div.innerHTML = " 邮箱地址非法！";
        return false;
    }
    else if(a.test(email)){
        div.innerHTML = "";
        return true;
    }
 
}
function checkForm1() {
        var add_name =  checkusername();
        var add_email = checkemail();
        var add_password=checkPassword();
        var re_password = checkrepassword();
        var add_code =  valicode();
        if (add_name && add_email &&  re_password &&  add_code && add_password) {
            return true;
        } 
        else {
            alert("注册失败，请按提示输入信息！");
            return false;
        }
}
function checkForm2() {
    var add_name1 = checkusername();
    var add_password1 = checkPassword();
    if (add_name1 && add_password1) {
        location.href="http://www.baidu.com";
        return true;
    } 
    else {
        alert("登录失败，请输入正确的信息！");
        return false;
    }
}
//   //获得画板
//   var canvas=document.getElementById('canvas');
//   //获得绘画环境
//   var cv=canvas.getContext('2d');
//   cv.fillRect(0,0,256,77);
//  //获得所有的图像像素点信息
//   var alldata=cv.getImageData(0,0,256,77);
// //获得像素点的个数
// var dian=alldata.data.length/4;
//  for(var i=0;i<10000;i++){
//   //取随机数
//   var num=Math.floor(Math.random()*dian);
//   //计算像素点对应的四条信息从几号开始
//   var start=(num-1)*4;
//   alldata.data[start]=Math.floor(Math.random()*256);
//   alldata.data[start+1]=Math.floor(Math.random()*256);
//   alldata.data[start+2]=Math.floor(Math.random()*256);
//  }
//   //将数据写回画板
// cv.putImageData(alldata,0,0);