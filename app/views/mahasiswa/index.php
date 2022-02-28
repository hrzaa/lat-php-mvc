<div class="container">
    <div class="row">
        <div class="col">
            <h3>Daftar mahasiswa</h3>

            <?php foreach ($data['mhs'] as $mhs) : ?>
                <ul>
                    <li><?= $mhs['nama']; ?></li>
                    <li><?= $mhs['nim']; ?></li>
                    <li><?= $mhs['email']; ?></li>
                    <li><?= $mhs['jurusan']; ?></li>
                </ul>
            <?php endforeach; ?>


        </div>
    </div>
</div>