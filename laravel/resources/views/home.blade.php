@extends('layouts.app')

@section('title', 'Home')

@section('content')

<section class="py-24">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-2 gap-16 items-center">

            {{-- Left Side --}}
            <div>

                <span class="inline-flex items-center rounded-full bg-amber-100 text-amber-800 px-4 py-2 text-sm font-medium">
                    ☕ Machine Learning Capstone
                </span>

                <h1 class="mt-6 text-5xl font-bold text-stone-800 leading-tight">

                    Coffee Quality Prediction
                    <span class="text-amber-700">
                        Using AI
                    </span>

                </h1>

                <p class="mt-6 text-lg text-stone-600 leading-relaxed">

                    Predict the quality of specialty coffee using
                    Machine Learning based on cupping attributes
                    from the Coffee Quality Institute (CQI) dataset.

                </p>

                <div class="mt-10 flex gap-4">

                    <a href="/predict">

                        <x-button>

                            Start Prediction

                        </x-button>

                    </a>

                    <a
                        href="/about"
                        class="px-6 py-3 rounded-lg border border-stone-300 hover:bg-stone-100 transition"
                    >

                        Learn More

                    </a>

                </div>

            </div>

            {{-- Right Side --}}

            <div>

                <x-card>

                    <div class="text-center">

                        <div class="text-7xl">

                            ☕

                        </div>

                        <h2 class="mt-4 text-2xl font-bold">

                            Specialty Coffee

                        </h2>

                        <p class="mt-4 text-stone-600">

                            Machine Learning predicts Total Cup Points
                            based on coffee sensory attributes.

                        </p>

                    </div>

                </x-card>

            </div>

        </div>

    </div>

</section>

<section class="pb-24">

    <div class="max-w-7xl mx-auto px-6">

        <h2 class="text-3xl font-bold text-center mb-12">

            Why Choose This Application?

        </h2>

        <div class="grid md:grid-cols-3 gap-8">

            <x-card>

                <div class="text-5xl mb-4">🤖</div>

                <h3 class="text-xl font-semibold">

                    Machine Learning

                </h3>

                <p class="mt-3 text-stone-600">

                    Built using Linear Regression to predict coffee quality.

                </p>

            </x-card>

            <x-card>

                <div class="text-5xl mb-4">☕</div>

                <h3 class="text-xl font-semibold">

                    Coffee Quality

                </h3>

                <p class="mt-3 text-stone-600">

                    Based on internationally recognized cupping attributes.

                </p>

            </x-card>

            <x-card>

                <div class="text-5xl mb-4">⚡</div>

                <h3 class="text-xl font-semibold">

                    Fast Prediction

                </h3>

                <p class="mt-3 text-stone-600">

                    Prediction results are generated in seconds through FastAPI.

                </p>

            </x-card>

        </div>

    </div>

</section>

@endsection
