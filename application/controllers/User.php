<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
  }

  public function index()
  {
    $data['title'] = 'My Profile';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('user/index', $data);
    $this->load->view('templates/footer', $data);
  }

  public function edit()
  {
    $data['title'] = 'Edit Profile';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('user/edit', $data);
      $this->load->view('templates/footer', $data);
    } else {
      $name = $this->input->post('name');
      $email = $this->input->post('email');
      $upload_image = $_FILES['image']['name'];

      if ($upload_image) {
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']     = '2048';
        $config['upload_path'] = './assets/img/profile/';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
          $old_image = $data['user']['image'];
          if ($old_image != 'default.jpg') {
            unlink(FCPATH . 'assets/img/profile/' . $old_image);
          }
          $new_image = $this->upload->data('file_name');
          $this->db->set('image', $new_image);
        } else {
          echo $this->upload->display_errors();
        }
      }

      $this->db->set('name', $name);
      $this->db->where('email', $email);
      $this->db->update('user');

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been updated!</div>');
      redirect('user');
    }
  }

  public function changePassword()
  {
    $data['title'] = 'Change Password';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
    $this->form_validation->set_rules('new_password1', 'New Passowrd', 'required|trim|min_length[6]|matches[new_password2]');
    $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[6]|matches[new_password1]');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('user/changepassword', $data);
      $this->load->view('templates/footer', $data);
    } else {
      $current_password = $this->input->post('current_password');
      $new_password = $this->input->post('new_password1');
      if (!password_verify($current_password, $data['user']['password'])) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Current Password!</div>');
        redirect('user/changepassword');
      } else {
        if ($current_password == $new_password) {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New Password Cannot be the same as current password!</div>');
          redirect('user/changepassword');
        } else {
          $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

          $this->db->set('password', $password_hash);
          $this->db->where('email', $this->session->userdata('email'));
          $this->db->update('user');
          $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password Changed!</div>');
          redirect('user/changepassword');
        }
      }
    }
  }

  public function beasiswa()
  {
    $data['title'] = 'Beasiswa';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['prodi'] = $this->db->get_where('prodi')->result_array();
    $data['kelamin'] = $this->db->get_where('kelamin')->result_array();
    $data['status'] = $this->db->get_where('status')->result_array();

    $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
    $this->form_validation->set_rules('nim', 'NIM', 'required|trim');
    $this->form_validation->set_rules('prodi', 'Prodi', 'required|trim');
    $this->form_validation->set_rules('kelamin', 'Kelamin', 'required|trim');
    $this->form_validation->set_rules('no', 'No', 'required|trim');
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[beasiswa.email]', ['is_unique' => 'This email has already been registed!']);
    $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
    $this->form_validation->set_rules('masuk', 'Masuk', 'required|trim');
    $this->form_validation->set_rules('keluar', 'Keluar', 'required|trim');
    $this->form_validation->set_rules('status', 'Status', 'required|trim');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('user/beasiswa', $data);
      $this->load->view('templates/footer', $data);
    } else {
      $data = [
        'nama' => htmlspecialchars($this->input->post('nama', true)),
        'nim' => htmlspecialchars($this->input->post('nim', true)),
        'prodi' => $this->input->post('prodi', true),
        'kelamin' => $this->input->post('kelamin', true),
        'no' => htmlspecialchars($this->input->post('no', true)),
        'email' => htmlspecialchars($this->input->post('email', true)),
        'alamat' => htmlspecialchars($this->input->post('alamat', true)),
        'masuk' => $this->input->post('masuk', true),
        'keluar' => $this->input->post('keluar', true),
        'status' => $this->input->post('status', true),
      ];
      $this->db->insert('beasiswa', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Akun Beasiswa Berhasil Dibuat</div>');
      redirect('user/beasiswa');
    }
  }
}
