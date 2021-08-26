<?php

defined ('BASEPATH') or exit ('No direct script access allowed');

class BKeluar extends CI_Controller
{
public function __construct()
{
    parent::__construct();
    $this->load->model('BKeluar_model');
}
public function index()
{
    $data['judul'] = "Data Keluar";
    $data['bkeluars'] = $this->BKeluar_model->get();
    $this->load->view('bkeluar/list', $data);
}
public function hapus($id_keluar){
    $this->BKeluar_model->delete($id_keluar);
    $this->session->set_flashdata('message', 'Data Berhasil Dihapus');
    redirect('bkeluar');
}
public function barang_form($id_keluar = ""){
    if($id_keluar == ""){
        $data['url_aksi'] = site_url('bkeluar/tambah');
        $data['id_keluar'] = '';
        $data['nama_barang'] = '';
        $data['jumlah'] = '';
        $data['satuan'] = '';
        $data['tanggal_masuk'] = '';
        $data['tanggal_keluar'] = '';
        $this->load->view('bkeluar/form', $data);
    }else{
        $bkeluar = $this->BKeluar_model->get_id($id_keluar);
        $data['url_aksi'] = site_url('bkeluar/edit');
        $data['id_keluar'] = $bkeluar->id_keluar;
        $data['nama_barang'] = $bkeluar->nama_barang;
        $data['jumlah'] = $bkeluar->jumlah;
        $data['satuan'] = $bkeluar->satuan;
        $data['tanggal_masuk'] = $bkeluar->tanggal_masuk;
        $data['tanggal_keluar'] = $bkeluar->tanggal_keluar;
        $this->load->view('bkeluar/form', $data);
    }
}
public function tambah(){
    $nama_barang= $this->input->post('nama_barang');
    $jumlah= $this->input->post('jumlah');
    $satuan= $this->input->post('satuan');
    $tanggal_masuk= $this->input->post('tanggal_masuk');
    $tanggal_keluar= $this->input->post('tanggal_keluar');
    $data = array(
        'nama_barang' => $nama_barang,
        'jumlah' => $jumlah,
        'satuan' => $satuan,
        'tanggal_masuk' => $tanggal_masuk,
        'tanggal_keluar' => $tanggal_keluar,
    );
    $this->BKeluar_model->insert($data);
    $this->session->set_flashdata('message', 'Data Berhasil Ditambahkan');
    redirect('bkeluar');
}
    public function edit(){
        $id_keluar = $this->input->post('id_keluar');
        $nama_barang= $this->input->post('nama_barang');
        $jumlah= $this->input->post('jumlah');
        $satuan= $this->input->post('satuan');
        $tanggal_masuk = $this->input->post('tanggal_masuk');
        $tanggal_keluar = $this->input->post('tanggal_keluar');
        $data = array(
            'nama_barang' => $nama_barang,
            'jumlah' => $jumlah,
            'satuan' => $satuan,
            'tanggal_masuk' => $tanggal_masuk,
            'tanggal_keluar' => $tanggal_keluar
        );
        $this->BKeluar_model->update($data, $id_keluar);
        $this->session->set_flashdata('message', 'Data Berhasil Diupdate');
        redirect('bkeluar');
    }
}
?>