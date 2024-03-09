<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo base_url('home') ?>"><i class="fas fa-tv"></i>Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2">
                            <i class="fa fa-database"></i>Sirkulasi</a>
                        <div id="submenu-2" class="collapse submenu">
                            <ul class="nav flex-column">
                                <?php if ($this->session->userdata('peran') == 'USER' || $this->session->userdata('peran') == 'ADMIN') : ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url('laporanabsensi') ?>">Absensi</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url('laporanmember_baru') ?>">Member Baru</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url('laporanpembayaran') ?>">Pembayaran</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url('laporanbuku') ?>">Buku</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url('laporanpinjam') ?>">Peminjaman</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url('laporankembali') ?>">Pengembalian</span></a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </li>
                    <?php if ($this->session->userdata('peran') == 'ADMIN') : ?>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>
    </div>
</div>