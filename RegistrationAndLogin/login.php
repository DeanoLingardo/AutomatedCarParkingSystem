<?php
session_start();
require('PHP/config.php');
//3. If the form is submitted or not.
//3.1 If the form is submitted
if (isset($_POST['staff_id']) && isset($_POST['password'])){
//3.1.1 Assigning posted values to variables.
    $staff_id = $_POST['staff_id'];
    $password = $_POST['password'];
//3.1.2 Checking the values are existing in the database or not
    $query = "SELECT * FROM `users` WHERE staff_id='$staff_id' and password='$password'";

    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    $count = mysqli_num_rows($result);
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
    if ($count == 1){
        $_SESSION['staff_id'] = $staff_id;
        header('Location: /AutomatedCarParkingSystem/WelcomePage/index.php');
    }else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
        $fmsg = "Invalid Login Credentials.";
        header('Location: /AutomatedCarParkingSystem/RegistrationAndLogin/index.php');
    }
}
//3.1.4 if the user is logged in Greets the user with message
if (isset($_SESSION['staff_id'])){
    $staff_id = $_SESSION['staff_id'];
    header('Location: /AutomatedCarParkingSystem/RegistrationAndLogin/index.php');
}else{
//3.2 When the user visits the page first time, simple login form will be displayed.
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
				<form method="post" class="login100-form validate-form">
                    <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
                    <span class="login100-form-title p-b-43">
						Login to continue
					</span>

					<div class="wrap-input100 validate-input" data-validate = "">
						<input class="input100" type="text" id="staff_id" name="staff_id">
						<span class="focus-input100"></span>
						<span class="label-input100">Staff ID</span>
					</div>


					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" id="password" name="password">
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
							<a href="/AutomatedCarParkingSystem/RegistrationAndLogin/signup.php">Sign up</a>
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

</body>
</html>
<?php } ?>