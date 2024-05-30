<?php
// Menghubungkan ke database
$koneksi = mysqli_connect("localhost", "root", "", "spending_scanner");

// Memeriksa koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}

$month = $_GET['month'];

// Mengatur bulan dan tahun berdasarkan permintaan
if ($month == 'this_month') {
    $month = date('m');
    $year = date('Y');
} else if ($month == 'last_month') {
    $month = date('m', strtotime('-1 month'));
    $year = date('Y', strtotime('-1 month'));
}

// Mengambil data pengeluaran harian untuk bulan yang diminta
$query = "SELECT DAY(date) as day, SUM(product_price) as total_price FROM report WHERE MONTH(date) = '$month' AND YEAR(date) = '$year' GROUP BY DAY(date)";
$result = mysqli_query($koneksi, $query);

$data = array_fill(1, 31, 0); // Inisialisasi array dengan 31 hari

while ($row = mysqli_fetch_assoc($result)) {
    $day = $row['day'];
    $total_price = $row['total_price'];
    $data[$day] = $total_price;
}

echo json_encode(array_values($data));

// Menutup koneksi
mysqli_close($koneksi);
?>
