<?php
class Template
{
    protected $CI;

    public function __construct()
    {
        $this->CI =& get_instance();
    }

    function campaign($template = NULL, $data = NULL)
    {
        if ($template != NULL) {
            //head
            $data['_meta'] = $this->CI->load->view('_layout/campaign/_meta', $data, TRUE);
            $data['_css'] = $this->CI->load->view('_layout/campaign/_css', $data, TRUE);
            //HEADER
            $data['_navigation'] = $this->CI->load->view('_layout/campaign/_navigation', $data, TRUE);
            //CONTENT
            $data['_mainContent'] = $this->CI->load->view($template, $data, TRUE);
            //FOOTER
            $data['_footer'] = $this->CI->load->view('_layout/campaign/_footer', $data, TRUE);
            //JS
            $data['_js'] = $this->CI->load->view('_layout/campaign/_js', $data, TRUE);
            //TEMPLATE
            echo $data['_template'] = $this->CI->load->view('_layout/campaign/template', $data, TRUE);
        }
    }

    function front($template = NULL, $data = NULL)
    {
        if ($template != NULL) {
            //head
            $data['_meta'] = $this->CI->load->view('_layout/frontend/_meta', $data, TRUE);
            $data['_css'] = $this->CI->load->view('_layout/frontend/_css', $data, TRUE);
            //HEADER
            /*$data['_header_masthead'] = $this->CI->load->view('_layout/frontend/_header_masthead', $data, TRUE);*/
            $data['_nav_logo'] = $this->CI->load->view('_layout/frontend/_nav_logo', $data, TRUE);
            $data['_nav_menu_header'] = $this->CI->load->view('_layout/frontend/_nav_menu_header', $data, TRUE);
            //CONTENT
            $data['_mainContent'] = $this->CI->load->view($template, $data, TRUE);
            //FOOTER
            $data['_footer'] = $this->CI->load->view('_layout/frontend/_footer', $data, TRUE);
            //JS
            $data['_js'] = $this->CI->load->view('_layout/frontend/_js', $data, TRUE);
            //TEMPLATE
            echo $data['_template'] = $this->CI->load->view('template', $data, TRUE);
        }
    }

    function berita($template = NULL, $data = NULL)
    {
        if ($template != NULL) {
            $data['_meta'] = $this->CI->load->view('_layout/frontend/_meta', $data, TRUE);
            $data['_css'] = $this->CI->load->view('_layout/frontend/_css', $data, TRUE);
            //HEADER
            /*$data['_header_masthead'] = $this->CI->load->view('_layout/frontend/_header_masthead', $data, TRUE);*/
            $data['_nav_logo'] = $this->CI->load->view('_layout/frontend/_nav_logo', $data, TRUE);
            $data['_nav_menu_header'] = $this->CI->load->view('_layout/frontend/_nav_menu_header', $data, TRUE);
            //CONTENT
            $data['_mainContent'] = $this->CI->load->view($template, $data, TRUE);
            //FOOTER
            $data['_footer'] = $this->CI->load->view('_layout/frontend/_footer', $data, TRUE);
            //JS
            $data['_js'] = $this->CI->load->view('_layout/frontend/_js', $data, TRUE);
            //BERITA
            echo $data['_berita_layout'] = $this->CI->load->view('berita_layout', $data, TRUE);
        }
    }
}