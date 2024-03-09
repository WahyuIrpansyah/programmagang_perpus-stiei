<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Tambah Data Pinjam</h2>
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
                        Tambah Data Pinjam
                    </div>
                    <div class="card-body">
                        <form action="" method="post">

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
                                <label for="jurusan" class="col-md-2">Jurusan</label>
                                <div class="col-md-10">
                                    <input type="text" name="jurusan" required placeholder="Masukkan Jurusan" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="id_buku" class="col-md-2">Id Buku</label>
                                <div class="col-md-10">
                                    <input type="text" name="id_buku" required placeholder="Masukkan Id Buku" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tanggal_pinjam" class="col-md-2">Tanggal Pinjam</label>
                                <div class="col-md-10">
                                    <input type="date" name="tanggal_pinjam" class="form-control" value="<?= date('Y-m-d') ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tanggal_kembali" class="col-md-2">Tanggal Kembali</label>
                                <div class="col-md-10">
                                    <input type="date" name="tanggal_kembali" class="form-control" value="<?= date('Y-m-d', strtotime('+7 days')) ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-10 offset-md-2">
                                    <a href="<?= base_url('pinjam') ?>" class="btn btn-sm btn-danger float-right">Batal</a>
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
<script>
    // Mendapatkan elemen input npm
    var npmInput = document.querySelector('input[name="npm"]');

    // Mendapatkan elemen input nama
    var namaInput = document.querySelector('input[name="nama"]');

    // Mendapatkan elemen input jurusan
    var jurusanInput = document.querySelector('input[name="jurusan"]');

    // Daftar member dari PHP
    var members = [
        <?php foreach ($members as $member) : ?> {
                npm: "<?= $member->npm ?>",
                nama: "<?= $member->nama ?>",
                jurusan: "<?= $member->jurusan ?>",
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
                // Mengisi nilai jurusan dengan jurusan member
                jurusanInput.value = members[i].jurusan;
                // Berhenti loop
                break;
            }
        }
    });
</script>