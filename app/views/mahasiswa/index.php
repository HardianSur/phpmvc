<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>

            <?php foreach ($data['mhs'] as $mhs) : ?>
                <ul>
                    <li>Nama : <?= $mhs['nama'] ?></li>
                    <li>nrp : <?= $mhs['nrp'] ?></li>
                    <li>email : <?= $mhs['email'] ?></li>
                    <li>jurusan : <?= $mhs['jurusan'] ?></li>
                </ul>
            <?php endforeach ?>

        </div>
    </div>
</div>