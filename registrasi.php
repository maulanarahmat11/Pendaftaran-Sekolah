<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Aplikasi pendaftaran siswa secara online dari SMAN 1 Beruntung Baru">
    <meta name="author" content="Rahmat Maulana">

    <title>Registrasi-Aplikasi Pendaftaran Siswa</title>

    <!-- Gambar Title -->
    <link rel="icon" type="image/png" href="assets/img/logo.png">

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        .img-logo {
            max-height: 230px;
            margin-top: -40px;
            margin-bottom: -19px;
        }
    </style>

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-md-7">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Registrasi Siswa Baru!</h1>
                                    </div>
                                    <form class="user" action="registrasi_control.php" method="POST">
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Anda">
                                        </div>
                                        <!-- Tempat dan Tanggal Lahir -->
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="tempat_lahir">Tempat Lahir</label>
                                                <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                                <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" placeholder="Tanggal Lahir">
                                            </div>
                                        </div>
                                        <!-- Jenis Kelamin -->
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                                <div class="form_check">
                                                    <input type="radio" name="jenis_kelamin" value="L" class="form-check_input" id="laki">
                                                    <label for="laki" class="form_check_label">Laki-Laki</label>
                                                </div>
                                                <div class="form_check">
                                                    <input type="radio" name="jenis_kelamin" value="P" class="form-check_input" id="perempuan">
                                                    <label for="perempuan" class="form_check_label">Perempuan</label>
                                                </div>
                                                <!-- Agama -->
                                            </div>
                                            <div class="col-md-6">
                                                <label for="agama">Agama</label>
                                                <select name="agama" id="agama" class="form-control">
                                                    <option value="">Pilih Agama</option>
                                                    <option value="islam">Islam</option>
                                                    <option value="kristen">Kristen</option>
                                                    <option value="katolik">Katolik</option>
                                                    <option value="hindu">Hindu</option>
                                                    <option value="budha">Budha</option>
                                                    <option value="konghucu">Konghucu</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <textarea name="alamat" id="alama" class="form-control"></textarea>
                                        </div>
                                        <!-- Email -->
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="email">Email</label>
                                                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                                            </div>
                                            <!-- Telephone -->
                                            <div class="col-md-6">
                                                <label for="telepon">Telepone</label>
                                                <input type="text" name="telepon" class="form-control" id="telepon" placeholder="Telepone">
                                            </div>
                                        </div>
                                        <!-- Password -->
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="password">Password</label>
                                                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                                            </div>
                                            <!-- Telephone -->
                                            <div class="col-md-6">
                                                <label for="ulangi_password">Ulangi Password</label>
                                                <input type="password" name="ulangi_password" class="form-control" id="ulangi_password" placeholder="Ulangi Password">
                                            </div>
                                        </div>

                                        <button name="btn_registrasi" value="simpan" class="btn btn-primary btn-user btn-block">
                                            Registrasi
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="login.php">Sudah Punya Akun? Login!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

</body>

</html>