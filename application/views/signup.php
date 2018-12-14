<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>SignUp</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>/assets2/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets2/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets2/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets2/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets2/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets2/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets2/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets2/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets2/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets2/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets2/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets2/css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #f49e42;">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">STARK</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">galeri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">info</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-59">
						Sign Up
					</span>
         <form action="<?php echo site_url('Relawan_controller/simpan/') ?>" method="POST">
					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Full Name</span>
						<input class="input100" type="text" name="nama_lengkap" placeholder="Name...">
						<span class="focus-input100"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate="Nik is required">
						<span class="label-input100">NIK</span>
						<input class="input100" type="text" name="nik" placeholder="Name...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Email addess...">
						<span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="text" name="pass" placeholder="*************">
						<span class="focus-input100"></span>
                    </div>

					<div class="wrap-input100 validate-input" data-validate="alamata is required">
						<span class="label-input100">Alamat Asal</span>
						<input class="input100" type="text" name="asal" placeholder="Username...">
						<span class="focus-input100"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Tempat Lahir</span>
						<input class="input100" type="text" name="tempat" placeholder="Name...">
						<span class="focus-input100"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Tanggal Lahir</span>
						<input class="input100" type="date" name="tgl_lahir" placeholder="Name...">
						<span class="focus-input100"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Alamat Domisili</span>
						<input class="input100" type="text" name="alamat" placeholder="Name...">
						<span class="focus-input100"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Keahlian</span>
						<input class="input100" type="text" name="keahlian" placeholder="Name...">
						<span class="focus-input100"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Deskripsi Keahlian</span>
						<input class="input100" type="text" name="desk_keahlian" placeholder="Name...">
						<span class="focus-input100"></span>
					</div>
					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								<span class="txt1">
									I agree to the
									<a href="#" class="txt2 hov1">
										Terms of User
									</a>
								</span>
							</label>
						</div>

<!-- <input type="submit" name="tambah" value="tambah" />						 -->


				<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" input type="submit" name="simpan" value="simpan">
                           
								Sign Up
							</button>
						</div>

						<a href="#" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Sign in
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
    </div>
    </form>
	
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>/assets2/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>/assets2/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>/assets2/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url(); ?>/assets2/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>/assets2/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>/assets2/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets2/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>/assets2/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>