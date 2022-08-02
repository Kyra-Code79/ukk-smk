<?php
include "koneksi.php";
$id_log = $_GET['id_log'];

$sql = "DELETE FROM tbl_log WHERE id_log ='$id_log'";
mysqli_query($koneksi, $sql);
$hsl = mysqli_query($koneksi, $sql);
if($hsl==1){
  header("location:log.php?hasil=3");
}else{
  header("location:log.php?hasil=6");
}

?>