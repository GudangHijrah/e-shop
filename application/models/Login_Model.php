<?php

class Login_Model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function auth_login($user, $pass)
    {
        $this->db->select('*');
        $this->db->from('t_user');
        $this->db->where('username', $user);
        $this->db->where('pass', $pass);
        return $this->db->get();
    }

    public function auth_login_control($user, $pass)
    {
        $this->db->select('*');
        $this->db->from('web_user');
        $this->db->where('usr', $user);
        $this->db->where('psw', $pass);
        return $this->db->get();
    }

    public function getRoleByIdRole($_id_role)
    {
        $this->db->select('*');
        $this->db->from('role');
        $this->db->where('id', $_id_role);
        return $this->db->get();
    }

    public function getMenuByRole($_id_role)
    {
        $this->db->select('*');
        $this->db->from('role_has_menu');
        $this->db->where('id_role', $_id_role);
        return $this->db->get();
    }


}		