@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')

    <x-hero 
      title="Welcome to the Playground" 
      subtitle="This is a reusable Blade component built with Tailwind CSS 4." 
      bg="primary"
    >
      <a href="#features" class="inline-block px-6 py-3 bg-white text-[#000] font-semibold rounded hover:bg-gray-100 transition">
        Learn More
      </a>
    </x-hero>

    @includeFirst(['partials.content-page', 'partials.content'])
  @endwhile
@endsection
