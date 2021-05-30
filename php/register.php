<html>
<head>
	<title>Register Website by Thinh-sama</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
	href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
	href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
	href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
	href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
	href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
	href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
	href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>
<body>
	<?php
	require_once("lib/connection.php");
	if (isset($_POST["btn_submit"])) {
  			//lấy thông tin từ các form bằng phương thức POST
  			$username = $_POST["username"];
  			$password = $_POST["pass"];
 			 $name = $_POST["name"];
  			$email = $_POST["email"];
  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
			  if ($username == "" || $password == "" || $name == "" || $email == "") {
				   echo "bạn vui lòng nhập đầy đủ thông tin";
  			}else{
  					// Kiểm tra tài khoản đã tồn tại chưa
  					$sql="select * from users where username='$username'";
					$kt=mysqli_query($conn, $sql);
 
					if(mysqli_num_rows($kt)  > 0){
						// echo "Tài khoản đã tồn tại";
						echo "<p align=center>Tài khoản đã tồn tại </p> ";
					}else{
						//thực hiện việc lưu trữ dữ liệu vào db
	    				$sql = "INSERT INTO users(
	    					username,
	    					password,
	    					name,
						    email
	    					) VALUES (
	    					'$username',
	    					'$password',
						    '$name',
	    					'$email'
	    					)";
					    // thực thi câu $sql với biến conn lấy từ file connection.php
   						mysqli_query($conn,$sql);
				   		// echo "chúc mừng bạn đã đăng ký thành công";
				   		echo "<p align=center>Chúc mừng bạn đã đăng ký thành công</p> ";
					}				
									    				
			  }
	}
	 ?>
	 <div class="limiter">
		<div class="container-login100"
		style="background-image: url('images/bg-1202.jpg');">
		<div class="wrap-login100 p-t-30 p-b-50">
			<span class="login100-form-title p-b-41"> Account Login </span>
	<form action="register.php" method="post" class="login100-form validate-form p-b-33 p-t-5">
		
			
			<div class="wrap-input100 validate-input"
			data-validate="Enter username">
			<input class="input100" type="text" name="username"
			placeholder="User name"> <span class="focus-input100"
			data-placeholder="&#xe82a;"></span>
		</div>
		<div class="wrap-input100 validate-input"
			data-validate="Enter password">
			<input class="input100" type="password" name="pass" id="pass" 
			placeholder="Password"> <span class="focus-input100"
			data-placeholder="&#xe80f;"></span>
		</div>
		<div class="wrap-input100 validate-input"
			data-validate="Enter Ho Ten">
			<input class="input100" type="text" name="name" id="name" 
			placeholder="Name"> <span class="focus-input100"
			data-placeholder="&#xe86f;"></span>
		</div>
		<div class="wrap-input100 validate-input"
			data-validate="Enter Email">
			<input class="input100" type="text" name="email" id="email" 
			placeholder="Email"> <span class="focus-input100"
			data-placeholder="&#xe86b;"></span>
		</div>

		<div class="container-login100-form-btn m-t-32">
			<button  name="btn_submit" type="submit" class="login100-form-btn">Register</button>
		</div>
		<div class="text-center p-t-115">
			<span class="txt1">
				Login now !!! 
			</span>

			<a class="txt2" href="login.php">
				Login
			</a>
		</div>
			<!-- <tr>
				<td>Password :</td>
				<td><input type="password" id="pass" name="pass"></td>
			</tr>
			<tr>
				<td>Ho Ten :</td>
				<td><input type="text" id="name" name="name"></td>
			</tr>
			<tr>
				<td>Email :</td>
				<td><input type="text" id="email" name="email"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="btn_submit" value="Dang ky"></td>
			</tr>
  -->
		
		
	</form>
	</div>
</div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>
</html>