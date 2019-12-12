<?php

class Matakuliah_model extends CI_Model
{
  private $_table = 'tmatakuliah';
  public $kode_mk;
  public $nama_mk;
  public $status;
  public $id_semester;
  public $id_dosen;
  public $deskripsi_mk;


  public function __construct()
  {
    parent::__construct();
  }

  public function rules()
  {
    return [
      [
        'field' => 'kode',
        'label' => 'KODE MK',
        'rules' => 'required'
      ],
      [
        'field' => 'nama',
        'label' => 'Nama MK',
        'rules' => 'required'
      ],
      [
        'field' => 'status',
        'label' => 'Status',
        'rules' => 'required'
      ],
      [
        'field' => 'semester',
        'label' => 'ID Semester',
        'rules' => 'required'
      ],
      [
        'field' => 'dosen',
        'label' => 'ID Dosen 1',
        'rules' => 'required'
      ],
      [
        'field' => 'dosen2',
        'label' => 'ID Dosen 2',
        'rules' => 'required'
      ],
      [
        'field' => 'deskripsi',
        'label' => 'Deskripsi',
        'rules' => ''
      ],
    ];
  }

  public function insert($data)
  {
    $this->kode_mk = $data['kode'];
    $this->nama_mk = $data['nama'];
    $this->status = $data['status'];
    $this->id_semester = $data['semester'];
    $this->id_dosen = $data['dosen'];
    $this->id_dosen2 = $data['dosen2'];
    $this->deskripsi_mk = $data['deskripsi'];
    return $this->db->insert($this->_table, $this);
  }

  public function update($id, $data)
  {
    $this->kode_mk = $data['kode'];
    $this->nama_mk = $data['nama'];
    $this->status = $data['status'];
    $this->id_semester = $data['semester'];
    $this->id_dosen = $data['dosen'];
    $this->id_dosen2 = $data['dosen2'];
    $this->deskripsi_mk = $data['deskripsi'];
    return $this->db->update($this->_table, $this, ['id' => $id]);
  }

  public function delete($id)
  {
    return $this->db->delete($this->_table, ['id' => $id]);
  }

  public function get_all()
  {
    return $this->db->get($this->_table)->result_array();
  }

  public function get($id)
  {
    $this->db->select("tmatakuliah.id as id_mk, nama_mk as nama, pengajar1.nama as pengajar, pengajar2.nama as pengajar2, tsemester.nama_semester as semester, kode_mk, status, deskripsi_mk");
    $this->db->join('tdosen as pengajar1', 'pengajar1.id = tmatakuliah.id_dosen');
    $this->db->join('tdosen as pengajar2', 'pengajar2.id = tmatakuliah.id_dosen2');
    $this->db->join('tsemester', 'tsemester.id = tmatakuliah.id_semester');
    return $this->db->get_where($this->_table, ['tmatakuliah.id' => $id])->row_array();
  }

  public function get_semester()
  {
    return $this->db->get('tsemester')->result_array();
  }

  public function get_dosen()
  {
    return $this->db->get('tdosen')->result_array();
  }
}
