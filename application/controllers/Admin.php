<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
        $this->load->model('User_Model');
        $this->load->model('Admin_Model');
        $this->load->library('Grocery_CRUD');
        $this->load->library('Image_Moo');
        if (!$this->session->userdata('WEB_USR') || !$this->session->userdata('ID_WEB_USER')) {
            //redirect(base_url() . 'login/control');
            redirect(base_url() . 'err404.php');
            exit();
        }
        $timezone = "Asia/Bangkok";
        date_default_timezone_set($timezone);
    }

    public function _general_output($output = null)
    {
        if ($this->session->userdata('WEB_USR')) {
            $this->load->view('admin/general_crud.php', $output);
            //$this->load->view('admin/general_crud_smenu', $output);
        } else {
            echo 'anda tidak punya akses';
        }
    }

    public function set_pagination()
    {
        $this->page_config['first_link'] = '&lsaquo; First';
        $this->page_config['first_tag_open'] = '<li>';
        $this->page_config['first_tag_close'] = '</li>';
        $this->page_config['last_link'] = 'Last &raquo;';
        $this->page_config['last_tag_open'] = '<li>';
        $this->page_config['last_tag_close'] = '</li>';
        $this->page_config['next_link'] = 'Next &rsaquo;';
        $this->page_config['next_tag_open'] = '<li>';
        $this->page_config['next_tag_close'] = '</li>';
        $this->page_config['prev_link'] = '&lsaquo; Prev';
        $this->page_config['prev_tag_open'] = '<li>';
        $this->page_config['prev_tag_close'] = '</li>';
        $this->page_config['cur_tag_open'] = '<li class="active"><a href="javascript://">';
        $this->page_config['cur_tag_close'] = '</a></li>';
        $this->page_config['num_tag_open'] = '<li>';
        $this->page_config['num_tag_close'] = '</li>';
    }

    public function index($output = null)
    {
        //$this->session->sess_destroy();
        //redirect(base_url() . '');

        $this->data['title'] = 'Admin Index :: ' . CIBB_TITLE;
        $this->load->view('admin/general_crud_smenu', $output);
        //$this->load->view('header', $this->data);
        //$this->load->view('admin/sidebar');
        //$this->load->view('admin/index');
        //$this->load->view('footer');
    }

    /*=================================================================================================================*/
    public function partner_gallery()
    {
        $this->load->model('Admin_Model', 'get_db');
        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap-v4');
        $crud->set_table('partner_gallery');
        $crud->display_as('partner_gallery');
        $crud->set_subject('Gallery');

        $crud->columns('id_partner', 'title', 'deskripsi', 'image', 'status');
        $crud->set_relation('id_partner', 'partner', '{id}-{nama}');

        $crud->required_fields(array('id_partner', 'title'));
        $crud->field_type('status','dropdown', array('bg' => 'Background', 'fr' => 'Front', 'ls' => 'List'));
        $crud->set_field_upload('image', 'assets/uploads/gallery/');

        $crud->callback_add_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_edit_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_add_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});
        $crud->callback_edit_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});

        $crud->where('1 =', 1);
        $crud->order_by('update_date', 'desc');
        $output = $crud->render();
        $this->_general_output($output);
    }

    public function partner_person()
    {
        $this->load->model('Admin_Model', 'get_db');
        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap-v4');
        $crud->set_table('partner_person');
        $crud->display_as('partner_person');
        $crud->set_subject('Guru & Pendukung');

        $crud->columns('id_partner', 'nama', 'jabatan', 'image', 'status');
        $crud->field_type('status','dropdown', array('active' => 'Active', 'pension' => 'Pension', 'mutation' => 'Mutation'));
        $crud->set_relation('id_partner', 'partner', '{id}-{nama}');

        $crud->required_fields(array('id_partner', 'nama'));
        $crud->set_field_upload('image', 'assets/uploads/gallery/');

        $crud->callback_add_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_edit_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_add_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});
        $crud->callback_edit_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});

        $crud->where('1 =', 1);
        $crud->order_by('update_date', 'desc');
        $output = $crud->render();
        $this->_general_output($output);
    }

    public function partner_dt()
    {
        $this->load->model('Admin_Model', 'get_db');
        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap-v4');
        $crud->set_table('partner_dt');
        $crud->display_as('partner_dt');
        $crud->set_subject('Partner Detil');

        $crud->columns('id_partner', 'tgl_gabung', 'thn_gabung', 'image_dt1', 'image_dt2');
        $crud->set_relation('id_partner', 'partner', '{id}-{nama}');

        $crud->required_fields(array('id_partner'));
        $crud->set_field_upload('image_dt1', 'assets/uploads/gallery/');
        $crud->set_field_upload('image_dt2', 'assets/uploads/gallery/');

        $crud->callback_add_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_edit_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_add_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});
        $crud->callback_edit_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});

        $crud->where('1 =', 1);
        $crud->order_by('update_date', 'desc');
        $output = $crud->render();
        $this->_general_output($output);
    }

    public function partner()
    {
        $this->load->model('Admin_Model', 'get_db');
        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap-v4');
        $crud->set_table('partner');
        $crud->display_as('partner');
        $crud->set_subject('Partner');

        $crud->columns('kode', 'nama', 'alamat', 'image', 'telp','status');
        $crud->display_as('image','Logo');
        $crud->required_fields(array('nama'));
        $crud->field_type('status','dropdown', array('active' => 'Active', 'inactive' => 'Inactive'));
        $crud->set_field_upload('image', 'assets/uploads/gallery/');

        $crud->callback_add_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_edit_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_add_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});
        $crud->callback_edit_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});

        $crud->where('1 =', 1);
        $crud->order_by('update_date', 'desc');
        $output = $crud->render();
        $this->_general_output($output);
    }

    public function campaign_settings()
    {
        $this->load->model('Admin_Model', 'get_db');
        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap-v4');
        $crud->set_table('campaign_settings');
        $crud->display_as('campaign_settings');
        $crud->set_subject('Settings');

        $crud->columns('on_features', 'on_service', 'on_client', 'on_team','on_pricing','on_contact');
        $crud->field_type('on_features','dropdown', array('1' => 'Show', '2' => 'Hide'));
        $crud->field_type('on_service', 'dropdown', array('1' => 'Show', '2' => 'Hide'));
        $crud->field_type('on_client', 'dropdown', array('1' => 'Show', '2' => 'Hide'));
        $crud->field_type('on_team', 'dropdown', array('1' => 'Show', '2' => 'Hide'));
        $crud->field_type('on_pricing', 'dropdown', array('1' => 'Show', '2' => 'Hide'));
        $crud->field_type('on_contact', 'dropdown', array('1' => 'Show', '2' => 'Hide'));

        $crud->callback_add_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_edit_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_add_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});
        $crud->callback_edit_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});

        $crud->where('1 =', 1);
        $crud->order_by('update_date', 'desc');
        $output = $crud->render();
        $this->_general_output($output);
    }

    public function gallery_album()
    {
        $this->load->model('Admin_Model', 'get_db');
        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap-v4');
        $crud->set_table('gallery_album');
        $crud->display_as('gallery_album');
        $crud->set_subject('Gallery Album');

        $crud->columns('title', 'id_gallery', 'image', 'status','update_date');
        $crud->display_as('id_berita','Link ke Berita')
            ->display_as('created_date','Tgl. Posting')
            ->display_as('id_gallery','Pilih Album Depan');

        $crud->set_relation('id_gallery', 'gallery_foto', '{title}');

        $crud->required_fields(array('title'));
        $crud->field_type('status', 'dropdown',
            array('published' => 'Published', 'draft' => 'Draft'));

        $crud->set_field_upload('image', 'assets/uploads/gallery/');
        $crud->callback_after_upload(array($this, 'resize_images_gallery'));

        /*$crud->callback_add_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});*/
        $crud->callback_add_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});
        $crud->callback_edit_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});

        $crud->where('1 =', 1);
        $crud->order_by('update_date', 'desc');
        $output = $crud->render();
        $this->_general_output($output);
    }

    public function pesan_kebaikan()
    {
        $this->load->model('Admin_Model', 'get_db');
        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap-v4');
        $crud->set_table('pesan_kebaikan');
        $crud->display_as('pesan_kebaikan');
        $crud->set_subject('Pesan Kebaikan');

        $crud->columns('type', 'author', 'title', 'link_youtube', 'id_category', 'status','tgl_posting');
        $crud->required_fields(array('type','author', 'title', 'id_category'));

        $crud->set_relation('id_category', 'berita_category', '[{kode}] - {title}');
        $crud->field_type('type', 'dropdown',
            array('text' => 'Text', 'image' => 'Image'));
        $crud->field_type('status', 'dropdown',
            array('published' => 'Published', 'draft' => 'Draft'));

        $crud->set_field_upload('cover_image', 'assets/uploads/gallery/');
        $crud->callback_after_upload(array($this, 'resize_images_pk'));

        $crud->callback_add_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_add_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});
        $crud->callback_edit_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_edit_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});

        $crud->where('1 =', 1);
        $crud->order_by('update_date', 'desc');
        $output = $crud->render();
        $this->_general_output($output);
    }


    public function coffee_morning()
    {
        $this->load->model('Admin_Model', 'get_db');
        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap-v4');
        $crud->set_table('coffee_morning');
        $crud->display_as('coffee_morning');
        $crud->set_subject('Coffee Morning Header');

        $crud->columns('post_date', 'title', 'id_category', 'status','update_date');
        $crud->required_fields(array('post_date','title'));
        $crud->display_as('id_category', 'Kategori');

        $crud->field_type('status', 'dropdown', array(
                'published' => 'Published',
                'draft' => 'Draft')
        );
        $crud->set_relation('id_category', 'berita_category', 'title');

        $crud->set_field_upload('image', 'assets/uploads/gallery/');
        $crud->callback_after_upload(array($this, 'resize_images_gallery'));

        $crud->callback_add_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_add_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});
        $crud->callback_edit_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_edit_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});

        $crud->where('1 =', 1);
        $crud->order_by('post_date', 'desc');

        $output = $crud->render();
        $this->_general_output($output);        
    }

    public function coffee_morning_detail()
    {
        $this->load->model('Admin_Model', 'get_db');
        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap-v4');
        $crud->set_table('coffee_morning_detail');
        $crud->display_as('coffee_morning_detail');
        $crud->set_subject('Coffee Morning Detail');

        $crud->columns('id_header', 'title', 'file', 'update_date');
        $crud->required_fields(array('id_header','title'));
        $crud->display_as('id_header', 'Coffee Morning Header');

        $crud->set_relation('id_header', 'coffee_morning', 'title');

        $crud->set_field_upload('file', 'assets/uploads/download_index/files/');

        $crud->callback_add_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_add_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});
        $crud->callback_edit_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_edit_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});

        $crud->where('1 =', 1);
        $crud->order_by('id_header', 'asc');

        $output = $crud->render();
        $this->_general_output($output);
    }


    public function header_info()
    {
        $this->load->model('Admin_Model', 'get_db');
        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap-v4');
        $crud->set_table('header_info');
        $crud->display_as('header_info');
        $crud->set_subject('Header Info');

        $crud->columns('title','status', 'update_date');
        $crud->required_fields(array('title'));
        $crud->field_type('status', 'dropdown', array(
                'published' => 'Published',
                'draft' => 'Draft')
        );

        $crud->callback_add_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_add_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});
        $crud->callback_edit_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_edit_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});

        $crud->where('1 =', 1);
        $crud->order_by('update_date', 'desc');
        $output = $crud->render();
        $this->_general_output($output);
    }

    public function berita_category()
    {
        $this->load->model('Admin_Model', 'get_db');
        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap-v4');
        $crud->set_table('berita_category');
        $crud->display_as('berita_category');
        $crud->set_subject('Berita Category');

        $crud->columns('kode','type','title','status', 'update_date');
        $crud->required_fields(array('kode', 'title', 'type'));

        $crud->field_type('type', 'dropdown', array(
                'photo' => 'Photo',
                'video' => 'Video',
                'text' => 'Text'
            )
        );
        $crud->field_type('status', 'dropdown', array(
                'published' => 'Published',
                'draft' => 'Draft'
            )
        );

        $crud->callback_add_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_add_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});
        $crud->callback_edit_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_edit_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});

        $crud->where('1 =', 1);
        $crud->order_by('update_date', 'desc');
        $output = $crud->render();
        $this->_general_output($output);
    }

    public function keluhan_pelanggan()
    {
        $this->load->model('Admin_Model', 'get_db');
        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap-v4');
        $crud->set_table('keluhan_pelanggan');
        $crud->display_as('keluhan_pelanggan');
        $crud->set_subject('Keluhan Pelanggan');

        $crud->columns('nama', 'alamat', 'email', 'status','update_date');
        $crud->required_fields(array('nama'));

        $crud->field_type('status', 'dropdown',
            array(
                'published' => 'Published',
                'draft' => 'Draft'));

        $crud->callback_add_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_add_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});
        $crud->callback_edit_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_edit_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});

        $crud->where('1 =', 1);
        $crud->order_by('update_date', 'desc');
        $output = $crud->render();
        $this->_general_output($output);
    }


    public function infografis()
    {
        $this->load->model('Admin_Model', 'get_db');
        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap-v4');
        $crud->set_table('infografis');
        $crud->display_as('infografis');
        $crud->set_subject('Infografis');

        $crud->columns('title', 'image', 'id_category', 'status','update_date');
        $crud->set_relation('id_category', 'berita_category', 'title');
        $crud->required_fields(array('title'));        
        $crud->field_type('category', 'dropdown',
            array('berkala' => 'Berkala', 'serta_merta' => 'Serta Merta', 'setiap_saat' => 'Setiap Saat', 'lainnya' => 'Lainnya'));        

        $crud->set_field_upload('image', 'assets/uploads/gallery/');
        $crud->callback_after_upload(array($this, 'resize_images_gallery'));

        $crud->callback_add_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_add_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});
        $crud->callback_edit_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_edit_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});

        $crud->where('1 =', 1);
        $crud->order_by('update_date', 'desc');

        $output = $crud->render();
        $this->_general_output($output);
    }

    public function statistik()
    {
        $this->load->model('Admin_Model', 'get_db');
        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap-v4');
        $crud->set_table('statistik');
        $crud->display_as('statistik');
        $crud->set_subject('Statistik');

        $crud->columns('title', 'image','file_download','id_category', 'status','update_date');
        $crud->display_as('title', 'Judul')
            ->display_as('image', 'Gambar')
            ->display_as('id_category', 'Kategori Statistik')
            ->display_as('file_download','File Download *');

        $crud->required_fields(array('title'));
        $crud->set_relation('id_category', 'berita_category', 'title');
        //$crud->display_as('id_berita','Link ke Berita');        
        $crud->field_type('status', 'dropdown',
            array('published' => 'Published','draft' => 'Draft'));

        $crud->set_field_upload('image', 'assets/uploads/gallery/');
        $crud->set_field_upload('file_download', 'assets/uploads/download_index/files/');
        $crud->callback_after_upload(array($this, 'resize_images_gallery'));
        
        $crud->callback_add_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_add_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});
        $crud->callback_edit_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});
        $crud->callback_edit_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});

        $crud->where('1 =', 1);
        $crud->order_by('update_date', 'desc');
        $output = $crud->render();
        $this->_general_output($output);
    }

    public function gallery_video()
    {
        $this->load->model('Admin_Model', 'get_db');
        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap-v4');
        $crud->set_table('gallery_video');
        $crud->display_as('gallery_video');
        $crud->set_subject('Gallery Video');

        $crud->columns('title', 'link_youtube', 'id_category', 'id_berita', 'status','update_date');
        $crud->display_as('id_berita','Link ke Berita')
            ->display_as('created_date','Tgl. Posting');
        $crud->required_fields(array('title','id_category'));

        $crud->set_relation('id_berita', 'berita', 'title');
        $crud->set_relation('id_category', 'berita_category', '[{kode}] - {title}');
        $crud->field_type('status', 'dropdown',
            array('published' => 'Published', 'draft' => 'Draft'));

        $crud->set_field_upload('cover_image', 'assets/uploads/gallery/');
        $crud->callback_after_upload(array($this, 'resize_images_gallery'));

        /*$crud->callback_add_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});*/
        $crud->callback_add_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});
        $crud->callback_edit_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});

        $crud->where('1 =', 1);
        $crud->order_by('update_date', 'desc');
        $output = $crud->render();
        $this->_general_output($output);
    }

    public function gallery_foto()
    {
        $this->load->model('Admin_Model', 'get_db');
        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap-v4');
        $crud->set_table('gallery_foto');
        $crud->display_as('gallery_foto');
        $crud->set_subject('Gallery Foto');

        $crud->columns('title', 'image', 'id_category', 'status','update_date');
        $crud->display_as('id_berita','Link ke Berita')
            ->display_as('created_date','Tgl. Posting');

        $crud->set_relation('id_berita', 'berita', 'title');
        $crud->set_relation('id_category', 'berita_category', '[{kode}] - {title}');
        
        $crud->required_fields(array('title'));
        $crud->field_type('status', 'dropdown',
            array('published' => 'Published', 'draft' => 'Draft'));

        $crud->set_field_upload('image', 'assets/uploads/gallery/');
        $crud->callback_after_upload(array($this, 'resize_images_gallery'));

        /*$crud->callback_add_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});*/
        $crud->callback_add_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});
        $crud->callback_edit_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});

        $crud->where('1 =', 1);
        $crud->order_by('update_date', 'desc');
        $output = $crud->render();
        $this->_general_output($output);
    }

    public function visi_misi()
    {
        $this->load->model('Admin_Model', 'get_db');
        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap-v4');
        $crud->set_table('visi_misi');
        $crud->display_as("visi_misi");
        $crud->set_subject('Visi Misi');

        $crud->columns(
            'header',
            'konten_visi',
            'konten_misi',
            'update_date'
        );

        $crud->callback_add_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_add_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});
        $crud->callback_edit_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_edit_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});

        $crud->order_by('update_date','desc');

        $output = $crud->render();
        $this->_general_output($output);
    }


    public function sejarah()
    {
        $this->load->model('Admin_Model', 'get_db');
        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap-v4');
        $crud->set_table('sejarah');
        $crud->display_as("sejarah");
        $crud->set_subject('Sejarah DJK');

        $crud->columns('image', 'title', 'update_date');

        $crud->set_field_upload('image', 'assets/uploads/gallery/');
        $crud->callback_after_upload(array($this, 'resize_images_blog'));

        $crud->callback_add_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_add_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});
        $crud->callback_edit_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_edit_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});

        $crud->order_by('update_date','desc');

        $output = $crud->render();
        $this->_general_output($output);
    }

    public function tugas_fungsi_detail()
    {
        $this->load->model('Admin_Model', 'get_db');
        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap-v4');
        $crud->set_table('tugas_fungsi_detail');
        $crud->display_as("tugas_fungsi_detail");
        $crud->set_subject('Tugas dan Fungsi Detail');

        $crud->columns(
            'foto',
            'nama_bagian',
            'nama_lengkap',
            'jabatan',
            'created_date',
            'update_date'
        );

        $crud->set_relation('id_header',
            'tugas_fungsi_header',
            'deskripsi');

        $crud->set_field_upload('foto', 'assets/uploads/gallery/');
        $crud->callback_after_upload(array($this, 'resize_photo_size'));

        $crud->callback_add_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_add_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});
        $crud->callback_edit_field('update_date', function () {return '<input type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});

        $crud->order_by('update_date','desc');

        $output = $crud->render();
        $this->_general_output($output);
    }

    public function tugas_fungsi_header()
    {
        $this->load->model('Admin_Model', 'get_db');
        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap-v4');
        $crud->set_table('tugas_fungsi_header');
        $crud->display_as("tugas_fungsi_header");
        $crud->set_subject('Tugas dan Fungsi Header');

        $crud->columns(
            'deskripsi',
            'created_date',
            'update_date'
        );

        $crud->callback_add_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_add_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});
        $crud->callback_edit_field('update_date', function () {return '<input type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});

        $crud->order_by('update_date','desc');

        $output = $crud->render();
        $this->_general_output($output);
    }

    public function running_text()
    {
        $this->load->model('Admin_Model', 'get_db');
        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap-v4');
        $crud->set_table('running_text');
        $crud->display_as('running_text');
        $crud->set_subject('Running Text');

        $crud->columns(
            'content',
            'status',
            'update_date'
        );
        $crud->required_fields(array('content'));

        $crud->field_type('status', 'dropdown', array(
                'published' => 'Published', 'draft' => 'Draft'));

        $crud->callback_add_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_add_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});
        $crud->callback_edit_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_edit_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});

        $output = $crud->render();
        $this->_general_output($output);
    }

    public function posts()
    {
        $this->load->model('Admin_Model', 'get_db');
        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap-v4');
        $crud->set_table('posts');
        $crud->display_as('posts');
        $crud->set_subject('posts');

        $crud->columns(
            'is_utama', 'post_date', 'post_type', 'title', 'status', 'created_date', 'update_date'
        );
        $crud->required_fields(array('title', 'post_date'));

        $crud->field_type('post_type', 'dropdown', array(
                'ketenagalistrikan' => 'Ketenagalistrikan',
                'pers' => 'Press',
                'pengumuman' => 'Pengumuman'
            )
        );
        $crud->field_type('status', 'dropdown', array(
                'published' => 'Published',
                'draft' => 'Draft'
            )
        );
        $crud->field_type('is_utama', 'dropdown', array(
                'utama' => 'Utama',
                'non_utama' => 'Non Utama'
            )
        );

        $crud->callback_before_insert(array($this, 'slugify'));
        $crud->callback_before_update(array($this, 'slugify'));

        $crud->set_field_upload('hero_image', 'assets/uploads/berita/');
        $crud->callback_after_upload(array($this, 'resize_images_album'));

        $crud->callback_add_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_add_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});
        $crud->callback_edit_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_edit_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});

        $output = $crud->render();
        $this->_general_output($output);
    }

    public function download_index()
    {
        $this->load->model('Admin_Model', 'get_db');
        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap-v4');
        $crud->set_table('download_index');
        $crud->display_as('download_index');
        $crud->set_subject('Download Index');

        $crud->columns(
            'hero_image', 'title','id_header_info', 'id_category','file', 'published_info', 'status', 'update_date');
        $crud->required_fields(array('title','id_header_info','id_category'));

        $crud->display_as('page','Judul di Halaman')
             ->display_as('title','Nama File Download')
             ->display_as('published_info','Waktu Dibuat (Text)')
             ->display_as('id_category','Kategori')
             ->display_as('id_header_info','Pilih Header')
             ->display_as('hero_image','Cover Image');

        $crud->set_relation('id_header_info', 'header_info', 'title', null, 'title DESC');
        $crud->set_relation('id_category', 'berita_category', '[{kode}] - {title}', null, 'title ASC');

        $crud->field_type('status', 'dropdown', array('published' => 'Published', 'draft' => 'Draft'));
        $crud->field_type('category', 'dropdown',
            array(
                'dipa' => 'Dipa',
                'lakin' => 'Lakin',
                'renstra' => 'Renstra',
                'statistik' => 'Statistik',
                'penetapan' => 'Penetapan Kinerja'
            ));

        $crud->set_field_upload('hero_image', 'assets/uploads/gallery/');
        $crud->callback_after_upload(array($this, 'resize_images_gallery'));
        $crud->set_field_upload('file', 'assets/uploads/download_index/files/');

        $crud->callback_add_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_add_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});
        $crud->callback_edit_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});
        $crud->callback_edit_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});

        $crud->where('1 =', 1);
        $crud->order_by('id_category', 'asc');

        $output = $crud->render();
        $this->_general_output($output);
    }

    public function buletin()
    {
        $this->load->model('Admin_Model', 'get_db');
        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap-v4');
        $crud->set_table('buletin');
        $crud->display_as('buletin');
        $crud->set_subject('Buletin');

        $crud->columns('title', 'hero_image','created_date', 'published_info','file', 'status');
        $crud->display_as('published_info', 'Info Publikasi')
            ->display_as('created_date', 'Tgl. Publikasi');
        $crud->required_fields(array('title', 'published_info'));

        $crud->field_type('status', 'dropdown', array('published' => 'Published', 'draft' => 'Draft'));

        $crud->set_field_upload('hero_image', 'assets/uploads/buletin/');
        $crud->callback_after_upload(array($this, 'resize_images_buletin'));
        $crud->set_field_upload('file', 'assets/uploads/buletin/files');

        $crud->callback_add_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_add_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});
        $crud->callback_edit_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});

        $crud->where('1 =', 1);
        $crud->order_by('created_date', 'desc');

        $output = $crud->render();
        $this->_general_output($output);
    }

    public function struktur_organisasi()
    {
        $this->load->model('Admin_Model', 'get_db');
        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap-v4');
        $crud->set_table('struktur_organisasi');
        $crud->display_as('struktur_organisasi');
        $crud->set_subject('Struktur Org.');

        $crud->columns('title', 'hero_image', 'status', 'update_date');
        $crud->required_fields(array('title'));

        $crud->field_type('status', 'dropdown', array('published' => 'Published', 'draft' => 'Draft'));

        $crud->set_field_upload('hero_image', 'assets/uploads/struktur_organisasi/');
        $crud->callback_after_upload(array($this, 'resize_images_album'));

        $crud->required_fields(array('title'));
        $crud->callback_add_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_add_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});
        $crud->callback_edit_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_edit_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});

        $output = $crud->render();
        $this->_general_output($output);
    }

    public function role_has_menu()
    {
        $this->load->model('Admin_Model', 'get_db');
        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap-v4');
        $crud->set_table('role_has_menu');
        $crud->display_as('role_has_menu');
        $crud->set_subject('role_has_menu');

        $crud->columns('id_role', 'id_menu', 'description');

        $crud->set_relation('id_role','role','name');
        $crud->set_relation('id_menu','menu','name');

        $output = $crud->render();
        $this->_general_output($output);
    }


    public function role()
    {
        $this->load->model('Admin_Model', 'get_db');
        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap-v4');
        $crud->set_table('role');
        $crud->display_as('role');
        $crud->set_subject('role');

        $crud->columns('name', 'description', 'update_date');

        $crud->required_fields(array('name'));
        $crud->callback_add_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_add_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});
        $crud->callback_edit_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_edit_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});

        $crud->order_by('update_date','desc');
        $this->session->set_userdata('menu_sq_session', NULL);

        $output = $crud->render();
        $this->_general_output($output);
    }

    public function document_info()
    {
        $this->load->model('Admin_Model', 'get_db');
        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap-v4');
        $crud->set_table('document_info');
        $crud->display_as('document_info');
        $crud->set_subject('Document Info');

        $crud->columns('name', 'file', 'url', 'status', 'created_date', 'update_date');
        $crud->required_fields(array('name'));

        $crud->field_type('status', 'dropdown', array('published' => 'Published', 'unpublished' => 'Unpublished'));
        $crud->set_field_upload('file', 'assets/uploads/files');

        $crud->callback_add_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_add_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});
        $crud->callback_edit_field('update_date', function () {return '<input type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});

        $crud->where('1 =', 1);
        $crud->order_by('update_date', 'desc');

        $output = $crud->render();
        $this->_general_output($output);
    }

    public function pelayanan_publik()
    {
        $this->load->model('Admin_Model', 'get_db');
        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap-v4');
        $crud->set_table('pelayanan_publik');
        $crud->display_as('pelayanan_publik');
        $crud->set_subject('pelayanan_publik');

        $crud->columns('image', 'url', 'external_url', 'status','created_date', 'update_date');

        $crud->field_type('status', 'dropdown', array('published' => 'Published', 'unpublished' => 'Unpublished'));

        $crud->set_field_upload('image', 'assets/uploads/pelayanan_publik/');
        $crud->callback_after_upload(array($this, 'resize_pelayanan_publik'));

        $crud->required_fields(array('name'));
        $crud->callback_add_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_add_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});
        $crud->callback_edit_field('update_date', function () {return '<input type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});

        $crud->order_by('update_date','desc');
        $this->session->set_userdata('menu_sq_session', NULL);
        $output = $crud->render();
        $this->_general_output($output);
    }

    public function gallery(){
        $this->load->model('Admin_Model', 'get_db');
        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap-v4');
        $crud->set_table('gallery');
        $crud->display_as('gallery');
        $crud->set_subject('gallery');

        $crud->columns('type', 'title', 'description', 'image', 'external_link', 'external_image', 'category', 'status','created_date', 'update_date');

        $crud->field_type('category', 'dropdown',
            array('berkala' => 'Berkala', 'serta_merta' => 'Serta Merta', 'setiap_saat' => 'Setiap Saat', 'lainnya' => 'Lainnya'));
        $crud->field_type('type', 'dropdown',
            array('foto' => 'Foto', 'video' => 'Video'));
        $crud->field_type('status', 'dropdown',
            array('active' => 'Active', 'not_active' => 'Not Active'));
        $crud->unset_fields();

        $crud->set_field_upload('image', 'assets/uploads/gallery/');
        $crud->callback_after_upload(array($this, 'resize_images_album'));

        $crud->required_fields(array('title'));
        $crud->callback_add_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_add_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});
        $crud->callback_edit_field('update_date', function () {return '<input type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});

        $crud->where('1 =', 1);
        $crud->order_by('update_date', 'desc');

        $output = $crud->render();
        $this->_general_output($output);
    }

    public function link_terkait()
    {
        $this->load->model('Admin_Model', 'get_db');
        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap-v4');
        $crud->set_table('link_terkait');
        $crud->display_as('link_terkait');
        $crud->set_subject('link_terkait');

        $crud->columns('name', 'image', 'url', 'status');

        $crud->field_type('status', 'dropdown', array('published' => 'Published', 'unpublished' => 'Unpublished'));

        $crud->set_field_upload('image', 'assets/uploads/link_terkait/');
        $crud->callback_after_upload(array($this, 'resize_link_terkait'));

        $output = $crud->render();
        $this->_general_output($output);
    }

    public function social_media()
    {
        $this->load->model('Admin_Model', 'get_db');
        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap-v4');
        $crud->set_table('social_media');
        $crud->display_as('social_media');
        $crud->set_subject('Social Media');

        $crud->columns('name', 'image', 'url', 'status');

        $crud->field_type('status', 'dropdown', array('published' => 'Published', 'unpublished' => 'Unpublished'));

        $crud->set_field_upload('image', 'assets/uploads/gallery/');
        $crud->callback_after_upload(array($this, 'resize_pelayanan_publik'));

        $crud->callback_add_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_add_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});
        $crud->callback_edit_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_edit_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});

        $crud->where('1 =', 1);
        $crud->order_by('update_date', 'desc');

        $output = $crud->render();
        $this->_general_output($output);
    }

    public function carousel()
    {
        $this->load->model('Admin_Model', 'get_db');
        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap-v4');
        $crud->set_table('carousel_image');
        $crud->display_as('carousel_image');
        $crud->set_subject('Carousel Image');

        $crud->columns('post_date','image_file', 'active', 'carousel_caption', 'id_berita', 'external_link');
        $crud->required_fields(array('post_date'));

        $crud->display_as('active','Status Aktif')
            ->display_as('id_berita','Link ke Berita')
            ->display_as('post_date','Tgl. Posting')
            ->display_as('carousel_caption','Caption Banner');

        $crud->set_relation('id_berita', 'berita', 'title');

        $crud->field_type('active', 'dropdown', array('Yes' => 'Yes', 'No' => 'No'));
        $crud->set_field_upload('image_file', 'assets/uploads/carousel/');
        $crud->callback_after_upload(array($this, 'resize_carousel'));

        $crud->callback_add_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_add_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});
        $crud->callback_edit_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_edit_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});

        $crud->where('1 =', 1);
        $crud->order_by('post_date', 'desc');

        $output = $crud->render();
        $this->_general_output($output);
    }

    public function berita()
    {
        $this->load->model('Admin_Model', 'get_db');
        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap-v4');
        $crud->set_table('berita');
        $crud->display_as('berita');
        $crud->set_subject('Berita' );

        $crud->columns(
            'is_utama', 'hero_image', 'id_category', 'post_date', 'title', 'status', 'update_date'
        );
        $crud->display_as('resume_news', 'Rangkuman Berita (Max 200 karakter)')
            ->display_as('content', 'Konten berita (unlimited karakter)')
            ->display_as('slug', 'Kosongkan, (diisi system)');

        $crud->required_fields(array('post_date'));
        $crud->set_relation('id_category', 'berita_category', 'title');
        //$crud->field_type('slug', 'readonly');
        $crud->field_type('status', 'dropdown', array('published' => 'Published', 'draft' => 'Draft'), $default_value = 'Draft');
        $crud->field_type('is_utama', 'dropdown', array('utama' => 'Utama', 'non_utama' => 'Non Utama'));
        $crud->set_field_upload('hero_image', 'assets/uploads/berita/');
        $crud->set_field_upload('hero_image2', 'assets/uploads/berita/');
        $crud->set_field_upload('hero_image3', 'assets/uploads/berita/');
        $crud->callback_after_upload(array($this, 'resize_images_blog'));
        $crud->callback_before_insert(array($this, 'slugify'));
        $crud->callback_before_update(array($this, 'slugify'));

        $crud->callback_add_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_add_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});
        $crud->callback_edit_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_edit_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});

        $crud->where('1 =', 1);
        $crud->order_by('post_date', 'desc');

        $output = $crud->render();
        $this->_general_output($output);
    }

    function created_date_field($value = '', $primary_key = null)
    {
        return '<input type="hidden" value="' . date("Y-m-d") . '" name="created_date" > ';
    }

    function created_datetime_field($field_info, $value = '')
    {
        return '<input type="" value="' . date("Y-m-d H:i:s") . '" name="'.$field_info.'" > <span>'.$field_info.'</span>';
    }

    public function blog()
    {
        $this->load->model('Admin_Model', 'get_db');
        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap-v4');
        $crud->set_table('blog');
        $crud->display_as('blog');
        $crud->set_subject('blog');

        $crud->columns(
            'slug',
            'title',
            'content',
            'hero_image',
            'status',
            'created_date',
            'update_date'
        );

        $crud->field_type('status', 'dropdown', array(
                'Draft' => 'Draft',
                'Published' => 'Published'
            )
        );

        $crud->set_field_upload('hero_image', 'assets/uploads/gallery/');

        $crud->callback_before_upload(array($this, 'resize_images', null));
        $crud->callback_add_field('created_date', array($this, 'add_default_date'));
        $crud->callback_add_field('update_date', array($this, 'add_default_date'));
        $crud->callback_before_insert('created_date', array($this, 'add_default_date'));

        $crud->callback_add_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_add_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});
        $crud->callback_edit_field('update_date', function () {return '<input type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});
        $crud->where('1 =', 1);
        $crud->order_by('update_date', 'desc');

        $output = $crud->render();
        $this->_general_output($output);
    }

    public function about()
    {
        $this->load->model('Admin_Model', 'get_db');
        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap-v4');
        $crud->set_table('about');
        $crud->display_as('about');
        $crud->set_subject('about');

        $crud->columns(
            'title',
            'contact_phone',
            'contact_fax',
            'website',
            'email',
            'status',
            'created_date',
            'update_date'
        );
        $crud->field_type('status', 'dropdown', array('Active' => 'Active', 'NotActive' => 'Not Active'));

        $crud->callback_add_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_add_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});
        $crud->callback_edit_field('update_date', function () {return '<input type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});

        $crud->where('1 =', 1);
        $crud->order_by('update_date', 'desc');

        $output = $crud->render();
        $this->_general_output($output);
    }

    public function footer()
    {
        $this->load->model('Admin_Model', 'get_db');
        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap-v4');
        $crud->set_table('footer');
        $crud->display_as('footer');
        $crud->set_subject('footer');

        $crud->columns(
            'address',
            'footer_about',
            'footer_email',
            'created_date',
            'update_date'
        );

        $this->session->set_userdata('footer_sq_session', NULL);

        $crud->callback_add_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_add_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});
        $crud->callback_edit_field('update_date', function () {return '<input type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});
        $crud->where('1 =', 1);
        $crud->order_by('update_date', 'desc');

        $output = $crud->render();
        $this->_general_output($output);
    }

    public function menu()
    {
        $this->load->model('Admin_Model', 'get_db');
        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap-v4');
        $crud->set_table('menu');
        $crud->display_as('menu');
        $crud->set_subject('Menu Management');

        $crud->columns(
            'id_parent',
            'id_current',
            'name',
            'url',
            'external_url',
            'update_date'
        );
        $crud->display_as('url', 'Internal URL/ System')
            ->display_as('external_url', 'Eksternal Link');

        /*$crud->set_relation('id_parent', 'menu',
            '{id_parent}/{id_current} - {name}', null, 'id_current ASC');*/

        $crud->set_relation('id_posts', 'posts', 'title', array('status' => 'published'));

        $crud->field_type('icon', 'dropdown',
            array(
                'fa fa-spinner fa-spin' => 'Move Spin',
                'fa fa-circle-o-notch fa-spin' => 'Move Circle O Notch',
                'fa fa-refresh fa-spin' => 'Move Refresh',
                'fa fa-cog fa-spin' => 'Move COG',
                'fa fa-spinner fa-pulse' => 'Move Pulse',

                'glyphicon glyphicon-asterisk' => 'Glyp Asterisk',
                'glyphicon glyphicon-plus' => 'Glyp plus',
                'glyphicon glyphicon-minus' => 'Glyp minus',
                'glyphicon glyphicon-euro' => 'Glyp euro',
                'glyphicon glyphicon-cloud' => 'Glyp cloud',
                'glyphicon glyphicon-envelope' => 'Glyp envelope',
                'glyphicon glyphicon-pencil' => 'Glyp pencil',

                'glyphicon glyphicon-glass  ' => 'Glyp Glass',
                'glyphicon glyphicon-music  ' => 'Glyp Music',
                'glyphicon glyphicon-search ' => 'Glyp Search',
                'glyphicon glyphicon-heart  ' => 'Glyp Heart',
                'glyphicon glyphicon-star   ' => 'Glyp Star',
                'glyphicon glyphicon-star-empty' => 'Glyp Star-empty',
                'glyphicon glyphicon-user   ' => 'Glyp User',
                'glyphicon glyphicon-film   ' => 'Glyp Gilm',
                'glyphicon glyphicon-th-large' => 'Glyp Th-large',
                'glyphicon glyphicon-th     ' => 'Glyp Th',
                'glyphicon glyphicon-th-list' => 'Glyp Th-list',
                'glyphicon glyphicon-ok     ' => 'Glyp Ok',
                'glyphicon glyphicon-remove ' => 'Glyp Remove',
                'glyphicon glyphicon-zoom-in' => 'Glyp Zoom-in',
                'glyphicon glyphicon-zoom-out' => 'Glyp Zoom-out',
                'glyphicon glyphicon-off    ' => 'Glyp Off',
                'glyphicon glyphicon-signal ' => 'Glyp Signal',
                'glyphicon glyphicon-cog    ' => 'Glyp COG',
                'glyphicon glyphicon-trash  ' => 'Glyp Trash',
                'glyphicon glyphicon-home   ' => 'Glyp Home',
                'glyphicon glyphicon-exclamation-sign   ' => 'Glyp Exclamation Sign',

                'glyphicon glyphicon-menu-up' => 'Glyp Menu Up')
        );

        $crud->callback_add_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_add_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});
        $crud->callback_edit_field('created_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="created_date" >';});
        $crud->callback_edit_field('update_date', function () {return '<input readonly type="" value="' . date("Y-m-d H:i:s") . '" name="update_date" >';});

        $crud->order_by('id_current','asc');
        $this->session->set_userdata('menu_sq_session', NULL);

        $output = $crud->render();
        $this->_general_output($output);
    }

    public function user()
    {
        $this->load->model('Admin_Model', 'get_db');

        $crud = new grocery_CRUD();
        $crud->set_theme('bootstrap-v4');
        $crud->set_table('web_user');
        $crud->display_as('User Management');
        $crud->set_subject('User Management');

        $crud->display_as('usr', 'Username ');
        $crud->display_as('psw', 'Password ');
        $crud->display_as('telepon', 'Nomor Telepon (HP)');
        $crud->display_as('email', 'Alamat Email');
        $crud->display_as('real_name', 'Nama');

        $crud->columns('usr', 'real_name', 'telepon', 'type','id_role', 'active');    

        $crud->field_type('psw', 'password');
        $crud->callback_edit_field('psw', array($this, 'edit_field_callback'));

        $crud->field_type('active', 'dropdown', array('Yes' => 'Yes', 'No' => 'No'));
        $crud->set_relation('id_role','role','name');

        $crud->callback_before_insert(array($this, 'encrypt_password_callback'));
        $crud->callback_before_update(array($this, 'update_data_callback'));

        $crud->where('1 =', 1);
        $output = $crud->render();
        $this->_general_output($output);
    }


    /*=================================================================================================================*/
    function resize_images_buletin($uploader_response, $field_info)
    {
        $this->load->library('Image_Moo');
        $file_uploaded_thumbs = $field_info->upload_path . '/thumbs/' . $uploader_response[0]->name;
        $file_uploaded = $field_info->upload_path . '/' . $uploader_response[0]->name;
        $this->image_moo->load($file_uploaded)->resize_crop(THUMB_SIZE_WIDTH, THUMB_SIZE_HEIGHT)->save($file_uploaded_thumbs, true);
        $this->image_moo->load($file_uploaded)->resize_crop(512, 725)->save($file_uploaded, true);
        return true;
    }

    function just_a_test($primary_key , $row)
    {
        $_id_role = 1;

        return site_url('admin/user').'?id_role='.$_id_role;
    }

    function resize_pelayanan_publik($uploader_response, $field_info, $files_to_upload){
        $this->load->library('image_moo');
        //Is only one file uploaded so it ok to use it with $uploader_response[0].
        $file_uploaded = $field_info->upload_path . '/' . $uploader_response[0]->name;
        $this->image_moo->load($file_uploaded)
            ->set_background_colour("#TRANSPARENT")
            ->resize_crop(235, 80)
            ->save($file_uploaded.".png", true);
        return true;
    }
    function add_default_date(){
        return date('Y-m-d');
    }
    function add_default_datetime(){
        return date('Y-m-d H:i:s');
    }
    function resize_link_terkait($uploader_response, $field_info, $files_to_upload){
        $this->load->library('image_moo');
        //Is only one file uploaded so it ok to use it with $uploader_response[0].
        $file_uploaded = $field_info->upload_path . '/' . $uploader_response[0]->name;
        $this->image_moo->load($file_uploaded)
            ->resize_crop(64, 64)
            ->border_3d(4)
            ->save($file_uploaded, true);
        return true;
    }

    function resize_photo_size($uploader_response, $field_info, $files_to_upload)
    {
        $this->load->library('image_moo');
        $file_uploaded = $field_info->upload_path . '/' . $uploader_response[0]->name;
        $this->image_moo->load($file_uploaded)
            ->set_background_colour("#ffffff")
            ->resize_crop(288, 432)
            ->save($file_uploaded, true);
        return true;
    }

    function resize_carousel($uploader_response, $field_info, $files_to_upload){
        $this->load->library('image_moo');
        //Is only one file uploaded so it ok to use it with $uploader_response[0].
        $file_uploaded = $field_info->upload_path . '/' . $uploader_response[0]->name;
        $this->image_moo->load($file_uploaded)
            ->set_background_colour("#ffffff")
            //->resize_crop(972, 405)
            //->resize_crop(1080, 600)
            ->save($file_uploaded, true);
        return true;
    }

    function resize_images_album($uploader_response, $field_info, $files_to_upload){
        $this->load->library('Image_Moo');
        $file_uploaded_thumbs = $field_info->upload_path . '/thumbs/' . $uploader_response[0]->name;
        $file_uploaded = $field_info->upload_path . '/' . $uploader_response[0]->name;
        $this->image_moo->load($file_uploaded)->resize(THUMB_SIZE_WIDTH, THUMB_SIZE_HEIGHT)->save($file_uploaded_thumbs, true);
        $this->image_moo->load($file_uploaded)->resize(700, 500)->save($file_uploaded, true);
        return true;
    }

    function resize_images_blog($uploader_response, $field_info, $files_to_upload){
        $this->load->library('Image_Moo');
        $file_uploaded_thumbs = $field_info->upload_path . '/thumbs/' . $uploader_response[0]->name;
        $file_uploaded = $field_info->upload_path . '/' . $uploader_response[0]->name;
        $this->image_moo->load($file_uploaded)->resize(THUMB_SIZE_WIDTH, THUMB_SIZE_HEIGHT)->save($file_uploaded_thumbs, true);
        $this->image_moo->load($file_uploaded)->resize_crop(700, 500)->save($file_uploaded, true);

        return true;
    }

    function resize_images($uploader_response, $field_info, $files_to_upload)
    {
        $this->load->library('Image_Moo');
        $file_uploaded_thumbs = $field_info->upload_path . '/thumbs/' . $uploader_response[0]->name;
        $file_uploaded = $field_info->upload_path . '/' . $uploader_response[0]->name;
        $this->image_moo->load($file_uploaded)->resize(500, 500)->save($file_uploaded_thumbs, true);
        return true;
    }

    function resize_images_aplikasi($uploader_response, $field_info, $files_to_upload)
    {
        $this->load->library('image_moo');
        $file_uploaded_thumbs = $field_info->upload_path . '/thumbs/' . $uploader_response[0]->name;
        $file_uploaded = $field_info->upload_path . '/' . $uploader_response[0]->name;
        $this->image_moo->load($file_uploaded)->resize(80, 80)->save($file_uploaded_thumbs, true);
        return true;
    }

    function resize_images_event($uploader_response, $field_info, $files_to_upload)
    {
        $this->load->library('image_moo');
        $file_uploaded_thumbs = $field_info->upload_path . '/thumbs/' . $uploader_response[0]->name;
        $file_uploaded = $field_info->upload_path . '/' . $uploader_response[0]->name;
        $this->image_moo->load($file_uploaded)->resize(THUMB_SIZE_WIDTH, THUMB_SIZE_HEIGHT)->save($file_uploaded_thumbs, true);
        $this->image_moo->load($file_uploaded)->resize(500, 350)->save($file_uploaded, true);
        return true;
    }

    function date_field()
    {
        return '<input type="text" maxlength="50"  name="tanggal_input" style="width:400px" value="' . date('Y-m-d') . '" readonly>';
    }

    function resize_images_gallery($uploader_response, $field_info, $files_to_upload)
    {
        $this->load->library('Image_Moo');
        $file_uploaded_thumbs = $field_info->upload_path . '/thumbs/' . $uploader_response[0]->name;
        $file_uploaded = $field_info->upload_path . '/' . $uploader_response[0]->name;
        $this->image_moo->load($file_uploaded)->resize_crop(THUMB_SIZE_WIDTH, THUMB_SIZE_HEIGHT)->save($file_uploaded_thumbs, true);
        $this->image_moo->load($file_uploaded)->resize_crop(GALL_PHOTO_WIDTH, GALL_PHOTO_HEIGHT)->save($file_uploaded, true);

        return true;
    }

    function resize_images_pk($uploader_response, $field_info, $files_to_upload)
    {
        $this->load->library('Image_Moo');
        $file_uploaded_thumbs = $field_info->upload_path . '/thumbs/' . $uploader_response[0]->name;
        $file_uploaded = $field_info->upload_path . '/' . $uploader_response[0]->name;
        $this->image_moo->load($file_uploaded)->resize_crop(THUMB_SIZE_WIDTH, THUMB_SIZE_HEIGHT)->save($file_uploaded_thumbs, true);
        $this->image_moo->load($file_uploaded)->save($file_uploaded, true);

        return true;
    }

    function resize_images_video($uploader_response, $field_info, $files_to_upload)
    {
        $this->load->library('image_moo');
        $file_uploaded = $field_info->upload_path . '/' . $uploader_response[0]->name;
        $this->image_moo->load($file_uploaded)->resize(215, 140)->save($file_uploaded, true);

        return true;
    }

    function update_data_callback($post_array)
    {
        $pass = $post_array['password'];
        if (!empty($pass)) {
            $post_array['password'] = $this->addon->encrypt($post_array['password']);
        } else {
            unset($post_array['password']);
        }
        return $post_array;
    }

    function edit_field_callback($value)
    {
        return '<input type="password" maxlength="50"  name="password" style="width:210px">';
    }

    function encrypt_password_callback($post_array)
    {
        $post_array['psw'] = $this->addon->encrypt($post_array['psw']);
        return $post_array;
    }

    function date_callback($post_array)
    {
        $post_array['tanggal_input'] = date('Y-m-d');
        return $post_array;
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
        if (empty($text)) {return 'n-a';}
        $post_array['slug'] = $text;
        return $post_array;
    }
}