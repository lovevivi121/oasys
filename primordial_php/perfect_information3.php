<?php
    //封装好的增删改($dml)查($select)查总共条数($total)查询单条信息($get)
    $link = mysqli_connect('localhost', 'root', '123456', 'register', '33066') or die('连接数据库失败');
    //接收数据//
    $self = $_POST['introducemyself'];
    $name = $_POST['name_a'];
    var_dump($self);
    var_dump($name);
    mysqli_query($link,"UPDATE register SET self_introduction='$self' WHERE lname='$name'");
    echo '<script> location = "../html/device/Perfect_information.html" </script>';
?>

