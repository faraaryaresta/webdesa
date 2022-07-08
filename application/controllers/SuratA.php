<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class SuratA extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('SuratA_Model'); // Load SuratA_Model ke controller ini
  }
  
  public function index(){
    $data['surat'] = $this->SuratA_Model->view();
    $this->load->view('suratA/form_tambah', $data);
  }
  
  public function tambah(){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->SuratA_Model->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->SuratA_Model->save(); // Panggil fungsi save() yang ada di SuratA_Model.php
        redirect('suratA');
      }
    }
    
    $this->load->view('suratA/form_tambah');
  }
  
  public function ubah($nik){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->SuratA_Model->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->SuratA_Model->edit($nik); // Panggil fungsi edit() yang ada di SuratA_Model.php
        redirect('surat');
      }
    }
    
    $data['suratA'] = $this->SuratA_Model->view_by($nik);
    $this->load->view('suratA/form_ubah', $data);
  }
  
  public function hapus($nik){
    $this->SuratA_Model->delete($nik); // Panggil fungsi delete() yang ada di SuratA_Model.php
    redirect('suratA');
  }
}