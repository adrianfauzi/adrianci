<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {


	public function index(){
        // echo "tes aja ini";
        $data['page'] = "produk/form";
        $this->load->view('main',$data);
    }
    public function submit(){
    	$this->load->model('Produk_model');

        $this->load->helper('autoid_helper');
        $tabel = 'produk';
        $fields = 'produk_id';
        $inisial = 'PK';

		$produk = $this->input->post();
        $produk['produk_id'] = get_id($fields,$tabel,$inisial); 


		$this->Produk_model->add($produk);
    }
}
