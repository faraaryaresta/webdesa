<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class UserB extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('userB_Model'); // Load userB_Model ke controller ini
  }
  
  public function index(){
    $data['user'] = $this->userB_Model->view();
    $this->load->view('userB/index', $data);
  }
  
  public function tambah(){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->userB_Model->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->userB_Model->save(); // Panggil fungsi save() yang ada di userB_Model.php
        redirect('userB');
      }
    }
    
    $this->load->view('userB/form_tambah');
  }
  
  public function ubah($id){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->userB_Model->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->userB_Model->edit($id); // Panggil fungsi edit() yang ada di userB_Model.php
        redirect('userB');
      }
    }
    
    $data['userB'] = $this->userB_Model->view_by($id);
    $this->load->view('userB/form_ubah', $data);
  }
  
  public function hapus($id){
    $this->userB_Model->delete($id); // Panggil fungsi delete() yang ada di userB_Model.php
    redirect('userB');
  }
}