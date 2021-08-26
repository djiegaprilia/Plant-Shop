<?php

defined ('BASEPATH') or exit ('No direct script access allowed');

class BMasuk_model extends CI_Model
{
    public $table = "barang_masuk";
    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        return $this->db->get($this->table)->result();
    }
    public function get_id($id_bmasuk)
    {
        $this->db->where('id_bmasuk',$id_bmasuk);
        return $this->db->get($this->table)->row();
    }
    public function delete($id_bmasuk)
    {
        $this->db->where('id_bmasuk',$id_bmasuk);
        $this->db->delete($this->table);
    }
    public function insert($data)
    {
        $this->db->insert($this->table, $data);
    }
    public function update($data, $id_bmasuk)
    {
        $this->db->where('id_bmasuk',$id_bmasuk);
        $this->db->update($this->table, $data);
    }
}

