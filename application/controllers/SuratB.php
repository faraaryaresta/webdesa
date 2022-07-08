<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class SuratB extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('SuratB_Model'); // Load SuratB_Model ke controller ini
  }
  
  public function index(){
    $data['surat'] = $this->SuratB_Model->view();
    $this->load->view('suratB/index', $data);
  }
  
  public function tambah(){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->SuratB_Model->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->SuratB_Model->save(); // Panggil fungsi save() yang ada di SuratB_Model.php
        redirect('suratB');
      }
    }
    
    $this->load->view('suratB/form_tambah');
  }
  
  public function ubah($nik){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->SuratB_Model->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->SuratB_Model->edit($nik); // Panggil fungsi edit() yang ada di SuratB_Model.php
        redirect('surat');
      }
    }
    
    $data['suratB'] = $this->SuratB_Model->view_by($nik);
    $this->load->view('suratB/form_ubah', $data);
  }
  
  public function hapus($nik){
    $this->SuratB_Model->delete($nik); // Panggil fungsi delete() yang ada di SuratB_Model.php
    redirect('suratB');
  }
}