<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Tambah Data Denda</h2>
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
                        <form action="" method="post">

                            <div class="form-group row">
                                <label for="bulan" class="col-md-2">Bulan</label>
                                <div class="col-md-10">
                                    <select name="bulan" required class="form-control">
                                        <option value="">- Pilih Bulan -</option>
                                        <!-- JavaScript untuk menghasilkan opsi bulan secara real-time -->
                                        <script>
                                            var bulanSelect = document.querySelector('select[name="bulan"]');
                                            var bulanSekarang = new Date().getMonth();
                                            var namaBulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
                                            for (var i = 0; i < 12; i++) {
                                                var option = document.createElement("option");
                                                option.value = namaBulan[i];
                                                option.text = namaBulan[i];
                                                if (i === bulanSekarang) {
                                                    option.selected = true;
                                                }
                                                bulanSelect.appendChild(option);
                                            }
                                        </script>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="minggu" class="col-md-2">Minggu Ke</label>
                                <div class="col-md-10">
                                    <select name="minggu" required class="form-control">
                                        <option value="">- Pilih Minggu -</option>
                                        <!-- JavaScript untuk menghasilkan opsi minggu secara real-time -->
                                        <script>
                                            var mingguSelect = document.querySelector('select[name="minggu"]');
                                            var mingguSekarang = Math.ceil(new Date().getDate() / 7);
                                            for (var i = 1; i <= 4; i++) {
                                                var option = document.createElement("option");
                                                option.value = "Minggu " + i;
                                                option.text = "Minggu " + i;
                                                if (i === mingguSekarang) {
                                                    option.selected = true;
                                                }
                                                mingguSelect.appendChild(option);
                                            }
                                        </script>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="jumlah_denda" class="col-md-2">Jumlah Denda</label>
                                <div class="col-md-10">
                                    <input type="text" name="jumlah_denda" required placeholder="Jumlah Denda" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="total_denda" class="col-md-2">Total Denda</label>
                                <div class="col-md-10">
                                    <input type="text" name="total_denda" required placeholder="Total Denda" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-10 offset-md-2">
                                    <a href="<?= base_url('laporandenda') ?>" class="btn btn-sm btn-danger float-right">Batal</a>
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