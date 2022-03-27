<?php

class Form extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_form');
    }

    public function register()
    {
        $this->load->view('public/form-register');

        $submit_gui = $this->input->post('submit_gui');

        if($submit_gui)
        {
            $user = $this->input->post('user_name');
            $password = $this->input->post('password');
            $confirm = $this->input->post('confirm');

            if ($password == $confirm) {
                $this->load->model('m_form');
                $this->m_form->insert_member($user, $password);
            }
        }
    }

    public function login()
    {
        $result['data'] = "";
        $this->load->view('public/form-login',$result);

        $submit_gui = $this->input->post('submit_gui');
        if($submit_gui)
        {
            $user = $this->input->post('user_name');
            $password = $this->input->post('password');

            if($result > 0)
            {
                echo "thành công";
                $result['bol'] = $this->m_form->getMember($user,$password);
            }else
            {
                echo "đăng nhập thất bại";
            }
        }

    }

    public function alert($val)
    {
       echo '<script> alert("' .$val .'") </script>';
    }



}