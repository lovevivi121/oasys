<meta charset="utf-8">
<?php
// if(is_uploaded_file($_FILES["myfile"]["tmp_name"])){
//     $name=$_FILES["myfile"]["name"];
//     $type=$_FILES["myfile"]["type"];
//     $size=$_FILES["myfile"]["size"];
//     $temp_name=$_FILES["myfile"]["tmp_name"];
//     $error=$_FILES["myfile"]["error"];
//     ?>
//     <?php
//     switch ($type) {
//         case 'image/jpeg':$ok=1;break;
//         case 'image/gif':$ok=1;break;
//         case 'image/png':$ok=1;break;
//         case 'application/octet-stream':$ok=1;break;
//         case 'text/plain':$ok=1;break;
//         default:
//         echo "你不能上传这个文件";
//             # code...
//             break;
//     }
//     $name=iconv("utf-8", "gb2312", $name);
//     if ($ok==1 and $error==0) {
//         move_uploaded_file($temp_name, "upload/".$name);
//         echo "文件上传成功";
//         # code...
//     }
//     # code...
// }
include('config/config.php');
$conn = mysqli_connect("localhost", "root", "123456", "news", "33066") or die("数据库服务器连接错误" . mysqli_connect_error());      //连接数据库
mysqli_query($conn,"set names utf8");    //设置编码格式
$title = $_POST['title'];           //获取新闻标题信息
$content = $_POST['content'];       //获取新闻内容信息
//$createtime = $_POST['date'];    //获取系统当前时间
$images="upload/".$name;       
$sql="insert into news(title,time,content,image) values('$title',now(),'$content','$images')";
echo $sql;
//应用mysqli_query()函数执行insert…into语句添加数据到数据库，并使用if语句判断是否添加成功
$result = mysqli_query($conn,$sql);
if ($result) {
 echo "<script>alert('新闻信息添加成功!'); window.location.href = 'add_news.php';</script>";
} else {
    echo "<script>alert('新闻信息添加失败!'); window.location.href = 'add_news.php';</script>";
}


mysqli_close($conn);                  //关闭MySQL数据库服务器
?>