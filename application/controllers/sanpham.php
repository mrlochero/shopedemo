<?php

class Sanpham extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('shoppe_model');
    }

    public function index($id)
    {
        $result['data'] = $this->shoppe_model->getSanpham($id);
        $result['data'][0]['size'] = $this->shoppe_model->getRelation($id, 'size');
        $result['data'][0]['color'] = $this->shoppe_model->getRelation($id,'color');
        $this->load->view('public/sanpham', $result);

    }

}