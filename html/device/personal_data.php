<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>personal_data</title>
    <link rel="stylesheet" href="../../primordial_css/appear/appear.css">
    <!-- ///////////////////////////////////////////////////////////////////////////// -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../primordial_css/body-box.css">


    <!-- //////////////////////////////////////// -->
    <script src="../../jQuery/jquery.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../primordial_css/personal_data/personal_data.css">
    <style>
        .photo {
            position: relative;
            width: 100px;
            height: 100px;
            margin: 0, 20px;
            margin-right: 30px;
            border-radius: 50%;
            background: rgb(223, 223, 223);
            border: 13px solid rgb(223, 223, 223);
            overflow: hidden !important;
            transform: rotate(-1deg);
        }
        
        .photo:before {
            position: absolute;
            content: '';
            width: 35px;
            height: 35px;
            top: 0px;
            right: 20px;
            border-radius: 50%;
            background: #aaa;
            border: 2px solid #fff;
            transform: scale(0);
            transition: 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55);
            -webkit-animation: user-head 0.5s 0s forwards;
            -moz-animation: user-head 0.5s 0s forwards;
            animation: user-head 0.5s 0s forwards;
        }
        
        .photo:after {
            position: absolute;
            content: '';
            width: 140px;
            height: 220px;
            top: 38px;
            right: -32px;
            border-radius: 50%;
            background: #aaa;
            border: 2px solid #fff;
            transform: translateY(36px);
            transition: 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55);
            -webkit-animation: user-body 0.5s 0.3s forwards;
            -moz-animation: user-body 0.5s 0.3s forwards;
            animation: user-body 0.5s 0.3s forwards;
        }
        
        @-webkit-keyframes user-head {
            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
                -moz-transform: scale(1);
            }
        }
        
        @-moz-keyframes user-head {
            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
                -moz-transform: scale(1);
            }
        }
        
        @keyframes user-head {
            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
                -moz-transform: scale(1);
            }
        }
        
        @-webkit-keyframes user-body {
            100% {
                -webkit-transform: translateY(2px);
                transform: translateY(2px);
                -moz-transform: translateY(2px);
            }
        }
        
        @-moz-keyframes user-body {
            100% {
                -webkit-transform: translateY(2px);
                transform: translateY(2px);
                -moz-transform: translateY(2px);
            }
        }
        
        @keyframes user-body {
            100% {
                -webkit-transform: translateY(2px);
                transform: translateY(2px);
                -moz-transform: translateY(2px);
            }
        }
    </style>

    <body>
        <!-- nav -->
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="brand">个人资料</a>
                </div>
            </div>
        </div>
        <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- /navbar -->
        <div id="content">
            <div class="container">
                <!-- ///////////////////////////////////////////////////////////////////////////////////////// -->
                <!-- 每次从row里面写东西 -->
                <div class="row">
                    <!-- ///////////////////////////////// -->
                    <!-- 左边导航栏部分 -->
                    <div class="span3">
                        <!-- 左上角头像部分 -->
                        <div class="account-container">
                            <!-- 头像 -->
                            <div class="photo">
                            </div>
                            <!-- /account-avatar -->
                            <div class="account-details">

                                <span class="account-name" id="username_1"></span>

                                <span class="account-role" id="position"></span>

                                <span class="account-actions">欢迎回来</span>
                            </div>
                            <!-- /account-details -->
                        </div>
                        <!-- /account-container -->

                        <hr />
                        <!-- 左侧页面导航栏/// ///////////////////////////////////////////////////////-->
                        <!-- <ul id="main-nav" class="nav nav-tabs nav-stacked">

                            <li class="active">
                                <a href="#">个人信息</a>
                            </li>

                            <li>
                                <a href="#">
                                    自我介绍
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    个人业绩报表
                                </a>
                            </li>
                        </ul> -->
                        <!-- //////////////////////////////////////////////////////////////////////////////////////////////////// -->
                        <!-- 个人格言部分 -->
                        <div class="sidebar-extra">
                            <h1 class="page-title">个人格言</h1>
                            <!-- 在盒子里标签里添加个人格言 -->
                            <div class="box" id="personal_motto">

                            </div>
                        </div>
                        <!-- .sidebar-extra -->
                        <hr>
                        <!-- 自我介绍部分 -->
                        <h1 class="page-title">自我介绍</h1>
                        <div class="box-container">
                            <div class="box-holder">
                                <!-- 在box盒子里添加自我介绍内容 -->
                                <div class="box">
                                    <p id="self_introduction"></p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- ///////////////////// -->
                    <!-- 右边内容部分 -->
                    <div class="span9">
                        <!-- //////////////////////////////////////////////////////////// -->
                        <!-- 个人基础信息部分 -->
                        <h1 class="page-title">个人基础信息</h1>

                        <div class="box-container">
                            <div class="box-holder">
                                <table cellspacing="0" id="table-basic" class="table table-sm table-bordered table-striped">
                                    <tr>
                                        <td>姓名</td>
                                        <td id="username_2"></td>
                                    </tr>
                                    <tr>
                                        <td>职务</td>
                                        <td id="work"></td>
                                    </tr>
                                    <tr>
                                        <td>年龄</td>
                                        <td id="age"></td>
                                    </tr>
                                    <tr>
                                        <td>邮箱</td>
                                        <td id="email"></td>
                                    </tr>
                                    <tr>
                                        <td>新浪微博</td>
                                        <td id="xlwb"></td>
                                    </tr>
                                    <tr>
                                        <td>微信</td>
                                        <td id="wechat"></td>
                                    </tr>
                                    <tr>
                                        <td>腾讯QQ</td>
                                        <td id="qq"></td>
                                    </tr>
                                    <tr>
                                        <td>电话号码</td>
                                        <td id="phone"></td>
                                    </tr>
                                    <tr>
                                        <td>家庭住址</td>
                                        <td id="address"></td>
                                    </tr>
                                    <tr>
                                        <td>部门</td>
                                        <td id="section"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!-- ///////////////////////////////////////////////////// -->

                        <!-- //////////////////////////////////////////////////////// -->
                        



                    </div>
                    <script src="../../primordial_js/Team_members/freeze-table.js"></script>
                    <!-- <?php
                    //获取从index发送过来的登录后的信息值//本身想采用session传值，但是不会整活儿了，所以采用了更简单的local storage传值嘤嘤嘤
                        $username = $_POST['usernamedata'];
                        echo $username;
                        // echo "123321";
                        echo json_encode(array("error" =>120,"data" =>"yes gold\seccess","username"=>"$username"));


                    ?> -->
                    <script>
                        // console.log(localStorage.getItem("username"));
                        // console.log(localStorage.getItem("work"));
                        // console.log(localStorage.getItem("age"));
                        // console.log(localStorage.getItem("email"));
                        // console.log(localStorage.getItem("xlwb"));
                        // console.log(localStorage.getItem("wechat"));
                        // console.log(localStorage.getItem("qq"));
                        // console.log(localStorage.getItem("phone"));
                        // console.log(localStorage.getItem("address"));
                        // console.log(localStorage.getItem("section"));
                        //接收来自local storage的值
                        var username = localStorage.getItem("username");
                        var work = localStorage.getItem("work");
                        var age = localStorage.getItem("age");
                        var email = localStorage.getItem("email");
                        var xlwb = localStorage.getItem("xlwb");
                        var wechat = localStorage.getItem("wechat");
                        var qq = localStorage.getItem("qq");
                        var phone = localStorage.getItem("phone");
                        var address = localStorage.getItem("address");
                        var section = localStorage.getItem("section");
                        //
                        var idcard = localStorage.getItem("idcard");
                        var marriage = localStorage.getItem("marriage");
                        var sex_ori = localStorage.getItem("sex_ori");
                        var social_acc = localStorage.getItem("social_acc");
                        var blood = localStorage.getItem("blood");
                        var height = localStorage.getItem("height");
                        var weight = localStorage.getItem("weight");
                        var birthday = localStorage.getItem("birthday");
                        var self_introduction = localStorage.getItem("self_introduction");
                        var personal_motto = localStorage.getItem("personal_motto");
                        //将值传给页面
                        document.getElementById("username_1").innerHTML = username;
                        document.getElementById("username_2").innerHTML = username;
                        document.getElementById("work").innerHTML = work;
                        document.getElementById("position").innerHTML = "职位:" + work;
                        document.getElementById("age").innerHTML = age;
                        document.getElementById("email").innerHTML = email;
                        document.getElementById("xlwb").innerHTML = xlwb;
                        document.getElementById("wechat").innerHTML = wechat;
                        document.getElementById("qq").innerHTML = qq;
                        document.getElementById("phone").innerHTML = phone;
                        document.getElementById("address").innerHTML = address;
                        document.getElementById("section").innerHTML = section;
                        document.getElementById("self_introduction").innerHTML = self_introduction;
                        document.getElementById("personal_motto").innerHTML = personal_motto;
                        // console.log(111);
                    </script>
                    <script src="../../primordial_js/lanhuo.js"></script>
    </body>

</html>
<!-- 
顶部固定导航栏应该怎么写
<div class="navbar navbar-fixed-top">

    <div class="navbar-inner">

        <div class="container">
            <a class="brand">个人资料</a>
        </div>
    </div>
</div>

 -->
<!-- 
    每个网页body下的框架
    <div id="content">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <h1 class="page-title">自我介绍</h1>
                        <div class="box-container">
                            <div class="box-holder">
                                <div class="box">
                                123
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
 -->
<!-- /////////////////////////////////////////////////////// -->

<!-- 
    每一个小盒子怎么写
    span由1~12
<div class="span12">
    <h1 class="page-title">自我介绍</h1>
    <div class="box-container">
        <div class="box-holder">
            <div class="box">
            123
            </div>
        </div>
    </div>
</div>
 -->