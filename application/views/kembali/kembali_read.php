<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Data Kembali </h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home') ?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Kembali</li>
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
                        Data Kembali
                        <a href="<?= base_url('kembali/cetak') ?>" class="btn btn-sm btn-info mr-1 float-right"><i class="fas fa-print">Cetak Data</i></a>
                        <a href="<?= base_url('kembali') ?>" class="btn btn-sm btn-info mr-1 float-right"><i class="fas fa-plus"></i> Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" id="mytabel">
                            <thead>
                                <tr>
                                    <th>Npm</th>
                                    <th>Nama</th>
                                    <th>Jurusan</th>
                                    <th>Id Buku</th>
                                    <th>Tanggal Pinjam</th>
                                    <th>Tanggal Kembali</th>
                                    <th>Denda</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $id_kembali;
                                foreach ($kembali as $a) {
                                ?>
                                    <tr>
                                        <td><?= $a->npm ?></td>
                                        <td><?= $a->nama ?></td>
                                        <td><?= $a->jurusan ?></td>
                                        <td><?= $a->id_buku ?></td>
                                        <td><?= $a->tanggal_pinjam ?></td>
                                        <td><?= $a->tanggal_kembali ?></td>
                                        <td><?= $a->denda ?></td>
                                        <td>
                                            <a href="<?= base_url('laporankembali/ubah/' . $a->id_kembali) ?>" class="btn btn-sm btn-info"><i class="fas fa-edit"></i> Ubah</a>
                                            <a href="<?= base_url('laporankembali/hapus/' . $a->id_kembali) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Ingin hapus data ini?')"><i class="fas fa-trash"></i> Hapus</a>
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