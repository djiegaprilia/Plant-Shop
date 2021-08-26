<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pemasok extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pemasok_model');
    }
    public function index()
    {
        $data['judul'] = "Data Pemasok";
        $data['pemasoks'] = $this->Pemasok_model->get();
        $this->load->view('pemasok/list' , $data);
    }
    public function hapus($id_pemasok)
    {
        $this->Pemasok_model->delete($id_pemasok);
        $this->session->set_flashdata('message', 'Data Berhasil Dihapus');
        redirect('pemasok');
    }
    public function form($id_pemasok="")
    {
        if ($id_pemasok == "") {
            $data['url_aksi'] = site_url('pemasok/tambah');
            $data['id_pemasok'] = '';
            $data['nama'] = '';
            $data['alamat'] = '';
            $data['no_hp'] = '';
            $this->load->view('pemasok/form',$data);
        }else{
            $pemasok = $this->Pemasok_model->get_id($id_pemasok);
            $data['url_aksi'] = site_url('pemasok/edit');
            $data['id_pemasok'] = $pemasok->id_pemasok;
            $data['nama'] = $pemasok->nama;
            $data['alamat'] = $pemasok->alamat;
            $data['no_hp'] = $pemasok->no_hp;
            $this->load->view('pemasok/form', $data);
        }
    }
    public function tambah()
    {
        $data['nama'] = $this->input->post('nama');
        $data['no_hp'] = $this->input->post('no_hp');
        $data['alamat'] = $this->input->post('alamat');
        $this->Pemasok_model->insert($data);
        $this->session->set_flashdata('message', 'Data Berhasil Ditambahkan');
        redirect('pemasok');
    }

    public function edit()
    {
        $id_pemasok = $this->input->post('id_pemasok');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');
        $data = array (
            'nama' => $nama,
            'alamat' => $alamat,
            'no_hp' => $no_hp,
        );
        $this->Pemasok_model->update($data, $id_pemasok);
        $this->session->set_flashdata('message', 'Data Berhasil Diupdate');
        redirect('pemasok');
    }
}

