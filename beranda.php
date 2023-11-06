<?php
session_start();
if (isset($_SESSION['email']) && isset($_SESSION['level'])) {
?>
  <!doctype html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Beranda</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
    <div class="container">
      <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">SIAKAD</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Akademik</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Pengumuman</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="logout.php">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav><br>
      <div class="row">
        <div class="col-md-3">
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
              MENU UTAMA
            </a>
            <a href="#" class="list-group-item list-group-item-action">Data Mahasiswa</a>
            <a href="#" class="list-group-item list-group-item-action">Data Dosen</a>
            <a href="#" class="list-group-item list-group-item-action">Data Mata Kuliah</a>
            <a href="#" class="list-group-item list-group-item-action">Data Kelas</a>
          </div><br>
        </div>
        <div class="col-md-9">
          <div class="card">
            <div class="card-header text-bg-primary">
              BERANDA
            </div>
            <div class="card-body">
              <h5 class="card-title">Selamat Datang Saudara <?php echo $_SESSION['nama_lengkap'] ?></h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.
                With supporting text below as a natural lead-in to additional content.
                With supporting text below as a natural lead-in to additional content.
                With supporting text below as a natural lead-in to additional content.
                With supporting text below as a natural lead-in to additional content.</p>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
              <a href="#" class="btn btn-primary">Selengkapnya..!</a>
            </div>
          </div>
        </div>
      </div><br>
      <div class="row">
        <div class="card">
          <div class="card-body text-center">
            <strong>Copyright &copy;2023 by Universitas Teknologi Mataram</strong>
          </div>
        </div>
      </div>
    </div>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>


  </html>
<?php
} else {
  echo "<script>alert('Silahkan Login Terlebih Dahulu');document.location.href='index.php'</script>";
}
