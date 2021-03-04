<?php

class Detail_model extends CI_Model
{


  public function getAllDetailKosan($slug)
  {
    return $this->db->query("select kostista_kos.*, kostista_user.* FROM kostista_kos JOIN
    kostista_user ON kostista_kos.id_user=kostista_user.id_user where id_kos=$slug;")->result_array();
  }

  public function getAllReviewKosan($slug)
  {
    return $this->db->query("select kostista_review.*, kostista_user.* FROM kostista_review JOIN
    kostista_user ON kostista_review.id_user=kostista_user.id_user where id_kos=$slug;")->result_array();
  }

  public function verifikasi($slug)
  {
    return $this->db->get_where('kostista_verifikasi', array('id_kos' => $slug))->result_array();
  }

  public function avgStar($slug)
  {
    $this->db->select_avg('star');
    return $this->db->get_where('kostista_review', array('id_kos' => $slug))->result_array();
  }

  public function addReview()
  {
    $data = [
      'id_kos' => $this->input->post('star', true),
      'id_user' => $this->input->post('star', true),
      'star' => $this->input->post('star', true),
      'review' => $this->input->post('review', true),
    ];
    $this->db->insert('kostista_review', $data);
  }

  public function sudah_isi_review($id_kos, $id_user)
  {
    $this->db->select('*');
    $this->db->from('review');
    $where = array(
      'id_kos' => $id_kos,
      'id_user' => $id_user
    );
    $this->db->where($where);
    if ($this->db->count_all_results() > 0) {
      return true;
    }
    return false;
  }

  public function sudah_verifikasi($id_kos, $id_user)
  {
    $this->db->select('*');
    $this->db->from('verifikasi');
    $where = array(
      'id_kos' => $id_kos,
      'id_user' => $id_user
    );
    $this->db->where($where);
    if ($this->db->count_all_results() > 0) {
      return true;
    }
    return false;
  }
}
