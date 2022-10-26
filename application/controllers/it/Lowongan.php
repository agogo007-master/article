<?php
class Lowongan extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('it');
            redirect($url);
        };
		$this->load->model('m_lowongan');
	}


	function index(){
		$x['data']=$this->m_lowongan->get_all_lowongan();
		$this->load->view('it/v_lowongan',$x);
	}

	function simpan_lowongan(){
		$lowongan=strip_tags($this->input->post('xlowongan'));
		$status=strip_tags($this->input->post('xstatus'));
		$this->m_lowongan->simpan_lowongan($lowongan,$status);
		echo $this->session->set_flashdata('msg','success');
		redirect('it/lowongan');
	}

	function update_lowongan(){
		$kode = strip_tags($this->input->post('kode'));
		$lowongan = strip_tags($this->input->post('xlowongan'));
		$status = strip_tags($this->input->post('xstatus')); 
		$this->m_lowongan->update_lowongan($kode,$lowongan,$status);
		echo $this->session->set_flashdata('msg','info');
		redirect('it/lowongan');
	}

	// function hapus_kategori(){
	// 	$kode=strip_tags($this->input->post('kode'));
	// 	$this->m_kategori->hapus_kategori($kode);
	// 	echo $this->session->set_flashdata('msg','success-hapus');
	// 	redirect('it/kategori');
	// }

}
