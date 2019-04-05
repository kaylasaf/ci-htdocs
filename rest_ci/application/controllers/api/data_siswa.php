<?php
use Restserver\Libraries\REST_Controller;

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Data_siswa extends REST_Controller {

    function __construct($config = 'rest') {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        $method = $_SERVER['REQUEST_METHOD'];
        if($method == "OPTIONS") {
            die();
        }
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data kontak
    function index_get() {
        $id = $this->get('id');
        if ($id == '') {
            $smkn2 = $this->db->get('data_siswa')->result();
        } else {
            $this->db->where('id', $id);
            $smkn2 = $this->db->get('data_siswa')->result();
        }
        $this->response($smkn2, 200);
    }

    //Mengirim atau menambah data kontak baru
    function index_post() {
        $data = array(
                    'id'           => $this->post('id'),
                    'nama'          => $this->post('nama'),
                    'kelas'    => $this->post('kelas'),
                    'jurusan'          => $this->post('jurusan'),
                    'alamat'          => $this->post('alamat'));
        $insert = $this->db->insert('data_siswa', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Memperbarui data kontak yang telah ada
    function index_put() {
        $id = $this->put('id');
        $data = array(
                    'id'       => $this->put('id'),
                    'nama'          => $this->put('nama'),
                    'kelas'    => $this->put('kelas'),
                    'jurusan'          => $this->put('jurusan'),
                    'alamat'          => $this->put('alamat'));
        $this->db->where('id', $id);
        $update = $this->db->update('data_siswa', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Menghapus salah satu data kontak
    function index_delete() {
        $id = $this->delete('id');
        $this->db->where('id', $id);
        $delete = $this->db->delete('data_siswa');
        if ($delete) {
            $this->response(array('status' => 'deleted success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
?>