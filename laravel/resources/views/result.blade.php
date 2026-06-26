@extends('layouts.app')

@section('title','Prediction Result')

@section('content')

<div class="max-w-4xl mx-auto py-20">

    <x-card>

        <div class="text-center">

            <div class="text-7xl">

                ☕

            </div>

            <h1 class="mt-6 text-4xl font-bold">

                Prediction Result

            </h1>

            <div class="mt-10">

                <div class="text-stone-500">

                    Total Cup Points

                </div>

                <div
                    class="text-7xl font-bold text-amber-700 mt-2"
                >

                    {{ $prediction['total_cup_points'] }}

                </div>

            </div>

            <div class="mt-8">

                <x-badge
                    :grade="$prediction['quality_grade']"
                />

            </div>

        </div>

        <div class="mt-12">

            <x-progress
                :value="$prediction['total_cup_points']"
            />

        </div>

        <div
            class="mt-12 bg-stone-100 rounded-xl p-6"
        >

            <h2
                class="font-bold text-xl"
            >

                Recommendation

            </h2>

            <p
                class="mt-4 text-stone-600 leading-relaxed"
            >

                {{ $recommendation }}

            </p>

        </div>

        <div
            class="mt-12 text-center"
        >

            <a
                href="{{ route('predict.form') }}"
            >

                <x-button>

                    Predict Again

                </x-button>

            </a>

        </div>

    </x-card>

</div>

@endsection
