<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Edit Data Siswa</title>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .card h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        .form-control {
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .btn {
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-6 m-auto">
                <div class="card text-center">
                    <div class="card-body">
                        <h1>Edit Data Siswa</h1>
                        <?php
                        session_start();

                        if (isset($_GET['edit'])) {
                            $key = $_GET['edit'];
                            $siswa = $_SESSION['dataSiswa'][$key];
                        }

                        if (isset($_POST["update"])) {
                            if ($_POST['nama'] != "" && $_POST['nis'] != "" && $_POST['rayon'] != "") {
                                $_SESSION['dataSiswa'][$key]['nama'] = $_POST['nama'];
                                $_SESSION['dataSiswa'][$key]['nis'] = $_POST['nis'];
                                $_SESSION['dataSiswa'][$key]['rayon'] = $_POST['rayon'];
                                header('location: index.php');
                                exit;
                            } else {
                                echo "Data tidak boleh kosong <br>";
                            }
                        }
                        ?>
                        <form action="" method="POST" class="row d-flex align-items-center">
                            <label for="nama">Nama Siswa</label>
                            <input type="text" id="nama" placeholder="masukan nama siswa" name="nama" value="<?php echo $siswa['nama']; ?>" class="form-control">

                            <label for="nis">NIS Siswa</label>
                            <input type="number" id="nis" placeholder="masukan nis siswa" name="nis" value="<?php echo $siswa['nis']; ?>" class="form-control">

                            <label for="rayon" class="form-label">Pilih Rayon</label>
                            <select name="rayon" id="rayon" class="form-select" required>
                                <option value="default" disabled>Pilih Rayonmu</option>
                                <optgroup label="Tajur">
                                    <option value="Tajur 1" <?php echo ($siswa['rayon'] == 'Tajur 1') ? 'selected' : ''; ?>>Tajur 1</option>
                                    <option value="Tajur 2" <?php echo ($siswa['rayon'] == 'Tajur 2') ? 'selected' : ''; ?>>Tajur 2</option>
                                    <option value="Tajur 3" <?php echo ($siswa['rayon'] == 'Tajur 3') ? 'selected' : ''; ?>>Tajur 3</option>
                                    <option value="Tajur 4" <?php echo ($siswa['rayon'] == 'Tajur 4') ? 'selected' : ''; ?>>Tajur 4</option>
                                    <option value="Tajur 5" <?php echo ($siswa['rayon'] == 'Tajur 5') ? 'selected' : ''; ?>>Tajur 5</option>
                                    <option value="Tajur 6" <?php echo ($siswa['rayon'] == 'Tajur 6') ? 'selected' : ''; ?>>Tajur 6</option>
                                </optgroup>
                                <optgroup label="Sukasari">
                                    <option value="Sukasari 1" <?php echo ($siswa['rayon'] == 'Sukasari 1') ? 'selected' : ''; ?>>Sukasari 1</option>
                                    <option value="Sukasari 2" <?php echo ($siswa['rayon'] == 'Sukasari 2') ? 'selected' : ''; ?>>Sukasari 2</option>
                                </optgroup>
                                <optgroup label="Cibedug">
                                    <option value="Cibedug 1" <?php echo ($siswa['rayon'] == 'Cibedug 1') ? 'selected' : ''; ?>>Cibedug 1</option>
                                    <option value="Cibedug 2" <?php echo ($siswa['rayon'] == 'Cibedug 2') ? 'selected' : ''; ?>>Cibedug 2</option>
                                    <option value="Cibedug 3" <?php echo ($siswa['rayon'] == 'Cibedug 3') ? 'selected' : ''; ?>>Cibedug 3</option>
                                    <option value="Cibedug 4" <?php echo ($siswa['rayon'] == 'Cibedug 4') ? 'selected' : ''; ?>>Cibedug 4</option>
                                </optgroup>
                                <optgroup label="Cicurug">
                                    <option value="Cicurug 1" <?php echo ($siswa['rayon'] == 'Cicurug 1') ? 'selected' : ''; ?>>Cicurug 1</option>
                                    <option value="Cicurug 2" <?php echo ($siswa['rayon'] == 'Cicurug 2') ? 'selected' : ''; ?>>Cicurug 2</option>
                                    <option value="Cicurug 3" <?php echo ($siswa['rayon'] == 'Cicurug 3') ? 'selected' : ''; ?>>Cicurug 3</option>
                                    <option value="Cicurug 4" <?php echo ($siswa['rayon'] == 'Cicurug 4') ? 'selected' : ''; ?>>Cicurug 4</option>
                                    <option value="Cicurug 5" <?php echo ($siswa['rayon'] == 'Cicurug 5') ? 'selected' : ''; ?>>Cicurug 5</option>
                                    <option value="Cicurug 6" <?php echo ($siswa['rayon'] == 'Cicurug 6') ? 'selected' : ''; ?>>Cicurug 6</option>
                                    <option value="Cicurug 7" <?php echo ($siswa['rayon'] == 'Cicurug 7') ? 'selected' : ''; ?>>Cicurug 7</option>
                                    <option value="Cicurug 8" <?php echo ($siswa['rayon'] == 'Cicurug 8') ? 'selected' : ''; ?>>Cicurug 8</option>
                                    <option value="Cicurug 9" <?php echo ($siswa['rayon'] == 'Cicurug 9') ? 'selected' : ''; ?>>Cicurug 9</option>
                                    <option value="Cicurug 10" <?php echo ($siswa['rayon'] == 'Cicurug 10') ? 'selected' : ''; ?>>Cicurug 10</option>
                                </optgroup>
                                <optgroup label="Ciawi">
                                    <option value="Ciawi 1" <?php echo ($siswa['rayon'] == 'Ciawi 1') ? 'selected' : ''; ?>>Ciawi 1</option>
                                    <option value="Ciawi 2" <?php echo ($siswa['rayon'] == 'Ciawi 2') ? 'selected' : ''; ?>>Ciawi 2</option>
                                    <option value="Ciawi 3" <?php echo ($siswa['rayon'] == 'Ciawi 3') ? 'selected' : ''; ?>>Ciawi 3</option>
                                    <option value="Ciawi 4" <?php echo ($siswa['rayon'] == 'Ciawi 4') ? 'selected' : ''; ?>>Ciawi 4</option>
                                    <option value="Ciawi 5" <?php echo ($siswa['rayon'] == 'Ciawi 5') ? 'selected' : ''; ?>>Ciawi 5</option>
                                    <option value="Ciawi 6" <?php echo ($siswa['rayon'] == 'Ciawi 6') ? 'selected' : ''; ?>>Ciawi 6</option>
                                </optgroup>
                                <optgroup label="Cisarua">
                                    <option value="Cisarua 1" <?php echo ($siswa['rayon'] == 'Cisarua 1') ? 'selected' : ''; ?>>Cisarua 1</option>
                                    <option value="Cisarua 2" <?php echo ($siswa['rayon'] == 'Cisarua 2') ? 'selected' : ''; ?>>Cisarua 2</option>
                                    <option value="Cisarua 3" <?php echo ($siswa['rayon'] == 'Cisarua 3') ? 'selected' : ''; ?>>Cisarua 3</option>
                                    <option value="Cisarua 4" <?php echo ($siswa['rayon'] == 'Cisarua 4') ? 'selected' : ''; ?>>Cisarua 4</option>
                                    <option value="Cisarua 5" <?php echo ($siswa['rayon'] == 'Cisarua 5') ? 'selected' : ''; ?>>Cisarua 5</option>
                                    <option value="Cisarua 6" <?php echo ($siswa['rayon'] == 'Cisarua 6') ? 'selected' : ''; ?>>Cisarua 6</option>
                                    <option value="Cisarua 7" <?php echo ($siswa['rayon'] == 'Cisarua 7') ? 'selected' : ''; ?>>Cisarua 7</option>
                                </optgroup>
                                <optgroup label="Wikrama">
                                    <option value="Wikrama 1" <?php echo ($siswa['rayon'] == 'Wikrama 1') ? 'selected' : ''; ?>>Wikrama 1</option>
                                    <option value="Wikrama 2" <?php echo ($siswa['rayon'] == 'Wikrama 2') ? 'selected' : ''; ?>>Wikrama 2</option>
                                    <option value="Wikrama 3" <?php echo ($siswa['rayon'] == 'Wikrama 3') ? 'selected' : ''; ?>>Wikrama 3</option>
                                    <option value="Wikrama 4" <?php echo ($siswa['rayon'] == 'Wikrama 4') ? 'selected' : ''; ?>>Wikrama 4</option>
                                    <option value="Wikrama 5" <?php echo ($siswa['rayon'] == 'Wikrama 5') ? 'selected' : ''; ?>>Wikrama 5</option>
    
                                </optgroup>
                            </select>
                            <div class="col-12 mt-3">
                                <button type="submit" name="update" class="btn btn-primary w-50"><i class='bx bxs-save'></i> SIMPAN</button>
                            </div>
                        </form>
                        <div class="mt-3">
                            <a href="index.php" class="btn btn-secondary w-50"><i class='bx bx-arrow-back'></i> BATAL</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
