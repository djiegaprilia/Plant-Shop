<?php

defined ('BASEPATH') or exit ('No direct script access allowed');

class Barang_model extends CI_Model
{
    public $table = "barang";
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Barang_model");
        $this->load->library('form_validation');
    }
    public function get()
    {
        return $this->db->get($this->table)->result();
    }
    public function get_id($id_barang)
    {
        $this->db->where('id_barang',$id_barang);
        return $this->db->get_where($this->table, ["id_barang" => $id_barang])->row();
    }
    public function delete($id_barang)
    {
        $this->db->where('id_barang',$id_barang);
        $this->db->delete($this->table);
    }
    public function insert($data)
    {
        $this->db->insert($this->table, $data);
    }
    public function update($data, $id_barang)
    {
        $this->db->where('id_barang', $id_barang);
        $this->db->update($this->table, $data);
    }
}

