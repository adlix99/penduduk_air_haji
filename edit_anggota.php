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
    <?php
        $anggota = array();
        if($_GET['id']){
            $id = $_GET['id'];
            $sql = "SELECT * FROM anggota WHERE id = '$id'";
            $hasil = $db->query($sql);
            $anggota = $hasil->fetch_assoc();
        }
        else{
            header("Location:".$_SERVER["HTTP_REFERER"] );
            exit;
        }
    ?>
    <br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h3>Edit Anggota</h3>
                <form action="tambah_anggota.php" method="POST">
                    <div class="md-form mb-5">
                        <input type="hidden" name="id" id="tambah_no_ktp" class="form-control validate" required="" value="<?= $anggota['id'] ?>">
                    </div>

                    <div class="md-form mb-5">
                        <input type="hidden" name="id_kk" id="tambah_no_ktp" class="form-control validate" required="" value="<?= $anggota['id_kk'] ?>">
                    </div>

                    <div class="md-form mb-5">
                        <label data-error="wrong" data-success="right" for="form34">Nomor KTP</label>
                        <input type="text" name="no_ktp" id="tambah_no_ktp" class="form-control validate" required="" value="<?= $anggota['no_ktp'] ?>" disabled="">
                    </div>

                    <div class="md-form mb-5">
                        <label data-error="wrong" data-success="right" for="form34">Nama</label>
                        <input type="text" name="nama" id="tambah_nama" class="form-control validate" required="" value="<?= $anggota['nama_anggota_keluarga'] ?>">
                    </div>

                    <div class="md-form mb-5">
                        <label data-error="wrong" data-success="right" for="form29">Tempat Lahir</label>
                        <input type="text" name="tempat" id="tambah_tempat_lahir" class="form-control validate" required="" value="<?= $anggota['tempat_lahir'] ?>">
                    </div>

                    <div class="md-form mb-5">
                        <label data-error="wrong" data-success="right" for="form32">Tanggal Lahir</label>
                        <input type="date" name="tgl_lhr" id="tambah_tgl_lhr" class="form-control validate" required="" value="<?= $anggota['tgl_lahir'] ?>">
                    </div>

                    <div class="md-form mb-5">
                        <div class="radio">
                            <label><input <?php if($anggota['jk']=="Laki-laki"){echo "checked"; } ?> type="radio" name="jk" value="Laki-laki">Laki-laki</label>
                        </div>
                        <div class="radio">
                            <label><input <?php if($anggota['jk']=="Perempuan"){echo "checked"; } ?> type="radio" name="jk" value="Perempuan">Perempuan</label>
                        </div>
                    </div>

                    <div class="md-form mb-5">
                        <div class="form-group">
                            <label for="tambah_agama">Agama</label>
                            <select class="form-control" name="agama" id="tambah_agama">
                                <option <?php if($anggota['agama']=="Islam"){echo "selected"; } ?> value="Islam">Islam</option>
                                <option <?php if($anggota['agama']=="Kristen"){echo "selected"; } ?> value="Kristen">Kristen</option>
                                <option <?php if($anggota['agama']=="Protestan"){echo "selected"; } ?> value="Protestan">Protestan</option>
                                <option <?php if($anggota['agama']=="Katolik"){echo "selected"; } ?> value="Katolik">Katolik</option>
                                <option <?php if($anggota['agama']=="Hindu"){echo "selected"; } ?> value="Hindu">Hindu</option>
                                <option <?php if($anggota['agama']=="Budha"){echo "selected"; } ?> value="Budha">Budha</option>
                                <option <?php if($anggota['agama']=="Konghuchu"){echo "selected"; } ?> value="Konghuchu">Konghuchu</option>
                            </select>
                        </div> 
                    </div>

                    <div class="md-form mb-5">
                        <div class="form-group">
                            <label for="tambah_pddkn">Pendidikan</label>
                            <select class="form-control" id="tambah_pddkn" name="pendidikan">
                                <option <?php if($anggota['pendidikan']=="SD"){echo "selected"; } ?> value="SD">SD</option>
                                <option <?php if($anggota['pendidikan']=="SMP"){echo "selected"; } ?> value="SMP">SMP</option>
                                <option <?php if($anggota['pendidikan']=="SMA"){echo "selected"; } ?> value="SMA">SMA</option>
                                <option <?php if($anggota['pendidikan']=="D3"){echo "selected"; } ?> value="D3">D3</option>
                                <option <?php if($anggota['pendidikan']=="S1"){echo "selected"; } ?> value="S1">S1</option>
                                <option <?php if($anggota['pendidikan']=="S2"){echo "selected"; } ?> value="S2">S2</option>
                                <option <?php if($anggota['pendidikan']=="S3"){echo "selected"; } ?> value="S3">S3</option>
                            </select>
                        </div> 
                    </div>

                    <div class="md-form mb-5">
                        <label data-error="wrong" data-success="right" for="form32">Pekerjaan</label>
                        <input type="text" name="pekerjaan" id="tambah_pekerjaan" class="form-control validate" required="" value="<?= $anggota['pekerjaan'] ?>">
                    </div>

                    <div class="md-form mb-5">
                        <div class="form-group">
                            <label for="tambah_status">Status</label>
                            <select class="form-control" id="tambah_status" name="status">
                                <option <?php if($anggota['status']=="Belum Menikah"){echo "selected"; } ?> value="Belum Menikah">Belum Menikah</option>
                                <option <?php if($anggota['status']=="Menikah"){echo "selected"; } ?> value="Menikah">Menikah</option>
                                <option <?php if($anggota['status']=="Janda"){echo "selected"; } ?> value="Janda">Janda</option>
                                <option <?php if($anggota['status']=="Duda"){echo "selected"; } ?> value="Duda">Duda</option>
                            </select>
                        </div> 
                    </div>
                
                <div class="modal-footer d-flex justify-content-center">
                    <input type="submit" name="edit" class="btn btn-primary" value="Ubah">
                </div>
            </form>
        </div>
    </div>
</div>
<?php endblock() ?>