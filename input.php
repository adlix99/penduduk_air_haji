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
    <form action="input.php" method="POST" >
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

<?php
include('connect.php'); 
if (isset($_POST['submit'])) 
{
    //$id = $_POST['id'];
    $nokk = $_POST['id_kk'];
    $nama = $_POST['nama_kk'];
    $alamat = $_POST['alamat'];
    $rtrw = $_POST['rt_rw'];
    $kel = $_POST['kelurahan'];
    $no_kk = $db->query("SELECT * FROM kk WHERE id_kk=$nokk");
    $anggota = $no_kk->fetch_assoc();
    $id = $anggota['id'];

    if($no_kk->num_rows > 0){
        $sql = "UPDATE kk SET  id_kk='$nokk', nama_kk='$nama', alamat='$alamat', rt_rw='$rtrw', kelurahan='$kel', kecamatan='Sungai Aur', kabupaten_kota='Pasaman Barat', kode_pos='25661', provinsi='Sumatera Barat' WHERE id_kk=$nokk";
        $db->query($sql);

        $sql2 = "UPDATE anggota SET nama_anggota_keluarga='$nama' WHERE id_kk='$id'";
        $db->query($sql2);
        header("Location:data.php");
    }
    else{
      $input = "INSERT INTO kk (id_kk,nama_kk,alamat,rt_rw,kelurahan,kecamatan,kabupaten_kota,kode_pos,provinsi) VALUES ('$nokk','$nama','$alamat','$rtrw','$kel','Sungai Aur','Pasaman Barat','25661','Sumatera Barat')";
      $hasil = $db->query($input);
      $id = $db->insert_id;
      $input_anggota = "INSERT INTO anggota (id_kk, nama_anggota_keluarga) VALUES ('$id','$nama')";
      $hasil2 = $db->query($input_anggota);
      header("Location:data.php");
    }
}
?>
<?php endblock() ?>