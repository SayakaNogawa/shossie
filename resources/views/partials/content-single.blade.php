<article class="article" @php post_class() @endphp>

  <div class="article__gird-container">
    <div class="article__thumbnail">
      @php the_post_thumbnail() @endphp
    </div>
    <header class="article__header">
      @include('partials/entry-meta')
      <h1 class="article__header-title">{!! get_the_title() !!}</h1>
    </header>
  </div>

  <div class="article__grid">
    <div class="article__text">
    @php ob_start();
      the_content('Read the full post',true);
      $postOutput = preg_replace('/<img[^>]+./','', ob_get_contents());
      ob_end_clean();
      echo $postOutput; @endphp
    </div>
    <div class="article__img">
      @php preg_match_all("/(<img [^>]*>)/",get_the_content(),$matches,PREG_PATTERN_ORDER);
      for( $i=0; isset($matches[1]) && $i < count($matches[1]); $i++ ) {
          echo $matches[1][$i];} @endphp </div>
  </div>

</article>
  @php wcr_related_posts() @endphp
