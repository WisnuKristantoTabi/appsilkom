<?php

class Semester_model extends CI_Model
{
  private $_table = 'tsemester';

  public $nama_semester;

  public function __construct()
  {
    parent::__construct();
  }

  public function rules()
  {
    return [
      [
        'field' => 'nama',
        'label' => 'Nama',
        'rules' => 'required'
      ]
    ];
  }

  public function insert($data)
  {
    $this->nama_semester = $data['nama'];
    return $this->db->insert($this->_table, $this);
  }

  public function update($id, $data)
  {
    $this->nama_semester = $data['nama'];
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
    return $this->db->get_where($this->_table, ['id' => $id])->row_array();
  }
}
