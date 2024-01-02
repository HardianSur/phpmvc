<div class="container mt-5">
    <div class="row">
        <div class="col-6">

            <div class="row">
                <div class="col-lg-6">
                    <?php Flasher::flash(); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-6">
                    <button type="button" class="btn btn-primary mb-4 tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                        Tambah Data Mahasiswa
                    </button>
                </div>
            </div>

            <div class="row mt-3">
                <form action="<?= BASEURL ?>/mahasiswa/cari" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari Mahasiswa" aria-describedby="button-addon2" name="keyword" id="keyword" autocomplete="off">
                        <button class="btn btn-primary" type="submit" id="cari">Cari</button>
                    </div>
                </form>
            </div>

            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item "><?= $mhs['nama'] ?>
                        <a href="<?= BASEURL ?> /mahasiswa/hapus/<?= $mhs['id'] ?>" class="badge text-bg-danger float-end ms-1" onclick="return confirm('Anda Yakin Akan Menghapus Mahasiswa Ini?')">hapus</a>
                        <a href="<?= BASEURL ?> /mahasiswa/ubah/<?= $mhs['id'] ?>" class="badge text-bg-success float-end ms-1 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id'] ?>">Ubah</a>
                        <a href="<?= BASEURL ?> /mahasiswa/detail/<?= $mhs['id'] ?>" class="badge text-bg-primary float-end">detail</a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Mahasiswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>/mahasiswa/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>

                    <div class="mb-3">
                        <label for="NRP" class="form-label">NRP</label>
                        <input type="number" class="form-control" id="nrp" name="nrp">
                    </div>

                    <div class="mb-3">
                        <label for="Email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <select class="form-select" aria-label="Default select example" name="jurusan" id='jurusan'>
                        <option selected disabled>Open this select menu</option>
                        <option value="Informatika">Informatika</option>
                        <option value="Teknik Mesin">Teknik Mesin</option>
                        <option value="Kehutanan">Kehutanan</option>
                    </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>