<?php

include "../koneksi.php";

$NIM 				= $_POST["NIM"];
$namamahasiswa		= $_POST["namamahasiswa"];
$tanggallahir		= $_POST["tanggallahir"];
$jeniskelamin		= $_POST["jeniskelamin"];
$nomortelp			= $_POST["nomortelp"];
$prodi				= $_POST["prodi"];
$topikpelatihan		= $_POST["topikpelatihan"];

if($edit = mysqli_query($konek, "UPDATE mahasiswa SET namamahasiswa='$namamahasiswa', tanggallahir='$tanggallahir', jeniskelamin='$jeniskelamin', nomortelp='$nomortelp', prodi='$prodi', topikpelatihan='$topikpelatihan' WHERE NIM='$NIM'")){
		header("Location: mahasiswa.php");
		exit();
	}
die("Terdapat Kesalahan : ".mysqli_error($konek));

?>