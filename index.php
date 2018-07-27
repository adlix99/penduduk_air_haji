<?php
    include 'base.php';
    require('prosesnama.php'); 
    error_reporting(0);
?>
<?php startblock('content') ?>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <br><br><br><br><br><br><br><br><br><br>
        <center>
            <h1>Pencarian Data Kartu Keluarga</h1>
            <h1>Ranah Air Haji</h1>
        <form action="data.php">
            <table>
                <tr><input type="text" name="search" class="form-control" id="find" placeholder="Masukan Nomor Kartu Keluarga"></tr><br>
                <tr><button type="submit" class="btn btn-primary" value="search">Search</button></tr>
            </table>
        </form>
        </center>
    </div>
</div>
<?php endblock() ?>
