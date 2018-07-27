<?php
    include 'base.php';
    require('prosesnama.php'); 
    error_reporting(0);
?>
<?php startblock('content') ?>
<br><br><br>
<div align="right">
<div class="col-md-12">
<form action="anggota.php">
    <table>
        <br>
        <td><input type="text" name="search" class="form-control" id="find" placeholder="Nama Anggota Keluarga" align="right"></td>
        <td><button type="submit" class="btn btn-default" value="search">Cari</button></td>
    </table>
    </form>
</div>
</div>
<?php
    if($_GET['search']){
        $search = $_GET['search'];
        if($search != ''){
            $sql = "SELECT * FROM anggota WHERE nama_anggota_keluarga LIKE '%$search%'" ;
            $hasil = $db->query($sql);
        }
    }
?>
<?php

?>
<div class="container">
    <div class="row">
        <h2>Data Anggota Keluarga</h2>
        <h6></h6>
        <button class="btn btn-primary pull-right">Tambah Anggota</button>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nomor KTP</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Tempat, Tanggal Lahir</th>
                    <th scope="col">Pendidikan</th>
                    <th scope="col">Pekerjaan</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                    <tbody>
                        <?php
                        if($_GET['id_kk']){
                            $id_kk = $_GET['id_kk'];
                            if(is_null($id_kk) == false){
                                $sql = "SELECT * FROM anggota WHERE id_kk=$id_kk";
                                $hasil = $db->query($sql);
                                $no = 1;
                                while($data = $hasil->fetch_assoc()){
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $no++ ?></th>
                                        <td><?php echo $data['no_ktp'] ?></td>
                                        <td><?php echo $data['nama_anggota_keluarga'] ?></td>
                                        <td><?php echo $data['jk'] ?></td>
                                        <td><?php echo $data['tempat_lahir'] ?>, <?php echo $data['tgl_lahir'] ?></td>
                                        <td><?php echo $data['agama'] ?></td>
                                        <td><?php echo $data['pekerjaan'] ?></td>
                                        <td><?php echo $data['pendidikan'] ?></td>
                                        <td><?php echo $data['status'] ?></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="edit.php?aksi=edit&id_kk=<?php echo $data['id'] ?>" class="btn btn-primary"><i class="fas fa-edit" ></i></a>
                                            <a href="data.php?aksi=hapus&id_kk=<?php echo $data['id'] ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            else
                                header("Location:data.php");
                        }
                        else
                            header("Location:data.php");
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