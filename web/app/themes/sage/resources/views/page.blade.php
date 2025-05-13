@extends('layouts.app')

@section('content')
    @while (have_posts())
        @php the_post(); @endphp
        @include('partials.page-header')

        <x-hero title="Welcome to the Playground" subtitle="This is a reusable Blade component built with Tailwind CSS 4."
            bg="primary">
            <a href="#features"
                class="inline-block px-6 py-3 bg-white text-[#000] font-semibold rounded hover:bg-gray-100 transition">
                Learn More
            </a>
        </x-hero>

        <div class="react-counter"></div>

        <x-card title="Nowość: Detektyw w akcji"Ż
            excerpt="Rozwiąż zagadkę zaginionego listu i odkryj prawdę, zanim będzie za późno. Rozwiąż zagadkę zaginionego listu i odkryj prawdę, zanim będzie za późno."
            image="https://placehold.co/600x400" link="/case-file/123" variant="light" id="highlighted-card"
            data-track="featured" class="border-4 border-yellow-500" />

        @php
            $features = [
                ['title' => 'Szybkość', 'content' => 'Strona ładuje się w mniej niż 1s'],
                ['title' => 'Bezpieczeństwo', 'content' => 'Automatyczne aktualizacje i backupy'],
                ['title' => 'SEO', 'content' => 'Najlepsze praktyki SEO w standardzie'],
            ];
        @endphp

        <x-box-grid :items="$features" title="Dlaczego nasza platforma?">
            <p>* Dane są przykładowe, ale szybkość to fakt</p>
        </x-box-grid>

        <x-blog-section />

        @includeFirst(['partials.content-page', 'partials.content'])
    @endwhile
@endsection
