<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class SiswaModel extends CI_Model {
  // Fungsi untuk menampilkan semua data siswa
  public function view(){
    return $this->db->get('siswa')->result();
  }
  
  // Fungsi untuk menampilkan data siswa berdasarkan NIS nya
  public function view_by($nisn){
    $this->db->where('nisn', $nisn);
    return $this->db->get('siswa')->row();
  }
  
  // Fungsi untuk validasi form tambah dan ubah
  public function validation($mode){
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
    
    if($mode == "save")
      $this->form_validation->set_rules('input_nisn', 'NISN', 'required|numeric|max_length[11]');
    
    $this->form_validation->set_rules('input_nama', 'Nama', 'required|max_length[50]');
    $this->form_validation->set_rules('input_jeniskelamin', 'Jenis Kelamin', 'required');
    $this->form_validation->set_rules('input_telp', 'telp', 'required|numeric|max_length[15]');
    $this->form_validation->set_rules('input_alamat', 'Alamat', 'required');
      
    if($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE (BENAR)
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE (SALAH)
  }
  
  // Fungsi untuk melakukan simpan data ke tabel siswa
  public function save(){
    $data = array(
      "nisn" => $this->input->post('input_nisn'),
      "nama" => $this->input->post('input_nama'),
      "jenis_kelamin" => $this->input->post('input_jeniskelamin'),
      "telp" => $this->input->post('input_telp'),
      "alamat" => $this->input->post('input_alamat')
    );
    
    $this->db->insert('siswa', $data); // Untuk perintah insert data
  }
  
  // Fungsi untuk melakukan ubah data siswa berdasarkan NIS siswa
  public function edit($nisn){
    $data = array(
      "nama" => $this->input->post('input_nama'),
      "jenis_kelamin" => $this->input->post('input_jeniskelamin'),
      "telp" => $this->input->post('input_telp'),
      "alamat" => $this->input->post('input_alamat')
    );
    
    $this->db->where('nisn', $nisn);
    $this->db->update('siswa', $data); // Untuk mengeksekusi perintah update data
  }
  
  // Fungsi untuk melakukan menghapus data siswa berdasarkan NIS siswa
  public function delete($nisn){
    $this->db->where('nisn', $nisn);
    $this->db->delete('siswa'); // Untuk mengeksekusi perintah delete data
  }
}