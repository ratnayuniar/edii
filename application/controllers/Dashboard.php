<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	public function index()
	{
		$data['level'] = $this->session->userdata('level');
		$this->load->view('header');
		if($data['level'] == 1){

			$this->load->view('navbar',$data);
		}else{
			$this->load->view('navbarAdmin');

		}
		$this->load->view('dashboard');
	}
}
