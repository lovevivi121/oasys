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
    <script language="javascript">
        function check(form) {
            if (form.txt_title.value == "") {
                alert("请输入新闻标题!");
                form.txt_title.focus();
                return false;
            }
            if (form.txt_content.value == "") {
                alert("请输入新闻内容!");
                form.txt_content.focus();
                return false;
            }
            form.submit();
        }
    </script>
    <!-- ///网页结构 -->
    <div id="content">
        <div class="container">
            <div class="row">

                <div class="span12">
                    <h1 class="page-title">添加新闻</h1>
                    <div class="box-container">
                        <div class="box-holder">
                            <div class="box">
                                <div class="bgimg"></div>
                                <div class="content">
                                </div>
                                <div class="con_right">
                                    <div class="">
                                        <div class="">
                                            <div style="">
                                                <form name="form1" method="post" action="doAction.php" enctype="multipart/form-data">
                                                    <table width="100%" height="212" border="0" cellpadding="0" cellspacing="0" class="table table-sm table-bordered table-striped">
                                                        <tr>
                                                            <td width="87" align="center" class="page-title">新闻主题：</td>
                                                            <td width="433" height="31"><input required name="title" type="text" id="txt_title" size="40">
                                                                <font color="red">*</font>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td height="124" align="center" class="page-title">新闻内容：</td>
                                                            <td><textarea name="content" cols="100" required rows="8" id="txt_content"></textarea></td>
                                                        </tr>
                                                        <!-- <tr>
                                <td>时间:</td>
                                <td><input type="text" name="date"></td>
                            </tr> -->
                                                        <tr>
                                                        </tr>

                                                        <tr border="0">
                                                            <td height="40" colspan="2" align="center" border="0">
                                                                <input name="Submit" type="button" class="btn_grey" value="提交" onClick="return check(form1);"> &nbsp; <input type="reset" name="Submit2" value="重置"></td>
                                                        </tr>
                                                    </table>
                                                </form>
                                            </div>
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
    <script src="../../primordial_js/lanhuo.js"></script><script src="../../primordial_js/lanhuo.js"></script>
</body>

</html>