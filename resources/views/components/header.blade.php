<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bs.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <title>Website Resmi SMKN 4 Tasikmalaya</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  </head>
  <body>


    <!--NAVBAR-->
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="navbar navbar-expand-lg bg-body-tertiary my-4 shadow-lg rounded-3 navbar-light bg-light">
  <div class="container-fluid">
    <img src="profil/logo.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top me-3">
    <a class="navbar-brand" href="#">SMKN 4 Tasikmalaya</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-md-end">
        <li class="nav-item mx-4">
          <a class="nav-link {{ request()->is ("/") ? "active" : false}}" href="/">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is ("profile") ? "active" : false}} mx-3 " href="/profile">Profil Sekolah</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is ("eskul") ? "active" : false}} mx-3" href="/eskul">Ekstrakurikuler</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is ("galery") ? "active" : false}} mx-3" href="/galery">Galeri</a>
        </li>
        </ul>
      </ul>
    </div>
  </div>
</nav>
        </div>
      </div>