<section id="main-content">
      <section class="wrapper">
        <h4><i class=""></i>Data User</h4>
        <!-- BASIC FORM VALIDATION -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <form role="form" class="form-horizontal style-form">
              <br>
        <div class="col-lg-12">
            <div class="content-panel">
              <h4><i class=""></i> Data User</h4>
              <div class="row">
                <div class="col-md-6">
					<div class="btn-group">
						<a class="btn green" href="<?=site_url('Backend/form_tambah_data_user')?>">
						Add <i class="fa fa-plus"></i>
						</a>
					</div>
										
				</div>
									
			  </div>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>Username</th>
                            <th>Password</th>
                            <th>Nama User</th>
                            <th>No Hp</th>
                            <th>Alamat</th>
                            <th>Email</th>
                    </tr>
                  </thead>
                  <?php 
                  $no = 1;
                  foreach($tb_user as $val){?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?=$val->nama;?></td>
                          <td><?=$val->password;?></td>
                          <td><?=$val->nama_lengkap;?></td>
                          <td><?=$val->no_hp;?></td>
                          <td><?=$val->alamat;?></td>
                          <td><?=$val->email;?></td>
                    </tr>
                  <?php } ?>
                </table>
              </section>
            </div>
            </div>
          <!-- /col-lg-12 -->
        </div>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
  </section>