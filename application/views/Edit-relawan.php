<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title> STARK</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>/assets/bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>/assets/bootstrap/js/bootstrap.js"></script>
</head>
<body>
	<center>
		<br><br><br>
		<h3> Edit Data</h3>
	</center>
	<div class="container">
	<div id="body">
	  <?php foreach($relawan as $data){ ?>	
	  
 <form action="<?php echo base_url('index.php/'). 'Relawan_controller/update1'; ?>" method="post">  
	<table style="margin:20px auto;">
	<tr>
	   <td>ID</td>
		<td>
		  <div class="form-group">
		  <input type="text" name="id" value="<?php echo $data->id ?>"
		  class="form-control">
		  </div>
		</td>
	<tr>
	  <tr>
	    <td>Nama Lengkap</td>
		 <td>
		  <div class="form-group">
		   <input type="text" name="nama_lengkap" value="<?php echo $data->nama_lengkap ?>" class="form-control">
		  </div>
		</td>
	  </tr>

	<tr>
		<div class="form-group">
		  <td>NIK</td>
		   <td>
			<input type="text" name="nik" value="<?php echo $data->nik?>" class="form-control">
		  </td>
		</div>
	</tr>

	<tr>			
		<div class="form-group">
		  <td>Email</td>
		   <td>
			<input class="form-control" type="int" name="email" value="<?php echo $data->email ?>">
		   </td>
	    </div>
	</tr>

	<tr>
		<div class="form-group">
		  <td>Password</td>
		   <td>
			<input class="form-control" type="text" name="pass" value="<?php echo $data->pass?>">
		  </td>
		</div>
	</tr>

	<tr>
		<div class="form-group">
		  <td>Alamat Asal</td>
		   <td>
			<input class="form-control" type="text" name="asal" value="<?php echo $data->asal ?>">
		  </td>
		</div>
	</tr>

	<tr>
		<div class="form-group">
		  <td>Tempat Lahir</td>
		   <td>
			<input class="form-control" type="text" name="tempat" value="<?php echo $data->tempat ?>">
		  </td>
		</div>
	</tr>

	<tr>
		<div class="form-group">
		  <td>Tanggal Lahir</td>
		   <td>
			<input class="form-control" type="date" name="tgl_lahir" value="<?php echo $data->tgl_lahir ?>">
		  </td>
		</div>
	</tr>

	<tr>
		<div class="form-group">
		  <td>Kota Tinggal</td>
		   <td>
			<input class="form-control" type="text" name="alamat" value="<?php echo $data->alamat ?>">
		  </td>
		</div>
	</tr>

	<tr>
		<div class="form-group">
		  <td>Keahlian</td>
		   <td>
			<input class="form-control" type="text" name="keahlian" value="<?php echo $data->keahlian ?>">
		  </td>
		</div>
	</tr>

	<tr>
		<div class="form-group">
		  <td>Deskripsi Keahlian</td>
		   <td>
			<input class="form-control" type="text" name="desk_keahlian" value="<?php echo $data->desk_keahlian ?>">
		  </td>
		</div>
	</tr>


	<tr>
		<td></td>
		  <td>
			<input type="submit" value="Save" class="btn btn-success">
		</td>
	</tr>
	</table>
	</form>	
	<?php } ?> 
	</div>
</div>
</body>
</html>