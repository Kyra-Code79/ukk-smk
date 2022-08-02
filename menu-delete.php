<?php
include "koneksi.php";
$id_menu = $_GET['id_menu'];

$sql1 = "SELECT * FROM tbl_transaksi_detail WHERE id_menu ='$id_menu'";
$query1 = mysqli_query($koneksi, $sql1);
if (mysqli_num_rows($query1)>0){
  header("location:menu.php?hasil=6");
}else{
  $sql = "DELETE FROM tbl_menu WHERE id_menu = '$id_menu'";
  mysqli_query($koneksi, $sql);
  header("location:menu.php?hasil=3");
}
?>