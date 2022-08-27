<?php
include "../koneksi.php";

$NIM 				= $_POST["NIM"];
$namamahasiswa		= $_POST["namamahasiswa"];
$tanggallahir 		= $_POST["tanggallahir"];
$jeniskelamin 		= $_POST["jeniskelamin"];
$nomortelp 			= $_POST["nomortelp"];
$prodi 				= $_POST["prodi"];
$topikpelatihan 	= $_POST["topikpelatihan"];

if ($add = mysqli_query($konek, "INSERT INTO mahasiswa (NIM, namamahasiswa, tanggallahir, jeniskelamin, nomortelp, prodi, topikpelatihan) VALUES ('$NIM', '$namamahasiswa', '$tanggallahir', '$jeniskelamin', '$nomortelp', '$prodi', '$topikpelatihan')")){
		header("Location: mahasiswa.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));

?>