<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Tambah Data Pembayaran </h2>
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
                        Tambah Data Pembayaran
                    </div>
                    <div class="card-body">
                        <form action="" method="post">

                            <div class="form-group row">
                                <label for="tanggal" class="col-md-2">Tanggal</label>
                                <div class="col-md-10">
                                    <input type="date" name="tanggal" required class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="npm" class="col-md-2">Npm</label>
                                <div class="col-md-10">
                                    <input type="text" name="npm" required placeholder="Npm" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nama" class="col-md-2">Nama</label>
                                <div class="col-md-10">
                                    <input type="text" name="nama" required placeholder="Nama" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="jurusan" class="col-md-2">Jurusan</label>
                                <div class="col-md-10">
                                    <select name="jurusan" required class="form-control">
                                        <option value="">- Pilih Jurusan -</option>
                                        <option value="akuntansi">Akuntansi</option>
                                        <option value="manajemen">Manajemen</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="semester" class="col-md-2">Semester</label>
                                <div class="col-md-10">
                                    <input type="text" name="semester" required placeholder="Semester" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="status" class="col-md-2">Status</label>
                                <div class="col-md-10">
                                    <select name="status" required class="form-control">
                                        <option value="">- Pilih Status -</option>
                                        <option value="belum_bayar">Belum Bayar</option>
                                        <option value="sudah_bayar">Sudah Bayar</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tujuan" class="col-md-2">Tujuan</label>
                                <div class="col-md-10">
                                    <select name="tujuan" required class="form-control">
                                        <option value="">- Pilih Tujuan -</option>
                                        <option value="member_baru">Member Baru</option>
                                        <option value="perpanjangan_kartu">Perpanjangan Kartu</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="total_pembayaran" class="col-md-2">Total Pembayaran</label>
                                <div class="col-md-10">
                                    <input type="text" name="total_pembayaran" required placeholder="Total Pembayaran" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-10 offset-md-2">
                                    <a href="<?= base_url('pembayaran') ?>" class="btn btn-sm btn-danger float-right">Batal</a>
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