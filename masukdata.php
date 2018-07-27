<?php

include('connect.php'); 

if (isset($_POST['submit'])) 
{
  $nokk = $_POST['id_kk'];
  $nama = $_POST['nama_kk'];
  $alamat = $_POST['alamat'];
  $rtrw = $_POST['rt_rw'];
  $kel = $_POST['kelurahan'];
  $no_kk = $db->query("SELECT * FROM kk WHERE id_kk=$nokk");
  
    if($no_kk == true){
      $sql = "UPDATE kk SET  id_kk='$nokk', nama_kk='$nama', alamat='$alamat', rt_rw='$rtrw', kelurahan='$kel', kecamatan='Sungai Aur', kabupaten_kota='Pasaman Barat', kode_pos='25661', provinsi='Sumatera Barat' WHERE id_kk=$nokk";
      $hasil = $db->query($sql);
      if($hasil)
        header("Location:data.php");
    }
    else{
      $input = "INSERT INTO kk (id_kk,nama_kk,alamat,rt_rw,kelurahan,kecamatan,kabupaten_kota,kode_pos,provinsi) VALUES ('$nokk','$nama','$alamat','$rtrw','$kel','Sungai Aur','Pasaman Barat','25661','Sumatera Barat')";
      $hasil = $db->query($input);
      if($hasil)
        header("Location:data.php");
    }
}
?>