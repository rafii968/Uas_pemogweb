<div class="container">
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Sejarah Indonesia</h1>
            <p class="col-md-8 fs-4">Selamat datang di aplikasi arsip sejarah awal mula penjajahan hingga kemerdekaan.</p>
            <?php if($_SESSION['role'] == 'admin') : ?>
                <div class="alert alert-warning">Role: Admin (Akses CRUD Aktif)</div>
            <?php endif; ?>
        </div>
    </div>
</div>