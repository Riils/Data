<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>DATA SISWA</title>
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

        .data-display {
            margin-top: 20px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .data-display th,
        .data-display td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .data-display th {
            background-color: #f2f2f2;
        }

        .data-display .btn {
            margin-left: 10px;
        }

        @media print {
            body * {
                visibility: hidden;
            }

            .data-display,
            .data-display * {
                visibility: visible;
            }

            .data-display {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
            }
        }
    </style>
    <script>
        function printData() {
            window.print();
        }
    </script>
</head>

<body>
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-6 m-auto">
                <div class="card text-center">
                    <div class="card-body">
                        <h1>DATA SISWA</h1>
                        <?php
                        session_start();

                        if (!isset($_SESSION['dataSiswa'])) {
                            $_SESSION['dataSiswa'] = array();
                        }

                        if (isset($_POST["kirim"])) {
                            if ($_POST['nama'] != "" && $_POST['nis'] != "" && $_POST['rayon'] != "") {
                                $siswa = array(
                                    "nama" => $_POST['nama'],
                                    "nis" => $_POST['nis'],
                                    "rayon" => $_POST['rayon']
                                );
                                array_push($_SESSION['dataSiswa'], $siswa);
                                header('location: ' . $_SERVER['PHP_SELF']);
                                exit;
                            } else {
                                echo "Data tidak boleh kosong <br>";
                            }
                        }

                        if (isset($_GET['reset'])) {
                            $_SESSION['dataSiswa'] = array();
                            header('location: ' . $_SERVER['PHP_SELF']);
                            exit;
                        }

                        if (isset($_GET['hapus'])) {
                            $key = $_GET['hapus'];
                            unset($_SESSION['dataSiswa'][$key]);
                            $_SESSION['dataSiswa'] = array_values($_SESSION['dataSiswa']);
                            header('location: ' . $_SERVER['PHP_SELF']);
                            exit;
                        }
                        ?>
                        <form action="" method="POST" class="row d-flex align-items-center">
                            <label for="nama">Nama Siswa</label>
                            <input type="text" id="nama" placeholder="masukan nama siswa" name="nama" class="form-control">

                            <label for="nis">NIS Siswa</label>
                            <input type="number" id="nis" placeholder="masukan nis siswa" name="nis" class="form-control">

                            <label for="rayon" class="form-label">Pilih Rayon</label>
                            <select name="rayon" id="rayon" class="form-select" required>
                                <option value="default" disabled selected>Pilih Rayonmu</option>
                                <optgroup label="Tajur">
                                    <option value="Tajur 1">Tajur 1</option>
                                    <option value="Tajur 2">Tajur 2</option>
                                    <option value="Tajur 3">Tajur 3</option>
                                    <option value="Tajur 4">Tajur 4</option>
                                    <option value="Tajur 5">Tajur 5</option>
                                    <option value="Tajur 6">Tajur 6</option>
                                </optgroup>
                                <optgroup label="Sukasari">
                                    <option value="Sukasari 1">Sukasari 1</option>
                                    <option value="Sukasari 2">Sukasari 2</option>
                                </optgroup>
                                <optgroup label="Cibedug">
                                    <option value="Cibedug 1">Cibedug 1</option>
                                    <option value="Cibedug 2">Cibedug 2</option>
                                    <option value="Cibedug 3">Cibedug 3</option>
                                    <option value="Cibedug 4">Cibedug 4</option>
                                </optgroup>
                                <optgroup label="Cicurug">
                                    <option value="Cicurug 1">Cicurug 1</option>
                                    <option value="Cicurug 2">Cicurug 2</option>
                                    <option value="Cicurug 3">Cicurug 3</option>
                                    <option value="Cicurug 4">Cicurug 4</option>
                                    <option value="Cicurug 5">Cicurug 5</option>
                                    <option value="Cicurug 6">Cicurug 6</option>
                                    <option value="Cicurug 7">Cicurug 7</option>
                                    <option value="Cicurug 8">Cicurug 8</option>
                                    <option value="Cicurug 9">Cicurug 9</option>
                                    <option value="Cicurug 10">Cicurug 10</option>
                                </optgroup>
                                <optgroup label="Ciawi">
                                    <option value="Ciawi 1">Ciawi 1</option>
                                    <option value="Ciawi 2">Ciawi 2</option>
                                    <option value="Ciawi 3">Ciawi 3</option>
                                    <option value="Ciawi 4">Ciawi 4</option>
                                    <option value="Ciawi 5">Ciawi 5</option>
                                    <option value="Ciawi 6">Ciawi 6</option>
                                </optgroup>
                                <optgroup label="Wikrama">
                                    <option value="Wikrama 1">Wikrama 1</option>
                                    <option value="Wikrama 2">Wikrama 2</option>
                                    <option value="Wikrama 3">Wikrama 3</option>
                                    <option value="Wikrama 4">Wikrama 4</option>
                                    <option value="Wikrama 5">Wikrama 5</option>
                                </optgroup>
                                <optgroup label="Cisarua">
                                    <option value="Cisarua 1">Cisarua 1</option>
                                    <option value="Cisarua 2">Cisarua 2</option>
                                    <option value="Cisarua 3">Cisarua 3</option>
                                    <option value="Cisarua 4">Cisarua 4</option>
                                    <option value="Cisarua 5">Cisarua 5</option>
                                    <option value="Cisarua 6">Cisarua 6</option>
                                    <option value="Cisarua 7">Cisarua 7</option>
                                </optgroup>
                            </select>

                            <div class="col mt-3">
                                <button class="btn btn-primary" type="submit" name="kirim">
                                    <i class='bx bx-plus-circle'></i> KIRIM
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12">
                <div class="data-display">
                    <h2>Data Siswa</h2>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Siswa</th>
                                <th>NIS Siswa</th>
                                <th>Rayon</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($_SESSION['dataSiswa'] as $key => $value) {
                                echo "<tr>";
                                echo "<td>" . $value['nama'] . "</td>";
                                echo "<td>" . $value['nis'] . "</td>";
                                echo "<td>" . $value['rayon'] . "</td>";
                                echo "<td>";
                                echo "<a href='edit.php?edit=" . $key . "' class='btn btn-warning btn-sm'><i class='bx bx-edit'></i> Edit</a> ";
                                echo "<a href='?hapus=" . $key . "' class='btn btn-danger btn-sm'><i class='bx bx-trash'></i> Hapus</a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                    <div class="mt-3">
                        <a href="?reset" class="btn btn-danger">Reset Data</a>
                        <button class="btn btn-success" onclick="printData()">Print</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
