<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Data Member Baru </h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home') ?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Member Baru</li>
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
                        Data Member Baru
                        <a href="<?= base_url('member_baru/cetak') ?>" class="btn btn-sm btn-info mr-1 float-right"><i class="fas fa-print">Cetak Data</i></a>
                        <a href="<?= base_url('member_baru') ?>" class="btn btn-sm btn-info mr-1 float-right"><i class="fas fa-plus"></i> Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" id="mytabel">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Tempat / Tanggal Lahir </th>
                                    <th>Npm</th>
                                    <th>Semester</th>
                                    <th>Jurusan</th>
                                    <th>Email</th>
                                    <th>Agama</th>
                                    <th>Alamat</th>
                                    <th>No Telepon</th>
                                    <th>Foto</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $npm;
                                foreach ($member_baru as $a) {
                                    $lokasi = base_url('upload/bukti_daftar/' . $a->foto);
                                ?>
                                    <tr>
                                        <td><?= $a->nama ?></td>
                                        <td><?= $a->tempattanggal_lahir ?></td>
                                        <td><?= $a->npm ?></td>
                                        <td><?= $a->semester ?></td>
                                        <td><?= $a->jurusan ?></td>
                                        <td><?= $a->email ?></td>
                                        <td><?= $a->agama ?></td>
                                        <td><?= $a->alamat ?></td>
                                        <td><?= $a->no_telp ?></td>
                                        <td><?= $a->foto ?></td>
                                        <td>
                                            <a href="<?= base_url('laporanmember_baru/ubah/' . $a->npm) ?>" class="btn btn-sm btn-info"><i class="fas fa-edit"></i> Ubah</a>
                                            <a href="<?= base_url('laporanmember_baru/hapus/' . $a->npm) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Ingin hapus data ini?')"><i class="fas fa-trash"></i> Hapus</a>
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