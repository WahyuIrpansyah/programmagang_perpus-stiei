<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Perbaharui Data Pembayaran </h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home') ?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('pembayaran') ?>" class="breadcrumb-link">Pembayaran</a></li>
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
                        Perbaharui Data Pembayaran
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group row">
                                <input type="hidden" name="tanggal" value="<?= $pembayaran->tanggal ?>">
                                <label for="npm" class="col-md-2">npm</label>
                                <div class="col-md-10">
                                    <input type="text" name="npm" required placeholder="Npm" value="<?= $pembayaran->npm ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama" class="col-md-2">Nama</label>
                                <div class="col-md-10">
                                    <input type="text" name="nama" required placeholder="Nama" value="<?= $pembayaran->nama ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jurusan" class="col-md-2">Jurusan</label>
                                <div class="col-md-10">
                                    <input type="text" name="jurusan" required placeholder="Jurusan" value="<?= $pembayaran->jurusan ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="semester" class="col-md-2">Semester</label>
                                <div class="col-md-10">
                                    <input type="text" name="semester" required placeholder="Semester" value="<?= $pembayaran->semester ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="status" class="col-md-2">Status</label>
                                <div class="col-md-10">
                                    <input type="text" name="status" required placeholder="Status" value="<?= $pembayaran->status ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tujuan" class="col-md-2">Tujuan</label>
                                <div class="col-md-10">
                                    <input type="text" name="tujuan" required placeholder="Tujuan" value="<?= $pembayaran->tujuan ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="total_pembayaran" class="col-md-2">Total Pembayaran</label>
                                <div class="col-md-10">
                                    <input type="text" name="total_pembayaran" required placeholder="Total Pembayaran" value="<?= $pembayaran->total_pembayaran ?>" class="form-control">
                                </div>
                            </div>
                            <a href="<?= base_url('pembayaran') ?>" class="btn btn-sm btn-danger float-right">Batal</a>
                            <button type="submit" name="update" class="btn btn-sm btn-info float-right mr-1">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>