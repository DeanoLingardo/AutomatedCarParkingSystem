<?php
require('PHP/config.php');
// If the values are posted, insert them into the database.
if (isset($_POST['staff_id']) && isset($_POST['password']) && isset($_POST['plate']) && isset($_POST['email'])){
    $staff_id = $_POST['staff_id'];
    $plate = $_POST['plate'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO `users` (staff_id, plate, email, password) VALUES ('$staff_id', '$plate', '$email', '$password')";
    $result = mysqli_query($con, $query);
    if($result){
        header('Location: ./index.php');

    }else{
        $fmsg ="User Registration Failed";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>LBU Car Parking Sign up</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/Loginpage.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form method="post" action="" class="login100-form validate-form">
                    <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
                    <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
					<span class="login100-form-title p-b-43">
						Sign up page
					</span>

                    <div class="wrap-input100 validate-input" data-validate = "Staff Id example (C3461349)">
                        <input maxlength="8" class="input100" type="text" name="staff_id">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Staff ID</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "UK Standards">
                        <input maxlength="8"class="input100" type="text" name="plate">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Number Plate</span>
                    </div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="confirmpassword">
						<span class="focus-input100"></span>
						<span class="label-input100">Confirm Password</span>
					</div>


					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Sign up
						</button>
					</div>

					<div class="text-center p-t-46 p-b-20">
						<span href="loginpage.html" class="txt2">
							<a href="/RegistrationAndLogin/RegistrationAndLogin/login.php">log in</a>
						</span>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('https://sewell-construction.co.uk/wp-content/uploads/sites/2/2016/12/Leeds-Beckett-Library-16-Sept-2016-008.jpg');">
				</div>
			</div>
		</div>
	</div>


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
	<script src="Login-screen/js/main.js"></script>
<?php ?>
</body>
</html>