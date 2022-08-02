<?php
  include "koneksi.php";
  $judul = "Laporan";
  include "header.php";
?>

<div class="col">
    <div class="container">
        <div class="row">
            <div class="col">

                <h2>Dish Menu Reports</h2>
                <hr>
                <a href="cetak-laporan-jenis-menu.php" class="btn btn-sm btn-success text-white" target="_blank"><i
                        class="fas fa-print"></i> Print Menu Reports</a>
                <hr>

                <table class="table table-bordered table-hover" id="laporanMenu" width="50%">
                    <thead>
                        <tr class="text-center">
                            <th>No.</th>
                            <th>Menu Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
						$no 		= 1;
						$sql 		= "SELECT * FROM tbl_jenis_menu";
						$query 	= mysqli_query($koneksi, $sql);
						while ($data = mysqli_fetch_array($query)) { ?>
                        <tr>
                            <td align="center" width="5%"><?= $no++; ?>.</td>
                            <td><?= $data['jenis_menu']; ?></td>
                        </tr>
                        <?php
						} ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>
<script>
$(document).ready(function() {
    $('#laporanMenu').dataTable();
    $('.form-control-chosen').chosen({
        allow_single_deselect: true,
    });
});
</script>