<form action="<?= site_url('Bookingtravel/kirim_data_pesanan'); ?>" method="POST">
<!--main content start-->
<section id="main-content">
      <section class="submit">
      <a class="submit" href="<?=site_url('Bookingtravel/Home')?>">
											KEMBALI <i class=""></i>
											</a>
        <h4><i class=""></i> Masukan Data Pesanan</h4>
        <!-- BASIC FORM VALIDATION -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <form role="form" class="form-horizontal style-form">
              
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Pilih Jenis Paket</label>
                  <div class="col-lg-10">
                  <select class="form-control" name="id_paket">
                      <option value="1">Paket A</option>
                      <option value="2">Paket B</option>
                      <option value="3">Paket S</option>
                  
                  </select>
                  </div>
                </div>
                
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Nama Pemesan</label>
                  <div class="col-lg-8">
                    <input type="text" placeholder="" name="nama_pemesan" class="form-control">
                  </div>
                </div>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">No HP</label>
                  <div class="col-lg-8">
                    <input type="text" placeholder="" name="no_hp" class="form-control">
                  </div>
                </div>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Alamat Email Anda</label>
                  <div class="col-lg-8">
                    <input type="text" placeholder="" name="email" class="form-control">
                  </div>
                </div>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Alamat anda</label>
                  <div class="col-lg-8">
                    <input type="text" placeholder="" name="alamat" class="form-control">
                  </div>
                </div>
                <div class="submit">
                  <div class="col-lg-offset-2 col-lg-10">
                    <button class="submit" type="submit">Submit</button>
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

    