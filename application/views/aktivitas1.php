<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>STARK</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>/sidebar/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>/sidebar/css/simple-sidebar.css" rel="stylesheet">

    <!--<link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
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

      section {
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
      }
      footer {
        position:fixed;
        left:0px;
        bottom:0px;
        width:100%;
}
      /*
      table {
        margin: auto;
      }*/

    </style>

    </head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color:#e65c00;">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="<?php echo site_url("Welcome/index") ?>">STARK</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">   
                    <li class="nav-item">
                        <!-- <a class="nav-link js-scroll-trigger" href="#contact">login</a> -->
                        <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle"> Menu</a> 
                    </li>
                </ul>
            </div>
            
     <div style="padding-right:  50px; color: #fff; "><h5 class="display-5">Hai BNPB !</h5></div>
    <div class="dropdown show">
  <a class=" dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <img src="<?php echo base_url(); ?>assets3/img/profiil.png" class="rounded-circle" width="60px"></a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="profil.html">Profil</a>
    <a class="dropdown-item" href="riwayat.html">Riwayat</a>
    <a class="dropdown-item" href="login.html">Sign out</a>
  </div>
</div>
        </div>
    </nav>
<div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="<?php echo site_url('Welcome/index'); ?>">
                    STARK
                </a>
            </li>
            <br><br>
            <li>
                <a href="<?php echo site_url("Relawan_controller/index1") ?>">Relawan</a>
            </li>
            <li>
                <a href="<?php echo site_url("Kegiatan/indexx") ?>">Kegiatan</a>
            </li>
            <li>
                <a href="<?php echo site_url("Welcome/index") ?>">Bencana</a>
            </li>
            <li>
                <a href="#">Services</a>
            </li>
                <!-- <li>
                    <a href="#">Contact</a>
                </li> -->
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->

     <div id="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header" data-background-color="blue">
         <br><br><br>   
		       <H3>Halaman Menambah Aktivitas</H3>
           <br><br>
            <a href="<?php echo site_url('kegiatan/form_input'); ?>" class="btn btn-warning">Tambah Data </a> <br><br>
        
		<table class="table">
		<thead>    
      <tr style="text-align: center;">
      <th scope="col">ID</th>
      <th scope="col">Nama Kegiatan</th>
      <th scope="col">Lokasi Kegiatan</th>
      <th scope="col">Daerah Kegiatan</th>
      <th scope="col">Waktu</th>
      <th scope="col">Opsi</th>
      </tr>
      </thead>

		<?php
		$id =1; 
		foreach ($kegiatan as $data){ ?>
		<tr style="text-align: center;">
      <td><?php echo $data['id_k'] ?></td>
			<td><?php echo $data['nm_keg'] ?></td>
      <td><?php echo $data['lokasi_keg'] ?></td>
      <td><?php echo $data['daerah_keg'] ?></td>
      <td><?php echo $data['waktu_keg'] ?></td> 
			<td>
				<a href="<?php echo site_url('kegiatan/form_edit/'.$data['id_k']) ?>"class="btn btn-primary">Edit</a> 
				  <a href="<?php echo site_url('kegiatan/delete/'.$data['id_k']) ?>" onclick="return confirm('yakin mau di hapus?')"class="btn btn-danger">Hapus</a>
            <a href="<?php echo site_url('kegiatan/form_input') ?>"class="btn btn-info"> send notification </a>
			</td>
		</tr>
		    <?php } ?>
	     </table>	
	   </div>
     </div>
     </div>
   </div>
 </div>
        <!-- /#page-content-wrapper -->
    <!-- /#wrapper -->
<!-- <footer>
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
    </footer> -->
</body>
    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url(); ?>/sidebar/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/sidebar/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
</html>
