<?php
include "../koneksi.php";
include "../function.php";
$query = "select * from tabel_bdaps where approval=1";
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
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">Data Anak Putus Sekolah</div>
        <div class="panel-body">
          <table class="table table-hover" id="dataAnak" >
           <thead>
           <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>Jenis Kelamin</th>
            <th>Pendidikan Terakhir</th>
           </tr>
           </thead>
           <tbody>
            <?php
            $result = mysqli_query($koneksi, $query);
            while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
              <td><a href="profil.php?kode=<?php echo $row['kode'];?>"><?php echo $row['nama'];?></a></td>
              <td><?php echo getAge($row['tgl_lahir'])." tahun";?></td>
              <td><?php echo $row['jenis_kelamin'];?></td>
              <td><?php echo $row['pend_terakhir'];?></td>
            </tr>
            <?php } ?>
           </tbody>
          </table>
          </div>
          </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
</div>
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/sb-admin-2.js"></script>
<script src="../js/metisMenu.min.js"></script>
</body>
</html>
