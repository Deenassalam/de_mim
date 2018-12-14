<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

	public function indexx()
	{
		$this->data['kegiatan'] = $this->modelku->getUser('kegiatan');
		$this->load->view('aktivitas1', $this->data);
	}
	public function form_input(){
		$this->load->view('tambah-aktivitas');
	}
    public function insert(){
		$id = $_POST['id_k'];
		$nama =$_POST['nm_keg'];
		$lokasi = $_POST['lokasi_keg'];
		$daerah = $_POST['daerah_keg'];
        $tgl = $_POST['waktu_keg'];
		$data = array('id_k' =>$id,'nm_keg' =>$nama,'lokasi_keg' =>$lokasi,'daerah_keg' =>$daerah,'waktu_keg' =>$tgl);
		$tambah = $this->modelku->tambahData('kegiatan',$data);
		if ($tambah > 0){
			redirect('kegiatan/indexx');
		}else{
			echo 'anda kurang beruntung tolong ulangi';
		}
	}
	public function form_edit($id){
    	$where = array('id_k' => $id);
    	$data['kegiatan'] = $this->modelku->editData($where,'kegiatan')->result();
    	$this->load->view('Edit-aktivitas',$data);
  	}

	public function update(){
		$id = $this->input->post('id_k');
		$nama = $this->input->post('nm_keg');
		$lokasi = $this->input->post('lokasi_keg');
		$daerah = $this->input->post('daerah_keg');
		$tanggal = $this->input->post('waktu_keg');
		$data = array(
			'id_k' => $id,
			'nm_keg' => $nama,
			'lokasi_keg' => $lokasi,
			'daerah_keg' => $daerah,
			'waktu_keg' => $tanggal,
			);
		
  		$where = array(
    	'id_k' => $id
  		);
 
  		$this->modelku->update_data($where,$data,'kegiatan');
  		redirect('kegiatan/indexx');
	}

 	public function Delete($id){
    	$this->modelku->hapusData('kegiatan',$id);
    	redirect('kegiatan/indexx');
  }

}