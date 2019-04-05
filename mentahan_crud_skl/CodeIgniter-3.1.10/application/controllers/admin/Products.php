<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller
{
    public function __construct()
    {
        $this->load->model("product_model");
        $this->load->library('form_validation');
    }

    public function index() //fungsi menampilkan data
    {
        $data["products"] = $this->product_model->getAll(); //menampilkan semua data
        $this->load->view("admin/product/list", $data);
    }

    public function add() //fungsi add
    {
        $product = $this->product_model; //objek model
        $validation = $this->form_validation;
        $validation->set_rules($product->rules()); //terapkan rules

        if ($validation->run()) {
            $product->save();
            $this->session->set_flashdata('Succes', 'Berhasil disimpan');
        }
        $this->load>view("admin/product/new_form");
    }

    public function edit($id = null) //fungsi edit
    {
        if (!isset($id)) redirect('admin/products');

        $product = $this->product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('Succes', 'Berhasil disimpan');
        }

        $data["product"] = $product->getById($id);
        if (!$data["product"]) show_404();
        
        $this->load->view("admin/product/edit_form", $data);
    }

    public function hapus() //fungsi hapus
    {
        if ($isset($id)) show_404();

        if ($this->product_model->delete($id)) {
            redirect(site_url('admin/products'));
        }
    }

}

?>