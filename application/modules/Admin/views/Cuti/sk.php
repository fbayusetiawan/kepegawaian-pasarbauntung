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
            <img src="<?= base_url() ?>/assets/images/dinas.png" align="left" width="65">
            <font size="4">PEMERINTAH KOTA BANJARMASIN</font> <br>
            <font size="5">DINAS PERINDUSTRIAN DAN PERDAGANGAN</font> <br>
            Jl. Brigjend. H. Hasan Baseri. Komplek Simp. Sei, Gg. Tangga Jalur II No.03, Alalak Utara, Banjarmasin Utara, Kota Banjarmasin, Kalimantan Selatan 70125
        </b><br>
    </p>
    <hr size="1px" color="black">
    <hr size="4px" color="black">
    <p class="text-center">
        <b>
            <U>
                <FONT size="4">SURAT AKTIF KEMBALI</FONT>
            </U> <br>
            <FONT size="3">NOMOR <?= $row->ns ?>/SAK/DISPERDAGIN/<?= $row->br ?>/<?= $row->ts ?></FONT> <br><br><br>
        </b>
    </p>
    <br>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                Berhubungan dengan habisnya masa cuti yang diberikan,
                Kepala Dinas Perindustrian dan Perdagangan Kota Banjarmasin dengan ini menyatakan bahwa:
                <br>
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
                        <td>Tempat, Tanggal Lahir</td>
                        <td>:</td>
                        <td><?= $row->tempatLahir . ', ' . tgl_indo($row->tanggalLahir) ?></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><?= fd_jk($row->jk) ?></td>
                    </tr>
                    <tr>
                        <td>Pangkat/Golongan</td>
                        <td>:</td>
                        <td><?= $row->namaPangkat . '/' . $row->namaGolongan ?></td>
                    </tr>
                </table>
                <br>
                Telah <b>AKTIF</b> kembali bekerja di Dinas Perindustrian dan Perdagangan.
                demikian surat pemberitahuan ini, agar dapat digunakan sebagai mana mestinya.
            </div>
        </div>
    </div>
    <br>

    <br>
    <table width="100%">
        <tr>
            <td width="40%"></td>
            <td width="20%"></td>
            <td align="center">Banjarmasin, <?= tgl_indo($now) ?></td>
        </tr>
        <tr>
            <td align="center"><br><br><br></td>
            <td></td>
            <td align="center">Kepala Dinas <br><br><br></td>
        </tr>
        <tr>
            <td align="center"></td>
            <td></td>
            <td align="center">dr. Sukotjo Hartono <br> NIP. 198011252000121003</td>
        </tr>
    </table>
</body>

</html>