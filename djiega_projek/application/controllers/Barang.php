<?php

defined ('BASEPATH') or exit ('No direct script access allowed');

class Barang extends CI_Controller
{
public function __construct()
{
    parent::__construct();
    $this->load->model('Barang_model');
}
public function index()
{
    $data['judul'] = "Data Barang";
    $data['barangs'] = $this->Barang_model->get();
    $this->load->view('barang/list', $data);
}
public function hapus($id_barang){
    $this->Barang_model->delete($id_barang);
    $this->session->set_flashdata('message', 'Data Berhasil Dihapus');
    redirect('barang');
}
public function barang_form($id_barang = ""){
    if($id_barang == ""){
        $data['url_aksi'] = site_url('barang/tambah');
        $data['id_barang'] = '';
        $data['nama_barang'] = '';
        $data['stok'] = '';
        $data['satuan'] = '';
        $this->load->view('barang/form', $data);
    }else{
        $barang = $this->Barang_model->get_id($id_barang);
        $data['url_aksi'] = site_url('barang/edit');
        $data['id_barang'] = $barang->id_barang;
        $data['nama_barang'] = $barang->nama_barang;
        $data['stok'] = $barang->stok;
        $data['satuan'] = $barang->satuan;
        $this->load->view('barang/form', $data);
    }
}
public function tambah(){
    $nama_barang= $this->input->post('nama_barang');
    $stok= $this->input->post('stok');
    $satuan= $this->input->post('satuan');
    $data = array(
        'nama_barang' => $nama_barang,
        'stok' => $stok,
        'satuan' => $satuan,
    );
    $this->Barang_model->insert($data);
    $this->session->set_flashdata('message', 'Data Berhasil Ditambahkan');
    redirect('barang');
}
    public function edit(){
        $id_barang = $this->input->post('id_barang');
        $nama_barang= $this->input->post('nama_barang');
        $stok = $this->input->post('stok');
        $satuan = $this->input->post('satuan');
        $data = array(
            'nama_barang' => $nama_barang,
            'stok' => $stok,
            'satuan' => $satuan,
        );
        $this->Barang_model->update($data, $id_barang);
        $this->session->set_flashdata('message', 'Data Berhasil Diupdate');
        redirect('barang');
    }
}
?>
