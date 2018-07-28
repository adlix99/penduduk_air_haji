<?php
	include 'connect.php';
    if(isset($_POST['tambah'])){
        $no_ktp = $_POST['no_ktp'];
        $nama = $_POST['nama'];
        $tempat_lhr = $_POST['tempat'];
        $tgl_lhr = $_POST['tgl_lhr'];
        $jk = $_POST['jk'];
        $agama = $_POST['agama'];
        $pendidikan = $_POST['pendidikan'];
        $pekerjaan = $_POST['pekerjaan'];
        $satus = $_POST['status'];
        $id_kk = $_POST['id_kk'];
        //var_dump($id_kk);
        $sql = "INSERT INTO anggota (no_ktp, id_kk, nama_anggota_keluarga, jk, tempat_lahir, tgl_lahir, agama, pendidikan, pekerjaan, status) VALUES ('$no_ktp', '$id_kk', '$nama', '$jk', '$tempat_lhr', '$tgl_lhr', '$agama', '$pendidikan', '$pekerjaan', '$status')";

        $db->query($sql);
        header("Location:anggota.php?id_kk=$id_kk");

    }
?>