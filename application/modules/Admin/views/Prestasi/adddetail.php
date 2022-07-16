<?php
$ctrl = $this->uri->segment(1) . '/' . $this->uri->segment(2);
?>
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <!-- <li><a href="<?= base_url($linkin . '/add') ?>" class="btn btn-success">Tambah Data</a></li> -->
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Tambah Data Pegawai Berprestasi</h4>
    </div>
</div>
<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <form class="needs-validation" novalidate="" action="<?= base_url($ctrl . '/adddetailAction/' . $this->uri->segment(4)) ?>" method="post" enctype="multipart/form-data">

                    <div class="form-group mb-3">
                        <label for="validationCustom01">NIK Pegawai</label>
                        <input type="text" name="nik" id="nikid" onkeyup="getpegawai()" class="form-control" required>
                        <div class="invalid-feedback">
                            Harus di isi.
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Nama Pegawai</label>
                        <input type="text" name="namaPegawai" readonly id="namapegawai" class="form-control" required>
                        <div class="invalid-feedback">
                            Harus di isi.
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Tempat, Tanggal Lahir</label>
                        <input type="text" name="ttl" id="ttl" readonly class="form-control" required>
                        <div class="invalid-feedback">
                            Harus di isi.
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Pangkat/Golongan</label>
                        <input type="text" name="pangkatgoongan" id="pg" readonly class="form-control" required>
                        <div class="invalid-feedback">
                            Harus di isi.
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Devisi</label>
                        <input type="text" name="devisi" id="devisi" class="form-control" required>
                        <div class="invalid-feedback">
                            Harus di isi.
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Prestasi yang didapat</label>
                        <input type="text" name="prestasiDiraih" class="form-control" required>
                        <div class="invalid-feedback">
                            Harus di isi.
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Nilai Kerajinan</label>
                        <input type="text" name="kerajinan" class="form-control nilai" required>
                        <div class="invalid-feedback">
                            Harus di isi.
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Nilai Kehadiran</label>
                        <input type="text" name="kehadiran" class="form-control nilai" required>
                        <div class="invalid-feedback">
                            Harus di isi.
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Nilai Perilaku</label>
                        <input type="text" name="perilaku" class="form-control nilai" required>
                        <div class="invalid-feedback">
                            Harus di isi.
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Nilai Profesionalisme</label>
                        <input type="text" name="profesional" class="form-control nilai" required>
                        <div class="invalid-feedback">
                            Harus di isi.
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Nilai Tanggung Jawab</label>
                        <input type="text" name="tanggungJawab" class="form-control nilai" required>
                        <div class="invalid-feedback">
                            Harus di isi.
                        </div>
                    </div>
                    <button class="btn btn-sm btn-primary" type="submit">Simpan</button>
                    <a href="<?= base_url($ctrl) ?>" class="btn btn-sm btn-danger">Kembali</a>
                </form>

            </div> <!-- end card-body-->
        </div>
    </div>
    <div class="col-6">
        <div class="card">
            <div class="card-body p-4">
                <div class="media">
                    <div class="media-body">
                        <h5 class="mt-0 mb-2 font-size-16">Kriteria Angka Penilaian</h5>
                        <h2 class="mt-0 mb-2"> <span class="font-size-14"></span></h2>
                    </div>
                    <div class="align-self-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users icon-dual icon-lg">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                </div>

                <ul class="card-pricing-features text-muted border-top pt-2 mt-2 pl-0 list-unstyled">
                    <li><i class="uil uil-check text-success font-size-15 mr-1"></i>Menggunakan skala penilaian 0 - 10</li>
                    <li><i class="uil uil-check text-success font-size-15 mr-1"></i>Semakin baik kemampuan yang di tampilkan, semakain tinggi nilai yang di peroleh</li>
                    <!-- <li><i class="uil uil-check text-success font-size-15 mr-1"></i>5 > C</li>
                    <li><i class="uil uil-check text-success font-size-15 mr-1"></i>4 < D</li> -->
                    <!-- <li><i class="uil uil-check text-success font-size-15 mr-1"></i>24x7 Support</li> -->
                </ul>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nilai</th>
                            <th scope="col">Grade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>9 - 10</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>7 - 9</td>
                            <td>B</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>5 - 7</td>
                            <td>C</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>< 5</td>
                            <td>D</td>
                        </tr>
                    </tbody>
                </table>

                <div class="mt-5 text-center">
                    <!-- <button class="btn btn-soft-primary px-sm-4"><i class="uil uil-arrow-right mr-1"></i>Buy Now for $19</button> -->
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function getpegawai() {
        var nik = $("#nikid").val();
        $.ajax({
            url: '<?= base_url("Admin/Naikpangkat/ajaxpegawai") ?>',
            data: "nik=" + nik,
            success: function(data) {
                var json = data,
                    obj = JSON.parse(json);
                $('#namapegawai').val(obj.namapegawai);
                $('#ttl').val(obj.ttl);
                $('#pg').val(obj.pangkatgolongan);
                $('#devisi').val(obj.devisi);
            }
        })
    }
</script>