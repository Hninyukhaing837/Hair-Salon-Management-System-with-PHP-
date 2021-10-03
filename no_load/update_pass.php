<?php 

	include "../include/function.php";

	 if ( isset($_POST['pass_update']) ) {


	 	$edit_pass = $_POST['pass_update'];
	 	$user_id = $_POST['user_id'];
	 	
		if ( edit_password($edit_pass,$user_id) ) {
			echo "ok";
		}else{
			echo "fail";
		}

	}
	

 ?>