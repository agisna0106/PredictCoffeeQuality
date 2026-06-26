<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('predictions', function (Blueprint $table) {
            $table->id();
            $table->string('species');
            $table->string('country_of_origin');
            $table->string('region');
            $table->string('variety');
            $table->string('processing_method');
            $table->string('color');
            $table->decimal('altitude',8,2);
            $table->integer('number_of_bags');
            $table->decimal('aroma',4,2);
            $table->decimal('flavor',4,2);
            $table->decimal('aftertaste',4,2);
            $table->decimal('acidity',4,2);
            $table->decimal('body',4,2);
            $table->decimal('balance',4,2);
            $table->decimal('uniformity',4,2);
            $table->decimal('clean_cup',4,2);
            $table->decimal('sweetness',4,2);
            $table->decimal('cupper_points',4,2);
            $table->decimal('moisture',4,2);
            $table->integer('quakers');
            $table->integer('category_one_defects');
            $table->integer('category_two_defects');
            $table->decimal('predicted_score',5,2);
            $table->string('quality_grade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('predictions');
    }
};
