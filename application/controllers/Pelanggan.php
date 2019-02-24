<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {


	public function index(){
        // echo "tes aja ini";
        $data['page'] = "pelanggan/form";
        $this->load->view('main',$data);
    }
    public function submit(){
    	$this->load->model('Pelanggan_model');
        $this->load->helper('autoid_helper');
        $tabel = 'pelanggan';
        $fields = 'pelanggan_id';
        $inisial = 'PL';
        $id_pelanggan = $this->input->post('pelanggan_id');

        if ($id_pelanggan == '') {
            $pelanggan = $this->input->post();
            $pelanggan['pelanggan_id'] = get_id($fields,$tabel,$inisial); 
            $this->pelanggan_model->add($pelanggan);
        }else{
            $data = array(
                'pelanggan_nama' => $this->input->post('pelanggan_nama'),
                'pelanggan_email' => $this->input->post('pelanggan_email'),
                'pelanggan_email' => $this->input->post('pelanggan_email'),
                'pelanggan_alamat' => $this->input->post('pelanggan_alamat'),
            );
            $this->pelanggan_model->update($id_pelanggan,$data);
        }
    }
    public function show_list_pelanggan(){
        $data['page'] = "pelanggan/list_pelanggan";
        $this->load->model('Pelanggan_model');
        $data["pelanggan"] = $this->Pelanggan_model->get_pelanggan();
        $this->load->view('main',$data);
    }
    public function hapus_pelanggan()
    {
        $this->load->model('Pelanggan_model');
        $id_pelanggan = $this->uri->segment(3);
        //var_dump($id_pelanggan);
        $this->Pelanggan_model->delete_pelanggan($id_pelanggan);
    }
    public function edit_pelanggan()
    {
        $id_pelanggan = $this->uri->segment(3);
        $this->load->model('Pelanggan_model');
        $data["data_pelanggan"] = $this->Pelanggan_model->get_pelanggan_detail($id_pelanggan);
        $data['page'] = "pelanggan/form";
        $this->load->view('main',$data);
    }
}
