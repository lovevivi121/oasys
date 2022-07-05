<?php
include_once 'public.php';
$con = mysqli_connect('localhost','root','123456','register','33066');
mysqli_query($con,'set names utf8');
// // 登录数据库
// // 获取表单数据
$username = $_POST['username'];
$password = $_POST['password'];
// echo "输入的密码是$username 和$password <br>";
// 查询表单数据，与数据库register中的register表单进行匹配

//////////////////////////////////
// 神登录
$sqlgold = "select * from register where lname = '$username' and pwd = '$password' and section = '厂长' limit 1";
// 执行sql语句
$chegold = mysqli_query($con,$sqlgold);
////////////////// resgold用来判断是否是数据库已有的数据，同时储存这一行的值
$resgold = mysqli_fetch_array($chegold);

// 普通用户登录
$sqluser = "select * from register where lname = '$username' and pwd = '$password' and (section != '厂长')";
// 执行sql语句
$cheuser = mysqli_query($con,$sqluser);
////////////////// resuser用来判断是否是数据库已有的数据，同时储存这一行的值
$resuser = mysqli_fetch_array($cheuser);
// ///////////
//判断神.人
if($resgold||$resuser){
    if($resgold){
        //进入神的回调函数
        //添加cookie
        setcookie("islogin","1",time()+3000,'/');
        //回调值给js
        echo json_encode(array("error" =>0,"data" =>"yes gold","username"=>"$username","work"=>"$resgold[9]","age"=>"$resgold[7]","email"=>"$resgold[1]","xlwb"=>"$resgold[3]","wechat"=>"$resgold[4]",
        "qq"=>"$resgold[5]","phone"=>"$resgold[8]","address"=>"$resgold[10]","section"=>"$resgold[11]","idcard"=>"$resgold[12]","marriage"=>"$resgold[13]","sex_ori"=>"$resgold[14]","social_acc"=>"$resgold[15]","blood"=>"$resgold[16]","height"=>"$resgold[17]","weight"=>"$resgold[18]","birthday"=>"$resgold[19]","self_introduction"=>"$resgold[20]","personal_motto"=>"$resgold[21]","memo_1"=>"$resgold[22]","memo_2"=>"$resgold[23]","memo_3"=>"$resgold[24]","memo_4"=>"$resgold[25]"));
        
        
        
    }else{
        // 进入普通用户的回调函数
        setcookie("islogin","1",time()+3000,'/');
        echo json_encode(array("error" =>1,"data" =>"yes user","username"=>"$username","work"=>"$resuser[9]","age"=>"$resuser[7]","email"=>"$resuser[1]","xlwb"=>"$resuser[3]","wechat"=>"$resuser[4]",
        "qq"=>"$resuser[5]","phone"=>"$resuser[8]","address"=>"$resuser[10]","section"=>"$resuser[11]","idcard"=>"$resuser[12]","marriage"=>"$resuser[13]","sex_ori"=>"$resuser[14]","social_acc"=>"$resuser[15]","blood"=>"$resuser[16]","height"=>"$resuser[17]","weight"=>"$resuser[18]","birthday"=>"$resuser[19]","self_introduction"=>"$resuser[20]","personal_motto"=>"$resuser[21]","memo_1"=>"$resuser[22]","memo_2"=>"$resuser[23]","memo_3"=>"$resuser[24]","memo_4"=>"$resuser[25]"));
        
    }
}else {
    echo json_encode(array("error" =>2,"data" =>"no")); 
}
// //////////////////////////////////////////////////////////////////////////////////////
// ajax 实现函数回调
// $sql = "select * from register where lname = '$username' and pwd = '$password'";
// $result = mysqli_query($con,$sql);
// $num = mysqli_num_rows($result);
// // echo $num;
// if($num ==1){
//     // 查询到了数据，允许登录
//     echo json_encode(array("error" =>0,"data" =>"yes"));
// }else {
//     echo json_encode(array("error" =>1,"data" =>"no"));
// }





?>