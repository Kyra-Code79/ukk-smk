<?php
  include "koneksi.php";
  $judul = "Employee Log Report";
  include "header.php";
  include_once 'user_activity_log.php'; 
?>

<div class="col">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Employee Log Report</h2>
                <hr>

                <table class="table table-bordered table-hover" id="log">
                    <thead>
                        <tr class="text-center">
                            <th>No.</th>
                            <th>Employee Name</th>
                            <th>Position</th>
                            <th>Action</th>
                            <th>Date</th>
                            <?php 
              if($jabatan == "Manajer"){?>
                            <?php
              }?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
						$no = 1;
						$sql = "SELECT * FROM tbl_log ORDER BY id_log DESC";
						$query = mysqli_query($koneksi, $sql);
						while ($data = mysqli_fetch_array($query)) {
							$aksi = $data['aksi'];
							$id_pegawai   = $data['id_pegawai'];
							$nama_pegawai = $data['nama_pegawai'];
							$jbt          = $data['jabatan'];?>
                        <tr>
                            <td align="center" width="5%"><?= $no++; ?>.</td>
                            <td width="22%"><?= $nama_pegawai; ?></td>
                            <td><?= $jbt; ?></td>
                            <td><?php echo $user_current_url; ?></td>
                            <td align="center" width="18%"><?= $data['date']; ?></td>
                            <?php 
                if($jabatan == "Manajer"){?>
                            <td align="center" width="5%"><a href="log-delete.php?id_log=<?= $data['id_log']; ?>"
                                    onclick="return confirm('Data akan dihapus?');" class="badge badge-danger p-2"
                                    title="Delete"><i class="fas fa-trash"></i></a> </td>
                            <?php 
                }?>
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
    $('#log').dataTable();
});
</script>