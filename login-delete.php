<?php
session_start();
include "koneksi.php";
$id_login = $_GET['id_login'];

$sql = "SELECT * FROM tbl_login a INNER JOIN tbl_pegawai b ON a.id_pegawai = b.id_pegawai WHERE a.id_login ='$id_login'";
$query = mysqli_query($koneksi, $sql);
if (mysqli_num_rows($query)>0){
  $data = mysqli_fetch_array($query);  
  $jabatan    = $data['jabatan'];
  $id_pegawai = $data['id_pegawai'];

 if($jabatan=="Manajer"){
    $sql1 = "SELECT * FROM tbl_jenis_menu WHERE id_pegawai ='$id_pegawai'";
    $query1 = mysqli_query($koneksi, $sql1);
    if (mysqli_num_rows($query1)>0){
      header("location:login.php?hasil=6");
    }else{
      $sql = "DELETE FROM tbl_login WHERE id_login ='$id_login'";
      mysqli_query($koneksi, $sql);
      header("location:login.php?hasil=3");
    }
  }else if($jabatan=="Kasir"){
    $sql2 = "SELECT * FROM tbl_transaksi WHERE id_pegawai ='$id_pegawai'";
    $query2 = mysqli_query($koneksi, $sql2);
    if (mysqli_num_rows($query2)>0){
      header("location:login.php?hasil=6");
    }else{
      $sql = "DELETE FROM tbl_login WHERE id_login ='$id_login'";
      mysqli_query($koneksi, $sql);
      header("location:login.php?hasil=3");
    }
  }else{
    header("location:login.php?hasil=6");
  }
}{
  // $sql = "DELETE FROM tbl_login WHERE id_login ='$id_login'";
  $query = "DELETE FROM tbl_login WHERE id_login='$id_login'";
  $hsl = mysqli_query($koneksi,$query);
  // echo $hsl;
  mysqli_query($koneksi, $sql);
  header("location:login.php?hasil=3");
}


?>