<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
        $this->load->model('Login_Model', 'get_db');
    }

    public function index()
    {
        $this->load->view('inc/header');
        $this->load->view('frontend/login');
    }

    public function control()
    {
        $this->load->view('admin/login');
    }

    public function registration()
    {
        $this->load->view('inc/header');
        $data['get_type_user'] = $this->get_db->get_combo_data_ref('ref_type_user', 'id_type_user', 'type_user');
        $data['get_fakultas'] = $this->get_db->get_combo_data_ref('ref_fakultas', 'id_fakultas_data', 'fakultas');
        $this->load->view('frontend/registration', $data);
        $this->load->view('inc/footer');
    }

    public function control_login()
    {
        $_username = $this->input->post('username');
        $_password = $this->input->post('password');
        if (!isset($_username) || !isset($_password) || empty($_username) || empty($_password)) {
            echo 'Login Error';
        } else {
            $checkusr = 0;
            $_password = $this->addon->encrypt($_password);
            $checkdb = $this->get_db->auth_login_control($_username, $_password);

            foreach ( $checkdb->result_array() as $row ) {
                $checkusr = 1;
                $_username = $row['usr'];
                $id_web_user = $row['id_web_user'];
                $real_name = $row['real_name'];
                $email = $row['email'];
                $type = $row['type'];
                $act = $row['active'];
                $_id_role = $row['id_role'];
            }

            if ($checkusr == 1) {
                if ($act == 'No') {
                    echo 'Afwan, status user Antum TIDAK AKTIF, silahkan hubungi Administrator.';
                    echo "<br><span class='btn btn-danger'><a class='btn btn-default' href='" . base_url() . "index.php/login/control'> Afwan, silahkan coba lagi. </a></span>";
                } else if ($act == 'Yes') {
                    $_user_role = $this->get_db->getRoleByIdRole($_id_role)->row();
                    $_role_menu = $this->get_db->getMenuByRole($_id_role)->result();

                    $this->session->set_userdata('ID_WEB_USER', $id_web_user);
                    $this->session->set_userdata('WEB_USR', $_username);
                    $this->session->set_userdata('WEB_REAL_NAME', $real_name);
                    $this->session->set_userdata('WEB_EMAIL', $email);
                    $this->session->set_userdata('WEB_TYPE', $type);
                    $this->session->set_userdata('WEB_ACTIVE', $act);
                    $this->session->set_userdata('ROLE', $_user_role);
                    $this->session->set_userdata('ROLE_MENU', $_role_menu);

                    redirect(base_url() . 'admin/role');
                } else {
                    echo 'USER_SUCCESS_ERROR';
                    echo "<br><a class='btn btn-default' href='" . base_url() . "index.php/login/control'> Afwan, silahkan coba lagi. </a>";
                }
            } else {
                echo 'Afwan, Username or password salah';
                echo "<br><span class='btn btn-danger'>
                            <a class='btn btn-default' href='" . base_url() . "index.php/login/control'> Afwan, silahkan coba lagi. </a>
                          </span>";
            }
        }
    }

    public function login_check()
    {
        $usr = $this->input->post('usr');
        $psw = $this->input->post('psw');
        if (!isset($usr) || !isset($psw) || empty($usr) || empty($psw)) {
            echo 'USRERROR';
        } else {
            $checkusr = 0;
            $checkdb = $this->get_db->auth_login($usr, $psw);
            $user_id = '';
            $usr = '';
            $psw = '';
            $nama_lengkap = '';
            $act = '';
            $foto = '';
            foreach ($checkdb->result_array() as $row) {
                $checkusr = 1;
                $usr = $row['username'];
                $user_id = $row['id_user'];
                $nama_lengkap = $row['nama_lengkap'];
                $act = $row['active'];
                $foto = $row['foto'];
                $foto_real = $row['foto'];
            }
            if ($checkusr == 1) {
                if ($act == 'No') {
                    echo 'USRNOTREGISTER';
                } else if ($act == 'Yes') {
                    $this->session->set_userdata('ID_USER', $user_id);
                    $this->session->set_userdata('USR', $usr);
                    if ($foto == 'no_pic.gif') $foto = 'no_photo.jpg';
                    $this->session->set_userdata('FOTO', $foto);
                    $this->session->set_userdata('REAL_FOTO', $foto_real);
                    $this->session->set_userdata('NAMA_LENGKAP', $nama_lengkap);
                    $this->session->set_userdata('ACTIVE', $act);
                    $this->session->set_userdata('TYPE', 'USER');
                    echo 'Authentication Success';
                } else {
                    echo 'Authentication Error';
                }

            } else if ($checkusr == 0) {
                    $checkdbkonselor = $this->get_db->auth_login_konselor($this->input->post('usr'),
                    $this->input->post('psw'));
                foreach ($checkdbkonselor->result_array() as $row) {
                    $usr = $row['username'];
                    $user_id = $row['id_konselor'];
                    $nama_lengkap = $row['nama_lengkap'];
                    $act = $row['active'];
                    $foto = $row['foto'];
                }

                if ($act == 'No') {
                    echo 'USRNOTREGISTER';
                } else if ($act == 'Yes') {
                    $this->session->set_userdata('ID_USER', $user_id);
                    $this->session->set_userdata('USR', $usr);
                    $this->session->set_userdata('FOTO', $foto);
                    $this->session->set_userdata('NAMA_LENGKAP', $nama_lengkap);
                    $this->session->set_userdata('ACTIVE', $act);
                    $this->session->set_userdata('TYPE', 'KONSELOR');
                    echo 'USRSUCCESS';
                } else {
                    echo 'USRSUCCESSERROR';
                }
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url() . '');
    }

    public function logout_control()
    {
        $this->session->sess_destroy();
        redirect(base_url() . '');
    }
}
