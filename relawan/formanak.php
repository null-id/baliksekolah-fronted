<?php
include '../koneksi.php';
include '../function.php';
if(!isset($_POST)){
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$domisli=$_POST['domisli'];
$kelurahan=$_POST['kelurahan'];
$tgl=$_POST['tgl_lahir'];
$pend_terakhir=$_POST['pend_terakhir'];
$faktor_putus=$_POST['faktor_putus'];
	$lokasi_file = $_FILES['foto']['tmp_name'];
	$tipe_file   = $_FILES['foto']['type'];
	$nama_file   = $_FILES['foto']['name'];
	$direktori   = "images/$nama_file";

	move_uploaded_file($lokasi_file,$direktori);
	$insert = "insert into tabel_bdaps values('','$nama','$jenis_kelamin','$domisli','$kelurahan','$tgl','$pend_terakhir','$nama_file','$faktor_putus','false')";
	$query = mysqli_query($koneksi,$insert);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="../css/bootstrap.min.css">
 <!--link rel="stylesheet" href="../css/base.css"-->
 <link rel="stylesheet" href="../css/sb-admin-2.css">
 <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
 <link rel="stylesheet" type="text/css" href="../css/custom-dashboard.css" >
 <title>Code For Pekanbaru - Homepage</title>
</head>
<body>
  
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0" data-spy="affix" data-offset-top="20">
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.html">Balik Sekolah</a>
</div>
<div class="navbar-default sidebar" role="navigation">
<div class="sidebar-nav navbar-collapse">
  <ul class="nav" id="side-menu">
      <li>
          <a href="dashboard.php"><i class="fa fa-home fa-fw"></i> Dashboard</a>
      </li>
      <li>
          <a href="#"><i class="fa fa-child fa-fw"></i> Anak<span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
              <li>
                  <a href="anakdata.php">Lihat Data</a>
              </li>
              <li>
                  <a href="formanak.php">Tambah Data</a>
              </li>
              <li>
                  <a href="statistik.php">Statistik</a>
              </li>
          </ul>
          <!-- /.nav-second-level -->
      </li>
      <li>
          <a href="#"><i class="fa fa-users fa-fw"></i> Relawan<span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
              <li>
                  <a href="lihatrelawan.php">Lihat Anggota Relawan</a>
              </li>
          </ul>
          <!-- /.nav-second-level -->
      </li>
      <li>
          <a href="#"><i class="fa fa-user fa-fw"></i> Akun<span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
              <li>
                  <a href="profil.php">Profil Saya</a>
                  <a href="logout.php">Logout</a>
              </li>
          </ul>
          <!-- /.nav-second-level -->
      </li>
  </ul>
</div>
<!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</nav>
<div id="page-wrapper">
  <div class="panel panel-default">
  <div class="panel-heading">Form Data Anak Putus Sekolah</div>
  <div class="panel-body">
  <div class="row">
    <div class="col-sm-4">
      <form enctype="multipart/form-data" method="post" action="formanak.php" role="form">
        <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" name="nama" size="25">
        </div>
        <div class="form-group">
        <label for="pwd">Jenis Kelamin</label><br>
        <input type="radio" name="jenis_kelamin" value="Laki Laki">Laki-Laki<br>
      <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
        </div>
        <div class="form-group">
        <label for="nama">Kelurahan</label>
        <select name="kelurahan" class="form-control">
        <option value="Sukajadi">Sukajadi</option>
        <option value="Harjosari">Harjosari</option>
        <option value="Kedungsari">Kedungsari</option>
        <option value="Kampung Melayu">Kampung Melayu</option>
        <option value="Jadirejo">Jadirejo</option>
        <option value="Pulau Karam">Pulau Karam</option>
        <option value="Kampung Tengah">Kampung Tengah</option>
      </select>
        </div>
        <div class="form-group">
        <label for="nama">Domisli</label>
        <input type="text" name="domisli" size="35" class="form-control">
        </div>
    </div>
    <div class="col-sm-4 col-sm-offset-2">
      <div class="form-group">
        <label for="nama">Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" size="2" class="form-control">
       </div>
      <div class="form-group">
        <label for="nama">Pendidikan Terakhir</label>
        <select name="pend_terakhir" class="form-control">
        <option value="Belum Sekolah">Belum Sekolah</option>
        <option value="SD">SD</option>
        <option value="SMP">SMP</option>
        <option value="SMA">SMA</option>
      </select>
        </div>
        <div class="form-group">
        <label for="nama">Faktor Penyebab Putus Sekolah</label>
        <select name="faktor_putus" class="form-control">
        <option value="Faktor Ekonomi">Faktor Ekonomi</option>
        <option value="Kurang Perhatian Orang Tua">Kurang Perhatian Orang Tua</option>
        <option value="Dikeluarkan">Dikeluarkan</option>
        <option value="Dipaksa Bekerja">Dipaksa Bekerja</option>
        <option value="Lain Lain">Lain Lain</option>
      </select>
        </div>
        <div class="form-group">
        <label for="nama">Foto</label>
        <input type="file" accept="image/*;capture=camera" name="foto" class="form-control">
        </div>
        <div class="form-group">
        <input type="submit" name="submit" value="Tambahkan Data" class="btn btn-md btn-success">
        </div>
        </form>
    </div>
  </div>
</div>
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/sb-admin-2.js"></script>
<script src="../js/metisMenu.min.js"></script>
</body>
</html>
