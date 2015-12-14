<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Balik Sekolah. Beta!</title>
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/custom.css">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
  </head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#"><img src="logo.png" alt="Balik Sekolah" class="logo img-responsive" ></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a style="color:#fff" href="#utama"><strong>Halaman Utama</strong></a></li>
            <li><a style="color:#fff" href="#bantu"><strong>Bantu</strong></a></li>
            <li><a style="color:#fff" href="#relawan"><strong>Relawan</strong></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
  <div class="section-divider-title">
    <div class="container">
      <h1>Form Data Anak</h1>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-sm-offset-2">
        <form enctype="multipart/form-data" method="post" action="proses_input.php" role="form">
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
      <div class="col-sm-4">
        <div class="form-group">
          <label for="nama">Umur</label>
          <input type="text" name="umur" size="2" class="form-control">
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
<footer class="fixed-footer">
 <div class="container">
   <div class="row">
     <div class="col-sm-4">
       <h3>Media Sosial</h3>
      <ul class="footer-link">
        <li><a href="#"> Facebook </a></li>
        <li><a href="#"> Twitter</a></li>
      </ul>
     </div>
     <div class="col-sm-4"></div>
     <div class="col-sm-4"></div>
   </div>
 </div>
        
  </div>

  <div class="container">
      <h5 class="footer-h1 text-center">
        Project ini dapat terlaksana atas bantuan seluruh teman-teman relawan dan programmer
        Pekanbaru yang ingin memajukan Pendidikan di Indonesia.
      </h5>
      <h5 class="footer-h1 text-center">
        Bekerja sama dengan Dinas Pendidikan Kota Pekanbaru
      </h5>
      <h5 class="footer-h1 text-center">
        Tahun 2015
      </h5>

  </div>
</footer>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top-50
        }, 1000);
        return false;
      }
    }
  });
});
</script>
</body>
</html>
