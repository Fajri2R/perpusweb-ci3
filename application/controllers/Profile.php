<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_profile');
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $isi['user'] = $this->m_profile->getDataUser();
        $isi['title'] = 'Profil';
        $isi['title2'] = '<b>E</b>-Perpus';
        $isi['content'] = 'Dashboard';
        $this->load->view('templates/header', $isi);
        $this->load->view('templates/sidebar', $isi);
        $this->load->view('user/v_profil', $isi);
        $this->load->view('templates/footer');
    }
}