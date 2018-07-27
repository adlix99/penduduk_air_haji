<?php
    include 'base.php';
    require('prosesnama.php'); 
    error_reporting(0);
?>
<?php startblock('content') ?>


<div align="right">
<div class="col-md-12">
<form action="data.php">
    <table>
        <br>
        <td><input type="text" name="search" class="form-control" id="find" placeholder="Nama Kepala Keluarga" align="right"></td>
        <td><button type="submit" class="btn btn-default" value="search">Search</button></td>
    </table>
    </form>
</div>
</div>
<?php
    if($_GET['search']){
        //var_dump("string"); die();
        $search = $_GET['search'];
        if($search != ''){
            $sql = "SELECT * FROM kk WHERE nama_kk LIKE '%$search%'" ;
            $hasil = $db->query($sql);
        }
    }

?>

<div class="container">
    <div class="row">
        <h1>Data Kartu Keluarga Nagari Air Haji</h1>
        <h2>Kecamatan Sungai Aur Kabupaten Pasaman Barat Provinsi Sumatera Barat</h2>
        <h6>Kode Pos : 25661</h6>
    </div>
</div>
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
                            <td><?php echo $data['id_kk'] ?></td>
                            <td><a href="anggota.php?id_kk=<?php echo $data['id'] ?>"><?php echo $data['nama_kk'] ?></a></td>
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