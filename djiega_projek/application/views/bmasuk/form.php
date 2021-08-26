<?php $this->load->view('layout/header'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1>Data Barang Masuk</h1>
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
        <div class="card-header">
        <h3 class="card-title">Form Barang Masuk</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
        <form class="form-horizontal" method="post" action="<?=$url_aksi?>"> 
        <input type="hidden" name="id_bmasuk" value="<?=$id_bmasuk?>">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Nama Barang</label>
                    <div class="col-sm-10">
                      <input type="name" class="form-control" id="name" placeholder="ex : Besi" name="nama_bmasuk" 
                      value="<?=$nama_bmasuk?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="prodi" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="text" placeholder="" name="tanggal_masuk" 
                      value="<?=$tanggal_masuk?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="akreditasi" class="col-sm-2 col-form-label">Jumlah</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="akreditasi" placeholder="ex : 10" name="jumlah" 
                      value="<?=$jumlah?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="akreditasi" class="col-sm-2 col-form-label">Satuan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="akreditasi" placeholder="ex : Kg" name="satuan" 
                      value="<?=$satuan?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="akreditasi" class="col-sm-2 col-form-label">Pemasok</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="akreditasi" placeholder="ex : Rudi" name="pemasok" 
                      value="<?=$pemasok?>">
                    </div>
                  </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <button type="submit" class="btn btn-info">Tambah Data</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
                <!-- /.card-footer -->
              </form>
        </div>
        <!-- /.card-body -->
    
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
	<?php $this->load->view('layout/footer'); ?>