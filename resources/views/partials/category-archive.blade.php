
<div class="bookshelf">
  <div class="bookshelf__inner">
    <div class="bookshelf__single">
        <img class="bopokshelf__image" src="@asset('images/illustration-biei-tree.png')">
        <h2 class="bookshelf__title--center">City Guide</h2>
        <p>Capturing scene of place, thoughtfully products, coffee shop guide and much more.</p>
    </div>
    <div class="bookshelf__columns">
        @php query_posts("cat=12&showposts=10&offset=1") @endphp
        @while (have_posts()) @php the_post() @endphp
        @include('partials.content-'.get_post_type())
        @endwhile
    </div>
  </div>
</div>