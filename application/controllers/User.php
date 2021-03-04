<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('Login_model');
		$this->load->model('User_model');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('security');

	}

	public function index()
	{	
		$id = ucfirst($this->session->userdata('id_user'));
		$data['sql'] = $this->User_model->info_user($id);
		$sudah_login = $this->session->userdata('sudah_login');
		$data['jk'] = $this->session->userdata('jk');
		$data['id_role'] = $this->session->userdata('id_role');
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['fullname'] = strtoupper($this->session->userdata('fullname'));



		if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
			redirect(base_url('Login'));
		} else {
			$data['menu'] = $this->menu_model->get_all_menu_user();
			$this->load->view('templates/head1', $data);
			$this->load->view('menu_user', $data);
			$this->load->view('templates/footer1');
			$this->load->view('dashboard_user');
			$this->load->view('templates/foot');
		}
	}


	public function dashboard()
	{
		$id = ucfirst($this->session->userdata('id_user'));
		$data['sql'] = $this->User_model->info_user($id);
		$sudah_login = $this->session->userdata('sudah_login');
		$data['jk'] = $this->session->userdata('jk');
		$data['id_role'] = $this->session->userdata('id_role');
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['fullname'] = strtoupper($this->session->userdata('fullname'));

		if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
			redirect(base_url('Login'));
		} else {
			$data['menu'] = $this->menu_model->get_all_menu_user();
			$this->load->view('templates/head1', $data);
			$this->load->view('menu_user', $data);
			$this->load->view('templates/footer1');
			$this->load->view('dashboard_user');
			$this->load->view('templates/foot');
		}
	}

	/* public function view_profile(){
		$sudah_login = $this->session->userdata('sudah_login');
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
	    	$this->load->view('header',$data);
		    $this->load->view('menu_user');
		    $this->load->view('footer');
			$this->load->view('view_profile');
	    }

	} */

	/*public function view_profile()
	{
		$sudah_login = $this->session->userdata('sudah_login');
	    $data['id_role'] = $this->session->userdata('id_role');
	    $data['username'] = $this->session->userdata('username');
	    $data['email'] = $this->session->userdata('email');
	    $data['id_user'] = $this->session->userdata('id_user');
	    $data['fullname'] = strtoupper($this->session->userdata('fullname'));

	    if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
	      redirect(base_url('Login'));
	    }else { 
		    $this->load->view('header',$data);
		    $this->load->view('menu_user');
		    $this->load->view('footer');
			$this->load->view('view_user');
	    }		
	} */



	public function data_kos()
	{
		$this->load->helper('text');
		$id = ucfirst($this->session->userdata('id_user'));
		$data['sql'] = $this->User_model->info_user($id);
		$data['kos'] = $this->User_model->info_kos($id);
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
			$data['menu'] = $this->menu_model->get_all_menu_user();
			$this->load->view('templates/head1', $data);
			$this->load->view('menu_user', $data);
			$this->load->view('templates/footer1');
			$this->load->view('view_kos_user', $data);
			// $this->load->view('view_kos', $data);
			$this->load->view('templates/foot');
		}
	}

	public function data_user()
	{
		$id = ucfirst($this->session->userdata('id_user'));
		$this->load->helper('text');
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
			$data['menu'] = $this->menu_model->get_all_menu_user();
			$this->load->view('templates/head1', $data);
			$this->load->view('menu_user', $data);
			$this->load->view('templates/footer1');
			$this->load->view('view_profile', $data);
			$this->load->view('templates/foot');
		}
	}

	function edit_user()
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
			$data['menu'] = $this->menu_model->get_all_menu_user();
			$this->load->view('templates/head1', $data);
			$this->load->view('menu_user', $data);
			$this->load->view('templates/footer1');
			$this->load->view('v_edit_user_pengguna');
			$this->load->view('templates/foot');
		}
	}

	function proses_update_user()
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
		redirect('user/data_user/');
	}

	public function save_kos()
	{
		if ($_POST) {
			date_default_timezone_set('Asia/Jakarta');
			$this->load->helper('url');
			$this->load->library('Image_lib');
			$this->load->library('upload');

			$id_user 	= $this->session->userdata('id_user');
			$id_kos 	= $this->input->post('id_kos');
			$nama 		= $this->input->post('nama');
			$tipe		= $this->input->post('tipe');
			$deskripsi	= $this->input->post('deskripsi');
			$alamat		= $this->input->post('alamat');
			$lokasi		= $this->input->post('lokasi');
			$harga_min		= $this->input->post('harga_min');
			$harga_max		= $this->input->post('harga_max');
			$jarak 		= $this->input->post('jarak');
			$status		= $this->input->post('status');
			$stat		= $this->input->post('stat');
			$nama_pemilik = $this->input->post('nama_pemilik');
			$no_hp_pemilik = $this->input->post('no_hp_pemilik');
			$jumlah_tersedia = $this->input->post('jumlah_tersedia');
			$slug		= url_title($nama, 'dash', TRUE);
			$date       = date('Y-m-d H:i:s');
			$time       = date('H:i:s');

			if ($stat == 'new') {

				if ($_FILES['image_header']['name'] != "") {
					// $_FILES['image_header']['name'] = md5($date.$time);
					// var_dump($_FILES['image_header']['name']);
					$config['upload_path'] = 'file/kos_image';
					$config['allowed_types'] = 'jpg|png|jpeg';
					$config['max_size'] = '2000';
					$config['remove_spaces'] = true;
					$config['overwrite'] = false;
					$config['encrypt_name'] = false;
					$config['max_width']  = '';
					$config['max_height']  = '';
					$this->load->library('upload', 'image_lib', $config);
					$this->upload->initialize($config);
					if (!$this->upload->do_upload('image_header')) {
						print_r('Ukuran File Terlalu Besar. Maksimal 2Mb');
						exit();
					} else {
						$image = $this->upload->data();

						if ($image['file_name']) {
							$data['file1'] = $image['file_name'];
						}
						$image_header = $data['file1'];
					}
				}

				if ($_FILES['image_header2']['name'] != "") {
					$config['upload_path'] = 'file/kos_image';
					$config['allowed_types'] = 'jpg|png|jpeg';
					$config['max_size'] = '2000';
					$config['remove_spaces'] = true;
					$config['overwrite'] = false;
					$config['encrypt_name'] = false;
					$config['max_width']  = '';
					$config['max_height']  = '';
					$this->load->library('upload', 'image_lib', $config);
					$this->upload->initialize($config);
					if (!$this->upload->do_upload('image_header2')) {
						print_r('Ukuran File Terlalu Besar. Maksimal 2Mb');
						exit();
					} else {
						$image = $this->upload->data();

						if ($image['file_name']) {
							$data['file2'] = $image['file_name'];
						}
						$image_header2 = $data['file2'];
					}
				}

				if ($_FILES['image_header3']['name'] != "") {
					$config['upload_path'] = 'file/kos_image';
					$config['allowed_types'] = 'jpg|png|jpeg';
					$config['max_size'] = '2000';
					$config['remove_spaces'] = true;
					$config['overwrite'] = false;
					$config['encrypt_name'] = false;
					$config['max_width']  = '';
					$config['max_height']  = '';
					$this->load->library('upload', 'image_lib', $config);
					$this->upload->initialize($config);
					if (!$this->upload->do_upload('image_header3')) {
						print_r('Ukuran File Terlalu Besar. Maksimal 2Mb');
						exit();
					} else {
						$image = $this->upload->data();
						if ($image['file_name']) {
							$data['file3'] = $image['file_name'];
						}
						$image_header3 = $data['file3'];
					}
				}

				$data = array(
					'date'		=> $date,
					'time'		=> $time,
					'image_header' => $image_header,
					'image_header2' => $image_header2,
					'image_header3' => $image_header3,
					'status'		=> $status,
					'slug'		=> $slug,
					'nama'		=> $nama,
					'tipe'		=> $tipe,
					'deskripsi' 	=> $deskripsi,
					'alamat'		=> $alamat,
					'lokasi'		=> $lokasi,
					'harga_min'		=> $harga_min,
					'harga_max'		=> $harga_max,
					'id_user'		=> $id_user,
					'jarak'			=> $jarak,
					'nama_pemilik' => $nama_pemilik,
					'no_hp_pemilik' => $no_hp_pemilik,
					'jumlah_tersedia' => $jumlah_tersedia
				);
				$this->User_model->insertdata('kos', $data);
				redirect('User/data_kos');
			} else {
				$this->db->where('id_kos', $id_kos);
				$query  = $this->db->get('kos');
				$row  = $query->row();

				unlink("./file/kos_image/$row->image_header");
				unlink("./file/kos_image/$row->image_header1");
				unlink("./file/kos_image/$row->image_header2");


				if ($_FILES['image_header']['name'] != "") {
					$_FILES['image_header']['name'] = 'kos-'.$id_kos.'a';
					$config['upload_path'] = 'file/kos_image';
					$config['allowed_types'] = 'jpg|png|jpeg';
					$config['max_size'] = '2000';
					$config['remove_spaces'] = true;
					$config['overwrite'] = false;
					$config['encrypt_name'] = false;
					$config['max_width']  = '';
					$config['max_height']  = '';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if (!$this->upload->do_upload('image_header')) {
						print_r('Ukuran File Terlalu Besar. Maksimal 2Mb');
						exit();
					} else {
						$image = $this->upload->data();
						if ($image['file_name']) {
							$data['file1'] = $image['file_name'];
						}
						$image_header = $data['file1'];
					}
				}
				if ($_FILES['image_header2']['name'] != "") {
					$_FILES['image_header']['name'] = 'kos-'.$id_kos.'b';
					$config['upload_path'] = 'file/kos_image';
					$config['allowed_types'] = 'jpg|png|jpeg';
					$config['max_size'] = '2000';
					$config['remove_spaces'] = true;
					$config['overwrite'] = false;
					$config['encrypt_name'] = false;
					$config['max_width']  = '';
					$config['max_height']  = '';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if (!$this->upload->do_upload('image_header')) {
						print_r('Ukuran File Terlalu Besar. Maksimal 2Mb');
						exit();
					} else {
						$image = $this->upload->data();
						if ($image['file_name']) {
							$data['file1'] = $image['file_name'];
						}
						$image_header = $data['file1'];
					}
				}
				if ($_FILES['image_header3']['name'] != "") {
					$_FILES['image_header']['name'] = 'kos-'.$id_kos.'c';
					$config['upload_path'] = 'file/kos_image';
					$config['allowed_types'] = 'jpg|png|jpeg';
					$config['max_size'] = '2000';
					$config['remove_spaces'] = true;
					$config['overwrite'] = false;
					$config['encrypt_name'] = false;
					$config['max_width']  = '';
					$config['max_height']  = '';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if (!$this->upload->do_upload('image_header')) {
						print_r('Ukuran File Terlalu Besar. Maksimal 2Mb');
						exit();
					} else {
						$image = $this->upload->data();
						if ($image['file_name']) {
							$data['file1'] = $image['file_name'];
						}
						$image_header = $data['file1'];
					}
				}

				$data = array(
					'date'		=> $date,
					'time'		=> $time,
					'image_header' => $image_header,
					'image_header2' => $image_header2,
					'image_header3' => $image_header3,
					'status'		=> $status,
					'slug'		=> $slug,
					'nama'		=> $nama,
					'tipe'		=> $tipe,
					'deskripsi' 	=> $deskripsi,
					'alamat'		=> $alamat,
					'lokasi'		=> $lokasi,
					'harga_min'		=> $harga_min,
					'harga_max'		=> $harga_max,
					'id_user'		=> $id_user,
					'jarak'			=> $jarak,
					'nama_pemilik' => $nama_pemilik,
					'no_hp_pemilik' => $no_hp_pemilik,
					'jumlah_tersedia' => $jumlah_tersedia
				);

				$this->User_model->updatedata('kos', $data, array('id_kos' => $id_kos));
				redirect('User');
			}
		} else {
			echo "Page Not Found";
		}
	}

	public function tambah_kos()
	{
		$id = ucfirst($this->session->userdata('id_user'));
		$sudah_login = $this->session->userdata('sudah_login');
		$data['sql'] = $this->User_model->info_user($id);
		$data['jk'] = $this->session->userdata('jk');
		$data['id_role'] = $this->session->userdata('id_role');
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['fullname'] = strtoupper($this->session->userdata('fullname'));
		$data2 = array(
			//'id_user'	=> '',
			'id_kos'	=> '',
			'status'	=> '',
			'slug'		=> '',
			'nama'		=> '',
			'image'		=> '',
			'tipe'		=> '',
			'deskripsi' => '',
			'alamat'	=> '',
			'lokasi'		=> '',
			'harga_min'		=> '',
			'stat'		=> 'new',

		);

		if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
			redirect(base_url('Login'));
		} else {
			$data['menu'] = $this->menu_model->get_all_menu_user();
			$this->load->view('templates/head1', $data);
			$this->load->view('menu_user', $data);
			$this->load->view('templates/footer1');
			$this->load->view('v_tambah_kos', $data2);
			$this->load->view('templates/foot');
		}
	}

	function edit_kos($id)
	{
		$id1 = ucfirst($this->session->userdata('id_user'));
		$sudah_login = $this->session->userdata('sudah_login');
		$data['sql'] = $this->User_model->info_user($id1);

		$data['id_role'] = $this->session->userdata('id_role');
		$data['jk'] = $this->session->userdata('jk');
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['fullname'] = strtoupper($this->session->userdata('fullname'));
		$where = array('id_kos' => $id);
		$data['kos'] = $this->User_model->edit_data_user($where, 'kos')->result();
		if ($data['kos'][0]->id_user != $id1) {
			redirect('user/data_kos');
		}

		if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
			redirect(base_url('Login'));
		} else {
			$data['menu'] = $this->menu_model->get_all_menu_user();
			$this->load->view('templates/head1', $data);
			$this->load->view('menu_user', $data);
			$this->load->view('templates/footer1');
			$this->load->view('v_edit_kos');
			$this->load->view('templates/foot');
		}
	}


	function proses_update_kos()
	{
		$this->load->helper('url');
		$this->load->library('Image_lib');
		$this->load->library('upload');

		$id_user 	= $this->session->userdata('id_user');
		$id_kos 	= $this->input->post('id_kos');
		$nama 		= $this->input->post('nama');
		$tipe		= $this->input->post('tipe');
		$deskripsi	= $this->input->post('deskripsi');
		$alamat		= $this->input->post('alamat');
		$lokasi		= $this->input->post('lokasi');
		$harga_min		= $this->input->post('harga_min');
		$harga_max		= $this->input->post('harga_max');
		$status		= $this->input->post('status');
		$jarak		= $this->input->post('jarak');
		$nama_pemilik		= $this->input->post('nama_pemilik');
		$no_hp_pemilik		= $this->input->post('no_hp_pemilik');
		$jumlah_tersedia		= $this->input->post('jumlah_tersedia');
		$stat		= $this->input->post('stat');

		$slug		= url_title($nama, 'dash', TRUE);
		$date       = date('Y-m-d H:i:s');
		$time       = date('H:i:s');

		$this->db->where('id_kos', $id_kos);
		$query  = $this->db->get('kos');
		$row  = $query->row();

		// unlink("./file/kos_image/$row->image_header");
		// var_dump($_FILES['image_header']['name']);


		if ($_FILES['image_header']['name'] != "") {
			//hapus file
			unlink("./file/kos_image/$row->image_header");
			//ganti nama
			$_FILES['image_header']['name'] = 'kos-' . $row->id_kos . 'a.jpg';
			$config['upload_path'] = 'file/kos_image';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = '2000';
			$config['remove_spaces'] = true;
			$config['overwrite'] = false;
			$config['encrypt_name'] = false;
			$config['max_width']  = '';
			$config['max_height']  = '';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('image_header')) {
				print_r('Ukuran File Terlalu Besar. Maksimal 2Mb');
				exit();
			} else {
				$image = $this->upload->data();
				if ($image['file_name']) {
					$data['file1'] = $image['file_name'];
				}
				$image_header = $data['file1'];
			}
		} else {
			$image_header = $row->image_header;
		}

		if ($_FILES['image_header2']['name'] != "") {
			//hapus file
			unlink("./file/kos_image/$row->image_header2");
			//ganti nama
			$_FILES['image_header2']['name'] = 'kos-' . $row->id_kos . 'b.jpg';
			$config['upload_path'] = 'file/kos_image';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = '2000';
			$config['remove_spaces'] = true;
			$config['overwrite'] = false;
			$config['encrypt_name'] = false;
			$config['max_width']  = '';
			$config['max_height']  = '';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('image_header2')) {
				print_r('Ukuran File Terlalu Besar. Maksimal 2Mb');
				exit();
			} else {
				$image = $this->upload->data();
				if ($image['file_name']) {
					$data['file2'] = $image['file_name'];
				}
				$image_header2 = $data['file2'];
			}
		} else {
			$image_header2 = $row->image_header2;
		}

		if ($_FILES['image_header3']['name'] != "") {
			//hapus file
			unlink("./file/kos_image/$row->image_header3");
			//ganti nama
			$_FILES['image_header3']['name'] = 'kos-' . $row->id_kos . 'c.jpg';
			$config['upload_path'] = 'file/kos_image';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = '2000';
			$config['remove_spaces'] = true;
			$config['overwrite'] = false;
			$config['encrypt_name'] = false;
			$config['max_width']  = '';
			$config['max_height']  = '';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('image_header3')) {
				print_r('Ukuran File Terlalu Besar. Maksimal 2Mb');
				exit();
			} else {
				$image = $this->upload->data();
				if ($image['file_name']) {
					$data['file3'] = $image['file_name'];
				}
				$image_header3 = $data['file3'];
			}
		} else {
			$image_header3 = $row->image_header3;
		}

		// var_dump($image_header);

		$data = array(
			'date'		=> $date,
			'time'		=> $time,
			'image_header'		=> $image_header,
			'image_header2'		=> $image_header2,
			'image_header3'		=> $image_header3,
			'status'		=> $status,
			'id_user'		=> $id_user,
			'slug'		=> $slug,
			'nama'		=> $nama,
			'tipe'		=> $tipe,
			'deskripsi' 	=> $deskripsi,
			'alamat'		=> $alamat,
			'lokasi'		=> $lokasi,
			'harga_min'		=> $harga_min,
			'harga_max'		=> $harga_max,
			'jarak'			=> $jarak,
			'nama_pemilik'	=> $nama_pemilik,
			'no_hp_pemilik'	=> $no_hp_pemilik,
			'jumlah_tersedia'	=> $jumlah_tersedia
		);

		$this->User_model->updatedata('kos', $data, array('id_kos' => $id_kos));
		redirect('User/data_kos');
	}

	public function delete_kos($id_kos = 0)
	{

		$this->db->where('id_kos', $id_kos);
		$query = $this->db->get('kos');
		$row = $query->row();

		unlink("./file/kos_image/$row->image_header");
		$hasil = $this->User_model->deldata('kos', array('id_kos' => $id_kos));
		redirect('user/data_kos/');
	}

	public function registrasi()
	{
		$this->load->view('templates/head');
		$this->load->view('v_daftar_user');
		$this->load->view('templates/foot');
	}

	public function cek_email()
	{
		$email = $this->input->post('email');
		$cek = $this->User_model->cekEmail($email);
		if ($cek > 0) {
			echo 'taken';
		} else {
			echo 'not_taken';
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
		$this->session->set_flashdata('suksesdaftar', '<font color ="green">Anda berhasil daftar, Silahkan login.</font>');
		redirect('Login');
	}

	public function proses_daftar_user_google()
	{
		$username = $this->input->post('username');
		$fullname = $this->input->post('fullname');
		$email = $this->input->post('email');
		$id_role = $this->input->post('id_role');
		$image_url = $this->input->post('profil_image');

		$data = array(
			'username' => $username,
			'fullname' => $fullname,
			'email' => $email,
			'profil_image' => $image_url,
			'id_role' => $id_role
		);
		$this->User_model->input_data_user($data, 'user');

		$data_from_db = $this->Login_model->cek_user_google($email); // mengambil data dari fungsi cek_user

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
		} else {
			redirect(base_url('user/dashboard'));
			//redirect('C_Front/login_hima');
		}
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

			$this->load->view('header', $data);
			$this->load->view('menu_user');
			$this->load->view('footer');
			$this->load->view('kategorikos_user/index', $data);
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

			$this->load->view('header', $data);
			$this->load->view('menu_user');
			$this->load->view('footer');
			$this->load->view('kategorikos_user/putra', $data);
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

			$this->load->view('header', $data);
			$this->load->view('menu_user');
			$this->load->view('footer');
			$this->load->view('kategorikos_user/putri', $data);
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
			$this->load->view('header', $data);
			$this->load->view('menu_user');
			$this->load->view('footer');
			$this->load->view('kategorikos_user/campur', $data);
		}
	}

	public function view_konten_kos($slug = '')
	{
		$id = ucfirst($this->session->userdata('id_user'));
		$sudah_login = $this->session->userdata('sudah_login');
		$data['sql'] = $this->User_model->info_user($id);
		$data['id_role'] = $this->session->userdata('id_role');
		$data['jk'] = $this->session->userdata('jk');
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['fullname'] = strtoupper($this->session->userdata('fullname'));

		$this->load->helper('text');
		date_default_timezone_set('Asia/Jakarta');
		$data_kos = $this->User_model->getKos("where slug = '$slug'")->result_array();

		$data2 = array(
			'nama'	=> strip_tags($data_kos[0]['nama']),
			'id_user'			=> $data_kos[0]['id_user'],
			'deskripsi'			=> $data_kos[0]['deskripsi'],
			'alamat'			=> $data_kos[0]['alamat'],
			'slug'				=> $data_kos[0]['slug'],
			'date'				=> $data_kos[0]['date'],
			'time'				=> $data_kos[0]['time'],
			'lokasi'				=> $data_kos[0]['lokasi'],
			'harga_min'				=> $data_kos[0]['harga_min'],
			'no_hp'				=> $data_kos[0]['no_hp'],
			'fullname'				=> $data_kos[0]['fullname'],
			'tipe'				=> $data_kos[0]['tipe'],
			'image_header'		=> $data_kos[0]['image_header']
		);

		if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
			redirect(base_url('Login'));
		} else {
			$this->load->view('header', $data, $data2);
			$this->load->view('menu_user');
			$this->load->view('footer');
			$this->load->view('user/detail_kos', $data2, $data);
		}
	}

	public function give_review() {
		if ($this->session->userdata('sudah_login')) {
			$star = $this->input->post('rating');
			$review = $this->input->post('review');
			$time_stamp = date("Y-m-d H:i:s");
			$id_user = $this->session->userdata('id_user');
			$id_kos = $this->input->post('id_kos');
			$slug = $this->input->post('slug');
			$data = array(
				'id_user' => $id_user,
				'id_kos' => $id_kos,
				'star' => $star,
				'review' => $review,
				'time_stamp' => $time_stamp
			);
			$this->db->insert("review", $data);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('result','swal("Berhasil","Berhasil memberikan review","success")');
			} else {
				$this->session->set_flashdata('result','swal("Gagal","Gagal memberikan review","error")');
			}
			redirect(base_url(). "detail/" . $slug);
		}
	}

	public function give_report() {
		if ($this->session->userdata('sudah_login')) {
			$tipe = $this->input->post('report-tipe');
			$alasan = $this->input->post('report-text');
			$time_stamp = date("Y-m-d H:i:s");
			$id_user = $this->session->userdata('id_user');
			$id_kos = $this->input->post('id_kos');
			$slug = $this->input->post('slug');
			$data = array(
				'id_user' => $id_user,
				'id_kos' => $id_kos,
				'tipe' => $tipe,
				'alasan' => $alasan,
				'time_stamp' => $time_stamp
			);
			// var_dump($data);
			$this->db->insert("laporan", $data);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('result','swal("Berhasil","Berhasil melaporkan kos","success")');
			} else {
				$this->session->set_flashdata('result','swal("Gagal","Gagal melaporkan kos","error")');
			}
			redirect(base_url(). "detail/" . $slug);
		}
	}

	public function give_verif() {
		if (isset($_POST["verif"])) {
			if ($this->session->userdata('sudah_login')) {
				$id_user = $this->session->userdata('id_user');
				$id_kos = $this->input->post('id_kos');
				$slug = $this->input->post('slug');
				$data = array(
					'id_user' => $id_user,
					'id_kos' => $id_kos
				);
				// var_dump($data);
				$this->db->insert("verifikasi", $data);
				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('result','swal("Berhasil","Verifikasi berhasil","success")');
				} else {
					$this->session->set_flashdata('result','swal("Gagal","Verifikasi gagal","error")');
				}
				redirect(base_url(). "detail/" . $slug);
			}
		}

		if (isset($_POST["hapus_verif"])) {
			if ($this->session->userdata('sudah_login')) {
				$id_user = $this->session->userdata('id_user');
				$id_kos = $this->input->post('id_kos');
				$slug = $this->input->post('slug');
				$data = array(
					'id_user' => $id_user,
					'id_kos' => $id_kos
				);
				// var_dump("xxxxx");
				$this->db->delete("verifikasi", $data);
				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('result','swal("Berhasil","Berhasil membatalkan verfikasi","success")');
				} else {
					$this->session->set_flashdata('result','swal("Gagal","gagal membatalkan verfikasi","error")');
				}
				redirect(base_url(). "detail/" . $slug);
			}
		}
		
	}
}
