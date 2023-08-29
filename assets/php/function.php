<?php 

class func{
	function login($table, $username, $password, $href){
		global $koneksi;
			session_start();
			$sql = mysqli_query($koneksi, "SELECT * FROM $table WHERE username = '$username' AND password = '$password'");
			$cek = mysqli_num_rows($sql);
			$data = mysqli_fetch_array($sql);
			if ($cek > 0) {
				if ($table == "petugas") {
					$_SESSION['username_petugas'] = $data['username'];
					$_SESSION['id_petugas'] = $data['id_petugas'];
					$_SESSION['nama_petugas'] = $data['nama'];
					$_SESSION['akses_petugas'] = $data['akses'];
					$this->alert("Login Berhasil, Selamat Datang ".$data['nama'],$href, "success");
				}elseif($table == "agen"){
					$_SESSION['username_agen'] = $data['username'];
					$_SESSION['biaya_admin'] = $data['biaya_admin'];
					$_SESSION['id_agen'] = $data['id_agen'];
					$_SESSION['nama_agen'] = $data['nama'];
					$_SESSION['akses_agen'] = $data['akses'];
					$this->alert("Login Berhasil, Selamat Datang ".$data['nama'],$href, "success");
				}
			}else{
				$this->alert("Username atau Password salah", "login.php", "error");
			}
	}

	function redirect($alamat){
		echo "<script>document.location.href='$alamat'</script>";
	}

	function alert($pesan,$alamat, $type){
		echo "<script type='text/javascript'>
		swal({
		  title: '$pesan',
		  text: 'Mengalihkan dalam 2 Detik.',
		  type: '$type',
		  timer: 2000,
		  showConfirmButton: false
		}, function(){
			  window.location.href = '$alamat';
		});
	  </script>";
	}

	function query($query){
		global $koneksi;
		$sql = $koneksi->query($query);
		$fetch = [];
		while ($fetchs = $sql->fetch_assoc()) {
			$fetch[] = $fetchs;
		}
		return $fetch;
	}

	function caridata($query){
		global $koneksi;
		$sql = mysqli_fetch_array(mysqli_query($koneksi, $query));
		return $sql;
	}

	function cek($query){
		global $koneksi;
		$sql = mysqli_num_rows($koneksi->query($query));
		return $sql;
	}

	function getidpel(){
		$idpel = date('YmdHis');
		return $idpel;
	}

	function getnometer(){
		if (date('z') < 10){
			$no = "00".date("zymNHs");
		}elseif(date('z') < 100){
			$no = "0".date("zymNHs");
		}else{
			$no = date("zymNHs");
		}
		return $no;
	}

	function getpenggunaan(){
		if (date("d") > 25) {
			if(date("m") <10){
				$bln = date("m")+1;
				$bulan = "0".$bln;
			}else{
				$bulan = date("m")+1;
			}
			$tahun = date("Y");
		}elseif(date("d") > 25 && date("m")==12 ){
			$bln = date("m")+1;
			$bulan = "0".$bln;
			$tahun = date("Y")+1;
		}else{
			$bulan = date("m");
			$tahun = date("Y");
		}
		return array($bulan, $tahun);
	}

	function bulan($bulan){
		switch ($bulan) {
			case '01':$bln="Januari";break;
			case '02':$bln="Februari";break;
			case '03':$bln="Maret";break;
			case '04':$bln="April";break;
			case '05':$bln="Mei";break;
			case '06':$bln="Juni";break;
			case '07':$bln="Juli";break;
			case '08':$bln="Agustus";break;
			case '09':$bln="September";break;
			case '10':$bln="Oktober";break;
			case '11':$bln="November";break;
			case '12':$bln="Desember";break;
			default:$bln="";break;
		}
		return $bln;
	}

	function insert($table,array $field){
		global $koneksi;
		$sql = "INSERT INTO $table SET ";
		foreach ($field as $key => $value) {
			$sql.= "$key = '$value',";
		}
		$sql = rtrim($sql, ',');
		mysqli_query($koneksi, $sql);
		return 0;
	}
	function update($table,array $field,$where){
		global $koneksi;
		$sql = "UPDATE $table SET ";
		foreach ($field as $key => $value) {
			$sql.="$key = '$value',";
		}
		$sql=rtrim($sql,',');
		$sql .=" WHERE $where";
		mysqli_query($koneksi, $sql);
	}
	function delete($table,$where){
		global $koneksi;
		$sql = mysqli_query($koneksi, "DELETE FROM $table WHERE $where");
		return $sql;
	}
	function rupiah($uang){
		echo "Rp. ".number_format($uang,0,',','.').",-";
	}
	function uniqueid(){
		
	}
}
 ?>
