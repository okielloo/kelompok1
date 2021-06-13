<?php
include 'koneksi.php';
$data_edit = mysqli_query($conn, "SELECT * FROM databengkel WHERE namabarang = '".$_GET['namabarang']."'");
$result = mysqli_fetch_array($data_edit);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Edit Data</title>
</head>
<body>
<h2>Edit Data Bengkel</h2>	
<a href="index.php" style="padding: 0.4% 0.8%;background-color: #009900;color: #fff;border-radius: 2px;text-decoration: none;">Data Bengkel</a><br><br>

	<form action="" method="POST">
		<table>
			<tr>
				<td>namabarang</td>
				<td>:</td>
				<td><input type="text" name="namabarang"  value="<?php echo $result['namabarang'] ?>" required></td>
			</tr>
			<tr>
				<td>nomorbarang</td>
				<td>:</td>
				<td><input type="text" name="nomorbarang" value="<?php echo $result['nomorbarang'] ?>" required></td>
			</tr>
			<tr>
				<td>jumlah</td>
				<td>:</td>
				<td><input type="number" name="jumlah" value="<?php echo $result['jumlah'] ?>" required></td>
			</tr>
			<tr>
				<td>keterangan</td>
				<td>:</td>
				<td><input type="text" name="keterangan" value="<?php echo $result['keterangan'] ?>" required></td>
			</tr>
			<tr>
				<td>tanggal</td>
				<td>:</td>
				<td><input type="datetime" name="tanggal" value="<?php echo $result['tanggal'] ?>" required></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="edit" value="simpan"></td>
			</tr>
		</table>
	</form>
	<?php
	if(isset($_POST['edit'])){
		$update = mysqli_query($conn, "UPDATE databengkel SET namabarang = '".$_POST['namabarang']."',
		nomorbarang =  '".$_POST['nomorbarang']."', jumlah = '".$_POST['jumlah']."', keterangan = '".$_POST['keterangan']."', tanggal = '".$_POST['tanggal']."'
		WHERE namabarang = '".$_POST['namabarang']."'");
		if ($update){
			echo 'berhasil edit';
		} else{
			echo "gagal edit";
		}
	}
	?>
</body>
</html>	