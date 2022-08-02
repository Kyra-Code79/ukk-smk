<?php
  include "koneksi.php";
  $judul = "JENIS MENU";
  include "header.php";
  include "konfirmasi.php";
?>

<div class="col">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Menu Type Report</h2>
                <hr>
                <button type="button" class="badge badge-primary p-2 mb-3" data-toggle="modal"
                    data-target="#staticBackdrop">
                    <i class="fas fa-plus"></i> Add
                </button>

                <?php konfirmasi(); ?>
                <table class="table table-bordered table-hover" id="menu">
                    <thead>
                        <tr class="text-center">
                            <th>No.</th>
                            <th>Menu Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
						$no 		= 1;
						$sql 		= "SELECT * FROM tbl_jenis_menu ORDER BY jenis_menu";
						$query 	= mysqli_query($koneksi, $sql);
						while ($data = mysqli_fetch_array($query)) { ?>
                        <tr>
                            <td align="center" width="5%"><?= $no++; ?>.</td>
                            <td><?= $data['jenis_menu']; ?></td>
                            <td align="center" width="25%"><a
                                    href="jenis-menu-edit.php?id_jenis_menu=<?= $data['id_jenis_menu']; ?>"
                                    class="badge badge-primary p-2" title="Edit"><i class="fas fa-edit"></i></a> | <a
                                    href="jenis-menu-delete.php?id_jenis_menu=<?= $data['id_jenis_menu']; ?>"
                                    onclick="return confirm('Data akan dihapus?');" class="badge badge-danger p-2"
                                    title='Delete'><i class="fas fa-trash"></i></a> </td>
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
<!-- Modal Tambah-->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">
                    Input Menu Type
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="jenis-menu-simpan.php" method="post">
                    <div class="input-group mb-1">
                        <input type="hidden" name="id_pegawai" value="<?= $id_pegawai; ?>">
                        <span class="input-group-text lebar">Name Menu</span>
                        <input type="text" name="jenis_menu" required autocomplete="off"
                            class="form-control form-control-sm" placeholder="Input Menu Type">
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    $('#menu').dataTable();
});
</script>