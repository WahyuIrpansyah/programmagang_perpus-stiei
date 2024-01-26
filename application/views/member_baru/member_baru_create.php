<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Tambah Data Member Baru Perpustakaan </h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home') ?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('member_baru') ?>" class="breadcrumb-link">Member Baru</a></li>
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
                        Tambah Data Member Baru
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group row">
                                <label for="nama" class="col-md-2">Nama</label>
                                <div class="col-md-10">
                                    <input type="text" name="nama" required placeholder="Nama" class="form-control">
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="form-group row">
                                        <label for="tempattanggal_lahir" class="col-md-2">Tempat / Tanggal Lahir </label>
                                        <div class="col-md-10">
                                            <input type="text" name="tempattanggal_lahir" required placeholder="tempattanggal_lahir" class="form-control">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form action="" method="post">
                                            <div class="form-group row">
                                                <label for="npm" class="col-md-2">Npm</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="npm" required placeholder="npm" class="form-control">
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <form action="" method="post">
                                                    <div class="form-group row">
                                                        <label for="semester" class="col-md-2">Semester</label>
                                                        <div class="col-md-10">
                                                            <input type="text" name="semester" required placeholder="semester" class="form-control">
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
                                                    <div class="card-body">
                                                        <form action="" method="post">
                                                            <div class="form-group row">
                                                                <label for="email" class="col-md-2">Email</label>
                                                                <div class="col-md-10">
                                                                    <input type="text" name="email" required placeholder="email" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="agama" class="col-md-2">Agama</label>
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
                                                            <div class="card-body">
                                                                <form action="" method="post">
                                                                    <div class="form-group row">
                                                                        <label for="alamat" class="col-md-2">alamat</label>
                                                                        <div class="col-md-10">
                                                                            <input type="text" name="alamat" required placeholder="alamat" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <form action="" method="post">
                                                                            <div class="form-group row">
                                                                                <label for="no_telp" class="col-md-2">No Telepon</label>
                                                                                <div class="col-md-10">
                                                                                    <input type="text" name="no_telp" required placeholder="no_telp" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <form action="" method="post">
                                                                                    <div class="form-group row">
                                                                                        <label for="foto" class="col-md-2">Foto</label>
                                                                                        <div class="col-md-10">
                                                                                            <input type="file" name="foto" required placeholder="foto" class="form-control">
                                                                                        </div>
                                                                                    </div>
                                                                                    <a href="<?= base_url('member_baru') ?>" class="btn btn-sm btn-danger float-right">Batal</a>
                                                                                    <button type="submit" name="create" class="btn btn-sm btn-info float-right mr-1">Simpan</button>
                                                                                </form>
                                                                            </div>
                                                                    </div>
                                                            </div>
                                                    </div>
                                            </div>
                                    </div>