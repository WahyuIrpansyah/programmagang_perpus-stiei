<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Tambah Data Denda </h2>
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
                        Tambah Data Denda
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="bulan" class="col-md-2">Bulan</label>
                            <div class="col-md-10">
                                <select name="bulan" required class="form-control">
                                    <option value="">- Pilih Bulan -</option>
                                    <option value="januari">Januari</option>
                                    <option value="februari">Februari</option>
                                    <option value="maret">Maret</option>
                                    <option value="april">April</option>
                                    <option value="mei">Mei</option>
                                    <option value="juni">Juni</option>
                                    <option value="juli">Juli</option>
                                    <option value="agustus">Agustus</option>
                                    <option value="september">September</option>
                                    <option value="oktober">Oktober</option>
                                    <option value="november">November</option>
                                    <option value="desember">Desember</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="minggu" class="col-md-2">Minggu Ke</label>
                            <div class="col-md-10">
                                <select name="minggu" required class="form-control">
                                    <option value="">- Pilih Minggu -</option>
                                    <option value="minggui">Minggu I</option>
                                    <option value="mingguii">Minggu II</option>
                                    <option value="mingguiii">Minggu III</option>
                                    <option value="mingguiv">Minggu IV</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="form-group row">
                                    <label for="jumlah_denda" class="col-md-2">Jumlah Denda</label>
                                    <div class="col-md-10">
                                        <input type="text" name="jumlah_denda" required placeholder="Jumlah Denda" class="form-control">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="" method="post">
                                        <div class="form-group row">
                                            <label for="total_denda" class="col-md-2">Total Denda</label>
                                            <div class="col-md-10">
                                                <input type="text" name="total_denda" required placeholder="Total Denda" class="form-control">
                                            </div>
                                        </div>
                                        <a href="<?= base_url('denda') ?>" class="btn btn-sm btn-danger float-right">Batal</a>
                                        <button type="submit" name="create" class="btn btn-sm btn-info float-right mr-1">Simpan</button>
                                    </form>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>