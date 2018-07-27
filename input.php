<?php

require('connect.php'); 

error_reporting(0);

?>
<!--1511521023-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nagari Air Haji || Pencatatan</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th> 
                    <a href="index.php"><font color="white">Pencarian</font></a>  || 
                    <a href="input.php"><font color="white">Pencatatan</font></a>  ||  
                    <a href="data.php"><font color="white">Data</font></a> 
                </th> 
                </tr>            
            </thead>
        </table>
    </div>
</div>

<div align="center">
    <div class="container">
        <div>
            <h1>Pencatatan Data Kartu Keluarga</h1>
            <h2>Nagari Air Haji</h2><br>
        </div>
    </div>
</div>

<div align="center">
<div class="col-md-6">
<form action="masukdata.php" method="POST" >
    <div class="form-group">
    <!--<label for="kk">Nomor Kartu Keluarga</label>-->
        <input type="text" name="id_kk" class="form-control" id="id_kk" placeholder="Nomor Kartu Keluarga" required="" >
    </div>
    <div class="form-group">
    <!-- <label for="event">Nama Kepala Keluarga</label> -->
        <input type="text" name="nama_kk" class="form-control" id="nama_kk"  placeholder="Nama Kepala Keluarga" required="">
    </div>
    <div class="form-group">
    <!-- <label for="event">Alamat</label> -->
        <input type="text" name="alamat" class="form-control" id="alamat"  placeholder="Alamat" required="">
    </div>
    <div class="form-group">
    <!-- <label for="event">RT/RW</label> -->
        <input type="text" name="rt_rw" class="form-control" id="rt_rw"  placeholder="RT/RW" required="">
    </div>
    <div class="form-group">
    <!-- <label for="event">Kelurahan</label> -->
        <input type="text" name="kelurahan" class="form-control" id="kelurahan"  placeholder="Kelurahan" required="">
    </div>
    <div class="form-group">
    <!-- <label for="event">Kecamatan</label> -->
        <input type="text" name="kecamatan" class="form-control" id="kecamatan"  value="Sungai Aur" disabled="" placeholder="Kecamatan" required="">
    </div>
    <div class="form-group">
    <!-- <label for="event">Kabupaten/Kota</label> -->
        <input type="text" name="kabupaten_kota" class="form-control" id="kabupaten_kota" value="Pasaman Barat" disabled="" placeholder="Kabupaten/Kota" required="">
    </div>
    <div class="form-group">
    <!-- <label for="event">Kode Pos</label> -->
        <input type="number" name="kode_pos" class="form-control" id="kode_pos" value="25661" disabled="" placeholder="Kode Pos" required="">
    </div>
    <div class="form-group"> 
    <!-- <label for="event">Provinsi</label> -->
        <input type="text" name="provinsi" class="form-control" id="provinsi" value="Sumatera Barat" disabled="" placeholder="Provinsi" required="">
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>

</form>
</div>
</div>

            </tbody>
            </table>
    </div>
</div>

</div>

<br>
<br>
<br>
<br>
<br>
<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th><center>Nagari Air Haji@2018</center></th>
                </tr>            
            </thead>
        </table>
    </div>
</div>
</body>
</html>