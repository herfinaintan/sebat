<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Obat
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $obat['id']; ?>">
                        <div class="form-group">
                            <label for="kode_obat">Kode Obat</label>
                            <input type="text" class="form-control" id="kode_obat" name="kode_obat" value="<?= $obat['kode_obat']; ?>">
                            <small class="form-text text-danger"><?= form_error('kode_obat'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Obat</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $obat['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="dosis">Dosis</label>
                            <input type="text" class="form-control" id="dosis" name="dosis" value="<?= $obat['dosis']; ?>">
                            <small class="form-text text-danger"><?= form_error('dosis'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis</label>
                            <input type="text" class="form-control" id="jenis" name="jenis" value="<?= $obat['jenis']; ?>">
                            <small class="form-text text-danger"><?= form_error('jenis'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="text" class="form-control" id="stok" name="stok" value="<?= $obat['stok']; ?>">
                            <small class="form-text text-danger"><?= form_error('stok'); ?></small>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>