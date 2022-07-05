<?php
    //封装好的增删改($dml)查($select)查总共条数($total)查询单条信息($get)
    $link = mysqli_connect('localhost', 'root', '123456', 'register', '33066') or die('连接数据库失败');
    //接收数据//
    $name = $_POST['name_'];
    $marriage = $_POST['marriage_'];
    $sex = $_POST['sex_ori_'];
    $social = $_POST['social_acc'];
    $blood = $_POST['blood_'];
    $height = $_POST['height_'];
    $weight = $_POST['weight_'];
    $birthday = $_POST['birthday_'];
    mysqli_query($link,"UPDATE register SET marriage='$marriage', sex_ori='$sex', social_acc='$social', blood='$blood', height='$height', weight='$weight', birthday='$birthday' WHERE lname='$name'");
    echo '<script> location = "../html/device/Perfect_information.html" </script>';
   
?>

