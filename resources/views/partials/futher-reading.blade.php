@php $related_post = new WP_Query(query_args()) @endphp
@if ($related_post->have_posts())
<article class="futher-reading">

  <div class="futher-reading__section-title">
    <h3 class="futher-reading__title">Futher reading</h3>
    <p></p>
    <div class="futher-reading__line">
      <svg 
        xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink"
        width="172.5px" height="172.5px">
      <path fill-rule="evenodd"  stroke="rgb(0, 0, 0)" stroke-width="1px" stroke-linecap="butt" stroke-linejoin="miter" fill="rgb(0, 0, 0)"
        d="M171.500,1.500 L1.500,171.500 "/>
     </svg>
    </div>
    <h4 class="futher-reading__subtitle">
      Recommended article<br >
      based on the article you red
    </h4>
  </div>

  <div class="futher-reading__posts-wrapper">
    @while($related_post->have_posts()) @php $related_post->the_post() @endphp
      <ul>
        <li class="futher-reading__post">
          @include('partials.entry-meta')
            @if (has_post_thumbnail())
              <div class="futher-reading__post_thumbnail">
                <a href="{{ the_permalink() }}" title="{{ the_title_attribute() }}">
                {{ the_post_thumbnail() }}
                </a>
              </div>
            @endif
            <h3 class="futher-reading__post-title" >
              <a href="{{ the_permalink() }}" title="{{ the_title_attribute() }}">
                {{ the_title() }}
              </a>
            </h3>
        </li>
      </ul>
    @endwhile
    @php wp_reset_postdata() @endphp
  </div>

</article>
@endif

