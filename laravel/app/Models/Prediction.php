<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prediction extends Model
{
    protected $fillable = [

        'species',

        'country_of_origin',

        'region',

        'variety',

        'processing_method',

        'color',

        'altitude',

        'number_of_bags',

        'aroma',

        'flavor',

        'aftertaste',

        'acidity',

        'body',

        'balance',

        'uniformity',

        'clean_cup',

        'sweetness',

        'cupper_points',

        'moisture',

        'quakers',

        'category_one_defects',

        'category_two_defects',

        'predicted_score',

        'quality_grade'

    ];
}
