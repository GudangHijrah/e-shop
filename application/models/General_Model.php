<?php

class general_Model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_data_ref($table, $order = false)
    {
        $this->db->select('*');
        $this->db->from($table);
        if ($order != false) $this->db->order_by($order, 'ASC');
        return $this->db->get();
    }

    public function get_data_select($table, $where = false, $limit = false, $order = false, $order_id = false)
    {
        $this->db->select('*');
        $this->db->from($table);
        if ($where != false) {
            $this->db->where($where, null, false);
        }
        if ($limit != false) {
            $this->db->limit($limit);
        }
        if ($order != false) {
            $this->db->order_by($order_id, $order);
        }
        return $this->db->get();
    }

    public function get_data_select_artikel($table, $where = false, $limit = false, $order = false)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join("web_kategori_artikel", "web_artikel.kategori=web_kategori_artikel.id_web_kategori_artikel");
        if ($where != false) {
            $this->db->where($where, null, false);
        }
        if ($limit != false) {
            $this->db->limit($limit);
        }
        if ($order != false) {
            $this->db->order_by('id_artikel', $order);
        }
        return $this->db->get();
    }

    public function get_combo_data_ref($table, $value, $view)
    {
        $combo = "";
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('active', 'Yes');
        $query = $this->db->get();
        foreach ($query->result_array() as $row) {
            $combo .= "<option value='" . $row[$value] . "'>" . $row[$view] . "</option>";
        }
        return $combo;
    }

    public function getListSatker($search = false, $limit = false, $start = false)
    {
        $this->db->select('*');
        $this->db->from('mt_satuan_kerja');
        $this->db->join('mt_wilayah', 'mt_satuan_kerja.propinsi_wilayah=mt_wilayah.propinsi_wilayah', 'left');
        if ($search != false && $search['wilayah'] != '0') $this->db->where('mt_satuan_kerja.propinsi_wilayah', $search['wilayah']);
        if ($search != false && $search['balai'] != '0') $this->db->where('mt_wilayah.nama_wilayah', $search['balai']);

        if ($this->session->userdata('CATEGORY') == 'Satker') {
            $this->db->where('mt_satuan_kerja.id_m_satuan_kerja', $this->session->userdata('SATKER'));
        }
        if ($this->session->userdata('CATEGORY') == 'Wilayah') {
            $this->db->where('mt_wilayah.id_m_wilayah', $this->session->userdata('WILAYAH'));
        }
        $this->db->order_by('nama_satuan_kerja', 'ASC');
        $this->db->limit($limit, $start);
        return $this->db->get();

    }

    public function getTotalSatker($search = false)
    {
        $this->db->select('count(*) as total');
        $this->db->from('mt_satuan_kerja');
        $this->db->join('mt_wilayah', 'mt_satuan_kerja.propinsi_wilayah=mt_wilayah.propinsi_wilayah', 'left');
        if ($search != false && $search['wilayah'] != '0') $this->db->where('mt_satuan_kerja.propinsi_wilayah', $search['wilayah']);
        if ($search != false && $search['balai'] != '0') $this->db->where('mt_wilayah.nama_wilayah', $search['balai']);
        if ($this->session->userdata('CATEGORY') == 'Satker') {
            $this->db->where('mt_satuan_kerja.id_m_satuan_kerja', $this->session->userdata('SATKER'));
        }
        if ($this->session->userdata('CATEGORY') == 'Wilayah') {
            $this->db->where('mt_wilayah.id_m_wilayah', $this->session->userdata('WILAYAH'));
        }
        return $this->db->get();
    }

    public function getListWilayah()
    {
        $this->db->select('*');
        $this->db->from('mt_wilayah');
        $this->db->order_by('propinsi_wilayah', 'ASC');
        return $this->db->get();

    }

    public function getDistinctWilayah()
    {
        $this->db->select('distinct(nama_wilayah) as wilayah');
        $this->db->from('mt_wilayah');
        $this->db->order_by('nama_wilayah', 'ASC');
        return $this->db->get();

    }

    public function getPeriode($type = false)
    {
        $this->db->select('*');
        $this->db->from('mt_periode');
        return $this->db->get();


    }

    public function getRealisasiSatker($satker = false, $periode = false)
    {

        $this->db->select('*');
        $this->db->from('t_realisasi_sp3');
        $this->db->where('id_m_satuan_kerja', $satker);
        $this->db->where('id_m_periode', $periode);
        return $this->db->get();
    }


    function update_data($data, $id, $id_primary, $table)
    {
        $this->db->where($id_primary, $id);
        $this->db->update($table, $data);
        return TRUE;
    }

    function add_data($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    function delete_data($table, $id)
    {
        return $this->db->delete($table, $id);
    }


    public function get_column_table($table)
    {
        return $this->db->query("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name='" . $table . "'");

    }
}