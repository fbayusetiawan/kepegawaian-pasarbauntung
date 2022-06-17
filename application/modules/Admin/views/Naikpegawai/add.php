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
        <h4 class="mb-1 mt-0"><?= $title ?></h4>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form class="needs-validation" novalidate="" action="<?= base_url($ctrl . '/addAction') ?>" method="post" enctype="multipart/form-data">

                    <div class="form-group mb-3">
                        <label for="validationCustom01">NIK</label>
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
                        <label for="validationCustom01">Status Sekarang</label>
                        <input type="text" name="sekpeg" id="sekpeg" readonly class="form-control" required>
                        <div class="invalid-feedback">
                            Harus di isi.
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Menjadi </label>
                        <?= form_dropdown('statusKepegawaian', fd_kepegawaian(), '', 'class="form-control"') ?>
                        <div class="invalid-feedback">
                            Harus diisi!
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Tanggal Ditetapkan</label>
                        <input type="date" name="tanggalDitetapkan" id="validationCustom01" class="form-control" required>
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
            url: '<?= base_url("Admin/Naikpegawai/ajaxpegawai") ?>',
            data: "nik=" + nik,
            success: function(data) {
                var json = data,
                    obj = JSON.parse(json);
                $('#namapegawai').val(obj.namapegawai);
                $('#ttl').val(obj.ttl);
                $('#sekpeg').val(obj.sekpeg);
                // $('#devisi').val(obj.devisi);
                console.log(obj)
            }
        })
    }
</script>