<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <title>Student Create</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4> Add Data 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                        
                            <div class="mb-3">
                                <label>Kab/Kota</label>
                                <input type="text" name="kab_kota" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Kecamatan</label>
                                <input type="text" name="kecamatan" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Kel/Desa</label>
                                <input type="text" name="kel_desa" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Jumlah TPS</label>
                                <input type="text" name="jumlah_tps" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>No.TPS</label>
                                <input type="text" name="no_tps" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Jumlah DPT</label>
                                <input type="text" name="jumlah_dpt" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Alamat TPS</label>
                                <input type="text" name="alamat_tps" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Nama PTPS</label>
                                <input type="text" name="nama_ptps" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>TTL</label>
                                <input type="text" name="ttl" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Jenis Kelamin</label>
                                <input type="text" name="jk" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Agama</label>
                                <input type="text" name="agama" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Pendidikan</label>
                                <input type="text" name="pendidikan" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Pekerjaan</label>
                                <input type="text" name="pekerjaan" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>No. HP</label>
                                <input type="text" name="no_hp" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>No.Rek</label>
                                <input type="text" name="no_rek" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pas Foto</label>
                                <input type="file" name="ptps_foto" class="form-control">
		                	</div>
                            <div class="mb-3">
                                <label>Keterangan</label>
                                <input type="text" name="ket" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_ptps" class="btn btn-primary">Save Data</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
