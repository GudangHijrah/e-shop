<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: zubeir
 * Date: 16/09/2017
 * Time: 10:25
 */
class Medias extends CI_Controller
{
    public static $_tgl_info = '';

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('tgl_indo_helper');
        $this->load->helper("url");
        $this->load->model("Picture_Model");
        $this->load->library("pagination");
    }//end construct function

    public function index()
    {
        $stringQuery = '';
        $data[''] = '';
        $data['_tgl_info'] = self::$_tgl_info;
        $data['_menus'] = $this->session->userdata('menu_session');
        $data['_footer'] = $this->session->userdata('footer_session');
        $type = $_GET['type'];
        $data['_type'] = $type;

        $data['_category'] = $this->db->query("select * from berita_category WHERE status='published' ORDER BY update_date DESC")->result();

        if( $type == 'foto' ){
            //$stringQuery = 'SELECT * FROM gallery_foto ORDER BY update_date DESC';
            $stringQuery = "select gf.*, (select c.title from berita_category c where c.id = gf.id_category) as cat_title,
                                        (select c.kode from berita_category c where c.id = gf.id_category) as cat_kode
                                                        from gallery_foto gf WHERE status='published' ORDER BY update_date DESC";
            $data['_gallery_foto'] = $this->db
                ->query($stringQuery)
                ->result();
        }elseif ($type == 'video'){
            $stringQuery = "select gv.*, (select c.title from berita_category c where c.id = gv.id_category) as cat_title,
                                        (select c.kode from berita_category c where c.id = gv.id_category) as cat_kode
                                                        from gallery_video gv WHERE status='published' ORDER BY update_date DESC";
            $data['_gallery_video'] = $this->db
                ->query($stringQuery)
                ->result();
        }

        $this->template->berita('frontend/medias', $data);
    }//end index functions

    public function list_foto()
    {
        $data['_category'] = $this->db->query("select * from berita_category WHERE status='published' ORDER BY update_date DESC")->result();

        $whereClause = "";
        $keyword = $this->input->post('keyword');
        $filter = false;
        if($keyword != null){
            $whereClause = 'AND (description like "%'.$keyword.'%" OR title like "%'.$keyword.'%")';
            $filter = true;
        }

        $config = array();
        $config["base_url"] = base_url() . "medias/list_foto";
        $config["total_rows"] = $this->Picture_Model->record_count();
        $config["per_page"] = 6;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["_fotos"] = $this->Picture_Model->
        fetch_pictures($config["per_page"], $page, $whereClause);
        $data["links"] = $this->pagination->create_links();

        $data[''] = '';
        $data['_tgl_info'] = self::$_tgl_info;
        $data['_menus'] = $token_from_session = $this->session->userdata('menu_session');
        $data['_footer'] = $this->session->userdata('footer_session');

        $this->template->front('frontend/media/foto', $data);
    }

}