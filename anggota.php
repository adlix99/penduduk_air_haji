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
        <a href="" data-toggle="modal" data-target="#modalTambahAnggota" class="btn btn-primary pull-right">Tambah Anggota</a>
        <div class="modal fade" id="modalTambahAnggota" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Tambah Anggota</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="tambah_anggota.php" method="POST">
                        <div class="modal-body mx-3">
                            <div class="md-form mb-5">
                                <input type="hidden" name="id_kk" id="id_kk" class="form-control validate" value="<?php echo $_GET['id_kk']; ?>">
                            </div>

                            <div class="md-form mb-5">
                                <label data-error="wrong" data-success="right" for="form34">Nomor KTP</label>
                                <input type="text" name="no_ktp" id="tambah_no_ktp" class="form-control validate" required="">
                            </div>

                            <div class="md-form mb-5">
                                <label data-error="wrong" data-success="right" for="form34">Nama</label>
                                <input type="text" name="nama" id="tambah_nama" class="form-control validate" required="">
                            </div>

                            <div class="md-form mb-5">
                                <label data-error="wrong" data-success="right" for="form29">Tempat Lahir</label>
                                <input type="text" name="tempat" id="tambah_tempat_lahir" class="form-control validate" required="">
                            </div>

                            <div class="md-form mb-5">
                                <label data-error="wrong" data-success="right" for="form32">Tanggal Lahir</label>
                                <input type="date" name="tgl_lhr" id="tambah_tgl_lhr" class="form-control validate" required="">
                            </div>

                            <div class="md-form mb-5">
                                <div class="radio">
                                    <label><input checked="" type="radio" name="jk" checked>Laki-laki</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="jk">Perempuan</label>
                                </div>
                            </div>

                            <div class="md-form mb-5">
                                <div class="form-group">
                                    <label for="tambah_agama">Agama</label>
                                    <select class="form-control" id="tambah_agama" name="agama">
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Protestan">Protestan</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Konghuchu">Konghuchu</option>
                                    </select>
                                </div> 
                            </div>

                            <div class="md-form mb-5">
                                <div class="form-group">
                                    <label for="tambah_pddkn">Pendidikan</label>
                                    <select class="form-control" id="tambah_pddkn" name="pendidikan">
                                        <option value="SD">SD</option>
                                        <option value="SMP">SMP</option>
                                        <option value="SMA">SMA</option>
                                        <option value="D3">D3</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                                </div> 
                            </div>


                            <div class="md-form mb-5">
                                <label data-error="wrong" data-success="right" for="form32">Pekerjaan</label>
                                <input type="text" id="tambah_pekerjaan" name="pekerjaan" class="form-control validate" required="">
                            </div>


                            <div class="md-form mb-5">
                                <div class="form-group">
                                    <label for="tambah_status">Status</label>
                                    <select class="form-control" id="tambah_status" name="status">
                                        <option value="Belum Menikah">Belum Menikah</option>
                                        <option value="Menikah">Menikah</option>
                                        <option value="Janda">Janda</option>
                                        <option value="Duda">Duda</option>
                                    </select>
                                </div> 
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <input type="submit" name="tambah" class="btn btn-primary" value="Tambah">
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
                    <th scope="col">Agama</th>
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