<header class="header">

  <div class="globalmenu">
    <div class="globalmenu__background--under"></div>
    <div class="globalmenu__background--middle"></div>
    <div class="globalmenu__background--top"></div>

    <div class="globalmenu__nav-wrapper">
      <nav class="globalmenu__nav-item-wrapper">
        <h1 class="globalmenu__nav-title">What's next?</h1>
        @php wp_nav_menu(array('theme_location' => 'Global Menu')) @endphp
      </nav>
      <div class="globalmenu__nav-about">
        <h1 class="globalmenu__nav-title">About Shossie</h1>
        <div class="globalmenu__info-container">
          <p class="globalmenu__info-discription">Shossie is an online magazine selebrate things what exist around us.</p>
          <p class="globalmenu__info">
            Happy to hear from you! Say hello to <a class="globalmenu__info-link" href="mailto:team@shossie.com" target="_blank">Shossie Team</a><br >
            Website is thoughtfully created by <a class="globalmenu__info-link" href="mailto:hello@iamsaya.com" target="_blank">SN</a><br >
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="header__top-header">
    <a href="http://shossie.com">
      <h1 class="header__logo">Shossie</h1>
    </a>
    <button class="hamburger hamburger--vortex" type="button">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>
  </div>

</header>

