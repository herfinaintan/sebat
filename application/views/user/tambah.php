<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row mt-3 mb-4">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Obat
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="kode_obat">Kode Obat</label>
                            <input type="text" class="form-control" id="kode_obat" name="kode_obat">
                            <small class="form-text text-danger"><?= form_error('kode_obat'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Obat</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="dosis">Dosis</label>
                            <input type="text" class="form-control" id="dosis" name="dosis">
                            <small class="form-text text-danger"><?= form_error('dosis'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis</label>
                            <input type="text" class="form-control" id="jenis" name="jenis">
                            <small class="form-text text-danger"><?= form_error('jenis'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="text" class="form-control" id="stok" name="stok">
                            <small class="form-text text-danger"><?= form_error('stok'); ?></small>
                        </div>

                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->