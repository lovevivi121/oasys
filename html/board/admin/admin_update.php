<?php

	$id = $_GET['message_id'];
	$link = mysqli_connect("localhost","root","123456","users","33066");
	// $z = mysqli_select_db('users',$link);
	$sql = "select * from guestmessage where id=".$id;
	
	$qry = mysqli_query($sql);
	$rzt = mysqli_fetch_assoc($qry)
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="留言板后台管理" />
        <meta name="keywords" content="留言板,后台管理" />

        <title>留言板后台管理</title>

        <link type="text/css" href="../css/guest.css" rel="stylesheet" />


    </head>
    <body>
        <h1>办公留言系统</h1>
        <div id="whatever">
            <ul class="tabbarlevel1" id="tabpage1"> 
                <li class="selected"><a href="admin_index.php">留言管理</a></li>
                <li><a href="admin_setting.html">系统设置</a></li>
                <li><a href="admin_changepass.html">修改密码</a></li>
                <li><a href="./login.html">退出管理</a></li> 
            </ul>
        </div>
        <div class="hackbox">

            
            <form action="message_update.php" method="post" name="myform">
                <h2>修改留言</h2>
                <input type="hidden" name="f_id" value="<?php echo $rzt['id'] ?>"/>
                <div class="default_top_centercontent">
                    <table cellpadding="3" style="width: 100%">
                        <tr>
                            <td  class="default_update" width="25%">
                                联系方式：
                            </td>

                            <td class="default_update" width="75%">
                                <select name="method" class="upfang" >
                                    <option value="MSN" <?php if($rzt['method'] == 'MSN'){echo 'selected';} ?>>MSN</option>
                                    <option value="Email" <?php if($rzt['method'] == 'Email'){echo 'selected';} ?>>Email</option>
                                    <option value="QQ" <?php if($rzt['method'] == 'QQ'){echo 'selected';} ?>>QQ</option>
                                    <option value="mobile" <?php if($rzt['method'] == 'mobile'){echo 'selected';} ?>>手机</option>
                                </select>&nbsp;&nbsp;&nbsp;
                                <input type="text" name="method_v" id="method_v" value="<?php echo $rzt['method_v']; ?>" class="upfang"/>
                            </td>
                        </tr>
                        <tr>
                            <td  class="default_update">
                                留言标题：
                            </td>
                            <td class="default_update">
                                <input type="text" value="<?php echo $rzt['title'] ?>" size="55px;" class="upfang" name="title"/>
                            </td>

                        </tr>
                        <tr>
                            <td class="default_update">
                                留言内容：
                            </td>
                            <td class="default_update">
                                <textarea class="upfang" name="content"><?php echo $rzt['content'] ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td  class="default_update" colspan="2">
                                <input name="submit" type="submit" value="修改" />
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
    </body>
</html>