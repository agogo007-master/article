<?php
class Under_contruction extends CI_Controller{
	function __construct(){
		parent::__construct();
	}
	function index(){
		$this->load->view('fe/v_under_contruction');
	}
}
