<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body onload="window.print()">

    <!-- Begin Page Content -->
    <div class="jumbotron" style="background-color: white;">

        <h1 class=" mb-4 text-gray-800" style="text-align: center;">APOTEK DI BANYUMAS</h1>
        <h4 class=" text-gray-800" style="text-align: center;">Jl. Raya Banyumas-Banjarnegara No.1</h4>
        <h4 class=" text-gray-800" style="text-align: center;">Telepon : 082121227448</h4>
        <hr class="my-4" style="height: 5%;">

        <p class="mb-4 text-gray-800" style="text-align: center;">Laporan Obat</p>
        <p class="mb-4 text-gray-800" style="text-align: center;"><?= $subtitle; ?></p>

        <table class="table table-bordered">
            <thead style="text-align: center;">
                <tr>
                    <th>No</th>
                    <th>Kode Obat</th>
                    <th>Nama Obat</th>
                    <th>Dosis</th>
                    <th>Jenis</th>
                    <th>Stok</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody style="text-align: center;">
                <?php $no = 1;
                foreach ($datafilter as $row) : ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row->kode_obat ?></td>
                        <td><?= $row->nama ?></td>
                        <td><?= $row->dosis ?></td>
                        <td><?= $row->jenis ?></td>
                        <td><?= $row->stok ?></td>
                        <td><?= $row->tanggal ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

    </div>
    <!-- /.container-fluid -->

</body>

</html>