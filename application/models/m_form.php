<?php

class M_form extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insert_member($user, $password,$per = 0)
    {
        $member = array('user_name'=>$user, 'pass_word'=>$password, 'per'=>$per);
        if($this->db->insert('member', $member) )
        {
            echo 'bạn đã đăng ký thành công';
        }
    }

    public function getMember($user,$password)
    {
        $this->db->where('user_name', $user);
        $this->db->where('pass_word', $password);

        return $this->db->get('member')->num_rows();
    }

    public function search2($key)
    {
        $this->db->like('name',$key);
        return $this->db->get('sanpham')->result_array();
    }
}