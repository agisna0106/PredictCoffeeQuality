@extends('layouts.app')

@section('title', 'Prediction')

@section('content')

<div class="max-w-6xl mx-auto py-12 px-6">

    <div class="mb-10">

        <h1 class="text-4xl font-bold text-stone-800">

            Coffee Quality Prediction

        </h1>

        <p class="mt-2 text-stone-600">

            Fill in the coffee attributes below to predict the Total Cup Points.

        </p>

    </div>

    <form action="{{ route('predict.store') }}" method="POST">

        @csrf

        <x-card>

            <h2 class="text-2xl font-bold mb-6">

                ☕ Coffee Information

            </h2>

            <div class="grid md:grid-cols-2 gap-6">

                <x-select
                    label="Species"
                    name="species"
                    :options="$species"
                />

                <x-select
                    label="Country of Origin"
                    name="country_of_origin"
                    :options="$countries"
                />

                <x-select
                    label="Region"
                    name="region"
                    :options="$regions"
                />

                <x-select
                    label="Variety"
                    name="variety"
                    :options="$varieties"
                />

                <x-select
                    label="Processing Method"
                    name="processing_method"
                    :options="$processingMethods"
                />

                <x-select
                    label="Color"
                    name="color"
                    :options="$colors"
                />

            </div>

        </x-card>

        <div class="mt-8">

            <x-card>

                <h2 class="text-2xl font-bold mb-6">

                ⛰️ Farm Information

                </h2>

                    <div class="grid md:grid-cols-2 gap-6">

                        <x-input
                            label="Altitude (meters)"
                            name="altitude"
                            type="number"
                            placeholder="1500"
                            hint="Average farm altitude in meters above sea level (example: 1500)."
                            min="0"
                            step="0.01"
                        />

                        <x-input
                            label="Number of Bags"
                            name="number_of_bags"
                            type="number"
                            placeholder="100"
                            hint="Total number of coffee bags in this lot."
                            min="0"
                        />

                    </div>

                </x-card>

            </div>

            <div class="mt-8">
                <div class="mb-6 rounded-lg border border-blue-200 bg-blue-50 p-4">

                    <h3 class="font-semibold text-blue-800">
                        ℹ️ Sensory Evaluation Guide
                    </h3>

                    <p class="mt-2 text-sm text-blue-700">
                        Enter the cupping score for each sensory attribute.
                        All attributes use a score between <strong>0.00 and 10.00</strong>.
                        Higher values indicate better quality.
                    </p>

                </div>

                <x-card>

                    <h2 class="text-2xl font-bold mb-6">

                    👃 Sensory Evaluation

                    </h2>

                    <div class="grid md:grid-cols-2 gap-6">

                        <x-input
                            label="Aroma"
                            name="aroma"
                            type="number"
                            placeholder="8.25"
                            hint="Score from 0.00–10.00."
                            step="0.01"
                            min="0"
                            max="10"
                        />

                        <x-input
                            label="Flavor"
                            name="flavor"
                            type="number"
                            placeholder="8.25"
                            hint="Score from 0.00–10.00."
                            step="0.01"
                            min="0"
                            max="10"
                        />

                        <x-input
                            label="Aftertaste"
                            name="aftertaste"
                            type="number"
                            placeholder="8.25"
                            hint="Score from 0.00–10.00."
                            step="0.01"
                            min="0"
                            max="10"
                        />

                        <x-input
                            label="Acidity"
                            name="acidity"
                            type="number"
                            placeholder="8.25"
                            hint="Score from 0.00–10.00."
                            step="0.01"
                            min="0"
                            max="10"
                        />

                        <x-input
                            label="Body"
                            name="body"
                            type="number"
                            placeholder="8.25"
                            hint="Score from 0.00–10.00."
                            step="0.01"
                            min="0"
                            max="10"
                        />

                        <x-input
                            label="Balance"
                            name="balance"
                            type="number"
                            placeholder="8.25"
                            hint="Score from 0.00–10.00."
                            step="0.01"
                            min="0"
                            max="10"
                        />

                        <x-input
                            label="Uniformity"
                            name="uniformity"
                            type="number"
                            placeholder="10.00"
                            hint="Score from 0.00–10.00. Usually close to 10."
                            step="0.01"
                            min="0"
                            max="10"
                        />

                        <x-input
                            label="Clean Cup"
                            name="clean_cup"
                            type="number"
                            placeholder="10.00"
                            hint="Score from 0.00–10.00. Usually close to 10."
                            step="0.01"
                            min="0"
                            max="10"
                        />

                        <x-input
                            label="Sweetness"
                            name="sweetness"
                            type="number"
                            placeholder="10.00"
                            hint="Score from 0.00–10.00. Usually close to 10."
                            step="0.01"
                            min="0"
                            max="10"
                        />

                        <x-input
                            label="Cupper Points"
                            name="cupper_points"
                            type="number"
                            placeholder="8.50"
                            hint="Overall score given by the cupper (0.00–10.00)."
                            step="0.01"
                            min="0"
                            max="10"
                        />

                    </div>

                </x-card>

            </div>

            <div class="mt-8">
                <div class="mb-6 rounded-lg border border-yellow-200 bg-yellow-50 p-4">

                    <h3 class="font-semibold text-yellow-800">
                        ⚠️ Quality Indicator Guide
                    </h3>

                    <p class="mt-2 text-sm text-yellow-700">
                        These values describe physical coffee quality and defects.
                        Use decimal values for moisture and whole numbers for defect counts.
                    </p>

                </div>

                <x-card>

                    <h2 class="text-2xl font-bold mb-6">

                    ⚠️ Quality Indicators

                    </h2>

                    <div class="grid md:grid-cols-2 gap-6">

                        <x-input
                            label="Moisture"
                            name="moisture"
                            type="number"
                            placeholder="0.12"
                            hint="Moisture content in decimal form (example: 0.12 = 12%)."
                            step="0.01"
                            min="0"
                            max="1"
                        />

                        <x-input
                            label="Quakers"
                            name="quakers"
                            type="number"
                            placeholder="0"
                            hint="Number of immature (quaker) beans."
                            min="0"
                        />

                        <x-input
                            label="Category One Defects"
                            name="category_one_defects"
                            type="number"
                            placeholder="0"
                            hint="Number of primary defects."
                            min="0"
                        />

                        <x-input
                            label="Category Two Defects"
                            name="category_two_defects"
                            type="number"
                            placeholder="2"
                            hint="Number of secondary defects."
                            min="0"
                        />

                    </div>
                </x-card>
            </div>

            {{-- button --}}
            <div class="mt-10 text-center">

                <x-button
                type="submit"
                class="px-10"
                >
                Predict Coffee Quality
                </x-button>

            </div>
    </form>

</div>

@endsection
