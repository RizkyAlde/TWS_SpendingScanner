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
    Argon Dashboard - Free Dashboard for Bootstrap 4 by Creative Tim
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
  <style>
    .form-container {
      margin-top: 20px;
    }

    .image-preview {
      margin-top: 10px;
    }
  </style>
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
          <li class="nav-item active">
            <a class="nav-link active" href="scanner.php">
              <i class="ni ni-camera-compact text-pink"></i> Scanner
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="prediction.php">
              <i class="ni ni-sound-wave text-orange"></i> Prediction
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="history.php">
              <i class="ni ni-book-bookmark text-yellow"></i> History
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
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="scanner.php">Scanner</a>
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
      <!-- Form Input -->
      <div class="row form-container">
        <div class="col-md-6">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3 class="mb-0">Input Pengeluaran Manual</h3>
            </div>
            <div class="card-body">
              <?php
              // Database connection
              $servername = "localhost";
              $username = "root";
              $password = "";
              $dbname = "spending_scanner";

              // Create connection
              $conn = new mysqli($servername, $username, $password, $dbname);

              // Check connection
              if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }

              // Function to get the next ID
              function getNextID($conn, $tableName, $columnName)
              {
                $sql = "SELECT IFNULL(MAX($columnName), 0) + 1 AS next_id FROM $tableName";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                return $row['next_id'];
              }

              // Initialize variables
              $category_name = $product_name = $product_price = $date = "";
              $user_name = "Agus Hartono";
              $user_id = 1;

              // Handle form submission for manual input
              if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['manualSubmit'])) {
                $category_name = $_POST['category_name'];
                $product_name = $_POST['product_name'];
                $product_price = $_POST['product_price'];
                $date = $_POST['date'];

                // Get next IDs
                $receipt_id = getNextID($conn, "faktur", "receipt_id");
                $detail_id = getNextID($conn, "faktur_detail", "detail_id");

                // Ensure the date_id is unique by using auto_increment
                // Insert the date first and get the last insert ID
                $sql_date = "INSERT INTO date (date) VALUES ('$date')";
                if ($conn->query($sql_date) === TRUE) {
                  $date_id = $conn->insert_id;
                } else {
                  echo "Error: " . $sql_date . "<br>" . $conn->error;
                }

                // Get category_id
                $sql_category = "SELECT category_id FROM category WHERE category_name = '$category_name'";
                $result_category = $conn->query($sql_category);
                if ($result_category->num_rows > 0) {
                  $row_category = $result_category->fetch_assoc();
                  $category_id = $row_category['category_id'];
                } else {
                  // Insert new category if it doesn't exist
                  $category_id = getNextID($conn, "category", "category_id");
                  $sql_category_insert = "INSERT INTO category (category_id, category_name) VALUES ($category_id, '$category_name')";
                  $conn->query($sql_category_insert);
                }

                // Insert data into 'faktur' table
                $sql_faktur = "INSERT INTO faktur (receipt_id, user_id, date_id) VALUES ($receipt_id, $user_id, $date_id)";
                $conn->query($sql_faktur);

                // Insert data into 'faktur_detail' table
                $sql_faktur_detail = "INSERT INTO faktur_detail (detail_id, receipt_id, product_name, product_price, category_id) VALUES ($detail_id, $receipt_id, '$product_name', $product_price, $category_id)";
                $conn->query($sql_faktur_detail);

                echo "<div class='alert alert-success'>Data successfully inserted!</div>";
              }
              ?>
              <form enctype="multipart/form-data" method="post"
                action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <input type="hidden" name="manualSubmit" value="1">
                <div class="form-group">
                  <label for="category_name">Category</label>
                  <select class="form-control" id="category_name" name="category_name" required>
                    <option value="electronics">Electronics</option>
                    <option value="clothing">Clothing</option>
                    <option value="books">Books</option>
                    <option value="furniture">Furniture</option>
                    <option value="games">Games</option>
                    <option value="foods">Foods</option>
                    <option value="health">Health</option>
                    <option value="traffic">Traffic</option>
                    <option value="other">Other</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="product_name">Product Name</label>
                  <input type="text" class="form-control" id="product_name" name="product_name" required>
                </div>
                <div class="form-group">
                  <label for="product_price">Product Price</label>
                  <input type="number" class="form-control" id="product_price" name="product_price" required>
                </div>
                <div class="form-group">
                  <label for="date">Date</label>
                  <input type="date" class="form-control" id="date" name="date" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3 class="mb-0">Input Pengeluaran Scan</h3>
            </div>
            <div class="card-body">
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"
                enctype="multipart/form-data">
                <input type="hidden" name="scanSubmit" value="1">
                <div class="form-group">
                  <label for="receipt">Pilih File Struk Belanja:</label>
                  <input type="file" id="receipt" name="receipt" accept="image/*" required class="form-control"><br><br>
                  <label for="date">Pilih Tanggal:</label>
                  <input type="date" id="date" name="date" required class="form-control"><br><br>
                  <button type="submit" class="btn btn-primary">Unggah dan Parse</button>
                </div>
              </form>

              <?php
              // Koneksi ke database
              $koneksi = mysqli_connect("localhost", "root", "", "spending_scanner");
              if (mysqli_connect_errno()) {
                echo "Koneksi database gagal: " . mysqli_connect_error();
                exit();
              }

              if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['scanSubmit']) && isset($_FILES['receipt']) && $_FILES['receipt']['error'] === UPLOAD_ERR_OK) {
                // Path to temporary uploaded file
                $imagePath = $_FILES['receipt']['tmp_name'];

                try {
                  // Include Mindee's autoloader
                  require_once 'vendor/autoload.php';

                  // Replace 'YOUR_API_KEY' with your actual Mindee API key
                  $apiKey = 'eca862a4eeda1828fd362a2d1a9e2421';

                  // Initialize a new Mindee client
                  $mindeeClient = new Mindee\Client($apiKey);

                  // Load file from temporary location
                  $inputSource = $mindeeClient->sourceFromPath($imagePath);

                  // Parse the receipt image
                  $apiResponse = $mindeeClient->parse(Mindee\Product\Receipt\ReceiptV5::class, $inputSource);

                  // Debugging: Check API response
                  // echo "<pre>";
                  // print_r($apiResponse);
                  // echo "</pre>";
              
                  // Display the parsed receipt document
                  echo "<form action=\"\" method=\"post\">";
                  echo "<input type=\"hidden\" name=\"date\" value=\"" . htmlspecialchars($_POST['date']) . "\">"; // Hidden input for date
                  foreach ($apiResponse->document->inference->prediction->lineItems as $key => $lineItemsElem) {
                    //  echo "<p>Product Name: " . htmlspecialchars($lineItemsElem->description) . " | Total Amount: " . htmlspecialchars($lineItemsElem->totalAmount) . "</p>";
                    echo "<label for=\"product_name$key\">Product Name:</label>";
                    echo "<input type=\"text\" name=\"product_name[]\" id=\"product_name$key\" value=\"" . htmlspecialchars($lineItemsElem->description) . "\" class=\"form-control\">";
                    echo "<label for=\"product_price$key\">Total Amount:</label>";
                    echo "<input type=\"text\" name=\"product_price[]\" id=\"product_price$key\" value=\"" . htmlspecialchars($lineItemsElem->totalAmount) . "\" class=\"form-control\">";
                    echo "<label for=\"category_name$key\">Pilih Kategori:</label>";
                    echo "<select name=\"category_name[]\" id=\"category_name$key\" class=\"form-control\">";
                    echo "<option value=\"1\">electronics</option>";
                    echo "<option value=\"2\">clothing</option>";
                    echo "<option value=\"3\">books</option>";
                    echo "<option value=\"4\">furniture</option>";
                    echo "<option value=\"5\">games</option>";
                    echo "<option value=\"6\">foods</option>";
                    echo "<option value=\"7\">health</option>";
                    echo "<option value=\"8\">traffic</option>";
                    echo "<option value=\"9\">other</option>";
                    echo "</select>";
                    echo "<br><br>";
                  }
                  echo "<button type=\"submit\" name=\"addData\" class=\"btn btn-primary\">Tambahkan</button>";
                  echo "</form>";

                } catch (\Exception $e) {
                  // Handle any errors that occur during the parsing process
                  echo 'Error: ' . $e->getMessage();
                }
              } elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addData'])) {
                // Process form submission for adding data
                $user_id = 1; // Assuming user_id is always 1 for this example
              
                // Get the next date_id
                $result = mysqli_query($koneksi, "SELECT MAX(date_id) AS max_date_id FROM date");
                $row = mysqli_fetch_assoc($result);
                $next_date_id = $row['max_date_id'] + 1;

                // Insert new date
                $date = $_POST['date'];
                $stmt_date = mysqli_prepare($koneksi, "INSERT INTO date (date_id, date) VALUES (?, ?)");
                mysqli_stmt_bind_param($stmt_date, "is", $next_date_id, $date);
                mysqli_stmt_execute($stmt_date);
                mysqli_stmt_close($stmt_date);

                // Get the next receipt_id
                $result = mysqli_query($koneksi, "SELECT MAX(receipt_id) AS max_receipt_id FROM faktur");
                $row = mysqli_fetch_assoc($result);
                $next_receipt_id = $row['max_receipt_id'] + 1;

                // Insert new faktur
                $stmt_faktur = mysqli_prepare($koneksi, "INSERT INTO faktur (receipt_id, user_id, date_id) VALUES (?, ?, ?)");
                mysqli_stmt_bind_param($stmt_faktur, "iii", $next_receipt_id, $user_id, $next_date_id);
                mysqli_stmt_execute($stmt_faktur);
                mysqli_stmt_close($stmt_faktur);

                // Insert new faktur_detail
                foreach ($_POST['category_name'] as $key => $category_id) {
                  $product_name = $_POST['product_name'][$key];
                  $product_price = $_POST['product_price'][$key];

                  // Get the next detail_id
                  $result = mysqli_query($koneksi, "SELECT MAX(detail_id) AS max_detail_id FROM faktur_detail");
                  $row = mysqli_fetch_assoc($result);
                  $next_detail_id = $row['max_detail_id'] + 1;

                  $stmt_detail = mysqli_prepare($koneksi, "INSERT INTO faktur_detail (detail_id, receipt_id, product_name, product_price, category_id) VALUES (?, ?, ?, ?, ?)");
                  mysqli_stmt_bind_param($stmt_detail, "iisii", $next_detail_id, $next_receipt_id, $product_name, $product_price, $category_id);
                  mysqli_stmt_execute($stmt_detail);
                  mysqli_stmt_close($stmt_detail);
                }

                echo "<div class='alert alert-success'>Data successfully inserted!</div>";
              } else {
                // If no file has been uploaded or an error occurred during upload
                if (isset($_FILES['receipt']['error']) && $_FILES['receipt']['error'] !== UPLOAD_ERR_OK) {
                  echo 'Error: File upload error. Code: ' . $_FILES['receipt']['error'];
                }
              }
              ?>
            </div>
          </div>
        </div>




      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


  <!-- Footer -->
  <!-- Footer -->
  <footer class="footer">
    <div class="row align-items-center justify-content-xl-between">
      <div class="col-xl-6">
        <div class="copyright text-center text-xl-left text-muted">
        </div>
      </div>
      <div class="col-xl-6">
        <ul class="nav nav-footer justify-content-center justify-content-xl-end">
        </ul>
      </div>
    </div>
  </footer>
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