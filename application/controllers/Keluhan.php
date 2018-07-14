<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: zubeir
 * Date: 12/25/2017
 * Time: 8:13 PM
 */
class Keluhan extends CI_Controller
{
    public static $_tgl_info = '';

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('tgl_indo_helper');
    }

    public function index(){
        $this->load->model('My_Model');
        $data[''] = '';

        $data = array(
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'email' => $this->input->post('email')
        );
        $data = $this->My_Model->Insert('keluhan_pelanggan', $data);
        redirect(base_url(),'refresh');

        //$this->template->front('frontend/about/sejarah_singkat', $data);
    }

}