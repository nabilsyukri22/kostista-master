<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
  }
  //Cek User
  public function cek_user($email, $pass)
  {
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('email', $email);
    $this->db->where('password', $pass);
    $query = $this->db->get();
    return $query->result();
  }

  public function cek_user_google($email)
  {
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('email', $email);
    $query = $this->db->get();
    return $query->result();
  }

  public function check_db($email)
  {
    $this->db->select('email');
    $this->db->from('user');
    $this->db->like('email', $email);
    if ($this->db->count_all_results() > 0) {
      return true;
    }
    return false;
  }
}
