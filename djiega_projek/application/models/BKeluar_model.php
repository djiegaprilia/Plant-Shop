<?php

defined ('BASEPATH') or exit ('No direct script access allowed');

class BKeluar_model extends CI_Model
{
    public $table = "barang_keluar";
    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        return $this->db->get($this->table)->result();
    }
    public function get_id($id_keluar)
    {
        $this->db->where('id_keluar',$id_keluar);
        return $this->db->get($this->table)->row();
    }
    public function delete($id_keluar)
    {
        $this->db->where('id_keluar',$id_keluar);
        $this->db->delete($this->table);
    }
    public function insert($data)
    {
        $this->db->insert($this->table, $data);
    }
    public function update($data, $id_keluar)
    {
        $this->db->where('id_keluar',$id_keluar);
        $this->db->update($this->table, $data);
    }
}

