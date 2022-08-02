<?php
include "koneksi.php";
$id_menu 	      = $_POST['id_menu'];
$nama_menu	    = $_POST['nama_menu'];
$nama_menu1	    = $_POST['nama_menu1'];
$id_jenis_menu  = $_POST['id_jenis_menu'];
$harga          = str_replace(',','', mysqli_escape_string($koneksi, $_POST['harga']));

// //Testing variable
$sql 		= "SELECT * FROM tbl_menu WHERE nama_menu = '$nama_menu' ORDER BY nama_menu";
$query 	= mysqli_query($koneksi, $sql);
if(mysqli_num_rows($query)>0){
  header("location:menu.php?hasil=5");
}else{
  //Ubah data kalo mau berhasil harus ganti nama menunya juga, nggak bisa jenis atau harga doang!!
  $sql = "UPDATE tbl_menu SET
  nama_menu = '$nama_menu',
  id_jenis_menu = '$id_jenis_menu',
  harga = $harga
  WHERE id_menu = '$id_menu'";
  mysqli_query($koneksi, $sql);
  header("location:menu.php?hasil=2");
  // echo $sql;
  // exit();
}
?>