@props([
    'grade'
])

@php

$colors = [

    'Outstanding' => 'bg-purple-100 text-purple-700',

    'Excellent' => 'bg-green-100 text-green-700',

    'Very Good' => 'bg-blue-100 text-blue-700',

    'Good' => 'bg-yellow-100 text-yellow-700',

    'Below Specialty' => 'bg-red-100 text-red-700'

];

@endphp

<span

class="inline-flex px-5 py-2 rounded-full font-semibold
{{ $colors[$grade] ?? 'bg-gray-100 text-gray-700' }}"

>

{{ $grade }}

</span>
