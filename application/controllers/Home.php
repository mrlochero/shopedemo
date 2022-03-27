<?php
class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		// load model;
		$this->load->model('shoppe_model');
		$this->load->model('m_form');
	}

	public function index($id = 1) {

        //page phân trang
            //số sản phẩm hiển thị
            $row = 1 ;
            //vị trí lấy ra các sản phẩm
            $from = ($id - 1) * $row ;
            // đếm số sp
            $count = $this->m_form->shoppe_model->count_sp();
            // số page
            $result['counts'] = ceil($count / $row);

        // giới hạn sp hiện thị
        $this->db->limit($row,$from);
        // tìm kiếm và get sản phẩm
        $key = $this->input->post('key');
        $result['data'] = $this->m_form->search2($key);
        $result['data2'] = $this->Pages();

        // load view
        $this->load->view('public/index',$result);
	}

	public function Pages()
    {
        $this->load->library('pagination');

        $config = array (
        'base_url' => base_url('shopedemo/home'),
        'total_rows' => 5,
        'per_page' => 2,
        'next_link' => 'Next',
        'prev_link' => 'Prev',
        );
        return $this->pagination->create_links();
    }


}
