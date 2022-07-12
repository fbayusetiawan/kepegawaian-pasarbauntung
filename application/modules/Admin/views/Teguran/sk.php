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
    <style>
        .text-center {
            text-align: center !important;
        }
    </style>
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
    <p class="text-center">
        <b>
            <U>
                <FONT size="4">SURAT TEGURAN</FONT>
            </U> <br>
            <FONT size="3">NOMOR <?= $row->ns ?>/ST/<?= $row->br ?>/<?= $row->ts ?></FONT> <br><br><br>
        </b>
    </p>
    <br>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                Kepala UPT Pasar Bauntung Banjarbaru memandang perlu mengeluarkan surat teguran kepada:
                <table cellspacing="0" width="100%">

                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?= $row->namaPegawai ?></td>
                    </tr>
                    <tr>
                        <td>Nomer Induk Pegawai</td>
                        <td>:</td>
                        <td><?= $row->noIndukKepegawaian ?></td>
                    </tr>
                    <tr>
                        <td>Devisi</td>
                        <td>:</td>
                        <td><?= $row->namaDevisi ?></td>
                    </tr>
                </table>
                <br>
                <br>
                Atas Pelanggaran Berupa <b><?= $row->kesalahan ?></b> <br>
                Sesuai dengan peraturan pemerintah no.53 tahun 2010 tentang Disiplin Pegawai dimana, Pegawai yang melanggar peraturan disiplin akan diberikan <b><?= $row->hukuman ?></b>. <br>
                Dengan diterbikannya Surat Teguran ini diharapkan yang bersangkutan akan lebih bertanggung jawab, mengerti dan menyadari apa yang telah dilakukannya. <br>
                Surat teguran ini berlaku untuk selama-lamanya 3 (tiga) bulan, terhitung sejak tanggal dikeluarkannya surat peringatan ini dan apabila yang bersangkutan melakukan kesalahan yang sama atau lebih berat sebelum masa berlaku surat peringatan ini habis dapat dikenakan sanksi yang lebih berat.
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