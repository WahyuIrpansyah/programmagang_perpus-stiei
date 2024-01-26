<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Perbaharui Data Absensi </h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home') ?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('absensi') ?>" class="breadcrumb-link">Absensi</a></li>
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
                        Perbaharui Data Absensi
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group row">
                                <input type="hidden" name="tanggal" value="<?= $absensi->tanggal ?>">
                                <label for="tanggal" class="col-md-2">Tanggal</label>
                                <div class="col-md-10">
                                    <input type="date" name="tanggal" required class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="npm" class="col-md-2">Npm</label>
                                <div class="col-md-10">
                                    <input type="text" name="npm" required placeholder="npm" value="<?= $absensi->npm ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama" class="col-md-2">Nama</label>
                                <div class="col-md-10">
                                    <input type="text" name="nama" required placeholder="nama" value="<?= $absensi->nama ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jenis_pengunjung" class="col-md-2">Jenis Pengunjung</label>
                                <div class="col-md-10">
                                    <select name="jenis_pengunjung" required class="form-control">
                                        <option value="">- Pilih Jenis Pengunjung -</option>
                                        <option value="akuntansi">Akuntansi</option>
                                        <option value="manajemen">Manajemen</option>
                                        <option value="dosen">Dosen</option>
                                        <option value="karyawan">Karyawan</option>
                                    </select>
                                </div>
                            </div>
                            <a href="<?= base_url('absensi') ?>" class="btn btn-sm btn-danger float-right">Batal</a>
                            <button type="submit" name="update" class="btn btn-sm btn-info float-right mr-1">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>