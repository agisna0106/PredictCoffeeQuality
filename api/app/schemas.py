from pydantic import BaseModel


class CoffeeInput(BaseModel):
    species: str
    country_of_origin: str
    region: str | None = None
    variety: str | None = None
    processing_method: str | None = None

    number_of_bags: int

    aroma: float
    flavor: float
    aftertaste: float
    acidity: float
    body: float
    balance: float
    uniformity: float
    clean_cup: float
    sweetness: float
    cupper_points: float

    moisture: float

    category_one_defects: int
    quakers: float
    category_two_defects: int

    color: str | None = None

    altitude: float