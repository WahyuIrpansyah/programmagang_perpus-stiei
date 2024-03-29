<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Perbaharui Data Buku </h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home') ?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('laporanabuku') ?>" class="breadcrumb-link">Data Buku</a></li>
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
                        Perbaharui Data Buku
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group row">
                                <label for="id_buku" class="col-md-2">id Buku</label>
                                <div class="col-md-10">
                                    <input type="text" name="id_buku" required placeholder="Id Buku" value="<?= $buku->id_buku ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="judul_buku" class="col-md-2">Judul Buku</label>
                                <div class="col-md-10">
                                    <input type="text" name="judul_buku" required placeholder="judul Buku" value="<?= $buku->judul_buku ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pengarang" class="col-md-2">Pengarang</label>
                                <div class="col-md-10">
                                    <input type="text" name="pengarang" required placeholder="Nama Pengarang" value="<?= $buku->pengarang ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="penerbit" class="col-md-2">Penerbit</label>
                                <div class="col-md-10">
                                    <input type="text" name="penerbit" required placeholder="Masukkan Nama Penerbit" value="<?= $buku->penerbit ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tahun" class="col-md-2">Tahun</label>
                                <div class="col-md-10">
                                    <input type="text" name="tahun" required placeholder="Masukkan Tahun Terbit" value="<?= $buku->tahun ?>" class="form-control">
                                </div>
                            </div>
                            <a href="<?= base_url('laporanbuku') ?>" class="btn btn-sm btn-danger float-right">Batal</a>
                            <button type="submit" name="update" class="btn btn-sm btn-info float-right mr-1">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>