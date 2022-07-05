<?php
	
	header('Content-type:text/html;charset=utf-8');
	@$method = $_POST['f_method'];
	@$method_v = $_POST['f_method_v'];
	@$title = $_POST['f_title'];
	@$content = $_POST['f_content'];
	
	$link = mysqli_connect("localhost","root","123456","users","33066");
	// $z = mysqli_select_db('users',$link);
	$sql = "insert into guestmessage values (null,'$method','$method_v','$title','$content',now())";
	$qry = mysqli_query($link,$sql);
	
	// echo mysqli_error();
	
	if($qry){
		
		header('location:add_show1.php');
	}else{
		header('location:add_show1.php');
	}
?>