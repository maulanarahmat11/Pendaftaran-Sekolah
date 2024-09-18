<?php include('../config/auto_load.php'); ?>

<?php include('editprofil_control.php'); ?>

<?php include('../template/header.php'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">EDIT PROFIL</h1>
    <form class="user" method="POST" action="<?= $base_url ?>/siswa/editprofil.php" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Anda"
                        value="<?= $data_pendaftar['nama'] ?>">
                </div>
                <!-- Tempat dan Tanggal Lahir -->
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir"
                            value="<?= $data_pendaftar['tmpt_lahir'] ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" placeholder="Tanggal Lahir" value="<?= date("d-m-Y", strtotime($data_pendaftar['tgl_lahir'])); ?>">
                    </div>
                </div>
                <!-- Jenis Kelamin -->
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <?php
                        $laki = "";
                        $perempuan = "";

                        if ($data_pendaftar['jenis_kelamin'] == "L") {
                            $laki = "checked";
                        } else {
                            $perempuan = "checked";
                        }
                        ?>

                        <div class="form_check">
                            <input type="radio" name="jenis_kelamin" value="L" class="form-check_input" id="laki" <?= $laki ?>>
                            <label for="laki" class="form_check_label">Laki-Laki</label>
                        </div>
                        <div class="form_check">
                            <input type="radio" name="jenis_kelamin" value="P" class="form-check_input" id="perempuan" <?= $perempuan ?>>
                            <label for="perempuan" class="form_check_label">Perempuan</label>
                        </div>
                        <!-- Agama -->
                    </div>
                    <div class="col-md-6">
                        <label for="agama">Agama</label>
                        <select name="agama" id="agama" class="form-control" 
                            <option value="">Pilih Agama</option>
                            <option value="islam" <?php if ($data_pendaftar['agama'] == 'islam') {
                                                        echo "selected";
                                                    } ?>>Islam</option>
                            <option value="kristen" <?php if ($data_pendaftar['agama'] == 'kristen') {
                                                        echo "selected";
                                                    } ?>>Kristen</option>
                            <option value="katolik" <?php if ($data_pendaftar['agama'] == 'katolik') {
                                                        echo "selected";
                                                    } ?>>Katolik</option>
                            <option value="hindu" <?php if ($data_pendaftar['agama'] == 'hindu') {
                                                        echo "selected";
                                                    } ?>>Hindu</option>
                            <option value="budha" <?php if ($data_pendaftar['agama'] == 'budha') {
                                                        echo "selected";
                                                    } ?>>Budha</option>
                            <option value="konghucu" <?php if ($data_pendaftar['agama'] == 'konghucu') {
                                                            echo "selected";
                                                        } ?>>Konghucu</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control"><?= $data_pendaftar['alamat'] ?></textarea>
                </div>
                <!-- Email -->
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="<?= $data_pendaftar['email'] ?>">
                    </div>
                    <!-- Telephone -->
                    <div class="col-md-6">
                        <label for="telepon">Telepone</label>
                        <input type="text" name="telepon" class="form-control" id="telepon" placeholder="Telepone"  value="<?= $data_pendaftar['telepon'] ?>">
                    </div>
                </div>
                <!-- Password -->
                <!-- <div class="form-group row">
                        <div class="col-md-6">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <div class="col-md-6">
                            <label for="ulangi_password">Ulangi Password</label>
                            <input type="password" name="ulangi_password" class="form-control" id="ulangi_password" placeholder="Ulangi Password">
                        </div>
                    </div> -->
            </div>
            <div class="col-md-4">
                <?php
                if (isset($data_pendaftar['foto']) && $data_pendaftar['foto'] != '') {
                    $foto = '../uploads/' . $data_pendaftar['foto'];
                } else {
                    $foto = '../assets/img/avatar.png';
                }
                ?>
                <img src="<?= $foto ?>" alt="foto profil" class="img-fluid">
                <input type="file" name="gambar" class="form-control mt-2">
            </div>
            <div class="col-md-12">
                <button type="submit" name="btn_simpan" value="simpan_profil" class="btn btn-primary mb-5">Ubah</button>
                <a href="dashboard.php" class="btn btn-danger mb-5">Kembali</a>
            </div>
        </div>
    </form>
</div>

<?php include('../template/footer.php'); ?>