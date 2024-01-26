<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Data Denda </h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home') ?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('denda') ?>" class="breadcrumb-link">Denda</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Denda</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        Data Denda
                        <a href="<?= base_url('denda/tambah') ?>" class="btn btn-sm btn-success float-right"><i class="fas fa-plus">Tambah Data</i>
                        </a>
                        <a href="<?= base_url('denda/cetak') ?>" class="btn btn-sm btn-info mr-1 float-right"><i class="fas fa-print">Cetak Data</i></a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" id="mytabel">
                            <thead>
                                <tr>
                                    <th>Bulan</th>
                                    <th>Minggu</th>
                                    <th>Jumlah Denda</th>
                                    <th>Total Denda</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $bulan;
                                foreach ($denda as $a) {
                                ?>
                                    <tr>
                                        <td><?= $a->bulan ?></td>
                                        <td><?= $a->minggu ?></td>
                                        <td><?= $a->jumlah_denda ?></td>
                                        <td><?= $a->total_denda ?></td>
                                        <td>
                                            <a href="<?= base_url('denda/ubah/' . $a->bulan) ?>" class="btn btn-sm btn-info"><i class="fas fa-edit"></i> Ubah</a>
                                            <a href="<?= base_url('denda/hapus/' . $a->bulan) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Ingin hapus data ini?')"><i class="fas fa-trash"></i> Hapus</a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>