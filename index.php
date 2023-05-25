<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Flight.com</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <!-- Nav-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-head bg-gradient shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Flight.com</a>
        </div>
    </nav>

    <!-- Form-->
    <div class="form">
        <div class="container text-head">
            <legend class="text-head mb-4">Pendaftaran E-Tiket</legend>
            <form method="POST" action="ticket.php">
                <div class="row">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama maskapai</label>
                        <select class="form-select" id="maskapai" name="maskapai" aria-label="maskapai" required>
                                <option selected disabled>Pilih Maskapai</option>
                                <?php
                                $Maskapai = ['Lion Air', 'Adam Air', 'Qatar Airways', 'Fly Emirates'];

                                sort($Maskapai);
                                foreach ($Maskapai as $mas) {
                                    echo '<option value="' . $mas . '">' . $mas . '</option>';
                                }

                                ?>
                            </select>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="asal" class="form-label">Bandara Asal :</label>
                            <select class="form-select" id="bandara_asal" name="bandara_asal" aria-label="asal" required>
                                <option selected disabled>Pilih Bandara</option>
                                <?php
                                $BandaraAsal = ['Soekarno Hatta', 'Husein Sastranegara', 'Abdul Rachman Saleh', 'Juanda'];

                                sort($BandaraAsal);
                                foreach ($BandaraAsal as $basal) {
                                    echo '<option value="' . $basal . '">' . $basal . '</option>';
                                }

                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="agama" class="form-label">Bandara Tujuan :</label>
                            <select class="form-select" id="bandara_tujuan" name="bandara_tujuan" aria-label="tujuan" required>
                                <option selected disabled>Pilih Bandara</option>
                                <?php
                                $BandaraAsal = ['Ngurah Rai', 'Hasannudin', 'Inanwatan', 'Sultan Iskandar Muda'];

                                sort($BandaraAsal);
                                foreach ($BandaraAsal as $basal) {
                                    echo '<option value="' . $basal . '">' . $basal . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Harga Tiket</label>
                    <select class="form-select" id="harga_tiket" name="harga_tiket" aria-label="harga_tiket" required>
                                <option selected disabled>Pilih Harga Tiket</option>
                                <?php
                                $Harga_tiket = ['1000000', '2000000', '3000000', '4000000'];

                                sort($Harga_tiket);
                                foreach ($Harga_tiket as $harga) {
                                    echo '<option value="' . $harga . '">' . $harga . '</option>';
                                }

                                ?>
                            </select>
                    </div>
                </div>
                <div class="mb-4 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Data yang diisi telah sesuai</label>
                </div>
                <button type="submit" name="masuk" class="btn btn-primary mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Submit
                </button>
            </form>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>