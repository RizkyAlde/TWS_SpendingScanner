<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Spending Scanner - Dashboard
  </title>
  <!-- Favicon -->
  <link href="./assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="./assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="./assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="./assets/css/argon-dashboard.css?v=1.1.2" rel="stylesheet" />
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
      <a class="navbar-brand pt-0" href="./index.html">
        <img src="./assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
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
                <img alt="Image placeholder" src="./assets/img/theme/team-1-800x800.jpg
">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="./additional/profile.html" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <a href="./additional/profile.html" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Settings</span>
            </a>
            <a href="./additional/profile.html" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Activity</span>
            </a>
            <a href="./additional/profile.html" class="dropdown-item">
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
              <a href="./index.html">
                <img src="./assets/img/brand/blue1.png">
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
          <li class="nav-item  active ">
            <a class="nav-link  active " href="./index.php">
              <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./additional/scanner.php">
              <i class="ni ni-camera-compact text-pink"></i> Scanner
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./additional/prediction.php">
              <i class="ni ni-sound-wave text-orange"></i> Prediction
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./additional/information.php">
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
            <a class="nav-link" href="./additional/login.html">
              <i class="ni ni-key-25 text-info"></i> Login
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./additional/register.html">
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
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./index.php">Dashboard</a>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">

        </form>
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->

        </div>
      </div>
    </div>
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-8 mb-5 mb-xl-0">
          <div class="card bg-gradient-default shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-light ls-1 mb-1">Overview</h6>
                  <h2 class="text-white mb-0">Visualisasi Pengeluaran</h2>
                </div>
                <div class="col">
                  <ul class="nav nav-pills justify-content-end">
                    <li class="nav-item" id="last-month-tab">
                      <a href="#" class="nav-link py-2 px-3">Bulan Lalu</a>
                    </li>
                    <li class="nav-item" id="this-month-tab">
                      <a href="#" class="nav-link py-2 px-3 active">Bulan Ini</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-body">
              <!-- Chart -->
              <div class="chart">
                <!-- Chart wrapper -->
                <canvas id="lineChart" class="chart-canvas"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-1 mb-1">Overview</h6>
                  <h2 class="mb-0">Total Pengeluaran</h2>
                </div>
              </div>
            </div>
            <div class="card-body">
              <!-- Chart -->
              <div class="chart">
                <?php
                // Koneksi ke database
                $koneksi = mysqli_connect("localhost", "root", "", "spending_scanner");

                // Periksa koneksi
                if (mysqli_connect_errno()) {
                  echo "Koneksi database gagal: " . mysqli_connect_error();
                  exit();
                }

                // Query untuk mengambil total product_price dari view report
                $query = "SELECT SUM(product_price) AS total_price FROM report";
                $result = mysqli_query($koneksi, $query);
                $row = mysqli_fetch_assoc($result);
                $total_price = $row['total_price'];

                // Tampilkan total product_price
                echo "<p style='font-size: 30px; color: #1b214a; font-weight: bold; text-align: center;'>" . number_format($total_price, 2) . "</p>";

                // Query untuk mengambil total product_price untuk bulan ini
                $query_this_month = "SELECT SUM(product_price) AS total_this_month FROM report WHERE MONTH(date) = MONTH(CURDATE()) AND YEAR(date) = YEAR(CURDATE())";
                $result_this_month = mysqli_query($koneksi, $query_this_month);
                $row_this_month = mysqli_fetch_assoc($result_this_month);
                $total_this_month = $row_this_month['total_this_month'];

                // Query untuk mengambil total product_price untuk bulan lalu
                $query_last_month = "SELECT SUM(product_price) AS total_last_month FROM report WHERE MONTH(date) = MONTH(CURDATE() - INTERVAL 1 MONTH) AND YEAR(date) = YEAR(CURDATE() - INTERVAL 1 MONTH)";
                $result_last_month = mysqli_query($koneksi, $query_last_month);
                $row_last_month = mysqli_fetch_assoc($result_last_month);
                $total_last_month = $row_last_month['total_last_month'];

                // Tampilkan total product_price
                echo "<p style='font-size: 18px; text-align: center;'>Total Pengeluaran Bulan Ini: " . number_format($total_this_month, 2) . "</p>";
                echo "<p style='font-size: 18px; text-align: center;'>Total Pengeluaran Bulan Lalu: " . number_format($total_last_month, 2) . "</p>";


                // Tutup koneksi
                mysqli_close($koneksi);
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-xl-8 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Riwayat Pengeluaran Terbaru</h3>
                </div>
                <div class="col text-right">
                  <a href="#!" class="btn btn-sm btn-primary">See all</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Receipt ID</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Price</th>
                    <th scope="col">Date</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  // Koneksi ke database
                  $koneksi = mysqli_connect("localhost", "root", "", "spending_scanner");

                  // Periksa koneksi
                  if (mysqli_connect_errno()) {
                    echo "Koneksi database gagal: " . mysqli_connect_error();
                    exit();
                  }

                  // Variabel untuk mengontrol halaman saat ini dan jumlah data per halaman
                  $page = isset($_GET['page']) ? $_GET['page'] : 1;
                  $limit = 5;
                  $start = ($page - 1) * $limit;

                  // Query untuk mengambil 10 data terbaru
                  $query = "SELECT * FROM report ORDER BY date DESC LIMIT $start, $limit";
                  $result = mysqli_query($koneksi, $query);

                  // Loop untuk menampilkan data ke dalam tabel HTML
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['receipt_id'] . "</td>";
                    echo "<td>" . $row['user_name'] . "</td>";
                    echo "<td>" . $row['category_name'] . "</td>";
                    echo "<td>" . $row['product_name'] . "</td>";
                    echo "<td>" . number_format($row['product_price'], 2) . "</td>";
                    echo "<td>" . $row['date'] . "</td>";
                    echo "</tr>";
                  }

                  // Tutup koneksi
                  mysqli_close($koneksi);
                  ?>
                </tbody>
              </table>

              <!-- Tombol navigasi -->
              <div class="row">
                <div class="col text-center">
                  <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                      <?php
                      // Koneksi ke database
                      $koneksi = mysqli_connect("localhost", "root", "", "spending_scanner");

                      // Periksa koneksi
                      if (mysqli_connect_errno()) {
                        echo "Koneksi database gagal: " . mysqli_connect_error();
                        exit();
                      }

                      // Hitung jumlah total data
                      $query_count = "SELECT COUNT(*) AS total FROM report";
                      $result_count = mysqli_query($koneksi, $query_count);
                      $row_count = mysqli_fetch_assoc($result_count);
                      $total_records = $row_count['total'];
                      $total_pages = ceil($total_records / $limit);

                      // Tombol "Previous"
                      if ($page > 1) {
                        echo "<li class='page'><a class='page-link' href='?page=" . ($page - 1) . "'><i class='fas fa-chevron-left'></i> Previous</a></li>";
                      } else {
                        echo "<li class='page disabled'><span class='page-link'><i class='fas fa-chevron-left'></i> Previous</span></li>";
                      }

                      // Tombol halaman
                      $start_page = max(1, $page - 2);
                      $end_page = min($total_pages, $start_page + 4);

                      for ($i = $start_page; $i <= $end_page; $i++) {
                        // Menentukan kelas CSS untuk nomor halaman saat ini
                        $active_class = ($i == $page) ? 'active' : '';

                        // Menerapkan warna abu-abu jika nomor halaman tidak aktif
                        $link_color = ($i == $page) ? '' : 'text-muted';

                        // Menampilkan nomor halaman dengan warna yang sesuai
                        echo "<li class='page-item $active_class'><a class='page-link $link_color' href='?page=$i'>$i</a></li>";
                      }

                      // Tombol "Next"
                      if ($page < $total_pages) {
                        echo "<li class='page'><a class='page-link' href='?page=" . ($page + 1) . "'>Next <i class='fas fa-chevron-right'></i></a></li>";
                      } else {
                        echo "<li class='page disabled'><span class='page-link'>Next <i class='fas fa-chevron-right'></i></span></li>";
                      }



                      // Tutup koneksi
                      mysqli_close($koneksi);
                      ?>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Kategori</h3>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <?php
              // Membuat koneksi ke database
              $koneksi = mysqli_connect("localhost", "root", "", "spending_scanner");

              // Memeriksa apakah koneksi berhasil
              if (!$koneksi) {
                die("Koneksi gagal: " . mysqli_connect_error());
              }

              // Query untuk mengambil data dari view spending_summary
              $query = "SELECT * FROM category_summary"; // Batasi hanya 6 kategori yang ditampilkan
              $result = mysqli_query($koneksi, $query);

              // Memeriksa apakah query berhasil dieksekusi
              if ($result) {
                ?>
                <div class="table-responsive" style="height: 350px; overflow-y: auto;">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">Nama Kategori</th>
                        <th scope="col">Total</th>
                        <th scope="col">Persen Keseluruhan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      // Mengambil setiap baris data dan menampilkannya dalam tabel
                      while ($row = mysqli_fetch_assoc($result)) {
                        // Extract data dari setiap baris
                        $category_name = $row['category_name'];
                        $total = $row['total_spending'];
                        $percentage = $row['spending_percentage'];
                        // Menampilkan baris tabel dengan data dinamis
                        echo "<tr>";
                        echo "<th scope='row'>$category_name</th>";
                        echo "<td>$total</td>";
                        echo "<td>";
                        echo "<div class='d-flex align-items-center'>";
                        echo "<span class='mr-2'>$percentage</span>";
                        echo "<div>";
                        echo "<div class='progress'>";
                        echo "<div class='progress-bar bg-gradient-danger' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='width: $percentage;'></div>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "</td>";
                        echo "</tr>";
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
                <?php
              } else {
                // Jika query gagal dieksekusi
                echo "Error: " . mysqli_error($koneksi);
              }

              // Menutup koneksi ke database
              mysqli_close($koneksi);
              ?>



            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">

          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core   -->
  <script src="./assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="./assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <script src="./assets/js/plugins/chart.js/dist/Chart.min.js"></script>
  <script src="./assets/js/plugins/chart.js/dist/Chart.extension.js"></script>
  <!--   Argon JS   -->

  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
  <script>
    $(document).ready(function () {
      var ctx = document.getElementById('lineChart').getContext('2d');
      var lineChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: Array.from({ length: 31 }, (_, i) => i + 1),
          datasets: [{
            label: '',
            data: [],
            borderColor: '#ECFCFC',
            borderWidth: 2,
            fill: false
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            },
            x: {
              title: {
                display: true,
                text: 'Hari'
              }
            }
          }
        }
      });

      function loadDataAndRefreshView(month) {
        $.ajax({
          url: 'fetch_data.php',
          method: 'GET',
          data: { month: month },
          success: function (data) {
            var parsedData = JSON.parse(data);
            lineChart.data.datasets[0].data = parsedData;
            lineChart.update();
          }
        });
      }

      // Load initial data for the current month
      loadDataAndRefreshView('this_month');

      // Event listener for "Bulan Lalu" button
      $('#last-month-tab').click(function (e) {
        e.preventDefault();
        $(this).addClass('active');
        $('#this-month-tab').removeClass('active');
        loadDataAndRefreshView('last_month');
      });

      // Event listener for "Bulan Ini" button
      $('#this-month-tab').click(function (e) {
        e.preventDefault();
        $(this).addClass('active');
        $('#last-month-tab').removeClass('active');
        loadDataAndRefreshView('this_month');
      });
    });
  </script>
</body>

</html>