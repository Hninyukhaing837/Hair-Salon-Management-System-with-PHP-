<?php include "session.php"; ?>

<?php 

	include "base.php";

	function text_filter($in){
		$in = trim($in);
		$in = stripcslashes($in);
		$in = htmlentities($in, ENT_QUOTES);				
		return $in;
	}


	function user_check($user){
		global $con;
		$sql = "SELECT u_id FROM user WHERE u_uname='$user'";
		$query = mysqli_query($con,$sql);
		if($result = mysqli_fetch_assoc($query)){
			return 1;
		}else{
			return 0;
		}
	}



	function reg_user($arr){

		global $con;

		$name = text_filter($arr["name"]);
		$role = text_filter($arr["role"]);
		$pass = password_hash(text_filter($arr["pass"]), PASSWORD_DEFAULT);
		$uname = text_filter($arr["uname"]);
		$phone = text_filter($arr["phone"]);
		$code = md5(text_filter($arr["name"])).md5(rand(0,1000));

		if (user_check($uname)) {
			$reg = false;
		}else{


		$sql = "INSERT INTO user (u_name,u_uname,u_password,u_phone,u_role,u_code) 
		VALUES ('$name','$uname','$pass','$phone','$role','$code')";


		$reg = mysqli_query($con,$sql);

		}

		return $reg;

	}

	//Aung Thiha Start
	function get_service(){
		global $con;
		$sql = "SELECT * FROM service WHERE s_status=1";
		$query = mysqli_query($con,$sql);
		$output = [];
		$i = 0;
		while ($out = mysqli_fetch_assoc($query)) {
			$output[$i++] = $out;
		}
		return $output;
	}

	function get_cosmetic(){
		global $con;
		$sql = "SELECT * FROM cosmetic WHERE c_status = 1";
		$query = mysqli_query($con,$sql);
		$output = [];
		$i = 0;
		while ($out = mysqli_fetch_assoc($query)) {
			$output[$i++] = $out;
		}
		return $output;
	}

	function get_user(){
		global $con;
		$sql = "SELECT * FROM user WHERE u_role = 3";
		$query = mysqli_query($con,$sql);
		$output = [];
		$i = 0;
		while ($out = mysqli_fetch_assoc($query)) {
			$output[$i++] = $out;
		}
		return $output;
	}

	function get_all($table){
		global $con;
		$sql = "SELECT * FROM $table";
		$query = mysqli_query($con,$sql);
		$output = [];
		$i = 0;
		while ($out = mysqli_fetch_assoc($query)) {
			$output[$i++] = $out;
		}
		return $output;
	}

	function upload($arr){
		global $con;
		$date = date("Y-m-d");
		$i_cname  = text_filter($arr['cname']);
		$service = text_filter($arr['service']);
		$brand   = text_filter($arr['brand']);
		$stylish = text_filter($arr['stylish']);

		$exp_ser = explode('/', $service);
		$s_name = $exp_ser[0];
		$s_cost = $exp_ser[1];

		$exp_brand = explode('/', $brand);
		$c_name = $exp_brand[0];
		$c_price = $exp_brand[1];

		$exp_stylish = explode('/', $stylish);
		$u_id = $exp_stylish[0];
		$u_name = $exp_stylish[1];

		// return $u_name.' - '.$s_name.' - '.$s_cost.' - '.$c_name.' - '.$c_price.' - '.$u_id.' - '.$u_name;
		$sql = "INSERT INTO income (i_cname,s_name,s_cost,c_name,c_price,u_id,u_name,date) VALUES
		('$i_cname','$s_name','$s_cost','$c_name','$c_price','$u_id','$u_name','$date')";
        $query = mysqli_query($con,$sql);


		return $query;
	}

	function get_income($today){
		global $con;	    

		$sql = "SELECT * FROM income WHERE date='$today'";
		// die($sql);
		$query = mysqli_query($con,$sql);
		$output = [];
		$i = 0;
		while ($out = mysqli_fetch_assoc($query)) {
			$output[$i++] = $out;
		}
		return $output;
	}

	function get_rate($arr){
		global $con;	    
		$start  = text_filter($arr['start']);
		$end = text_filter($arr['end']);

		$sql = "SELECT * FROM income WHERE date BETWEEN '$start' AND '$end'";
		// die($sql);
		$query = mysqli_query($con,$sql);
		$output = [];
		$i = 0;
		while ($out = mysqli_fetch_assoc($query)) {
			$output[$i++] = $out;
		}
		return $output;
	}

	function income_last10(){
		global $con;
		$sql = "SELECT SUM(s_cost+c_price) as dailyincome,date FROM income GROUP BY date ORDER BY date DESC LIMIT 10";
		$query = mysqli_query($con,$sql);
		$output = [];
		$i = 0;
		while ($out = mysqli_fetch_assoc($query)) {
			$output[$i++] = $out;
		}
		return $output;
	}

	function today_income($today){
		global $con;	    

		$sql = "SELECT SUM(s_cost+c_price) as todayincome FROM income WHERE date='$today'";
		// die($sql);
		$query = mysqli_query($con,$sql);
		$out = mysqli_fetch_assoc($query);
		return $out;
	}

	function customers(){
		global $con;	    

		$sql = "SELECT * FROM `income` GROUP BY i_cname";
		$query = mysqli_query($con,$sql);
		$row = mysqli_num_rows($query);
		return $row;
	}

	function get_employees(){
		global $con;	    

		$sql = "SELECT * FROM `user` WHERE NOT u_role=1";
		$query = mysqli_query($con,$sql);
		$row = mysqli_num_rows($query);
		return $row;
	}
	//Aung Thiha End

	// kohtet start

	function get_sum($date){
		global $con;
		

		$sql = "SELECT SUM(s_cost+c_price) FROM income WHERE date='$date'";
		$query = mysqli_query($con,$sql);
		$total = mysqli_fetch_assoc($query);

		return $total["SUM(s_cost+c_price)"];
	}

	function get_rate_sum($arr){
		global $con;

		$start  = text_filter($arr['start']);
		$end = text_filter($arr['end']);

		$sql = "SELECT SUM(s_cost+c_price) FROM income WHERE date BETWEEN '$start' AND '$end'";
		$query = mysqli_query($con,$sql);
		$total = mysqli_fetch_assoc($query);

		return $total["SUM(s_cost+c_price)"];
	}

	// kohtet end

	//zin min htun start

	function add_service($arr){
		global $con;
		$name = $_POST['s_name'];
	    $price = $_POST['s_price'];
	    $s_date = date("Y-m-d");
	    $sql = "INSERT INTO service(s_name, s_cost, s_time) VALUES ('$name', '$price', '$s_date')";
	    $s_query = mysqli_query($con,$sql);
	    if ($s_query) {
	        return '<div class="alert bg-success alert-icon-left alert-dismissible mb-2" role="alert">
	            <strong>Register</strong> success....
	          </div>';
	    }else{
	    	return "db insert error";
	    }
		
	}

	function add_brand($arr){
		global $con;

		$brand_name = $arr['b_name'];
		$service_name = $arr['ser_name'];
		$brand_price = $arr['b_price'];
		$brand_date = date("Y-m-d");
		$sql = "INSERT INTO cosmetic(c_name, c_service, c_price, c_time) VALUES ('$brand_name', '$service_name', '$brand_price', '$brand_date')";
			$query = mysqli_query($con , $sql);
		if ($query) {
			return '<div class="alert bg-success alert-icon-left alert-dismissible mb-2" role="alert">
			    <strong>Register</strong> success....
			  </div>';
			}else{
				return "db insert error";
			}
	}

	function get_list($today){
		global $con;
		$name = $_SESSION['name'];
		$sql = "SELECT * FROM income WHERE date='$today' AND u_name = '$name'";
		// die($sql);
		$query = mysqli_query($con,$sql);
		$output = [];
		$i = 0;
		while ($out = mysqli_fetch_assoc($query)) {
			$output[$i++] = $out;
		}
		return $output;
	}

	function get_total($date){
		global $con;
		$name = $_SESSION['name'];
		$sql = "SELECT SUM(s_cost+c_price) FROM income WHERE date='$date' AND u_name = '$name'";
		$query = mysqli_query($con,$sql);
		$total = mysqli_fetch_assoc($query);

		return $total["SUM(s_cost+c_price)"];
	}


	//zin min htun end

	// Yell Htut 
		function get_date()
		{
			global $con;
			$sql="SELECT date FROM income";
			$query = mysqli_query($con , $sql);
			$i =0;
			$arr =[];
			while ($out = mysqli_fetch_assoc($query) ) {

				$arr[$i++] = $out['date'];
			}
			return $arr;

		}

		function get_user_info(){
			global $con;
			$sql ="SELECT * FROM user";
			$query = mysqli_query($con,$sql);
			$outuser = [];
			$i = 0;
			while ($out = mysqli_fetch_assoc($query) ) {
				$outuser[$i++] = $out;
			}
			return $outuser;


		}

		function edit_password($pass_coad,$user_id)
		{
			global $con;
			$pass_edit = password_hash(text_filter($pass_coad), PASSWORD_DEFAULT);
			$sql = "UPDATE user SET u_password='$pass_edit' WHERE u_id='$user_id' ";
			$query = mysqli_query($con,$sql);

			return $query;

		}


	// Yell Htut
	
 ?>



