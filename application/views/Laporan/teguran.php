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
            TEGURAN PEGAWAI
        </center>
    </h3>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <table border="1" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th style="text-align:center; font-size: 18px;">No</th>
                            <th style="text-align:center; font-size: 18px;">Nama Pegawai</th>
                            <th style="text-align:center; font-size: 18px;">NIK</th>
                            <th style="text-align:center; font-size: 18px;">Divisi</th>
                            <th style="text-align:center; font-size: 18px;">Kesalahan</th>
                            <th style="text-align:center; font-size: 18px;">Hukuman</th>
                            <th style="text-align:center; font-size: 18px;">Tanggal Teguran</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($data as $row) : ?>
                            <tr>
                                <td align="center"><?= $no++ ?></td>
                                <td align="center"><?= $row->namaPegawai ?></td>
                                <td align="center"><?= $row->nik ?></td>
                                <td align="center"><?= $row->namaDevisi ?></td>
                                <td align="center"><?= $row->kesalahan ?></td>
                                <td align="center"><?= $row->hukuman ?></td>
                                <td align="center"><?= tgl_indo($row->tanggalTeguran) ?></td>
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