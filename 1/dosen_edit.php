<?php
include "../koneksi.php";

$NIP 			= $_POST["NIP"];
$namadosen  	= $_POST["namadosen"];
$tanggallahir 	= $_POST["tanggallahir"];
$jeniskelamin 	= $_POST["jeniskelamin"];
$nomortelp 		= $_POST["nomortelp"];
$topikpelatihan = $_POST["topikpelatihan"];

if ($edit = mysqli_query($konek, "UPDATE dosen SET namadosen='$namadosen', tanggallahir='$tanggallahir', jeniskelamin='$jeniskelamin', nomortelp='$nomortelp', topikpelatihan='$topikpelatihan' WHERE NIP='$NIP'")){
		header("Location: dosen.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));

?>