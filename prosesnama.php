<?php
//KONEKSI
$db = new mysqli('localhost', 'root','', 'nagari');
if ($db->connect_errno > 0) {
    die("connecting failed");
}

//SEARCH
if(isset($_GET['search']))
{
    $find = $_GET['search'];
    $sql = "SELECT * FROM kk WHERE id_kk LIKE '%$find%' " ;
    $hasil = $db->query($sql);
}//Ambil data ke table
else
{
    $q = "SELECT * FROM kk";
    $hasil = $db->query($q); 
}

//INSERT
if (isset($_POST['submit'])) 
{
  $nokk = $_POST['id_kk'];
  $nama = $_POST['nama_kk'];
  $alamat = $_POST['alamat'];
  $rtrw = $_POST['rt_rw'];
  $kel = $_POST['kelurahan'];
  $kec = $_POST['kecamatan'];
  $kab = $_POST['kabupaten_kota'];
  $kode = $_POST['kode_pos'];
  $prov = $_POST['provinsi'];
  
  if($nokk!=0)    
    {
        $sql = "UPDATE kk SET  id_kk='$nokk', nama_kk='$nama', alamat='$alamat', rt_rw='$rtrw', kelurahan='$kel', kecamatan='$kec', kabupaten_kota='$kab', kode_pos='$kode', provinsi='$prov' WHERE id_kk=$nokk";
        $hasil = $db->query($sql);
    }
  else
    {
        $input = "INSERT INTO kk (id_kk,nama_kk,alamat,rt_rw,kelurahan,kecamatan,kabupaten_kota,kode_pos,provinsi) VALUES ('$nokk','$nama','$alamat','$rtrw','$kel','$kec','$kab','$kode','$prov')";
        $hasil = $db->query($input);

        echo '<script> alert("Data berhasil ditambah")</script>
        <meta http-equiv="refresh" content="0.1; url=data.php">';
    }
}

//UPDATE & DELETE
if(isset($_GET['id_kk']) && isset($_GET['aksi']))
{    
    $aksi = $_GET['aksi'];
    $nokk = $_GET['id_kk'];

    if($aksi == 'edit')
    {
        $sql = "SELECT * FROM kk WHERE id_kk='$nokk'";
        $result = $db->query($sql);

        $kk = $result->fetch_assoc();
    }
    elseif($aksi == 'hapus')
    {
        $sql = "DELETE FROM kk WHERE id_kk='$nokk'";
        $result = $db->query($sql);
        echo '<script> alert("Data berhasil dihapus")</script>
        <meta http-equiv="refresh" content="0.1; url=data.php">';
    }
}

?>