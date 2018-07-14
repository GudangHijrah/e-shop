<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: zubeir
 * Date: 10/27/2017
 * Time: 12:53 AM
 */
class PesanKebaikan extends CI_Controller
{
    public static $_tgl_info = '';
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('tgl_indo_helper');
    }

    public function index()
    {
        $_aidi = $_GET['id'];
        $_category = $_GET['cat_kode'];
        $_tmp = array();

        $data[''] = '';
        $data['_tgl_info'] = self::$_tgl_info;
        $data['_berita'] = $this->db->query("SELECT * FROM gallery_video WHERE id='".$_aidi."' LIMIT 1")->row();
        $post_date = date('Y-m-d', strtotime($data['_berita']->post_date));

        $data['_tgl_berita'] = nama_hari($post_date).' '. tgl_indo($post_date);

        $data['_slug'] = $_aidi;
        $data['_category'] = $_category;
        $data['_menus'] = $this->session->userdata('menu_session');
        $data['_footer'] = $this->session->userdata('footer_session');
        //$this->template->front('assets/global/plugins/cubeportfolio/ajax/project3', $data);
        $this->load->view('assets/global/plugins/cubeportfolio/ajax/project3.html', $data);
    }
}