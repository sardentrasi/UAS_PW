<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bootstrap Navbar Sidebar - Fixed to Left or Right</title>
    <link rel="stylesheet"
          id="theme_link"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/materia/bootstrap.min.css"/>
    <link rel="stylesheet" href="navbar-fixed-right.min.css">
    <link rel="stylesheet" href="navbar-fixed-left.min.css">
    <link rel="stylesheet" href="docs.css">
    <script
            src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <script src="docs.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</head>

<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href>Menu</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="<?php echo base_url(
                  "pelayanan"
                ); ?>" class="nav-link"><h3>Pelayananan</h3></a>
            </li>
            <!-- <li class="nav-item">
                <a href="<?php echo base_url(
                  "pelayanan"
                ); ?>" class="nav-link">Loket</a>
            </li> -->
            
        </ul>
        
    </div>
</nav>

<div class="container">
<br>
    <div class="jumbotron">
        <h1 class="display-4">
            Aplikasi Antrian Menggunakan Codeigniter4
            <br>
        </h1>
        <p>
            <strong>
                
            </strong>
        </p>
    </div>
    

    <div class="card">
  <div class="card-header">
    <h4 style="text-align: center;">Antrian</h4>
  </div>
  <div class="card-body">
  <div class="card-deck">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Ambil Antrian</h5>
      <a href="<?php echo base_url(
        "antrian"
      ); ?>" class="btn btn-primary">Klik Disini</a>
      <p class="card-text"><small class="text-muted"></small></p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Nomor Antrian</h5>
      <a href="<?php echo base_url(
        "antrianno"
      ); ?>" class="btn btn-primary">Klik Disini</a>
      <p class="card-text"><small class="text-muted"></small></p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Loket Antrian</h5>
      <a href="<?php echo base_url(
        "loketpanggil"
      ); ?>" class="btn btn-primary">Klik Disini</a>
      <p class="card-text"><small class="text-muted"></small></p>
    </div>
  </div>
</div>
    
  </div>
</div>

    

</div>

</body>
</html>
