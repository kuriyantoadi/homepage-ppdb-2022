<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/img/logo-ico.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>Daftar PPDB SMKN 1 KRAGILAN - TAHUN 2022</title>

    <style>
        body {
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(assets/img/bg-daftar.png);
            background-size: cover;
            font-family: 'Kdam Thmor Pro', sans-serif;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-primary shadow sticky-top">
        <div class="container">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white fw-bold" href="#">PPDB 2022 - SMKN 1 KRAGILAN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold text-warning" href="index.php"><i class="bi bi-bounding-box-circles"></i> Dashboard</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <?php
    $tpm = "
            <div style='text-align:center!important;'>
            <img src='assets/img/jurusan/tpm.png' alt='' width='200px' height='200px' class='mt-5 text-center'>
            <h2 class='card-title mt-3'>Kompetensi Keahlian Teknik Pemesinan (TPM)</h2>
            <a href='https://smkn1kragilan.sch.id/0/ppdb-v3/daftar/tpm/' class='btn btn-primary col-sm-3 btn-lg'><i class='bi bi-arrow-up-right-square'></i> &nbsp&nbsp Lanjut Login TPM</a>
            </div>
            ";

    $tkr = "
        <div style='text-align:center!important;'>
        <img src='assets/img/jurusan/tkr.png' alt='' width='200px' height='200px' class='mt-5'>
        <h2 class='card-title mt-3'>Kompetensi Keahlian Teknik Kendaraan Ringan (TKR)</h2>
        <a href='https://smkn1kragilan.sch.id/0/ppdb-v3/daftar/tkr/' class='btn btn-warning col-sm-3 btn-lg'><i class='bi bi-arrow-up-right-square'></i> &nbsp&nbsp Lanjut Login TKR</a>
        
        ";

    $tkj = "
    <div style='text-align:center!important;'>
    <img src='assets/img/jurusan/tkj-1.png' alt='' width='200px' height='200px' class='mt-5'>
    <h2 class='card-title mt-3'>Kompetensi Keahlian Teknik Komputer dan Jaringan (TKJ)</h2>
    <a href='https://smkn1kragilan.sch.id/0/ppdb-v3/daftar/tkj/' class='btn btn-success col-sm-3 btn-lg'><i class='bi bi-arrow-up-right-square'></i> &nbsp&nbsp Lanjut Login TKJ</a>
        
        ";

    $rpl = "
    <div style='text-align:center!important;'>
    <img src='assets/img/jurusan/rpl.png' alt='' width='200px' height='200px' class='mt-5'>
    <h2 class='card-title mt-3'>Kompetensi Keahlian Rekayasa Perangkat Lunak (RPL)</h2>
    <a href='https://smkn1kragilan.sch.id/0/ppdb-v3/daftar/rpl/' class='btn btn-info col-sm-3 btn-lg'><i class='bi bi-arrow-up-right-square'></i> &nbsp&nbsp Lanjut Login RPL</a>
    
    ";

    $otkp = "
    <div style='text-align:center!important;'>
    <img src='assets/img/jurusan/otkp.png' alt='' width='200px' height='200px' class='mt-5'>
    <h2 class='card-title mt-3'>Kompetensi Keahlian Otomatisasi dan Tata Kelola Perkantoran (OTKP)</h2>
    <a href='https://smkn1kragilan.sch.id/0/ppdb-v3/daftar/otkp/' class='btn btn-secondary col-sm-3 btn-lg'><i class='bi bi-arrow-up-right-square'></i> &nbsp&nbsp Lanjut Login OTKP</a>
    
    ";

    $akl = "
    <div style='text-align:center!important;'>
    <img src='assets/img/jurusan/akl.png' alt='' width='200px' height='200px' class='mt-5'>
    <h2 class='card-title mt-3'>Jurusan Akuntansi Keuangan Lembaga (AKL)</h2>
    <a href='https://smkn1kragilan.sch.id/0/ppdb-v3/daftar/akl/' class='btn btn-danger col-sm-3 btn-lg'><i class='bi bi-arrow-up-right-square'></i> &nbsp&nbsp Lanjut Login AKL</a>
        
";

    ?>
    <div class="container text-center">
        <div class="card mt-3">
            <div class="row g-0">
                <div class="col-md-2 bg-info">
                </div>
                <div class="col-md-10">
                    <div class="card-body shadow bg-body rounded">
                        <h3 class="text-center">Pilih Kompetensi Keahlian Login - PPDB SMKN 1 Kragilan Tahun 2022</h3>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="mt-5">
            <select class="form-select col-md-6 text-center" id="jurusan" onchange="proses()">
                <option value="">---- Pilih Kompetensi Keahlian ----</option>
                <option value="<?php echo $tpm ?>">Kompetensi Keahlian Teknik Pemesinan (TPM)</option>
                <option value="<?php echo $tkr ?>">Kompetensi Keahlian Teknik Kendaraan Ringan (TKR)</option>
                <option value="<?php echo $tkj ?>">Kompetensi Keahlian Teknik Komputer dan Jaringan (TKJ)</option>
                <option value="<?php echo $rpl ?>">Kompetensi Keahlian Rekayasa Perangkat Lunak (RPL)</option>
                <option value="<?php echo $otkp ?>">Kompetensi Keahlian Otomatisasi dan Tata Kelola Perkantoran (OTKP)</option>
                <option value="<?php echo $akl ?>">Kompetensi Keahlian Akuntansi Keuangan Lembaga (AKL)</option>
            </select>
        </h2>

        <div class="card p-3 shadow mb-3" style="background-color: #87c6c6;">
            <span id="pil_jurusan"></span>
        </div>



    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script>
        function proses() {
            var harga = document.getElementById("jurusan").value;
            document.getElementById("pil_jurusan").innerHTML = harga;
        }
    </script>

</body>

</html>