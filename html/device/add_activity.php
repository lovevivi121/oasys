<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>发布活动</title>
    <link rel="stylesheet" href="../../primordial_css/appear/appear.css">
    <!-- ///////////////////////////////////////////////////////////////////////////// -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../primordial_css/body-box.css">


    <!-- //////////////////////////////////////// -->
    <script src="../../jQuery/jquery.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <h1 class="page-title">发布活动</h1>
                    <div class="box-container">
                        <div class="box-holder">
                            <div class="box">
                                
                                    <table cellspacing="0" id="table-basic" class="table table-sm table-bordered table-striped">
                                        <!-- 表头 -->
                                        <tr>
                                            <td>标题</td>
                                            <td>类型</td>
                                            <td>发布人</td>
                                            <td>发布时间</td>
                                            <td>结束时间</td>
                                            <td>发布或删除</td>
                                        </tr>
                                        <!-- 从这里编辑消息 -->
                                        
<?php                           
                                    //连接数据库
                                    $con = mysqli_connect('localhost', 'root', '123456', 'register', '33066') or die('连接数据库失败');
                                    mysqli_set_charset($con, 'utf8mb4');
                                    //插入活动
                                        $sql = "SELECT * FROM activity";
                                        $result = mysqli_query($con, $sql);                   
                                        echo "<form action='' method='post'>";
                                        echo "
                                            <td><input type='text' name='aa'></td>
                                            <td><input type='text' name='bb'></td>
                                            <td><input type='text' name='cc'></td>
                                            <td><input type='text' name='dd'></td>
                                            <td><input type='text' name='ee'></td>
                                            <td><input type='submit' name='ss' method='post'></td>";
                                        if(!empty($_POST["ss"])){
                                            $aa=$_POST['aa'];
                                            $bb=$_POST['bb'];
                                            $cc=$_POST['cc'];
                                            $dd=$_POST['dd'];
                                            $ee=$_POST['ee'];
                                            mysqli_query($con, "INSERT INTO activity (title, type, publisher, start_time, end_time) values('$aa', '$bb', '$cc', '$dd', '$ee')");
                                        }                                                                                    
                                        echo"</form>";
                                        //去除活动
                                        if($result && mysqli_num_rows($result) > 0) {
                                            while($row = mysqli_fetch_array($result)){
                                                echo "<form action='' method='post'>";
                                                echo '<tr>';
                                                echo "<td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td>
                                                    <td>
                                                    <input type = 'submit' name = 'delsub$row[0]' value = '去除成员' method='post'/>
                                                    </td>";
                                                echo '</tr>';
                                               
                                            if(!empty($_POST["delsub$row[0]"])){
                                                mysqli_query($con,"DELETE FROM activity WHERE id=$row[0]");
                                               
                                            }
                                                echo"</form>";
                                            }
                                        }
?>                                         
                                    
                                    </table>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../../primordial_js/lanhuo.js"></script>
</body>

</html>