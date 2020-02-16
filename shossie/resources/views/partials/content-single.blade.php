<article class="article" id="article-animation" @php post_class() @endphp>
  <header class="title-wrapper">
    <h1 class="title">{!! get_the_title() !!}</h1>
  </header>
  @include('partials/entry-meta')
  @php the_content() @endphp
</article>
@php wcr_related_posts() @endphp