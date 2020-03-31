<article class="posts" @php post_class() @endphp>

  <div class="posts__gird-container">
    <div class="posts__title">
      @include('partials/entry-meta')
      <h2 class="posts__header-title">{!! get_the_title() !!}</h2>
    </div>
    <div class="posts__content">{!! get_the_content() !!}</div>
  </div>

</article>

@include('partials.futher-reading')