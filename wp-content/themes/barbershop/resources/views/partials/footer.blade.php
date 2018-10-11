<footer class="content-info">
  <div class="container">
    <div class="row">

      <div class="col-12 col-lg-2 footer-icon-container">
        @if($footer_icon = get_field('footer_icon','option'))
          <img class="footer-icon" src="{{ $footer_icon['url'] }}">
        @endif
      </div>

      <div class="col-12 col-lg-3">
        <span class="title p1">Contact:</span>
        {!! get_field('footer_contact_text', 'option') !!}
      </div>

      <div class="col-4 col-xs-4 col-lg-2">
        <span class="title p1">Page:</span>
        @if (has_nav_menu('footer_menu_1'))
          {!! wp_nav_menu(['theme_location' => 'footer_menu_1', 'menu_class' => 'nav']) !!}
        @endif
      </div>

      <div class="col-4 col-xs-4 col-lg-2">
        <span class="title p1">Various:</span>
        @if (has_nav_menu('footer_menu_2'))
          {!! wp_nav_menu(['theme_location' => 'footer_menu_2', 'menu_class' => 'nav']) !!}
        @endif
      </div>

      <div class="col-4 col-lg-3">
        <span class="title p1">Social:</span>
        @if (has_nav_menu('footer_menu_3'))
          {!! wp_nav_menu(['theme_location' => 'footer_menu_3', 'menu_class' => 'nav']) !!}
        @endif
      </div>

    </div>
  </div>
</footer>
