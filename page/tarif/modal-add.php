
<div class="modal fade bd-example-modal-sm" id="modaladd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel"><b>Tambah Tarif</b></h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<form method="POST">
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label for="golongan">Golongan</label>
							<input type="text" name="golongan" class="form-control" placeholder="Masukkan Golongan" required list="golongan1">
							<datalist id="golongan1">
								<?php
								$query = $action->query("SELECT DISTINCT golongan FROM tarif");
								foreach($query as $data){
								?>
								<option value="<?= $data['golongan']?>"></option>
								<?php
								}
								?>
							</datalist>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label for="daya">Daya</label>
							<input type="text" name="daya" class="form-control" placeholder="Masukkan Daya" required list="daya1">
							<datalist id="daya1">
								<?php
								$query = $action->query("SELECT DISTINCT daya FROM tarif");
								foreach($query as $data){
								?>
								<option value="<?= $data['daya']?>"></option>
								<?php
								}
								?>
							</datalist>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label for="tarif">Tarif/kWh</label>
							<input type="text" name="tarif" class="form-control" placeholder="Masukkan Tarif per kWh" required list="tarif">
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
	$golongan = $_POST['golongan'];
	$daya = $_POST['daya'];
	$tarif = $_POST['tarif'];
	$kode_tarif = $golongan."/".$daya;

	$data = array(
		'kode_tarif'=>$kode_tarif,
		'golongan' => $golongan,
		'daya' => $daya,
		'tarif_perkwh' => $tarif
	);
	$cek = $action->cek("SELECT * FROM tarif WHERE kode_tarif = '$kode_tarif'");
	if($cek > 0){
		$action->alert("Data sudah ada!", "?menu=tarif", "error");
	}else{
		$action->insert("tarif", $data);
		$action->alert("Data berhasil ditambah", "?menu=tarif", "success");
	}
}
?>