<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row mt-3">
        <div class="col-md-3">

            <div class="card">
                <div class="card-header">
                    <h5 class="text-gray-800"><?= $obat['nama']; ?></h5>
                </div>
                <div class="card-group">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text text-gray-800">Kode</p>
                            <p class="card-text text-gray-800">Dosis</p>
                            <p class="card-text text-gray-800">Jenis</p>
                            <p class="card-text text-gray-800">Stok</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text"><?= $obat['kode_obat']; ?></p>
                            <p class="card-text"><?= $obat['dosis']; ?></p>
                            <p class="card-text"><?= $obat['jenis']; ?></p>
                            <p class="card-text"><?= $obat['stok']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="<?= base_url(); ?>user" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>

</div>
</div>