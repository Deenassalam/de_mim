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
	  <?php foreach($kegiatan as $data){ ?>	
	  
 <form action="<?php echo base_url('index.php/'). 'kegiatan/update'; ?>" method="post">  
	<table style="margin:20px auto;">
	<tr>
	   <td>ID</td>
		<td>
		  <div class="form-group">
		  <input type="text" name="id_k" value="<?php echo $data->id_k ?>"
		  class="form-control">
		  </div>
		</td>
	<tr>
	  <tr>
	    <td>Nama Kegiatan</td>
		 <td>
		  <div class="form-group">
		   <input type="text" name="nm_keg" value="<?php echo $data->nm_keg ?>" class="form-control">
		  </div>
		</td>
	  </tr>

	<tr>
		<div class="form-group">
		  <td>Lokasi Kegiatan</td>
		   <td>
			<input type="text" name="lokasi_keg" value="<?php echo $data->lokasi_keg?>" class="form-control">
		  </td>
		</div>
	</tr>

	<tr>			
		<div class="form-group">
		  <td>Daerah Kegiatan</td>
		   <td>
			<input class="form-control" type="int" name="daerah_keg" value="<?php echo $data->daerah_keg ?>">
		   </td>
	    </div>
	</tr>

	<tr>
		<div class="form-group">
		  <td>Waktu Kegiatan</td>
		   <td>
			<input class="form-control" type="text" name="waktu_keg" value="<?php echo $data->waktu_keg ?>">
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