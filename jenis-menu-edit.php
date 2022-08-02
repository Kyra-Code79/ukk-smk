<?php
$judul = "EDIT MASTER MENU";
include "header.php";
include "koneksi.php";

$id_jenis_menu  = $_GET['id_jenis_menu'];
$sql        = "SELECT * FROM tbl_jenis_menu WHERE id_jenis_menu = '$id_jenis_menu'";
$query      = mysqli_query($koneksi, $sql);
$data       = mysqli_fetch_array($query);
$jenis_menu = $data['jenis_menu'];
?>

<div class="col-6">
	<div class="container">
		<div class="row">
			<div class="col">
				<h1>Edit Master Jenis Menu</h1>
				<form action="jenis-menu-update.php" method="post">
					<input type="hidden" name="id_jenis_menu" value="<?= $id_jenis_menu;?>">

          <div class="input-group mb-1">
						<span class="input-group-text lebar" >Jenis Menu</span>

            <input type="hidden" name="jenis_menu1" value="<?= $data['jenis_menu'];?>" >

            <input type="text" name="jenis_menu" required autocomplete="off" class="form-control form-control-sm" placeholder="Input Jenis Menu" value="<?= $data['jenis_menu'];?>" >
					</div>

					<div class="input-group mb-1">
						<button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> Update</button> | <a href="jenis-menu.php" class="btn btn-sm btn-warning"><i class="fas fa-redo"></i> Cancel</a>
					</div>
				</table>
			</form>
		</div>
	</div>
</div>

</div>
</div>
