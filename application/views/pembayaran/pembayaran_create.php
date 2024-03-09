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
<script>
    // Mendapatkan elemen input npm
    var npmInput = document.querySelector('input[name="npm"]');

    // Mendapatkan elemen input nama
    var namaInput = document.querySelector('input[name="nama"]');

    // Mendapatkan elemen input jurusan
    var jurusanInput = document.querySelector('input[name="jurusan"]');

    // Mendapatkan elemen input semester
    var semesterInput = document.querySelector('input[name="semester"]');

    // Daftar member dari PHP
    var members = [
        <?php foreach ($members as $member) : ?> {
                npm: "<?= $member->npm ?>",
                nama: "<?= $member->nama ?>",
                jurusan: "<?= $member->jurusan ?>",
                semester: "<?= $member->semester ?>"
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
                // Mengisi nilai semester dengan semester member
                semesterInput.value = members[i].semester;
                // Berhenti loop
                break;
            }
        }
    });

    // Mendapatkan elemen input status
    var statusInput = document.querySelector('select[name="status"]');

    // Mendapatkan elemen input total_pembayaran
    var totalPembayaranInput = document.querySelector('input[name="total_pembayaran"]');

    // Menambahkan event listener ketika nilai status berubah
    statusInput.addEventListener('change', function() {
        // Mendapatkan nilai status
        var status = this.value;

        // Jika status pembayaran adalah "belum_bayar"
        if (status === "belum_bayar") {
            // Mengisi nilai total pembayaran dengan 5000
            totalPembayaranInput.value = "5000";
        } else {
            // Jika status pembayaran adalah "sudah_bayar", kosongkan nilai total pembayaran
            totalPembayaranInput.value = "0";
        }
    });
</script>