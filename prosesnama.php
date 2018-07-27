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