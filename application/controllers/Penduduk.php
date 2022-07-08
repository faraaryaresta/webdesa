<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Penduduk extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		
		$this->load->model('PendudukModel');
	}
	
	public function index(){
		$data['penduduk'] = $this->PendudukModel->view();
		$this->load->view('penduduk/view', $data);
	}
	
	public function tambah(){
		$data = array();
		
		if($this->input->post('submit')){ // Jika user menekan tombol Submit (Simpan) pada form
			// lakukan upload file dengan memanggil function upload yang ada di pendudukModel.php
			$upload = $this->PendudukModel->upload();
			
			if($upload['result'] == "success"){ // Jika proses upload sukses
				// Panggil function save yang ada di pendudukModel.php untuk menyimpan data ke database
				$this->PendudukModel->save($upload);
				
				redirect('penduduk'); // Redirect kembali ke halaman awal / halaman view data
			}else{ // Jika proses upload gagal
				$data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
			}
		}
		
		$this->load->view('penduduk/form', $data);
	}
	public function search(){
		$keyword =$this -> input-> post('keyword');
		$data['penduduk']=$this->PendudukModel->get_keyword($keyword);
		$this->load->view('penduduk/view', $data);
	        }
	
}
