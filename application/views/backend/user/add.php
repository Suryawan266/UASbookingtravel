<form action="<?= site_url('Backend/kirim_data_user'); ?>" method="POST">
<!--main content start-->
<section id="main-content">
      <section class="wrapper">
      <a class="btn green" href="<?=site_url('Backend/form_user')?>">
											KEMBALI <i class=""></i>
											</a>
        <h4><i class=""></i> Masukan Data Baru</h4>
        <!-- BASIC FORM VALIDATION -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <form role="form" class="form-horizontal style-form">
            
                
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Username</label>
                  <div class="col-lg-8">
                    <input type="text" placeholder="" name="nama" class="form-control">
                  </div>
                </div>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Password</label>
                  <div class="col-lg-8">
                    <input type="password" placeholder="" name="password" class="form-control">
                  </div>
                </div>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Nama Lengkap</label>
                  <div class="col-lg-8">
                    <input type="text" placeholder="" name="nama_lengkap" class="form-control">
                  </div>
                </div>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">No HP</label>
                  <div class="col-lg-8">
                    <input type="text" placeholder="" name="no_hp" class="form-control">
                  </div>
                </div>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Alamat</label>
                  <div class="col-lg-8">
                    <input type="text" placeholder="" name="alamat" class="form-control">
                  </div>
                </div>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Email</label>
                  <div class="col-lg-8">
                    <input type="text" placeholder="" name="email" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <button class="btn btn-theme" type="submit">Submit</button>
                  </div>
                </div>
                </form>
                
              </form>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
  </section>
