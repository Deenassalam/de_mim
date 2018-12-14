<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert extends CI_Controller {

	public function insert(){
		$nama = $_POST['nama_lengkap'];
		$nik =$_POST['nik'];
		$email =$_POST['email'];
		$pass =$_POST['pass'];
		$asal =$_POST['asal'];
		$tempat =$_POST['tempat'];
		$tgl =$_POST['tgl_lahir'];
		$alamat =$_POST['alamat'];
		$skill =$_POST['keahlian'];
		$dskill =$_POST['desk_keahlian'];

		$data = array('nama_lengkap' =>$nama, 'nik' =>$nik,'email' =>$email,'pass' =>$pass,'asal' =>$asal,'tempat' =>$tempat,'tgl_lahir' =>$tgl,'alamat' =>$alamat ,'keahlian' =>$skill,'desk_keahlian' =>$nik);
		$tambah = $this->modelku->tambahData('relawan',$data);
		if ($tambah > 0){
			redirect('Welcome/index');
		}else{
			echo 'anda kurang beruntung tolong ulangi';
		}
	}
}
