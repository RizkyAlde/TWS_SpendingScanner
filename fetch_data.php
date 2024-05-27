<?php
header('Content-Type: application/json');

// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "spending_scanner");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Mengambil total harga
$query_total_price = "SELECT SUM(product_price) AS total_price FROM report";
$result_total_price = mysqli_query($koneksi, $query_total_price);
$row_total_price = mysqli_fetch_assoc($result_total_price);
$total_price = $row_total_price['total_price'];

// Mengambil total harga untuk bulan ini
$query_this_month = "SELECT SUM(product_price) AS total_this_month FROM report WHERE MONTH(date) = MONTH(CURDATE()) AND YEAR(date) = YEAR(CURDATE())";
$result_this_month = mysqli_query($koneksi, $query_this_month);
$row_this_month = mysqli_fetch_assoc($result_this_month);
$total_this_month = $row_this_month['total_this_month'];

// Mengambil total harga untuk bulan lalu
$query_last_month = "SELECT SUM(product_price) AS total_last_month FROM report WHERE MONTH(date) = MONTH(CURDATE() - INTERVAL 1 MONTH) AND YEAR(date) = YEAR(CURDATE() - INTERVAL 1 MONTH)";
$result_last_month = mysqli_query($koneksi, $query_last_month);
$row_last_month = mysqli_fetch_assoc($result_last_month);
$total_last_month = $row_last_month['total_last_month'];

// Mengambil data pengeluaran terbaru
$query_recent = "SELECT * FROM report ORDER BY date DESC LIMIT 5";
$result_recent = mysqli_query($koneksi, $query_recent);
$recent_expenditures = [];
while ($row = mysqli_fetch_assoc($result_recent)) {
    $recent_expenditures[] = $row;
}

// Mengambil ringkasan kategori
$query_category = "SELECT * FROM category_summary";
$result_category = mysqli_query($koneksi, $query_category);
$category_summary = [];
while ($row = mysqli_fetch_assoc($result_category)) {
    $category_summary[] = $row;
}

// Mengambil data untuk chart bulan ini
$query_chart_this_month = "SELECT DATE_FORMAT(date, '%M') AS month, SUM(product_price) AS total FROM report WHERE YEAR(date) = YEAR(CURDATE()) AND MONTH(date) = MONTH(CURDATE()) GROUP BY DATE_FORMAT(date, '%M')";
$result_chart_this_month = mysqli_query($koneksi, $query_chart_this_month);
$chart_this_month = [];
while ($row = mysqli_fetch_assoc($result_chart_this_month)) {
    $chart_this_month[] = $row['total'];
}

// Mengambil data untuk chart bulan lalu
$query_chart_last_month = "SELECT DATE_FORMAT(date, '%M') AS month, SUM(product_price) AS total FROM report WHERE YEAR(date) = YEAR(CURDATE() - INTERVAL 1 MONTH) AND MONTH(date) = MONTH(CURDATE() - INTERVAL 1 MONTH) GROUP BY DATE_FORMAT(date, '%M')";
$result_chart_last_month = mysqli_query($koneksi, $query_chart_last_month);
$chart_last_month = [];
while ($row = mysqli_fetch_assoc($result_chart_last_month)) {
    $chart_last_month[] = $row['total'];
}

$response = [
    'total_price' => $total_price,
    'total_this_month' => $total_this_month,
    'total_last_month' => $total_last_month,
    'recent_expenditures' => $recent_expenditures,
    'category_summary' => $category_summary,
    'this_month_chart_data' => $chart_this_month,
    'last_month_chart_data' => $chart_last_month
];

echo json_encode($response);

mysqli_close($koneksi);
?>
