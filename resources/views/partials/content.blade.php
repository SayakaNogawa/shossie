<article class="bookshelf__entry" @php post_class() @endphp>
  <div class="entry">
    <header>
      <h2 class="entry__title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
      <a href="{{ get_permalink() }}" class="entry__thmbnail">{!! the_post_thumbnail() !!}</a>
    </header>
    @include('partials/entry-meta')
  </div>
</article>
