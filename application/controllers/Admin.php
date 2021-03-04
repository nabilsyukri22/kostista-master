<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->model('User_model');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('security');
		$id = ucfirst($this->session->userdata('id_user'));
		$data['sql'] = $this->User_model->info_user($id);

		if ($data['sql'][0]->id_role>1) {
			redirect('user');
		}
	}

	public function index()
	{
		$id = ucfirst($this->session->userdata('id_user'));
		$sudah_login = $this->session->userdata('sudah_login');
		$data['sql'] = $this->User_model->info_user($id);
		$data['id_role'] = $this->session->userdata('id_role');
		$data['jk'] = $this->session->userdata('jk');
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['fullname'] = strtoupper($this->session->userdata('fullname'));
		$jumlahkos = $this->User_model->getJumlahKos()->num_rows();
		$jumlahuser = $this->User_model->getJumlahUser()->num_rows();

		$data2 = array(
			'jumlahkos' => $jumlahkos,
			'jumlahuser' => $jumlahuser
		);

		if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
			redirect(base_url('Login'));
		} else {
			$data['menu'] = $this->menu_model->get_all_menu_admin();
			$this->load->view('templates/head1', $data);
			$this->load->view('menu_admin', $data);
			$this->load->view('templates/footer1');
			$this->load->view('dashboard_admin', $data2);
			$this->load->view('templates/foot');
		}
	}

	public function view_admin()
	{
		$id = ucfirst($this->session->userdata('id_user'));
		$sudah_login = $this->session->userdata('sudah_login');
		$data['sql'] = $this->User_model->info_user($id);
		$data['id_role'] = $this->session->userdata('id_role');
		$data['jk'] = $this->session->userdata('jk');
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['fullname'] = strtoupper($this->session->userdata('fullname'));
		$data['user'] = $this->User_model->get_listuser();

		if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
			redirect(base_url('Login'));
		} else {
			$data['menu'] = $this->menu_model->get_all_menu_admin();
			$this->load->view('templates/head1', $data);
			$this->load->view('menu_admin', $data);
			$this->load->view('templates/footer1');
			$this->load->view('view_admin', $data);
			$this->load->view('templates/foot');
		}
	}

	function proses_update_kos()
	{
		date_default_timezone_set('Asia/Jakarta');
		$status = $this->input->post('status');
		$id = $this->input->post('id_kos');
		$date 			= date('Y-m-d H:i:s');
		$time 			= date('H:i:s');

		$data = array(
			'status' => $status,
			'date' => $date,
			'time' => $time
		);

		$where = array(
			'id_kos' => $id
		);

		$this->User_model->update_data_user($where, $data, 'kos');
		redirect('admin/view_kos');
	}

	function hapus_kos_admin($id,$from)
	{	
		$where = array('id_kos' => $id);
		$this->db->where('id_kos', $id);
		$query = $this->db->get('kos');
		$row = $query->row();
		unlink("./file/kos_image/$row->image_header");

		$this->User_model->hapus_data_user($where, 'kos');
		redirect('admin/'.$from);
	}

	function publish_kos_admin($id,$from)
	{
		$where = array('id_kos' => $id);
		$this->User_model->publish_data_user($id);
		redirect('admin/'.$from);
	}

	function unpublish_kos_admin($id,$from)
	{
		$where = array('id_kos' => $id);
		$this->User_model->unpublish_data_user($id);
		redirect('admin/'.$from);
	}

	function edit_kos_admin($id)
	{
		$this->load->helper('text');
		$sudah_login = $this->session->userdata('sudah_login');
		$data['id_role'] = $this->session->userdata('id_role');
		$data['jk'] = $this->session->userdata('jk');
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['fullname'] = strtoupper($this->session->userdata('fullname'));
		$where = array('id_kos' => $id);
		$data['kos'] = $this->User_model->edit_data_user($where, 'kos')->result();

		if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
			redirect(base_url('Login'));
		} else {
			$data['menu'] = $this->menu_model->get_all_menu_admin();
			$this->load->view('templates/head1', $data);
			$this->load->view('menu_admin', $data);
			$this->load->view('templates/footer1');
			$this->load->view('v_edit_kos_admin');
			$this->load->view('templates/foot');
		}
	}

	public function view_kos()
	{
		$this->load->helper('text');
		$id = ucfirst($this->session->userdata('id_user'));
		$sudah_login = $this->session->userdata('sudah_login');
		$data['sql'] = $this->User_model->info_user($id);
		$data['id_role'] = $this->session->userdata('id_role');
		$data['jk'] = $this->session->userdata('jk');
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['fullname'] = strtoupper($this->session->userdata('fullname'));
		$data['kos'] = $this->User_model->get_listkos();

		if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
			redirect(base_url('Login'));
		} else {
			$data['menu'] = $this->menu_model->get_all_menu_admin();
			$this->load->view('templates/head1', $data);
			$this->load->view('menu_admin', $data);
			$this->load->view('templates/footer1');
			$this->load->view('view_kos_admin', $data);
			$this->load->view('templates/foot');
		}
	}

	public function view_profile()
	{
		$id = ucfirst($this->session->userdata('id_user'));
		$sudah_login = $this->session->userdata('sudah_login');
		$data['sql'] = $this->User_model->info_user($id);
		$data['id_role'] = $this->session->userdata('id_role');
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['fullname'] = strtoupper($this->session->userdata('fullname'));
		$data['jk'] = $this->session->userdata('jk');
		$data['no_hp'] = $this->session->userdata('no_hp');
		$data['alamat'] = $this->session->userdata('alamat');
		$data['user'] = $this->User_model->get_listuser();
		$data['user'] = $this->User_model->get_listrole();

		if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
			redirect(base_url('Login'));
		} else {
			$data['menu'] = $this->menu_model->get_all_menu_admin();
			$this->load->view('templates/head1', $data);
			$this->load->view('menu_admin');
			$this->load->view('templates/footer1');
			$this->load->view('view_profile');
			$this->load->view('templates/foot');
		}
	}

	function edit_user($id)
	{
		$id_user = ucfirst($this->session->userdata('id_user'));
		$sudah_login = $this->session->userdata('sudah_login');
		$data['sql'] = $this->User_model->info_user($id_user);
		$data['id_role'] = $this->session->userdata('id_role');
		$data['username'] = $this->session->userdata('username');
		$data['jk'] = $this->session->userdata('jk');
		$data['email'] = $this->session->userdata('email');
		$data['fullname'] = strtoupper($this->session->userdata('fullname'));
		$where = array('id_user' => $id);
		$data['user'] = $this->User_model->edit_data_user($where, 'user')->result();

		if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
			redirect(base_url('Login'));
		} else {
			$data['menu'] = $this->menu_model->get_all_menu_admin();
			$this->load->view('templates/head1', $data);
			$this->load->view('menu_admin');
			$this->load->view('templates/footer1');
			$this->load->view('v_edit_user');
			$this->load->view('templates/foot');
		}
	}

	public function data_admin()
	{
		$this->load->helper('text');
		$id = ucfirst($this->session->userdata('id_user'));
		$data['sql'] = $this->User_model->info_user($id);
		$sudah_login = $this->session->userdata('sudah_login');
		$data['jk'] = $this->session->userdata('jk');
		$data['id_role'] = $this->session->userdata('id_role');
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['fullname'] = strtoupper($this->session->userdata('fullname'));

		if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
			redirect(base_url('Login'));
		} else {
			$data['menu'] = $this->menu_model->get_all_menu_admin();
			$this->load->view('templates/head1', $data);
			$this->load->view('menu_admin');
			$this->load->view('templates/footer1');
			$this->load->view('view_profile_admin', $data);
			$this->load->view('templates/foot');
		}
	}

	function edit_admin()
	{
		$id = ucfirst($this->session->userdata('id_user'));
		$sudah_login = $this->session->userdata('sudah_login');
		$data['sql'] = $this->User_model->info_user($id);
		$data['id_role'] = $this->session->userdata('id_role');
		$data['jk'] = $this->session->userdata('jk');
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['fullname'] = strtoupper($this->session->userdata('fullname'));
		$where = array('id_user' => $id);
		$data['user'] = $this->User_model->edit_data_user($where, 'user')->result();

		if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
			redirect(base_url('Login'));
		} else {
			$data['menu'] = $this->menu_model->get_all_menu_admin();
			$this->load->view('templates/head1', $data);
			$this->load->view('menu_admin');
			$this->load->view('templates/footer1');
			$this->load->view('v_edit_admin');
			$this->load->view('templates/foot');
		}
	}

	function proses_update_admin()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$fullname = $this->input->post('fullname');
		$jk = $this->input->post('jk');
		$email = $this->input->post('email');
		$no_hp = $this->input->post('no_hp');
		$alamat = $this->input->post('alamat');
		$id_role = $this->input->post('id_role');
		$id = $this->input->post('id_user');

		$data = array(
			'username' => $username,
			'password' => md5($password),
			'fullname' => $fullname,
			'jk' => $jk,
			'email' => $email,
			'no_hp' => $no_hp,
			'alamat' => $alamat,
			'id_role' => $id_role
		);

		$where = array(
			'id_user' => $id
		);

		$this->User_model->update_data_user($where, $data, 'user');
		// redirect('admin/data_admin/' . $this->session->userdata('id_user'));
		redirect('admin/data_admin/');
	}



	function hapus_user($id)
	{
		$where = array('id_user' => $id);
		$this->User_model->hapus_data_user($where, 'user');
		redirect('admin/view_admin');
	}

	public function daftar_user()
	{
		$sudah_login = $this->session->userdata('sudah_login');
		$data['id_role'] = $this->session->userdata('id_role');
		$data['jk'] = $this->session->userdata('jk');
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['fullname'] = strtoupper($this->session->userdata('fullname'));


		if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
			redirect(base_url('Login'));
		} else {
			$data['menu'] = $this->menu_model->get_all_menu_admin();
			$this->load->view('templates/head1', $data);
			$this->load->view('menu_admin');
			$this->load->view('templates/footer1');
			$this->load->view('v_tambah_user');
			$this->load->view('templates/foot');
		}
	}

	public function proses_daftar_user()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$fullname = $this->input->post('fullname');
		$jk = $this->input->post('jk');
		$email = $this->input->post('email');
		$no_hp = $this->input->post('no_hp');
		$alamat = $this->input->post('alamat');
		$id_role = $this->input->post('id_role');

		$data = array(
			'username' => $username,
			'password' => md5($password),
			'fullname' => $fullname,
			'jk' => $jk,
			'email' => $email,
			'no_hp' => $no_hp,
			'alamat' => $alamat,
			'id_role' => $id_role
		);
		$this->User_model->input_data_user($data, 'user');
		redirect('admin/view_admin');
	}

	function proses_update_user()
	{
		$id_role = $this->input->post('id_role');
		$id = $this->input->post('id_user');
		$password = $this->input->post('password');
		$passmd5 = md5($password);

		$data = array(
			'id_role' => $id_role,
			'password' => $passmd5
		);

		$where = array(
			'id_user' => $id
		);

		$this->User_model->update_data_user($where, $data, 'user');
		redirect('admin/view_admin');
	}


	public function semua_kos()
	{
		$data['sql'] = $this->User_model->info_semua_kos();
		$sudah_login = $this->session->userdata('sudah_login');
		$data['id_role'] = $this->session->userdata('id_role');
		$data['jk'] = $this->session->userdata('jk');
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['fullname'] = strtoupper($this->session->userdata('fullname'));


		if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
			redirect(base_url('Login'));
		} else {
			$data['menu'] = $this->menu_model->get_all_menu_admin();
			$this->load->view('templates/head1', $data);
			$this->load->view('menu_admin');
			$this->load->view('templates/footer1');
			$this->load->view('kategorikos_admin/index', $data);
			$this->load->view('templates/foot');
		}
	}

	public function kos_putra()
	{
		$data['sql'] = $this->User_model->info_kos_putra();
		$sudah_login = $this->session->userdata('sudah_login');
		$data['id_role'] = $this->session->userdata('id_role');
		$data['jk'] = $this->session->userdata('jk');
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['fullname'] = strtoupper($this->session->userdata('fullname'));


		if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
			redirect(base_url('Login'));
		} else {
			$data['menu'] = $this->menu_model->get_all_menu_admin();
			$this->load->view('templates/head1', $data);
			$this->load->view('menu_admin');
			$this->load->view('templates/footer1');
			$this->load->view('kategorikos_admin/putra', $data);
			$this->load->view('templates/foot');
		}
	}

	public function kos_putri()
	{
		$data['sql'] = $this->User_model->info_kos_putri();
		$sudah_login = $this->session->userdata('sudah_login');
		$data['id_role'] = $this->session->userdata('id_role');
		$data['jk'] = $this->session->userdata('jk');
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['fullname'] = strtoupper($this->session->userdata('fullname'));


		if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
			redirect(base_url('Login'));
		} else {
			$data['menu'] = $this->menu_model->get_all_menu_admin();
			$this->load->view('templates/head1', $data);
			$this->load->view('menu_admin');
			$this->load->view('templates/footer1');
			$this->load->view('kategorikos_admin/putri', $data);
			$this->load->view('templates/foot');
		}
	}

	public function kos_campur()
	{
		$data['sql'] = $this->User_model->info_kos_campur();
		$sudah_login = $this->session->userdata('sudah_login');
		$data['id_role'] = $this->session->userdata('id_role');
		$data['jk'] = $this->session->userdata('jk');
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['fullname'] = strtoupper($this->session->userdata('fullname'));


		if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
			redirect(base_url('Login'));
		} else {
			$data['menu'] = $this->menu_model->get_all_menu_admin();
			$this->load->view('templates/head1', $data);
			$this->load->view('menu_admin');
			$this->load->view('templates/footer1');
			$this->load->view('kategorikos_admin/campur', $data);
			$this->load->view('templates/foot');
		}
	}

	public function view_konten_kos($slug = '')
	{
		$sudah_login = $this->session->userdata('sudah_login');
		$data_kos = $this->User_model->getKos1($slug)->result_array();
		$id_kos = $data_kos[0]['id_kos'];
		$data_star = $this->User_model->getKosStar($id_kos)->result_array();
		$data_verif = $this->User_model->getKosVerif($id_kos)->result_array();
		$data2['review'] = $this->User_model->review_by_kos($id_kos);
		$data = array(
			'nama'	=> strip_tags($data_kos[0]['nama']),
			'image_header'			=> $data_kos[0]['image_header'],
			'image_header2'			=> $data_kos[0]['image_header2'],
			'image_header3'			=> $data_kos[0]['image_header3'],
			'id_user'			=> $data_kos[0]['id_user'],
			'deskripsi'			=> $data_kos[0]['deskripsi'],
			'alamat'			=> $data_kos[0]['alamat'],
			'harga_min'				=> $data_kos[0]['harga_min'],
			'harga_max'				=> $data_kos[0]['harga_max'],
			'nama_pemilik'				=> $data_kos[0]['nama_pemilik'],
			'no_hp_pemilik'				=> $data_kos[0]['no_hp_pemilik'],
			'star'				=> $data_star[0]['star'],
			'jml_verif'				=> $data_verif[0]['jml_verif'],
			'wifi'				=> $data_kos[0]['wifi'],
			'air'				=> $data_kos[0]['air'],
			'listrik'				=> $data_kos[0]['listrik'],
			'km_dalam'				=> $data_kos[0]['km_dalam'],
			'dekat_kampus'				=> $data_kos[0]['dekat_kampus'],
			'dapur'				=> $data_kos[0]['dapur'],
			'tipe'				=> $data_kos[0]['tipe']
		);

		if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
			redirect(base_url('Login'));
		} else {
			$this->load->view('templates/head');
			$this->load->view('templates/header1');
			$this->load->view('detail1', $data);
			$this->load->view('detail2', $data2);
			$this->load->view('templates/footer');
			$this->load->view('templates/foot');
		}
	}


	public function laporan_admin()
	{
		$this->load->helper('text');
		$id = ucfirst($this->session->userdata('id_user'));
		$sudah_login = $this->session->userdata('sudah_login');
		$data['sql'] = $this->User_model->info_user($id);
		$data['id_role'] = $this->session->userdata('id_role');
		$data['jk'] = $this->session->userdata('jk');
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['fullname'] = strtoupper($this->session->userdata('fullname'));
		$data['laporan'] = $this->User_model->get_listlaporan();
		// var_dump($data['laporan']);

		if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
			redirect(base_url('Login'));
		} else {
			$data['menu'] = $this->menu_model->get_all_menu_admin();
			$this->load->view('templates/head1', $data);
			$this->load->view('menu_admin', $data);
			$this->load->view('templates/footer1');
			$this->load->view('laporan_admin', $data);
			$this->load->view('templates/foot');
		}
	}

	
}
