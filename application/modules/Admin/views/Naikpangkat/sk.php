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
                <FONT size="4">SURAT KEPUTUSAN</FONT>
            </U> <br>
            <FONT size="3">NOMOR <?= $row->ns ?>/SK/DISPERDAGIN/<?= $row->br ?>/<?= $row->ts ?></FONT> <br><br><br>
            TENTANG <br><br><br>
            KENAIKAN PANGKAT PEGAWAI DINAS PERINDUSTRIAN DAN PERDAGANGAN KOTA BANJARMASIN <br>

            KEPALA DINAS PERINDUSTRIAN DAN PERDAGANGAN
        </b>
    </p>

    <div class="row">
        <div class="col-sm">
            <div class="card-box table-responsive">
                <br>
                <br><br><br>
                <table cellspacing="0" width="100%">
                    <tr>
                        <td valign="top">Menimbang:</td>
                        <td valign="top">a.</td>
                        <td>Bahwa agar dalam pelaksanaan kenaikan pangkat pegawai di Dinas Perindustrian dan Perdagangan dapat terlaksana dengan baik, maka perlu adanya kebijakan kenaikan pangkat pegawai di Dinas Perindustrian dan Perdagangan;</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td valign="top">b.</td>
                        <td>Bahwa Berdasarkan pertimbangan sebagaimana dimaksud dalam butir a perlu adanya kebijakan kenaikan pangkat pegawai di Dinas Perindustrian dan Perdagangan dengan surat keputusan Dinas Perindustrian dan Perdagangan.</td>
                    </tr>

                </table> <br>
                <table cellspacing="0" width="100%">
                    <tr>
                        <td valign="top">Mengingat:</td>
                        <td valign="top">1.</td>
                        <td>Undang-undang Republik Indonesia Nomor 43 Tahun 1999 tentang Pokok-pokok Pegawai;</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td valign="top">2.</td>
                        <td>Peraturan Pemerintah Nomor 46 Tahun 2011 tentang Kenaikan Pangkat Pegawai;</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td valign="top">3.</td>
                        <td>Undang-undang Republik Indonesia Nomor 13 tahun 2003 tentang Ketenagakerjaan;</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td valign="top">4.</td>
                        <td>Peraturan Pemerintah Nomor 25 Tahun 2000 tentang Kewenangan Pemerintah dan Kewenangan Propinsi Sebagai Daerah Otonom (Lembaran Negara Tahun 2000 No. 54, Tambahan Lembaran Negara No. 3952);</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td valign="top">5.</td>
                        <td>Keputusan Presiden RI Nomor 177 Tahun 2000 tentang Susunan Organisasi dan Tugas Departemen;;</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td valign="top">6.</td>
                        <td>Keputusan Menteri Perindustrian dan Perdagangan Nomor 444/MPP/Kep/9/1998 jo. Nomor 24/MPP/Kep/1/1999 tentang Organisasi dan Tatakerja Departemen Perindustrian dan Perdagangan.;</td>
                    </tr>
                </table><br><br>
                <p class="text-center">MEMUTUSKAN:</p>
                <br><br>
                <table cellspacing="0" width="100%">
                    <tr>
                        <td>Menetapkan</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td valign="top">KESATU</td>
                        <td valign="top">:</td>
                        <td colspan="3">Pegawai Dinas Perindustrian dan Perdagangan tersebut dibawah ini:</td>
                    </tr>
                    <tr>
                        <td valign="top"></td>
                        <td valign="top"></td>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?= $row->namaPegawai ?></td>
                    </tr>
                    <tr>
                        <td valign="top"></td>
                        <td valign="top"></td>
                        <td>Nomer Induk Pegawai</td>
                        <td>:</td>
                        <td><?= $row->noIndukKepegawaian ?></td>
                    </tr>
                    <tr>
                        <td valign="top"></td>
                        <td valign="top"></td>
                        <td>Tempat, Tanggal Lahir</td>
                        <td>:</td>
                        <td><?= $row->tempatLahir . ', ' . tgl_indo($row->tanggalLahir) ?></td>
                    </tr>
                    <tr>
                        <td valign="top"></td>
                        <td valign="top"></td>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><?= fd_jk($row->jk) ?></td>
                    </tr>
                    <tr>
                        <td valign="top"></td>
                        <td valign="top"></td>
                        <td>Pangkat/Golongan</td>
                        <td>:</td>
                        <td><?= $row->namaPangkat . '/' . $row->namaGolongan ?></td>
                    </tr>
                    <tr>
                        <td valign="top"></td>
                        <td valign="top"></td>
                        <td>Unit Kerja</td>
                        <td>:</td>
                        <td><?= $row->namaDevisi ?></td>
                    </tr>
                    <tr>
                        <td valign="top"></td>
                        <td valign="top"></td>
                        <td colspan="3">Terhitung mulai tanggal <?= tgl_indo($row->tanggalDitetapkan) ?> Naik Pangkat Menjadi <b><?= $row->namaPangkatDitetapkan . '/' . $row->namaGolonganDitetapkan ?></b></td>
                    </tr>
                    <tr>
                        <td valign="top">KEDUA</td>
                        <td valign="top">:</td>
                        <td colspan="3">Apabila dikemudian hari ternyata terdapat kekeliruan dalam keputusan ini, akan diadakan perbaikan sebagaimana mestinya</td>
                    </tr>
                </table>
                <br>
                <br>
                <br>
                <br>
                Tembusan Keputusan ini disampaikan kepada:
                <ol>
                    <li>Kabag Kepagawaian</li>
                    <li>kabag Keuangan</li>
                </ol>
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