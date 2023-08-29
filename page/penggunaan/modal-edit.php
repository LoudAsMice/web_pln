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
			<div class="form-group">
				<label for="idpel">ID Pelanggan</label>
				<input type="text" name="idpel" id="idpel" class="form-control" required readonly>
			</div>
			<div class="form-group">
				<label for="nometer">No. Meter</label>
				<input type="text" name="nometer" id="nometer" class="form-control" required readonly>
			</div>
			<div class="form-group">
				<label for="nama">Nama Pelanggan</label>
				<input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama pelanggan">
			</div>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<textarea name="alamat" id="alamat" class="form-control" rows="5" required></textarea>
			</div>
			<div class="form-group">
				<label for="tarif">Jenis Tarif</label>
				<select name="tarif" id="tarif" class="custom-select">
					<?php
					$query = $action->query("SELECT * FROM tarif");
					foreach($query as $data){ ?>
						<option value="<?= $data['id_tarif'];?>"><?= $data['kode_tarif'];?></option>
					<?php
					}
					?>
				</select>
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
		$id = $_POST['idpel'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$jenistarif = $_POST['tarif'];

		$data = array(
			'nama'=>$nama,
			'alamat' => $alamat,
			'id_tarif' => $jenistarif
		);
		
		$action->update("pelanggan", $data, "id_pelanggan = '$id'");
		$action->alert("Data berhasil diubah!", "?menu=pelanggan", "success");
	}
?>