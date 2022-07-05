<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>请假申请</title>
    <link rel="stylesheet" href="../../primordial_css/appear/appear.css">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../primordial_css/body-box.css">


    <!-- //////////////////////////////////////// -->
    <!-- jq bt -->
    <script src="../../jQuery/jquery.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- 分页搜索 -->
    <script src="../../table_paging_search/fancyTable.js"></script>
    <!-- <link rel="stylesheet" href="../../table_paging_search/htmleaf-demo.css"> -->

</head>

<body>
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <h1 class="page-title">请假申请</h1>
                    <div class="box-container">
                        <div class="box-holder">
                            <div class="box">
                                <!-- 表 -->
                                <table cellspacing="0" id="table-basic" class="table table-sm table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <td>申请编号</td>
                                            <td>申请人员</td>
                                            <td>申请日期</td>
                                            <td>申请类别</td>
                                            <td>开始时间</td>
                                            <td>结束时间</td>
                                        </tr>
                                    </thead>
<?php
                    //连接数据库
                    $con = mysqli_connect('localhost', 'root', '123456', 'register', '33066') or die('连接数据库失败');
                    mysqli_set_charset($con, 'utf8mb4');
                    //查找表
                    $sql = "SELECT * FROM sub_app";
                    $result = mysqli_query($con, $sql);
                    //列写表
                    if($result && mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_array($result)){
                            echo '<tr>';
                            echo "<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td>";
                               
                            echo '</tr>';
                       
                        }
                    }
?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
<!-- 表格分页搜索插件 -->
<script>
    $(document).ready(function() {
        $(".table").fancyTable({
            sortColumn: 0,
            pagination: true,
            perPage: 15,
            globalSearch: true
        });
    });
</script>
<script src="../../primordial_js/lanhuo.js"></script>

</html>