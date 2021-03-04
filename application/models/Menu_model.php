<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_all_menu_admin()
    {
        return array(
            //array('alamat_menu','persamaan_alamat', 'ikon', 'nama')
            array('index', array('index',""), 'dashboard', 'Dashboard'),
            array('view_kos/', array('view_kos', 'edit_kos_admin', 'view_konten_kos'), 'room', 'Data Kos'),
            array('view_admin', array('view_admin', 'edit_user', 'daftar_user'), 'face', 'Data User'),
            array('laporan_admin', array('laporan_admin', 'Laporan'), 'question_answer', 'Laporan'),
            array('data_admin', array('data_admin', 'edit_admin'), 'account_box', 'Profil')
        );
    }

    public function get_all_menu_user()
    {
        return array(
            //array('alamat_menu','persamaan_alamat', 'ikon', 'nama')
            array('dashboard', array('dashboard',""), 'dashboard', 'Dashboard'),
            array('tambah_kos', array('tambah_kos'), 'add', 'Buat Kos'),
            array('data_kos', array('data_kos','edit_kos'), 'home', 'Kos Anda'),
            array('data_user', array('data_user','edit_user'), 'face', 'Profil')
        );
    }
}
