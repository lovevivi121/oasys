<?php
// 通用进入数据库接口
     header('Content-type:text/html;charset=utf-8');

     $con = mysqli_connect('localhost','root','123456','','33066');
     mysqli_query($con,'set names utf8');
     
     
     function my_error($sql){
         $con = mysqli_connect('localhost','root','123456','','33066');
         $res = mysqli_query($con,$sql);
         
         if(!$res){
             echo 'sql执行错误'; 
        
             exit;
         }
         return $res;
     }
     






?>