<?php
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_tulisan');
	}
	function index(){
		$x['berita']=$this->m_tulisan->get_berita_home_en();
		$this->load->view('fe/v_home',$x);
	}

}
