<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Tambah Data Absensi</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home') ?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('absensi') ?>" class="breadcrumb-link">Data Absensi</a></li>
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
                        Tambah Data Absensi
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group row">
                                <label for="tanggal" class="col-md-2">Tanggal</label>
                                <div class="col-md-10">
                                    <input type="text" name="tanggal" required placeholder="tanggal" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="npm" class="col-md-2">Npm</label>
                                <div class="col-md-10">
                                    <input type="text" name="npm" required placeholder="npm" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama" class="col-md-2">Nama</label>
                                <div class="col-md-10">
                                    <input type="text" name="nama" required placeholder="Masukkan Nama" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jenis_pengunjung" class="col-md-2">Jenis Pengunjung</label>
                                <div class="col-md-10">
                                    <input type="text" name="jenis_pengunjung" required placeholder="Pilih Jenis Pengunjung" class="form-control">
                                </div>
                            </div>
                            <a href="<?= base_url('absensi') ?>" class="btn btn-sm btn-danger float-right">Batal</a>
                            <button type="submit" name="create" class="btn btn-sm btn-info float-right mr-1">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>