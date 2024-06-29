<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendidikan extends CI_Controller {

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
        $data['data'] = $this->m_data->tampilPendidikan($data);
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('pendidikan/pendidikan',$data);
	}

    public function formTambahPendidikan()
	{
		$this->load->view('pendidikan/formTambah');
	}

    public function simpanPendidikan()
	{
		$data['idUser'] = $this->session->userdata('idUser');
        $idBiodata = $this->m_data->getIdBiodata($data);
        foreach($idBiodata as $id){
            $data['idBiodata'] = $id['idBiodata'];
        }

		$data['jenjang'] = $this->input->post('jenjang');
        $data['nama'] = $this->input->post('nama');
        $data['jurusan'] = $this->input->post('jurusan');
        $data['tahun'] = $this->input->post('tahun');
        $data['ipk'] = $this->input->post('ipk');

        $simpan = $this->m_data->simpanPendidikan($data);

		if ($simpan == TRUE){
			echo "sukses";
		}else{
			echo "gagal";
		}
	}
}
