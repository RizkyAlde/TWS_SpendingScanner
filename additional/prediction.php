<!--

=========================================================
* Argon Dashboard - v1.1.2
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2020 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Spending Scanner - Prediction
  </title>
  <!-- Favicon -->
  <link href="../assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="../assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="../assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../assets/css/argon-dashboard.css?v=1.1.2" rel="stylesheet" />
</head>

<body class="">
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main"
        aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="../index.html">
        <img src="../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right"
            aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="../assets/img/theme/team-1-800x800.jpg
">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="../additional/profile.html" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <a href="../additional/profile.html" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Settings</span>
            </a>
            <a href="../additional/profile.html" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Activity</span>
            </a>
            <a href="../additional/profile.html" class="dropdown-item">
              <i class="ni ni-support-16"></i>
              <span>Support</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#!" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="../index.html">
                <img src="../assets/img/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main"
                aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search"
              aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="../index.php">
              <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="scanner.php">
              <i class="ni ni-camera-compact text-pink"></i> Scanner
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link active" href="prediction.php">
              <i class="ni ni-sound-wave text-orange"></i> Prediction
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="information.php">
              <i class="ni ni-book-bookmark text-yellow"></i> Information
            </a>
          </li>
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading text-muted">Documentation</h6>
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link" href="../additional/login.html">
              <i class="ni ni-key-25 text-info"></i> Login
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../additional/register.html">
              <i class="ni ni-circle-08 text-pink"></i> Register
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="prediction.php">Prediction</a>
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">

          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid mt--7">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3 class="mb-0"></h3>
            </div>
            <div class="card-body">
              <h1>ARIMA Prediction</h1>
              <?php
              // Cek apakah formulir sudah disubmit
              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Tetapkan start_date ke tanggal besok
                $start_date = date('Y-m-d', strtotime('tomorrow'));
                $end_date = $_POST['end_date'];
                $category = $_POST['category'];

                // Panggil script Python untuk melakukan prediksi
                $command = escapeshellcmd("python predict.py $start_date $end_date $category");
                $output = shell_exec($command);
                #echo "<pre>$output</pre>";
              
                // Tampilkan hasil prediksi pada halaman HTML
                // echo "<pre>$output</pre>";
              
                // Parsing output prediksi ke dalam bentuk array
                $predictions = explode("\n", $output);
                // Buat label untuk sumbu X (tanggal)
                $labels = [];
                $num_days = (strtotime($end_date) - strtotime($start_date)) / (60 * 60 * 24); // Hitung selisih hari
                for ($i = 0; $i <= $num_days; $i++) { // Tambahkan 1 untuk memperhitungkan hari terakhir
                  $labels[] = date('Y-m-d', strtotime("$start_date +$i day"));
                }
              }
              ?>
              <!-- Tambahkan elemen canvas untuk menampilkan grafik -->
              <canvas id="predictionChart"></canvas>
              <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
              <script>
                // Ambil data prediksi dari PHP
                var predictions = <?php echo json_encode($predictions); ?>;
                var labels = <?php echo json_encode($labels); ?>;

                // Buat dataset untuk grafik
                var data = {
                  labels: labels,
                  datasets: [{
                    label: 'Prediction',
                    data: predictions,
                    borderColor: 'rgb(75, 192, 192)',
                    tension: 0.1
                  }]
                };

                // Konfigurasi grafik
                var config = {
                  type: 'line',
                  data: data,
                };

                // Buat grafik menggunakan Chart.js
                var predictionChart = new Chart(
                  document.getElementById('predictionChart'),
                  config
                );
              </script>
              <h3>Input the criteria for prediction: </h3>
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label for="end_date">Predict until:</label>
                <input type="date" id="end_date" name="end_date" required><br><br>

                <label for="category">Category:</label>
                <select id="category" name="category" required>
                  <option value="electronics_spending">Electronics Spending</option>
                  <option value="clothing_spending">Clothing Spending</option>
                  <option value="books_spending">Books Spending</option>
                  <option value="furniture_spending">Furniture Spending</option>
                  <option value="games_spending">Games Spending</option>
                  <option value="foods_spending">Foods Spending</option>
                  <option value="health_spending">Health Spending</option>
                  <option value="traffic_spending">Traffic Spending</option>
                  <option value="other_spending">Other Spending</option>
                  <option value="all_spending">All Spending</option>
                  <!-- Tambahkan pilihan kategori lainnya sesuai kebutuhan -->
                </select><br><br>

                <input type="submit" value="Predict">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>



    <!--   Core   -->
    <script src="../assets/js/plugins/jquery/dist/jquery.min.js"></script>
    <script src="../assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!--   Optional JS   -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!--   Argon JS   -->
    <script src="../assets/js/argon-dashboard.min.js?v=1.1.2"></script>
    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
    <script>
      window.TrackJS &&
        TrackJS.install({
          token: "ee6fab19c5a04ac1a32a645abde4613a",
          application: "argon-dashboard-free"
        });
    </script>
</body>

</html>