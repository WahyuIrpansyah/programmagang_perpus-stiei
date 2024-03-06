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
                                <li class="breadcrumb-item"><a href="<?= base_url('laporanpengunjung') ?>" class="breadcrumb-link">Laporan Pengunjung</a></li>
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
                            <input type="hidden" name="id_pengunjung" value="<?= $pengunjung->id_pengunjung ?>">

                            <div class="form-group row">
                                <label for="bulan" class="col-md-2">Bulan</label>
                                <div class="col-md-10">
                                    <select name="bulan" required class="form-control">
                                        <option value="">- Pilih Bulan -</option>
                                        <option value="Januari" <?= ($pengunjung->bulan == 'Januari') ? 'selected' : '' ?>>Januari</option>
                                        <option value="Februari" <?= ($pengunjung->bulan == 'Februari') ? 'selected' : '' ?>>Februari</option>
                                        <option value="Maret" <?= ($pengunjung->bulan == 'Maret') ? 'selected' : '' ?>>Maret</option>
                                        <option value="April" <?= ($pengunjung->bulan == 'April') ? 'selected' : '' ?>>April</option>
                                        <option value="Mei" <?= ($pengunjung->bulan == 'Mei') ? 'selected' : '' ?>>Mei</option>
                                        <option value="Juni" <?= ($pengunjung->bulan == 'Juni') ? 'selected' : '' ?>>Juni</option>
                                        <option value="Juli" <?= ($pengunjung->bulan == 'Juli') ? 'selected' : '' ?>>Juli</option>
                                        <option value="Agustus" <?= ($pengunjung->bulan == 'Agustus') ? 'selected' : '' ?>>Agustus</option>
                                        <option value="September" <?= ($pengunjung->bulan == 'September') ? 'selected' : '' ?>>September</option>
                                        <option value="Oktober" <?= ($pengunjung->bulan == 'Oktober') ? 'selected' : '' ?>>Oktober</option>
                                        <option value="November" <?= ($pengunjung->bulan == 'November') ? 'selected' : '' ?>>November</option>
                                        <option value="Desember" <?= ($pengunjung->bulan == 'Desember') ? 'selected' : '' ?>>Desember</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="minggu" class="col-md-2">Minggu</label>
                                <div class="col-md-10">
                                    <select name="minggu" required class="form-control">
                                        <option value="Minggu I" <?= ($pengunjung->minggu == 'Minggu I') ? 'selected' : '' ?>>Minggu I</option>
                                        <option value="Minggu II" <?= ($pengunjung->minggu == 'Minggu II') ? 'selected' : '' ?>>Minggu II</option>
                                        <option value="Minggu III" <?= ($pengunjung->minggu == 'Minggu III') ? 'selected' : '' ?>>Minggu III</option>
                                        <option value="Minggu IV" <?= ($pengunjung->minggu == 'Minggu IV') ? 'selected' : '' ?>>Minggu IV</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="jenis_pengunjung" class="col-md-2">Jenis Pengunjung</label>
                                <div class="col-md-10">
                                    <select name="jenis_pengunjung" required class="form-control">
                                        <option value="">- Pilih Jenis Pengunjung -</option>
                                        <option value="Akutansi" <?= ($pengunjung->jenis_pengunjung == 'Akutansi') ? 'selected' : '' ?>>Akutansi</option>
                                        <option value="Manajemen" <?= ($pengunjung->jenis_pengunjung == 'Manajemen') ? 'selected' : '' ?>>Manajemen</option>
                                        <option value="Dosen" <?= ($pengunjung->jenis_pengunjung == 'Dosen') ? 'selected' : '' ?>>Dosen</option>
                                        <option value="Karyawan" <?= ($pengunjung->jenis_pengunjung == 'Karyawan') ? 'selected' : '' ?>>Karyawan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="jumlah_pengunjung" class="col-md-2">Jumlah Pengunjung</label>
                                <div class="col-md-10">
                                    <input type="text" name="jumlah_pengunjung" required placeholder="Jumlah Pengunjung" value="<?= $pengunjung->jumlah_pengunjung ?>" class="form-control">
                                </div>
                            </div>
                            <a href="<?= base_url('laporanpengunjung') ?>" class="btn btn-sm btn-danger float-right">Batal</a>
                            <button type="submit" name="update" class="btn btn-sm btn-info float-right mr-1">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>