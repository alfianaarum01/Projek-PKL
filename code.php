<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_ptps']))
{
    $ptps_id = mysqli_real_escape_string($con, $_POST['delete_ptps']);

    $query = "DELETE FROM ptps WHERE id='$ptps_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Data Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Data Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_ptps']))
{
    $ptps_id = mysqli_real_escape_string($con, $_POST['ptps_id']);

    
    $kab_kota = mysqli_real_escape_string($con, $_POST['kab_kota']);
    $kecamatan = mysqli_real_escape_string($con, $_POST['kecamatan']);
    $kel_desa = mysqli_real_escape_string($con, $_POST['kel_desa']);
    $jumlah_tps = mysqli_real_escape_string($con, $_POST['jumlah_tps']);
    $no_tps = mysqli_real_escape_string($con, $_POST['no_tps']);
    $jumlah_dpt = mysqli_real_escape_string($con, $_POST['jumlah_dpt']);
    $alamat_tps = mysqli_real_escape_string($con, $_POST['alamat_tps']);
    $nama_ptps = mysqli_real_escape_string($con, $_POST['nama_ptps']);
    $ttl = mysqli_real_escape_string($con, $_POST['ttl']);
    $jk = mysqli_real_escape_string($con, $_POST['jk']);
    $agama = mysqli_real_escape_string($con, $_POST['agama']);
    $pendidikan = mysqli_real_escape_string($con, $_POST['pendidikan']);
    $pekerjaan = mysqli_real_escape_string($con, $_POST['pekerjaan']);
    $no_hp = mysqli_real_escape_string($con, $_POST['no_hp']);
    $no_rek = mysqli_real_escape_string($con, $_POST['no_rek']);
    $ptps_foto = mysqli_real_escape_string($con, $_POST['ptps_foto']);
    $ket = mysqli_real_escape_string($con, $_POST['ket']);

    

    $query = "UPDATE ptps SET id='$id', kab_kota='$kab_kota', kecamatan='$kecamatan', kel_desa='$kel_desa', jumlah_tps='$jumlah_tps' ,no_tps='$no_tps',jumlah_dpt='$jumlah_dpt',alamat_tps='$alamat_tps',nama_ptps='$nama_ptps',ttl='$ttl',jk='$jk',agama='$agama',pendidikan='$pendidikan',pekerjaan='$pekerjaan',no_hp='$no_hp',no_rek='$no_rek',ptps_foto='$ptps_foto',ket='$ket' WHERE id='$ptps_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Data Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Data Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_ptps']))
{
    $id = mysqli_real_escape_string($con, $_POST['id']);
    $kab_kota = mysqli_real_escape_string($con, $_POST['kab_kota']);
    $kecamatan = mysqli_real_escape_string($con, $_POST['kecamatan']);
    $kel_desa = mysqli_real_escape_string($con, $_POST['kel_desa']);
    $jumlah_tps = mysqli_real_escape_string($con, $_POST['jumlah_tps']);
    $no_tps = mysqli_real_escape_string($con, $_POST['no_tps']);
    $jumlah_dpt = mysqli_real_escape_string($con, $_POST['jumlah_dpt']);
    $alamat_tps = mysqli_real_escape_string($con, $_POST['alamat_tps']);
    $nama_ptps = mysqli_real_escape_string($con, $_POST['nama_ptps']);
    $ttl = mysqli_real_escape_string($con, $_POST['ttl']);
    $jk = mysqli_real_escape_string($con, $_POST['jk']);
    $agama = mysqli_real_escape_string($con, $_POST['agama']);
    $pendidikan = mysqli_real_escape_string($con, $_POST['pendidikan']);
    $pekerjaan = mysqli_real_escape_string($con, $_POST['pekerjaan']);
    $no_hp = mysqli_real_escape_string($con, $_POST['no_hp']);
    $no_rek = mysqli_real_escape_string($con, $_POST['no_rek']);
    $ptps_foto = mysqli_real_escape_string($con, $_POST['ptps_foto']);
    $ket = mysqli_real_escape_string($con, $_POST['ket']);

    $query = "INSERT INTO ptps (id,kab_kota,kecamatan,kel_desa,jumlah_tps,no_tps,jumlah_dpt,alamat_tps,nama_ptps,ttl,jk,agama,pendidikan,pekerjaan,no_hp,no_rek,ptps_foto,ket) VALUES ('$id','$kab_kota','$kecamatan','$kel_desa','$jumlah_tps','$no_tps','$jumlah_dpt','$alamat_tps','$nama_ptps','$ttl','$jk','$agama','$pendidikan','$pekerjaan','$no_hp','$no_rek','$ptps_foto','$ket')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Data Created Successfully";
        header("Location: student-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Data Not Created";
        header("Location: student-create.php");
        exit(0);
    }
}

?>
