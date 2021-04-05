<table class="table table-reposive">
	<form action="" method="POST" enctype="multipart/form-data">
	<tr><th>Tanggal</th><td><input type="date" name="tgl" class="form-control" value="<?= $tgl ?>"></td></tr>
	<tr><th>UPT</th><td><select class="form-control" name="upt" required="">
	                          <option value="UPT Malang">UPT Malang</option>
	                          <option value="UPT Bali">UPT Bali</option>
	                          <option value="UPT Gresik">UPT Gresik</option>
	                          <option value="UPT Madiun">UPT Madiun</option>
	                          <option value="UPT Probolinggo">UPT Probolinggo</option>
	                          <option value="UPT Surabaya">UPT Surabaya</option>
                              </select></td></tr>
	<tr><th>ULTG</th><td><select class="form-control" name="ultg" required="">
	                         
                              <option value="ULTG Babat">ULTG Babat</option>
	                          <option value="ULTG Bali Selatan">ULTG Bali Selatan</option>
	                          <option value="ULTG Bali Utara">ULTG Bali Utara</option>
	                          <option value="ULTG Gresik">ULTG Gresik</option>
	                          <option value="ULTG Jember">ULTG Jember</option>
                              <option value="ULTG Kediri">ULTG Kediri</option>
                              <option value="ULTG Krian">ULTG Krian</option>
	                          <option value="ULTG Jember Selatan">ULTG Jember</option>
	                          <option value="ULTG Madiun">ULTG Madiun</option>
	                          <option value="ULTG Malang">ULTG Malang</option>
	                          <option value="ULTG Mojokerto">ULTG Mojokerto</option>
	                          <option value="ULTG Probolinggo">ULTG Probolinggo</option>
	                          <option value="ULTG Sampang">ULTG Sampang</option>
                              <option value="ULTG Kediri">ULTG Kediri</option>
	                          <option value="ULTG Surabaya Selatan ">ULTG Surabaya Selatan</option>
	                          <option value="ULTG Surabaya Utara">ULTG Surabaya Utara</option>
                              </select></td></tr>
    <tr><th>Penghantar</th><td><select class="form-control" name="penghantar" required="">
    						 <option value="Antosari - Negara">Antosari - Negara</option>
    						 <option value="Balongbendo - Sekarputih">Balongbendo - Sekarputih</option>
    						 <option value="Bangkalan - Sampang">Bangkalan - Sampang</option>
    						 <option value="Banyuwangi - Gilimanuk">Banyuwangi - Gilimanuk</option>
    						 <option value="Baturiti - Pemaron">Baturiti - Pemaron</option>
    						 <option value="Cerme - Manyar">Cerme - Manyar</option>
    						 <option value="Darmogrande - Waru">Darmogrande - Waru</option>
    						 <option value="Driyorejo - Babadan">Driyorejo - Babadan</option>
    						 <option value="Gilimanuk - Pemaron">Gilimanuk - Pemanuk</option>
    						 <option value="Gilitimur - Bangkalan">Gilitimur - Bangkalan</option>
    						 <option value="Gilitimur - Bangkalan - Kenjaren">Gilitimur - Bangkalan - Kenjaren</option>
    						 <option value="Gondangwetan - Rejoso">Gondangwetan - Rejoso</option>
    						 <option value="Grati - Krian">Grati - Krian</option>
    						 <option value="Gresik - Krian">Gresik - Krian</option>
    						 <option value="Grati - Tandes">Grati - Tandes</option>
    						 <option value="INC New Pacitan - Nguntoronadi">INC New Pacitan - Nguntoronadi</option>
    						 <option value="Jember - Banyuwangi">Jember - Banyuwangi</option>
    						 <option value="Jember - Genteng - Banyuwangi">Jember - Genteng - Banyuwangi</option>
    						 <option value="Kapal - Baturiti/Payangan">Kapal - Baturiti/Payangan</option>
    						 <option value="Karangpilang - Waru">Karangpilang - Waru</option>
    						 <option value="Kebonagung - Sengguruh">Kebonagung - Sengguruh</option>
    						 <option value="Kebonagung - Sutami">Kebonagung - Sutami</option>
    						 <option value="Kediri - Pedan">Kediri - Pedan</option>
    						 <option value="Lamongan - Paciran">Lamongan - Paciran</option>
    						 <option value="Lumajang - Tanggul">Lumajang - Tanggul</option>
    						 <option value="Manisrejo - Ponorogo">Manisrejo - Ponorogo</option>
    						 <option value="Manyar - Maspion SBM">Manyar - Maspion SBM</option>
    						 <option value="Maspion - Manyar">Maspion - Manyar</option>
    						 <option value="Negara - Gilimanuk">Negara - Gilimanuk</option>
    						 <option value="New Pacitan - New Ponorogo">New Pacitan - New Ponorogo</option>
    						 <option value="New Ponorogo - Pacitan">New Ponorogo - Pacitan</option>
    						 <option value="Ngimbang - Krian">Ngimbang - Krian</option>
    						 <option value="Paiton - Grati">Paiton - Grati</option>
    						 <option value="Paiton - Kediri">Paiton - Kediri</option>
    						 <option value="Paiton - Situbondo">Paiton - Situbondo</option>
    						 <option value="Pemecutan Kelod - Bandara">Pemecutan Kelod - Bandara</option>
    						 <option value="Pesanggaran - Nusadua">Pesanggaran - Nusadua</option>
    						 <option value="PLTU Gresik  - Altaprima">PLTU Gresik  - Altaprima</option>
    						 <option value="Negara - Gilimanuk">Negara - Gilimanuk</option>
    						 <option value="New Pacitan - New Ponorogo">New Pacitan - New Ponorogo</option>
    						 <option value="New Ponorogo - Pacitan">New Ponorogo - Pacitan</option>
    						 <option value="Ngimbang - Krian">Ngimbang - Krian</option>
    						 <option value="Paiton - Grati">Paiton - Grati</option>
    						 <option value="Paiton - Kediri">Paiton - Kediri</option>
    						 <option value="Paiton - Situbondo">Paiton - Situbondo</option>
    						 <option value="Pemecutan Kelod - Bandara">Pemecutan Kelod - Bandara</option>
    						 <option value="Pesanggaran - Nusadua">Pesanggaran - Nusadua</option>
    						 <option value="PLTU Gresik  - Altaprima">PLTU Gresik  - Altaprima</option>

    						 <option value="PLTU Gresik - Tandes">PLTU Gresik - Tandes</option>
    						 <option value="PLTU Pacitan - New Pacitan">PLTU Pacitan - New Pacitan</option>
    						 <option value="PLTU Pacitan - New Pacitan - Nguntoronadi">PLTU Pacitan - New Pacitan - Nguntoronadi</option>
    						 <option value="Probolinggo - Gondangwetan">Probolinggo - Gondangwetan</option>
    						 <option value="Probolinggo - Lumajang">Probolinggo - Lumajang</option>
    						 <option value="Sambikerep - Waru">Sambikerep - Waru</option>
    						 <option value="Sanur - Gianyar">Sanur - Gianyar</option>
    						 <option value="Segoromadu - Cerme">Segoromadu - Cerme</option>
    						 <option value="Segoromadu - Lamongan">Segoromadu - Lamongan</option>
    						 <option value="Segoromadu - Petro">Segoromadu - Petro</option>
    						 <option value="Sekarputih - Siman - Mendalan">Sekarputih - Siman - Mendalan</option>
    						 <option value="Sekarputih - Tarik">Sekarputih - Tarik</option>
	                         <option value="Sekarputih - Ngoro">Sekarputih - Ngoro</option>
	                         <option value="Sekarputih - Mojoagung">Sekarputih - Mojoagung</option>
	                         <option value="Sengkaling - Mendalan">Sengkaling - Mendalan</option>

	                         <option value="Siman - Mendalan + Sekarputih">Siman - Mendalan + Sekarputih</option>
    						 <option value="Sukolilo - Rungkut">Sukolilo - Rungkut</option>
    						 <option value="Surabaya Barat - Altaprima">Surabaya Barat - Altaprima</option>
    						 <option value="Surabaya Barat - Balongbendo">Surabaya Barat - Balongbendo</option>
    						 <option value="Surabaya Barat - Sawahan">Surabaya Barat - Sawahan</option>
    						 <option value="Surabaya Barat - Tandes">Surabaya Barat - Tandes</option>
    						 <option value="Tarik - Driyorejo + Miwon">Tarik - Driyorejo + Miwon</option>
	                         <option value="Ungaran - Krian">Ungaran - Krian</option>
	                         <option value="Ungaran - Ngimbang">Ungaran - Ngimbang</option>
	                         <option value="Waru - Buduran - Maspion">Waru - Buduran - Maspion</option>
	                         <option value="Waru - Buduran - Sidoarjo">Waru - Buduran - Sidoarjo</option>
                             </select></td></tr>
	<tr><th>KV</th><td><select class="form-control" name="kv" required="">
	                          <option value="70">70</option>
	                          <option value="150">150</option>
	                          <option value="500">500</option>
                              </select></td></tr>
	<tr><th>Jenis Tower</th><td><input type="text" name="jenis" class="form-control" value="<?= $jenis ?>"></td></tr>
	<tr><th>No Tower</th><td><input type="number" name="tower" class="form-control" value="<?= $tower ?>"></td></tr>
	<tr><th>*KELENGKAPAN DOKUMEN*</th></tr>
	<tr><th>KKP</th><td><select class="form-control" name="kkp" required="">
	                          <option value="NOK">NOK</option>
	                          <option value="OK">OK</option>
	                          <option value="-">-</option>
                              </select></td></tr>
     <tr><th>Assesmen Lingkungan</th><td><select class="form-control" name="kelling" required="">
	                          <option value="NIHIL">NIHIL</option>
	                          <option value="NOK">NOK</option>
	                          <option value="OK">OK</option>
	                          <option value="-">-</option>
                              </select></td></tr>
     <tr><th>Assesmen Pondasi</th><td><select class="form-control" name="kelpo" required="">
	                          <option value="NIHIL">NIHIL</option>
	                          <option value="NOK">NOK</option>
	                          <option value="OK">OK</option>
	                          <option value="-">-</option>
                              </select></td></tr>
     <tr><th>Kelengkapan Foto</th><td><select class="form-control" name="kelfo" required="">
	                          <option value="NOK">NOK</option>
	                          <option value="OK">OK</option>
	                          <option value="-">-</option>
                              </select></td></tr>
    <tr><th>*SKOR*</th></tr>
	<tr><th>Assesmen Lingkungan</th><td><input type="text" name="skoli" class="form-control" value="<?= $skoli ?>"></td></tr>
	<tr><th>Assesmen Pondasi</th><td><input type="text" name="skopo" class="form-control" value="<?= $skopo ?>"></td></tr>
	<tr><th>Sifat Hujan</th><td><input type="text" name="skohu" class="form-control" value="<?= $skohu ?>"></td></tr>
	<tr><th>*KLASIFIKASI</th></tr>
	<tr><th>Asessmen Lingkungan</th><td><select class="form-control" name="kelfo" required="">
	                          <option value="AMAN">AMAN</option>
	                          <option value="WASPADA">WASPADA</option>
	                          <option value="KRITIS">KRITIS</option>
	                          <option value="-">-</option>
                              </select></td></tr>
    <tr><th>Sifat Hujan</th><td><select class="form-control" name="klahu" required="">
	                          <option value="ATAS NORMAL">ATAS NORMAL</option>
	                          <option value="NORMAL">NORMAL</option>
	                          <option value="BAWAH NORMAL">BAWAH NORMAL</option>
	                          <option value="-">-</option>
                              </select></td></tr>
	<tr><th>Anomali</th><td><input type="text" name="anomali" class="form-control" value="<?= $anomali ?>"></td></tr>
	<tr><th>Keterangan</th><td><input type="text" name="keterangan" class="form-control" value="<?= $keterangan ?>"></td></tr>
	<tr><th>Tautan Folder LINK</th><td><input type="text" name="tautan" class="form-control" value="<?= $tautan ?>"></td></tr>
	<tr><th>Penanganan</th><td><input type="text" name="penanganan" class="form-control" value="<?= $penanganan ?>"></td></tr>
	<tr><th>Risiko</th><td><input type="text" name="risiko" class="form-control" value="<?= $risiko ?>"></td></tr>
	<tr><th>Mitigasi Risiko</th><td><input type="text" name="mitigasi" class="form-control" value="<?= $mitigasi ?>"></td></tr>
	<tr><th>Foto1</th><td>
	<?php 
      if($aksi == "edit"){
        echo '<img src="'.base_url('template/data/'.$foto).'" class="img-responsive" style="width:200px;height:200px">';
      }else{

      }
	?> 
<input type="file" name="file1" value="" class="form-control">
</td></tr>
<tr><th>Foto2</th><td>
	<?php 
      if($aksi == "edit"){
        echo '<img src="'.base_url('template/data/'.$fot1).'" class="img-responsive" style="width:200px;height:200px">';
      }else{

      }
	?>
<input type="file" name="file2" value="" class="form-control">
</td></tr>
<tr><th>Foto3</th><td>
	<?php 
      if($aksi == "edit"){
        echo '<img src="'.base_url('template/data/'.$foto2).'" class="img-responsive" style="width:200px;height:200px">';
      }else{

      }
	?>
<input type="file" name="file3" value="" class="form-control">
</td></tr>
<tr><th>Foto4</th><td>
	<?php 
      if($aksi == "edit"){
        echo '<img src="'.base_url('template/data/'.$foto3).'" class="img-responsive" style="width:200px;height:200px">';
      }else{

      }
	?>
<input type="file" name="file4" value="" class="form-control">
</td></tr>
    <tr><td></td><th><input type="submit" name="kirim" value="Submit" class="btn btn-primary"></th></tr>
    </form>	 
</table>
<?php 
if($aksi == "edit"):
?>	
<span><i>Kosongkan gambar jika tidak ingin diganti.</i></span>
<?php endif; ?>
 
 