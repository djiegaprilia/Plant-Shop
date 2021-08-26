

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name"></h1>

            </div>
            <div class="card" style="width:400px">

            <h3>LOGIN</h3>
            <h5>SISTEM INFORMASI INVENTORI BARANG</h5>
           <img class="card-img-top mx-auto d-block " src="<?php echo base_url('assets'); ?>/dist/img/inventory.png" alt="Card image" style="width:25%"  >
            <?php
                $errors = $this->session->flashdata('errors');
                if(!empty($errors)){
                ?>
                <div class="row">
                    <div class="col-md-12">
                    <div class="alert alert-danger text-center">
                        <?php foreach($errors as $key=>$error){ ?>
                        <?php echo "$error<br>"; ?>
                        <?php } ?>
                    </div>
                    </div>
                </div>
            <?php } ?>
            <div class="card-body">                
            <form class="m-t" role="form" action="<?php echo site_url('/auth/proses_login'); ?>" method="post">
                <div class="form-group">
                    <input type="text" name ="username" id="text" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" name ="password" id="inputPassword" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-success block full-width m-b">Masuk</button>
                <p class="text-muted text-center"><small>Belum Punya Akun?</small></p>
                <a class="btn btn-sm btn-secondary btn-block" href="<?php echo site_url('/auth/proses_register'); ?>">Buat Akun</a>
            </form>
            </div>

      
   
