<?php

/**
 * Created by PhpStorm.
 * User: hendra.kurniawan88
 * Date: 30/03/2018
 * Time: 5:23
 */
class Sqsecretdoor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
        $this->load->model('User_Model');
        $this->load->model('Admin_Model');
        $this->load->library('Grocery_CRUD');
        if (!$this->session->userdata('WEB_USR') || !$this->session->userdata('ID_WEB_USER')) {
            redirect(base_url() . 'login/control');
            exit();
        }
        $timezone = "Asia/Bangkok";
        date_default_timezone_set($timezone);
    }

    public function index()
    {
        $this->session->sess_destroy();
        redirect(base_url() . '');

        $this->data['title'] = 'Admin Index :: ' . CIBB_TITLE;
        $this->load->view('header', $this->data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/index');
        $this->load->view('footer');
    }
}