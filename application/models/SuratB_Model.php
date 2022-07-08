<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class SuratB_Model extends CI_Model {
  // Fungsi untuk menampilkan semua data user
  public function view(){
    return $this->db->get('surat')->result();
  }
  
  // Fungsi untuk menampilkan data user berdasarkan id nya
  public function view_by($nik){
    $this->db->where('nik', $nik);
    return $this->db->get('surat')->row();
  }
  
  // Fungsi untuk validasi form tambah dan ubah
  public function validation($mode){
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
    
    // Tambahkan if apakah $mode save atau update
    // Karena ketika update, id tidak harus divalidasi
    // Jadi id di validasi hanya ketika menambah data user saja
    if($mode == "save")
    $this->form_validation->set_rules('input_nik', 'nik', 'required|numeric|max_length[11]');
    $this->form_validation->set_rules('input_username', 'username', 'required|max_length[50]');
    $this->form_validation->set_rules('input_email', 'email', 'required|max_length[50]');
    $this->form_validation->set_rules('input_phone', 'phone', 'required|max_length[50]');
    $this->form_validation->set_rules('input_pesan', 'pesan', 'required|max_length[50]');
      
    if($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }
  
  // Fungsi untuk melakukan simpan data ke tabel user
  public function save(){
    $data = array(
      "nik" => $this->input->post('input_nik'),
      "username" => $this->input->post('input_username'),
      "email" => $this->input->post('input_email'),
      "phone" => $this->input->post('input_phone'),
      "pesan" => $this->input->post('input_pesan'),

      

    );
    
    $this->db->insert('surat', $data); // Untuk mengeksekusi perintah insert data
  }
  
  // Fungsi untuk melakukan ubah data user berdasarkan id user
  public function edit($nik){
    $data = array(
      "username" => $this->input->post('input_username'),
      "email" => $this->input->post('input_email'),
      "phone" => $this->input->post('input_phone'),
      "pesan" => $this->input->post('input_pesan'),

     
    );
    
    $this->db->where('nik', $nik);
    $this->db->update('surat', $data); // Untuk mengeksekusi perintah update data
  }
  
  // Fungsi untuk melakukan menghapus data user berdasarkan id user
  public function delete($nik){
    $this->db->where('nik', $nik);
    $this->db->delete('surat'); // Untuk mengeksekusi perintah delete data
  }
}