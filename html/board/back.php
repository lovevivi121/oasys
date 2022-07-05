<?php
	
	header('Content-type:text/html;charset=utf-8');
	@$back = $_POST['f_back'];
	@$message_id = $_POST['f_message_id'];
	$link = mysqli_connect("localhost","root","123456","users","33066");
	// $z = mysql_select_db('users',$link);
	$sql = "insert into guestback values (null,'$back',now(),'$message_id')";
	$qry = mysqli_query($link,$sql);
	
	if($qry){
		header('location:add_show1.php');
	}else{
		header('location:add_show1.php');
	}
	
//	print_r($_POST);
	
?>