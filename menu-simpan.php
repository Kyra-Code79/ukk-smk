<?php
include "koneksi.php";
$id_pegawai	    = $_POST['id_pegawai'];
$nama_menu	    = $_POST['nama_menu'];
$id_jenis_menu  = $_POST['id_jenis_menu'];
// $harga       = $_POST['harga'];
$harga = str_replace(',','', mysqli_escape_string($koneksi, $_POST['harga']));

$sql 		= "SELECT * FROM tbl_menu a WHERE nama_menu = '$nama_menu'";
$query 	= mysqli_query($koneksi, $sql);
if(mysqli_num_rows($query)>0){
  header("location:menu.php?hasil=4");
}else{
  $sql = "INSERT INTO tbl_menu(nama_menu, id_jenis_menu, harga, id_pegawai) VALUES('$nama_menu', '$id_jenis_menu', '$harga', '$id_pegawai')";
  mysqli_query($koneksi, $sql);
  header("location:menu.php?hasil=1");
}
?>
