<?php
if(isset($_POST['idpel'])){
	$idpel = $_POST['idpel'];
	$pelanggan = $action->caridata("SELECT * FROM pelanggan as p INNER JOIN tarif as t ON p.id_tarif = t.id_tarif WHERE id_pelanggan = '$idpel'");
	$cekpelanggan = $action->cek("SELECT * FROM pelanggan WHERE id_pelanggan = '$idpel'");
	$penggunaan = $action->caridata("SELECT * FROM penggunaan WHERE id_pelanggan = '$idpel' AND meter_akhir ='0'");

	if($cekpelanggan == null){
		$action->alert("ID Pelanggan tidak ditemukan!", "?menu=penggunaan", "error");
	}else{
		if($penggunaan == null){
			$action->alert("Data bulan ini sudah diinput", "?menu=penggunaan", "error");
		}
	}
	$bulan = $penggunaan['bulan'];
	$thn = $penggunaan['tahun'];
	$awal = $penggunaan['meter_awal'];

	?>

	<script>
		$(document).ready( function () {
			$('#modaladd').modal("show");
		});
    </script>
	<?php
}
?>

<div class="modal fade bd-example-modal-sm" id="modaladd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel"><b>Input Penggunaan</b></h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<form method="POST">
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label for="idpel">ID Pelanggan</label>
							<input type="text" name="idpel" class="form-control" required onchange="submit(); return 0;" value="<?php if(isset($_POST['idpel'])){ echo $idpel;}?>">
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label for="nometer">Bulan Penggunaan</label>
							<input type="text" name="bulan" class="form-control" required readonly value="<?php if(isset($_POST['idpel'])){ echo $action->bulan($bulan)." ".$thn;}?>">
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label for="meter_awal">Meter Awal</label>
							<input type="text" name="meter_awal" class="form-control" required readonly value="<?php if(isset($_POST['idpel'])){ echo $awal;}?>">
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label for="meter_akhir">Meter Akhir</label>
							<input type="text" name="meter_akhir" class="form-control" required placeholder="Masukkan meter akhir">
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label>Tanggal Pengecekan</label>
							<input type="date" name="tgl_cek" class="form-control"required>
						</div>
					</div>
				</div>
			</div>
		<div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		<button type="submit" class="btn btn-primary" name="add">Submit</button>
		</div>
	</form>
	</div>
</div>
</div>

<?php


if (isset($_POST['add'])) {

	// mensetting bulan
	if((int)$bulan<12){
		if((int)$bulan<9){
			$bln = ((int)$bulan + 1);
			$next_bulan = "0".$bln;
		}else{
			// $bln = ($bulan + 1);
			$next_bulan = (int)$bulan+1;
		}
		$next_tahun = $thn;
	}else{
		$next_bulan = "1";
		$next_tahun = $thn+1;
	}

	// penggunaan
	$idpel = $_POST['idpel'];
	$mawal = $_POST['meter_awal'];
	$makhir = $_POST['meter_akhir'];
	$tgl_cek = $_POST['tgl_cek'];
	$id_penggunaan = $penggunaan['id_penggunaan'];
	$id_penggunaan_next = $idpel.$next_bulan.$next_tahun;

	// tagihan
	$jumlah_meter = ((int)$makhir-(int)$mawal);
	$tarif = $action->caridata("SELECT * FROM tarif WHERE id_tarif = '$pelanggan[id_tarif]'");
	$tarif_perkwh = $tarif['tarif_perkwh'];
	$jumlah_bayar = ($jumlah_meter*$tarif_perkwh);


	// field untuk tagihan
	$tagihan = array(
		'id_pelanggan'=>$idpel,
		'id_penggunaan'=>$id_penggunaan,
		'bulan'=>$bulan,
		'tahun'=>$thn,
		'jumlah_meter'=>$jumlah_meter,
		'tarif_perkwh'=>$tarif_perkwh,
		'jumlah_bayar'=>$jumlah_bayar,
		'status'=>"Belum Bayar",
		'id_petugas'=>$_SESSION['id_petugas'],
	);
	// print_r($_SESSION['id_petugas']);
	// update penggunaan
	$updatepenggunaan = array(
		'meter_akhir' => $makhir,
		'tgl_cek' => $tgl_cek,
		'id_petugas' => $_SESSION['id_petugas']
	);

	// penggunaan next
	$next = array(
		'id_penggunaan'=>$id_penggunaan_next,
		'id_pelanggan'=>$idpel,
		'bulan'=>$next_bulan,
		'tahun'=>$next_tahun,
		'meter_awal'=>$makhir
	);

	// cek meter dan insert data
	if($makhir <= $mawal){
		$action->alert("Meter akhir kurang dari meter awal!", "?menu=penggunaan", "error");
	}else{
		// print_r($action->insert("penggunaan", $next));
		$action->insert("tagihan", $tagihan);
		$action->insert("penggunaan", $next);
		$action->update("penggunaan", $updatepenggunaan, "id_penggunaan = '$id_penggunaan'");
		$action->alert("Data penggunaan berhasil ditambah!", "?menu=penggunaan", "success");
	}
}
?>