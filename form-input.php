<!DOCTYPE html>
<html>
<head>
	<title>Halaman Input Data</title>
</head>
<body><center>
<h2>Input Data Bengkel</h2>	
<a href="index.php" style="padding: 0.4% 0.8%;background-color: #009900;color: #fff;border-radius: 2px;text-decoration: none;">Data Bengkel</a><br><br>

	<form action="" method="POST">
		<table>
			<tr>
				<td>namabarang</td>
				<td>:</td>
				<td><input type="text" name="namabarang" placeholder="" required></td>
			</tr>
			<tr>
				<td>nomorbarang</td>
				<td>:</td>
				<td><input type="text" name="nomorbarang" placeholder="" required></td>
			</tr>
			<tr>
				<td>jumlah</td>
				<td>:</td>
				<td><input type="number" name="jumlah" placeholder="" required></td>
			</tr>
			<tr>
				<td>keterangan</td>
				<td>:</td>
				<td><input type="text" name="keterangan" placeholder="" required></td>
			</tr>
			<tr>
				<td>tanggal</td>
				<td>:</td>
				<td><input type="datetime" name="tanggal" placeholder="" required></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="simpan" value="simpan"></td>
			</tr>
		</table>
	</form>
	<?php
	include 'koneksi.php';
	if(isset($_POST['simpan'])){
	$insert = mysqli_query($conn, "INSERT INTO databengkel values 
							('".$_POST['namabarang']."',
							'".$_POST['nomorbarang']."',
							'".$_POST['jumlah']."',
							'".$_POST['keterangan']."',
							'".$_POST['tanggal']."')");
			if($insert){
				echo 'berhasil disimpan';
			}else{
				echo 'gagal disimpan';
			}
	}
	?>
<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col s6">&copy;copyrigh 2021 || di buat oleh inchi yanin d (1955201058)</div>
        </div>
    </div>
</footer>
</body></center>
</html>	