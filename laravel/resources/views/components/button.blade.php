<button
    {{ $attributes->merge(['class' => 'bg-amber-700 hover:bg-amber-800 text-white font-semibold px-6 py-3 rounded-lg transition duration-200']) }}>
    {{ $slot }}
</button>
