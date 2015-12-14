<?php
include 'koneksi.php';
include 'function.php';
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$domisli=$_POST['domisli'];
$kelurahan=$_POST['kelurahan'];
$umur=$_POST['umur'];
$pend_terakhir=$_POST['pend_terakhir'];
$faktor_putus=$_POST['faktor_putus'];
	$lokasi_file = $_FILES['foto']['tmp_name'];
	$tipe_file   = $_FILES['foto']['type'];
	$nama_file   = $_FILES['foto']['name'];
	$direktori   = "images/$nama_file";

	move_uploaded_file($lokasi_file,$direktori);
	$insert = "insert into tabel_bdaps values('','$nama','$jenis_kelamin','$domisli','$kelurahan','$umur','$pend_terakhir','$nama_file','$faktor_putus','false')";
	$query = mysqli_query($koneksi,$insert);

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <!--link rel="stylesheet" href="css/base.css"-->
 <title>Halaman Utama</title>
</head>
<body>
<div class="container-fluid">
 <div class="page-header">
   <h1>Bantu Data Anak Putus Sekolah</h1>
   <p>Halaman Verifikasi</p><!--nama halaman-->
   
  </div>
  <div class="row">
   <div class="col-sm-2">
   <!--sidebar-->
   <ul class="nav nav-pills nav-stacked">
    <li class="active"><a href="#">Verifikasi</a></li>
	<li><a href="input.php">Input Data Anak</a></li>
	<li><a href="statistik.php">Statistik</a></li>
   </ul>
   </div>
   
   <div class="col-sm-10">
    <!--content-->
	<div class="panel-group">
	<?php
	if($query){ ?>
	 <div class="panel panel-success">
      <div class="panel-heading">Sukses!</div>
      <div class="panel-body">Berhasil menambahkan data! <a href="lihat_data.php">Lihat data</a></div>
     </div>
	<?php } else { ?>
	 <div class="panel panel-danger">
      <div class="panel-heading">Gagal!</div>
      <div class="panel-body">Gagal menambahkan data! <a href="input.php">Kembali</a></div>
     </div>
	<?php } ?>
	</div>
	
   </div>
  </div>
 </div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>