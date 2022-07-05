<?php
	header('Content-type:text/html;charset=utf-8');
	$method = $_POST['method'];
	$method_v = $_POST['method_v'];
	$title = $_POST['title'];
	$content = $_POST['content'];
	$id = $_POST['f_id'];
	$link = mysqli_connect("localhost","root","123456","users","33066");
	// $z = mysqli_select_db('users',$link);
	$sql = "update guestmessage set method='$method',method_v='$method_v',title='$title',content='$content' where id = '$id'";
	
	$qry = mysqli_query($sql);
	
	if($qry){
		header('location:admin_index.php');
	}else{
		header('location:admin_index.php');
	}
	
?>