<?php
 include('config/config.php');     
 $conn = mysqli_connect("localhost", "root", "123456", "news", "33066") or die("数据库服务器连接错误".mysqli_connect_error());      //连接数据库
mysqli_set_charset($conn,"utf8");                   //设置编码格式
$id = $_GET['id'];                                      //获取新闻id
//应用mysqli_query()函数向MySQL数据库服务器发送删除新闻信息的SQL语句
$sql = mysqli_query($conn,"delete from news where id=$id");
if($sql){
	echo "<script>alert('新闻信息删除成功！');window.location.href='search_news.php';</script>";
}else{
	echo "<script>alert('新闻信息删除失败！');window.location.href='search_news.php';</script>";
}
?>