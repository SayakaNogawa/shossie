<article class="bookshelf__entry" @php post_class() @endphp>
  <div class="entry">
    <header>
      <a href="{{ get_permalink() }}">{!! the_post_thumbnail() !!}</a>
      <h2 class="entry__title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
    </header>
    <div class="entry__summary">
      @php the_excerpt() @endphp
    </div>
    @include('partials/entry-meta')
  </div>
</article>
