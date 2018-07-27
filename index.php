<?php

require('prosesnama.php'); 

error_reporting(0);

?>
<!-- 1511521023 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ranah Air Haji || Home</title>
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
<br>
<br>
<br>
<br> 
<div align="center">
<div class="col-md-8">
    <form action="">
        <table>
            <br>
                <h1>Pencarian Data Kartu Keluarga</h1>
                </div>
            <br>
                <h1>Ranah Air Haji</h1>
                </div>
        </table>
    </form>
</div>
</div>
<div align="center">
<div class="col-md-6">
<form action="data.php">
    <table>
        <br>
        <tr><input type="text" name="search" class="form-control" id="find" placeholder="Masukan Nomor Kartu Keluarga"></tr>
        <br>
        <tr><button type="submit" class="btn btn-primary" value="search">Search</button></tr>
    </table>
    </form>
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