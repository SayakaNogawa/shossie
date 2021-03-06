@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  <div class="flex-wrapper-archive">
        
        <div class="latest-post fast-loaded">
          <h1>{!! single_cat_title() !!}</h1>
        </div>
        <div class=" archive-posts">
          <div class="archive-grid-wrapper">
              @while (have_posts()) @php the_post() @endphp
              @include('partials.content-'.get_post_type())
            @endwhile
          </div>
        </div>
      </div>
      
@endsection