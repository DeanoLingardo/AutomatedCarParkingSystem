<?php
include("PHP/config.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    $sql = "SELECT id FROM users WHERE email = '$email' and password = '$password'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($result);

    // If result matched $email and $password, table row must be 1 row

    if($count == 1) {
        $_SESSION['email'] = $email;
        header("location: https://www.google.com");
    }else {
        $fmsg ="User Login Failed";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>LBU Car Parking Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Vendor/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Vendor/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Vendor/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Vendor/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Vendor/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Vendor/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/Loginpage.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
                    <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
                    <span class="login100-form-title p-b-43">
						Login to continue
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>


					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>


					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-46 p-b-20">
						<span href="loginpage.html" class="txt2">
							<a href="/RegistrationAndLogin/signup.php">Sign up</a>
						</span>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('https://sewell-construction.co.uk/wp-content/uploads/sites/2/2016/12/Leeds-Beckett-Library-16-Sept-2016-008.jpg');">
				</div>
			</div>
		</div>
	</div>





<!--===============================================================================================-->
	<script src="../Vendor/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../Vendor/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../Vendor/vendor/bootstrap/js/popper.js"></script>
	<script src="../Vendor/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../Vendor/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../Vendor/vendor/daterangepicker/moment.min.js"></script>
	<script src="../Vendor/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../Vendor/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
    <?php ?>
</body>
</html>