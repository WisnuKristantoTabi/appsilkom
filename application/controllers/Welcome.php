<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
    {
      parent::__construct();
      //is_logged_in();
      $this->load->library('form_validation');
      $this->load->model('Matakuliah_model', 'model');
    }
	public function index()
	{
		$data['title'] = 'Daftar Matakuliah';
		$data['matakuliah'] = $this->model->get_all();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/daftarmatakuliah', $data);
		$this->load->view('templates/footer', $data);
	}

	public function detail($id)
    {
      $data['detail'] = $this->model->get($id);
      $data['title'] = "Matakuliah : " . $data['detail']['nama'];
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $this->load->view('templates/header', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('courses/detail/matakuliah', $data);
      $this->load->view('templates/footer', $data);
    }
}
