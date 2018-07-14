<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index(){
        $isSelected = $this->input->get('active');
        $data = array(
            'title' => 'Home',
            'heading' => 'My Heading',
            'message' => 'My Message',
            'selected' => $isSelected
        );

        $query_profile = $this->db->query('select * from home_profile where active=\'Yes\'');
        $profile['judul'] = '';
        $profile['deskripsi'] = '';
        foreach ($query_profile->result() as $row) {
            $profile['judul'] = $row->judul;
            $profile['deskripsi'] = $row->deskripsi;
        }

        $data['profile'] = $profile;
        //$this->load->view('page_home', $data);
        //$this->load->view('frontend/page_dashboard', $data);
        //$this->load->view('frontend/page_tentang_kami', $data);


        $query_about_image = $this->db->query('select * from carousel_image where active=\'Yes\'');
        $image['img'] = '';
        $images = array();
        foreach ($query_about_image->result() as $row) {
            if (trim($row->image_file) != '') {
                $image['img'] = $row->image_file;
                $image['carousel_caption'] = $row->carousel_caption;
                $image['external_link'] = $row->external_link;
            }
            array_push($images, $image);
        }
        $data['profile'] = $profile;
        $data['images'] = $images;
        $this->load->view('frontend/page_dashboard', $data);
    }

    public function tentang_kami(){
        $this->load->view('frontend/page_tentang_kami');
    }

    public function tabs(){
        $this->load->view('frontend/tabs');
    }

    public function sejarah_singkat(){
        $this->load->view('frontend/page_sejarah_singkat');
    }

    public function page_blog(){
        $this->load->view('frontend/page_blog');
    }

    public function page_coming_soon(){
        $this->load->view('coming_soon');
    }

    public function page(){
        $slug = $this->input->get('slug');
        if($slug == 'tab-1'){
            $isSelected = $this->input->get('active');
            $data = array(
                'title' => 'My Title - '.$slug,
                'heading' => 'My Heading',
                'message' => 'My Message',
                'selected' => $isSelected
            );
            $this->load->view('page_psm', $data);
        }elseif($slug == 'tab-2'){
            $isSelected = $this->input->get('active');
            $data = array(
                'title' => 'My Title - '.$slug,
                'heading' => 'My Heading',
                'message' => 'My Message',
                'selected' => $isSelected
            );
            $this->load->view('page_home', $data);
        }
    }

    /**
     * Get Download PDF File
     *
     * @return Response
     */
    function mypdf(){
        $this->load->library('pdf');

        $this->pdf->load_view('mypdf');
        $this->pdf->render();

        $this->pdf->stream("welcome.pdf");
    }

}
