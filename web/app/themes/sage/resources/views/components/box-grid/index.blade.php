@props(['items' => [], 'title' => null])

<section {{ $attributes->merge(['class' => 'my-12']) }}>
  @if ($title)
    <h2 class="text-2xl font-bold mb-6 text-center">{{ $title }}</h2>
  @endif

  <div class="grid gap-6 md:grid-cols-3">
    @foreach ($items as $item)
      <x-box 
        :title="$item['title'] ?? 'Brak tytułu'" 
        :content="$item['content'] ?? null"
        class="hover:bg-gray-50 transition"
      />
    @endforeach
  </div>

  @if ($slot->isNotEmpty())
    <div class="mt-6 text-sm text-center text-gray-400">
      {{ $slot }}
    </div>
  @endif
</section>
