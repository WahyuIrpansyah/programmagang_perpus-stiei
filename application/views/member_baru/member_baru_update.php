<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Perbaharui Data Member</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home') ?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('laporanmember_baru') ?>" class="breadcrumb-link">Data Member</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Perbaharui Data</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Perbaharui Data Member
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group row">
                                <label for="nama" class="col-md-2 col-form-label">Nama</label>
                                <div class="col-md-10">
                                    <input type="text" name="nama" value="<?= $member_baru->nama ?>" placeholder="Nama" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tempattanggal_lahir" class="col-md-2 col-form-label">Tempat / Tanggal Lahir</label>
                                <div class="col-md-10">
                                    <input type="text" name="tempattanggal_lahir" required placeholder="Tempat / Tanggal Lahir" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="npm" class="col-md-2 col-form-label">NPM</label>
                                <div class="col-md-10">
                                    <input type="text" name="npm" required placeholder="NPM" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="semester" class="col-md-2 col-form-label">Semester</label>
                                <div class="col-md-10">
                                    <input type="text" name="semester" required placeholder="Semester" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jurusan" class="col-md-2 col-form-label">Jurusan</label>
                                <div class="col-md-10">
                                    <select name="jurusan" required class="form-control">
                                        <option value="">- Pilih Jurusan -</option>
                                        <option value="akuntansi">Akuntansi</option>
                                        <option value="manajemen">Manajemen</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-2 col-form-label">Email</label>
                                <div class="col-md-10">
                                    <input type="text" name="email" required placeholder="Email" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="agama" class="col-md-2 col-form-label">Agama</label>
                                <div class="col-md-10">
                                    <select name="agama" required class="form-control">
                                        <option value="">- Pilih Agama -</option>
                                        <option value="islam">Islam</option>
                                        <option value="kristen_protestan">Kristen Protestan</option>
                                        <option value="kristen_katolik">Kristen Katolik</option>
                                        <option value="hindu">Hindu</option>
                                        <option value="buddha">Buddha</option>
                                        <option value="konghucu">Konghucu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="alamat" class="col-md-2 col-form-label">Alamat</label>
                                <div class="col-md-10">
                                    <input type="text" name="alamat" required placeholder="Alamat" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="no_telp" class="col-md-2 col-form-label">No Telepon</label>
                                <div class="col-md-10">
                                    <input type="text" name="no_telp" required placeholder="No Telepon" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="foto" class="col-md-2 col-form-label">Foto</label>
                                <div class="col-md-10">
                                    <input type="file" name="foto" required placeholder="Foto" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-10 offset-md-2">
                                    <a href="<?= base_url('laporanmember_baru') ?>" class="btn btn-sm btn-danger">Batal</a>
                                    <button type="submit" name="update" class="btn btn-sm btn-info ml-1">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>