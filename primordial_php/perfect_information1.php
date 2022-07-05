<?php
    //封装好的增删改($dml)查($select)查总共条数($total)查询单条信息($get)
    $link = mysqli_connect('localhost', 'root', '123456', 'register', '33066') or die('连接数据库失败');
    //接收数据//
    $name = $_POST['name_'];
    $age = $_POST['age_'];
    $email = $_POST['email_'];
    $weibo = $_POST['weibo_'];
    $wechat = $_POST['wechat_'];
    $qq = $_POST['qq_'];
    $phone = $_POST['phone_'];
    $ads = $_POST['ads_'];
    mysqli_query($link,"UPDATE register SET age='$age',email='$email',xlwb='$weibo',qq='$qq',txwb='$wechat',phone='$phone',ads='$ads' WHERE lname='$name'");
    echo '<script> location = "../html/device/Perfect_information.html" </script>';
?>

