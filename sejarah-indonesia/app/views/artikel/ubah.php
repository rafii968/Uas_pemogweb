<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-warning text-dark">
            <h5>Edit Konten Sejarah</h5>
        </div>
        <div class="card-body">
            <form action="<?= BASEURL; ?>/artikel/prosesUbah" method="POST">
                <input type="hidden" name="id" value="<?= $data['artikel']['id']; ?>">
                <div class="mb-3">
                    <label class="form-label">Judul Artikel</label>
                    <input type="text" name="judul" class="form-control" value="<?= $data['artikel']['judul']; ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Era</label>
                    <select name="era" class="form-select">
                        <option value="Kolonialisme" <?= ($data['artikel']['era'] == 'Kolonialisme') ? 'selected' : ''; ?>>Kolonialisme</option>
                        <option value="Pergerakan Nasional" <?= ($data['artikel']['era'] == 'Pergerakan Nasional') ? 'selected' : ''; ?>>Pergerakan Nasional</option>
                        <option value="Pendudukan Jepang" <?= ($data['artikel']['era'] == 'Pendudukan Jepang') ? 'selected' : ''; ?>>Pendudukan Jepang</option>
                        <option value="Kemerdekaan" <?= ($data['artikel']['era'] == 'Kemerdekaan') ? 'selected' : ''; ?>>Kemerdekaan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Isi Konten Sejarah</label>
                    <textarea name="konten" class="form-control" rows="8" required><?= $data['artikel']['konten']; ?></textarea>
                </div>
                <button type="submit" class="btn btn-warning w-100">Simpan Perubahan</button>
                <a href="<?= BASEURL; ?>/artikel" class="btn btn-secondary w-100 mt-2">Batal</a>
            </form>
        </div>
    </div>
</div>