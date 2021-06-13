<!doctype html>
<html>
<head>
    <title>halaman data bengkel</title>
</head>
<body><center>
<h1>data bengkel kelompok 1</h1>
<a href="form-input.php" style="padding: 0.4% 0.8%;background-color: #009900;color: #fff;border-radius: 2px;text-decoration: none;">tambah data</a><br><br>
<table border="1" cellspacing="0" width="50%">
    <tr style="text-align: center;font-weight: bold;background-color: #eee;"> 
        <td>no</td>
        <td>namabarang</td>
        <td>nomorbarang</td>
        <td>jumlah</td>
        <td>keterangan</td>
        <td>tanggal</td>
        <td>opsi</td>
    </tr>
    <?php
    include 'koneksi.php';
    $no = 1;
    $select = mysqli_query($conn, "SELECT * FROM databengkel");
    if (mysqli_num_rows ($select) > 0){
    while($hasil = mysqli_fetch_array($select)){
    ?>
    <tr style="text-align: center;"> 
        <td><?php echo $no++ ?></td>
        <td><?php echo $hasil ['namabarang'] ?></td>
        <td><?php echo $hasil ['nomorbarang'] ?></td>
        <td><?php echo $hasil ['jumlah'] ?></td>
        <td><?php echo $hasil ['keterangan'] ?></td>
        <td><?php echo $hasil ['tanggal'] ?></td>
        <td>
            <a href="form-edit.php?namabarang=<?php echo $hasil ['namabarang'] ?>">edit</a> ||
            <a href="delete.php?namabarang=<?php echo $hasil ['namabarang'] ?>">hapus</a>
        </td>
    </tr>
    <?php }}else{ ?>
        <td colspan="7" align="center">data kosong</td>
    <?php } ?>

</table>
<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col s6">&copy;copyrigh 2021 || di buat oleh m.oki (1955201004)</div>
        </div>
    </div>
</footer>
</body></center>
</html>