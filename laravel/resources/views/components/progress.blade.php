@props([
    'value'
])

<div class="w-full">

    <div class="flex justify-between mb-2">

        <span>

            Coffee Score

        </span>

        <span>

            {{ $value }}

        </span>

    </div>

    <div class="w-full bg-stone-200 rounded-full h-4">

        <div

            class="bg-amber-700 h-4 rounded-full"

            style="width: {{ $value }}%"

        >

        </div>

    </div>

</div>
