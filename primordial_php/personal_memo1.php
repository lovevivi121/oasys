<?php
    //封装好的增删改($dml)查($select)查总共条数($total)查询单条信息($get)
    $link = mysqli_connect('localhost', 'root', '123456', 'register', '33066') or die('连接数据库失败');
    //接收数据//
    $first = $_POST['first'];
    $second = $_POST['second'];
    $third = $_POST['third'];
    $name = $_POST['name_a'];
    var_dump($first);
    var_dump($second);
    var_dump($third);
    var_dump($name);
    mysqli_query($link,"UPDATE register SET  memo_1='$first', memo_2='$second', memo_3='$third' WHERE lname='$name'");
    echo '<script> location = "../html/device/personal_memo.html" </script>';
?>

