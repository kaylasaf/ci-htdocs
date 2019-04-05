<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Artikel extends CI_Controller {
  
  public function __construct(){
    parent::__construct();

    $this->load->model('ArtikelModel'); //load ArtikelModel ke controller ini
  }

  public function index(){
      $data['artikel'] = $this->ArtikelModel->view();
      echo "jalan";
      $this->load->view('artikel/lihat', $data);
      // $this->load->view('artikel/index', $data);
  }
 
  public function tambah(){
    if($this->input->post('submit')){
      if($this->ArtikelModel->validation("save")){
        $this->ArtikelModel->save();
        redirect('artikel');
      }
    }

    $this->load->view('artikel/form_tambah');
  }

  public function ubah($id){  //fungsi ubah data
    if($this->input->post('submit')){
      if($this->ArtikelModel->validation("update")){
        $this->ArikelModel->edit($id);
        redirect('artikel');
      }
    }

    $data['artikel'] = $this->ArtikelModel->view_by($id);
    $this->load->view('artikel/form_ubah', $data);
  }

  public function hapus($id){
    $this->ArtikelModel->delete($id);
    redirect('artikel');
  }

  public function lihat(){
    // $data['artikel'] = $this->ArtikelModel->lihat_id($id);
    echo "jalan";
    $this->load->view('artikel/lihat', $data);
	}
}