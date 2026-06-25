from pydantic import BaseModel


class PredictionResult(BaseModel):
    total_cup_points: float
    quality_grade: str


class PredictionResponse(BaseModel):
    success: bool
    prediction: PredictionResult