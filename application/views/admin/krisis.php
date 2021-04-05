<a href="<?= base_url('admin/krisis_tambah/') ?>" class="btn btn-primary">Tambah</a>
<br /><br /><br />
<?= $this->session->flashdata('pesan') ?>
 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Tgl</th>
                  <th>No</th>
                  <th>UPT</th>
                  <th>ULTG</th>
                  <th>Penghantar</th>
                  <th>KV</th>
                  <th>Tower</th>
                  <th>Jenis</th>
                  <th>KKP</th>
                  <th>Kelengkapan Lingkungan</th>
                  <th>Kelengkapan Pondasi</th>
                  <th>Kelengkapan Foto</th>
                  <th>Skor Lingkungan</th>
                  <th>Skor Pondasi</th>
                  <th>Skor Hujan</th>
                  <th>Klasifikasi Lingkungan</th>
                  <th>Klasifikasi Pondasi</th>
                  <th>Klasifikasi Hujan</th>
                  <th>Anomali</th>
                  <th>Tautan</th>
                  <th>Risiko</th>
                  <th>Mitigasi</th>
                  <th>Penanganan</th>
                  <th>Keterangan</th>
                  <th>Foto 1</th>
                  <th>Foto 2</th>
                  <th>Foto 3</th>
                  <th>Foto 4</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                 <tbody>
                 <?php $no=1; foreach($data as $admin): ?>
                 <tr>
                  <td><?= $admin['tgl'] ?></td>
                 <td><?= $no ?></td>
                 <td><?= $admin['upt'] ?></td> 
                 <td><?= $admin['ultg'] ?></td>
                 <td><?= $admin['penghantar'] ?></td>
                 <td><?= $admin['kv'] ?></td>
                 <td><?= $admin['tower'] ?></b></font></td> 
                 <td><?= $admin['jenis'] ?></td>
                <td><font color="red"><b><?= $admin['kkp'] ?></td>
                 <td><font color="red"><b><?= $admin['kelling'] ?></td>
                <td><font color="red"><b><?= $admin['kelpo'] ?></td>
                <td><font color="red"><b><?= $admin['kelfo'] ?></td>
                 <td><font color="red"><b><?= $admin['skoli'] ?></td>
                 <td><font color="red"><b><?= $admin['skopo'] ?></td>
                 <td><font color="red"><b><?= $admin['skohu'] ?></td>
                 <td><font color="red"><b><?= $admin['klali'] ?></td>
                 <td><font color="red"><b><?= $admin['klapo'] ?>
                 <td><font color="red"><b><?= $admin['klahu'] ?></td>
                 <td><?= $admin['anomali'] ?></td>
                 <td><?= $admin['tautan'] ?>
                 <td><?= $admin['risiko'] ?></td>
                 <td><?= $admin['mitigasi'] ?></td>
                 <td><?= $admin['penanganan'] ?></td>
                 <td><?= $admin['keterangan'] ?></td>
                  <td><img src="<?= base_url('template/data/'.$admin['foto']) ?>" class="img-responsive" style="width: 100px;height: 100xp"></td>
                  <td><img src="<?= base_url('template/data/'.$admin['foto1']) ?>" class="img-responsive" style="width: 100px;height: 100xp"></td>
                  <td><img src="<?= base_url('template/data/'.$admin['foto2']) ?>" class="img-responsive" style="width: 100px;height: 100xp"></td>
                  <td><img src="<?= base_url('template/data/'.$admin['foto3']) ?>" class="img-responsive" style="width: 100px;height: 100xp"></td>
                 <td><a href="<?= base_url('admin/krisis_edit/'.$admin['id_krisis']) ?>" class="btn btn-info">Edit</a> <a href="<?= base_url('admin/krisis_hapus/'.$admin['id_krisis']) ?>" class="btn btn-danger">Hapus</a><a href="<?= base_url('admin/details/'.$admin['id_krisis']) ?>" class="btn btn-success btn-md">Rincian</a></td> 
                 </tr>

                 <?php $no++; endforeach; ?>
                 
                 </tbody>
              </table>
<script>
 $(document).ready(function() {
    $('#example1').DataTable( {
        "scrollX": true
    } );
} );
</script>
