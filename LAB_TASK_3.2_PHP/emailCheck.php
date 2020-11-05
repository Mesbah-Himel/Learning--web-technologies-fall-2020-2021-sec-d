<?php
	$email= $_REQUEST['email'];
	if($email==null){
		header('location:email.php?msg=errorinput');
	}
	else{
		echo $_REQUEST['email'];
	}
?>