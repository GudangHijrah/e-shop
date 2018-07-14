<?php

/**
 * Created by PhpStorm.
 * User: hendra.kurniawan88
 * Date: 06/03/2018
 * Time: 9:19
 */
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class PesanKebaikanRest extends REST_Controller
{
    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data kontak
    function index_get() {
        $id = $this->get('id');
        if ($id == '') {
            $kontak = $this->db->get('gallery_video')->result();
        } else {
            $this->db->where('id', $id);
            $kontak = $this->db->get('gallery_video')->result();
        }
        $this->response($kontak, 200);
    }

}