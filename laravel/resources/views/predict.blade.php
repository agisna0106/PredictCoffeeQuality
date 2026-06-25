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
                        step="0.01"
                        />

                        <x-input
                        label="Number of Bags"
                        name="number_of_bags"
                        type="number"
                        />

                    </div>

                </x-card>

            </div>

            <div class="mt-8">

                <x-card>

                    <h2 class="text-2xl font-bold mb-6">

                    👃 Sensory Evaluation

                    </h2>

                    <div class="grid md:grid-cols-2 gap-6">

                        <x-input label="Aroma" name="aroma" type="number" step="0.01"/>

                        <x-input label="Flavor" name="flavor" type="number" step="0.01"/>

                        <x-input label="Aftertaste" name="aftertaste" type="number" step="0.01"/>

                        <x-input label="Acidity" name="acidity" type="number" step="0.01"/>

                        <x-input label="Body" name="body" type="number" step="0.01"/>

                        <x-input label="Balance" name="balance" type="number" step="0.01"/>

                        <x-input label="Uniformity" name="uniformity" type="number" step="0.01"/>

                        <x-input label="Clean Cup" name="clean_cup" type="number" step="0.01"/>

                        <x-input label="Sweetness" name="sweetness" type="number" step="0.01"/>

                        <x-input label="Cupper Points" name="cupper_points" type="number" step="0.01"/>

                    </div>

                </x-card>

            </div>

                <div class="mt-8">

                    <x-card>

                    <h2 class="text-2xl font-bold mb-6">

                    ⚠️ Quality Indicators

                    </h2>

                    <div class="grid md:grid-cols-2 gap-6">

                        <x-input
                        label="Moisture"
                        name="moisture"
                        type="number"
                        step="0.01"
                        />

                        <x-input
                        label="Quakers"
                        name="quakers"
                        type="number"
                        />

                        <x-input
                        label="Category One Defects"
                        name="category_one_defects"
                        type="number"
                        />

                        <x-input
                        label="Category Two Defects"
                        name="category_two_defects"
                        type="number"
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
