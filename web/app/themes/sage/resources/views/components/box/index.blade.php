@props(['title', 'content' => null])

<div {{ $attributes->merge(['class' => 'rounded-lg p-6 shadow bg-white']) }}>
  <h3 class="text-lg font-semibold mb-2">{{ $title }}</h3>

  @if ($content)
    <p class="text-sm text-gray-700">{{ $content }}</p>
  @endif
</div>
