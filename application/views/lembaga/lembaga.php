<div class="cards" style="max-width: 1000px; margin-left: 120px;">
    <div class="row g-0">
        <div class="col-md-4">
            <?php foreach ($tb_lembaga as $deskripsi) : ?>
                <img src="<?= base_url('vendor/assets/image/') . $deskripsi['gambar']; ?>" class="img-fluid rounded-start text-center">
        </div>
    <?php endforeach; ?>
    <div class="col-md-8">
        <div class="card-body">
            <?php foreach ($tb_lembaga as $deskripsi) : ?>
                <!-- menampilkan data perkolom databse. isi sesuai dengan kolom pada tabel database -->
                <h5 class="card-title"><?= $deskripsi["nama_lembaga"]; ?></h5>
                <p class="card-text" style="text-align : justify"><?= $deskripsi['deskripsi']; ?></p>
                <p class="card-text">Kontak : <?= $deskripsi['kontak']; ?></p>
                <p class="card-text">Website : <a href="<?= $deskripsi['website'] ?>">
                        <span class="card-text"><?= $deskripsi['website'] ?></span>
                    </a>
                <?php endforeach; ?>
        </div>
    </div>
    </div>
</div>