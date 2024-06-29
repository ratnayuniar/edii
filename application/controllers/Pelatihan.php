<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelatihan extends CI_Controller {

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
        $data['data'] = $this->m_data->tampilPelatihan($data);
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('pelatihan/pelatihan',$data);
	}

    public function formTambahPelatihan()
	{
		$this->load->view('pelatihan/formTambah');
	}

    public function simpanPelatihan()
	{
		$data['idUser'] = $this->session->userdata('idUser');
        $idBiodata = $this->m_data->getIdBiodata($data);
        foreach($idBiodata as $id){
            $data['idBiodata'] = $id['idBiodata'];
        }

		$data['nama'] = $this->input->post('nama');
        $data['sertifikat'] = $this->input->post('sertifikat');
        $data['tahun'] = $this->input->post('tahun');

        $simpan = $this->m_data->simpanPelatihan($data);

		if ($simpan == TRUE){
			echo "sukses";
		}else{
			echo "gagal";
		}
	}   
}
