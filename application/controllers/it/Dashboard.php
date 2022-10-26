<?php
class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('it');
            redirect($url);
        };
		$this->load->model('m_pengunjung');
	}
	function index(){
		if($this->session->userdata('akses')=='2'){
			$x['visitor'] = $this->m_pengunjung->statistik_pengujung();
			$this->load->view('it/v_dashboard',$x);
		}else{
			redirect('administrator');
		}
	
	}
	
}