<?php
class Artikel_model {
    private $table = 'artikel';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllArtikel($limit, $offset) {
        $this->db->query("SELECT * FROM {$this->table} LIMIT :limit OFFSET :offset");
        $this->db->bind('limit', $limit);
        $this->db->bind('offset', $offset);
        return $this->db->resultSet();
    }

    public function countArtikel() {
        $this->db->query("SELECT COUNT(*) as total FROM {$this->table}");
        return $this->db->single()['total'];
    }
public function getArtikelById($id) {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
}
public function ubahDataArtikel($data) {
    $query = "UPDATE artikel SET 
                judul = :judul, 
                era = :era, 
                konten = :konten 
              WHERE id = :id";
    
    $this->db->query($query);
    $this->db->bind('judul', $data['judul']);
    $this->db->bind('era', $data['era']);
    $this->db->bind('konten', $data['konten']);
    $this->db->bind('id', $data['id']);

    $this->db->execute();
    return $this->db->rowCount();
}
    public function cariDataArtikel($keyword) {
        $query = "SELECT * FROM artikel WHERE judul LIKE :keyword OR era LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
    
    // Nanti tambahkan fungsi hapus & ubah di sini (CRUD) 
    public function tambahDataArtikel($data) {
    $query = "INSERT INTO artikel (judul, era, konten, penulis) VALUES (:judul, :era, :konten, :penulis)";
    $this->db->query($query);
    $this->db->bind('judul', $data['judul']);
    $this->db->bind('era', $data['era']);
    $this->db->bind('konten', $data['konten']);
    $this->db->bind('penulis', $_SESSION['username']);
    
    $this->db->execute();
    return $this->db->rowCount();
}

public function hapusDataArtikel($id) {
    $this->db->query("DELETE FROM artikel WHERE id=:id");
    $this->db->bind('id', $id);
    $this->db->execute();
    return $this->db->rowCount();
}
}