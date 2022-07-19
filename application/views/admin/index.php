<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-12 col-sm-6 col-xxl d-flex">
            <div class="card flex-fill">
                <div class="card-body py-4">
                    <div class="media">
                        <div class="media-body">
                            <h3 class="mb-2">Jumlah Admin</h3>
                            <p class="mb-2">Apotek Banyumas</p>
                            <div class="mb-0">
                                <span class="badge badge-success mr-2"> <i class="mdi mdi-arrow-bottom-right"></i><?= $jumlah_user - 1; ?> Orang</span>
                            </div>
                        </div>
                        <div class="d-inline-block ml-3">
                            <div class="h1 stat">
                                <i class="fas fa-user text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xxl d-flex">
            <div class="card flex-fill">
                <div class="card-body py-4">
                    <div class="media">
                        <div class="media-body">
                            <h3 class="mb-2">Jumlah Obat</h3>
                            <p class="mb-2">Apotek Banyumas</p>
                            <div class="mb-0">
                                <span class="badge badge-success mr-2"> <i class="mdi mdi-arrow-bottom-right"></i><?= $total_rows; ?> Obat</span>
                            </div>
                        </div>
                        <div class="d-inline-block ml-3">
                            <div class="h1 stat">
                                <i class="fas fa-capsules text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->