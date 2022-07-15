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
    <div class="col-12">
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