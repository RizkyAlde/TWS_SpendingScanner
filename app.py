from fastapi import FastAPI
import pandas as pd
from statsmodels.tsa.arima.model import ARIMA

# Load data
data = pd.read_csv("spending_scanner.csv")
data['date'] = pd.to_datetime(data['date'])

# Model Training
def train_model(data):
    # Assuming simple ARIMA model for demonstration
    model = ARIMA(data['product_price'], order=(5,1,0))
    model_fit = model.fit()
    return model_fit

model_fit = train_model(data)

# FastAPI instance
app = FastAPI()

# API Endpoint for Prediction
@app.post("/predict/")
def predict_price(receipt_id: int):
    # Fetch data for the given receipt_id
    receipt_data = data[data['receipt_id'] == receipt_id]
    # Predict using trained model
    prediction = model_fit.forecast(steps=len(receipt_data))
    return {"predicted_prices": list(prediction)}

# Run FastAPI server
if __name__ == "__main__":
    import uvicorn
    uvicorn.run(app, host="127.0.0.1", port=8000)
