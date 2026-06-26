@props([
    'label',
    'name',
    'type' => 'text',
    'hint' => null
])

<div>

    <label
        for="{{ $name }}"
        class="block mb-2 text-sm font-medium text-stone-700"
    >
        {{ $label }}
    </label>

    <input
        id="{{ $name }}"
        name="{{ $name }}"
        type="{{ $type }}"
        value="{{ old($name) }}"

        {{ $attributes->merge([
            'class' =>
            'w-full rounded-lg border border-stone-300 px-4 py-3
            focus:ring-2 focus:ring-amber-600
            focus:border-amber-600'
        ]) }}
    >

    @if($hint)

        <p class="mt-2 text-xs text-stone-500">

            {{ $hint }}

        </p>

    @endif

    @error($name)

        <p class="mt-1 text-sm text-red-500">

            {{ $message }}

        </p>

    @enderror

</div>
