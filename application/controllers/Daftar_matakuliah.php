<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar_matakuliah extends CI_Controller
{
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
    $data['semester'] = $this->model->get_semester();
    $data['dosen'] = $this->model->get_dosen();
    $data['matakuliah'] = $this->model->get_all();
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['menu'] = $this->db->get('user_menu')->result_array();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('user/daftarmatakuliah', $data);
    $this->load->view('templates/footer', $data);
  }

  public function detail($id)
  {
    $data['detail'] = $this->model->get($id);
    $data['title'] = "Matakuliah : " . $data['detail']['nama'];
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['menu'] = $this->db->get('user_menu')->result_array();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('courses/detail/matakuliah', $data);
    $this->load->view('templates/footer', $data);
  }

  public function print($id)
  {
    $this->load->library('Pdf');
    $pdf = new FPDF('p', 'mm', 'A4');
    $data = $this->model->get($id);
    $matkul = strtoupper($data['nama']);
    // $pdf->AddPage();
    // $pdf->SetTitle($data['nama']);
    // $pdf->SetFont('Arial', 'B', 16);
    // $pdf->Cell(190, 7, $matkul, 0, 1, 'C');
    // $pdf->SetFont('Arial', 'B', 12);
    // $pdf->Cell(190, 7, 'DETAIL MATAKULIAH', 0, 1, 'C');
    // $pdf->Cell(10, 7, '', 0, 1);
    // $pdf->SetFont('Arial', 'B', 10);
    // $pdf->Cell(66, 6, 'NAMA', 1, 0, 'C');
    // $pdf->Cell(30, 6, 'KODE', 1, 0, 'C');
    // $pdf->Cell(22, 6, 'SEMESTER', 1, 0, 'C');
    // $pdf->Cell(20, 6, 'STATUS', 1, 0, 'C');
    // $pdf->Cell(78, 6, 'PENGAJAR 1', 1, 0, 'C');
    // $pdf->Cell(78, 6, 'PENGAJAR 2', 1, 1, 'C');
    // $pdf->SetFont('Arial', '', 12);
    // $pdf->Cell(66, 6, $data['nama'], 1, 0);
    // $pdf->Cell(30, 6, $data['kode_mk'], 1, 0);
    // $pdf->Cell(22, 6, $data['semester'], 1, 0);
    // $pdf->Cell(20, 6, $data['status'], 1, 0);
    // $pdf->Cell(78, 6, $data['pengajar'], 1, 0);
    // $pdf->Cell(78, 6, $data['pengajar2'], 1, 1);
    // $pdf->Output('I', $data['kode_mk'] . ' - ' . $data['nama'] . '.pdf');

    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 16);

    $pdf->Cell(1, 1,  "Nama Matakuliah : " . $data['nama']);
    $pdf->Cell(1, 29,  "Kode Matakuliah : " . $data['kode_mk']);
    $pdf->Cell(1, 57, "Semester : " . $data['semester']);
    $pdf->Cell(1, 85, "Pengajar 1 : " . $data['pengajar']);
    $pdf->Cell(1, 113, "Pengajar 2 : " . $data['pengajar2']);
    $pdf->Cell(1, 141, "Status : " . $data['status']);
    $pdf->Cell(1, 171, "Deskripsi : " . $data['deskripsi_mk']);

    $pdf->Output();
  }
}
