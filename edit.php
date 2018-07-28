<?php
    include 'base.php';
    require('prosesnama.php'); 
    error_reporting(0);
?>
<?php startblock('head') ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php endblock() ?>
<?php startblock('content') ?>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <br><br><br>
            <h3>Edit KK</h3>
            <form action="data.php" method="POST" >
                <div class="form-group">
                    <input type="text" name="id_kk" class="form-control" id="id_kk" placeholder="Nomor Kartu Keluarga" value="<?= $kk['id_kk'] ?>">
                </div>
                <div class="form-group">
                    <input type="text" name="nama_kk" class="form-control" id="nama_kk"  placeholder="Nama Kepala Keluarga" value="<?= $kk['nama_kk'] ?>">
                </div>
                <div class="form-group">
                    <input type="text" name="alamat" class="form-control" id="alamat"  placeholder="Alamat" value="<?= $kk['alamat'] ?>">
                </div>
                <div class="form-group">
                    <input type="text" name="rt_rw" class="form-control" id="rt_rw"  placeholder="RT/RW" value="<?= $kk['rt_rw'] ?>">
                </div>
                <div class="form-group">
                    <input type="text" name="kelurahan" class="form-control" id="kelurahan"  placeholder="Kelurahan" value="<?= $kk['kelurahan'] ?>">
                </div>
                <div class="form-group">
                    <input type="text" name="kecamatan" class="form-control" id="kecamatan"  placeholder="Kecamatan" value="<?= $kk['kecamatan'] ?>">
                </div>
                <div class="form-group">
                    <input type="text" name="kabupaten_kota" class="form-control" id="kabupaten_kota"  placeholder="Kabupaten/Kota" value="<?= $kk['kabupaten_kota'] ?>">
                </div>
                <div class="form-group">
                    <input type="number" name="kode_pos" class="form-control" id="kode_pos" placeholder="Kode Pos" value="<?= $kk['kode_pos'] ?>">
                </div>
                <div class="form-group"> 
                    <input type="text" name="provinsi" class="form-control" id="provinsi" placeholder="Provinsi" value="<?= $kk['provinsi'] ?>">
                </div>
                <button type="submit" name="submit" class="btn btn-primary pull-right">Simpan</button>
            </form>
        </div>
    </div>
</div>
</div>
</div>
<?php endblock() ?>