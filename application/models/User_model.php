<?php 
defined('BASEPATH') or exit ('No direct script direct allowed');

class User_model extends CI_Model{

	

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('security');
	}

	
	//Menampilkan seluruh daftar user yang ada di database (Hak akses untuk admin)
	function user(){
		return $this->db->query("select * from kostista_user");
	}

	

	function edit_data_user($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data_user($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

	function hapus_data_user($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function publish_data_user($id){
		$this->db->query("UPDATE kostista_kos SET status = 1 WHERE id_kos = $id");
	}

	function unpublish_data_user($id){
		$this->db->query("UPDATE kostista_kos SET status = 0 WHERE id_kos = $id");
	}

	//Menampilkan seluruh daftar user yang ada di database (Hak akses untuk admin)
	public function get_listuser(){
		$this->db->from('user');
		$this->db->join('role','user.id_role = role.id_role');
		$query=$this->db->get();
		return $query->result();
	}

	public function get_listkos(){
		$this->db->select('*');
		$this->db->from('kos');
		$this->db->join('user','user.id_user = kos.id_user');
		$query=$this->db->get();
		return $query->result();
	}

	public function get_listuser_pengguna($id){
		$this->db->from('user');
		//$this->db->join('role','user.id_role = role.id_role');
		$this->db->where('user.id_user', $id);
		$query=$this->db->get();
		return $query->result();
	}

	public function get_listlaporan(){
		$this->db->select('*,laporan.tipe as lap');
		$this->db->from('laporan');
		$this->db->join('user','user.id_user = laporan.id_user');
		$this->db->join('kos','kos.id_kos = laporan.id_kos');
		$this->db->order_by('id','DESC');
		$query=$this->db->get();
		return $query->result();
	}

	function input_data_user($data,$table){
		$this->db->insert($table,$data);
	}

	public function get_listrole(){
		$this->db->from('role');
		$query=$this->db->get();
		return $query->result();
	}

	function insertdata($tabel, $data){
		return $this->db->insert($tabel,$data);
	}

	function updatedata($tabel,$data,$where){
		return $this->db->update($tabel,$data,$where);
	}

	function getKos($where= ''){
		return $this->db->query("select kos.*, user.* from kostista_kos kos JOIN
		kostista_user user ON kos.id_user=user.id_user $where;");
	}

	function getKos1($slug){
		return $this->db->query("SELECT * FROM kostista_kos where slug = '$slug'");
	}

	function getKosStar($id){
		return $this->db->query("SELECT ROUND(AVG(star),1) as star FROM kostista_review WHERE id_kos = $id");
	}

	function getJmlVerif($id){
		return $this->db->query("SELECT COUNT(id_user) as jml_verif FROM kostista_verifikasi WHERE id_kos = $id");
	}

	function getKosVerif($id){
		return $this->db->query("SELECT v.id_user, v.id_kos, u.fullname FROM `kostista_verifikasi` v INNER JOIN kostista_user u ON v.id_user = u.id_user WHERE id_kos = $id");
	}

	function getJumlahKos($where= ''){
		return $this->db->query("select * from kostista_kos $where;");
	}

	


	function getJumlahUser($where= ''){
		return $this->db->query("select * from kostista_user $where;");
	}


	public function info_kos($id) {
	    $this->db->select('kos.*, user.id_user');
	    $this->db->from('kos');
	    $this->db->join('user', 'kos.id_user = user.id_user');
	    $this->db->where('kos.id_user', $id);
	    $sql = $this->db->get()->result();
	    return $sql;
  	}

  	public function info_user($id) {
	    $this->db->select('*');
	    $this->db->from('user');
	    $this->db->where('id_user',$id);
	    $sql = $this->db->get()->result();
	    return $sql;
  	}


  public function info_user_pengguna($id) {
    $this->db->select('user.*');
    $this->db->from('user');
    $this->db->where('user.id_user', $id);
    $sql = $this->db->get()->result();
    return $sql;
  }

  public function deldata($tabel,$where){
  	return $this->db->delete($tabel,$where);

  }

//UNTUK USER YANG TIDAK LOGIN//
  public function info_semua_kos() {
	    $this->db->select('kos.*, user.id_user');
	    $this->db->from('kos');
	    $this->db->join('user', 'kos.id_user = user.id_user');
	    $this->db->where('kos.status = "1"');
	    $sql = $this->db->get()->result();
	    return $sql;
  	}

  public function info_best_kos() {
	    $sql = $this->db->query("SELECT r.id_kos, k.nama, k.image_header, k.slug, ROUND(AVG(star),1) as star FROM `kostista_review` r INNER JOIN kostista_kos k ON r.id_kos = k.id_kos  GROUP BY id_kos ORDER BY `star`  DESC LIMIT 8")->result();
        return $sql;
  	}

  public function info_kos_putra() {
	    $this->db->select('kos.*, user.id_user');
	    $this->db->from('kos');
	    $this->db->join('user', 'kos.id_user = user.id_user');
	    $this->db->where('kos.tipe = "Putra"');
	    $this->db->where('kos.status = "1"');
	    $sql = $this->db->get()->result();
	    return $sql;
  }

  public function info_kos_putri() {
	    $this->db->select('kos.*, user.id_user');
	    $this->db->from('kos');
	    $this->db->join('user', 'kos.id_user = user.id_user');
	    $this->db->where('kos.tipe = "Putri"');
	    $this->db->where('kos.status = "1"');
	    $sql = $this->db->get()->result();
	    return $sql;
  }

  public function info_kos_campur() {
	    $this->db->select('kos.*, user.id_user');
	    $this->db->from('kos');
	    $this->db->join('user', 'kos.id_user = user.id_user');
	    $this->db->where('kos.tipe = "Campur"');
	    $this->db->where('kos.status = "1"');
	    $sql = $this->db->get()->result();
	    return $sql;
  }

  function search($keyword)
    {
        $this->db->like('nama',$keyword);
		$this->db->or_like('alamat',$keyword);

		$this->db->join('(select ROUND(avg(star),1) as rating,id_kos from kostista_review group by id_kos) as b' ,'kos.id_kos = b.id_kos','left');
        $query  =   $this->db->get('kos');
        return $query->result_array();
    }

	public function getkosby($where,$sort) {
	    $this->db->select('*');
	    $this->db->from('kos');
		$this->db->join('(select ROUND(avg(star),1) as rating,id_kos from kostista_review group by id_kos) as b' ,'kos.id_kos = b.id_kos','left');
		$this->db->where($where);
		$this->db->order_by($sort);
	    $sql = $this->db->get()->result_array();
	    return $sql;
  	}
  public function review_by_kos($id) {
	    $sql = $this->db->query("SELECT r.*, u.fullname as nama FROM `kostista_review` r INNER JOIN kostista_user u ON r.id_user = u.id_user WHERE r.id_kos = $id")->result();
        return $sql;
  	}


	public function getallkos() {
		// $query = "select * from kostista_kos left join (select avg(star) as rating,id_kos from kostista_review group by id_kos) as b on kostista_kos.id_kos = b.id_kos";
		// $q = $this->db->query($query);
		// $this->db->select('id_kos');
		// $this->db->select_avg('star');
		// $this->db->from('review');
		// $this->db->group_by('id_kos');
		// $q = $this->db->_compile_select();
		// $this->db->_reset_select(); 
		$this->db->select('*');
	    $this->db->from('kos');
		$this->db->join('(select ROUND(avg(star),1) as rating,id_kos from kostista_review group by id_kos) as b' ,'kos.id_kos = b.id_kos','left');
		// $this->db->select_avg('star');
		// $this->db->group_by('kos.id_kos');
		$this->db->order_by('harga_min asc');
	    $sql = $this->db->get()->result_array();
	    return $sql;
	  }
	  
	public function cekEmail($email)
	  {
		$q = $this->db->select('email')->where('email',$email)->count_all_results('user');
		if ($q > 0) {
			return 1;
		} else {
			return 0;
		}
	  }
}