<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 mb-5">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Detail Peristiwa Sejarah</h3>
                </div>
                <div class="card-body">
                    <h2 class="display-6 text-dark"><?= $data['artikel']['judul']; ?></h2>
                    <div class="mb-3">
                        <span class="badge bg-info text-dark">Era: <?= $data['artikel']['era']; ?></span>
                        <span class="badge bg-secondary">Penulis: <?= $data['artikel']['penulis']; ?></span>
                    </div>
                    <hr>
                    <p class="lead" style="text-align: justify; line-height: 1.8;">
                        <?= nl2br($data['artikel']['konten']); ?>
                    </p>
                </div>
                <div class="card-footer bg-light text-end">
                    <a href="<?= BASEURL; ?>/artikel" class="btn btn-primary">Kembali ke Daftar</a>
                </div>
            </div>
        </div>
    </div>
</div>