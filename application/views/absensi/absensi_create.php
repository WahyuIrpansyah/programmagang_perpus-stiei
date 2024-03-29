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
                                    <input type="date" name="tanggal" class="form-control" value="<?= date('Y-m-d') ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="npm" class="col-md-2">Npm</label>
                                <div class="col-md-10">
                                    <input type="text" list="npm" name="npm" required placeholder="Masukkan Npm" required class="form-control">
                                    <datalist id="npm">
                                        <?php foreach ($members as $member) : ?>
                                            <option value="<?= $member->npm ?>">
                                            <?php endforeach; ?>
                                    </datalist>
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
                                    <select name="jenis_pengunjung" required class="form-control">
                                        <option value="">- Pilih Jenis Pengunjung -</option>
                                        <option value="akuntansi">Akuntansi</option>
                                        <option value="manajemen">Manajemen</option>
                                        <option value="dosen">Dosen</option>
                                        <option value="karyawan">Karyawan</option>
                                    </select>
                                </div>
                            </div>
                            <a href="<?= base_url('laporanabsensi') ?>" class="btn btn-sm btn-danger float-right">Batal</a>
                            <button type="submit" name="create" class="btn btn-sm btn-info float-right mr-1">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Mendapatkan elemen input npm
    var npmInput = document.querySelector('input[name="npm"]');

    // Mendapatkan elemen input nama
    var namaInput = document.querySelector('input[name="nama"]');

    // Daftar member dari PHP
    var members = [
        <?php foreach ($members as $member) : ?> {
                npm: "<?= $member->npm ?>",
                nama: "<?= $member->nama ?>"
            },
        <?php endforeach; ?>
    ];

    // Menambahkan event listener ketika nilai npm berubah
    npmInput.addEventListener('input', function() {
        // Mendapatkan nilai npm
        var npm = this.value;

        // Loop melalui daftar member
        for (var i = 0; i < members.length; i++) {
            // Jika npm member sama dengan npm yang dimasukkan
            if (members[i].npm === npm) {
                // Mengisi nilai nama dengan nama member
                namaInput.value = members[i].nama;
                // Berhenti loop
                break;
            }
        }
    });
</script>