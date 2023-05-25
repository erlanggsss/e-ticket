<?php
require "function.php";
$data = [
    'maskapai' => $_POST["maskapai"],
    'bandara_asal' => $_POST["bandara_asal"],
    'bandara_tujuan' => $_POST["bandara_tujuan"],
    'harga_tiket' => $_POST["harga_tiket"]
];

$result = insert($data);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Flight.com</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body class="bg-tiket">
    <!-- Nav -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-head bg-gradient shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Flight.com</a>
        </div>
    </nav>
    

    <!-- Form -->
    <div class="tiket">
        <div class="container bg-light">
            <legend class="text-center my-4">Data pembelian E-Tiket</legend>
            <div class="table-responsive">
                <table class="table table-light my-4">
                    <p>Detail Tiket : </p>
                    <thead>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">Tanggal Pembelian</th>
                            <th scope="col">Nama Maskapai</th>
                            <th scope="col">Bandara Asal</th>
                            <th scope="col">Bandara Tujuan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"><?= rand(); ?></th>
                            <td><?= date("l, j F Y"); ?></td>
                            <td><?= $result["maskapai"]; ?></td>
                            <td><?= $result["bandara_asal"]; ?></td>
                            <td><?= $result["bandara_tujuan"]; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="harga text-center py-3">
                <h6>Harga : <?= $result["harga_tiket"]; ?></h6>
                <h6>Pajak : <?= $result["total_pajak"]; ?></h6>
                <h6 class="text-danger">Total : <?= $result["total_harga_tiket"]; ?></h6>
            </div>
            <a href="index.php" type="button" class="btn btn-primary mb-3">Kembali</a>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>