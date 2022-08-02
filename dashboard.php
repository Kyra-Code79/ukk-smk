<?php
  include "koneksi.php";
  $judul = "Dashboard";
  include "header.php";
?>

<div class="col">
    <div class="container">
        <!-- Selamat Datang -->
        <div class="col">
            <h1 class="display-4">Welcome, <?= $nama_pegawai; ?>!</h1>
            <p class="lead">You are login as <?= $jabatan; ?></p>
            <hr class="my-3">
            <div class="strong">
                <h3 class="display-5">Profile</h3>
                <hr class="my-3"><br>
                <h5><b>Account Id</b>
                    <p class="text-right"><?= $id_pegawai; ?></p>
                </h5>
                <h5><b>Employee's Name</b>
                    <p class="text-right"><?= $nama_pegawai; ?></p>
                </h5>
                <h5><b>Position</b>
                    <p class="text-right text-info"><?= $jabatan; ?></p>
                </h5>
            </div>
            <hr class="my-4 card-footer">
            <p class="text-right "> Kyra Café </p>
            <!--Real Time Clock-->

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

            <div class="text-right" id="runningTime">
                <script type="text/javascript">
                $(document).ready(function() {
                    setInterval(runningTime, 1000);
                });

                function runningTime() {
                    $.ajax({
                        url: 'timeScript.php',
                        success: function(data) {
                            $('#runningTime').html(data);
                        },
                    });
                }
                </script>
            </div>
            <p class="text-right text-info"> <?= date('D')," - ",date('M')," - ",date('Y'); ?></p>
        </div>
        <!-- End Selamat Datang -->
    </div>
</div>

<?php include "footer.php";?>