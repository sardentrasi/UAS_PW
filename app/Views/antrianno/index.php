<?php foreach ($antrian4 as $key => $data4) {
  $aa = $data4["antrian_id"];
} ?>
<?php foreach ($antrian5 as $key => $data5) {
  $bb = $data5["antrian_id"];
} ?>
<?php foreach ($antrian6 as $key => $data6) {
  $cc = $data6["antrian_id"];
} ?>
<?php foreach ($antrian7 as $key => $data7) {
  $dd = $data7["antrian_id"];
} ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Antrian</title>
    <link href="https://fonts.googleapis.com/css?family=Hind+Vadodara:400,700|Mukta:500,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url("dist/css/style.css"); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>
<body class="is-boxed has-animations">
    <div class="body-wrap boxed-container">
        <header class="site-header">
            <div class="container">
                <div class="site-header-inner">
                    <div class="brand header-brand">
                        <h1 class="m-0">
                            <a href="#">
                                    <title>Antrian</title>
                                    <defs>
                                        <linearGradient x1="0%" y1="100%" y2="0%" id="logo-a">
                                            <stop stop-color="#007CFE" stop-opacity="0" offset="0%"/>
                                            <stop stop-color="#007DFF" offset="100%"/>
                                        </linearGradient>
                                        <linearGradient x1="100%" y1="50%" x2="0%" y2="50%" id="logo-b">
                                            <stop stop-color="#FF4F7A" stop-opacity="0" offset="0%"/>
                                            <stop stop-color="#FF4F7A" offset="100%"/>
                                        </linearGradient>
                                    </defs>
                                    <g fill="none" fill-rule="evenodd">
                                        <rect fill="url(#logo-a)" width="32" height="32" rx="16"/>
                                        <rect fill="url(#logo-b)" x="16" width="32" height="32" rx="16"/>
                                    </g>
                                </svg>
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <section>
                <div class="container">
                    <div class="hero-inner">
                        <div class="hero-copy">
                        <br>
                            <a href="<?php echo base_url(
                              ""
                            ); ?>" class="btn btn-primary float-left mb-3 center">Home</a>  
                            <br>
                            <br>
                            <br>

                            <div class="card text-center bg-light">
  <div class="card-header" style="font-weight: bold;">
    Perhatian!
  </div>
  <div class="card-body">
  <h1 style="text-align: center;">Antrian Saat ini adalah</h1>
                             <h1 style="text-align: center;"><?php foreach (
                               $antrianlast
                               as $key => $data40
                             ) {
                               if ($data40["antrian_id"] == $aa) {
                                 echo "CS";
                               }
                               if ($data40["antrian_id"] == $bb) {
                                 echo "PGDN";
                               }
                               if ($data40["antrian_id"] == $cc) {
                                 echo "PB";
                               }
                               if ($data40["antrian_id"] == $dd) {
                                 echo "PNG";
                               }
                               echo $data40["antrian_id"];
                             } ?>
                             </h1>

  </div>
  <div class="card-footer text-muted">
    @2021
  </div>
</div>
                            
                        </div>

<!--     <div class="container">
        <?php if (!empty(session()->getFlashdata("success"))) { ?>
 
        <div class="alert alert-success">
            <?php echo session()->getFlashdata("success"); ?>
        </div>
             
        <?php } ?>
        <?php if (!empty(session()->getFlashdata("info"))) { ?>
 
        <div class="alert alert-info">
            <?php echo session()->getFlashdata("info"); ?>
        </div>
             
        <?php } ?>
 
        <?php if (!empty(session()->getFlashdata("warning"))) { ?>
 
        <div class="alert alert-warning">
            <?php echo session()->getFlashdata("warning"); ?>
        </div>
             
        <?php } ?>
    </div> -->

<br>
<br>
                    </div>
                </div>
            </section>

            <div class="container">
            <div class="row row-cols-1 row-cols-md-2">
  <div class="col mb-4">
    <div class="card bg-primary mb-3">
    <div class="card-header" style="text-align: center; font-weight: bold;">Antrian</div>
      <div class="card-body">
        <h5 class="card-title">Cutomer Service</h5>
        <p class="card-text">Antrian Saat ini CS <?php echo $aa; ?></p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card bg-success">
    <div class="card-header" style="text-align: center; font-weight: bold;">Antrian</div>
      <div class="card-body">
        <h5 class="card-title">Pengaduan</h5>
        <p class="card-text">Antrian Saat ini PG <?php echo $bb; ?></p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card bg-warning">
    <div class="card-header" style="text-align: center; font-weight: bold;">Antrian</div>
      <div class="card-body">
        <h5 class="card-title">Permohonan Baru</h5>
        <p class="card-text">Antrian Saat ini PB <?php echo $cc; ?></p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card bg-secondary">
    <div class="card-header" style="text-align: center; font-weight: bold;">Antrian</div>
      <div class="card-body">
        <h5 class="card-title">Perpanjangan</h5>
        <p class="card-text">Antrian Saat ini PNG<?php echo $dd; ?></p>
      </div>
    </div>
  </div>
</div>

            </div>            
        </main>

        <footer class="footer mt-auto py-3">
  <div class="container">
    <span class="text-muted">Aplikasi Antrian Dengan Codeigniter 4.</span>
  </div>
</footer>
    </div>

    <script src="<?php echo base_url("dist/js/main.min.js"); ?>"></script>
</body>
</html>
