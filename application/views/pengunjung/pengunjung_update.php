<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Perbaharui Data Pengunjung </h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home') ?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('pengunjung') ?>" class="breadcrumb-link">Pengunjung</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Perbaharui Data</li>
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
                        Perbaharui Data Pengunjung
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group row">
                                <input type="hidden" name="bulan" value="<?= $pengunjung->bulan ?>">
                                <label for="bulan" class="col-md-2">Bulan</label>
                                <div class="col-md-10">
                                    <input type="text" name="bulan" required placeholder="Bulan" value="<?= $pengunjung->bulan ?>" class="form-control">
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="form-group row">
                                        <label for="minggu" class="col-md-2">Minggu</label>
                                        <div class="col-md-10">
                                            <input type="text" name="minggu" required placeholder="Minggu" value="<?= $pengunjung->minggu ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form action="" method="post">
                                            <div class="form-group row">
                                                <label for="jenis_pengunjung" class="col-md-2">Jenis Pengunjung</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="jenis_pengunjung" required placeholder="Jenis Pengunjung" value="<?= $pengunjung->jenis_pengunjung ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <form action="" method="post">
                                                    <div class="form-group row">
                                                        <label for="jumlah_pengunjung" class="col-md-2">Jumlah Pengunjung</label>
                                                        <div class="col-md-10">
                                                            <input type="text" name="jumlah_pengunjung" required placeholder="Jumlah Pengunjung" value="<?= $pengunjung->jumlah_pengunjung ?>" class="form-control">
                                                        </div>
                                                    </div>
                                                    <a href="<?= base_url('laporanpengunjung') ?>" class="btn btn-sm btn-danger float-right">Batal</a>
                                                    <button type="submit" name="update" class="btn btn-sm btn-info float-right mr-1">Simpan</button>
                                                </form>
                                            </div>
                                    </div>
                            </div>
                    </div>
                </div>
            </div>