<?php

class Dosen_model extends CI_Model
{
  private $_table = 'tdosen';
  public $nip;
  public $nama;

  public function __construct()
  {
    parent::__construct();
  }

  public function rules()
  {
    return [
      [
        'field' => 'nip',
        'label' => 'NIP',
        'rules' => 'required'
      ],
      [
        'field' => 'nama',
        'label' => 'Nama',
        'rules' => 'required'
      ]
    ];
  }

  public function insert($data)
  {
    $this->nip = $data['nip'];
    $this->nama = $data['nama'];
    return $this->db->insert($this->_table, $this);
  }

  public function update($id, $data)
  {
    $this->nip = $data['nip'];
    $this->nama = $data['nama'];
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
