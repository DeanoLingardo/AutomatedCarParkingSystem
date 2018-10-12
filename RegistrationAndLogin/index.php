<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Coming Soon</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../WelcomePage/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../UserInterface/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../WelcomePage/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Vendor/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Vendor/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../WelcomePage/css/util.css">
	<link rel="stylesheet" type="text/css" href="../WelcomePage/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	
	<div class="size1 bg0 where1-parent">
		<!-- Coutdown -->
		<div class="flex-c-m bg-img1 size2 where1 overlay1 where2 respon2" style="background-image: url('../WelcomePage/images/bg01.jpg');">

		</div>
		
		<!-- Form -->
		<div class="size3 flex-col-sb flex-w p-l-75 p-r-75 p-t-45 p-b-45 respon1">
			<div class="wrap-pic1">
				<img src="../WelcomePage/images/icons/logo2.png" alt="LOGO">
			</div>

			<div class="p-t-50 p-b-60">

				<?php
				$smsg = "Welcome to your account!";
				?>
                <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div>

                <p class="m1-txt1 p-b-36">
					Our new car parking system is <span class="m1-txt1">Coming Soon</span>, Come back soon for more updates!
				</p>
			</div>

			<div class="flex-w">
				<a href="logout.php">
					<p>Logout  <i class="fa fa-lock"></i>
				</a>
			</div>
		</div>
	</div>



	

<!--===============================================================================================-->	
	<script src="../Vendor/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../UserInterface/vendor/bootstrap/js/popper.js"></script>
	<script src="../UserInterface/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../Vendor/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../Vendor/vendor/countdowntime/moment.min.js"></script>
	<script src="../Vendor/vendor/countdowntime/moment-timezone.min.js"></script>
	<script src="../Vendor/vendor/countdowntime/moment-timezone-with-data.min.js"></script>
	<script src="../Vendor/vendor/countdowntime/countdowntime.js"></script>
	<script>
		$('.cd100').countdown100({
			/*Set Endtime here*/
			/*Endtime must be > current time*/
			endtimeYear: 0,
			endtimeMonth: 0,
			endtimeDate: 35,
			endtimeHours: 18,
			endtimeMinutes: 0,
			endtimeSeconds: 0,
			timeZone: "" 
			// ex:  timeZone: "America/New_York"
			//go to " http://momentjs.com/timezone/ " to get timezone
		});
	</script>
<!--===============================================================================================-->
	<script src="../Vendor/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="../WelcomePage/js/main.js"></script>

</body>
</html>
<?php } ?>