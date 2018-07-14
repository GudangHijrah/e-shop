<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: hendra.kurniawan88
 * Date: 01/05/2018
 * Time: 14:20
 */
class Partners extends CI_Controller
{
    public static $_tgl_info = '';

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('tgl_indo_helper');
    }

    public function index()
    {
        $param = '';
        $id_partner = @$_GET['kode'];

        $data[''] = '';
        $data['_settings'] = $this->db->query("select * from campaign_settings ORDER BY update_date DESC")->row();

        if ($id_partner != null){
            $param = 'and p.kode = "'.$id_partner.'"';
        }

        $query_partner = "SELECT x.* FROM(
            SELECT 
                '1_header' as type,
                p.id as id_header,
                null as id_dt,
                p.nama as nama,
                p.alamat as title,
                null as deskripsi,
                null as deskripsi_2,                
                p.image as image,
                null as image_dt1,
                null as image_dt2,
                null as video,
                null as tgl,
                null as status
            FROM partner p WHERE 1 = 1 ". $param ."
            UNION
            SELECT
                '2_detail' as type,
                dt.id_partner as id_header,	
                dt.id as id_dt,
                null as nama,
                null as title,
                dt.sejarah as deskripsi,
                dt.program_unggulan as deskripsi_2,                
                null as image,
                dt.image_dt1 as image_dt1,
                dt.image_dt2 as image_dt2,
                dt.url_video as video,
                dt.tgl_gabung as tgl,
                null as status
            FROM partner_dt dt 
            LEFT JOIN partner p ON p.id = dt.id_partner
                WHERE 1 = 1 ". $param ."
            UNION
            SELECT 
                '3_person' as type,
                pers.id_partner as id_header,	
                null as id_dt,
                pers.nama as nama,
                pers.jabatan as title,
                pers.deskripsi as deskripsi,
                null as deskripsi_2,
                pers.image as image,
                null as image_dt1,
                null as image_dt2,
                null as video,
                null as tgl,
                pers.status as status
            FROM partner_person pers 
            LEFT JOIN partner p ON p.id = pers.id_partner
                WHERE 1 = 1 ". $param ."
            UNION
            SELECT 
                '4_gallery' as type,
                g.id_partner as id_header,	
                null as id_dt,
                g.title as nama,
                null as title,
                g.deskripsi as deskripsi,
                null as deskripsi_2,
                g.image as image,
                null as image_dt1,
                null as image_dt2,
                null as video,
                null as tgl,
                g.status as status
            FROM partner_gallery g 
            LEFT JOIN partner p ON p.id = g.id_partner
            WHERE 1 = 1 ". $param ."
        )x ORDER BY x.id_header asc, x.type asc;";

        $data['_partner'] = $this->db->query($query_partner)->result();
        $this->template->campaign('campaign/partner_1', $data);
    }

}