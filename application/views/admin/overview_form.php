<table class="table table-reposive">
	<form action="" method="POST">
	<tr><th>T / L</th><td><select class="form-control" name="tl" required="">
	                          <option value="BLD-SKH">Balongbendo - Sekarputih</option>
	                          <option value="DYO-BBN">Driyorejo - Babadan</option>
	                          <option value="GRT-KRN">Grati - Krian</option>
	                          <option value="GRS-KRN">Gresik - Krian</option>
	                          <option value="DYO-BBN">Kebonagung - Sengguruh</option>
	                          <option value="KBG-SGH">Kebonagung - Sengguruh</option>
	                          <option value="KBG-STM">Kebonagung - Sutami</option>
	                          <option value="NBG-KRN">Ngimbang - Krian</option>
	                          <option value="SKH-MJG">Sekarputih - Mojoagung</option>
	                          <option value="SKH-NGO">Sekarputih - Ngoro</option>
	                          <option value="SKH-SMN-MDN">Sekarputih - Siman - Mendalan</option>
	                          <option value="SKH-TRK">Sekarputih - Tarik</option>
                              <option value="SKG-MDN">Sengkaling - Mendalan</option>
	                          <option value="SMN-MDN-SKH">Siman - Mendalan - Sekarputih</option>
	                          <option value="SBB-APA">Surabaya Barat - Altaprima</option>
	                          <option value="SBB-BLO">Surabaya Barat - Balongbendo</option>
	                          <option value="SBB-SWN">Surabaya Barat - Sawahan</option>
	                          <option value="SBB-TNS">Surabaya Barat - Tandes</option>
	                          <option value="TRK-DYO-MWN">Tarik - Driyorejo - Miwon</option>
	                          <option value="UGN-KRN">Ungaran - Krian</option>
	                          <option value="UGN-NBG">Ungaran - Ngimbang</option>
                              </select></td></tr>
	<tr><th>Tower</th><td><input type="number" name="tower" class="form-control" value="<?= $tower ?>"></td></tr>
	<tr><th>Jenis</th><td><input type="text" name="jenis" class="form-control" value="<?= $jenis ?>"></td></tr>
	<tr><th>Status</th><td><select class="form-control" name="status" required="">
	                          <option value="KRITIS">KRITIS</option>
	                          <option value="WASPADA">WASPADA</option>
	                          <option value="EX-KRITIS">EX-KRITIS</option>
                              </select></td></tr>
	<tr><th>Tanggal</th><td><input type="date" name="tgl" class="form-control" value="<?= $tgl ?>"></td></tr>
	<tr><th>Update</th><td><input type="date" name="update" class="form-control" value="<?= $update ?>"></td></tr>
	<tr><th>Penanganan</th><td><input type="text" name="penanganan" class="form-control" value="<?= $penanganan ?>"></td></tr>
    <tr><td></td><th><input type="submit" name="kirim" value="Submit" class="btn btn-primary"></th></tr>
    </form>	 
</table>
 
 