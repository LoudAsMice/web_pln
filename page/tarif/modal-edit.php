<div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
	<div class="modal-content">
	<div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel"><b>Ubah Tarif</b></h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
	</div>
		<form method="POST">
		<div class="modal-body">
			<input type="hidden" name="id" id="id">
			<div class="form-group">
				<label for="message-text" class="form-label">Golongan</label>
				<input type="text" class="form-control" id="golongan" name="golongan">
			</div>
			<div class="form-group">
				<label for="message-text" class="form-label">Daya</label>
				<input type="text" class="form-control" id="daya" name="daya">
			</div>
			<div class="form-group">
				<label for="message-text" class="form-label">Tarif/kWh</label>
				<input type="text" class="form-control" id="tarif" name="tarif">
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-primary" name="edit">Submit</button>
		</div>
		</form>
	</div>
</div>
</div>

<?php 
	if (isset($_POST['edit'])) {
		$id = $_POST['id'];
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
		if($cek > 1){
			$action->alert("Data sudah ada!", "?menu=tarif", "error");
		}else{
			$action->update("tarif", $data, "id_tarif = '$id'");
			$action->alert("Data berhasil diubah!", "?menu=tarif", "success");
		}
	}
?>