@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    
    <div class="container mx-auto px-4 py-8">
      <div class="max-w-4xl mx-auto">
        @includeFirst(['partials.content-page', 'partials.content'])
      </div>
    </div>
  @endwhile
@endsection