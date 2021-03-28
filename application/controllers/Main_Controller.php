<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main_Controller extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model(array('User_model', 'Detail_model'));
		$this->load->helper('security');
	}

	public function index()
	{
		$data['sql'] = $this->User_model->info_best_kos();
		$id = ucfirst($this->session->userdata('id_user'));
		if ($id == "") {
			$data['user'] = 'x';
		} else {
			$data['user'] = $this->User_model->info_user($id);
		}

		$this->load->view('templates/head');
		$this->load->view('templates/header', $data);
		$this->load->view('landing_pages', $data);
		$this->load->view('templates/footer');
		$this->load->view('templates/foot');
	}

	public function pencarian()
	{
		$id = ucfirst($this->session->userdata('id_user'));
		if ($id == "") {
			$data['user'] = 'x';
		} else {
			$data['user'] = $this->User_model->info_user($id);
		}

		$filter = array();
		if ($this->input->get() != null) {
			$kos = $this->input->get();

			if ($this->input->get("kos") != null) {
				if ($kos["kos"] == 1) {
					$kos1 = "Putra";
				} elseif ($kos["kos"] == 2) {
					$kos1 = "Putri";
				}elseif ($kos["kos"] == 4) {
					$kos1 = "Khusus Muslimah";
				} elseif ($kos["kos"] == 3) {
					$kos1 = "Campur";
				};
				$filter["tipe"] = $kos1;
			} else {
				$kos1 = null;
			};

			if ($this->input->get("lokasi") != null) {
				if ($kos["lokasi"] == 1) {
					$lokasi = "Bonsay";
				} elseif ($kos["lokasi"] == 2) {
					$lokasi = "Bonasut";
				} elseif ($kos["lokasi"] == 3) {
					$lokasi = "Bonasel";
				}
				$filter["lokasi"] = $lokasi;
			} else {
				$lokasi = null;
			};

			if ($this->input->get("sortby") != null) {
				if ($kos["sortby"] == 0) {
					$order = "harga_min asc";
				} elseif ($kos["sortby"] == 1) {
					$order = "harga_max desc";
				} elseif ($kos["sortby"] == 2) {
					$order = "jarak asc";
				} elseif ($kos["sortby"] == 3) {
					$order = "rating desc";
				}
			} else {
				$order = null;
			};

			if ($this->input->get("wifi") != null) {
				$wifi = $this->input->get("wifi");
				$filter["wifi"] = $wifi;
			} else {
				// $filter["wifi"] = $wifi;
			};

			if ($this->input->get("air") != null) {
				$air = $this->input->get("air");
				$filter["air"] = $air;
			} else {
				// $filter["air"] = $air;
			};

			if ($this->input->get("listrik") != null) {
				$listrik = $this->input->get("listrik");
				$filter["listrik"] = $listrik;
			} else {
				// $filter["listrik"] = $listrik;
			};

			if ($this->input->get("km_dalam") != null) {
				$km_dalam = $this->input->get("km_dalam");
				$filter["km_dalam"] = $km_dalam;
			} else {
				// $filter["km_dalam"] = $km_dalam;
			};

			if ($this->input->get("dekat_kampus") != null) {
				$dekat_kampus = $this->input->get("dekat_kampus");
				$filter["dekat_kampus"] = $dekat_kampus;
			} else {
				// $filter["dekat_kampus"] = $dekat_kampus;
			};

			if ($this->input->get("dapur") != null) {
				$dapur = $this->input->get("dapur");
				$filter["dapur"] = $dapur;
			} else {
				// $filter["dapur"] = $dapur;
			};

			if ($kos == null) {
				$data["pencarian"] = $this->User_model->getallkos();
			} else {
				$data["pencarian"] = $this->User_model->getkosby($filter, $order);
			};
		} else {
			$data["pencarian"] = $this->User_model->getallkos();
		};

		//maps
		$nampung = $this->db->select('nama,X,Y')->get('kostista_kos')->result_array();
		$data['koordinat'] = '';
		foreach($nampung as $koor){
			$data['koordinat'] .= "['".$koor['nama']."', ".$koor['X'].", ".$koor['Y']."],";
		}
		
		$this->load->view('templates/head');
		$this->load->view('templates/headerku', $data);
		$this->load->view('pencarian', $data);
		$this->load->view('templates/footer');
		$this->load->view('templates/foot');
	}

	public function test()
	{
		echo $data["pencarian"] = $this->User_model->getallkos();
	}

	public function detail($slug = '')
	{
		$sudah_login = $this->session->userdata('sudah_login');
		$data_kos = $this->User_model->getKos1($slug)->result_array();
		$id_kos = $data_kos[0]['id_kos'];
		$data_star = $this->User_model->getKosStar($id_kos)->result_array();
		$data_verif = $this->User_model->getKosVerif($id_kos)->result_array();
		$jml_verif = $this->User_model->getJmlVerif($id_kos)->result_array();
		$data2['review'] = $this->User_model->review_by_kos($id_kos);
		$data2['id_kos'] = $id_kos;
		$data2['slug'] = $slug;
		$data2['sudah_isi_review'] = $this->Detail_model->sudah_isi_review($id_kos, $this->session->userdata("id_user"));
		$data = array(
			'nama'	=> strip_tags($data_kos[0]['nama']),
			'image_header'			=> $data_kos[0]['image_header'],
			'image_header2'			=> $data_kos[0]['image_header2'],
			'image_header3'			=> $data_kos[0]['image_header3'],
			'id_user'			=> $data_kos[0]['id_user'],
			'id_kos'			=> $data_kos[0]['id_kos'],
			'slug'			=> $data_kos[0]['slug'],
			'deskripsi'			=> $data_kos[0]['deskripsi'],
			'alamat'			=> $data_kos[0]['alamat'],
			'harga_min'				=> $data_kos[0]['harga_min'],
			'harga_max'				=> $data_kos[0]['harga_max'],
			'nama_pemilik'				=> $data_kos[0]['nama_pemilik'],
			'no_hp_pemilik'				=> $data_kos[0]['no_hp_pemilik'],
			'star'				=> $data_star[0]['star'],
			'jml_verif'				=> $jml_verif[0]['jml_verif'],
			'data_verif'		=> $data_verif,
			'wifi'				=> $data_kos[0]['wifi'],
			'air'				=> $data_kos[0]['air'],
			'listrik'				=> $data_kos[0]['listrik'],
			'km_dalam'				=> $data_kos[0]['km_dalam'],
			'dekat_kampus'				=> $data_kos[0]['dekat_kampus'],
			'dapur'				=> $data_kos[0]['dapur'],
			'jumlah_tersedia'				=> $data_kos[0]['jumlah_tersedia'],
			'tipe'				=> $data_kos[0]['tipe'],
			'sudah_verifikasi'	=> $this->Detail_model->sudah_verifikasi($id_kos, $this->session->userdata("id_user"))
			
		);

		// if (!$sudah_login) {
			// jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
			// redirect(base_url('Login'));

			// } else {
			$this->load->view('templates/head');
			$this->load->view('templates/header1', $data);
			$this->load->view('detail1', $data);
			$this->load->view('detail2', $data2);
			$this->load->view('templates/footer');
			$this->load->view('templates/foot');
			// }
		// }
	}

	public function tambahReview()
	{
		$this->Detail_model->addReview();
		redirect('detail');
	}

	function cari()
	{
		$keyword    =   $this->input->post('keyword');
		$data['hasilcari']    =   $this->User_model->search($keyword);
		$this->load->view('user/header', $data);
		$this->load->view('user/menu');
		$this->load->view('footer');
		$this->load->view('user/pencarian', $data);
	}

	function mySearch(){
		$keyword    =   $this->input->get('keyword');
		$data['pencarian']    =   $this->User_model->search($keyword);

		//maps
		$nampung = $this->db->select('nama,X,Y')->get('kostista_kos')->result_array();
		$data['koordinat'] = '';
		foreach($nampung as $koor){
			$data['koordinat'] .= "['".$koor['nama']."', ".$koor['X'].", ".$koor['Y']."],";
		}

		$this->load->view('templates/head');
		$this->load->view('templates/headerku', $data);
		$this->load->view('pencarian', $data);
		$this->load->view('templates/footer');
		$this->load->view('templates/foot');
	}
}
