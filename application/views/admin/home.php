<?php
 if($this->session->userdata('level') == "admin" ){

 ?>
<div class="container"><?= $this->session->flashdata('pesan'); ?></div>
<br /><br /><br />
<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          
        

 
              <div class="chart">
                <canvas id="barChart" style="height:230px"></canvas>
              </div>
            

<?php }elseif($this->session->userdata('level') == "user"){ ?>

<div class="container"><?= $this->session->flashdata('pesan'); ?></div>

<div class="callout callout-success">
                <h4><i class="fa fa-cubes"></i>Selamat Datang </h4>

                <p>Anda Login Sebagai User Silahkan Pilih Menu Di Samping Untuk Menggunakan Sistem</p>
              </div>


<?php }elseif($this->session->userdata('level') == "pegawai"){ ?>

<div class="container"><?= $this->session->flashdata('pesan'); ?></div>
<div class="callout callout-info">
                <h4><i class="fa fa-cubes"></i>Selamat Datang </h4>
                <p>Anda Login Sebagai Pegawai Silahkan Pilih Menu Di Samping Untuk Menggunakan Sistem</p>
              </div>


<?php } ?>