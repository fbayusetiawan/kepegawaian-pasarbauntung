<?php
$no = 1;
$now = date('Y-m-d');

?>

<script type="text/javascript">
    window.print();
</script>

<!DOCTYPE html>
<html>

<head>
    <title>LAPORAN</title>
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/favicon.ico">
</head>

<body>
    <p align="center">
        <b>
            <img src="<?= base_url() ?>/assets/images/logobjb.png" align="left" width="65">
            <font size="4">PEMERINTAH KOTA BANJABARU</font> <br>
            <font size="5">UPT PASAR BAUNTUNG</font> <br>
            Jl. Panglima Batur Barat No.08, Loktabat Utara, Kec. Banjarbaru Utara, Kota Banjar Baru, Kalimantan Selatan 70714
        </b><br>
    </p>
    <hr size="1px" color="black">
    <hr size="4px" color="black">

    <h3>
        <center>
            PRESTASI PEGAWAI BULAN <?= strtoupper($bulan) ?>
        </center>
    </h3>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <table border="1" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th style="text-align:center; font-size: 18px;">No</th>
                            <th style="text-align:center; font-size: 18px;">NIK</th>
                            <th style="text-align:center; font-size: 18px;">Nama Pegawai</th>
                            <th style="text-align:center; font-size: 18px;">Prestasi yang di dapat</th>
                            <th style="text-align:center; font-size: 18px;">Nilai Kerajinan</th>
                            <th style="text-align:center; font-size: 18px;">Nilai Kehadiran</th>
                            <th style="text-align:center; font-size: 18px;">Nilai Perilaku</th>
                            <th style="text-align:center; font-size: 18px;">Nilai Profesionalisme</th>
                            <th style="text-align:center; font-size: 18px;">Nilai Tanggung Jawab</th>
                            <th style="text-align:center; font-size: 18px;">Skor Rata-Rata</th>
                            <th style="text-align:center; font-size: 18px;">Grade</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($data as $row) : ?>
                            <?php 
                               $jumlah = $row->kerajinan + $row->kehadiran + $row->perilaku + $row->profesional + $row->tanggungJawab;
                               $rerata = $jumlah / 5;

                            if ($rerata >= '9') :
                                $grade = 'A';
                            elseif ($rerata >= '7') :
                                $grade = 'B';
                            elseif ($rerata >= '5') :
                                $grade = 'C';
                            else :
                                $grade = 'D';
                            endif;
                                ?>
                            <tr>
                                <td align="center"><?= $no++ ?></td>
                                <td align="center"><?= $row->nik ?></td>
                                <td align="center"><?= $row->namaPegawai ?></td>
                                <td align="center"><?= $row->prestasiDiraih ?></td>
                                <td align="center"><?= $row->kerajinan ?></td>
                                <td align="center"><?= $row->kehadiran ?></td>
                                <td align="center"><?= $row->perilaku ?></td>
                                <td align="center"><?= $row->profesional ?></td>
                                <td align="center"><?= $row->tanggungJawab ?></td>
                                <td align="center"><?= $rerata ?></td>
                                <td align="center"><?= $grade ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>

            </div>
        </div>
    </div>
    <br>

    <br>
    <table width="100%">
        <tr>
            <td width="40%"></td>
            <td width="20%"></td>
            <td align="center">Banjarbaru, <?= tgl_indo($now) ?></td>
        </tr>
        <tr>
            <td align="center"><br><br><br></td>
            <td></td>
            <td align="center">Kepala UPT<br><br><br></td>
        </tr>
        <tr>
            <td align="center"></td>
            <td></td>
            <td align="center">Adi Royan Pratama, ST <br> NIP. 198011252000121003</td>
        </tr>
    </table>
</body>

</html>