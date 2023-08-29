<?php 
$pid = base64_decode($_GET['id']);
$delete = $action->delete("tarif","id_tarif = '$pid'");

$a = mysqli_affected_rows($koneksi);
if ($a != 0) {
	$action->alert("Data berhasil dihapus!", "?menu=tarif", "success");
}else{
	$action->alert("Gagal!", "?menu=tarif", "error");
}
?>