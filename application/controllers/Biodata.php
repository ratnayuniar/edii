<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_biodata');

	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	public function index()
	{
        $data['idUser']= $this->session->userdata('idUser');
        $level= $this->session->userdata('level');
		$data['data'] = $this->m_biodata->tampilBiodata($data);
		$tampil = $this->m_biodata->hitungBiodata($data);
		foreach($tampil as $t){
			$jml=$t['jumlah'];
		}
		$this->load->view('header');
		if($level == 2){
			$data['data'] = $this->m_biodata->tampilBiodataAll($data);
			$this->load->view('navbarAdmin');
			$this->load->view('biodata/dataBiodata',$data);
		}else if($jml== 0){
			$this->load->view('navbar');
			$this->load->view('biodata/inputBiodata');
		}else{
			$this->load->view('navbar');
			$this->load->view('biodata/biodata',$data);
		}

		// if($level == 2){
		// 	$data['data'] = $this->m_biodata->tampilBiodataAll($data);
		// 	$this->load->view('biodata/dataBiodata',$data);
		// }

		
		// $this->load->view('header');
		// $this->load->view('navbar');
		// $this->load->view('biodata/biodata');
		
	}

    public function formTambah()
	{
		$data['level'] = $this->session->userdata('level');
		$this->load->view('header');
		$this->load->view('navbar',$data);
		$this->load->view('masterData/kendaraan/formTambah');
	}

    public function formTambahPendidikan()
	{
		$this->load->view('pendidikan/formTambah');
	}

    public function formEditBarang()
	{
		$id = $this->input->post('id');
        $data['data'] = $this->m_masterData->editBarang($id);
		// $data['id'] = $this->input->post('id');
		$this->load->view('masterData/barang/formEdit',$data);
		// $this->load->view('masterData/barang/formTambah');

	}

    public function formHapus()
	{
		$id['id'] = $this->input->post('id');
        // $data['data'] = $this->m_masterData->editBarang($id);
		// $data['id'] = $this->input->post('id');
		$this->load->view('masterData/barang/formHapus',$id);
		// $this->load->view('masterData/barang/formTambah');

	}

    public function simpanBiodata()
	{
		$data['posisi']         = $this->input->post('posisi');
        $data['nama']           = $this->input->post('nama');
        $data['ktp']            = $this->input->post('ktp');
        $data['ttl']            = $this->input->post('ttl');
        $data['jenkel']         = $this->input->post('jenkel');
        $data['agama']          = $this->input->post('agama');
        $data['golDarah']       = $this->input->post('golDarah');
        $data['status']         = $this->input->post('status');
        $data['alamatKtp']      = $this->input->post('alamatKtp');
        $data['alamatDom']      = $this->input->post('alamatDom');
        $data['email']          = $this->input->post('email');
        $data['telp']           = $this->input->post('telp');
        $data['urgent']         = $this->input->post('urgent');
        $data['skill']          = $this->input->post('skill');
        $data['penempatan']     = $this->input->post('penempatan');
        $data['gaji']           = $this->input->post('gaji');
        $data['idUser']         = $this->session->userdata('idUser');

        $simpan = $this->m_biodata->simpanBiodata($data);

		// $this->load->view('masterData/barang/formTambah');
		if ($simpan == TRUE){
			echo "sukses";
		}else{
			echo "gagal";
		}
	}

    public function editBiodata()
	{
		$data['posisi']         = $this->input->post('posisi');
        $data['nama']           = $this->input->post('nama');
        $data['ktp']            = $this->input->post('ktp');
        $data['ttl']            = $this->input->post('ttl');
        $data['jenkel']         = $this->input->post('jenkel');
        $data['agama']          = $this->input->post('agama');
        $data['golDarah']       = $this->input->post('golDarah');
        $data['status']         = $this->input->post('status');
        $data['alamatKtp']      = $this->input->post('alamatKtp');
        $data['alamatDom']      = $this->input->post('alamatDom');
        $data['email']          = $this->input->post('email');
        $data['telp']           = $this->input->post('telp');
        $data['urgent']         = $this->input->post('urgent');
        $data['skill']          = $this->input->post('skill');
        $data['penempatan']     = $this->input->post('penempatan');
        $data['gaji']           = $this->input->post('gaji');
        $data['idBiodata']           = $this->input->post('idBiodata');
        $data['idUser']         = $this->session->userdata('idUser');

        $edit = $this->m_biodata->editBiodata($data);

		// $this->load->view('masterData/barang/formTambah');
		if ($edit == TRUE){
			echo "sukses";
		}else{
			echo "gagal";
		}
	}

    public function simpanEdit()
	{
		$data['id'] = $this->input->post('id');
		$data['namaBarang'] = $this->input->post('namaBarang');
        $data['satuan'] = $this->input->post('satuan');
        $data['hargaBeli'] = $this->input->post('hargaBeli');
        $data['hargaJual'] = $this->input->post('hargaJual');
        $data['stok'] = $this->input->post('stok');

        $simpan = $this->m_masterData->simpanEditBarang($data);

		// $this->load->view('masterData/barang/formTambah');
		if ($simpan == TRUE){
			echo "sukses";
		}else{
			echo "gagal";
		}
	}

    public function hapusBarang()
	{
		$id = $this->input->post('id');

        $hapus = $this->m_masterData->hapusBarang($id);

		// $this->load->view('masterData/barang/formTambah');
		if ($hapus == TRUE){
			echo "sukses";
		}else{
			echo "gagal";
		}
	}

    public function simpan()
	{
        $data['namaBarang'] = $this->input->post('namaBarang');
        $data['satuan'] = $this->input->post('satuan');
        $data['hargaBeli'] = $this->input->post('hargaBeli');
        $data['hargaJual'] = $this->input->post('hargaJual');
        $data['stok'] = $this->input->post('stok');

        $simpan = $this->m_masterData->simpanBarang($data);
		redirect('barang');
    }

	public function formEdit($id)
	{
        $simpan = $this->m_masterData->editBarang($id);
		redirect('barang');
    }

	// function hapusBarang($id)
	// {
	// 	$this->m_masterData->delete($id);
	// 	$this->session->set_flashdata('pesan', 'Data Berhasil di Hapus');
	// 	redirect('barang');
	// }
}
