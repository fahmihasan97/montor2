<?php if($this->session->userdata('level') == "admin"){ ?>
<a href="<?= base_url('admin/overview_tambah/') ?>" class="btn btn-primary">Tambah</a>
<?php } ?>
<br /><br /><br />
<?= $this->session->flashdata('pesan') ?>
 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>T/L</th>
                  <th>Tower</th>
                  <th>Jenis</th>
                  <th>Status</th>
                  <th>Tgl. Justifikasi</th>
                  <th>Update</th>
                  <th>Penanganan</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                 <tbody>
                 <?php $no=1; foreach($data as $admin): ?>
                 <tr>
                 <td><?= $no ?></td>
                 <td><?= $admin['tl'] ?></td> 
                 <td><?= $admin['tower'] ?></td>
                 <td><?= $admin['jenis'] ?></td>
                 <td><font color="red"><b><?= $admin['status'] ?></b></font></td> 
                 <td><?= $admin['tgl'] ?></td>
                 <td><?= $admin['update'] ?></td>
                 <td><?= $admin['penanganan'] ?></td>
                <?php if($this->session->userdata('level') == "admin"){ ?>
                 <td><a href="<?= base_url('admin/overview_edit/'.$admin['id_overview']) ?>" class="btn btn-info">Edit</a> <a href="<?= base_url('admin/overview_hapus/'.$admin['id_overview']) ?>" class="btn btn-danger">Hapus</a><a href="<?= base_url('admin/details/'.$admin['id_krisis']) ?>" class="btn btn-success btn-md">Rincian</a>
                 <?php }elseif($this->session->userdata('level') == "user"){ ?>
                  <td><a href="<?= base_url('admin/details/'.$admin['id_krisis']) ?>" class="btn btn-success btn-md">Rincian</a></td>  <?php } ?>
                 </tr>

                 <?php $no++; endforeach; ?>
                 
                 </tbody>
              </table>


 
 
 