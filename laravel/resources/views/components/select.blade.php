@props([
    'label',
    'name',
    'options' => [],
    'placeholder' => '-- Select an Option --'
])

<div>
    <label
        for="{{ $name }}"
        class="block text-sm font-medium mb-2"
    >
        {{ $label }}
    </label>

    <select
        id="{{ $name }}"
        name="{{ $name }}"
        {{ $attributes->merge([
            'class' =>
            'w-full rounded-lg border border-stone-300 px-4 py-3 focus:ring-2 focus:ring-amber-600 focus:border-amber-600'
        ]) }}
    >

        <option value="">
            {{ $placeholder }}
        </option>

        @foreach($options as $value => $text)

            <option
                value="{{ $value }}"
                @selected(old($name) == $value)
            >
                {{ $text }}
            </option>

        @endforeach

    </select>

    @error($name)
        <p class="mt-1 text-sm text-red-500">
            {{ $message }}
        </p>
    @enderror

</div>
