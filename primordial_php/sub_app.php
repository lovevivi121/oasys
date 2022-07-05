<?php
    //封装好的增删改($dml)查($select)查总共条数($total)查询单条信息($get)
    function mysqlmodel() {
        $link = null; 
        //连接数据库函数
        function construct() {
            $link = mysqli_connect('localhost', 'root', '123456', 'register', '33066') or die('连接数据库失败');
            return $link;
        }
        $link = construct();
        //函数 执行数据增, 删， 改
        GLOBAL $dml;
        $dml = function($sql) use($link) {
            $result = mysqli_query($link, $sql);
            //有id出现返回id，没有id出现返回影响行
    
            if($result && mysqli_affected_rows($link) > 0){
                return mysqli_insert_id($link)? mysqli_insert_id($link):mysqli_affected_rows($link);
            }
            else{
                return false;
            }
        };
        //函数 执行数据的查询(返回二维数组)
        GLOBAL $select;
        $select = function($sql) use($link) {
            $result = mysqli_query($link, $sql);
            if($result && mysqli_num_rows($result) > 0) {
                $arr = array();
                while($row = mysqli_fetch_assoc($result)){
                    $arr[] = $row;
                }
                return $arr;
            }
        };
        //查询总共条数
        GLOBAL $total;
        $total = function($sql) use($link) {
            $result = mysqli_query($link, $sql);
            if($result && mysqli_num_rows($result) > 0) {
                return mysqli_num_rows($result);
            }
            else{
                return 0;
            }
        };
        //查询单条信息（返回数组）
        GLOBAL $get;
        $get = function($sql) use($link) {
            $result = mysqli_query($link, $sql);
            if($result && mysqli_num_rows($result) > 0) {
                return true;
            }
            else{
                return false;
            }
        };
    
    }
    mysqlmodel();
    //接收数据
    $name = $_POST['name'];
    $date = $_POST['date'];
    $reason = $_POST['reason'];
    $start = $_POST['start_time'];
    $end = $_POST['end_time'];
    //读入语句
    $sql1 = "SELECT * FROM sub_app WHERE people_ = '$name' and date_ = '$date'";
    $a = $total($sql1);
    //查重，无查重则插入数据
    if($a > 0){
        echo '<script> alert(\'已经存在该请假信息\'); </script>';
        echo '<script>location = "../html/device/Submit_application.html"</script>';
    }
    else{
        echo 'hh';
        $sql2 = "INSERT INTO sub_app (people_, date_, type_, start_, end_) values('$name', '$date', '$reason', '$start', '$end')";
        $dml($sql2);
        echo '<script>location = "../html/device/Submit_application.html"</script>';
    }

?>