<?php
class Tulisan extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_tulisan');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){
		$kode = $this->session->userdata('idadmin');
		$x['user'] = $this->m_pengguna->get_pengguna_login($kode);
		// $x['data'] = $this->m_tulisan->get_all_tulisan_admin($kode);
		$x['data'] = $this->m_tulisan->get_all_tulisan();
		$this->load->view('be/v_tulisan',$x);
	}
	function add_tulisan(){
		$this->load->view('be/v_add_tulisan');
	}
	function get_edit(){
		$kode=$this->uri->segment(4);
		$x['data']=$this->m_tulisan->get_tulisan_by_kode($kode);
		$this->load->view('be/v_edit_tulisan',$x);
	}
	function simpan_tulisan(){
		
		$kategori_nama = $this->input->post('xcategory');
		$status = $this->input->post('xstatus');
		$judul=strip_tags($this->input->post('xjudul'));
		$isi=$this->input->post('xisi');
		$string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $judul);
		$trim     = trim($string);
		$slug     = strtolower(str_replace(" ", "-", $trim));
		$kode=$this->session->userdata('idadmin');
		$user=$this->m_pengguna->get_pengguna_login($kode);
		$p=$user->row_array();
		$user_id=$p['pengguna_id'];
		$user_nama=$p['pengguna_nama'];
		$user_dept=$p['pengguna_dept_id'];
		$this->m_tulisan->simpan_tulisan($judul,$isi,$kategori_nama,$status);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/tulisan');
				

	}

	function update_tulisan(){
	    $tulisan_id=$this->input->post('kode');
	    $kategori_nama = $this->input->post('xcategory');
	    $status = $this->input->post('xstatus');
	    $judul=strip_tags($this->input->post('xjudul'));
		$isi 			= $this->input->post('xisi');
		$string   		= preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $judul);
		$trim     		= trim($string);
		$slug     		= strtolower(str_replace(" ", "-", $trim));
		$imgslider='0';
		$kode=$this->session->userdata('idadmin');
		$user=$this->m_pengguna->get_pengguna_login($kode);
		$p=$user->row_array();
		$user_id=$p['pengguna_id'];
		$user_nama=$p['pengguna_nama'];
		$this->m_tulisan->update_tulisan($tulisan_id,$judul,$isi,$kategori_nama,$status);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/tulisan');                
	}

	function hapus_tulisan(){
		$kode=$this->input->post('kode');
		$this->m_tulisan->hapus_tulisan($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/tulisan');
	}

}
