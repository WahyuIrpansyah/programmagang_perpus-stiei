<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Data Pengunjung </h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home') ?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Pengunjung</li>
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
                        Data Pengunjung
                        <a href="<?= base_url('pengunjung/cetak') ?>" class="btn btn-sm btn-info mr-1 float-right"><i class="fas fa-print">Cetak Data</i></a>
                        <a href="<?= base_url('pengunjung') ?>" class="btn btn-sm btn-info mr-1 float-right"><i class="fas fa-plus"></i> Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" id="mytabel">
                            <thead>
                                <tr>
                                    <th>Bulan</th>
                                    <th>Minggu</th>
                                    <th>Jenis Pengunjung</th>
                                    <th>Jumlah Pengunjung</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $id_pengunjung;
                                foreach ($pengunjung as $a) {
                                ?>
                                    <tr>
                                        <td><?= $a->bulan ?></td>
                                        <td><?= $a->minggu ?></td>
                                        <td><?= $a->jenis_pengunjung ?></td>
                                        <td><?= $a->jumlah_pengunjung ?></td>
                                        <td>
                                            <a href="<?= base_url('laporanpengunjung/ubah/' . $a->id_pengunjung) ?>" class="btn btn-sm btn-info"><i class="fas fa-edit"></i> Ubah</a>
                                            <a href="<?= base_url('laporanpengunjung/hapus/' . $a->id_pengunjung) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Ingin hapus data ini?')"><i class="fas fa-trash"></i> Hapus</a>
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