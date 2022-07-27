<?php
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

    <title> View Data</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4> View Data Details 
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
                                
                                    
                                    <div class="mb-3">
                                        <label>Kab/Kota</label>
                                        <p class="form-control">
                                            <?=$ptps['kab_kota'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Kecamatan</label>
                                        <p class="form-control">
                                            <?=$ptps['kecamatan'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Kel/Desa</label>
                                        <p class="form-control">
                                            <?=$ptps['kel_desa'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Jumlah TPS </label>
                                        <p class="form-control">
                                            <?=$ptps['kecamatan'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>No.TPS</label>
                                        <p class="form-control">
                                            <?=$ptps['no_tps'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Jumlah DPT</label>
                                        <p class="form-control">
                                            <?=$ptps['jumlah_dpt'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Alamat TPS</label>
                                        <p class="form-control">
                                            <?=$ptps['alamat_tps'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Nama PTPS</label>
                                        <p class="form-control">
                                            <?=$ptps['nama_ptps'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>TTL</label>
                                        <p class="form-control">
                                            <?=$ptps['ttl'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Jenis Kelamin</label>
                                        <p class="form-control">
                                            <?=$ptps['jk'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Agama</label>
                                        <p class="form-control">
                                            <?=$ptps['agama'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Pendidikan</label>
                                        <p class="form-control">
                                            <?=$ptps['pendidikan'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Pekerjaan</label>
                                        <p class="form-control">
                                            <?=$ptps['pekerjaan'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>No. HP</label>
                                        <p class="form-control">
                                            <?=$ptps['no_hp'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>No.Rek</label>
                                        <p class="form-control">
                                            <?=$ptps['no_rek'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Foto PTPS</label>
                                        <p class="form-control">
                                            <?=$ptps['ptps_foto'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Keterangan</label>
                                        <p class="form-control">
                                            <?=$ptps['ket'];?>
                                        </p>
                                    </div>
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
