<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Relawan_Controller extends CI_Controller {

	function __construct(){
    parent::__construct();    
      $this->load->model('Relawan_model');
      $this->load->helper('url');
    }
    // ini untuk ngeload page untuk form pendaftaran. cara aksesnya : localhost/stark/index.php/relawan_controller/insertdata
    public function insertdata(){ 
      $this->load->view('Form_daftar');
    }

    public function index1(){
      $this->data['relawan'] = $this->Relawan_model->tampil_data1('relawan');
      $this->load->view('Data_relawan', $this->data);
    }

    public function form_input1(){
      $this->load->view('Tambah-relawan');
    }

   public function form_edit1($id){
      $where = array('id' => $id);
      $data['relawan'] = $this->modelku->editData($where,'relawan')->result();
      $this->load->view('Edit-relawan',$data);
    }

    public function viewberita1(){ 
      $this->load->view('View_isiberita1');
    }

    public function viewberita2(){ 
      $this->load->view('View_isiberita2');
    }

    public function viewberita3(){ 
      $this->load->view('View_isiberita3');
    }

    public function viewberita4(){ 
      $this->load->view('View_isiberita4');
    }

    public function viewberita5(){ 
      $this->load->view('View_isiberita5');
    }

    public function viewberita6(){ 
      $this->load->view('View_isiberita6');
    }

		public function simpan(){  
      $nama_lengkap = $_POST['nama_lengkap'];
      $nik = $_POST['nik'];
      $email = $_POST['email'];
      $pass = $_POST['pass'];
      $asal = $_POST['asal'];
      $tempat = $_POST['tempat'];
      $tgl_lahir = $_POST['tgl_lahir'];
      $alamat = $_POST['alamat'];
      $keahlian = $_POST['keahlian'];
      $desk_keahlian = $_POST['desk_keahlian'];
      $data = array(
      
      'nama_lengkap' => $nama_lengkap,
      'nik' => $nik,
      'email' => $email,
      'pass' => $pass,
      'asal' => $asal,
      'tempat'=>$tempat,
      'tgl_lahir'=>$tgl_lahir,
      'alamat'=>$alamat,
      'keahlian'=>$keahlian,
      'desk_keahlian'=>$desk_keahlian
    );
  		$tambah = $this->Relawan_model->tambahData1('relawan', $data);  
      if ($tambah > 0) {
      redirect('Relawan_Controller/index1');  // jika data tersimpan dia bakal balik ke menu utama
    } else {
      echo 'Gagal disimpan';
      }
    }

    public function update1(){
      $id = $this->input->post('id');
      $nama_lengkap = $this->input->post('nama_lengkap');
      $nik = $this->input->post('nik');
      $email = $this->input->post('email');
      $pass = $this->input->post('pass');
      $asal = $this->input->post('asal');
      $tempat = $this->input->post('tempat');
      $tgl_lahir = $this->input->post('tgl_lahir');
      $alamat = $this->input->post('alamat');
      $keahlian = $this->input->post('keahlian');
      $desk_keahlian = $this->input->post('desk_keahlian');

    $data = array(
      'id' => $id,
      'nama_lengkap' => $nama_lengkap,
      'nik' => $nik,
      'email' => $email,
      'pass' => $pass,
      'asal' => $asal,
      'tempat'=>$tempat,
      'tgl_lahir'=>$tgl_lahir,
      'alamat'=>$alamat,
      'keahlian'=>$keahlian,
      'desk_keahlian'=>$desk_keahlian
      );

    $where = array('id' => $id);
    
      $this->Relawan_model->update_data1($where, $data, 'relawan');
      redirect('Relawan_Controller/index1');
    }

      public function Delete1($id){
      $this->Relawan_model->hapusData1('relawan',$id);
      redirect('Relawan_Controller/index1');
    }
}
