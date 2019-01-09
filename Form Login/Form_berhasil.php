<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Sukses</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">	
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<div class="login100-form"> 
					<span class="login100-form-title">
						Dear, <?php echo $_POST['name']; ?> Anda berhasil Login 
				
					</span>
					
						<a class="login100-form-btn" href="Form_login.php">Kembali Ke Login</a>
				
					</div>
				

					
					<div class="text-center p-t-136">
						<a class="txt2" href="#">
								<?php
$day = date ("D");
switch ($day) {
case 'Sun' : $hari = "Minggu"; break; case 'Mon' : $hari = "Senin"; break; case 'Tue' : $hari = "Selasa"; break; case 'Wed' : $hari = "Rabu"; break; case 'Thu' : $hari = "Kamis"; break; case 'Fri' : $hari = "Jum'at"; break; case 'Sat' : $hari = "Sabtu"; break; default : $hari = "Kiamat";
}
echo "Sekarang hari <b>$hari </b>";
 $tgl=date('d-m-Y');
 echo $tgl;
?>

						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>