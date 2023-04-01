<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/img/logo-ico.ico">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/popup.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <title>PPDB SMKN 1 KRAGILAN - 2022</title>



</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">
    <div id="modal_popup" class="modal animate__animated animate__backInDown" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        #INFO PPDB 2022 - SMKN 1 KRAGILAN
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">

                    <h3 class="text-danger">Pendaftaran Sudah di TUTUP...!!!</h3>
                    <h2 class="mt-5 mb-5">Pengumuman Kelulusan PPDB Tahun 2022</h2>
                    <br>

                    <?php
                    date_default_timezone_set('Asia/Jakarta');
                    $date =  date('d-m-Y H:i:s');



                    if ($date > date('04-07-2022 00:00:00')) {
                        echo "<a href='ppdb_login.php' class='btn btn-primary'>Cek Pengumuman</a><br/>";
                    } else {

                    ?>

                        <div id="clock" class="text-center">
                            <div><span id="days"></span>
                                <p>Hari</p>
                            </div>
                            <div><span id="hours"></span>
                                <p>Jam</p>
                            </div>
                            <div><span id="minutes"></span>
                                <p>Menit</p>
                            </div>
                            <div><span id="seconds"></span>
                                <p>Detik</p>
                            </div>
                        </div>

                    <?php
                    }
                    ?>

                    <br>
                    <a href="https://drive.google.com/file/d/1PYh_UrhxEzI_1JzpecOSUxeFx57_B1bu/view?usp=sharing" target="_blank">SK Kelulusan PPDB SMKN 1 Kragilan Tahun 2022</a>
                    <h5 class="text-success mt-3">Pengumuman bisa di cek di Akun Masing - Masing <br> Pada Tanggal 04 Juli 2022 Pukul 00.00 WIB</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>


    <!-- <div id="modal_popup" class="modal animate__animated animate__backInDown" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        #INFO PPDB 2022 - SMKN 1 KRAGILAN
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ol class="mb-5">
                        <h4>
                            <li>
                                Pastikan Anda Sudah Terdaftar dan Cetak Bukti Pendaftaran
                            </li>
                        </h4>
                        <i style="color: red;">Cetak Bukti Pendaftaran Silahkan Login ke Akun Masing - Masing <a href="ppdb_daftar.php">Login</a></i><br>
                        Untuk Cek data Pendaftar : Klik <a href="pendaftar.php">Data Pendaftar</a>
                        <h4>
                            <li>
                                Cek Kuota dan Jumlah Pendaftar
                            </li>
                        </h4>

                        Untuk Cek Kuota dan Jumlah Pendaftar : Klik <a href="jml_pendaftar.php">Jumlah Pendaftar</a>
                        <h4>
                            <li>
                                Cetak Tanda Bukti Kelengkapan berkas Untuk Proses Penyerahan Berkas
                            </li>
                        </h4>
                        <i style="color: red;">Cetak Tanda Bukti Kelengkapan Berkas. Silahkan Login ke Akun Masing - Masing <a href="ppdb_daftar.php">Login</a></i><br>

                        <h4>
                            <li>Bukti Pendaftaran dan Berkas Pendukung Lainnya dibawa Saat Tes Uji Kompetensi Keahlian</li>
                        </h4>
                    </ol>

                    <div class="text-center">
                        <h4>Untuk Bergabung Ke Group Whatsapp</h4>
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#group_popup">Gabung Group</a>

                    </div>

                    <div class="text-center mt-3">
                        <h4>Info Uji Kompetensi Keahlian dan Tes Wawancara</h4>
                        <a href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#syarat_popup">Lihat Info</a>

                    </div>



                    <h3 class="text-center text-danger mt-5">Pendaftaran Sudah di TUTUP</h3>
                    <h4 class="fw-bold">Pendaftaran <span class="text-danger">GRATISSSS</span> Tidak dipungut Biaya........</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div> -->


    <div id="group_popup" class="modal animate__animated animate__backInUp" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        #GROUP WHATSAPP - KOMPETENSI KEAHLIAN
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="text-center">
                        <h4 class="mb-3">Untuk Bergabung Ke Group Whatsapp Klik Tautan dibawah ini</h4>
                        <a href="https://chat.whatsapp.com/CvZFcvmhYyhKh3Hpkwyrhd" style="text-decoration: none;">
                            <h5>Teknik Pemesinan (TPM)</h5>
                        </a><br>
                        <a href="https://chat.whatsapp.com/Fy4O0qJUXgNHt6C3oztud2" style="text-decoration: none;">
                            <h5>Teknik Kendaraan Ringan (TKR)</h5>
                        </a><br>
                        <a href="https://chat.whatsapp.com/BnWpaApLzPA43WM87tDcQ8" style="text-decoration: none;">
                            <h5>Teknik Komputer dan Jaringan (TKJ)</h5>
                        </a><br>
                        <a href="https://chat.whatsapp.com/EPviL0ny3VQ5sjsYLN5Vmb" style="text-decoration: none;">
                            <h5>Rekayasa Perangkat Lunak (RPL)</h5>
                        </a><br>
                        <a href="https://chat.whatsapp.com/CR8FU37OCrj4mNFMoIlxID" style="text-decoration: none;">
                            <h5>Akuntansi Keuangan Lembaga (AKL)</h5>
                        </a><br>
                        <a href="https://chat.whatsapp.com/C60hXnUGFPt08ymbTJwFKt" style="text-decoration: none;">
                            <h5>Otomatisasi dan tata Kelola Perkantoran (OTKP)</h5>
                        </a>
                    </div>



                    <h3 class="text-center text-danger mt-5">Pendaftaran Sudah di TUTUP</h3>
                    <h4 class="fw-bold">Pendaftaran <span class="text-danger">GRATISSSS</span> Tidak dipungut Biaya........</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <div id="jadwal_popup" class="modal animate__animated animate__backInLeft" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        #JADWAL UJI KOMPETENSI - TES KHUSUS
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div>
                        <table class="table table-striped table-hover">
                            <tr>
                                <th>Kompetensi Keahlian</th>
                                <th>Tanggal</th>
                            </tr>
                            <tr>
                                <td>1. Teknik Pemesinan (TPM)</td>
                                <td>21 Juni 2022</td>
                            </tr>
                            <tr>
                                <td>2. Teknik Kendaraan Ringan Otomotif (TKR)</td>
                                <td>22 Juni 2022</td>
                            </tr>
                            <tr>
                                <td>3. Rekayasa Perangkat Lunak (RPL)</td>
                                <td>23 Juni 2022</td>
                            </tr>
                            <tr>
                                <td>4. Teknik Komputer dan Jaringan (TKJ)</td>
                                <td>24 Juni 2022</td>
                            </tr>
                            <tr>
                                <td>5. Otomatisasi dan Tata Kelola Perkantoran (OTKP)</td>
                                <td>27 Juni 2022</td>
                            </tr>
                            <tr>
                                <td>6. Akuntansi dan Keuangan Lembaga (AKL)</td>
                                <td>28 Juni 2022</td>
                            </tr>
                        </table>

                        <div class="text-center mt-3">
                            <h4>Petunjuk Mengikuti Uji Kompetensi</h4>
                            <a href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#syarat_popup">Lihat Petunjuk UjiKom</a>
                        </div>
                        <div class="text-center mt-3">
                            <h4>Petunjuk SelKom</h4>
                            <a href="https://www.youtube.com/watch?v=Yt5qRfJs2m4" class="btn btn-warning" target="_blank">Lihat Petunjuk UjiKom</a>
                        </div>
                    </div>



                    <h3 class="text-center text-danger mt-5">Pendaftaran Sudah di TUTUP</h3>
                    <h4 class="fw-bold">Pendaftaran <span class="text-danger">GRATISSSS</span> Tidak dipungut Biaya........</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal syarat test ujikom -->
    <div id="syarat_popup" class="modal animate__animated animate__backInRight" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        #ALUR, JADWAL SESI TES AKADEMIK DAN WAWANCARA
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div>
                        <div class="row text-center mb-3">
                            <h5 class="mb-4">Klik Tombol dibawah ini untuk melihat Jadwal Sesi</h5>

                            <div class="col-sm-2">
                                <a href="https://drive.google.com/file/d/1vlwMQWjYxZr-VRgU3oso6LDfbU4YExMe/view?usp=sharing" class="btn btn-danger" target="_blank">TPM</a>
                            </div>
                            <div class="col-sm-2">
                                <a href="https://drive.google.com/file/d/1qqFadllxAHAAaWJU2x-k4855PrnlF4IF/view?usp=sharing" class="btn btn-warning" target="_blank">TKR</a>
                            </div>
                            <div class="col-sm-2">
                                <a href="https://drive.google.com/file/d/1rQ7TmFFo2SLidAVHGVEtrKl3CpOoL21m/view?usp=sharing" class="btn btn-success" target="_blank">TKJ</a>
                            </div>
                            <div class="col-sm-2">
                                <a href="https://drive.google.com/file/d/1gDxNNtZnn5S5XtA1y_XnnoAUYmRgD7D7/view?usp=sharing" class="btn btn-primary" target="_blank">RPL</a>
                            </div>
                            <div class="col-sm-2">
                                <a href="https://drive.google.com/file/d/1E5rx9WHBd92EYLAlwCxFfnqhTz5fTKEP/view?usp=sharing" class="btn btn-secondary" target="_blank">AKL</a>
                            </div>
                            <div class="col-sm-2">
                                <a href="https://drive.google.com/file/d/1tR9yFmYcI8jD9kTpAhCKqrcASOgbSLBs/view?usp=sharing" class="btn btn-info" target="_blank">OTKP</a>
                            </div>
                        </div>
                        <h4 class="mt-3"><span class="text-danger">NOTE :</span><br>
                            - Mohon Semua Berkas Pendaftaran dibawa <br>
                            - Khusus SKL dibawa yang ASLI
                        </h4>
                        <img src="assets/img/alur_ukom.jpg" alt="">
                    </div>



                    <h3 class="text-center text-danger mt-5">Pendaftaran Sudah di TUTUP</h3>
                    <h4 class="fw-bold">Pendaftaran <span class="text-danger">GRATISSSS</span> Tidak dipungut Biaya........</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>


    <!-- TOP NAV -->
    <div class="top-nav" id="home">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-auto">
                    <p> <i class='bx bxs-envelope'></i> smkn1kragilankabserang@gmail.com</p>
                </div>
                <div class="col-auto social-icons">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-pinterest'></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- BOTTOM NAV -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="assets/img/logo.png" alt=""> PPDB SMKN 1 <span class="dot">KRAGILAN 2022.</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#syarat">Syarat Daftar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#jadwal">Jadwal Pendaftaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#alur">Alur Pendaftaran</a>
                    </li>
                    <!-- <li class="nav-item dropdown mb-3">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Informasi Pendaftaran
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#jurusan">Kompetensi Keahlian</a></li>
                            <li><a class="dropdown-item" href="#quota">Kuota Pendaftaran</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="jml_pendaftar.php">Jumlah Pendaftar</a></li>
                            <li><a class="dropdown-item" href="pendaftar.php">Data Pendaftar</a></li>
                        </ul>
                    </li> -->
                </ul>
                <a href="ppdb_login.php" class="btn btn-brand ms-lg-3">Login</a>
                <!-- <a href="semi-daftar.php" class="btn btn-brand ms-lg-3">Login</a> -->
            </div>
        </div>
    </nav>

    <!-- SLIDER -->
    <div class="owl-carousel owl-theme hero-slider">
        <div class="slide slide1">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center text-white">
                        <h6 class="text-white text-uppercase">Selamat Datang di</h6>
                        <h1 class="display-3 my-4">PPDB SMKN 1 KRAGILAN TAHUN 2022</h1>
                        <a href="ppdb_login.php" class="btn btn-brand">Login</a>
                        <a href="https://www.youtube.com/watch?v=Yt5qRfJs2m4" class="btn btn-outline-light ms-3" target="_blank">Cara Mengikuti SelKom</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide slide2">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-10 offset-lg-1 text-white">
                        <h6 class="text-white text-uppercase">Ayo Bergabung Bersama Kami</h6>
                        <h1 class="display-3 my-4">Raih Cita - Cita <br />SUKSES di MAsa Depan</h1>
                        <a href="ppdb_login.php" class="btn btn-brand">Login</a>
                        <a href="https://www.youtube.com/watch?v=Yt5qRfJs2m4" class="btn btn-outline-light ms-3" target="_blank">Cara Mengikuti SelKom</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide slide3">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-10 offset-lg-1 text-white">
                        <h6 class="text-white text-uppercase">Terwujudnya SMK yang berkarakter,</h6>
                        <h1 class="display-3 my-4">menguasai IPTEK, <br />menghasilkan Lulusan yg unggul dan Kompetitif.</h1>
                        <a href="ppdb_login.php" class="btn btn-brand">Login</a>
                        <a href="https://www.youtube.com/watch?v=Yt5qRfJs2m4" class="btn btn-outline-light ms-3" target="_blank">Cara Mengikuti SelKom</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section>
        <img src="assets/img/prov.png" alt="">
    </section>

    <!-- JADWAL -->
    <section id="syarat">
        <div class="container">
            <div class="intro">
                <h1>SYARAT PENDAFTARAN PPDB 2022</h1>
                <p class="mx-auto">Berikut Syarat Pendaftaran PPDB SMKN 1 KRAGILAN TAHUN 2022</p>
            </div>
            <ol>
                <h5>
                    <li>Tamat SMP/MTs/Sederajat atau surat keterangan yang berpenghargaan sama dengan ijazah SMP/MTs/Ijazah Program Paket B</li>
                </h5>
                <h5>
                    <li>Fotokopi Nilai Rapor SMP/MTs/Sederajat, semester 1 s.d 5</li>
                </h5>
                <h5>
                    <li>Sertifikat/piagam/surat keterangan prestasi/tahfidz Quran/penghargaan akademik/non akademik (Asli), jika memiliki</li>
                </h5>
                <h5>
                    <li>Fotokopi Akta kelahiran dengan batas usia paling tinggi 21 (dua puluh satu) tahun pada tanggal 15 Juni 2022 dan belum menikah</li>
                </h5>
                <h5>
                    <li>Fotokopi Kartu Keluarga, KIP/PKH (jika ada)</li>
                </h5>
                <h5>
                    <li>Pas foto berwarna ukuran 3x4 sebanyak 2 lembar (background merah) </li>
                </h5>
                <h5>
                    <li>Memenuhi syarat sesuai dengan ketentuan spesifikkasi program keahlian yang dituju</li>
                </h5>
                <ol type="a">
                    <h5>
                        <li>Surat keterangan sehat jasmani dan rohani dari Dokter Pemerintah (Puskesmas)</li>
                    </h5>
                    <h5>
                        <li>Tidak bertato, tidak mengkonsumsi narkoba, tidak bertindik bagi laki-laki</li>
                    </h5>
                    <h5>
                        <li>Tidak buta warna</li>
                    </h5>
                    <h5>
                        <li>Tinggi badan untuk Kompetensi Keahlian Teknik Pemesinan minimal Laki-Laki : 160 Cm, Perempuan : 155 Cm</li>
                    </h5>
                    <h5>
                        <li>Memiliki kemampuan, kemandirian serta penampilan yang sesuai dengan kebutuhan kompetensi keahlian yang akan dipilih</li>
                    </h5>
                </ol>

            </ol>
        </div>
    </section>


    <!-- JADWAL -->
    <section id="jadwal">
        <div class="container">
            <div class="intro">
                <h1>JADWAL PENDAFTARAN PPDB 2022</h1>
                <p class="mx-auto">Berikut Jadwal Pendaftaran PPDB SMKN 1 KRAGILAN TAHUN 2022</p>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Kegiatan</th>
                        <th scope="col">Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Sosialisasi PPDB</td>
                        <td>20 Mei s.d 04 Juni 2022</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Pendaftaran PPDB</td>
                        <td>15 s.d 20 Juni 2022</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Pengumuman hasil seleksi administrasi melalui web sekolah</td>
                        <td>20 Juni 2022</td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan="7">4</th>
                        <td>Uji Kompetensi Keahlian/Tes Khusus :</td>
                        <td>21 s.d 29 Juni 2022</td>
                    </tr>
                    <tr>
                        <td>a. Teknik Pemesinan (TPM)</td>
                        <td>21 Juni 2022</td>
                    </tr>
                    <tr>
                        <td>b. Teknik Kendaraan Ringan Otomotif (TKR)</td>
                        <td>22 Juni 2022</td>
                    </tr>
                    <tr>
                        <td>c. Rekayasa Perangkat Lunak (RPL)</td>
                        <td>23 Juni 2022</td>
                    </tr>
                    <tr>
                        <td>d. Teknik Komputer dan Jaringan (TKJ)</td>
                        <td>24 Juni 2022</td>
                    </tr>
                    <tr>
                        <td>e. Otomatisasi dan Tata Kelola Perkantoran (OTKP)</td>
                        <td>27 Juni 2022</td>
                    </tr>
                    <tr>
                        <td>f. Akuntansi dan Keuangan Lembaga (AKL)</td>
                        <td>28 Juni 2022</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Verifikasi dan Rekonsiliasi Data</td>
                        <td>21 s.d 01 Juli 2022</td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Pengumuman Hasil Seleksi PPDB melalui (Web PPDB)</td>
                        <td>04 Juli 2022</td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>Registrasi/daftar ulang melengkapi administrasi bagi calon Peserta Didik Baru yang diterima</td>
                        <td>05 s.d.07 Juli 2022</td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>Awal Tahun Ajaran 2022/2023</td>
                        <td>18 Juli 2022</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- ALUR -->
    <section id="alur">
        <div class="container">
            <div class="intro">
                <h1>FLOW CHART / ALUR PENDAFTARAN</h1>
                <p class="mx-auto">Berikut Flow Chart / Alur Pendaftaran PPDB SMKN 1 KRAGILAN TAHUN 2022</p>
                <img src="assets/img/alur_ppdb.png" alt="">
            </div>
        </div>
    </section>

    <section id="jurusan">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h1>Kompetensi Keahlian</h1>
                        <p class="mx-auto">Kompetensi Keahlian yang ada di SMKN 1 Kragilan Terdiri dari 6 Kompetensi Keahlian : TPM, TKR, TKJ, RPL, AK, OTKP</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <article class="blog-post">
                        <img src="assets/img/mesin.JPG" alt="">
                        <a href="#" class="tag">Teknik Pemesinan (TPM)</a>
                        <div class="content">
                            <h5>Teknik Pemesinan (TPM)</h5>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post">
                        <img src="assets/img/oto.jpg" alt="">
                        <a href="#" class="tag">Teknik Kendaraan Ringan (TKR)</a>
                        <div class="content">
                            <h5>Teknik Kendaraan Ringan (TKR)</h5>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post">
                        <img src="assets/img/tkj.jfif" alt="">
                        <a href="#" class="tag">Teknik Komputer dan Jaringan (TKJ)</a>
                        <div class="content">
                            <h5>Teknik Komputer dan Jaringan (TKJ)</h5>
                        </div>
                    </article>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <article class="blog-post">
                        <img src="assets/img/rpl.jpg" alt="">
                        <a href="#" class="tag">Rekayasa Perangkat Lunak (RPL)</a>
                        <div class="content">
                            <h5>Rekayasa Perangkat Lunak (RPL)</h5>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post">
                        <img src="assets/img/akuntansi.jpg" alt="">
                        <a href="#" class="tag">Akuntansi Keuangan Lembaga (AKL)</a>
                        <div class="content">
                            <h5>Akuntansi Keuangan Lembaga (AKL)</h5>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post">
                        <img src="assets/img/otkp.jfif" alt="">
                        <a href="#" class="tag">Otomatisasi dan Tata Kelola Perkantoran (OTKP)</a>
                        <div class="content">
                            <h5>Otomatisasi dan Tata Kelola Perkantoran (OTKP)</h5>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- QUOTA -->
    <section id="quota">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h1>KUOTA KOMPETENSI KEAHLIAN</h1>
                        <p class="mx-auto">Quota Pendaftaran Penerimaan Peserta Didik Baru (PPDB) Tahun 2022</p>
                        <H1>KUOTA PPDB SMKN 1 KRAGILAN TAHUN 2022 : 504 siswa</H1>
                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Kompetensi Keahlian</th>
                                <th scope="col" class="text-center">Jumlah Rombel</th>
                                <th scope="col" class="text-center">Siswa Per Rombel</th>
                                <th scope="col" class="text-center">Kuota Kompetensi Keahlian</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Teknik Pemesinan (TPM)</td>
                                <td class="text-center">4</td>
                                <td class="text-center">36</td>
                                <td class="text-center">144</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Teknik Kendaraan Ringan (TKR)</td>
                                <td class="text-center">2</td>
                                <td class="text-center">36</td>
                                <td class="text-center">72</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Teknik Komputer dan Jaringan (TKJ)</td>
                                <td class="text-center">2</td>
                                <td class="text-center">36</td>
                                <td class="text-center">72</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Rekayasa Perangkat Lunak (RPL)</td>
                                <td class="text-center">2</td>
                                <td class="text-center">36</td>
                                <td class="text-center">72</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Akuntansi Keuangan Lembaga (AKL)</td>
                                <td class="text-center">2</td>
                                <td class="text-center">36</td>
                                <td class="text-center">72</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Otomatisasi dan Tata Kelola Perkantoran (OTKP)</td>
                                <td class="text-center">2</td>
                                <td class="text-center">36</td>
                                <td class="text-center">72</td>
                            </tr>
                            <tr>
                                <td colspan="4" class="table-active fw-bold text-center">Jumlah</td>
                                <td class="table-active fw-bold text-center">504</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <footer>
            <div class="footer-top text-center mt-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-12 text-center">
                            <h4 class="navbar-brand">SMKN 1 KRAGILAN <span class="dot"> TAHUN 2022.</span></h4>
                            <p>Jl. Raya Serang - Jakarta KM. 13 Perum. Graha cisait Kec. Kragilan 42184 Serang - Banten</p>
                            <div class="col-auto social-icons">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3966.832440357839!2d106.2609113147688!3d-6.153190495545025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1654394891019!5m2!1sid!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom text-center">
                <!-- <article>
                    <?php
                    //include("counter.php");
                    //echo "<p style='color:red; font-weight:enchant_broker_list_dicts(broker)'> Jumlah Pengunjung Web PPDB SMKN 1 Kragilan: <h1 style='color:red'>$kunjungan[0]</h1> Pengunjung</p>";
                    ?>
                </article> -->
                <p class="mb-0">Copyright@2022. Team IT SMKN 1 Kragilan, Support Theme by <a href="https://www.youtube.com/results?search_query=sa7man" style="color:#fff"> SA7MAN</a></p>
            </div>
        </footer>
        <script type="text/javascript" src="assets/js/main.js"></script>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/app.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#modal_popup').modal('show');
            });
        </script>






        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API = Tawk_API || {},
                Tawk_LoadStart = new Date();
            (function() {
                var s1 = document.createElement("script"),
                    s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = 'https://embed.tawk.to/5ec31e368ee2956d73a26427/default';
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script>
        <!--End of Tawk.to Script-->



</body>

</html>