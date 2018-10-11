<!DOCTYPE html>
<html lang="en">
<head>
	<title>Coming Soon</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../WelcomePage/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../WelcomePage/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../WelcomePage/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../WelcomePage/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../WelcomePage/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../WelcomePage/css/util.css">
	<link rel="stylesheet" type="text/css" href="../WelcomePage/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	
	<div class="size1 bg0 where1-parent">
		<!-- Coutdown -->
		<div class="flex-c-m bg-img1 size2 where1 overlay1 where2 respon2" style="background-image: url('../WelcomePage/images/bg01.jpg');">
			<div class="wsize2 flex-w flex-c-m cd100 js-tilt">
				<div class="flex-col-c-m size6 bor2 m-l-10 m-r-10 m-t-15">
					<span class="l2-txt1 p-b-9 days">35</span>
					<span class="s2-txt4">Days</span>
				</div>

				<div class="flex-col-c-m size6 bor2 m-l-10 m-r-10 m-t-15">
					<span class="l2-txt1 p-b-9 hours">17</span>
					<span class="s2-txt4">Hours</span>
				</div>

				<div class="flex-col-c-m size6 bor2 m-l-10 m-r-10 m-t-15">
					<span class="l2-txt1 p-b-9 minutes">50</span>
					<span class="s2-txt4">Minutes</span>
				</div>

				<div class="flex-col-c-m size6 bor2 m-l-10 m-r-10 m-t-15">
					<span class="l2-txt1 p-b-9 seconds">39</span>
					<span class="s2-txt4">Seconds</span>
				</div>
			</div>
		</div>
		
		<!-- Form -->
		<div class="size3 flex-col-sb flex-w p-l-75 p-r-75 p-t-45 p-b-45 respon1">
			<div class="wrap-pic1">
				<img src="../WelcomePage/images/icons/logo2.png" alt="LOGO">
			</div>

			<div class="p-t-50 p-b-60">

				<?php
				$smsg = "User Created Successfully.";
				?>
                <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>

                <p class="m1-txt1 p-b-36">
					Our new car parking system is <span class="m1-txt2">Coming Soon</span>, Come back soon for more updates!
				</p>

				<p class="s2-txt3 p-t-18">
					Automated car parking systems
				</p>
			</div>

			<div class="flex-w">
				<a href="#" class="flex-c-m size5 bg3 how1 trans-04 m-r-5">
					<i class="fa fa-facebook"></i>
				</a>

				<a href="#" class="flex-c-m size5 bg4 how1 trans-04 m-r-5">
					<i class="fa fa-twitter"></i>
				</a>

				<a href="#" class="flex-c-m size5 bg5 how1 trans-04 m-r-5">
					<i class="fa fa-youtube-play"></i>
				</a>
			</div>
		</div>
	</div>



	

<!--===============================================================================================-->	
	<script src="../WelcomePage/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../WelcomePage/vendor/bootstrap/js/popper.js"></script>
	<script src="../WelcomePage/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../WelcomePage/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../WelcomePage/vendor/countdowntime/moment.min.js"></script>
	<script src="../WelcomePage/vendor/countdowntime/moment-timezone.min.js"></script>
	<script src="../WelcomePage/vendor/countdowntime/moment-timezone-with-data.min.js"></script>
	<script src="../WelcomePage/vendor/countdowntime/countdowntime.js"></script>
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
	<script src="../WelcomePage/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="../WelcomePage/js/main.js"></script>

</body>
</html>