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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
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

    <!-- PENDAFTAR -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center mt-3">
                    <h1>DATA PENDAFTAR PPDB SMKN 1 KRAGILAN</h1>
                    <p class="mx-auto text-danger">* Silahkan Ketik Nama Siswa pada kolom Search Untuk Melakukan Pencarian</p>
                    <hr class="mb-2">
                </div>

                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Siswa</th>
                            <th>Asal Sekolah</th>
                            <th>Kompetensi Keahlian Pilihan</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        include 'hub/conn.php';
                        $no = 1;
                        $siswa = mysqli_query($conn, "SELECT * FROM tb_siswa");
                        while ($dsa = mysqli_fetch_array($siswa)) {

                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $dsa['nama_siswa'] ?></td>
                                <td><?= $dsa['asal_sekolah'] ?></td>
                                <td><?= $dsa['kompetensi_keahlian'] ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Nama Siswa</th>
                            <th>Asal Sekolah</th>
                            <th>Kompetensi Keahlian Pilihan</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>

</html>