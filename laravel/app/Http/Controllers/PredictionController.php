<?php

namespace App\Http\Controllers;

use App\Services\MachineLearningService;
use Illuminate\Http\Request;
use App\Models\Prediction;

class PredictionController extends Controller
{
    public function __construct(
        protected MachineLearningService $ml
    ) {}

    public function index()
    {
        return view('home', [
            'statistics' => $this->ml->getStatistics()
        ]);
    }

    public function predictForm()
    {
        return view('predict', [

            'species' => $this->ml->getSelectOptions('species'),

            'countries' => $this->ml->getSelectOptions('country'),

            'regions' => $this->ml->getSelectOptions('region'),

            'varieties' => $this->ml->getSelectOptions('variety'),

            'processingMethods' => $this->ml->getSelectOptions('processing_method'),

            'colors' => $this->ml->getSelectOptions('color')

        ]);
    }

    public function predict(Request $request)
    {
        $validated = $request->validate([

            'species' => 'required',

            'country_of_origin' => 'required',

            'region' => 'required',

            'variety' => 'required',

            'processing_method' => 'required',

            'color' => 'required',

            'altitude' => 'required|numeric',

            'number_of_bags' => 'required|integer',

            'aroma' => 'required|numeric',

            'flavor' => 'required|numeric',

            'aftertaste' => 'required|numeric',

            'acidity' => 'required|numeric',

            'body' => 'required|numeric',

            'balance' => 'required|numeric',

            'uniformity' => 'required|numeric',

            'clean_cup' => 'required|numeric',

            'sweetness' => 'required|numeric',

            'cupper_points' => 'required|numeric',

            'moisture' => 'required|numeric',

            'quakers' => 'required|integer',

            'category_one_defects' => 'required|integer',

            'category_two_defects' => 'required|integer',

        ]);

        $result = $this->ml->predict($validated);
        // dd($result);

        Prediction::create([
            ...$validated,
            'predicted_score' => $result['prediction']['total_cup_points'],
            'quality_grade' => $result['prediction']['quality_grade']
        ]);

        $recommendation = match ($result['prediction']['quality_grade']) {

            'Outstanding' =>

            'This coffee has exceptional quality and meets the highest specialty coffee standards.',

            'Excellent' =>

            'This coffee has excellent quality and is suitable for premium specialty coffee production.',

            'Very Good' =>

            'This coffee has very good quality and is recommended for specialty coffee markets.',

            'Good' =>

            'This coffee has good quality and is suitable for commercial coffee production.',

            default =>

            'This coffee needs quality improvement before entering the specialty coffee market.'

        };

        return view('result',[
            'prediction'=>$result['prediction'],
            'recommendation'=>$recommendation
        ]);
    }

    public function about()
    {
        return view('about');
    }
}
