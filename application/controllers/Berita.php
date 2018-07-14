<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: zubeir
 * Date: 16/09/2017
 * Time: 10:25
 */
class Berita extends CI_Controller
{
    public static $_tgl_info = '';
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('tgl_indo_helper');
    }

    public function index()
    {
        $data[''] = '';
        $data['_tgl_info'] = self::$_tgl_info;
        $_slug = $_GET['slug'];
        $_category = $_GET['category'];
        $_tmp = array();
        $data['_berita'] = $this->db->query("SELECT b.*, c.kode as kode_category, c.id 
                                              FROM berita b left join berita_category c on c.id = b.id_category 
                                              WHERE slug='".$_slug."' LIMIT 1")->row();
        $post_date = date('Y-m-d', strtotime($data['_berita']->post_date));

        $_tmp['title'] = $data['_berita']->title;
        $_tmp['slug'] = $data['_berita']->slug;
        $_tmp['resume_news'] = $data['_berita']->resume_news;

        $data['_tgl_berita'] = nama_hari($post_date).' '. tgl_indo($post_date);
        $data['_slug'] = $_slug;

        //===========META DATA============================================
        $data['_meta_url'] = base_url().$_tmp['slug'];
        $data['_meta_title'] = $_tmp['title'];
        $data['_meta_description_news'] = strip_tags($_tmp['resume_news']);
        $data['_meta_description'] = strip_tags($_tmp['resume_news']);
        $data['_meta_image'] = asset_url()."berita/".$data['_berita']->hero_image;
        //===========META DATA============================================

        $data['_category'] = $_category;
        $data['_menus'] = $this->session->userdata('menu_session');
        $data['_footer'] = $this->session->userdata('footer_session');

        $this->template->berita('frontend/page_blog', $data);
    }

    static public function slugify($post_array)
    {
        $text = $post_array['title'];
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '-');

        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        $post_array['slug'] = $text;

        return $post_array['slug'];
    }
}