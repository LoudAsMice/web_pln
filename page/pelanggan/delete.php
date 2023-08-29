<?php 
$pid = base64_decode($_GET['id']);
$delete = $action->delete("pelanggan","id_pelanggan = '$pid'");

$a = mysqli_affected_rows($koneksi);
if ($a != 0) {
	$action->alert("Data berhasil dihapus!", "?menu=pelanggan", "success");
}else{
	$action->alert("Gagal!", "?menu=pelanggan", "error");
}
?>