@props(['title', 'excerpt' => null, 'image' => null, 'link' => null, 'variant' => 'light'])

@php
    $isDark = $variant === 'dark';

    $classes = implode(
        ' ',
        array_filter([
            'p-6 rounded-xl overflow-hidden transition hover:shadow-xl',
            $variant === 'dark' ? 'bg-primary text-white' : 'bg-white text-secondary border border-gray-200',
        ]),
    );
@endphp

<article {{ $attributes->merge(['class' => $classes]) }}>
    @if ($image)
        <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-48 object-cover rounded-md mb-4">
    @endif

    <h3 class="text-xl font-bold mb-2">{{ $title }}</h3>

    @if ($excerpt)
        <p class="text-sm text-opacity-90 mb-4">{{ $excerpt }}</p>
    @endif

    @if ($link)
        <a href="{{ $link }}" class="inline-block mt-auto text-sm font-semibold underline hover:no-underline">
            Read more →
        </a>
    @endif
</article>
