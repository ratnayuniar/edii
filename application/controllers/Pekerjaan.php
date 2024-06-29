<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pekerjaan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');

	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	public function index()
	{
        $data['idUser'] = $this->session->userdata('idUser');
        $data['data'] = $this->m_data->tampilPekerjaan($data);
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('pekerjaan/pekerjaan',$data);
	}

    public function formTambahPekerjaan()
	{
		$this->load->view('pekerjaan/formTambah');
	}

    public function simpanPekerjaan()
	{
		$data['idUser'] = $this->session->userdata('idUser');
        $idBiodata = $this->m_data->getIdBiodata($data);
        foreach($idBiodata as $id){
            $data['idBiodata'] = $id['idBiodata'];
        }

		$data['nama'] = $this->input->post('nama');
        $data['posisi'] = $this->input->post('posisi');
        $data['pendapatan'] = $this->input->post('pendapatan');
        $data['tahun'] = $this->input->post('tahun');

        $simpan = $this->m_data->simpanPekerjaan($data);

		if ($simpan == TRUE){
			echo "sukses";
		}else{
			echo "gagal";
		}
	}
}
