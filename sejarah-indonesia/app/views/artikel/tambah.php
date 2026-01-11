<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5>Tambah Konten Sejarah</h5>
        </div>
        <div class="card-body">
            <form action="<?= BASEURL; ?>/artikel/simpan" method="POST">
                <div class="mb-3">
                    <label class="form-label">Judul Artikel</label>
                    <input type="text" name="judul" class="form-control" placeholder="Contoh: Peristiwa Rengasdengklok" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Era</label>
                    <select name="era" class="form-select">
                        <option value="Kolonialisme">Kolonialisme</option>
                        <option value="Pergerakan Nasional">Pergerakan Nasional</option>
                        <option value="Pendudukan Jepang">Pendudukan Jepang</option>
                        <option value="Kemerdekaan">Kemerdekaan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Isi Konten Sejarah</label>
                    <textarea name="konten" class="form-control" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Simpan Artikel</button>
                <a href="<?= BASEURL; ?>/artikel" class="btn btn-secondary w-100 mt-2">Batal</a>
            </form>
        </div>
    </div>
</div>