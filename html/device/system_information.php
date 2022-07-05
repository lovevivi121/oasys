<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>system_information</title>
    <link rel="stylesheet" href="../../primordial_css/appear/appear.css">
    <!-- // -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../primordial_css/body-box.css">


    <!-- //////////////////////////////////////// -->
    <script src="../../jQuery/jquery.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- 分页搜索 -->
    <script src="../../table_paging_search/fancyTable.js"></script>
</head>

<body>
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <h1 class="page-title">系统消息</h1>
                    <div class="box-container">
                        <div class="box-holder">
                            <div class="box">
                                <table cellspacing="0" id="table-basic" class="table table-sm table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <td>标题</td>
                                            <td>类型</td>
                                            <td>发布时间</td>
                                        </tr>
                                    </thead>
<?php
                        $con = mysqli_connect('localhost', 'root', '123456', 'register', '33066') or die('连接数据库失败');
                        mysqli_set_charset($con, 'utf8mb4');
    
                        $sql = "SELECT * FROM system_message";
                        $result = mysqli_query($con, $sql);
    
                        if($result && mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_array($result)){
                                echo '<tr>';
                                echo "<td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>
                                ";
                                echo '</tr>';
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
</body>

</html>