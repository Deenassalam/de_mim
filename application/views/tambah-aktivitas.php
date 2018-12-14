<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>STARK</title>

<!--    <link rel="stylesheet" href="<?php echo site_url(); ?>/css/style.css" />-->
       <link href="<?php echo base_url(); ?>/css/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="content">
      <h1 class="title"masukan nama kegiatan> </h1>
      <span class="subtitle">sub nama kegiatan</span>
      <br><br>

      <div class="row">
        <div class="column">
          <form action="<?php echo site_url('kegiatan/insert') ?>" method="POST">
            <table width="80%">
              <tr>
                <td><strong>id </strong><span class="red">*</span></td>
              </tr>
              <tr>
                <td><input type="text" name="id_k" /></td>
              </tr>
              <tr>
                <td><span class="red" id="alertid"></span></td>
              </tr>
              <tr>
                <td><strong>Nama kegiatan</strong><span class="red">*</span></td>
              </tr>
              <tr>
                <td><input type="text" name="nm_keg" /></td>
              </tr>
              <tr>
                <td><span class="red" id="alertnama"></span></td>
              </tr>
              <tr>
                <td><strong>lokasi kegiatan </strong><span class="red">*</span></td>
              </tr>
              <tr>
                <td><textarea name="lokasi_keg" /></textarea></td>
              </tr>
              <tr>
                <td><span class="red" id="alertlokasi"></span></td>
              </tr>
              <tr>
                <td><strong>Daerah kegiatan </strong><span class="red">*</span></td>
              </tr>
              <tr>
                <td><input type="text" name="daerah_keg" /></td>
              </tr>
              <tr>
                <td><span class="red" id="alertdaerah"></span></td>
              </tr>
            <td><strong>waktu kegiatan </strong><span class="red">*</span></td>
              </tr>
              <tr>
                <td><input type="date" name="waktu_keg" /></td>
              </tr>
              <tr>
                <td><span class="red" id="alertwaktu"></span></td>
              </tr>
                <td><br>
                  <input class="btn_submit" type="submit" value="tambah" />
                </td>
            </table>
          </form>
</div>

        
      </div>
    </div>
  </body>
</html>

<script>
  function validateForm(){
    var id = document.forms["form_sederhana"]["id_k"].value;
    var nama = document.forms["form_sederhana"]["nama_krg"].value;
    var lokasi = document.forms["form_sederhana"]["lokasi_keg"].value;
    var daerah= document.forms["form_sederhana"]["daerah_keg"].value;
   var waktu= document.forms["form_sederhana"]["waktu"].value;
    var valid = true;

    if(isNaN(id)){
      document.getElementById("alertid").innerHTML = "id hanya boleh berisi angka";
      valid = false;
    }
    if(nama.length >50){
      document.getElementById("alertnama").innerHTML = "NIM max 50 huruf";
      valid = false;
    }
    if(id == ""){
      document.getElementById("alertid").innerHTML = "Please fill the id";
      valid = false;
    }
    if(nama == ""){
      document.getElementById("alertnama").innerHTML = "Please fill the Nama";
      valid = false;
    }
    if(nama.length > 50){
      document.getElementById("alertnama").innerHTML = "Nama maksimal 50 karakter";
      valid = false;
    }
    if(lokasi == ""){
      document.getElementById("alertlokasi").innerHTML = "Please fill the Alamat";
      valid = false;
    }
   if(daerah == ""){
      document.getElementById("alertdaerah").innerHTML = "Please fill the daerah";
      valid = false;
    }
   if(waktu == ""){
      document.getElementById("alertwaktu").innerHTML = "Please fill the waktu";
      valid = false;
    }

  }
</script>
