<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <style>
    .tes{
        margin-top: 210px;
    }
  </style>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand fw-bold fs-1" href="#">DESA KALIPUTIH</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto m-3 mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Profil Desa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link">Informasi Desa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link">Kontak</a>
              </li>
              <li class="nav-item">
                <a class="nav-link">Daftar Keluarga</a>
              </li>
              <li class="nav-item">
                <a class="nav-link">Admin</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


      <div class="m-4">
      <h1 class="text-center">Data Keluarga</h1>
      
     
          </div>
          <form class="m-4">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama Kepala Keluarga</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Nomor Kartu Keluarga</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Chek</button>
          </form>
      </div>
      <div class="tes">
      </div>
      <div class="card-footer text-center bg-primary text-white p-3 mt-5" style="margin-top: 100px;">
        &copy Sistem informasi desa kaliputih 2023
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>