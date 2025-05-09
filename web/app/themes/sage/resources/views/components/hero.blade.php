<section class="bg-primary text-tertiary p-12 rounded-xl shadow-lg text-center">
  <h1 class="text-4xl font-bold mb-4">{{ $title }}</h1>

  @if ($subtitle)
    <p class="text-lg">{{ $subtitle }}</p>
  @endif

  @if ($slot->isNotEmpty())
    <div class="mt-6">
      {{ $slot }}
    </div>
  @endif
</section>
