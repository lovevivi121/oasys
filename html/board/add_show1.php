<?php
	$link = mysqli_connect("localhost","root","123456","users","33066");
	// $z = mysqli_select_db('users',$link);
	$sql = "select * from guestmessage";
	$qry = mysqli_query($link,$sql);
	
?>

	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<title>办公留言系统</title>
		<link rel="stylesheet" href="../../primordial_css/body-box.css">
		<link type="text/css" href="./css/guest_add.css" rel="stylesheet" />
		<link rel="stylesheet" href="../../primordial_css/appear/appear.css">
		 <!-- //网页框架 -->
		 <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    


    <!-- //////////////////////////////////////// -->
    <script src="../../jQuery/jquery.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>

	</head>

	<body>
		<h1 class="page-title">欢迎来到论坛！</h1>
		<div class="container">

			<form id="contactform" name="contactform" class="rounded" method="post" action="add_show.php" name="message">
				<h3>发布讨论</h3>
<!-- 
				<div class="field">
					<label for="user_name">您的联系方式：</label>
					<select name="f_method" class="lxfs">
						<option value="MSN">MSN</option>
						<option value="Email">Email</option>
						<option value="QQ">QQ</option>
						<option value="mobile">手机</option>
					</select>
					<input type="text" class="lxfs" name="f_method_v" id="user_name" value="" />
					<p class="hint">输入您的联系方式(MSN/Email/QQ/手机)</p>
				</div> -->

				<div class="field">
					<label for="post_title">标题:</label>
					<input type="text" class="input" name="f_title" id="post_title" />
					<p class="hint">输入留言标题</p>
				</div>

				<div class="field">
					<label for="post_info">内容:(最多 70 字)</label>
					<textarea class="input textarea" name="f_content" id="post_info"></textarea>
					<p class="hint">输入留言内容</p>
				</div>

				<!-- <div class="field">
					<label for="yzm"><a name="yzmtp">验证码：</a></label>
					<img id="re_confirm" src="yanzhengma.png" class="yzm" />
					<input type="text" class="yzm" name="yzm" id="yzm" />
					<p class="hint">输入运算结果
						<a title="看不清?" href="#yzmtp">看不清?</a>
					</p>
				</div> -->

				<input type="submit" name="Submit" class="button" value="提交" onclick="return check_message()" />
				<!-- <br />请不要恶意骚扰，否则您的 IP 将会被添加到黑名单中<br /> -->
			</form>

			<div class="fankui">
				<script type="text/javascript">
					function show_huifu_box(mid) {
						document.getElementById('huifu' + mid).style.display = "block";
					}
				</script>
				<?php 
            	while($rzt = mysqli_fetch_assoc($qry)){
            ?>
				<div class="content">
					<p class="c_title"><span><?php echo $rzt['add_time'] ?></span>
						<?php echo $rzt['title'] ?>
					</p>
					<p class="c_content" style="margin-bottom:20px;">
						<?php echo $rzt['content'] ?>
					</p>

					<p class="back_btn_p">&nbsp;<input type="button" value="回复" class="back_btn" style="float:right;" onclick="show_huifu_box(<?php echo $rzt['id']; ?>);" />
					</p>

					<div class="huifu" id="huifu<?php echo $rzt['id']; ?>" style="display: none;">
						<p>回复：</p>
						<div class="huifu_show">
							<form action="back.php" method="post">
								<input type="hidden" name="f_message_id" value="<?php echo $rzt['id']; ?>" />
								<input type="text" class="bk_content" name="f_back" />
								<input type="submit" value="回复" class="back_btn" />
							</form>
						</div>
					</div>
					
					<?php 
						$sqla = "select * from guestback where message_id=".$rzt['id'];
						$qrya = mysqli_query($link,$sqla);
						$i = 1;
						while($rzta = mysqli_fetch_assoc($qrya)){ ?>

					<div class="back_content">
						<strong><?php echo $i;  ?> 楼</strong>
						<div class="back_detail">
							<div class="back_neirong"><?php echo $rzta['back_content']; ?></div>
							<div class="back_time"><?php echo $rzta['back_time']; ?></div>
						</div>
					</div>
					
					<?php  $i++; } ?>
					
				</div>
				<?php } ?>
			
			</div>
		</div>
	</body>
	<script src="../../primordial_js/lanhuo.js"></script>
	</html>