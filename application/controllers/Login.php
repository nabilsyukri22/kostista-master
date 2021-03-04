<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('security');
	}

	public function index()
	{
		$sudah_login = $this->session->userdata('sudah_login');
		$data['id_role'] = $this->session->userdata('id_role');
		$data['email'] = $this->session->userdata('email');

		if (empty($sudah_login)) {
			$this->load->view('templates/head');
			$this->load->view('login_form');
			$this->load->view('templates/foot');
		} else {
			$id_role = $this->session->userdata('id_role');
			if ($id_role == '1') {
				header('location:' . base_url() . 'admin');
			} else {
				header('location:' . base_url() . 'user/dashboard');
			}
		}
	}

	public function proses_login()
	{
		$this->load->library('form_validation');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$enkripsi_pass = hash('md5', $password);

		$data_from_db = $this->Login_model->cek_user($email, $enkripsi_pass); // mengambil data dari fungsi cek_user
		$hitung_datadb = count($data_from_db);

		$this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean'); // melakukan validasi form login
		$this->form_validation->set_rules('password', 'Password', 'required|trim|xss_clean');

		if ($this->form_validation->run() == FALSE) { // jika validasi terjadi kesalahan maka akan kembali ke halaman awal
			$this->load->view('login_form'); // ^ dengan menampilkan error

		} else {
			if ($hitung_datadb > 0) {
				$session_data = array(
					'id_user'		=> $data_from_db[0]->id_user,
					'username'	=> $data_from_db[0]->username,
					'fullname'	=> $data_from_db[0]->fullname,
					'jk'			=> $data_from_db[0]->jk,
					'email'		=> $data_from_db[0]->email,
					'no_hp'		=> $data_from_db[0]->no_hp,
					'alamat'		=> $data_from_db[0]->alamat,
					'id_role'	=> $data_from_db[0]->id_role,
					'sudah_login' => TRUE
				); // data yang di gunakan untuk session yang di ambil dari database di atas

				$this->session->set_userdata($session_data); // set data-data session

				if ($this->session->userdata('id_role') == '1') {
					redirect(base_url('admin/'));
					//redirect('C_Front/login_administrator');
				} elseif ($this->session->userdata('id_role') == '2') {
					redirect(base_url('user/dashboard'));
					//redirect('C_Front/login_hima');
				}
			} else {
				$this->session->set_flashdata('notif', '<font color ="red">Gagal! Email atau password salah</font>');
				redirect(base_url('Login'));
			}
		}
	}

	public function proses_login_google()
	{
		$email = $this->input->post('email');

		$data_from_db = $this->Login_model->cek_user_google($email); // mengambil data dari fungsi cek_user
		$hitung_datadb = count($data_from_db);

		$session_data = array(
			'id_user'		=> $data_from_db[0]->id_user,
			'username'	=> $data_from_db[0]->username,
			'fullname'	=> $data_from_db[0]->fullname,
			'jk'			=> $data_from_db[0]->jk,
			'email'		=> $data_from_db[0]->email,
			'no_hp'		=> $data_from_db[0]->no_hp,
			'alamat'		=> $data_from_db[0]->alamat,
			'id_role'	=> $data_from_db[0]->id_role,
			'sudah_login' => TRUE
		); // data yang di gunakan untuk session yang di ambil dari database di atas

		$this->session->set_userdata($session_data); // set data-data session

		if ($this->session->userdata('id_role') == '1') {
			redirect(base_url('admin/'));
			//redirect('C_Front/login_administrator');
		} elseif ($this->session->userdata('id_role') == '2' || $this->session->userdata('id_role') == '3') {
			redirect(base_url('user/dashboard'));
			//redirect('C_Front/login_hima');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy(); // menghancurkan session
		redirect(base_url('Login')); // melakukan kembali ke fungsi home 
	}

	public function logout1()
	{
		$this->session->sess_destroy(); // menghancurkan session
		redirect(base_url()); // melakukan kembali ke fungsi home 
	}


	public function check_db($email)
	{
		echo json_encode($this->Login_model->check_db($email));
	}
}
