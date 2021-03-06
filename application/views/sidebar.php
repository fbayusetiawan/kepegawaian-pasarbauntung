<!-- ========== Left Sidebar Start ========== -->
<?php
$tglkemarin = date('Y-m-d', strtotime("-1 day", strtotime(date("Y-m-d"))));
$tglA = date('d');
$getTgl = $tglA - 1;
$kurangTgl        = mktime(0, 0, 0, date("n"), date("j") - $getTgl, date("Y"));
$hasilTgl = date('Y-m-d', $kurangTgl);
?>
<div class="left-side-menu">
    <div class="media user-profile mt-2 mb-2">
        <img src="<?= base_url() ?>assets/images/users/avatar-7.jpg" class="avatar-sm rounded-circle mr-2" alt="Shreyu" />
        <img src="<?= base_url() ?>assets/images/users/avatar-7.jpg" class="avatar-xs rounded-circle mr-2" alt="Shreyu" />

        <div class="media-body">
            <h6 class="pro-user-name mt-0 mb-0"><?= $this->session->userdata('namaLengkap'); ?></h6>
            <?php if ($this->session->userdata('roleId') == '1') : ?>
                <span class="pro-user-desc">Administrator</span>
            <?php elseif ($this->session->userdata('roleId') == '2') : ?>
                <span class="pro-user-desc">Pimpinan</span>
            <?php elseif ($this->session->userdata('roleId') == '2') : ?>
                <span class="pro-user-desc">Pegawai</span>
            <?php endif ?>
        </div>
        <div class="dropdown align-self-center profile-dropdown-menu">
            <a class="dropdown-toggle mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <span data-feather="chevron-down"></span>
            </a>
            <div class="dropdown-menu profile-dropdown">




                <a href="<?= base_url('Auth/Logout') ?>" class="dropdown-item notify-item">
                    <i data-feather="log-out" class="icon-dual icon-xs mr-2"></i>
                    <span>Logout</span>
                </a>
            </div>
        </div>
    </div>
    <div class="sidebar-content">
        <!--- Sidemenu -->
        <div id="sidebar-menu" class="slimscroll-menu">
            <ul class="metismenu" id="menu-bar">
                <li class="menu-title">Navigation</li>
                <?php if ($this->session->userdata('roleId') == '1') : ?>
                    <li>
                        <a href="<?= base_url('Admin/Dashboard') ?>">
                            <i data-feather="home"></i>
                            <!-- <span class="badge badge-success float-right">1</span> -->
                            <span> Dashboard </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('Admin/Absen') ?>">
                            <i data-feather="book"></i>
                            <span> Rekap Absen </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript: void(0);">
                            <i data-feather="inbox"></i>
                            <span> Cuti </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="<?= base_url('Admin/Cuti/New') ?>">Pengajuan Baru</a>
                            </li>
                            <li>
                                <a href="<?= base_url('Admin/Cuti') ?>">Riwayat</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= base_url('Admin/Naikpangkat') ?>">
                            <i data-feather="pocket"></i>
                            <span> Kenaikan Pangkat </span>
                        </a>
                    </li>


                    <li>
                        <a href="<?= base_url('Admin/Teguran') ?>">
                            <i data-feather="meh"></i>
                            <span> Teguran </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('Admin/Mutasi') ?>">
                            <i data-feather="rotate-cw"></i>
                            <span> Mutasi </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript: void(0);">
                            <i data-feather="file-text"></i>
                            <span> Laporan </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="<?= base_url('Laporan/pegawai') ?>">Data Pegawai</a>
                            </li>
                            <li>
                                <a href="#m_absen" data-toggle="modal">Rekap Absen</a>
                            </li>
                            <li>
                                <a href="#m_cuti" data-toggle="modal">Cuti</a>
                            </li>
                            <li>
                                <a href="#m_kenaikan" data-toggle="modal">Kenaikan Pangkat</a>
                            </li>
                            <li>
                                <a href="#m_prestasi" data-toggle="modal">Prestasi</a>
                            </li>
                            <li>
                                <a href="#m_mutasi" data-toggle="modal">Mutasi</a>
                            </li>
                            <li>
                                <a href="#m_teguran" data-toggle="modal">Teguran</a>
                            </li>
                            <li>
                                <a href="#m_kontrak" data-toggle="modal">Kontrak</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-title">Master Data</li>
                    <li>
                        <a href="javascript: void(0);">
                            <i data-feather="inbox"></i>
                            <span> Kepegawaian </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="<?= base_url('Datamaster/Pegawai') ?>">Pegawai</a>
                            </li>
                            <li>
                                <a href="<?= base_url('Datamaster/Pangkat') ?>">Pangkat</a>
                            </li>
                            <li>
                                <a href="<?= base_url('Datamaster/Golongan') ?>">Golongan</a>
                            </li>
                            <li>
                                <a href="<?= base_url('Datamaster/Departemen') ?>">Departemen</a>
                            </li>
                            <li>
                                <a href="<?= base_url('Datamaster/Devisi') ?>">Divisi</a>
                            </li>
                            <li>
                                <a href="<?= base_url('Datamaster/Jabatan') ?>">Jabatan</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= base_url('Datamaster/Users') ?>">
                            <i data-feather="user"></i>
                            <span> Users </span>
                        </a>
                    </li>

                <?php elseif ($this->session->userdata('roleId') == '2') : ?>
                    <li>
                        <a href="javascript: void(0);">
                            <i data-feather="inbox"></i>
                            <span> Perpanjang Kontrak </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="<?= base_url('Admin/Kontrak/New') ?>">Pengajuan Baru</a>
                            </li>
                            <li>
                                <a href="<?= base_url('Admin/Kontrak') ?>">Riwayat</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= base_url('Admin/Prestasi') ?>">
                            <i data-feather="award"></i>
                            <span> Prestasi </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript: void(0);">
                            <i data-feather="inbox"></i>
                            <span> Kepegawaian </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="<?= base_url('Datamaster/Pegawai') ?>">Pegawai</a>
                            </li>
                            <!-- <li>
                                <a href="<?= base_url('Datamaster/Pangkat') ?>">Pangkat</a>
                            </li>
                            <li>
                                <a href="<?= base_url('Datamaster/Golongan') ?>">Golongan</a>
                            </li>
                            <li>
                                <a href="<?= base_url('Datamaster/Departemen') ?>">Departemen</a>
                            </li>
                            <li>
                                <a href="<?= base_url('Datamaster/Devisi') ?>">Divisi</a>
                            </li>
                            <li>
                                <a href="<?= base_url('Datamaster/Jabatan') ?>">Jabatan</a>
                            </li> -->
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);">
                            <i data-feather="file-text"></i>
                            <span> Laporan </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="<?= base_url('Laporan/pegawai') ?>">Data Pegawai</a>
                            </li>
                            <li>
                                <a href="#m_absen" data-toggle="modal">Rekap Absen</a>
                            </li>
                            <li>
                                <a href="#m_cuti" data-toggle="modal">Cuti</a>
                            </li>
                            <li>
                                <a href="#m_kenaikan" data-toggle="modal">Kenaikan Pangkat</a>
                            </li>
                            <li>
                                <a href="#m_prestasi" data-toggle="modal">Prestasi</a>
                            </li>
                            <li>
                                <a href="#m_mutasi" data-toggle="modal">Mutasi</a>
                            </li>
                            <li>
                                <a href="#m_teguran" data-toggle="modal">Teguran</a>
                            </li>
                            <li>
                                <a href="#m_kontrak" data-toggle="modal">Kontrak</a>
                            </li>
                        </ul>
                    </li>
                <?php elseif ($this->session->userdata('roleId') == '3') : ?>
                    <li>
                        <a href="<?= base_url('Admin/Beranda') ?>">
                            <i data-feather="home"></i>
                            <!-- <span class="badge badge-success float-right">1</span> -->
                            <span> Dashboard </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('Admin/Absen/pegawai') ?>">
                            <i data-feather="book"></i>
                            <span> Absensi </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript: void(0);">
                            <i data-feather="inbox"></i>
                            <span> Cuti </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="<?= base_url('Admin/Cuti/Pengajuan') ?>">Pengajuan</a>
                            </li>
                            <li>
                                <a href="<?= base_url('Admin/Cuti/riwayat') ?>">Riwayat</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i data-feather="inbox"></i>
                            <span> Perpanjang Kontrak </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="<?= base_url('Admin/Kontrak/Pengajuan') ?>">Pengajuan</a>
                            </li>
                            <li>
                                <a href="<?= base_url('Admin/Kontrak/riwayat') ?>">Riwayat</a>
                            </li>
                        </ul>
                    </li>
                <?php endif ?>




            </ul>
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
<div class="modal fade" id="m_absen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Filter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('laporan/absen') ?>" method="post" target="_blank">
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Bulan</label>
                        <?=
                        form_dropdown('bulan', bulanIndo(), 'default', 'class="form-control"');
                        ?>
                        <div class="invalid-feedback">
                            Harus diisi!
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Print</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="m_teguran" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Filter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('laporan/teguran') ?>" method="post" target="_blank">
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Dari</label>
                        <input type="date" name="dari" value="<?= $hasilTgl ?>" class="form-control">
                        <div class="invalid-feedback">
                            Harus diisi!
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Sampai</label>
                        <input type="date" name="sampai" value="<?= $tglkemarin ?>" class="form-control">
                        <div class="invalid-feedback">
                            Harus diisi!
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Print</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="m_cuti" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Filter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('laporan/cuti') ?>" method="post" target="_blank">
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Dari</label>
                        <input type="date" name="dari" value="<?= $hasilTgl ?>" class="form-control">
                        <div class="invalid-feedback">
                            Harus diisi!
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Sampai</label>
                        <input type="date" name="sampai" value="<?= $tglkemarin ?>" class="form-control">
                        <div class="invalid-feedback">
                            Harus diisi!
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Print</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="m_kenaikan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Filter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('laporan/naikpangkat') ?>" method="post" target="_blank">
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Dari</label>
                        <input type="date" name="dari" value="<?= $hasilTgl ?>" class="form-control">
                        <div class="invalid-feedback">
                            Harus diisi!
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Sampai</label>
                        <input type="date" name="sampai" value="<?= $tglkemarin ?>" class="form-control">
                        <div class="invalid-feedback">
                            Harus diisi!
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Print</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="m_prestasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Filter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('laporan/prestasi') ?>" method="post" target="_blank">
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Bulan</label>
                        <?=
                        form_dropdown('bulan', bulanIndo(), 'default', 'class="form-control"');
                        ?>
                        <div class="invalid-feedback">
                            Harus diisi!
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Print</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="m_mutasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Filter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('laporan/mutasi') ?>" method="post" target="_blank">
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Dari</label>
                        <input type="date" name="dari" value="<?= $hasilTgl ?>" class="form-control">
                        <div class="invalid-feedback">
                            Harus diisi!
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Sampai</label>
                        <input type="date" name="sampai" value="<?= $tglkemarin ?>" class="form-control">
                        <div class="invalid-feedback">
                            Harus diisi!
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Print</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="m_gaji" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Filter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('laporan/gaji') ?>" method="post" target="_blank">
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Bulan</label>
                        <?=
                        form_dropdown('bulan', bulanIndo(), 'default', 'class="form-control"');
                        ?>
                        <div class="invalid-feedback">
                            Harus diisi!
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Print</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="m_kontrak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Filter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('laporan/kontrak') ?>" method="post" target="_blank">
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Dari</label>
                        <input type="date" name="dari" value="<?= $hasilTgl ?>" class="form-control">
                        <div class="invalid-feedback">
                            Harus diisi!
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Sampai</label>
                        <input type="date" name="sampai" value="<?= $tglkemarin ?>" class="form-control">
                        <div class="invalid-feedback">
                            Harus diisi!
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Print</button>
                </form>
            </div>
        </div>
    </div>
</div>