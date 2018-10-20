<body bgcolor="#f47c92">
<h1>PENDAFTARAN MAHASISWA BARU</h1><hr>
<form method="POST" enctype="multipart/form-data">
	<table>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>NAMA</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>JENIS KELAMIN</td>
			<td>:</td>
			<td><input type="radio" name="gender" value="Perempuan"> Perempuan
  				<input type="radio" name="gender" value="Laki-laki"> Laki-laki
  			</td>
		</tr>
		<tr>
			<td>PROGRAM STUDI</td>
			<td>:</td>
			<td><select name="prodi">
				<option value="Management Informatika">Management Informatika</option>
				<option value="Teknik Informatika">Teknik Informatika</option>
				<option value="Teknik Telekomunikasi">Teknik Telekomunikasi</option>
				<option value="Teknik Komputer">Teknik Komputer</option>
				<option value="Komputerisasi Akuntansi">Komputerisasi Akuntansi</option>
				<option value="Sistem Multimedia">Sistem Multimedia</option>
				<option value="Perhotelan">Perhotelan</option>
				</select> 
  			</td>
		</tr>
		<tr>
			<td>FAKULTAS</td>
			<td>:</td>
			<td><select name="fakultas">
				<option value="Fakultas Teknik Elektro">Fakultas Teknik Elektro</option>
				<option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>
				<option value="Fakultas Ekonomi dan Bisnis">Fakultas Ekonomi dan Bisnis</option>
				<option value="Fakultas Komunikasi dan Bisnis">Fakultas Komunikasi dan Bisnis</option>
				<option value="Fakultas Industri Kreatif">Fakultas Industri Kreatif</option>
				<option value="Fakultas Rekayasa Industri">Fakultas Rekayasa Industri</option>
				<option value="Fakultas Informatika">Fakultas Informatika</option>
				</select> 
  			</td>
		</tr>
		<tr>
			<td>ALAMAT</td>
			<td>:</td> 
			<td><textarea name="alamat"></textarea></td>
		</tr>
		<tr>
			<td>MOTTO HIDUP</td>
			<td>:</td> 
			<td><textarea name="motto"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="submit" value="DAFTAR">
			<button name="data" value='DATA MAHASISWA'><a href='datamahasiswa.php'>DATA MAHASISWA</a></button><td>
		</tr>
	</table>
</form>
</body>

<?php
	if (isset($_POST['submit'])) {
		include 'koneksi.php';

		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$gender =$_POST['gender'];
		$prodi=$_POST['prodi'];
		$fakultas=$_POST['fakultas'];
		$alamat=$_POST['alamat'];
		$motto=$_POST['motto'];

		$query = mysqli_query($koneksi,"SELECT*FROM datamhs2 WHERE nim ='$nim'");
		$row = mysqli_fetch_array($query);

		if (!empty($nim) and !empty($nama) and !empty($gender) and !empty($prodi) and !empty($fakultas) and !empty($alamat) and !empty($motto)) {
			if (strlen($nim)==10 && is_numeric($nim)==TRUE) {
				if (is_string($nama)==TRUE) {
						$sql = $koneksi->query("
							INSERT INTO `datamhs2` (`nim`,`nama`,`gender`,`prodi`,`fakultas`,`alamat`,`motto`)
							VALUES ('$nim', '$nama', '$gender', '$prodi', '$fakultas', '$alamat', '$motto')
								  ");
							echo "REGISTRASI BERHASIL<br>";
				}else{
					echo "Nama tidak boleh bertipe angka!";
				}
			}else{
				echo "NIM harus 10 karakter dan bertipe angka!";

			}
		}else{
			echo "Form Tidak Boleh Kosong. Semua Inputan Harus Diisi!";
		}
					
	}else{
		echo "REGISTRASI GAGAL";
	}

?>