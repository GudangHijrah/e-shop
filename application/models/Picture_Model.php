<?php

/**
 * Created by PhpStorm.
 * User: hendra.kurniawan88
 * Date: 30/03/2018
 * Time: 21:23
 */
class Picture_Model extends CI_Model
{
    public function __construct() {
        parent::__construct();
    }

    public function record_count() {
        return $this->db->count_all("gallery_foto");
    }

    public function fetch_pictures($limit, $start, $where) {

        $this->db->where('(1 = 1 '.$where.' )');
        $this->db->order_by('created_date', 'desc');
        $this->db->limit($limit, $start);
        $query = $this->db->get("gallery_foto");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }
}