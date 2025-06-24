<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mebel Faiz Jaya</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
    <div class="container">
      <a class="navbar-brand" href="#">Mebel Faiz Jaya</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="hero text-white text-center d-flex align-items-center justify-content-center">
    <div>
      <h1 class="display-5">Selamat Datang di Mebel Faiz Jaya</h1>
      <p>Jl. Balai Desa, Kludan, Tanggulangin, Sidoarjo</p>
    </div>
  </header>

  <section class="container py-5">
    <div class="row text-center">
      <div class="col-md-4 mb-4">
        <img src="https://source.unsplash.com/300x200/?wood,furniture" class="img-fluid rounded shadow" alt="Produk">
        <h5 class="mt-3">Produk Unggulan</h5>
        <p>Lemari, kursi, meja, dan banyak lagi.</p>
      </div>
      <div class="col-md-4 mb-4">
        <img src="https://source.unsplash.com/300x200/?furniture,interior" class="img-fluid rounded shadow" alt="Kustom">
        <h5 class="mt-3">Kustom Sesuai Pesanan</h5>
        <p>Kami menerima pembuatan mebel sesuai desain Anda.</p>
      </div>
      <div class="col-md-4 mb-4">
        <img src="https://source.unsplash.com/300x200/?carpenter,workshop" class="img-fluid rounded shadow" alt="Kualitas">
        <h5 class="mt-3">Bahan Berkualitas</h5>
        <p>Menggunakan kayu pilihan dan tenaga ahli berpengalaman.</p>
      </div>
    </div>
  </section>

  <footer class="bg-dark text-white text-center py-3">
    &copy; <?= date('Y') ?> Mebel Faiz Jaya
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
