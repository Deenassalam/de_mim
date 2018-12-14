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
      <span class="subtitle">Sub Pendaftaran Relawan</span>
      <br><br>

      <div class="row">
        <div class="column">
          <form action="<?php echo site_url('Relawan_controller/simpan') ?>" method="POST">
            <table width="80%">
              <tr>
                <td><strong>id </strong><span class="red">*</span></td>
              </tr>
              <tr>
                <td><input type="text" name="id" /></td>
              </tr>
              <tr>
                <td><span class="red" id="alertid"></span></td>
              </tr>
              <tr>
                <td><strong>Nama Lengkap</strong><span class="red">*</span></td>
              </tr>
              <tr>
                <td><input type="text" name="nama_lengkap" /></td>
              </tr>
              <tr>
                <td><span class="red" id="alertnama"></span></td>
              </tr>
              <tr>
                <td><strong>NIK </strong><span class="red">*</span></td>
              </tr>
              <tr>
                <td><textarea name="nik" /></textarea></td>
              </tr>
              <tr>
                <td><span class="red" id="alertnik"></span></td>
              </tr>
              <tr>
                <td><strong>Email </strong><span class="red">*</span></td>
              </tr>
              <tr>
                <td><input type="email" name="email" /></td>
              </tr>
              <tr>
                <td><span class="red" id="alertemail"></span></td>
              </tr>
            <td><strong>Password </strong><span class="red">*</span></td>
              </tr>
              <tr>
                <td><input type="text" name="pass" /></td>
              </tr>
              <tr>
                <td><span class="red" id="alertpass"></span></td>
              </tr>
               <td><strong>Alamat Asal </strong><span class="red">*</span></td>
              </tr>
              <tr>
                <td><input type="text" name="asal" /></td>
              </tr>
              <tr>
                <td><span class="red" id="alertasal"></span></td>
              </tr>
               <td><strong>Tempat Lahir </strong><span class="red">*</span></td>
              </tr>
              <tr>
                <td><input type="text" name="tempat" /></td>
              </tr>
              <tr>
                <td><span class="red" id="alerttempat"></span></td>
              </tr>
               <td><strong>Tanggal Lahir </strong><span class="red">*</span></td>
              </tr>
              <tr>
                <td><input type="date" name="tgl_lahir" /></td>
              </tr>
              <tr>
                <td><span class="red" id="alerttanggal"></span></td>
              </tr>
               <td><strong>Kota Tinggal </strong><span class="red">*</span></td>
              </tr>
              <tr>
                <td><input type="text" name="alamat" /></td>
              </tr>
              <tr>
                <td><span class="red" id="alertalamat"></span></td>
              </tr>
               <td><strong>Keahlian </strong><span class="red">*</span></td>
              </tr>
              <tr>
                <td><input type="text" name="keahlian" /></td>
              </tr>
              <tr>
                <td><span class="red" id="alertkeahlian"></span></td>
              </tr>
               <td><strong>Deskripsi Keahlian </strong><span class="red">*</span></td>
              </tr>
              <tr>
                <td><input type="text" name="desk_keahlian" /></td>
              </tr>
              <tr>
                <td><span class="red" id="alertdesk"></span></td>
              </tr>
                <td><br>
                  <input class="btn_submit" type="submit" value="tambah" />
                </td>
            </table>
          </form>
</div>

        
      </div>
    </div>

<!--
    <div class="footer">
      <img class="logo" src="logoinfor.png" />
      <img class="logo" src="logouii.png" /><br />
      Design Stark Corp<br>
      Teknik Informatika Universitas Islam Indonesia
    </div>
-->

  </body>
</html>

<script>
  function validateForm(){
    var id = document.forms["form_sederhana"]["id"].value;
    var nama = document.forms["form_sederhana"]["nama_lengkap"].value;
    var nik = document.forms["form_sederhana"]["nik"].value;
    var email= document.forms["form_sederhana"]["email"].value;
    var password= document.forms["form_sederhana"]["pass"].value;
    var asal= document.forms["form_sederhana"]["asal"].value;
    var tempat= document.forms["form_sederhana"]["tempat"].value;
    var tanggal= document.forms["form_sederhana"]["tgl_lahir"].value;
    var alamat= document.forms["form_sederhana"]["alamat"].value;
    var keahlian= document.forms["form_sederhana"]["keahlian"].value;
    var desk= document.forms["form_sederhana"]["desk_keahlian"].value;

    var valid = true;

    if(isNaN(id)){
      document.getElementById("alertid").innerHTML = "id hanya boleh berisi angka";
      valid = false;
    }
    if(nama.length >50){
      document.getElementById("alertnama").innerHTML = "NIK max 50 huruf";
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
