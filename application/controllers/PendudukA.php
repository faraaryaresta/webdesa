<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PendudukA extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		
		$this->load->model('PendudukAModel');
	}
	
	public function index(){
		$data['penduduk'] = $this->PendudukAModel->view();
		$this->load->view('pendudukA/view', $data);
	}
	
	public function tambah(){
		$data = array();
		
		if($this->input->post('submit')){ // Jika user menekan tombol Submit (Simpan) pada form
			// lakukan upload file dengan memanggil function upload yang ada di pendudukModel.php
			$upload = $this->PendudukAModel->upload();
			
			if($upload['result'] == "success"){ // Jika proses upload sukses
				// Panggil function save yang ada di pendudukModel.php untuk menyimpan data ke database
				$this->PendudukAModel->save($upload);
				
				redirect('pendudukA'); // Redirect kembali ke halaman awal / halaman view data
			}else{ // Jika proses upload gagal
				$data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
			}
		}
		
		$this->load->view('pendudukA/form', $data);
	}
	public function ubah($id){
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
		  if($this->PendudukAModel->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
			$this->PendudukAModel->edit($id); // Panggil fungsi edit() yang ada di AdminA_Model.php
			redirect('pendudukA');
		  }
		}
		
		$data['penduduk'] = $this->PendudukAModel->view_by($id);
		$this->load->view('pendudukA/formubah', $data);
	  }
	public function hapus($id){
		$this->PendudukAModel->delete($id); // Panggil fungsi delete() yang ada di userA_Model.php
		redirect('pendudukA');
	  }
	public function search(){
		$keyword =$this -> input-> post('keyword');
		$data['penduduk']=$this->PendudukAModel->get_keyword($keyword);
		$this->load->view('pendudukA/view', $data);
	        }
	
}
