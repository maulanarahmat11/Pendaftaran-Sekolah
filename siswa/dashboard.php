<?php include('../config/auto_load.php'); ?>

<?php include('dashboard_control.php'); ?>

<?php include('../template/header.php'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
    <div class="row">
        <div class="col-md-12">
            <?php if (isset($_SESSION['pesan_sukses'])) { ?>

                <div class="alert alert-success">
                    <?= $_SESSION['pesan_sukses'] ?>
                </div>

            <?php }
            unset($_SESSION['pesan_sukses']);
            ?>
        </div>
        <div class="col-md-6">
            <div class="row">
                <?php if (!isset($status)) { ?>
                    <div class="col-md-12">
                        <!-- Illustrations -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">MASUKKAN DATA NILAI</h6>
                            </div>
                            <!-- Nilai Ujian -->
                            <div class="card-body">
                                <p class="text-danger">* Masukkan nilai anda untuk menyelesaikan proses pendaftaran!</p>
                                <form class="user" method="POST" action="<?= $base_url ?>/siswa/dashboard.php">
                                    <div class="form-group">
                                        <label for="un">Nilai Ujian Nasional</label>
                                        <input type="number" class="form-control" id="un" placeholder="Masukkan Nilai Ujian Nasional" name="un">
                                    </div>
                                    <!-- Nilai Sekolah -->
                                    <div class="form-group">
                                        <label for="us">Nilai Ujian Sekolah</label>
                                        <input type="number" class="form-control" id="us" placeholder="Masukkan Nilai Ujian Sekolah" name="us">
                                    </div>
                                    <!-- Nilai Sekolah -->
                                    <div class="form-group">
                                        <label for="uts_1">Nilai UTS 1</label>
                                        <input type="number" class="form-control" id="uts_1" placeholder="Masukkan Nilai Ujian Sekolah" name="uts_1">
                                    </div>
                                    <!-- Button Simpan dan Kembali -->
                                    <div class="text-right">
                                        <button type="submit" name="btn_simpan" value="simpan_nilai" class="btn btn-primary">Simpan</button>
                                        <a href="dashboard.php" class="btn btn-danger">Kembali</a>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>

                <?php } else if (isset($status) && $status == 0) { ?>
                    <!-- Hasil Penilaian -->
                    <div class="col-md-12">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">PENGUMUMAN HASIL SELEKSI</h6>
                            </div>
                            <!-- Nilai Ujian -->
                            <div class="card-body">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">Proses Penilaian</h5>
                                        <div class="col-auto">
                                            <i class="fa fa-spinner text-warning" style="font-size: 90px;"></i>
                                        </div>
                                        <p class="card-text mt-3">Terima Kasih Telah Melakukan Pendaftaran di SMAN 1 Beruntung Baru. Pengumuman Pada Tanggal :</p>
                                        <span class="badge badge-danger" style="font-size: 18px;">06 Juli 2024</span>
                                    </div>
                                    <div class="card-footer">
                                        <marquee style="margin-bottom: -5px;">SMAN 1 BERUNTUNG BARU</marquee>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Jika Lolos -->
                <?php } else if (isset($status) && $status == 1) { ?>
                    <div class="col-md-12">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">PENGUMUMAN HASIL SELEKSI</h6>
                            </div>
                            <!-- Nilai Ujian -->
                            <div class="card-body">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">ANDA LOLOS</h5>
                                        <div class="col-auto">
                                            <i class="fas fa-check text-success" style="font-size: 90px;"></i>
                                        </div>
                                        <p class="card-text mt-3">Selamat Anda Lolos Seleksi di SMAN 1 Beruntung Baru. Lakukan Daftar Ulang Pada Tanggal :</p>
                                        <span class="badge badge-danger" style="font-size: 18px;">06 Agustus 2024</span>
                                    </div>
                                    <div class="card-footer">
                                        <marquee style="margin-bottom: -5px;">SMAN 1 BERUNTUNG BARU</marquee>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Jika Tidak Lolos -->
                <?php } else if (isset($status) && $status == 2) { ?>
                    <div class="col-md-12">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">PENGUMUMAN HASIL SELEKSI</h6>
                            </div>
                            <div class="card-body">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">ANDA TIDAK LOLOS</h5>
                                        <div class="col-auto">
                                            <i class="fas fa-times text-danger" style="font-size: 90px;"></i>
                                        </div>
                                        <p class="card-text mt-3">Anda Belum Lolos. Terimakasih Telah Mengikuti Seleksi Dengan Baik.</p>
                                    </div>
                                    <div class="card-footer">
                                        <marquee style="margin-bottom: -5px;">SMAN 1 BERUNTUNG BARU</marquee>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <!-- Persyaratan Daftar Ulang -->
                <div class="col-md-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">PERSYARATAN DAFTAR ULANG</h6>
                        </div>
                        <!-- Nilai Ujian -->
                        <div class="card-body">
                            <p>Siswa yang lolos seleksi wajib melakukan daftar ulang dengan membawa berkas sebagai berikut:</p>

                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    1. FC AKTA
                                    <span class="badge badge-info badge-pill">1 lembar</span>
                                </li>
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        2. FC Kartu Keluarga
                                        <span class="badge badge-info badge-pill">1 lembar</span>
                                    </li>
                                    <ul class="list-group">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            3. FC Nilai Ujian Nasional
                                            <span class="badge badge-info badge-pill">2 lembar</span>
                                        </li>
                                        <ul class="list-group">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                4. FC Nilai Ujian Sekolah
                                                <span class="badge badge-info badge-pill">1 lembar</span>
                                            </li>
                                        </ul>
                                        <p class="text-danger mt-3">*Wajib Melakukan Daftar Ulang Pada Tanggal 22 September 2024</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">

                <!-- Data Diri -->
                <div class="col-md-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DATA DIRI</h6>
                        </div>
                        <!-- Nilai Ujian -->
                        <div class="card-body">
                            <div class="text-center">
                                <?php
                                if (isset($data_pendaftar['foto']) && $data_pendaftar['foto'] != '') {
                                    $foto = '../uploads/' . $data_pendaftar['foto'];
                                } else {
                                    $foto = '../assets/img/avatar.png';
                                }
                                ?>
                                <img src="<?= $foto ?>" alt="fotoprofil" class="img-fluid rounded-circle" style="width: 200px; height:200px;">
                            </div>
                            <div class="text-right">
                                <a href="editprofil.php" class="btn btn-warning btn-sm">Edit Profil</a>
                                <a href="<?= $base_url ?>/cetak/detail_cetak.php?id=<?= $data_pendaftar['id'] ?>" class="btn btn-success btn-sm" target="blank">Cetak Data Diri</a>
                            </div>
                            <h5 class="text-center card-title mt-3">
                                <?= $data_pendaftar['nama'] ?>
                            </h5>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h6 class="mb-0" style="color: black;">Tempat, Tanggal Lahir</h6>
                                    <small>
                                        <?= $data_pendaftar['tmpt_lahir'] ?>, <?= date("d-m-Y", strtotime($data_pendaftar['tgl_lahir'])); ?>
                                    </small>
                                </li>
                                <li class="list-group-item">
                                    <h6 class="mb-0" style="color: black;">Jenis Kelamin</h6>
                                    <!-- php -->
                                    <?php
                                    if ($data_pendaftar['jenis_kelamin'] == 'L') {
                                        $kelamin = "Laki-laki";
                                    } else {
                                        $kelamin = "Perempuan";
                                    }
                                    ?>

                                    <small><?= $kelamin ?></small>
                                </li>
                                <li class="list-group-item">
                                    <h6 class="mb-0" style="color: black;">Agama</h6>
                                    <small>Islam</small>
                                </li>
                                <li class="list-group-item">
                                    <h6 class="mb-0" style="color: black;">Alamat</h6>
                                    <small><?= $data_pendaftar['alamat'] ?></small>
                                </li>
                                <li class="list-group-item">
                                    <h6 class="mb-0" style="color: black;">Email</h6>
                                    <small><?= $data_pendaftar['email'] ?></small>
                                </li>
                                <li class="list-group-item">
                                    <h6 class="mb-0" style="color: black;">Telepone</h6>
                                    <small><?= $data_pendaftar['telepon'] ?></small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
</div>
</div>

</div>
</div>
<!-- End container-fluid -->

<?php include('../template/footer.php'); ?>