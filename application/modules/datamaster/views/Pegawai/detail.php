<?php
$linkin = $this->uri->segment(1) . '/' . $this->uri->segment(2);
$no = '1';
?>
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">

            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Detail Data <?= $row->namaPegawai ?></h4>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <img src="<?= base_url('upload/' . $row->foto) ?>" width="200" class="mb-5" alt="">
                <table width="100%">
                    <tr>
                        <th width="25%">Nama Lengkap</th>
                        <th>: <?= $row->namaPegawai ?></th>
                    </tr>
                    <tr>
                        <th>Nomer Induk Pegawai</th>
                        <th>: <?= $row->noIndukKepegawaian ?></th>
                    </tr>
                    <tr>
                        <th>Nomer Induk Kependudukan</th>
                        <th>: <?= $row->nik ?></th>
                    </tr>
                    <tr>
                        <th>Tempat, Tanggal Lahir</th>
                        <th>: <?= $row->tempatLahir . ',  ' . tgl_indo($row->tanggalLahir) ?></th>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <th>: <?= fd_jk($row->jk) ?></th>
                    </tr>

                    <tr>
                        <th>Departemen</th>
                        <th>: <?= $row->namaDepartemen ?></th>
                    </tr>
                    <tr>
                        <th>Devisi/Unit</th>
                        <th>: <?= $row->namaDevisi ?></th>
                    </tr>
                    <tr>
                        <th>Pangkat/Golongan</th>
                        <th>: <?= $row->namaPangkat . '/' . $row->namaGolongan ?></th>
                    </tr>
                    <tr>
                        <th>Jabatan</th>
                        <th>: <?= $row->namaJabatan ?></th>
                    </tr>
                    <tr>
                        <th>Nomer WhatsApp</th>
                        <th>: <?= $row->noWa ?></th>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <th>: <?= $row->alamat ?></th>
                    </tr>
                    <tr>
                        <th>Status Pegawai</th>
                        <th>: <?= fd_kepegawaian($row->statusKepegawaian) ?></th>
                    </tr>
                    <tr>
                        <th>Masa Bekerja</th>
                        <th>:
                            <?php if ($row->statusKepegawaian == 1) {
                                echo tgl_indo($row->tanggalMulaiBekerja);
                            } else {
                                echo tgl_indo($row->tanggalMulaiBekerja) . ' sampai ' . tgl_indo($row->tanggalSelesai);
                            } ?>

                    </tr>
                </table>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<!-- end row-->