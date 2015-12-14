<?php
function hitungAnakTingkat($x,$y){
	include 'koneksi.php';
	$query = "select * from tabel_bdaps where pend_terakhir = '$x' and kelurahan='$y' and approval = 1";
	$result = mysqli_query($koneksi, $query);
	return mysqli_num_rows($result);
}
function hitungAnakAlasan($x){
	include 'koneksi.php';
	$query = "select * from tabel_bdaps where faktor_putus = '$x'and approval = 1";
	$result = mysqli_query($koneksi, $query);
	return mysqli_num_rows($result);
}
function hitungAnakTotal(){
	include 'koneksi.php';
	$query = "select * from tabel_bdaps where approval = 1";
	$result = mysqli_query($koneksi, $query);
	return mysqli_num_rows($result);
}
function hitungAnakTotalnoAcc(){
	include 'koneksi.php';
	$query = "select * from tabel_bdaps where approval = 0 and bersekolah = 0";
	$result = mysqli_query($koneksi, $query);
	return mysqli_num_rows($result);
}
function hitungAnakTotalSch(){
	include 'koneksi.php';
	$query = "select * from tabel_bdaps where approval = 1 and bersekolah = 1";
	$result = mysqli_query($koneksi, $query);
	return mysqli_num_rows($result);
}
function lastData(){
	include 'koneksi.php';
	$query = "select kode from tabel_bdaps order by kode desc limit 1";
	$result=mysqli_query($koneksi,$query);
	$row = mysqli_fetch_array($result);
	return $row['kode'];
}
function sideBackend(){
	if(isset($_COOKIE['user'])){
		$cek = true;
	} else {
		$cek = false;
	}
	return $cek;
}
function koneksi(){
	$koneksi = mysqli_connect("localhost","root","");
	mysqli_select_db($koneksi,"db_bdaps");
	if(!$koneksi){
	die("could not connect ".mysqli_error($koneksi));
	}
}
?>
