<?php
	include 'connect.php';
	if($_GET['aksi'] && $_GET['id']){
		$aksi = $_GET['aksi'];
		$id = $_GET['id'];
		if($aksi == 'hapus'){
			$sql = "DELETE FROM anggota WHERE id='$id'";
	        $result = $db->query($sql);
	        header("Location:".$_SERVER["HTTP_REFERER"] );
	        exit;
		}
	}


    if(isset($_POST['tambah'])){
        $no_ktp = $_POST['no_ktp'];
        $nama = $_POST['nama'];
        $tempat_lhr = $_POST['tempat'];
        $tgl_lhr = $_POST['tgl_lhr'];
        $jk = $_POST['jk'];
        $agama = $_POST['agama'];
        $pendidikan = $_POST['pendidikan'];
        $pekerjaan = $_POST['pekerjaan'];
        $status = $_POST['status'];
        $id_kk = $_POST['id_kk'];
        //var_dump($id_kk);
        $sql = "INSERT INTO anggota (no_ktp, id_kk, nama_anggota_keluarga, jk, tempat_lahir, tgl_lahir, agama, pendidikan, pekerjaan, status) VALUES ('$no_ktp', '$id_kk', '$nama', '$jk', '$tempat_lhr', '$tgl_lhr', '$agama', '$pendidikan', '$pekerjaan', '$status')";

        $db->query($sql);
        header("Location:anggota.php?id_kk=$id_kk");
    }

    if(isset($_POST['edit'])){
        //$no_ktp = $_POST['no_ktp'];
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $tempat_lhr = $_POST['tempat'];
        $tgl_lhr = $_POST['tgl_lhr'];
        $jk = $_POST['jk'];
        $agama = $_POST['agama'];
        $pendidikan = $_POST['pendidikan'];
        $pekerjaan = $_POST['pekerjaan'];
        $status = $_POST['status'];
        $id_kk = $_POST['id_kk'];
        //var_dump($id_kk);
        $sql = "UPDATE anggota SET nama_anggota_keluarga='$nama', jk='$jk', tempat_lahir='$tempat_lhr', tgl_lahir='$tgl_lhr', agama='$agama', pendidikan='$pendidikan', pekerjaan='$pekerjaan', status='$status' WHERE id='$id'";

        $db->query($sql);
        header("Location:anggota.php?id_kk=$id_kk");
	}
?>