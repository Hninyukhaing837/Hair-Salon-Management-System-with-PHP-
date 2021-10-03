<?php 

	if (!isset($_SESSION["name"])) {
		// header("location:login.php");
		echo "<script>location.href='http://localhost/hair_salon/login.php'</script>";
	}

 ?>