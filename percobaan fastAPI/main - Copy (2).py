from fastapi import FastAPI
from pydantic import BaseModel
from sklearn.linear_model import LinearRegression
import pandas as pd

# Inisialisasi aplikasi FastAPI
app = FastAPI()

# Model untuk input prediksi
class PredictionRequest(BaseModel):
    month: int
    year: int

# Fungsi untuk memperoleh data pengeluaran dari file CSV
def get_spending_data(category):
    filename = f"{category}.csv"
    df = pd.read_csv(filename)
    return df

# Fungsi untuk membuat prediksi menggunakan regresi linier
def make_prediction(X, y, month, year):
    model = LinearRegression()
    model.fit(X, y)
    prediction = model.predict([[month, year]])
    return prediction

# Endpoint untuk melakukan prediksi pengeluaran per kategori
@app.post("/predict/{category}")
async def predict_spending(category: str, request: PredictionRequest):
    # Dapatkan data pengeluaran dari file CSV
    df = get_spending_data(category)
    
    # Pisahkan fitur (bulan dan tahun) dan target (total pengeluaran)
    X = df[['month', 'year']]
    y = df['total_spending']
    
    # Lakukan prediksi untuk bulan dan tahun yang diberikan
    prediction = make_prediction(X, y, request.month, request.year)
    
    return {"predicted_spending": prediction[0]}

if __name__ == "__main__":
    import uvicorn
    uvicorn.run(app, host="0.0.0.0", port=8000)
