<div class="container mt-3">
    <div class="row">
        <div class="col-lg-6">
            <h3>Arsip Sejarah Indonesia</h3>
        </div>
    </div>
    
    <div class="row mt-3">
        <div class="col-md-6">
            <form action="<?= BASEURL; ?>/artikel/cari" method="post" class="d-flex mb-3">
                <input class="form-control me-2" type="search" name="keyword" id="keyword" placeholder="Cari era atau judul..." aria-label="Search" autocomplete="off">
                <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
            </form>
        </div>
    </div>

    <?php if($_SESSION['role'] == 'admin') : ?>
        <div class="row mb-3">
            <div class="col-md-6">
                <a href="<?= BASEURL; ?>/artikel/tambah" class="btn btn-success">
                    <i class="bi bi-plus"></i> Tambah Artikel Sejarah
                </a>
            </div>
        </div>
    <?php endif; ?>

    <div class="row">
        <?php if(empty($data['artikel'])) : ?>
            <div class="col-12">
                <div class="alert alert-warning">Data sejarah tidak ditemukan.</div>
            </div>
        <?php endif; ?>

        <?php foreach($data['artikel'] as $art) : ?>
        <div class="col-md-12 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h5 class="card-title text-primary"><?= $art['judul']; ?></h5>
                            <span class="badge bg-info text-dark mb-2"><?= $art['era']; ?></span>
                        </div>
                        <small class="text-muted">Penulis: <?= $art['penulis']; ?></small>
                    </div>
                    <p class="card-text text-secondary">
                        <?= substr($art['konten'], 0, 200); ?>...
                    </p>
                    
                    <div class="d-flex justify-content-end">
                        <a href="<?= BASEURL; ?>/artikel/detail/<?= $art['id']; ?>" class="btn btn-outline-primary btn-sm me-2">Baca Selengkapnya</a>
                        
                        <?php if($_SESSION['role'] == 'admin') : ?>
                            <a href="<?= BASEURL; ?>/artikel/ubah/<?= $art['id']; ?>" class="btn btn-warning btn-sm me-2">Edit</a>
                            
                            <a href="<?= BASEURL; ?>/artikel/hapus/<?= $art['id']; ?>" 
                               class="btn btn-danger btn-sm" 
                               onclick="return confirm('Apakah lo yakin mau hapus sejarah ini, coy?')">
                               Hapus
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <?php if(!isset($data['is_search'])) : ?> 
    <nav class="mt-4">
      <ul class="pagination justify-content-center">
        <li class="page-item <?= ($data['current_page'] <= 1) ? 'disabled' : ''; ?>">
            <a class="page-link" href="<?= BASEURL; ?>/artikel/index/<?= $data['current_page'] - 1; ?>">Previous</a>
        </li>

        <?php for($i=1; $i<=$data['total_page']; $i++) : ?>
            <li class="page-item <?= ($i == $data['current_page']) ? 'active' : ''; ?>">
                <a class="page-link" href="<?= BASEURL; ?>/artikel/index/<?= $i; ?>"><?= $i; ?></a>
            </li>
        <?php endfor; ?>

        <li class="page-item <?= ($data['current_page'] >= $data['total_page']) ? 'disabled' : ''; ?>">
            <a class="page-link" href="<?= BASEURL; ?>/artikel/index/<?= $data['current_page'] + 1; ?>">Next</a>
        </li>
      </ul>
    </nav>
    <?php endif; ?>
</div>