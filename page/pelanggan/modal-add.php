
<div class="modal fade bd-example-modal-sm" id="modaladd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel"><b>Tambah Pelanggan</b></h5>
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
							<input type="text" name="idpel" class="form-control" required readonly value="<?= $action->getidpel();?>">
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label for="nometer">No. Meter</label>
							<input type="text" name="nometer" class="form-control" required readonly value="<?= $action->getnometer();?>">
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label for="nama">Nama Pelanggan</label>
							<input type="text" name="nama" class="form-control" placeholder="Masukkan nama pelanggan">
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label for="alamat">Alamat</label>
							<textarea name="alamat" class="form-control" rows="5" required></textarea>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label for="tarif">Jenis Tarif</label>
							<select name="tarif" class="form-control">
								<option value="">-- Pilih Jenis Tarif --</option>
								<?php
								$tarif = $action->query("SELECT * FROM tarif");
								foreach($tarif as $data){ ?>
									<option value="<?= $data['id_tarif'];?>"><?= $data['kode_tarif'];?></option>
								<?php
								}
								?>
							</select>
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
	$idpel = $_POST['idpel'];
	$nometer = $_POST['nometer'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$tarif = $_POST['tarif'];
	
	$data = array(
		'id_pelanggan' => $idpel,
		'no_meter' => $nometer,
		'nama' => $nama,
		'alamat' => $alamat,
		'tenggang' => 20,
		'id_tarif' => $tarif
	);

	list($bulan, $tahun) = $action->getpenggunaan();

	$datapenggunaan = array(
		'id_penggunaan' => $idpel.$bulan.$tahun,
		'id_pelanggan'=>$idpel,
		'bulan'=>$bulan,
		'tahun'=>$tahun,
		'meter_awal'=>0
	);

	$cek = $action->cek("SELECT * FROM pelanggan WHERE id_pelanggan = '$idpel'");
	if($cek > 0){
		$action->alert("Data sudah ada!", "?menu=pelanggan", "error");
	}else{
		$action->insert("pelanggan", $data);
		$action->insert("penggunaan", $datapenggunaan);
		$action->alert("Data berhasil ditambah", "?menu=pelanggan", "success");
	}
}
?>