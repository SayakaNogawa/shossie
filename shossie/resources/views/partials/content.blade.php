<article @php post_class() @endphp>
  <div class="post-container">
    <header>
      <a href="{{ get_permalink() }}">{!! the_post_thumbnail() !!}</a>
      @include('partials/entry-meta')
      <h2 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
    </header>
    <div class="entry-summary">
      @php the_excerpt() @endphp
    </div>
  </div>
</article>
