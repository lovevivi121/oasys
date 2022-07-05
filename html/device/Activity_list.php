<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../primordial_css/appear/appear.css">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../primordial_css/body-box.css">


    <!-- //////////////////////////////////////// -->
    <script src="../../jQuery/jquery.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- 分页搜索 -->
    <!-- <script src="../../table_paging_search/fancyTable.js"></script> -->
</head>

<body>
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <h1 class="page-title" style="width: 111.6%;">活动列表</h1>
                    <!-- 列表 -->
                    <table cellspacing="0" id="table-basic" class="table table-sm table-bordered table-striped">
                        <thead>
                            <tr>
                                <td>标题</td>
                                <td>类型</td>
                                <td>发布人</td>
                                <td>发布时间</td>
                                <td>结束时间</td>
                            </tr>
                        </thead>
                        <!-- //下面写历史的发布活动 -->

<?php
                        $con = mysqli_connect('localhost', 'root', '123456', 'register', '33066') or die('连接数据库失败');
                        mysqli_set_charset($con, 'utf8mb4');
    
                        $sql = "SELECT * FROM activity";
                        $result = mysqli_query($con, $sql);
    
                        if($result && mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_array($result)){
                                echo '<tr>';
                                echo "<td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td>
                                ";
                                echo '</tr>';
                            }
                        }
?>              
                    </form>                                  
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="../../primordial_js/lanhuo.js"></script>
</body>
<!-- 分页搜索初始化 -->
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
<!-- //获取登录反调函数内容 -->
<script>
    // 注意这里如何获取登录的用户名：为所需的标签加入id类即可
    var username = localStorage.getItem("username");
    document.getElementsByClassName("id").value = username;
</script>


</html>