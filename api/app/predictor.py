from pathlib import Path

import joblib
import pandas as pd


# ===============================
# Load Model
# ===============================

MODEL_PATH = Path(__file__).resolve().parent.parent / "model" / "coffee_model.pkl"

model = joblib.load(MODEL_PATH)


# ===============================
# Helper
# ===============================

def get_altitude_category(altitude: float):
    if altitude < 1000:
        return "low"
    elif altitude < 1500:
        return "medium"
    elif altitude < 2000:
        return "high"
    else:
        return "very_high"
    

def get_quality_grade(score: float):

    if score >= 90:
        return "Outstanding"

    elif score >= 85:
        return "Excellent"

    elif score >= 80:
        return "Very Good"

    elif score >= 75:
        return "Good"

    else:
        return "Below Specialty"


# ===============================
# Prediction
# ===============================

def predict(data):
    """
    data berupa dictionary dari FastAPI
    """

    df = pd.DataFrame([{
        "Species": data["species"],
        "Country.of.Origin": data["country_of_origin"],
        "Region": data["region"],
        "Variety": data["variety"],
        "Processing.Method": data["processing_method"],

        "Number.of.Bags": data["number_of_bags"],

        "Aroma": data["aroma"],
        "Flavor": data["flavor"],
        "Aftertaste": data["aftertaste"],
        "Acidity": data["acidity"],
        "Body": data["body"],
        "Balance": data["balance"],
        "Uniformity": data["uniformity"],
        "Clean.Cup": data["clean_cup"],
        "Sweetness": data["sweetness"],
        "Cupper.Points": data["cupper_points"],

        "Moisture": data["moisture"],

        "Category.One.Defects": data["category_one_defects"],
        "Quakers": data["quakers"],
        "Category.Two.Defects": data["category_two_defects"],

        "Color": data["color"],

        "altitude_mean_meters": data["altitude"],

        "altitude_category": get_altitude_category(data["altitude"])
    }])

    prediction = float(model.predict(df)[0])

    return {
        "total_cup_points": round(prediction, 2),
        "quality_grade": get_quality_grade(prediction)
    }