<?php
	$koneksi = mysqli_connect("localhost","root","");
	mysqli_select_db($koneksi,"db_bdaps");
	if(!$koneksi){
	die("could not connect ".mysqli_error($koneksi));
}
?>