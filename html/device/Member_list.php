<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team_members</title>
    <script src="../../jQuery/jquery.min.js"></script>
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../primordial_css/Team_members/narrow-jumbotron.css">
    <link rel="stylesheet" href="../../primordial_css/appear/appear.css">
    <!-- 分页搜索 -->
    <script src="../../table_paging_search/fancyTable.js"></script>
</head>

<body>
    <div class="table-shadow">
        <table cellspacing="0" id="table-basic" class="table table-sm table-bordered table-striped" style="min-width: 1200px;">
            <thead>
                <tr>
                    <th>姓名</th>
                    <th>职务</th>
                    <th>年龄</th>
                    <th>邮箱</th>
                    <th>新浪微博</th>
                    <th>腾讯QQ</th>
                    <th>微信</th>
                    <th>电话号码</th>
                    <th>家庭住址</th>
                    <th>部门</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>高佬</td>
                    <td>神</td>
                    <td>12</td>
                    <td>132</td>
                    <td>zanwu</td>
                    <td>1854738290</td>
                    <td>WeChat</td>
                    <td>14384950439</td>
                    <td>地球村</td>
                    <td>厂长</td>
                </tr>
<?php
                    //连接数据库
                    $con = mysqli_connect('localhost', 'root', '123456', 'register', '33066') or die('连接数据库失败');
                    mysqli_set_charset($con, 'utf8mb4');
                    //查找表
                    $sql = "SELECT * FROM register";
                    $result = mysqli_query($con, $sql);
                    //列写表格
                    if($result && mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_array($result)){
                            echo '<tr>';
                            echo "<td>$row[6]</td><td>$row[9]</td><td>$row[7]</td><td>$row[1]</td><td>$row[3]</td><td>$row[5]</td><td>$row[4]</td><td>$row[8]</td><td>$row[10]</td><td>$row[11]</td>";
                            echo '</tr>';
                            
                        }
                    }
?>
            </tbody>
        </table>
    </div>
    <!-- <script src="../../primordial_js/Team_members/freeze-table.js"></script> -->
    <!-- ////////////////////// -->
    <!-- 插件，用于解决表格过长，显示表头的问题 -->
    <script>
        // $(document).ready(function() {

        //     $(".table-basic").freezeTable();

        //     $(".table-columns-only").freezeTable({
        //         'freezeHead': false,
        //     });

        //     $(".table-head-only").freezeTable({
        //         'freezeColumn': false,
        //     });

        //     // 2 Columns to be fixed
        //     $(".table-multi-columns").freezeTable({
        //         'columnNum': 2,
        //     });

        //     // Shadow enabled
        //     $(".table-shadow").freezeTable({
        //         'shadow': true,
        //     });

        //     // Customized styles
        //     $(".table-wrap-styles").freezeTable({
        //         'headWrapStyles': {
        //             'box-shadow': '0px 9px 10px -5px rgba(159, 159, 160, 0.8)'
        //         },
        //     });

        //     $(".table-with-scrollbar").freezeTable({
        //         'scrollBar': true,
        //     });
        // });
    </script>
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

<!-- /////////////////////////// -->
<!-- 头不变表格//表格样式是bootstrap自带的 -->
<!--
    <link rel="stylesheet" href="../../primordial_css/Team_members/narrow-jumbotron.css">
    ////////////////////////////////////
<div class="table-shadow">
        <table cellspacing="0" id="table-basic" class="table table-sm table-bordered table-striped" style="min-width: 1200px;">
            <thead>
                <tr>
                    
                </tr>
            </thead>
            <tbody>
                <tr>

                </tr>
            </tbody>
        </table>
</div>
 -->
<!-- /////////////////////////////// -->
<!--
<script>
        $(document).ready(function() {

            $(".table-basic").freezeTable();

            $(".table-columns-only").freezeTable({
                'freezeHead': false,
            });

            $(".table-head-only").freezeTable({
                'freezeColumn': false,
            });

            // 2 Columns to be fixed
            $(".table-multi-columns").freezeTable({
                'columnNum': 2,
            });

            // Shadow enabled
            $(".table-shadow").freezeTable({
                'shadow': true,
            });

            // Customized styles
            $(".table-wrap-styles").freezeTable({
                'headWrapStyles': {
                    'box-shadow': '0px 9px 10px -5px rgba(159, 159, 160, 0.8)'
                },
            });

            $(".table-with-scrollbar").freezeTable({
                'scrollBar': true,
            });
        });
<script src="../../primordial_js/Team_members/freeze-table.js"></script>
 -->