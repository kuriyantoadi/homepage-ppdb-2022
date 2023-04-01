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
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="assets/img/logo-ico.ico">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>PPDB SMKN 1 KRAGILAN - 2022</title>



</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">


    <!-- BOTTOM NAV -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="assets/img/logo.png" alt=""> PPDB SMKN 1 <span class="dot">KRAGILAN 2022.</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                </ul>
                <a href="index.php" class="btn btn-brand ms-lg-3">Dashboard</a>
            </div>
        </div>
    </nav>

    </section>
    <?php
    include 'hub/conn.php';
    $pendaftar = mysqli_query($conn, "SELECT * FROM tb_siswa");
    $jml_daftar = mysqli_num_rows($pendaftar);

    ?>

    <!-- PENDAFTAR -->
    <section id="pendaftar">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h1>JUMLAH PENDAFTAR TIAP KOMPETENSI KEAHLIAN</h1>
                        <p class="mx-auto">Jumlah Pendaftaran Penerimaan Peserta Didik Baru (PPDB) Tahun 2022</p>
                        <H1>TOTAL PENDAFTAR : <?= $jml_daftar ?> siswa</H1>
                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Kompetensi Keahlian</th>
                                <th scope="col" class="text-center">Kuota</th>
                                <th scope="col" class="text-center">Jumlah Pendaftar</th>
                            </tr>
                        </thead>
                        <?php
                        $all = 72;
                        $msn = 144;

                        $no = 1;

                        $pendaftar = mysqli_query($conn, "SELECT kompetensi_keahlian,COUNT(*) AS total_pendaftar FROM tb_siswa GROUP BY kompetensi_keahlian");
                        while ($b = mysqli_fetch_array($pendaftar)) {

                        ?>
                            <tbody>
                                <tr>
                                    <th scope="row"><?= $no++ ?></th>
                                    <td><?= $b['kompetensi_keahlian'] ?></td>
                                    <td class="text-center">
                                        <?php
                                        if ($b['kompetensi_keahlian'] == 'Teknik Pemesinan') {
                                            echo $msn;
                                        } else {
                                            echo $all;
                                        }

                                        ?>

                                    </td>
                                    <td class="text-center"><?= $b['total_pendaftar'] ?></td>
                                </tr>
                            <?php
                        }
                            ?>
                            <tr>
                                <td colspan="3" class="table-active fw-bold text-center">Total Pendaftar</td>
                                <td class="table-active fw-bold text-center"><?= $jml_daftar ?></td>
                            </tr>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>