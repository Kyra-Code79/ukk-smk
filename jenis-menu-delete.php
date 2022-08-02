<?php
include "koneksi.php";
$id_jenis_menu = $_GET['id_jenis_menu'];
$sql 		= "SELECT * FROM tbl_menu WHERE id_jenis_menu = '$id_jenis_menu' ORDER BY id_jenis_menu";
$query 	= mysqli_query($koneksi, $sql);
if(mysqli_num_rows($query)>0){
  header("location:jenis-menu.php?hasil=6");
}else{
  $sql = "DELETE FROM tbl_jenis_menu WHERE id_jenis_menu = '$id_jenis_menu'";
  mysqli_query($koneksi, $sql);
  header("location:jenis-menu.php?hasil=3");
}
?>