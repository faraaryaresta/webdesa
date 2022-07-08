<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PendudukAModel extends CI_Model {
	// Fungsi untuk menampilkan semua data penduduk
	public function view(){
		return $this->db->get('penduduk')->result();
	}
	
	// Fungsi untuk melakukan proses upload file
	public function upload(){
		$config['upload_path'] = './images/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']	= '2048';
		$config['remove_space'] = TRUE;
	
		$this->load->library('upload', $config); // Load konfigurasi uploadnya
		if($this->upload->do_upload('input_penduduk')){ // Lakukan upload dan Cek jika proses upload berhasil
			// Jika berhasil :
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		}else{
			// Jika gagal :
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}
	
	// Fungsi untuk menyimpan data ke database
	public function save($upload){
		if($upload['result'] == "success"){
			$data = array(
				'nik'=>$this->input->post('input_nik'),
				'nama'=>$this->input->post('input_nama'),
				'nama_file' => $upload['file']['file_name'],
				'tanggal'=>$this->input->post('input_tanggal'),
				'alamat'=>$this->input->post('input_alamat'),
				
				
			);
		}else{
			$data = array('nama'=>$this->input->post('input_nama'));
		}
		
		$this->db->insert('penduduk', $data);
	}

	// Fungsi untuk melakukan ubah data penduduk berdasarkan id penduduk
	public function edit($id){
		$data = array(
		  "nik" => $this->input->post('input_nik'),
		  "nama" => $this->input->post('input_nama'),
		  "nama_file" => $this->input->post('file_name'),
		  "tanggal" => $this->input->post('input_tanggal'),
		  "alamat" => $this->input->post('input_alamat'),
		 
		);
		
		$this->db->where('id', $id);
		$this->db->update('penduduk', $data); // Untuk mengeksekusi perintah update data
	  }

	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('penduduk'); // Untuk mengeksekusi perintah delete data
	        }
	public function get_keyword($keyword){
		$this->db->select('*');
		$this->db->from('penduduk');
		$this->db->like('nik', $keyword);
		$this->db->like('nama', $keyword);
		$this->db->or_like('tanggal', $keyword);
		$this->db->like('alamat', $keyword);
	        return $this->db->get()->result();
	        }
}
