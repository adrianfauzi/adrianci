<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //write less do more
    }

    public function index(){
        // echo "tes aja ini";
        $this->load->model('Pengguna_model');
        $user = $this->Pengguna_model->get_id_level();
        // var_dump($user); die();
     
        foreach ($user as $key => $value) {
            $data_user[$key] = $value->level_nama;
        }
        $data['user'] = $data_user;
        $data['page'] = "pengguna/form";
        $this->load->view('main',$data);
    }

}