<section id="main-content">
      <section class="wrapper">
        <h4><i class=""></i>Data Pesanan</h4>
        <!-- BASIC FORM VALIDATION -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <form role="form" class="form-horizontal style-form">
              <br>
        <div class="col-lg-12">
            <div class="content-panel">
              <h4><i class=""></i> Data Pesanan</h4>
              
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>Id Paket</th>
                            <th>Nama Pemesan</th>
                            <th>No Hp</th>
                            <th>Email</th>
                            <th>Alamat</th>
                
                            
                    </tr>
                  </thead>
                  <?php 
                  $no = 1;
                  foreach($tb_pesanan as $val){?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?=$val->id_paket;?></td>
                          <td><?=$val->nama_pemesan;?></td>
                          <td><?=$val->no_hp;?></td>
                          <td><?=$val->email;?></td>
                          <td><?=$val->alamat;?></td>
                          
                          
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