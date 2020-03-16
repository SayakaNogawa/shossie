@if (!empty($posts))
  <div class="futher-reading">
    <h3 class="futher-reading__section-title">Futher reading</h3>
    <ul class="futher-reading__posts">
      @foreach ($posts as $post) @php setup_postdata($post) @endphp
        <li class="futher-reading__post">
          <a class="futher-reading__post_link" href="{{ the_permalink() }}" title="{{ the_title_attribute() }}">
            @if (has_post_thumbnail())
              <div class="futher-reading__post_thumbnail">
                {{ get_the_post_thumbnail() }}
              </div>
            @endif
            <p class="futher-reading__post_category">{{ get_the_category() }}</p>
            <h4 class="futher-reading__post_title">{{ the_title() }}</h4>
            <p>{{ the_excerpt() }}</p>
          </a>
        </li>
      @endforeach
    </ul>
    <div class="clearfix"></div>
  </div>
@endif