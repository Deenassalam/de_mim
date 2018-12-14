<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>STARK</title>

    <!-- Bootstrap core CSS -->
    <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="../../assets3/css/style.css">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url(); ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="<?php echo base_url(); ?>/assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>/assets/css/creative.min.css" rel="stylesheet">

<style type="text/css">
      body {
        margin-top: 10px;
      }
      section {
        margin-left: 40%;
      min-height: 400px;
}
      .profil hr {
         width: 150px;
         border-top: 2px solid #666;
      }
      .jumbotron {
          position: relative;
          background: url(img/bencana.jpg) center center;
          color:#fff;
          width: 100%;
          height: 100%;
          background-size: cover;
          overflow: hidden;
          min-height: 400px;
      }
      .navbar-custom{
        background-color:#e65c00;

      }
      .tengah{
        left: 50%;
      }/*
      table {
        margin: auto;
      }*/

    </style>
  </head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color:#e65c00;">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?php echo site_url("Welcome/index") ?>">STARK</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url("Welcome/index") ?>">Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url("Welcome/index") ?>">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#<?php echo site_url("Welcome/index") ?>">galeri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#<?php echo site_url("Welcome/index") ?>">info</a>
            </li>
            <li class="nav-item">
              <!-- <a class="nav-link js-scroll-trigger" href="#contact">login</a> -->
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url('Welcome/form_login') ?>"> Login </a> 
            </li>
            <li class="nav-item">
              <!-- <a class="nav-link js-scroll-trigger" href="#contact">login</a> -->
              <a class="nav-link js-scroll-trigger" href="<?php echo site_url('kegiatan/indexx') ?>"> coba</a> 
            </li>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="profil.html">Profil</a>
    <a class="dropdown-item" href="semuabencana.html">Donasi</a>
    <a class="dropdown-item" href="riwayat.html">Riwayat</a>
    <a class="dropdown-item" href="login.html">Sign out</a>

  </div>
          </ul>
        </div>
      </div>
    </nav>

  <section>
    <div id="tengah">
	<div class="container">
  <table>
  <h4>isi data</h4>
  <form action="<?php echo base_url(). 'index.php/Relawan_controller/simpan'; ?>" method="POST">
      <tr>
			<td width="250"><b>Nama Lengkap</b></td>
		    </tr>
		<tr>
			<td><input type="text" name="nama_lengkap" style="width: 100%"></td>
		    </tr>
		<tr>
      <td><span class="red" id="alertNama"></span></td>
        </tr>
		<tr>
			<td><b>Nik</b></td>
		    </tr>
		<tr>
			<td><input type="text" name="nik" style="width: 100%"></td>
		    </tr>
		<tr>
      <td><span class="red" id="alertNik"></span></td>
        </tr>
		<tr>
      <tr>
      <td><b>Email</b></td>
        </tr>
    <tr>
      <td><input type="text" name="email" style="width: 100%"></td>
        </tr>
    <tr>
      <td><span class="red" id="alertEmail"></span></td>
        </tr>
        <tr>
      <td><b>Password</b></td>
        </tr>
    <tr>
      <td><input type="text" name="pass" style="width: 100%"></td>
        </tr>
    <tr>
      <td><span class="red" id="alertPass"></span></td>
        </tr>
    <tr>
    <tr>
			<td><b>Alamat Asal</b></td>
		    </tr>
		      <tr>
        <td><textarea name="asal" style="width: 100%" rows="7"></textarea></td>
			<td width="50"></td>
		</tr>
		  <tr>
        <td><span class="red" id="alertAsal"></span></td>
          </tr>
		<tr>
      <td><b>Tempat lahir</b></td>
        </tr>
          <tr>
        <td><input type="text" name="tempat" style="width: 100%"></td>
    </tr>
    <tr>
      <td><b>Tanggal lahir</b></td>
        </tr>
          <tr>
        <td><input type="date" name="tgl_lahir" style="width: 100%"></td>
      </tr>
        <tr>
          <td><span class="red" id="alertTempat"></span></td>
        </tr>
    <tr>
      <td><b>Kota</b></td>
        </tr>
          <tr>
			  <td><input type="text" name="alamat" style="width: 100%"></td>
		  </tr>
		    <tr>
          <td><span class="red" id="alertKota"></span></td>
        </tr>
		<tr>
      <td><b>Keahlian</b></td>
		    </tr>
		<tr>
			<td><input type="text" name="keahlian" style="width: 100%"></td>
		    </tr>
		<tr>
      <td><span class="red" id="alertKeahlian"></span></td>
        </tr>
		<tr>  
			<td><b>Deskripsi Keahlian</b></td>
		    </tr>
		<tr>
      <td><textarea name="desk_keahlian" style="width: 100%" rows="7"></textarea></td>
			<td width="50"></td>
		    </tr>
		<tr>
      <td><span class="red" id="alertDkeahlian"></span></td>
        </tr>
           
		<tr>  
			<td>
      <button type="submit" class="btn btn-primary pull-right">Submit</button>
      </td>
		</tr>
		
		<h3>Data Lengkap</h3>
    </form>
    </table>   
  </div>
</div>
</section>
<footer>
      <div class="container">
      <div class="row" >
        <div class="col-sm-5 offset-sm-1">
          <strong><u><h4>STARK</h4></u></strong>
          <p>Merupakan aplikasi resmi yang bekerja sama dengan BNPB untuk mencari relawan muda berkompetensi</p>
        </div>      
        <div class="col-sm-5">
          <h4>Temukan kami di :</h4>
          <a href=""><img src="../../assets3/img/fb.png" class="rounded-circle" width="30px"></a>    
          <a href=""><img src="../../assets3/img/ig.png" class="rounded-circle" width="35px"></a>
          <a href=""><img src="../../assets3/img/tw.png" class="rounded-circle" width="32px"></a>
        </div>
      </div>
      
        <div class="row text-center">
          <div class="col-sm-12">
          <hr>
            <p>
              &copy; copyright 2018 STARK.org
            </p>
          </div>
        </div>
      </div>
    </footer>
</body>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();   
      });
      $('#myCollapsible').on('hidden.bs.collapse', function () {

});

<script>
  function validasi(){
    var nim = document.forms["form"]["nim"].value;
    var nama = document.forms["form"]["nama"].value;
    var alamat = document.forms["form"]["alamat"].value;
    var email = document.forms["form"]["email"].value;
    var validasiEmail = /\S+@\S+\.\S+/;

    var valid = true;

    if(isNaN(nim)){
      document.getElementById("alertNim").innerHTML = "NIM hanya boleh berisi angka";
      valid = false;
    }
    if(nim.length < 6){
      document.getElementById("alertNim").innerHTML = "NIM minimal 6 angka";
      valid = false;
    }
    if(nim == ""){
      document.getElementById("alertNim").innerHTML = "Please fill the NIM";
      valid = false;
    }
    if(nama == ""){
      document.getElementById("alertNama").innerHTML = "Please fill the Nama";
      valid = false;
    }
    if(nama.length > 50){
      document.getElementById("alertNama").innerHTML = "Nama maksimal 50 karakter";
      valid = false;
    }
    if(alamat == ""){
      document.getElementById("alertAlamat").innerHTML = "Please fill the Alamat";
      valid = false;
    }
    if(email == ""){
      document.getElementById("alertEmail").innerHTML = "Please fill the Email";
      valid = false;
    }else if(!(validasiEmail.test(email))){
      document.getElementById("alertEmail").innerHTML = "Email tidak valid";
      valid = false;
    }

    if(valid == true){
      if(window.confirm("Apakah anda yakin?")){
        document.getElementById("hasilNim").innerHTML = nim;
        document.getElementById("hasilNama").innerHTML = nama;
        document.getElementById("hasilAlamat").innerHTML = alamat;
        document.getElementById("hasilEmail").innerHTML = email;

        document.getElementById("alertNim").outerHTML = "";
        document.getElementById("alertNama").outerHTML = "";
        document.getElementById("alertAlamat").outerHTML = "";
        document.getElementById("alertEmail").outerHTML = "";

        return false;
      }else{
        return false;
      }
    }else{
      return false;
    }

  }
</script>

</html>
