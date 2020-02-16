<div class="bookshelf">
  <div class="bookshelf__inner">
    <div class="bookshelf__single">
      @if (have_posts()) @php the_post() @endphp
        @include('partials.content-'.get_post_type('numberposts=1'))
      @endif
    </div>
    <div class="bookshelf__columns">
      @while (have_posts()) @php the_post() @endphp
        @include('partials.content-'.get_post_type('numberposts=10&offset=1'))
      @endwhile
    </div>
  </div>
</div>