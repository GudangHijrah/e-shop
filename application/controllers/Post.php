<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: zubeir
 * Date: 10/27/2017
 * Time: 12:53 AM
 */
class Post extends CI_Controller
{
    public static $_tgl_info = '';
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('tgl_indo_helper');
    }

    public function index()
    {
        $_slug = $_GET['slug'];
        $_category = $_GET['category'];
        $_tmp = array();

        $data[''] = '';
        $data['_tgl_info'] = self::$_tgl_info;
        $data['_berita'] = $this->db->query("SELECT * FROM posts WHERE slug='".$_slug."' LIMIT 1")->row();
        $post_date = date('Y-m-d', strtotime($data['_berita']->post_date));

        $_tmp['title'] = $data['_berita']->title;
        $_tmp['slug'] = $data['_berita']->slug;
        $data['_tgl_berita'] = nama_hari($post_date).' '. tgl_indo($post_date);

        $data['_slug'] = $_slug;
        $data['_category'] = $_category;
        $data['_menus'] = $this->session->userdata('menu_session');
        $data['_footer'] = $this->session->userdata('footer_session');
        $this->template->berita('frontend/page_post', $data);
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