<body bgcolor="#00bfff">
<h1>EDIT DATA MAHASISWA</h1><hr>
<form method="POST" enctype="multipart/form-data"><br>
	<button value='POSTING' name='submit' style='height:30px;background-color:#fc5da2;'><a href='regristrasi.php'>INPUT DATA</a></button>
	<button value='DAFTAR POSTING' name='submit' style='height:30px;background-color:#fc5da2;'><a href='datamahasiswa.php'>DATA MAHASISWA</a></button>
				
	<table>
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
			<td align="right">
				<button name="Back" value='KEMBALI' style='height:30px;background-color:#ccbbbe;'><a href='datamahasiswa.php'>KEMBALI</a></button>
				<input type='submit' name="submit" value='KIRIM' style='height:30px;background-color:#ccbbbe;'></td>
		</tr>
	</table>
</form>

<?php
	session_start();

		if (isset($_POST['submit'])) {
			include 'koneksi.php';
			$nim = $_GET['nim'];

			
			$nama = $_POST['nama'];
			$gender =$_POST['gender'];
			$prodi=$_POST['prodi'];
			$fakultas=$_POST['fakultas'];
			$alamat=$_POST['alamat'];
			$motto=$_POST['motto'];
									
			$qryUpdate = mysqli_query($koneksi, "UPDATE datamhs2 SET nama='$nama',gender='$gender',prodi='$prodi',fakultas='$fakultas',alamat='$alamat',motto='$motto'
												 WHERE nim ='".$nim."'");

			echo "Update Postingan BERHASIL";
			
		}
	
?>