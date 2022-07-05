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
                <FONT size="4">SURAT KEPUTUSAN</FONT>
            </U> <br>
            <FONT size="3">NOMOR <?= $row->ns ?>/UPTBAUNTUNG/<?= $row->br ?>/<?= $row->ts ?></FONT> <br><br><br>
            TENTANG <br><br><br>
            MUTASI PEGAWAI UPT PASAR BAUNTUNG BANJARBARU <br>
        </b>
    </p>
    <br>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <br>
                <table cellspacing="0" width="100%">
                    <tr>
                        <td valign="top">Menimbang:</td>
                        <td valign="top">a.</td>
                        <td>Bahwa agar dalam pelaksanaan mutasi pegawai di UPT Pasar Bauntung Banjarbaru dapat terlaksana dengan baik, maka perlu adanya kebijakan mutasi pegawai di UPT Pasar Bauntung Banjarbaru;</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td valign="top">b.</td>
                        <td>Bahwa Berdasarkan pertimbangan sebagaimana dimaksud dalam butir a perlu adanya kebijakan mutasi pegawai di UPT Pasar Bauntung Banjarbaru dengan surat keputusan UPT Pasar Bauntung Banjarbaru.</td>
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
                        <td>Peraturan Pemerintah Nomor 46 Tahun 2011 tentang Penilaian Prestasi Kerja Pegawai;</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td valign="top">3.</td>
                        <td>Undang-undang Republik Indonesia Nomor 13 tahun 2003 tentang Organisasi Perangkat Daerah;</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td valign="top">4.</td>
                        <td>Undang-undang Republik Indonesia Nomor 44 tahun 2009 tentang Pengelola Pasar;</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td valign="top">5.</td>
                        <td>Peraturan Daerah Provinsi Kalimantan Selatan Nomor 9 Tahun 2008 tentang Organisasi dan Tata Kerja Dinas Daerah Provinsi Kalimantan Selatan;</td>
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
                        <td colspan="3">Pegawai UPT Pasar Bauntung Banjarbaru tersebut dibawah ini:</td>
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
                        <td>Unit Kerja Lama</td>
                        <td>:</td>
                        <td><?= $row->namaDevisi ?></td>
                    </tr>
                    <tr>
                        <td valign="top"></td>
                        <td valign="top"></td>
                        <td colspan="3">Terhitung mulai tanggal <?= tgl_indo($row->tanggalMutasi) ?> dipindahkan ke Devisi <b><?= $row->namaDevisiTujuan ?></b></td>
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