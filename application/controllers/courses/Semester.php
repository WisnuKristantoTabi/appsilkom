<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Semester extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    //is_logged_in();
    $this->load->library('form_validation');
    $this->load->model('Semester_model', 'model');
  }

  public function index()
  {
    $data['title'] = 'Semester';
    $data['semester'] = $this->model->get_all();
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['menu'] = $this->db->get('user_menu')->result_array();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('courses/semester', $data);
    $this->load->view('templates/footer', $data);
  }

  public function add()
  {
    $validation = $this->form_validation->set_rules($this->model->rules());
    if ($validation->run()) {
      $data = $this->input->post();
      $this->model->insert($data);
    }
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Semester baru telah ditambahkan!</div>');
    redirect('semester');
  }

  public function edit($id)
  {
    $validation = $this->form_validation->set_rules($this->model->rules());
    if ($validation->run()) {
      $data = $this->input->post();
      $this->model->update($id, $data);
    }
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Semester telah diperbaharui!</div>');
    redirect('semester');
  }

  public function delete($id)
  {
    if ($this->model->delete($id)) {
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Semester telah dihapus!</div>');
      redirect('semester');
    }
  }
}
