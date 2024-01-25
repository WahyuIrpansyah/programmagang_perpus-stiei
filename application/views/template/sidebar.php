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
                                <?php if ($this->session->userdata('peran') != 'USER') : ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url('absensi') ?>">Absensi</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url('memberbaru') ?>">Member Baru</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url('pembayaran') ?>">Pembayaran</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url('pengunjung') ?>">Pengunjung</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url('denda') ?>">Denda</span></a>
                                    </li>
                                <?php endif; ?>
                                <?php if ($this->session->userdata('peran') != 'ADMIN') : ?>

                                <?php endif; ?>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-archive"></i>Master Data</a>
                        <div id="submenu-3" class="collapse submenu">
                            <ul class="nav flex-column">
                                <?php if ($this->session->userdata('peran') != 'ADMIN') : ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url('laporanperpanjangankartu') ?>">Laporan Absensi</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url('laporanpengunjungperhari') ?>">Laporan Member</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url('laporanpengunjungperbulan') ?>">Laporan Pembayaran</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url('laporanpeminjambuku') ?>">Laporan Pengunjung</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url('laporananggota') ?>">Laporan Denda</a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>