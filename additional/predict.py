import pandas as pd
from statsmodels.tsa.arima.model import ARIMA
import mysql.connector
import sys

# Fungsi untuk mengambil data dari MySQL berdasarkan nama view
def fetch_data_from_mysql(view_name):
    # Koneksi ke database MySQL
    mydb = mysql.connector.connect(
        host="localhost",
        user="root",  # Ganti dengan username Anda
        password="",  # Ganti dengan password Anda
        database="spending_scanner"
    )

    # Membuat cursor
    cursor = mydb.cursor()

    # Query untuk mengambil data dari view
    query = f"SELECT date, total_product_price FROM {view_name}"

    # Melakukan eksekusi query
    cursor.execute(query)

    # Mengambil semua baris hasil query
    rows = cursor.fetchall()

    # Menutup cursor dan koneksi
    cursor.close()
    mydb.close()

    # Membuat DataFrame dari hasil query
    df = pd.DataFrame(rows, columns=['date', 'total_product_price'])

    # Mengonversi tipe data kolom 'total_product_price' menjadi numerik
    df['total_product_price'] = pd.to_numeric(df['total_product_price'], errors='coerce')

    return df

# Fungsi untuk melatih model ARIMA
def fit_arima_model(data):
    # Membuat model ARIMA dengan parameter p=2, d=1, q=2
    model = ARIMA(data, order=(2,1,2))
    
    # Melatih model ARIMA
    fitted_model = model.fit()
    
    return fitted_model

# Fungsi untuk memprediksi data menggunakan model ARIMA
def predict_future_with_arima(model, num_periods):
    # Melakukan prediksi untuk periode berikutnya
    forecast = model.forecast(steps=num_periods)
    
    return forecast

# Ambil input dari command line
start_date = sys.argv[1]
end_date = sys.argv[2]
category = sys.argv[3]

# Ambil data dari MySQL
data = fetch_data_from_mysql(category)

# Membuat model ARIMA
model = fit_arima_model(data['total_product_price'])

# Menghitung jumlah periode yang akan diprediksi
num_periods = (pd.to_datetime(end_date) - pd.to_datetime(start_date)).days + 1

# Melakukan prediksi
forecast = predict_future_with_arima(model, num_periods)

# Tampilkan hasil prediksi
for value in forecast:
    print(value)
