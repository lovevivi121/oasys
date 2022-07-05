<?php
	
	header('Content-type:text/html;charset=utf-8');
	$id = $_GET['message_id'];
	$link = mysqli_connect("localhost","root","123456","users","33066");
	// $z = mysqli_select_db('users',$link);
	$sql = "delete from guestmessage where id=".$id;
	
	$qry = mysqli_query($link,$sql);
	
	if($qry){
		header('location:admin_index.php');
	}else{
		header('location:admin_index.php');
	}
?>