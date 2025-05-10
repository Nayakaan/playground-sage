@php
    $blocks = get_field('blocks') ?? [];
@endphp

<section class="py-12">
    <h2 class="text-3xl font-bold mb-8 text-center">Najnowsze wpisy</h2>

    @if (!empty($blocks))
        @foreach ($blocks as $block)
            @includeIf('components.blog-section.blocks.' . str_replace('_', '-', $block['acf_fc_layout']), [
                'block' => $block,
            ])
        @endforeach
    @else
        <p class="text-center text-gray-400">Brak wpisów do wyświetlenia.</p>
    @endif
</section>
