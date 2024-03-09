<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Tambah Data Pengunjung </h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home') ?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
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
                        Tambah Data Pengunjung
                    </div>
                    <div class="card-body">
                        <form action="" method="post">

                            <div class="form-group row">
                                <label for="bulan" class="col-md-2">Bulan</label>
                                <div class="col-md-10">
                                    <select name="bulan" required class="form-control">
                                        <option value="">- Pilih Bulan -</option>
                                        <option value="Januari">Januari</option>
                                        <option value="Februari">Februari</option>
                                        <option value="Maret">Maret</option>
                                        <option value="April">April</option>
                                        <option value="Mei">Mei</option>
                                        <option value="Juni">Juni</option>
                                        <option value="Juli">Juli</option>
                                        <option value="Agustus">Agustus</option>
                                        <option value="September">September</option>
                                        <option value="Oktober">Oktober</option>
                                        <option value="November">November</option>
                                        <option value="Desember">Desember</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="minggu" class="col-md-2">Minggu Ke</label>
                                <div class="col-md-10">
                                    <select name="minggu" required class="form-control">
                                        <option value="">- Pilih Minggu -</option>
                                        <option value="Minggu I">Minggu I</option>
                                        <option value="Minggu II">Minggu II</option>
                                        <option value="Minggu III">Minggu III</option>
                                        <option value="Minggu IV">Minggu IV</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="jenis_pengunjung" class="col-md-2">Jenis Pengunjung</label>
                                <div class="col-md-10">
                                    <select name="jenis_pengunjung" required class="form-control">
                                        <option value="">- Pilih Jenis Pengunjung -</option>
                                        <option value="Akuntansi">Akuntansi</option>
                                        <option value="Manajemen">Manajemen</option>
                                        <option value="Dosen">Dosen</option>
                                        <option value="Karyawan">Karyawan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="jumlah_pengunjung" class="col-md-2">Jumlah Pengunjung</label>
                                <div class="col-md-10">
                                    <input type="text" name="jumlah_pengunjung" required placeholder="Jumlah Pengunjung" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-10 offset-md-2">
                                    <a href="<?= base_url('laporanpengunjung') ?>" class="btn btn-sm btn-danger float-right">Batal</a>
                                    <button type="submit" name="create" class="btn btn-sm btn-info float-right mr-1">Simpan</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>