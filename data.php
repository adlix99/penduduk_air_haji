<?php
    include 'base.php';
    require('prosesnama.php'); 
    error_reporting(0);
?>
<?php startblock('content') ?>

<br><br><br>
<div align="right">
<div class="col-md-12">
<form action="data.php">
    <table>
        <br>
        <td><input type="text" name="cari2" class="form-control" id="find" placeholder="Nama Kepala Keluarga" align="right"></td>
        <td><button type="submit" class="btn btn-default" value="search">Cari</button></td>
    </table>
    </form>
</div>
</div>
<?php
    //Pencarian dari HOME
    $sql = "SELECT * FROM kk" ;
    if($_GET['cari']){
        //var_dump("string"); die();
        $cari = $_GET['cari'];
        if($cari != ''){
            $sql = "SELECT * FROM kk WHERE id_kk LIKE '%$cari%'" ;
        }
    }
    elseif($_GET['cari2']){
        //var_dump("string"); die();
        $cari2 = $_GET['cari2'];
        if($cari2 != ''){
            $sql = "SELECT * FROM kk WHERE nama_kk LIKE '%$cari2%'" ;
        }
    }
    $hasil = $db->query($sql);
?>

<div class="container">
<div class="row">
    <h2>Data Kepala Keluarga</h2>
    <div class="col-md-12">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nomor KK</th>
                <th scope="col">Nama KK</th>
                <th scope="col">Alamat</th>
                <th scope="col">RT/RW</th>
                <th scope="col">Kelurahan/Desa</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
                <tbody>
                    <?php
                    $no = 1;
                    while($data = $hasil->fetch_assoc()) 
                    {
                        ?>
                        <tr>
                            <th scope="row"><?php echo $no++ ?></th>
                            <td><a href="anggota.php?id_kk=<?php echo $data['id'] ?>"><?php echo $data['id_kk'] ?></a></td>
                            <td><?php echo $data['nama_kk'] ?></td>
                            <td><?php echo $data['alamat'] ?></td>
                            <td><?php echo $data['rt_rw'] ?></td>
                            <td><?php echo $data['kelurahan'] ?></td>
                            <td>
                                <a href="edit.php?aksi=edit&id_kk=<?php echo $data['id_kk'] ?>" class="btn btn-primary"><i class="fas fa-edit" ></i></a>
                                <a href="data.php?aksi=hapus&id_kk=<?php echo $data['id_kk'] ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-md-14">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                    <th></th>
                                    </tr>            
                                </thead>
                            </table>
                        </div>
                    </div>
                </tbody>
        </table>
    </div>
</div>
</div>
<br><br><br><br><br>
<?php endblock() ?>