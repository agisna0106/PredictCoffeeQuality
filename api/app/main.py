from fastapi import FastAPI

from app.schemas import CoffeeInput
from app.predictor import predict
from app.responses import PredictionResponse

app = FastAPI(
    title="Coffee Quality Prediction API",
    description="API untuk memprediksi Total Cup Points kopi menggunakan Machine Learning.",
    version="1.0.0"
)


@app.get("/", tags=["System"])
def root():
    return {
        "message": "Coffee Quality Prediction API is running"
    }


@app.get("/health", tags=["System"])
def health():
    return {
        "status": "OK",
        "model": "coffee_model.pkl"
    }


@app.post("/predict", response_model=PredictionResponse, tags=["Prediction"])
def predict_quality(data: CoffeeInput):

    try:
        prediction = predict(data.model_dump())

        return {
            "success": True,
            "prediction": prediction
        }

    except Exception as e:
        raise HTTPException(
            status_code=500,
            detail=str(e)
        )
    
