@extends('layouts.app')

@section('content')
    @while (have_posts())
        @php(the_post())
        @include('partials.page-header')

        <x-hero title="Welcome to the Playground" subtitle="This is a reusable Blade component built with Tailwind CSS 4."
            bg="primary">
            <a href="#features"
                class="inline-block px-6 py-3 bg-white text-[#000] font-semibold rounded hover:bg-gray-100 transition">
                Learn More
            </a>
        </x-hero>

        <x-card title="Nowość: Detektyw w akcji"
            excerpt="Rozwiąż zagadkę zaginionego listu i odkryj prawdę, zanim będzie za późno."
            image="https://source.unsplash.com/random/400x300" link="/case-file/123" variant="dark" />


        @includeFirst(['partials.content-page', 'partials.content'])
    @endwhile
@endsection
