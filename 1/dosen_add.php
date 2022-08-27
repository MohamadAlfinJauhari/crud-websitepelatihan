<?php
include "../koneksi.php";

$NIP 			= $_POST["NIP"];
$namadosen 		= $_POST["namadosen"];
$tanggallahir 	= $_POST["tanggallahir"];
$jeniskelamin 	= $_POST["jeniskelamin"];
$nomortelp 		= $_POST["nomortelp"];
$topikpelatihan = $_POST["topikpelatihan"];

if ($add = mysqli_query($konek, "INSERT INTO dosen (NIP, namadosen, tanggallahir, jeniskelamin, nomortelp, topikpelatihan) VALUES ('$NIP', '$namadosen', '$tanggallahir', '$jeniskelamin', '$nomortelp', '$topikpelatihan')")){
		header("Location: dosen.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));

?>