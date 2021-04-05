<?= $this->session->flashdata('pesan');

foreach ($data as $admin) : ?>
	<div class="col-xs-6 col-md-1-5">
    <div>
        <b><font size="3">Detail Tower Penghantar</font></b>
    </div>

    <div><font size="5"><b><?= $admin->tower ?> / <?= $admin->penghantar ?></b></font></div><br><br>

    <font size="3"><b>Tanggal</b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?= $admin->tgl ?> </font></b><br><br>
    <font size="3"><b>Wilayah UPT &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Wilayah ULTG </font></b><br>
    <div><font size="3"><?= $admin->upt ?> &emsp; &emsp; &emsp; <?= $admin->ultg ?></font><br><br></div>
    <div><font size="3"><b>Jenis Tower </b></font></div>
    <div><?= $admin->jenis ?></div><br><br>
     <div><font size="3"><b>Document</b></font></div>
    <div><a href="<?= $admin->tautan ?>">Lihat </a></div><br><br>
    <div><blockquote style="border-left: 3px solid #000080; background-color: ##808080; padding: .0em 1em; }blockquote p {margin: 0;"><font size="3"><b>Kelengkapan Dokumen</b></font>
    <div><font size="2">KKP : <?= $admin->kkp ?></font></div>
    <div><font size="2">Assesmen Lingkungan : <?= $admin->kelling ?></font></div>
    <div><font size="2">Assesmen Pondasi : <?= $admin->kelpo ?></font></div>
    <div><font size="2">Kelengkapan Foto : <?= $admin->kelfo ?></font></div></div></blockquote>

    <div><blockquote style="border-left: 3px solid #000080; background-color: ##808080; padding: .0em 1em; }blockquote p {margin: 0;"><font size="3"><b>Skor</b></font>
    <div><font size="2">Assesmen Lingkungan : <?= $admin->skoli ?></font></div>
    <div><font size="2">Assesmen Pondasi : <?= $admin->skopo ?></font></div>
    <div><font size="2">Sifat Hujan : <?= $admin->skohu ?></font></div></div></blockquote>

    <div><blockquote style="border-left: 3px solid #000080; background-color: ##808080; padding: .0em 1em; }blockquote p {margin: 0;"><font size="3"><b>Klasifikasi</b></font>
    <div><font size="2">Ancaman Lingkungan : <?= $admin->klali ?></font></div>
    <div><font size="2">Ancaman Pondasi : <?= $admin->klapo ?></font></div>
    <div><font size="2">Sifat Hujan : <?= $admin->klahu ?></font></div></div></blockquote><br><br><br>





    <div><blockquote style="border-left: 5px solid #fce27c; background-color: #f6ebc1; padding: .5em 1em; }blockquote p {margin: 0;"><font size="3"><b>Anomali </b></font>
    <div><font size="2"><?= $admin->anomali ?></font></div></div><br></blockquote>
    <div><blockquote style="border-left: 5px solid #fce27c; background-color: #f6ebc1; padding: .5em 1em; }blockquote p {margin: 0;"><font size="3"><b>Keterangan </b></font>
    <div><font size="2"><?= $admin->keterangan ?></font></div></div><br></blockquote>
    <div><blockquote style="border-left: 5px solid #fce27c; background-color: #f6ebc1; padding: .5em 1em; }blockquote p {margin: 0;"><font size="3"><b>Penanganan Sementara </b></font>
    <div><font size="2"><?= $admin->penanganan ?></font></div></div><br></blockquote>
    <div><blockquote style="border-left: 5px solid #fce27c; background-color: #f6ebc1; padding: .5em 1em; }blockquote p {margin: 0;"><font size="3"><b>Risiko </b></font>
    <div><font size="2"><?= $admin->risiko ?></font></div></div><br></blockquote>
    <div><blockquote style="border-left: 5px solid #fce27c; background-color: #f6ebc1; padding: .5em 1em; }blockquote p {margin: 0;"><font size="3"><b>Mitigasi Risiko Penundaan SKI 2021 </b></font>
    <div><font size="2"><?= $admin->mitigasi ?></font></div></div><br></blockquote>
    <div><blockquote style="border-left: 5px solid #fce27c; background-color: #f6ebc1; padding: .5em 1em; }blockquote p {margin: 0;"><font size="3"><b>Keterangan </b></font>
    <div><font size="2"><?= $admin->keterangan ?></font></div></div><br></blockquote>
    <a href="#" class="thumbnail">
    <img src="<?=base_url()?>template/data/<?=$admin->foto?>" alt="foto"></a><br>
    <a href="#" class="thumbnail">
    <img src="<?=base_url()?>template/data/<?=$admin->foto1?>" alt="foto"></a><br>
    <a href="#" class="thumbnail">
    <img src="<?=base_url()?>template/data/<?=$admin->foto2?>" alt="foto"></a><br>
    <a href="#" class="thumbnail">
    <img src="<?=base_url()?>template/data/<?=$admin->foto3?>" alt="foto"></a>


<?php
endforeach; ?>
