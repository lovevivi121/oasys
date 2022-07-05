<!doctype html>
<html>
<head>
<title>新闻信息管理</title>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<link href="css/index.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>

<body>
<?php
 $conn = mysqli_connect("localhost", "root", "123456", "news", "33066") or die("数据库服务器连接错误".mysqli_connect_error());      //连接数据库
mysqli_set_charset($conn,"utf8");                    //设置编码格式
$id = $_GET['id'];                                     //使用get方法接收欲编辑的新闻id
$sql = "select * from news where id=$id";       //从数据库中查找新闻id对应的新闻信息
$result = mysqli_query($conn,$sql);                  //检索新闻id对应的新闻信息
$row = mysqli_fetch_object($result);                 //获取结果集
?>
<div class="bgimg"></div>
<div class="content">
    <div class="con_right">
        <div class="">
            <div class="">
                <div style="margin-top:100px;margin-left: 100px;">
                    <form name="form1" method="post" action="update_modify_ok.php" enctype="multipart/form-data">
                        <table width="550" height="212" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                            <tr>
                                <td>现场图片</td>
                                <td><input type="file" name="myfile" id="img"></td>
                            </tr>
                            <tr>
                                <td width="87" align="center">新闻主题：</td>
                                <td width="433" height="31"><input name="title" type="text" id="txt_title" size="40" value="<?php echo $row->title;?>" required>
                                <input name="id" type="hidden" value="<?php echo $row->id;?>">
                                </td>
                            </tr>
                            <tr>
                                <td height="124" align="center">新闻内容：</td>
                                <td><textarea name="content" cols="50" required rows="8" ><?php echo $row->content;?></textarea></td>
                            </tr>
                            <tr>
                                <td height="40" colspan="2" align="center">
                                <input name="Submit" type="submit" class="btn_grey" value="修改" >
                                    &nbsp; <input type="reset" name="Submit2" value="重置"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>

</body>
</html>