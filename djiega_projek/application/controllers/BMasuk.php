<?php

defined ('BASEPATH') or exit ('No direct script access allowed');

class BMasuk extends CI_Controller
{
public function __construct()
{
    parent::__construct();
    $this->load->model('BMasuk_model');
}
public function index()
{
    $data['judul'] = "Data Masuk";
    $data['bmasuks'] = $this->BMasuk_model->get();
    $this->load->view('bmasuk/list', $data);
}
public function hapus($id_bmasuk){
    $this->BMasuk_model->delete($id_bmasuk);
    $this->session->set_flashdata('message', 'Data Berhasil Dihapus');
    redirect('bmasuk');
}
public function barang_form($id_bmasuk = ""){
    if($id_bmasuk == ""){
        $data['url_aksi'] = site_url('bmasuk/tambah');
        $data['id_bmasuk'] = '';
        $data['nama_bmasuk'] = '';
        $data['jumlah'] = '';
        $data['satuan'] = '';
        $data['tanggal_masuk'] = '';
        $data['pemasok'] = '';
        $this->load->view('bmasuk/form', $data);
    }else{
        $bmasuk = $this->BMasuk_model->get_id($id_bmasuk);
        $data['url_aksi'] = site_url('bmasuk/edit');
        $data['id_bmasuk'] = $bmasuk->id_bmasuk;
        $data['nama_bmasuk'] = $bmasuk->nama_bmasuk;
        $data['jumlah'] = $bmasuk->jumlah;
        $data['satuan'] = $bmasuk->satuan;
        $data['tanggal_masuk'] = $bmasuk->tanggal_masuk;
        $data['pemasok'] = $bmasuk->pemasok;
        $this->load->view('bmasuk/form', $data);
    }
}
public function tambah(){
    $nama_bmasuk= $this->input->post('nama_bmasuk');
    $jumlah= $this->input->post('jumlah');
    $satuan= $this->input->post('satuan');
    $tanggal_masuk= $this->input->post('tanggal_masuk');
    $pemasok= $this->input->post('pemasok');
    $data = array(
        'nama_bmasuk' => $nama_bmasuk,
        'jumlah' => $jumlah,
        'satuan' => $satuan,
        'tanggal_masuk' => $tanggal_masuk,
        'pemasok' => $pemasok,
    );
    $this->BMasuk_model->insert($data);
    $this->session->set_flashdata('message', 'Data Berhasil Ditambahkan');
    redirect('bmasuk');
}
    public function edit(){
        $id_bmasuk = $this->input->post('id_bmasuk');
        $nama_bmasuk= $this->input->post('nama_bmasuk');
        $jumlah= $this->input->post('jumlah');
        $satuan= $this->input->post('satuan');
        $tanggal_masuk = $this->input->post('tanggal_masuk');
        $pemasok = $this->input->post('pemasok');
        $data = array(
            'nama_bmasuk' => $nama_bmasuk,
            'jumlah' => $jumlah,
            'satuan' => $satuan,
            'tanggal_masuk' => $tanggal_masuk,
            'pemasok' => $pemasok
        );
        $this->BMasuk_model->update($data, $id_bmasuk);
        $this->session->set_flashdata('message', 'Data Berhasil Diupdate');
        redirect('bmasuk');
    }
}
?>