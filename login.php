<?php
include 'koneksi.php';	
include 'function.php';
session_name('relawan');
session_start();
?>
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
      <h1>Login</h1>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-sm-offset-4">
        <div class="login-panel panel panel-default">
             <div class="panel-heading">
              <h3 class="panel-title">Masuk Halaman Relawan</h3>
             </div>
             <div class="panel-body">
             <!--login gagal-->
             <?php
               if(!empty($_POST)){
                $username = $_POST['username'];
                $password = md5($_POST['password']);
                $sql = "select * from tabel_rel where username = '$username' and password = '$password'";
                $query = mysqli_query($koneksi,$sql) or die (mysqli_error());

                 if($query){
                    $row = mysqli_num_rows($query);
                    $a = mysqli_fetch_array($query);
                    if($row > 0){
                        $_SESSION['username'] = $a['username'];
                        header('Location:dashboard.php');
                    }else{
               ?>
           <div class="alert alert-danger">
              Nama Pengguna atau Password yang anda masukkan salah.
           </div>
           <?php 
                }
               }
              }
             ?>
              
           <!--/login gagal-->
           <form role="form" action="login.php" method="post" name="login">
            <fieldset>
             <div class="form-group">
              <input class="form-control" placeholder="Nama Pengguna" name="username" type="text" autofocus>
             </div>
             <div class="form-group">
              <input class="form-control" placeholder="Kata Kunci" name="password" type="password" value="">
             </div>                       
              <input type="submit" name="login" class="btn btn-lg btn-primary btn-block" value="Masuk">
            </fieldset>
          </form>
          </div>
         </div>
        </div>
      <div class="col-sm-4">
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
