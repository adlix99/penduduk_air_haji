<?php
    include 'base.php';
    require('prosesnama.php'); 
    error_reporting(0);
?>
<?php startblock('content') ?>
<br><br><br><br>
<div class="row" align="center">
    <div class="container">
        <div>
            <h1>Pencatatan Data Kartu Keluarga</h1>
            <h2>Nagari Air Haji</h2><br>
        </div>
    </div>
</div>
<div class="col-md-2"></div>
<div class="col-md-8">
    <form action="masukdata.php" method="POST" >
        <div class="row">
            <div class="col-md-7">
                <div class="form-group">
                    <!--<label for="kk">Nomor Kartu Keluarga</label>-->
                    <input type="text" name="id_kk" class="form-control" id="id_kk" placeholder="Nomor Kartu Keluarga" required="" >
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <!-- <label for="event">Nama Kepala Keluarga</label> -->
                    <input type="text" name="nama_kk" class="form-control" id="nama_kk"  placeholder="Nama Kepala Keluarga" required="">
                </div>
            </div>
        </div>
        <div class="form-group">
            <!-- <label for="event">Alamat</label> -->
            <input type="text" name="alamat" class="form-control" id="alamat"  placeholder="Alamat" required="">
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <!-- <label for="event">RT/RW</label> -->
                    <input type="text" name="rt_rw" class="form-control" id="rt_rw"  placeholder="RT/RW" required="">
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <!-- <label for="event">Kelurahan</label> -->
                    <input type="text" name="kelurahan" class="form-control" id="kelurahan"  placeholder="Kelurahan" required="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <!-- <label for="event">Kecamatan</label> -->
                    <input type="text" name="kecamatan" class="form-control" id="kecamatan"  value="Sungai Aur" disabled="" placeholder="Kecamatan" required="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <!-- <label for="event">Kabupaten/Kota</label> -->
                    <input type="text" name="kabupaten_kota" class="form-control" id="kabupaten_kota" value="Pasaman Barat" disabled="" placeholder="Kabupaten/Kota" required="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <!-- <label for="event">Kode Pos</label> -->
                    <input type="number" name="kode_pos" class="form-control" id="kode_pos" value="25661" disabled="" placeholder="Kode Pos" required="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group"> 
                    <!-- <label for="event">Provinsi</label> -->
                    <input type="text" name="provinsi" class="form-control" id="provinsi" value="Sumatera Barat" disabled="" placeholder="Provinsi" required="">
                </div>
            </div>
        </div>
        <center><button type="submit" name="submit" class="btn btn-primary">Simpan</button></center>
    </form>
</div>
<div></div>
<?php endblock() ?>