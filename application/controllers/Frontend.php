<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller
{
    public static $_tgl_info = '';

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('tgl_indo_helper');
        $this->load_defaults();

    }

    public function generate_email()
    {
        $lists = $this->mailchimp->call('lists/list');
        var_dump($lists);
    }

    public function index()
    {

        if (!ini_get('date.timezone')) {
            date_default_timezone_set('GMT');
        }

        $category = array(
            'berkala' => 'Berkala',
            'serta_merta' => 'Serta Merta',
            'setiap_saat' => 'Setiap Saat',
            'lainnya' => 'Lainnya'
        );
        $xstr = 'Ini adalah running text.';

        $data[''] = '';

        $carouselImage[''] = '';
        $data['_tgl_info'] = self::$_tgl_info;
        $data['_menus'] = $this->session->userdata('menu_session');
        $data['_footer'] = $this->session->userdata('footer_session');

        $carouselList = $this->db->query("SELECT * FROM carousel_image WHERE active='Yes' ORDER BY post_date DESC")->result();

        $data['_category'] = $this->db->query("select * from berita_category WHERE status='published' ORDER BY update_date DESC")->result();
        $data['_category_pesankebaikan'] = $this->db->query("select * 
                                                             from berita_category WHERE status='published' 
                                                             and kode like '_pesankebaikan%'
                                                             ORDER BY update_date DESC limit 10")->result();

        //$stringQueryGalleryFoto = 'select * from gallery_foto WHERE status=\'published\' ORDER BY update_date DESC';
        $stringQueryGalleryFoto = 'SELECT x.* FROM
                                        (
                                            SELECT
                                                gf.title AS title_gallery,
                                                gf.description,
                                                gf.image as image_gf,
                                                gf.id_berita,
                                                br.hero_image as images,
                                                br.title AS title_berita
                                            FROM
                                                gallery_foto gf RIGHT JOIN berita br on br.id = gf.id_berita
                                            WHERE
                                                gf.status = "published"
                                            ORDER BY
                                                gf.update_date DESC
                                            LIMIT 12
                                        ) x;';
        $data['_gallery'] = $this->db->query($stringQueryGalleryFoto)->result();

        /*$data['_gallery_foto'] = $this->db->query("select gf.*, (select c.title from berita_category c where c.id = gf.id_category) as cat_title,
                                                                  (select c.kode from berita_category c where c.id = gf.id_category) as cat_kode
                                                        from gallery_foto gf WHERE status='published' ORDER BY update_date DESC")->result();*/
        $queuryFoto = "select x.* from(
                        select 'header' as type, a.id, 0 as id_gallery, a.id_category, 
                        (select kode from berita_category where id = a.id_category ) as cat_kode,
                        a.title, a.description, a.image
                            from gallery_foto a
                        UNION
                        select 'detail' as type, a.id, b.id_gallery, 0 as id_category, 
                        (select kode from berita_category where id = a.id_category ) as cat_kode,
                        b.title, b.description, b.image
                            from gallery_album b left join gallery_foto a
                            on a.id = b.id_gallery
                        ) x
                        order by x.id asc limit 16;";
        $data['_gallery_foto'] = $this->db->query($queuryFoto)->result();

        $data['_gallery_video'] = $this->db->query("select gv.*, (select c.title from berita_category c where c.id = gv.id_category) as cat_title,
                                                                  (select c.kode from berita_category c where c.id = gv.id_category) as cat_kode
                                                        from gallery_video gv WHERE status='published' ORDER BY update_date DESC LIMIT 12")->result();
        $data['_pesan_kebaikan'] = $this->db->query("select pk.*, (select c.title from berita_category c where c.id = pk.id_category) as cat_title,
                                                                  (select c.kode from berita_category c where c.id = pk.id_category) as cat_kode
                                                     from pesan_kebaikan pk WHERE pk.status='published' ORDER BY pk.tgl_posting DESC LIMIT 7")->result();
        $data['_berita'] = $this->db->query("SELECT b.*, c.kode as kode, c.title as category_name, c.type
                                            FROM berita b LEFT JOIN berita_category c ON b.id_category = c.id
                                            WHERE b.status = 'published'
                                            ORDER BY b.post_date desc;")->result();
        $data['_berita_hero'] = $this->db->query("SELECT
                                    b.*, c.kode AS kode,c.title AS category_name,c.type                                    
                                FROM
                                    berita b
                                LEFT JOIN berita_category c ON b.id_category = c.id
                                WHERE b. STATUS = 'published' AND b.is_utama = 'utama'
                                ORDER BY
                                    b.post_date DESC LIMIT 1")->row();
        /*foreach ($data['_berita'] as $berita) {
            if( $berita->type == "text" && $berita->is_utama == "utama"){
                $data['_berita_hero'] = $berita;
            }
        }*/

        $str = $this->db->query("SELECT * FROM running_text WHERE status='published' LIMIT 1")->row();
        $data['_berita_utama'] = $str != null ? strip_tags($str->content) : "";

        $data['_partners'] = $this->db->query("SELECT * FROM partner WHERE 1=1")->result();

        $carouselImages = array();
        foreach ($carouselList as $row) {
            $carouselImage['_hero'] = $row->image_file;
            $carouselImage['_caption'] = $row->carousel_caption;
            $carouselImage['_external_link'] = $row->external_link;
            $carouselImage['_link_berita'] = '';
            if( $row->id_berita != null ){
                $xx = $this->db->query("SELECT slug FROM berita WHERE id=".$row->id_berita)->row();
                $carouselImage['_link_berita'] = $xx->slug;
            }else{
                $carouselImage['_link_berita'] = ' ';
            }
            array_push($carouselImages, $carouselImage);
        }
        $data['carouselImages'] = $carouselImages;
        $this->template->front('frontend/index', $data);
    }

    public function tentang_kami()
    {
        $data[''] = '';
        $data['_menus'] = $token_from_session = $this->session->userdata('menu_session');
        $data['_footer'] = $this->session->userdata('footer_session');
        $this->template->front('frontend/tentang_kami', $data);
    }

    public function berita()
    {
        $data[''] = '';
        $data['_tgl_info'] = self::$_tgl_info;
        $data['_menus'] = $token_from_session = $this->session->userdata('menu_session');
        $data['_footer'] = $this->session->userdata('footer_session');
        $data['_beritas'] = $this->db->query("SELECT * FROM berita ORDER BY post_date DESC ")->result();
        $this->template->front('frontend/berita_list', $data);
    }

    public function kontak_kami()
    {
        $this->session->sess_destroy();
        $data[''] = '';
        $data['_tgl_info'] = self::$_tgl_info;
        $data['_menus'] = $token_from_session = $this->session->userdata('menu_session');
        $data['_footer'] = $this->session->userdata('footer_session');
        $data['_about'] = $this->db->query("SELECT * FROM about WHERE status='Active' LIMIT 1")->row();
        $this->template->front('frontend/kontak_kami', $data);
    }

    public function tugas_fungsi()
    {
        $data[''] = '';
        $data['_tgl_info'] = self::$_tgl_info;

        $tugasFungsiHeader = $this->db->query("SELECT * FROM tugas_fungsi_header LIMIT 1")->row();
        $data['_tugas_fungsi_header'] = $tugasFungsiHeader;

        $tugasFungsiDetails = $this->db->query("SELECT * FROM tugas_fungsi_detail WHERE id_header=".$tugasFungsiHeader->id." ORDER BY update_date ASC")->result();
        $data['_tugas_fungsi_details'] = $tugasFungsiDetails;

        $data['_menus'] = $token_from_session = $this->session->userdata('menu_session');
        $data['_footer'] = $this->session->userdata('footer_session');
        $this->template->front('frontend/about/tugas_fungsi', $data);
    }

    public function sejarah_singkat()
    {
        $data[''] = '';
        $data['_tgl_info'] = self::$_tgl_info;
        $data['_menus'] = $token_from_session = $this->session->userdata('menu_session');
        $data['_footer'] = $this->session->userdata('footer_session');

        $sejarah = $this->db->query("SELECT * FROM sejarah ORDER BY update_date DESC LIMIT 1")->row();
        $data['_sejarah'] = $sejarah;

        $this->template->front('frontend/about/sejarah_singkat', $data);
    }

    public function gallery_foto_detail()
    {
        $data[''] = '';
        $idHeader = $_GET['id'];
        $data['_tgl_info'] = self::$_tgl_info;
        $data['_menus'] = $token_from_session = $this->session->userdata('menu_session');
        $data['_footer'] = $this->session->userdata('footer_session');

        $queuryFoto = "select x.* from(
                        select 'header' as type, a.id, 0 as id_gallery, a.id_category, 
                        (select kode from berita_category where id = a.id_category ) as cat_kode,
                        a.title, a.description, a.image
                            from gallery_foto a
                        UNION
                        select 'detail' as type, a.id, b.id_gallery, 0 as id_category, 
                        (select kode from berita_category where id = a.id_category ) as cat_kode,
                        b.title, b.description, b.image
                            from gallery_album b left join gallery_foto a
                            on a.id = b.id_gallery
                        ) x
                        where x.id = ".$idHeader."
                        order by x.id asc;";
        $data['_gallery_album'] = $this->db->query($queuryFoto)->result();
        $this->load->view('frontend/project4', $data);
    }

    public function visi_misi()
    {
        $data[''] = '';
        $data['_tgl_info'] = self::$_tgl_info;
        $data['_menus'] = $token_from_session = $this->session->userdata('menu_session');
        $data['_footer'] = $this->session->userdata('footer_session');

        $visiMisi = $this->db->query("SELECT * FROM visi_misi ORDER BY update_date DESC LIMIT 1")->row();
        $data['_visi_misi'] = $visiMisi;

        $this->template->front('frontend/about/visi_misi', $data);
    }

    public function struktur_organisasi()
    {
        $data[''] = '';
        $data['_tgl_info'] = self::$_tgl_info;
        $data['_menus'] = $token_from_session = $this->session->userdata('menu_session');
        $data['_footer'] = $this->session->userdata('footer_session');
        $data['_struktur_organisasi'] = $this->db->query("SELECT * FROM struktur_organisasi WHERE status='published' LIMIT 1")->row();
        $this->template->front('frontend/about/struktur_organisasi', $data);
    }


    public function berita_list()
    {
        $whereClause = '';
        $_category = @$_GET['category'];
        $keyword = $this->input->post('keyword');
        $filter = false;
        if($keyword != null){
            $whereClause = ' AND b.content like \'%'.$keyword.'%\'';
            $filter = true;
        }

        $data[''] = '';
        $data['_tgl_info'] = self::$_tgl_info;
        $data['_menus'] = $token_from_session = $this->session->userdata('menu_session');
        $data['_footer'] = $this->session->userdata('footer_session');

        $data['_category'] = $_category;
        //$data['_beritas'] = $this->db->query("SELECT * FROM berita WHERE type_news='" . $_category . "' ORDER BY created_date DESC ")->result();
        $data['_beritas'] = $this->db->query("SELECT b.* FROM berita b WHERE status = 'published' ".$whereClause." ORDER BY b.post_date desc ")->result();
        $data['_status_filter'] = $filter;

        $this->template->front('frontend/berita/list', $data);
    }

    public function coffee_morning()
    {
        $whereClause = '';
        $_category = $_GET['category'];
        $keyword = $this->input->post('keyword');
        $filter = false;
        if($keyword != null){
            $whereClause = ' AND b.content like \'%'.$keyword.'%\'';
            $filter = true;
        }

        $data[''] = '';
        $data['_tgl_info'] = self::$_tgl_info;
        $data['_menus'] = $token_from_session = $this->session->userdata('menu_session');
        $data['_footer'] = $this->session->userdata('footer_session');

        $data['_category'] = $_category;
        $data['_listing'] = $this->db->query("SELECT y.* FROM(
                                            SELECT 
                                                x.*, count(x.hd_id)
                                            FROM(
                                                SELECT 'HD' as type,
                                                    hd.post_date, hd.id_category, hd.title, hd.id as hd_id, 'no_file' as file
                                                FROM coffee_morning hd
                                                    LEFT JOIN berita_category bc on bc.id = hd.id_category
                                                UNION
                                                SELECT 'DT' as type,
                                                    dt.created_date, hd.id_category, dt.title, hd.id as hd_id, dt.file as file
                                                FROM coffee_morning_detail dt
                                                    LEFT JOIN coffee_morning hd on hd.id = dt.id_header
                                            )x GROUP BY x.hd_id, x.type, x.title, x.id_category, x.file                                        
                                        )y ORDER BY y.hd_id desc;")->result();

        $this->template->front('frontend/berita/coffee_morning', $data);
    }

    public function buletin()
    {
        $data[''] = '';
        $data['_tgl_info'] = self::$_tgl_info;
        $data['_menus'] = $token_from_session = $this->session->userdata('menu_session');
        $data['_footer'] = $this->session->userdata('footer_session');

        $data['_buletins'] = $this->db->query("SELECT * FROM buletin WHERE status='published' ORDER BY published_info DESC ")->result();
        $data['_tahuns'] = $this->db->query("SELECT DISTINCT tahun FROM buletin WHERE status='published' ORDER BY tahun DESC ")->result();

        $this->template->front('frontend/info_publik/buletin_list', $data);
    }

    public function keluhan_pelanggan(){
        $data[''] = '';
        $data['_tgl_info'] = self::$_tgl_info;
        $data['_menus'] = $token_from_session = $this->session->userdata('menu_session');
        $data['_footer'] = $this->session->userdata('footer_session');

        $this->template->front('frontend/form_keluhan', $data);
    }

    public function download_index()
    {
        $_category = @$_GET['kode_category'];
        $cat = '';
        if($_category == null){
            $cat = '';
        }else{
            $cat = "AND lower(bc.kode) = '".$_category."'";
        }

        $data[''] = '';
        $data['_tgl_info'] = self::$_tgl_info;
        $data['_menus'] = $token_from_session = $this->session->userdata('menu_session');
        $data['_footer'] = $this->session->userdata('footer_session');

        $data['_category'] = $_category;
        $data['_download_index'] = $this->db
        ->query("SELECT
                    hi.title as title_page, 
                    case when hi.keterangan is null 
                      then '-' 
                    else hi.keterangan 
                    end as keterangan, 
                    di.title, di.file, di.published_info
                FROM
                    header_info hi
                LEFT JOIN download_index di ON di.id_header_info = hi.id
                LEFT JOIN berita_category bc ON bc.id = di.id_category
                WHERE
                    1 = 1
                AND hi.STATUS = 'published' ".$cat."
                ORDER BY
                    di.created_date DESC;")
        ->result();
        $this->template->front('frontend/info_publik/download_index', $data);
    }

    public function not_found()
    {
        $this->load->view('coming_soon');
    }


    /*ADDITIONAL FUNCTION FOR GENERATE MENU MANAGEMENT
    =================================================*/
    public function truncateStringWords($str, $maxlen)
    {
        if (strlen($str) <= $maxlen)
            return $str;

        /*$newstr = substr($str, 0, $maxlen);
        if (substr($newstr, -1, 1) != ' ')
            $newstr = substr($newstr, 0, strrpos($newstr, " "));*/

        if (strlen(preg_replace('#^https?://#', '', $str)) > $maxlen) {
            $newstr = substr(preg_replace('#^https?://#', '', $str), 0, $maxlen) . '&hellip;';
        }

        return $newstr;
    }

    public function load_defaults()
    {
        $tgl_sekarang = date('Y-m-d');
        $_tgl_info = nama_hari($tgl_sekarang) . ' ' . tgl_indo($tgl_sekarang);
        self::$_tgl_info = $_tgl_info;

        $data["_menus"] = array();
        $data["_footer"] = '';

        $menu_from_session = $this->session->userdata('menu_sq_session');
        if (count($menu_from_session) == 0) {
            $query = $this->db->query("SELECT * FROM menu ORDER BY id_current ASC")->result();
            foreach ($query as $row) {
                array_push($data['_menus'], $row);
            }
        } else {
            $data["_menus"] = $menu_from_session;
        }
        //echo count($data['_menus']);

        $footer_from_session = $this->session->userdata('footer_sq_session');
        if (empty($footer_from_session)) {
            $query = $this->db->query("SELECT * FROM footer limit 1")->row();
            $data['_footer'] = $query;
        } else {
            $data["_footer"] = $footer_from_session;
        }

        $data = array(
            'menu_session' => $data['_menus'],
            'footer_session' => $data['_footer']
        );
        $this->session->set_userdata($data);
    }

    function build_menu($rows, $parent = 0)
    {
        $result = "<ul>";
        foreach ($rows as $row) {
            if ($row->id_parent == $parent) {
                $result .= "<li>{$row->name}";
                if ($this->has_children($rows, $row->id_current))
                    $result .= $this->build_menu($rows, $row->id_current);
                $result .= "</li>";
            }
        }
        $result .= "</ul>";
        return $result;
    }

    function has_children($rows, $id)
    {
        foreach ($rows as $row) {
            if ($row->id_parent == $id)
                return true;
        }
        return false;
    }
    /*==============================================*/
}