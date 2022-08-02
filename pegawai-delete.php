<?php
include "koneksi.php";
$id_pegawai = $_GET['id_pegawai'];

$sql        = "SELECT * FROM tbl_login WHERE id_pegawai = '$id_pegawai'";
$query      = mysqli_query($koneksi, $sql);
if(mysqli_num_rows($query)<0){
  header("location:pegawai.php?hasil=6");
}else{
  $sql    = "SELECT * FROM tbl_pegawai WHERE id_pegawai = '$id_pegawai'";
  $query  = mysqli_query($koneksi, $sql);
  $data   = mysqli_fetch_array($query);
  $nm     = $data['nama_pegawai'];
  $jbt    = $data['jabatan'];
  $photo  = $data['photo'];

  $query = "DELETE FROM tbl_pegawai WHERE id_pegawai ='$id_pegawai'";
  $hsl = mysqli_query($koneksi, $query);
  // echo $hsl;
  mysqli_query($koneksi,$hsl);
  header("location:pegawai.php?hasil=3");
}

 ?>