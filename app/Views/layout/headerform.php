<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
	<link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet"> 
</head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <img src="img/logo.png" alt="" style="height: 70px;; width: 70px; margin-right:10px">
          <a class="navbar-brand fw-bold fs-1" href="#">DESA KALIPUTIH</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="/tampilkeluarga"> Daftar Keluarga</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/tampilpesan"> Daftar Pesan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/tampilberita">Buat Artikel Berita</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/tampilberkas">Surat Pengantar</a>
              </li>
              <li class="nav-item">
                        <a class="btn btn-danger" href="<?= base_url(); ?>/">Logout</a>
                    </li>
            </ul>
          </div>
        </div>
      </nav>