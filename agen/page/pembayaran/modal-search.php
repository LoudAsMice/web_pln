<?php
if(isset($_POST['idpel'])){
	$idpel = $_POST['idpel'];
}
if(isset($_GET['idpel'])){
	$idpela = $_GET['idpel'];
	$idagen = $_SESSION['id_agen'];
}


//kode otomatis
$hari_ini = date("Ymd");
$sql = mysqli_query($koneksi, "SELECT id_pembayaran FROM pembayaran WHERE id_pembayaran LIKE '%$hari_ini%' order by id_pembayaran DESC");
$cek = mysqli_fetch_array($sql);
if (empty($cek)) {
	$id_pembayaran = "BYR".$hari_ini."0001";
}else{
	$kode = substr($cek['id_pembayaran'], 12,4)+1;
	if ($kode < 10) {
		$id_pembayaran = "BYR".$hari_ini."000".$kode;
	}elseif ($kode < 100) {
		$id_pembayaran = "BYR".$hari_ini."00".$kode;
	}elseif ($kode < 1000) {
		$id_pembayaran = "BYR".$hari_ini."0".$kode;
	}else{
		$id_pembayaran = "BYR".$hari_ini."".$kode;
	}
}
?>

<div class="modal fade bd-example-modal-xl" id="modalsearch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel"><b>Pembayaran</b></h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<form method="POST">
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label for="idpel">Cari IDPEL</label>
							<input type="text" name="idpel" class="form-control" required onchange="submit(); return 0;" value="<?php if(isset($_POST['idpel'])){ echo $idpel;}elseif(isset($_GET['idpel'])){ echo $idpela;}?>">
						</div>
					</div>
					<?php
					if(isset($_POST['idpel'])){
						$pelanggan = $action->caridata("SELECT*FROM pelanggan WHERE id_pelanggan = '$idpel'");	
						$tagihan = $action->cek("SELECT * FROM tagihan WHERE id_pelanggan = '$idpel' AND status ='Belum Bayar'");	
						$tarif = $action->caridata("SELECT * FROM tarif WHERE id_tarif = '$pelanggan[id_tarif]'");

					?>
						<script>
							$(document).ready( function () {
								$('#modalsearch').modal("show");
							});
						</script>
					<?php
					if($pelanggan==null){
						echo "<div class='col-md-12'><center><h2>ID PELANGGAN TIDAK DITEMUKAN</h2></center></div>";
					}elseif($tagihan == 0){
							$action->alert("ID Pelanggan tidak memiliki tunggakan!", "?menu=pembayaran", "error");
					}else{
					?>
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Table Tagihan</h4>
									<a href="#" class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
								</div>
								<div class="card-body">
									<table class="table table-striped" width="100%" id="table">
										<thead> 
											<tr>
												<th>No</th>
												<th>ID Pelanggan</th>
												<th>Bulan</th>
												<th>Meter Awal</th>
												<th>Meter Akhir</th>
												<th>Jumlah Meter</th>
												<th>Tarif/kWh</th>
												<th>Jumlah Bayar</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
										<?php 
										$sql = $action->query("SELECT * FROM tagihan as t JOIN penggunaan as p ON t.id_penggunaan = p.id_penggunaan WHERE t.id_pelanggan = '$idpel' AND status = 'Belum Bayar'");
										$dta = "";
										$i = 1;
										foreach ($sql as $data){
										?>
										<tr>
											<td><?= $i; $i++; ?></td>
											<td><?= $data['id_pelanggan'];?></td>
											<td><?= $action->bulan($data['bulan'])." ". $data['tahun'];?></td>
											<td><?= $data['meter_awal'];?></td>
											<td><?= $data['meter_akhir'];?></td>
											<td><?= $data['jumlah_meter'];?></td>
											<td><?php $action->rupiah($data['tarif_perkwh']) ?></td>
											<td><?= $action->rupiah($data['jumlah_bayar']);?></td>
											<td>
											<a href="?menu=pembayaran&idtagihan=<?= $data['id_tagihan']?>&idpel=<?= $data['id_pelanggan']?>&bulan=<?= $data['bulan']?>" class="btn btn-success" onclick="">Bayar</a>
											</td>
										</tr>
										<?php }?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<?php
					}
				}elseif(isset($_GET['idtagihan'])){?>
					<script>
						$(document).ready( function () {
							$('#modalsearch').modal("show");
						});
					</script>
					
					<?php
					$idtagihan = $_GET['idtagihan'];
					$tagihan = $action->caridata("SELECT * FROM tagihan WHERE id_tagihan = '$idtagihan'");
					$agen = $action->caridata("SELECT * FROM agen WHERE id_agen = '$idagen'");
					$total_bayar = (int)$tagihan['jumlah_bayar'] + (int)$agen['biaya_admin'];
					?>
					<div class="row">
					<div class="col-md-12">
						<input type="text" name="idpel" value="<?= $idpela;?>" hidden>
						<input type="text" name="idtagihan" value="<?= $idtagihan;?>" hidden>
						<div class="form-group">
							<label for="bulan">Bulan</label>
							<input type="text" name="bulan" class="form-control" required readonly value="<?= $action->bulan($tagihan['bulan']);?>">
						</div>
						<div class="form-group">
							<label for="tahun">Tahun</label>
							<input type="text" name="tahun" class="form-control" required readonly value="<?= $tagihan['tahun'];?>">
						</div>
						<div class="form-group">
							<label for="jumlah_meter">Jumlah Meter</label>
							<input type="text" name="jumlah_meter" class="form-control" required readonly value="<?= $tagihan['jumlah_meter'];?>">
						</div>
						<div class="form-group">
							<label for="tarif_perkwh">Tarif/kWh</label>
							<input type="text" name="tarif_perkwh" class="form-control" required readonly value="<?= $action->rupiah($tagihan['tarif_perkwh']);?>">
						</div>
						<div class="form-group">
							<label for="tagihan">Tagihan PLN</label>
							<input type="text" name="tagihan" class="form-control" required readonly value="<?= $action->rupiah($tagihan['jumlah_bayar']);?>">
						</div>
						<div class="form-group">
							<label for="biaya_admin">Biaya Admin</label>
							<input type="text" name="biaya_admin" class="form-control" required readonly value="<?= $action->rupiah($agen['biaya_admin']);?>">
						</div>
						<div class="form-group">
							<label for="total">Total Bayar</label>
							<input type="text" name="total" class="form-control" required readonly value="<?= $total_bayar?>">
						</div>
						<div class="form-group">
							<label for="bayar">Bayar</label>
							<input type="text" name="bayar" class="form-control" onkeypress='sum()' required>
						</div>
						<!-- <div class="form-group">
							<label for="kembali">Kembali</label>
							<input type="text" name="kembali" class="form-control" required readonly value="">
						</div> -->
					</div>
				</div>
				<?php }?>
				</div>
			</div>
			<div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
		<button type="submit" class="btn btn-primary" name="bbayar">Bayar</button>
		</div>
		</form>
	</div>
</div>
</div>
<?php 

if (isset($_POST['bbayar'])) {
	$idpelanggan = $idpela;
	$bulan = $_GET['bulan'];
	$tahun = $_POST['tahun'];
	$idtagihan = $_POST['idtagihan'];
	$tglbayar = date("Y-m-d");
	$idagen = $_SESSION['id_agen'];
	$jumlahbayar = $_POST['tagihan'];
	$biayaadmin = $_POST['biaya_admin'];
	$total = $_POST['total'];
	$bayar  = $_POST['bayar'];
	$kembali = (int)$bayar - (int)$total;

	$data = array(
		'id_pembayaran' => $id_pembayaran,
		'id_pelanggan' => $idpelanggan,
		'tgl_bayar' => $tglbayar,
		'waktu_bayar' => date("Y-m-d H:i:s"),
		'bulan_bayar' => $bulan,
		'tahun_bayar' => $tahun,
		'jumlah_bayar' => $tagihan,
		'biaya_admin' => $biayaadmin,
		'total_akhir' => $total,
		'bayar' => $bayar,
		'kembali' => $kembali,
		'id_agen' => $idagen
	);

	// $cek = $action->cek("SELECT * FROM tarif WHERE kode_tarif = '$kode_tarif'");
	if($bayar < $total){
		$action->alert("Uang kurang!", "?menu=pembayaran", "error");
	}else{
		$action->insert("pembayaran", $data);
		$action->update("tagihan", array('status' => "Sudah Bayar"), "id_tagihan = '$idtagihan'");
		$action->alert("Pembayaran Berhasil!", "?menu=pembayaran", "success");
	}
}
?>