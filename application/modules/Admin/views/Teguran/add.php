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
                        <label for="validationCustom01">Blok Pasar</label>
                        <input type="text" name="blok" id="validationCustom01" class="form-control" required>
                        <div class="invalid-feedback">
                            Harus di isi.
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Tanggal Teguran</label>
                        <input type="date" name="tanggalTeguran" id="validationCustom01" class="form-control" required>
                        <div class="invalid-feedback">
                            Harus di isi.
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Kesalahan</label>
                        <input type="text" name="kesalahan" id="validationCustom01" class="form-control" required>
                        <div class="invalid-feedback">
                            Harus di isi.
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Hukuman</label>
                        <input type="text" name="hukuman" id="validationCustom01" class="form-control" required>
                        <div class="invalid-feedback">
                            Harus di isi.
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Biaya Hukuman</label>
                        <input type="text" name="biaya" id="validationCustom01" class="form-control" required>
                        <div class="invalid-feedback">
                            Harus di isi.
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Biaya Terbilang</label>
                        <input type="text" name="terbilang" id="validationCustom01" class="form-control" required>
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