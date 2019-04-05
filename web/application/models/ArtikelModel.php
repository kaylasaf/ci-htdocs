<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ArtikelModel extends CI_Model {

    //fungsi menampilkan semua data artikel
    public function view(){
        return $this->db->get('artikel')->result();
    }

    //fungsi untuk validasi form tambah dan ubah
    public function validation($mode){
        $this->load->library('form_validation'); //load libarary form_validation untuk validasinya

        if($mode == "save")
            $this->form_validation->set_rules('input_id', 'Id', 'required|max_length[11]');
            $this->form_validation->set_rules('input_judul', 'Judul', 'required');
            $this->form_validation->set_rules('input_konten', 'Konten', 'required');
        
        if($this->form_validation->run())
            return TRUE;
        else
            return FALSE;
    }

    //fungsi untuk simpan data ke tabel artikel
    public function save(){
        $data = array(
            "id" => $this->input->post('input_id'),
            "judul" => $this->input->post('input_judul'),
            "konten" => $this->input->post('input_konten')
        );

        $this->db->insert('artikel', $data); //perintah insert data ke tabel artikel jadi artikel = data
        //kaya database itu si tabel artikelnya dimasukin data  
    }

    //fungsi ubah data berdasarkan id artikel
    public function edit($id){
        $data = array(
            "judul" => $this->input->post('input_judul'),
            "konten" => $this->input->post('input_konten')
        );

        $this->db->where('id', $id);
        $this->db->update('artikel', $data);
    }

    //fungsi delete
    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('artikel');
    }

    public function lihat_id($id){
        return $this->db->where('id', $id);
    }
}