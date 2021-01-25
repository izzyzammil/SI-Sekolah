<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Tambah Data Siswa</h2>
            <form action="/siswa/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="noInduk" class="col-sm-2 col-form-label">No Induk</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="noInduk" name="noInduk" autofocus value="<?= old('noInduk'); ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="NISN" class="col-sm-2 col-form-label">NISN</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="NISN" name="NISN" value="<?= old('NISN'); ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="namaSiswa" class="col-sm-2 col-form-label">Nama Siswa</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="namaSiswa" name="namaSiswa" value="<?= old('namaSiswa'); ?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="jenisKelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="jenisKelamin" name="jenisKelamin" value="<?= old('jenisKelamin'); ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tempatLahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="tempatLahir" name="tempatLahir" value="<?= old('tempatLahir'); ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tanggalLahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-6">
                        <input class="form-control" type="date" id="tanggalLahir" name="tanggalLahir" value="<?= old('tanggalLahir'); ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= old('alamat'); ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="namaIbu" class="col-sm-2 col-form-label">Nama Ibu</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="namaIbu" name="namaIbu" value="<?= old('namaIbu'); ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="namaAyah" class="col-sm-2 col-form-label">Nama Ayah</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="namaAyah" name="namaAyah" value="<?= old('namaAyah'); ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tanggalMasuk" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" id="tanggalMasuk" name="tanggalMasuk" value="<?= old('tanggalMasuk'); ?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="status" name="status" value="<?= old('status'); ?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                <br><br>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>