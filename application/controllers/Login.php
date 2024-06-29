<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('login');
	}

	function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('message', '<div class="alert alert-danger">Anda berhasil logout</div>');
        redirect('login');
    }

    public function proses_login()
	{
        $data['email'] = $this->input->post('email');
        $data['password'] = $this->input->post('password');

        $cek = $this->m_login->cek_login($data);
		
        if ($cek->num_rows() == 1) {
            foreach ($cek->result() as $data) {
                $user_data = array(
                    'email' => $data->email,
                    'level' => $data->level,
                    'idUser' => $data->idUser,
                    'status' => "login"
                );
                $this->session->set_userdata($user_data);
            }
            redirect(base_url("dashboard"));
        }else{
            echo "<script>alert('Email atau Password Salah');</script>";
        }
	}

    public function formSignIn()
	{
		$this->load->view('signIn');
	}

    public function simpanUser()
	{
		
        $data['email'] = $this->input->post('email');
        $data['password'] = $this->input->post('password');

        $simpan = $this->m_login->simpanUser($data);

		if ($simpan == TRUE){
			echo "sukses";
		}else{
			echo "gagal";
		}
	}
}
