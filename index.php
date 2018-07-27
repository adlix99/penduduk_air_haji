<?php
    include 'base.php';
    require('prosesnama.php'); 
    error_reporting(0);
?>
<?php startblock('content') ?>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <br><br><br><br>
        <center>
            <h2>Aplikasi Pendataan Penduduk</h2>
            <h2>Kecamatan Sungai Aur Kabupaten Pasaman Barat Provinsi Sumatera Barat</h2>
            <h6>Kode Pos : 25661</h6>
            <h3>Pencarian Data Kartu Keluarga</h3>
            <h3>Ranah Air Haji</h3>
        <form action="data.php">
            <table>
                <tr><input type="text" name="cari" class="form-control" id="find" placeholder="Masukan Nomor Kartu Keluarga"></tr><br>
                <tr><button type="submit" class="btn btn-primary" value="search">Cari</button></tr>
            </table>
        </form>
        </center>
    </div>
</div>
<?php endblock() ?>
