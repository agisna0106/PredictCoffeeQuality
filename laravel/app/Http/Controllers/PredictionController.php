<?php

namespace App\Http\Controllers;

use App\Services\MachineLearningService;
use Illuminate\Http\Request;

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

    }

    public function about()
    {
        return view('about');
    }
}
