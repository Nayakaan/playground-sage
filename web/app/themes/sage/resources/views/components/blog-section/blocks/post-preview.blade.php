@php
    $title = $block['title'] ?? 'Brak tytułu';
    $excerpt = $block['excerpt'] ?? '';
    $image = $block['image']['url'] ?? null;
    $link = is_array($block['link'] ?? null) ? $block['link']['url'] ?? '#' : $block['link'] ?? '#';
@endphp

<article class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition mx-auto w-[320px]">
    @if ($image)
        <img src="{{ $image }}" alt="{{ $title }}" class="rounded mb-4" />
    @endif

    <h3 class="text-xl font-semibold mb-2">{{ $title }}</h3>

    <p class="text-sm text-gray-700 mb-4">{{ $excerpt }}</p>

    <a href="{{ $block['link']['url'] }}" target="{{ $block['link']['target'] }}" class="...">
        {{ $block['link']['title'] }}
    </a>
</article>
