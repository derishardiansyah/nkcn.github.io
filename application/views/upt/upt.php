<div class="cards" style="max-width: 1000px; margin-left: 120px;">
    <div class="row g-0">
        <div class="col-md-4">
            <?php foreach ($tb_upt as $upt) : ?>
                <img src="<?= base_url('vendor/assets/image/') . $upt['gambar']; ?>" class="img-fluid rounded-start text-center">
        </div>
    <?php endforeach; ?>
    <div class="col-md-8">
        <div class="card-body">
            <?php foreach ($tb_upt as $upt) : ?>
                <!-- menampilkan data perkolom databse. isi sesuai dengan kolom pada tabel database -->
                <h5 class="card-title"><?= $upt["nama_upt"]; ?></h5>
                <p class="card-text" style="text-align : justify"><?= $upt['alamat']; ?></p>
                <p class="card-text">Provinsi : <?= $upt['provinsi']; ?></p>
                <p class="card-text">Kontak : <?= $upt['kontak']; ?></p>
                <p class="card-text">Website : <a href="<?= $upt['website'] ?>">
                        <span class="card-text"><?= $upt['website'] ?></span>
                    </a>
                <?php endforeach; ?>
        </div>
    </div>
    </div>
</div>