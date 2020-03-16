<footer>
  <div class="footer-container">
    <div class="footer-child">
      <p class='discription'>
        Shossie is an online magazine selebrate things what exist around us.<br >
        Website designed and built by SN. </p>

        @include('partials.subscribe-')
    </div>

    <div class="footer-clild">
        @php wp_nav_menu(array('theme_location' => 'Footer Menu')) @endphp
    </div>
  </div>
</footer>