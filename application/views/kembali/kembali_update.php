<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Perbaharui Data Pengembali </h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home') ?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('kembali') ?>" class="breadcrumb-link">Kembali</a></li>
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
                        Perbaharui Data Kembali
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <input type="hidden" name="id_kembali" value="<?= $kembali->id_kembali ?>">
                            <div class="form-group row">
                                <label for="npm" class="col-md-2">Npm</label>
                                <div class="col-md-10">
                                    <input type="text" name="npm" required placeholder="Npm" value="<?= $kembali->npm ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama" class="col-md-2">Nama</label>
                                <div class="col-md-10">
                                    <input type="text" name="nama" required placeholder="Nama" value="<?= $kembali->nama ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jurusan" class="col-md-2">Jurusan</label>
                                <div class="col-md-10">
                                    <input type="text" name="jurusan" required placeholder="Jurusan" value="<?= $kembali->jurusan ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="id_buku" class="col-md-2">Id Buku</label>
                                <div class="col-md-10">
                                    <input type="text" name="id_buku" required placeholder="Id Buku" value="<?= $kembali->id_buku ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tanggal_pinjam" class="col-md-2">Tanggal Pinjam</label>
                                <div class="col-md-10">
                                    <input type="date" name="tanggal_pinjam" required placeholder="Tanggal Pinjam" value="<?= $kembali->tanggal_pinjam ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tanggal_kembali" class="col-md-2">Tanggal Kembali</label>
                                <div class="col-md-10">
                                    <input type="date" name="tanggal_kembali" required placeholder="Tanggal Kembali" value="<?= $kembali->tanggal_kembali ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="denda" class="col-md-2">Denda</label>
                                <div class="col-md-10">
                                    <input type="text" name="denda" id="denda" required placeholder="Masukkan Denda" value="<?= $kembali->denda ?>" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <a href="<?= base_url('laporankembali') ?>" class="btn btn-sm btn-danger float-right">Batal</a>
                                <button type="submit" name="update" class="btn btn-sm btn-info float-right mr-1">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>