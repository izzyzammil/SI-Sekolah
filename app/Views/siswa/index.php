<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <a href="/siswa/create" class="btn btn-primary mt-3">Tambah Data Siswa</a>
            <h1 class="mt-2">Daftar Siswa</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nomor Induk</th>
                        <th scope="col">NISN</th>
                        <th scope="col">Nama</th>
                        <th scope="col">JK</th>
                        <th scope="col">Tempat Lahir</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Nama Ibu</th>
                        <th scope="col">Nama Ayah</th>
                        <th scope="col">Tanggal Masuk</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($siswa as $s) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $s['noInduk']; ?></td>
                            <td><?= $s['NISN']; ?></td>
                            <td><?= $s['namaSiswa']; ?></td>
                            <td><?= $s['jenisKelamin']; ?></td>
                            <td><?= $s['tempatLahir']; ?></td>
                            <td><?= $s['tanggalLahir']; ?></td>
                            <td><?= $s['alamat']; ?></td>
                            <td><?= $s['namaIbu']; ?></td>
                            <td><?= $s['namaAyah']; ?></td>
                            <td><?= $s['tanggalMasuk']; ?></td>
                            <td><?= $s['status']; ?></td>
                        </tr>
                    <?php endforeach;  ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>