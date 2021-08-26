<?php $this->load->view('layout/header'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1>Sistem Informasi Inventori Barang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
      <section class="content">
    <?php
			  if($this->session->userdata('message') !="") {
				?>
				<div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-check"></i>Informasi</h5>
            <?=$this->session->userdata('message')?>
        </div>
				<?php
			}
			?>
        <div class="card-header">
          <h3 class="card-title"><?=$judul?></h3>

          <div class="card-tools">
          <a href="<?=site_url('/pemasok/form')?>">
          <small class="badge badge-primary"><i class="fa fa-plus"></i>Tambah Data</small></a>
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
           
          </div>
        </div>
        <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>NO</th>
                    <th>Nama Pemasok</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  foreach ($pemasoks as $key => $value){
?> 
                  <tr>
                    <td><?=$key + 1?></td>
                    <td><?=$value->nama?></td>
                    <td><?=$value->alamat?></td>
                    <td><?=$value->no_hp?></td>
                  <td>
                      <a href="<?=site_url('pemasok/hapus/').$value->id_pemasok;?>"><small class="badge badge-danger"><i class="fa fa-trash"></i></small></a>
                      <a href="<?=site_url('pemasok/form/').$value->id_pemasok;?>"><small class="badge badge-warning"><i class="fa fa-edit text-white"></i></small></a>
                      </td>
                  </tr>
                  <?php
             }
 ?>
                  </tbody>
                </table>
        </div>
        <!-- /.card-body -->
        
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
	<?php $this->load->view('layout/footer'); ?>