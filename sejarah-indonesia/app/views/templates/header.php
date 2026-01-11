<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container">
    <a class="navbar-brand" href="<?= BASEURL; ?>/home">RAFOLDIES media</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL; ?>/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL; ?>/artikel">Daftar Sejarah</a>
        </li>
      </ul>
      <span class="navbar-text me-3">
        Halo, <?= $_SESSION['username']; ?> (<?= $_SESSION['role']; ?>)
      </span>
      <a href="<?= BASEURL; ?>/auth/logout" class="btn btn-danger btn-sm">Logout</a>
    </div>
  </div>
</nav>