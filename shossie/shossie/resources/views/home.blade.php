@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  @include('partials.latest-archive')

  @include('partials.newsletter')
  <!-- Include popup body -->
  @include('partials.popup-')
  <!-- popup banner -->
  <!-- <div class="popup__banner">
    <a id="popping-trigger">
      <img class="popup__banner-img" src="@asset('images/readmagazine.jpg')" alt="newsletter-banner">
      <p>Stay Keep in Touch</p>
    </a>
  </div> -->
  <!-- Category archive wrapper -->
  @include('partials.category-archive')

@endsection