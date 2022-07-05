<html>
<head>
<title>新闻信息管理</title>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<link href="css/index.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" href="../../primordial_css/appear/appear.css">
<!-- //网页框架 -->
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
                <h1 class="page-title">修改新闻</h1>
                <div class="box-container">
                    <div class="box-holder">
                        <div class="box">
                        <script language="javascript">
function check(form){                    //验证表单信息是否为空
//若查询关键字为空，则弹出提示信息，并定位光标
	if(form1.keyword.value==""){
		alert("请输入查询关键字!");
		form1.keyword.focus();
		return false;
	} 
form1.submit();                           //若各控件不为空，则提交表单信息
}
</script>
<div class="bgimg"></div>
<div class="content">
	<div class="con_right">
		<div>
			<div class="blog_list_wrap">
				<div style="margin-top: 20px;margin-left: 120px;">
					<form name="form1" method="post" action="search_news.php">
						查询关键字&nbsp;
						<input name="keyword" type="text" id="keyword" size="40">
						&nbsp;
						<input type="submit" name="Submit" value="搜索" onClick="return check(form)">
					</form>
				</div>
                <form name="form1" action="muldeal.php" method="post">
                <table border="1" cellspacing="0" id="table-basic" class="table table-sm table-bordered table-striped">
                    <tr>
                        <td width="10%" align="center">id</td>
                        <!-- <td width="10%" align="center">现场图片</td> -->
                        <td width="20%" align="center">新闻标题</td>
                        <td width="50%" align="center">新闻内容</td>
                     	<td width="10%" colspan="2" align="center">操作</td>
                    </tr>
                    <?php
                    $conn = mysqli_connect("localhost", "root", "123456", "news", "33066") or die("数据库服务器连接错误" . mysqli_connect_error());      //连接数据库
                    mysqli_set_charset($conn, "utf8");                          //设置编码格式
                    /*  $_GET['page']为当前页，如果$_GET['page']为空，则初始化为1  */
                    if (!isset($_GET['page'])) {
                        $_GET['page'] = 1;
                    }
                    if (is_numeric($_GET['page'])) {                            //判断变量$page是否为数字，如果是则返回true
                        $page_size = 10;                                        //每页显示10条记录
                        $query = "select id from news order by id desc";
                        $result = mysqli_query($conn, $query);                    //查询符合条件的记录总条数
                        $message_count = mysqli_num_rows($result);                //要显示的总记录数
                        $page_count = ceil($message_count / $page_size);            //根据记录总数除以每页显示的记录数求出所分的页数
                        $offset = ($_GET['page'] - 1) * $page_size;                    //计算下一页从第几条数据开始循环
                        $sql = mysqli_query($conn, "select * from news order by id desc limit $offset, $page_size");
                        $row = mysqli_fetch_object($sql);                       //获取查询结果集
                        if (!$row) {                                              //如果未检索到信息，则输出提示信息
                            echo "<font color='red'>暂无新闻信息!</font>";
                        }
                        do {
                            ?>
                            <tr>
                                <td style="font-size:14px; text-align:center"><input type="checkbox"  name="check[]" value="<?php echo $row->id; ?>">&nbsp;&nbsp;&nbsp;<?php echo $row->id; ?></td>
                                <!-- <td style="font-size:14px; text-align:left"><?php echo $row->image; ?></td> -->
                                <td style="font-size:14px; text-align:left"><?php echo $row->title; ?></td>
                                <td style="font-size:14px; text-align:left"><?php echo $row->content; ?></td>
                                <td align="center"><a href="delete_news_ok.php?id=<?php echo $row->id; ?>">删除</a></td>
                                <td align="center"><a href="modify.php?id=<?php echo $row->id;?>">修改</a></td>
                            </tr>
                            <?php
                        } while ($row = mysqli_fetch_object($sql));         //循环语句结束
                    }
                    ?>

                </table>
                <!-- <input type="submit" name="" value="批量删除"> -->
            </form>
                <br>
                <table style="width:100%; font-size:14px; border:0px; cellspacing:0px; cellpadding:0px">
                    <tr>
                        <!--  翻页条 -->
                        <td width="37%">&nbsp;&nbsp;页次：<?php echo $_GET['page']; ?>/<?php echo $page_count; ?>
                            页&nbsp;记录：<?php echo $message_count; ?> 条&nbsp;
                        </td>
                        <td width="63%" align="right">
                            <?php
                            if ($_GET['page'] != 1) {                                           //如果当前页不是首页
                                echo "<a href=search_news.php?page=1>首页</a>&nbsp;";        //显示“首页”超链接
                                echo "<a href=search_news.php?page=" . ($_GET['page'] - 1) . ">上一页</a>&nbsp;";      //显示“上一页”超链接
                            }
                            if ($_GET['page'] < $page_count) {                                  //如果当前页不是尾页
                                echo "<a href=search_news.php?page=" . ($_GET['page'] + 1) . ">下一页</a>&nbsp;";       //显示“下一页”超链接
                                echo "<a href=search_news.php?page=" . $page_count . ">尾页</a>";                  //显示“尾页”超链接
                            }
                            mysqli_free_result($sql);                                    //释放结果集
                            mysqli_close($conn);                                         //关闭数据库连接
                            ?>
                    </tr>
				</table>
			</div>
		</div>
	</div>
	<div class="clear"></div>
</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- //// -->


</body>
<script src="../../primordial_js/lanhuo.js"></script>
</html>