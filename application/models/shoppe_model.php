<?php

class Shoppe_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getSanpham($id = false)
    {
        $query = $this->db;
        if ($id) {
            $query = $query->where('id', $id);
        }
        $query = $query->get('sanpham');
        return $query->result_array();
    }

    public function count_sp()
    {
        return $this->db->get('sanpham')->num_rows();
    }

    public function getRelation($sp_id, $type = 'size')
    {
        return $this->db->select("$type.id, $type.name")
            ->from('sanpham_relation')
            ->join($type, "$type.id = sanpham_relation.foregin_id and sanpham_relation.type = '$type'", 'left')
            ->where('sanpham_relation.sp_id', $sp_id)
            ->where('sanpham_relation.type', $type)
            ->get()
            ->result_array();
    }

}
