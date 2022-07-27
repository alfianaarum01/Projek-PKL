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


    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-uppercase">
        <div class="container">
            <a class="navbar-brand" href="#">Data PTPS | 2019</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <title>BAWASLU | Data PTPS</title>
</head>
<body>
  
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data  Details
                            <a href="student-create.php" class="btn btn-primary float-end">Add</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    
                                
                                    <th>Kecamatan</th>
                                    <th>Kel/Desa</th>
                                    <th>No TPS</th>
                                    <th>Alamat TPS</th>
                                    <th>Nama PTPS</th> 
                                    <th scope="col" width="20%">Foto</th>
                                    <th>Action</th>
                     
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM ptps";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $ptps)
                                        {
                                            ?>
                                            <tr>
                                              
                                                <td><?= $ptps['kecamatan']; ?></td>
                                                <td><?= $ptps['kel_desa']; ?></td>
                                                <td><?= $ptps['no_tps']; ?></td>
                                                <td><?= $ptps['alamat_tps']; ?></td>
                                                <td><?= $ptps['nama_ptps']; ?></td>
                                                <td><?= $ptps['ptps_foto']; ?></td>
                                        
                                                <td>
                                                    <a href="student-view.php?id=<?= $ptps['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="student-edit.php?id=<?= $ptps['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_student" value="<?=$ptps['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>
                                   
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
                    <!-- footer -->
                        <div class="container-fluid bg-dark text-white">
                            <div class="row mt-5">
                                <div class="col-md-6">
                                    <h4 class="text-center fw-bold">BAWASLU KOTA MOJOKERTO</h4>
                                            <p>Alamat : Jl. Joko Tole No.1, Mergelo, Magersari,
                                            Kec.Magersari, Kota Mojokerto Jawa Timur 61318</p>
                                </div>
                            </div>
                        </div>
</body>
</html>
