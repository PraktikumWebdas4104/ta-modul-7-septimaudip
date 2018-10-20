<?php 
	include 'koneksi.php';
	$nim = $_GET['nim'];

	mysqli_query($koneksi, "DELETE FROM datamhs2 WHERE nim ='".$nim."'");
	header("location:datamahasiswa.php?pesan=DATA BERHASIL DIHAPUS!")

 ?>