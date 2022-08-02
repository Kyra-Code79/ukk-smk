<?php
  include "koneksi.php";
  $judul = "PEGAWAI";
  include "header.php";
  include "konfirmasi.php";
?>

<div class="col">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Employee Data Report</h2>
                <hr>
                <button type="button" class="badge badge-primary p-2 mb-3" data-toggle="modal"
                    data-target="#staticBackdrop">
                    <i class="fas fa-plus"></i> Add
                </button>
                <?php konfirmasi(); ?>
                <table class="table table-bordered table-hover" id="pegawai">
                    <thead>
                        <tr class="text-center">
                            <th>No.</th>
                            <th>Employees Name</th>
                            <th>Photo</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Phone Number</th>
                            <th>Position</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
						$no = 1;
						$sql = "SELECT * FROM tbl_pegawai";
						$query = mysqli_query($koneksi, $sql);
						while ($data = mysqli_fetch_array($query)) {
							$photo          = $data['photo'];
							$jenis_Kelamin  = $data['jenis_kelamin'];
							if ($photo == "" && $jenis_Kelamin == "Laki-laki") {
								$photo = "male.png";
							} else if ($photo == "" && $jenis_Kelamin == "Perempuan") {
								$photo = "female.png";
							}
						?>
                        <tr>
                            <td align="center" width="5%"><?= $no++; ?>.</td>
                            <td><?= $data['nama_pegawai']; ?></td>
                            <td align="center"><img src="photo/<?= $photo; ?>" alt="photo" width="40" height="40"></td>
                            <td><?= $data['jenis_kelamin']; ?></td>
                            <td><?= $data['alamat']; ?></td>
                            <td><?= $data['telp']; ?></td>
                            <td><?= $data['jabatan']; ?></td>

                            <td align="center" width="18%"><a
                                    href="pegawai-edit.php?id_pegawai=<?= $data['id_pegawai']; ?>"
                                    class="badge badge-primary p-2" title="Edit"><i class="fas fa-edit"></i></a> | <a
                                    href="pegawai-delete.php?id_pegawai=<?= $data['id_pegawai']; ?>"
                                    onclick="return confirm('Data will be delete?');" class="badge badge-danger p-2"
                                    title="Delete"><i class="fas fa-trash"></i></a> </td>
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
                    Input Employee
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="pegawai-simpan.php" method="post" enctype="multipart/form-data">
                    <div class="input-group input-group-sm mb-1">
                        <span class="input-group-text lebar">Employee Name</span>
                        <input type="text" name="nama_pegawai" required autocomplete="off" class="form-control"
                            placeholder="Input Employee Name">
                    </div>
                    <div class="input-group mb-1">
                        <span class="input-group-text lebar">Gender</span>
                        <select name="jenis_kelamin" class="form-control form-control-sm" required>
                            <option value="" selected>~ Choose Gender ~</option>
                            <option value="Laki-laki">Men</option>
                            <option value="Perempuan">Women</option>
                        </select>
                    </div>
                    <div class="input-group input-group-sm mb-1">
                        <span class="input-group-text lebar">Address</span>
                        <textarea name="alamat" id="" cols="30" rows="2" class="form-control"></textarea>
                    </div>
                    <div class="input-group input-group-sm mb-1">
                        <span class="input-group-text lebar">Phone Number</span>
                        <input type="text" name="telp" required autocomplete="off" class="form-control form-control-sm"
                            placeholder="Input Phone Number">
                    </div>

                    <!-- Jabatan -->
                    <div class="input-group mb-1">
                        <span class="input-group-text lebar">Position</span>
                        <select name="jabatan" class="form-control form-control-sm" required>
                            <option value="" selected>~ Choose Position ~</option>
                            <option value="Admin">Admin</option>
                            <option value="Kasir">Cashier</option>
                            <option value="Manajer">Manager</option>
                        </select>
                    </div>

                    <!-- Photo -->
                    <div class="input-group mb-1">
                        <span class="input-group-text lebar">Photo</span>
                        <input type="file" name="photo" class="form-control form-control-sm" accept="image/*">

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
    $('#pegawai').dataTable();
});
</script>