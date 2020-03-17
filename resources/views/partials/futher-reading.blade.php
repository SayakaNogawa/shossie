@php $related_post = new WP_Query(query_args()) @endphp
@if ($related_post->have_posts())
  @while($related_post->have_posts()) @php $related_post->the_post() @endphp
    <li class="futher-reading__post">
      <a class="futher-reading__post_link" href="{{ the_permalink() }}" title="{{ the_title_attribute() }}">
        @if (has_post_thumbnail())
          <div class="futher-reading__post_thumbnail">
            {{ the_post_thumbnail() }}
          </div>
        @endif
        <p class="futher-reading__post_category entry-meta__category">{{ the_category() }}</p>
        <h4 class="futher-reading__post_title">{{ the_title() }}</h4>
        <p>{{ the_excerpt() }}</p>
      </a>
    </li>
  @endwhile
  @php wp_reset_postdata() @endphp
@endif

