<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-header">
            <?= $data['mhs']['nama'] ?>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><?= $data['mhs']['email'] ?></li>
            <li class="list-group-item"><?= $data['mhs']['jurusan'] ?></li>
        </ul>
        <div class="card-body">
            <a href="<?= BASEURL?>/mahasiswa" class="card-link">Kembali</a>
        </div>
    </div>
</div>