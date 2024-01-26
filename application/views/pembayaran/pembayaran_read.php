<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Data Pembayaran </h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home') ?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('laporanpembayaran') ?>" class="breadcrumb-link">Laporan Pembayaran</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Pembayaran</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card">
                        <div class="card-header">
                            Data Absensi
                            <a href="<?= base_url('pembayaran/cetak') ?>" class="btn btn-sm btn-info mr-1 float-right"><i class="fas fa-print">Cetak Data</i></a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered" id="mytabel">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Npm</th>
                                        <th>Nama</th>
                                        <th>Jurusan</th>
                                        <th>Semester</th>
                                        <th>Status</th>
                                        <th>Tujuan</th>
                                        <th>Total Pembayaran</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $tanggal;
                                    foreach ($pembayaran as $a) {
                                    ?>
                                        <tr>
                                            <td><?= $a->tanggal ?></td>
                                            <td><?= $a->npm ?></td>
                                            <td><?= $a->nama ?></td>
                                            <td><?= $a->jurusan ?></td>
                                            <td><?= $a->semester ?></td>
                                            <td><?= $a->status ?></td>
                                            <td><?= $a->tujuan ?></td>
                                            <td><?= $a->total_pembayaran ?></td>
                                            <td>
                                                <a href="<?= base_url('pembayaran/ubah/' . $a->npm) ?>" class="btn btn-sm btn-info"><i class="fas fa-edit"></i> Ubah</a>
                                                <a href="<?= base_url('pembayaran/hapus/' . $a->npm) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Ingin hapus data ini?')"><i class="fas fa-trash"></i> Hapus</a>
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