@props([
    'label',
    'name',
    'type' => 'text'
])

<div class="space-y-2">

    <label
        for="{{ $name }}"
        class="block text-sm font-medium text-stone-700"
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
            focus:border-amber-700 focus:ring-amber-700'
        ]) }}
    >

    @error($name)

        <p class="text-red-500 text-sm">

            {{ $message }}

        </p>

    @enderror

</div>
