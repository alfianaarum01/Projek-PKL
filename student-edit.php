<?php
session_start();
require 'dbcon.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <title> Edit Data</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4> Edit Data
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $ptps_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM ptps WHERE id='$ptps_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $ptps = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="ptps_id" value="<?= $ptps['id']; ?>">

                                  
                                    <div class="mb-3">
                                        <label>Kab/Kota</label>
                                        <input type="text" name="kab_kota" value="<?=$ptps['kab_kota'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Kecamatan</label>
                                        <input type="text" name="kecamatan" value="<?=$ptps['kecamatan'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Kel/Desa</label>
                                        <input type="text" name="kel_desa" value="<?=$ptps['kel_desa'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Jumlah TPS</label>
                                        <input type="text" name="jumlah_tps" value="<?=$ptps['jumlah_tps'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>No.TPS</label>
                                        <input type="text" name="no_tps" value="<?=$ptps['no_tps'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Jumlah DPT</label>
                                        <input type="text" name="jumlah_dpt" value="<?=$ptps['jumlah_dpt'];?>"  class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Alamat TPS</label>
                                        <input type="text" name="alamat_tps" value="<?=$ptps['alamat_tps'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Nama PTPS</label>
                                        <input type="text" name="nama_ptps"value="<?=$ptps['nama_ptps'];?>"  class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>TTL</label>
                                        <input type="text" name="ttl" value="<?=$ptps['ttl'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Jenis Kelamin</label>
                                        <input type="text" name="jk" value="<?=$ptps['jk'];?>"  class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Agama</label>
                                        <input type="text" name="agama" value="<?=$ptps['agama'];?>"  class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Pendidikan</label>
                                        <input type="text" name="pendidikan" value="<?=$ptps['pendidikan'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Pekerjaan</label>
                                        <input type="text" name="pekerjaan" value="<?=$ptps['pekerjaan'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>No. HP</label>
                                        <input type="text" name="no_hp" value="<?=$ptps['no_hp'];?>"  class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>No.Rek</label>
                                        <input type="text" name="no_rek" value="<?=$ptps['no_rek'];?>"  class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Pas Foto</label>
                                        <input type="file" name="ptps_foto" value="<?=$ptps['ptps_foto'];?>"  class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Keterangan</label>
                                        <input type="text" name="ket" value="<?=$ptps['ket'];?>"  class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_ptps" class="btn btn-primary">
                                            Update Data
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
