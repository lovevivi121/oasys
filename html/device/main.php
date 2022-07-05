<!doctype html>
<html>

<head>
    <title>新闻信息管理</title>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <link href="css/index.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <style>
        #wai {
            width: 100%;
            padding: 10px;
            overflow: hidden
        }
        
        .divleft {
            float: left;
            width: 30%;
        }
        
        .divright {
            float: right;
            width: 70%;
        }
    </style>
    <link rel="stylesheet" href="../../primordial_css/appear/appear.css">
    <!-- ///////////////////////////////////////////////////////////////////////////// -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../primordial_css/body-box.css">
    <!-- //////////////////////////////////////// -->
    <script src="../../jQuery/jquery.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <?php
 $conn = mysqli_connect("localhost", "root", "123456", "news", "33066") or die("数据库服务器连接错误".mysqli_connect_error());      //连接数据库
mysqli_set_charset($conn,"utf8");                    //设置编码格式
  $id  = $_GET['id']; //取得url中id的值
  $sql = "select * from news where id =".$id; //拼接sql数据库命令
$result = mysqli_query($conn,$sql);                  //检索新闻id对应的新闻信息
if (!$result) {
printf("Error: %s\n", mysqli_error($conn));
exit();
}
$row = mysqli_fetch_object($result);             //获取结果集
?>
        <!-- <div class="rdimg" >
	</div>
	<div class="h1" align="right">
	</div>
<div id="wai"> -->
        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <h1 class="page-title" style="font-size: 50px; text-align: center;margin-bottom: 0;">
                            <?php echo $row->title;?>
                        </h1>
                        <div class="box-container">
                            <div class="box-holder">

                                <div class="divleft">
                                </div>
                                <h3 style="float: right;">
                                    <?php echo $row->time;?>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- //内容 -->
                    <div class="span12">
                        <div class="box-container">
                            <div class="box-holder">
                                <div class="box" style="font-size: 23px;">
                                    <?php echo $row->content;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

</body>

</html>