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
                            <input type="hidden" name="id_denda" value="<?= $denda->id_denda ?>">
                            <div class="form-group row">
                                <label for="bulan" class="col-md-2">Bulan</label>
                                <div class="col-md-10">
                                    <select name="bulan" required class="form-control">
                                        <option value="">- Pilih Bulan -</option>
                                        <option value="Januari" <?= ($denda->bulan == 'Januari') ? 'selected' : '' ?>>Januari</option>
                                        <option value="Februari" <?= ($denda->bulan == 'Februari') ? 'selected' : '' ?>>Februari</option>
                                        <option value="Maret" <?= ($denda->bulan == 'Maret') ? 'selected' : '' ?>>Maret</option>
                                        <option value="April" <?= ($denda->bulan == 'April') ? 'selected' : '' ?>>April</option>
                                        <option value="Mei" <?= ($denda->bulan == 'Mei') ? 'selected' : '' ?>>Mei</option>
                                        <option value="Juni" <?= ($denda->bulan == 'Juni') ? 'selected' : '' ?>>Juni</option>
                                        <option value="Juli" <?= ($denda->bulan == 'Juli') ? 'selected' : '' ?>>Juli</option>
                                        <option value="Agustus" <?= ($denda->bulan == 'Agustus') ? 'selected' : '' ?>>Agustus</option>
                                        <option value="September" <?= ($denda->bulan == 'September') ? 'selected' : '' ?>>September</option>
                                        <option value="Oktober" <?= ($denda->bulan == 'Oktober') ? 'selected' : '' ?>>Oktober</option>
                                        <option value="November" <?= ($denda->bulan == 'November') ? 'selected' : '' ?>>November</option>
                                        <option value="Desember" <?= ($denda->bulan == 'Desember') ? 'selected' : '' ?>>Desember</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="minggu" class="col-md-2">Minggu</label>
                                <div class="col-md-10">
                                    <select name="minggu" required class="form-control">
                                        <option value="Minggu I" <?= ($denda->minggu == 'Minggu I') ? 'selected' : '' ?>>Minggu I</option>
                                        <option value="Minggu II" <?= ($denda->minggu == 'Minggu II') ? 'selected' : '' ?>>Minggu II</option>
                                        <option value="Minggu III" <?= ($denda->minggu == 'Minggu III') ? 'selected' : '' ?>>Minggu III</option>
                                        <option value="Minggu IV" <?= ($denda->minggu == 'Minggu IV') ? 'selected' : '' ?>>Minggu IV</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jumlah_denda" class="col-md-2">Jumlah Denda</label>
                                <div class="col-md-10">
                                    <input type="text" name="jumlah_denda" required placeholder="Jumlah Denda" value="<?= $denda->jumlah_denda ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="total_denda" class="col-md-2">Total Denda</label>
                                <div class="col-md-10">
                                    <input type="text" name="total_denda" required placeholder="Total Denda" value="<?= $denda->total_denda ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <a href="<?= base_url('laporandenda') ?>" class="btn btn-sm btn-danger float-right">Batal</a>
                                <button type="submit" name="update" class="btn btn-sm btn-info float-right mr-1">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>