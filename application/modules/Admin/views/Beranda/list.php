<?php
$this->db->where('username', $this->session->userdata('username'));
$user = $this->db->get('pegawai')->row();
?>
<div class="row">
    <div class="col">

        <div class="card">

            <div class="card-body p-0">

                <h6 class="card-title border-bottom p-3 mb-0 header-title">Selamat Datang <i> </i>di Website SIMPEG UPT Pasar Bauntung Banjarbaru</h6>

                <div class="inbox-rightbar p-4">
                    <div class="mt-2">
                        <hr>

                        <div class="media mb-4 mt-1">
                            <img class="d-flex mr-2 rounded-circle avatar-sm" src="<?= base_url() ?>assets/images/users/avatar-2.jpg" alt="Generic placeholder image">
                            <div class="media-body">
                                <span class="float-right">
                                    <p><span id="tanggalwaktu"></span></p>
                                </span>
                                <script>
                                    var tw = new Date();
                                    if (tw.getTimezoneOffset() == 0)(a = tw.getTime() + (7 * 60 * 60 * 1000))
                                    else(a = tw.getTime());
                                    tw.setTime(a);
                                    var tahun = tw.getFullYear();
                                    var hari = tw.getDay();
                                    var bulan = tw.getMonth();
                                    var tanggal = tw.getDate();
                                    var hariarray = new Array("Minggu,", "Senin,", "Selasa,", "Rabu,", "Kamis,", "Jum'at,", "Sabtu,");
                                    var bulanarray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "Nopember", "Desember");
                                    document.getElementById("tanggalwaktu").innerHTML = hariarray[hari] + " " + tanggal + " " + bulanarray[bulan] + " " + tahun;
                                </script>

                                <h6 class="m-0 font-14"><?= $user->namaPegawai ?></h6>
                                <small class="text-muted">NIP : <?= $user->noIndukKepegawaian ?></small>
                            </div>
                        </div>


                        <div class="text-muted">
                            <img src="<?= base_url() ?>assets/images/dashboard.jpg" class="mx-auto d-block" alt="...">
                            <br>
                            <p>Pasar Bauntung Banjarbaru keberadaannya sekitar tahun 1965 yang merupakan pasar tradisional atau pasar sejumput, pasar kaget yang di mana pedagangnya sekitar 20 orang. Pada tahun 1970 dan beriringan dengan dibentuknya Pemerintah Kota Banjarbaru di bawah Pemerintah Kabupaten Banjar Pasar Banjarbaru berkembang menjadi Pasar Kecamatan Banjarbaru yang dikelola dan dipimpin seorang Kepala Pasar.
                                Seiring dengan perkembangan jumlah pemduduk yang semakin banyak, cakupan pasar menjadi lebih besar dan luas. Pada tahun 1990 Pasar Banjarbaru dilakukan lagi renovasi dan pembangunan Toko-toko dan Los. Pada bulan Februari 2021 Pasar Bauntung Banjarbaru telah resmi dipindahkan ke tempat baru yang beralamat di Jl. RO Ulin, Loktabat Selatan, Kec. Banjarbaru Selatan, Kota Banjar Baru, Kalimantan Selatan. Pasar Bauntung berdiri diatas lahan seluas 3,9 HA dan luas bangunan 1,7 HA. Pasar Bauntung Banjarbaru ini memiliki Ruko ukuran 4x8 sebanyak 28 unit, Toko ukuran 3x6 sebanyak 133 unit, Toko ukuran 3x3 sebanyak 355 unit, Los Kering sebanyak 420 unit, dan Los Basah sebanyak 136 unit.
                            </p>
                        </div>

                        <hr>


                    </div> <!-- end reply-box -->
                </div> <!-- end media-body -->
            </div> <!-- end medi-->



        </div>
    </div>
</div>
</div>
</div>