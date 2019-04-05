<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{
    private $_table = "products";

    public $product_id;
    public $nama;
    public $harga;
    public $image = "default.jpg";

    public function rules()
    {
        return[
            [   'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required'],
            
            [
                'field' => 'harga',
                'label' => 'Harga',
                'rules' => 'numberic'],
            
            [
                'field' => 'deskripsi',
                'label' => 'Deskripsi',
                'rules' => 'required']

        ];
    }
        //fungsi untuk mengambil semua data yang ada di database
    public function getALL()
    {
        return $this->db->get($this->_table)->result();
    }
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["product_id" => $id])->row();
    }
        //fungsi untuk menyimpan data yang ada di database
    public function save()
    {
        $post = $this->input->post(); //ambil data dari from
        $this->product_id = uniqid();
        $this->nama = $post["nama"];
        $this->harga = $post["harga"];
        $this->deskripsi = $post["deskripsi"];
        $this->db->insert($this->_table, $this);
    }
        //fungsi untuk update data 
    public function update()
    {
        $post = $this->input->post();
        $this->product_id = $post["id"];
        $this->nama = $post["nama"];
        $this->harga = $post["harga"];
        $this->deskripsi = $post["deskripsi"];
        $this->db->update($this->_table, $this, array('product_id' => $post['id']));
    }
        //fungsi untuk hapus data
    public function hapus()
    {
        return $this->db->delete($this->_table, array("product_id" => $id));
    }
}