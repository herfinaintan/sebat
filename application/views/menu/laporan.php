<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">

            <div class="card mb-4">
                <div class="card-header">
                    Laporan Obat Berdasarkan Tanggal
                </div>
                <div class="card-body">
                    <form action="<?= base_url(); ?>Menu/filter" method="post" target='_blank'>
                        <input type="hidden" name="nilaifilter" value="1">
                        <div class="form-group">
                            <label for="periode">Tanggal Awal</label>
                            <input class="text-muted" type="date" name="tanggalawal" required>
                        </div>
                        <div class="form-group">
                            <label for="periode">Tanggal Akhir</label>
                            <input class="text-muted" type="date" name="tanggalakhir" required>
                        </div>

                        <button type="submit" name="" class="btn btn-primary float-right">Print</button>
                    </form>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header">
                    Laporan Obat Berdasarkan Bulan
                </div>
                <div class="card-body">
                    <form action="<?= base_url(); ?>Menu/filter" method="post" target='_blank'>
                        <input type="hidden" name="nilaifilter" value="2">
                        <div class="form-group">
                            <label for="periode">Pilih Tahun</label>
                            <select class="text-muted" name="tahun1" id="" required>

                                <?php foreach ($tahun as $row) : ?>
                                    <option value="<?= $row->tahun ?>"><?= $row->tahun ?></option>
                                <?php endforeach ?>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="periode">Bulan Awal</label>
                            <select class="text-muted" name="bulanawal" id="" required>
                                <option value="1">Januari</option>
                                <option value="2">Februari</option>
                                <option value="3">Maret</option>
                                <option value="4">April</option>
                                <option value="5">Mei</option>
                                <option value="6">Juni</option>
                                <option value="7">Juli</option>
                                <option value="8">Agustus</option>
                                <option value="9">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="periode">Bulan Akhir</label>
                            <select class="text-muted" name="bulanakhir" id="" required>
                                <option value="1">Januari</option>
                                <option value="2">Februari</option>
                                <option value="3">Maret</option>
                                <option value="4">April</option>
                                <option value="5">Mei</option>
                                <option value="6">Juni</option>
                                <option value="7">Juli</option>
                                <option value="8">Agustus</option>
                                <option value="9">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                            </select>
                        </div>

                        <button type="submit" name="" class="btn btn-primary float-right">Print</button>
                    </form>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header">
                    Laporan Obat Berdasarkan Tahun
                </div>
                <div class="card-body">
                    <form action="<?= base_url(); ?>Menu/filter" method="post" target='_blank'>
                        <input type="hidden" name="nilaifilter" value="3">
                        <div class="form-group">
                            <label for="periode">Pilih Tahun</label>
                            <select class="text-muted" name="tahun2" id="" required>

                                <?php foreach ($tahun as $row) : ?>
                                    <option value="<?= $row->tahun ?>"><?= $row->tahun ?></option>
                                <?php endforeach ?>

                            </select>
                        </div>

                        <button type="submit" name="" class="btn btn-primary float-right">Print</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->