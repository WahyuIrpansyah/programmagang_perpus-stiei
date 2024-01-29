<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Perbaharui Data Denda </h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home') ?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('denda') ?>" class="breadcrumb-link">Denda</a></li>
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
                        Perbaharui Data Denda
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group row">
                                <input type="hidden" name="bulan" value="<?= $denda->bulan ?>">
                                <label for="bulan" class="col-md-2">Bulan</label>
                                <div class="col-md-10">
                                    <input type="text" name="bulan" required placeholder="Bulan" value="<?= $denda->bulan ?>" class="form-control">
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="form-group row">
                                        <label for="minggu" class="col-md-2">Minggu</label>
                                        <div class="col-md-10">
                                            <input type="text" name="minggu" required placeholder="Minggu" value="<?= $denda->minggu ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form action="" method="post">
                                            <div class="form-group row">
                                                <label for="jumlah_denda" class="col-md-2">Jumlah Denda</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="jumlah_denda" required placeholder="Jumlah Denda" value="<?= $denda->jumlah_denda ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <form action="" method="post">
                                                    <div class="form-group row">
                                                        <label for="total_denda" class="col-md-2">Total Denda</label>
                                                        <div class="col-md-10">
                                                            <input type="text" name="total_denda" required placeholder="Total Denda" value="<?= $denda->total_denda ?>" class="form-control">
                                                        </div>
                                                    </div>
                                                    <a href="<?= base_url('laporandenda') ?>" class="btn btn-sm btn-danger float-right">Batal</a>
                                                    <button type="submit" name="update" class="btn btn-sm btn-info float-right mr-1">Simpan</button>
                                                </form>
                                            </div>
                                    </div>
                            </div>
                    </div>
                </div>
            </div>