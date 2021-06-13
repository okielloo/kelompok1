<?php 
include 'koneksi.php';
 if(isset($_GET['namabarang'])){
 	$delete = mysqli_query($conn, "DELETE FROM databengkel WHERE namabarang='".$_GET['namabarang']."'");
 	header('location:index.php');
 }
 ?>