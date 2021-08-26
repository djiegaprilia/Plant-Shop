<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Pemasok_model extends CI_Model 
{
    public $table = "pemasok";
    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        return $this->db->get($this->table)->result();
    }
    public function get_id($id_pemasok)
    {
        $this->db->where('id_pemasok', $id_pemasok);
        return $this->db->get($this->table)->row();
    }
    public function delete($id_pemasok)
    {
        $this->db->where('id_pemasok', $id_pemasok);
        $this->db->delete($this->table);
    }
    public function insert($data)
    {
        $this->db->insert($this->table, $data);
    }
    public function update($data, $id_pemasok)
    {
        $this->db->where('id_pemasok', $id_pemasok);
        $this->db->update($this->table, $data);
        
    }
}

